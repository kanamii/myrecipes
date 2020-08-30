@extends('layouts.main')

@section('title', 'my recipes')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h5>メンバーページ編集</h5>
            </div>
        </div>
        <form action="{{ route('member.update') }}" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">ユーザー名</label>
                <input type="text" class="form-control" name="name" value="{{ $member_form->name }}">
            </div>
            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="text" class="form-control" name="email" value="{{ $member_form->email }}">
            </div>
            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="form-group">
                <label for="introduction">自己紹介コメント</label>
                <textarea class="form-control" name="introduction">{{ $member_form->introduction }}</textarea>
            </div>
            <div class="form-group">
                <label for="profileImage">プロフィール画像</label>
                <input type="file" name="profileImage">
                <div class="form-text text-info">
                    設定中: {{ $member_form->image_path }}
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                    </label>
                </div>
            </div>
          <input type="hidden" name="id" value="{{ $member_form->id }}">
            @csrf
            <button type="submit" class="btn btn-default">変更を保存</button>
        </form>
    </div>
@endsection