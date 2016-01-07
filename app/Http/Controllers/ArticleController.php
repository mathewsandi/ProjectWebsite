<?php
/**
 * Created by PhpStorm.
 * User: mjames
 * Date: 26/11/2015
 * Time: 08:19
 */

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use App\User;
use Gate;
use App\Tag;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use DB;
use App\Point;
use \Cache;
use Illuminate\Support\Str;

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

        if ($user->can('create-post')) {

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
        $points = $user->points;
        $user->points = $points + 2;
        $user->save();

        session()->flash('flash_message', 'Article Created!');
        return redirect('/articles');
    }

    public function show($id)
    {
        $user = Auth::user();
        $article = Article::published()->findOrFail($id);
        $comments = $article->comments;

        return view('articles.article', compact('article', 'comments', 'user'));
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

    public function reply($id)
    {
        $article = Article::findOrFail($id);
        $user = Auth::user();

        $comment = new Comment();
        $comment->user_id = $user->id;
        $comment->body = Input::get('body');
        $comment->username = $user->username;
        $comment->save();
        $article->comments()->attach($comment->id);
        $article->save();

        return redirect(action('ArticleController@show', [$article->id]));

    }

}