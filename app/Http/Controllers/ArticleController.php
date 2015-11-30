<?php
/**
 * Created by PhpStorm.
 * User: mjames
 * Date: 26/11/2015
 * Time: 08:19
 */

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Gate;
use App\Tag;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use DB;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $articles = Article::latest()->published()->simplePaginate(6);

        return view('articles.articles', compact('articles'));
    }

    public function create()
    {
        $user = Auth::user();

        if ($user->isStaff()) {

            $tags = \App\Tag::lists('name', 'id');

            return view('articles.create', compact('tags'));
        }
        else
        {
            session()->flash('flash_message_important', 'You are not permitted to do that!');
            return redirect('articles');
        }
    }

    public function store(ArticleRequest $request)
    {
        $user = Auth::user();
        $article = new Article($request->all());
        $article->user_id = $user->id;
        $article->save();
        $article->tags()->attach($request->input('tag_list'));
        Auth::user()->articles()->save($article);


        session()->flash('flash_message', 'Article Created!');
        return redirect('/articles');
    }

    public function show($id)
    {
        $user = Auth::user();
        $article = Article::published()->findOrFail($id);

        return view('articles.article', compact('article'));
    }

    public function edit(Request $request, $id)
    {
        $article = Article::published()->findOrFail($id);
        $tags = Tag::lists('name', 'id');

        return view ('articles.articleedit', compact('article', 'user_id', 'user', 'tags'));
    }

    public function update($id, ArticleRequest $request)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        $article->tags()->sync($request->input('tag_list'));
        session()->flash('flash_message', 'Article Updated!');
        return redirect('articles');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id)->delete();
        session()->flash('flash_message', 'Article Deleted!');
        return redirect('articles');
    }

}