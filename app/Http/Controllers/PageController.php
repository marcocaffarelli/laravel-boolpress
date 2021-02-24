<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class PageController extends Controller
{
    /**
    * Mostra la pagina Home
    * @return view home
    */
    public function home(){
        return view('home');
    }

        /**
    * Mostra la pagina Blog
    * @return view blog
    */
    public function blog(){
        //$articles = Article::all(); 
        $articles = Article::latest()->get();   
        return view('blog', compact('articles'));
    }

    /**
    * Mostra la pagina categories
    * @return view categories
    */
    public function categories(){  
        return view('categories');
    }

    /**
    * Mostra la pagina articles
    * @return view articles
    */
    public function vue_articles(){  
        return view('vue_articles');
    }

    /**
    * Mostra la pagina tags
    * @return view tags
    */
    public function tags(){  
        return view('tags');
    }
}
