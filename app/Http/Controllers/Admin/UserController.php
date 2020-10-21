<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
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
      if (isset($member_form['profileImage'])) {
        $path = Storage::disk('s3')->putFile('/',$member_form['profileImage'],'public');
        $member->image_path = Storage::disk('s3')->url($path);
        unset($member_form['profileImage']);
      } elseif (isset($request->remove)) {
        $member->image_path = null;
        unset($member_form['remove']);
      }
      unset($member_form['_token']);

      // 該当するデータを上書きして保存する
      $member->fill($member_form)->save();
      
      $user_id = $member->id;
      
      return redirect()->route('member', ['id' => $user_id]);
      // return view('recipe.index');
  }
}
