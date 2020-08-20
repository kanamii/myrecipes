<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class RecipeController extends Controller
{
    //topページを表示させる
    public function index()
  {
      $posts = Recipe::all()->sortByDesc('updated_at');
      
      return view('index',  ['posts' => $posts]);
  }
    
    //member個別ページを表示させる
    public function member()
  {
      return view('member.index');
  }
    
    //レシピ個別ページを表示させる
    public function recipe()
  {
    /* RecipeModelからデータを取得する
      $recipe = Recipe::find($request->id);
      
      // 送信されてきたフォームデータを格納する
      $recipe_form = $request->all();
    */
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
