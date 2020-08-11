<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecipeController extends Controller
{
    // レシピ追加画面を開く
    public function add()
  {
      return view('recipe.create');
  }
  
  // レシピを追加する
  public function create()
  {
      return view('recipe.create');
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
