<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Recipe;
use App\User;

class RecipeController extends Controller
{
  // ログインしていなければログインページを表示する
  public function __construct()
    {
        $this->middleware('auth');
    }
  
    // レシピ追加画面を開く
    public function add()
  {
      return view('recipe.create');
  }
  
  // レシピを追加する
  public function create(Request $request)
  {
      // Varidationを行う
      $this->validate($request, Recipe::$rules);
      
      $recipe = new Recipe;
      $form = $request->all();

      // フォームから画像が送信されてきたら、保存して、$recipe->image_path に画像のパスを保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $recipe->image_path = basename($path);
      } else {
        $recipe->image_path = null;
      }
      
      $recipe->user_id = $request->user()->id;

      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);

      // データベースに保存する
      $recipe->fill($form);
      $recipe->save();

      return redirect('recipe/create');
  }
  
  // レシピ編集画面を開く
  public function edit(Request $request)
  {
      // Recipe Modelからデータを取得する
      $recipe = Recipe::find($request->id);
      if (empty($recipe)) {
        abort(404);    
      }
      return view('recipe.edit',  ['recipe_form' => $recipe]);
  }
  
  // レシピの編集内容を保存する
  public function update(Request $request)
  {
      // Validationをかける
      $this->validate($request, Recipe::$rules);
      // Recipe Modelからデータを取得する
      $recipe = Recipe::find($request->id);
      // 送信されてきたフォームデータを格納する
      $recipe_form = $request->all();
      if (isset($recipe_form['image'])) {
        $path = $request->file('image')->store('public/image');
        $recipe->image_path = basename($path);
        unset($recipe_form['image']);
      } elseif (isset($request->remove)) {
        $recipe->image_path = null;
        unset($recipe_form['remove']);
      }
      unset($recipe_form['_token']);

      // 該当するデータを上書きして保存する
      $recipe->fill($recipe_form)->save();

      return view('recipe.index');
  }
  
  //　レシピを削除する
  public function delete()
  {
      return view('recipe.edit');
  }
  
}
