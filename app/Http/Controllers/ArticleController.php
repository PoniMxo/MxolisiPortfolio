<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;
use App\Http\Resources\Article as ArticleResource;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //Get articles
      $articles = Article::all();

      //return collection of articles
    //   return ArticleResource::collection($articles);
        return view('blog.index')->with('articles',$articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create
        return view('blog.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //check the method type
        // $article = $request->isMethod('put') ? Article::findOrFail
        // ($request->article_id) : new Article;

        // $article->id = $article->input('article_id');
        $article = Article::create($request->all());
        $article = App\Article::create(['title' => $request->title], ['body' => $request->content]);

        if($article->save()){
            return view('blog.index')->with('articles',$articles);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Get one article

        $article = Article::findOrFail($id);

        //Rertun single article as a resource
        return view('blog.show')->with('article', $article);
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Get one article

        $article = Article::findOrFail($id);

        if($article->delete()) {
          return new ArticleResource($article);
        }

    }
}
