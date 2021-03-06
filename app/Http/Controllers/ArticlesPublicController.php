<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;
use Gate;

class ArticlesPublicController extends Controller
{

    public function showpublic($id)
    {
        $articles = Article::all();
        $article = $articles->find($id);

        return view('showpublic')->with([
            'article'=> $article
        ]);
   }

}
