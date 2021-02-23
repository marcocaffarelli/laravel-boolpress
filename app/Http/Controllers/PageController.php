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
    public function articles(){  
        return view('articles');
    }
}
