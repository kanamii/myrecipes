@extends('layouts.main')

@section('title', 'my recipes')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h5>検索結果</h5>
            </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            @if($posts === "empty")
              <p>検索結果がありません</p>
            @elseif(isset($posts))
              @include('parts.recipe')
              {{ $posts->links() }}
            @else
              <p>検索条件を入力してください</p>
            @endif
          </div>
        </div>
    </div>
@endsection