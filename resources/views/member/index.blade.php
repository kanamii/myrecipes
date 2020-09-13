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
            <p>{{ $member->name }}</p>
            <a href="{{ route('member.edit', ['id' => $member->id]) }}" class="btn">編集</a>
        </div>
        <div class="row">
            <p>{{ $member->introduction }}</p>
        </div>
        <div class="row">
            <p>投稿レシピ一覧</p>
            <a href="{{ route('recipe.add') }}" class="btn">レシピを投稿する</a>
        </div>
        <div class="row">
          @guest
            @include('parts.recipe')
          @else
            @if(auth()->user()->id == $member->id)
              @foreach($posts as $recipe)
                  <section class="col-md-3 card m-1">
                    @if($recipe->image_path == null)
                      <img class="card-img" src="{{ asset('storage/image/noimage.png') }}" alt="">
                    @else
                      <img class="card-img" src="{{ asset('storage/image/' . $recipe->image_path) }}" alt="">
                    @endif
                    <div class="card-content">
                      <div class="card-title">{{ str_limit($recipe->name, 70) }}</div>
                      <p class="card-text">{{ str_limit($recipe->introduction, 200) }}</p>
                      <a href="{{ route('recipe', ['id' => $recipe->id]) }}">レシピページ</a>
                      <a href="{{ route('recipe.edit', ['id' => $recipe->id]) }}">レシピ編集ページ</a>
                      <a href="{{ action('Admin\RecipeController@delete', ['id' => $recipe->id, 'user_id' => $recipe->user->id]) }}">削除</a>
                    </div>
                  </section>
              @endforeach
            @else
              @include('parts.recipe')
            @endif
          @endguest
        </div>
        {{ $posts->links() }} 
    </div>
@endsection