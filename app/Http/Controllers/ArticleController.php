<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use App\Category;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$articles = Article::all();
        $articles = Article::latest()->get();
        //dd($articles);
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('articles.create', compact('tags', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validazione = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'tags' => 'exists:tags,id',

        ]);
        // $article = new Article;
        // $article->title = request('title');
        // $article->description = request('description');
        // $article->save();

        //dd($request->all());
        Article::create($validazione);   
        $new_article = Article::orderBY('id', 'desc')->first(); 
        //dd($new_article);
        $new_article->tags()->attach($request->tags);
        
        $category = new Category;
        $category->name = request('name');
        $category->description = request('description');
        $category->save();
        
        return redirect()->route('blog', $new_article);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
       //dd($article->title, $article->body);
       //dd($article->tags);
       return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //dd($article);
        $tags = Tag::all();
        return view('articles.edit', compact('article','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $validazione = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'tags' => 'exists:tags,id'
        ]);
        // $data = $request->all();
        // $article->update($data);
        //dd($request->tags);
        $article->update($validazione); 
        $article->tags()->sync($request->tags);  
        return redirect()->route('blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //dd($article);
        $article->delete();
        return redirect()->route('blog');

    }
}
