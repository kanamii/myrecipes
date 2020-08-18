@extends('layouts.main')

@section('title', 'my recipes')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h5>新着レシピ</h5>
            </div>
        </div>
          @foreach($posts as $recipe)
              <tr>
                  <th>{{ $recipe->id }}</th>
                  <td>{{ \Str::limit($recipe->name, 100) }}</td>
                  <td>{{ \Str::limit($recipe->introduction, 250) }}</td>
              </tr>
          @endforeach
        <div class="row">
            <section class="col-md-3 card m-1">
              <img class="card-img" src="images/bear.jpg" alt="">
              <div class="card-content">
                <div class="card-title">タイトル</div>
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
            <section class="col-md-3 card m-1">
              <img class="card-img" src="images/bear.jpg" alt="">
              <div class="card-content">
                <div class="card-title">レシピタイトル</div>
                <p class="card-text">レシピの詳細や説明を記載するところ。</p>
              </div>
            </section>
        </div>
    </div>
@endsection