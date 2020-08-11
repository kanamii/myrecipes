<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    // マイページを開く
    public function index()
  {
      return view('member.index');
  }
  
  // プロフィール編集内容を呼び出す
    public function edit()
  {
      return view('member.edit');
  }
  
  // プロフィール編集内容を保存する
    public function update()
  {
      return view('member.edit');
  }
}
