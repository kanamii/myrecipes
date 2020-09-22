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
          <p class="col">{{ $member->name }}</p>
          @if($member->image_path == null)
            <img class="card-img col" src="{{ asset('storage/image/noimage.png') }}" alt="">
          @else
            <img class="card-img col" src="{{ asset('storage/image/' . $member->image_path) }}" alt="">
          @endif
          <p class="col">{{ $member->introduction }}</p>
        </div>
        <div class="row">
            <p>投稿レシピ一覧</p>
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
                      <a class="card-title" href="{{ route('recipe', ['id' => $recipe->id]) }}">{{ str_limit($recipe->name, 70) }}</a>
                      <a class="card-text" href="{{ route('recipe.edit', ['id' => $recipe->id]) }}">編集</a>
                      <a class="card-text" href="{{ action('Admin\RecipeController@delete', ['id' => $recipe->id, 'user_id' => $recipe->user->id]) }}">削除</a>
                      <p class="card-text">{{ str_limit($recipe->introduction, 200) }}</p>
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