<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecipeController extends Controller
{
    public function add()
  {
      return view('recipe.edit');
  }
  
  public function create()
  {
      return view('recipe.edit');
  }
  
  public function edit()
  {
      return view('recipe.edit');
  }
  
  public function update()
  {
      return view('recipe.edit');
  }
  
  public function delete()
  {
      return view('recipe.edit');
  }
}
