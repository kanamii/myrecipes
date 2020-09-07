<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use App\User;

class RecipeController extends Controller
{
    //topページを表示させる
    public function index(Request $request)
  {
      $posts = Recipe::all()->sortByDesc('created_at');
      
      return view('index', ['posts' => $posts]);
  }
    
    //member個別ページを表示させる
    public function member(Request $request)
  {
      // UserModelからデータを取得する
      $member = User::find($request->id);
      $posts = Recipe::where('user_id', $member->id)->orderBy('created_at', 'desc')->get(); // $userによる投稿を取得し投稿作成日が新しい順に並べる

      return view('member.index', ['member' => $member, 'posts' => $posts, ]);
  }
    
    //レシピ個別ページを表示させる
    public function recipe(Request $request)
  {
      // RecipeModelからデータを取得する
      $recipe = Recipe::find($request->id);

      return view('recipe.id', ['recipe_form' => $recipe]);
  }
    
    //レシピ一覧を表示させる
    public function recipeIndex(Request $request)
  {
      // レシピデータを取得する
      $recipes = Recipe::all()->sortByDesc('created_at');
      
      return view('recipe.index', ['recipes' => $recipes]);
  }
    
    //カテゴリー別一覧を表示させる
    public function categoryIndex(Request $request)
  {
      $category = $request->category;
      
      // 一致するレシピデータを取得する
      $recipes = Recipe::where('category', 'like', $category)->get();
      
      return view('recipe.category', ['recipes' => $recipes, 'name' => $category]);
  }
    
    //検索結果を表示させる
    public function searchIndex(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
         $posts = Recipe::where('name', 'like', "%$cond_title%")->orWhere('introduction', 'like', "%$cond_title%")->orderBy('created_at','desc')->get();
         if ($posts->isEmpty()) {
           $posts = "empty";
         }
       } else {
         $posts = null;
       }
       
      return view('recipe.search',  ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  
}
