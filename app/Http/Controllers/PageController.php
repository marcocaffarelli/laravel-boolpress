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
    * Mostra la pagina posts
    * @return view posts
    */
    public function posts(){  
        return view('posts');
    }
}
