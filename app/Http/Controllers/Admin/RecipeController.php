<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Recipe;

class RecipeController extends Controller
{
    // レシピ追加画面を開く
    public function add()
  {
      return view('recipe.create');
  }
  
  // レシピを追加する
  public function create(Request $request)
  {
      // 以下を追記
      // Varidationを行う
      $this->validate($request, Recipe::$rules);
      
      $recipe = new Recipe;
      $form = $request->all();

      // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $news->image_path = basename($path);
      } else {
          $news->image_path = null;
      }

      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);

      // データベースに保存する
      $news->fill($form);
      $news->save();

      return redirect('recipe/create');
      
  }
  
  // レシピ編集画面を開く
  public function edit()
  {
      return view('recipe.edit');
  }
  
  // レシピの編集内容を保存する
  public function update()
  {
      return view('recipe.edit');
  }
  
  //　レシピを削除する
  public function delete()
  {
      return view('recipe.edit');
  }
}
