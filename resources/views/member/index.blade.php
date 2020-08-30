@extends('layouts.main')

@section('title', 'my recipes')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h5>メンバーページ</h5>
            </div>
        </div>
        <div class="row">
            <img class="card-img" src="{{ asset('storage/image/' . $member->image_path) }}" alt="">

            プロフィール画像<img class="" src="#" alt="">
            <p>{{ $member->name }}</p>
            <a href="#" class="btn">編集</a>
        </div>
        <div class="row">
            <p>{{ $member->introduction }}</p>
        </div>
        <div class="row">
            <p>投稿レシピ一覧</p>
            <a href="#" class="btn">レシピを投稿する</a>
        </div>
        <div class="row">
            <section class="col-md-3 card m-1">
              <img class="card-img" src="images/bear.jpg" alt="">
              <div class="card-content">
                <div class="card-title">レシピタイトル</div>
                <p class="card-text">レシピの詳細や説明を記載するところ。</p>
              </div>
            </section>
            <section class="col-md-3 card m-1">
              <img class="card-img" src="images/bear.jpg" alt="">
              <div class="card-content">
                <div class="card-title">レシピタイトル</div>
                <p class="card-text">レシピの詳細や説明を記載するところ。</p>
              </div>
            </section>
            <section class="col-md-3 card m-1">
              <img class="card-img" src="images/bear.jpg" alt="">
              <div class="card-content">
                <div class="card-title">レシピタイトル</div>
                <p class="card-text">レシピの詳細や説明を記載するところ。</p>
              </div>
            </section>
        </div>
        <div class="row">
          1 2 3 →
        </div>
    </div>
@endsection