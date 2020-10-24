@extends('layouts.main')

@section('title', 'my recipes')

@section('content')
    <div class="container">
        <div class="member-h row">
          <div class="member">
            @if($member->image_path == null)
              <img class="member1-img" src="https://techmyrecipes.s3-ap-northeast-1.amazonaws.com/noimage.png">
            @else
              <img src="{{ $member->image_path }}" class="member1-img">
            @endif
            <h3 class="member-name">{{ $member->name }}</h3>
            <p class="member-i">{!! nl2br(e($member->introduction)) !!}</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h5>投稿レシピ一覧</h5>
          </div>
        </div>
        <div class="row">
          @guest
            @include('parts.recipe')
          @else
            @if(auth()->user()->id == $member->id)
              @foreach($posts as $recipe)
                <div class="col-md-3 col-6 mt-3 mb-3">
                  <a href="{{ route('recipe', ['id' => $recipe->id]) }}">
                    <div class="card">
                      <p class="img-wrap">
                        @if($recipe->image_path == null)
                          <img class="card-img" src="https://techmyrecipes.s3-ap-northeast-1.amazonaws.com/noimage.png" alt="">
                        @else
                          <img src="{{ $recipe->image_path }}" class="card-img">
                        @endif
                      </p>
                      <div class="card-content">
                        <p class="card-category">{{ str_limit($recipe->category, 40) }}</p>
                        <p class="card-title">{{ str_limit($recipe->name, 40) }}</p>
                        <div class="right">
                          <a class="card-edit" href="{{ route('recipe.edit', ['id' => $recipe->id]) }}">編集</a>
                          <a class="card-edit" href="{{ action('Admin\RecipeController@delete', ['id' => $recipe->id, 'user_id' => $recipe->user->id]) }}">削除</a>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              @endforeach
            @else
              @include('parts.recipe')
            @endif
          @endguest
        </div>
        <div class="d-flex">
            <div class="mx-auto">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection