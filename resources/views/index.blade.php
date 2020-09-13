@extends('layouts.main')

@section('title', 'my recipes')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h5>新着レシピ</h5>
            </div>
        </div>
        <div class="row">
          @include('parts.recipe')
        </div>
        <div class="row">
          <a href="{{ route('recipe.index') }}">もっとみる</a>
        </div>
    </div>
@endsection