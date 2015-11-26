<?php
/**
 * Created by PhpStorm.
 * User: mjames
 * Date: 26/11/2015
 * Time: 16:15
 */

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Tag;

class TagsController extends Controller
{
    public function show(Tag $tag)
    {
        $articles = $tag->articles()->published()->get();

        return view('article', compact('articles'));
    }
}