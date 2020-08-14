<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    //topページを表示させる
    public function index()
  {
      return view('index');
  }
    
    //member個別ページを表示させる
    public function member()
  {
      return view('member.index');
  }
    
    //レシピ個別ページを表示させる
    public function recipe()
  {
      return view('recipe.id');
  }
    
    //レシピ一覧を表示させる
    public function recipeIndex()
  {
      return view('recipe.index');
  }
    
    //カテゴリー別一覧を表示させる
    public function categoryIndex()
  {
      return view('recipe.category');
  }
    
    //検索結果を表示させる
    public function searchIndex()
  {
      return view('recipe.search');
  }
    
    //
}
