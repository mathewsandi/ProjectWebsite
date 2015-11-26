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
use App\Tag;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;
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
        $tags = \App\Tag::lists('name', 'id');

        return view('articles.create', compact('tags'));
    }

    public function store(ArticleRequest $request)
    {
        $user = Auth::user();
        $article = new Article($request->all());
        $article->user_id = $user->id;
        $article->save();
        Auth::user()->articles()->save($article);


        session()->flash('flash_message', 'Article Created!');
        return redirect('/articles');
    }

    public function show($id)
    {
        $article = Article::published()->findOrFail($id);

        return view('articles.article', compact('article'));
    }

}