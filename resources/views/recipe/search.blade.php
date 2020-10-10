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
            @if($posts === "empty")
              <div class="col-md-12">
                <p>検索結果がありません</p>
              </div>
            @elseif(isset($posts))
              @include('parts.recipe')
              <div class="d-flex">
                <div class="mx-auto">
                  {{ $posts->links() }}
                </div>
              </div>
            @else
              <div class="col-md-12">
                <p>検索条件を入力してください</p>
              </div>
            @endif
        </div>
    </div>
@endsection