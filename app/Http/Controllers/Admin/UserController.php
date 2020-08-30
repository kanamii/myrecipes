<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class UserController extends Controller
{
    // マイページを開く
    public function index()
  {
      return view('member.index');
  }
  
  // プロフィール編集内容を呼び出す
    public function edit(Request $request)
  {
      // UserModelからデータを取得する
      $member = User::find($request->id);
      if (empty($member)) {
        abort(404);    
      }
      return view('member.edit',  ['member_form' => $member]);
  }
  
  // プロフィール編集内容を保存する
    public function update(Request $request)
  {
      // UserModelからデータを取得する
      $member = User::find($request->id);
      // 送信されてきたフォームデータを格納する
      $member_form = $request->all();
      if (isset($member_form['image'])) {
        $path = $request->file('image')->store('public/image');
        $member->image_path = basename($path);
        unset($member_form['image']);
      } elseif (isset($request->remove)) {
        $member->image_path = null;
        unset($member_form['remove']);
      }
      unset($member_form['_token']);

      // 該当するデータを上書きして保存する
      $member->fill($member_form)->save();
      
      return view('recipe.index');
  }
}
