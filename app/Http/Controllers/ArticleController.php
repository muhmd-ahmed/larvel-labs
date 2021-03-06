<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Gategory;
use Illuminate\Http\Request;
use App\Http\Requests\CreateValidationRequestArticle;


class ArticleController extends Controller
{
    public function listArticles(){
        $Articles = Article::all();
        
        return view('ListArticles',compact('Articles'));
    }
    public function listArticlesToTemplate(){
        $Articles = Article::all();
        
        return view('dashboard.pages.data',compact('Articles'));
    }

    public function createArticle(){
        $categories= Gategory::all();
        return view('createArticle',['categories'=>$categories]);
    }
    public function saveArticle(CreateValidationRequestArticle $request){
        $validated = $request->validated(); 
        $article_info=new Article;
        $article_info->name=$request->article_name;
        $article_info->details=$request->details;
        $article_info->slug=$request->slug;
        $article_info->gategory_id=$request->category_id;
        $article_info->gategory_id = $request->categories;
        $article_info->article_image=$request->article_img;
        $value_to_insert = $request->is_used =='on'? true : false;
        $article_info->is_used=$value_to_insert;
        $article_info->save();
        return redirect('/articles');
    }
    public function ShowEditInfo($article){
        $Articles = Article::all();
        $article=Article::find($article);
        return view('editArticle',compact('article','Articles'));
    }
    public function update(CreateValidationRequestArticle $request,$article){
        $validated = $request->validated(); 
        $field=$request->all();
        $article=Article::find($article);
        $article->name=$field['article_name'];
        $article->details=$field['details'];
        $article->slug=$field['slug'];
        $article->gategory_id=$field['categories'];
        $article->article_image=$field['article_img'];
        $value_to_insert = $field['is_used'] =='on'? true : false;
        $article->is_used=$value_to_insert;
        $article->save();
        return redirect('/articles');
    }
    public function showArticle($article){
        
        $article=Article::find($article);
        return view('showArticle',compact('article'));
    }
    public function deleteArticle($article){
        $article=Article::find($article);
        $article->delete();
        return redirect('/articles');
    }
}
