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
          @foreach($posts as $recipe)
            <section class="col-md-3 card m-1">
              <img class="card-img" src="{{ asset('storage/image/' . $recipe->image_path) }}" alt="">
              <div class="card-content">
                <div class="card-title">{{ str_limit($recipe->name, 70) }}</div>
                <p class="card-text">{{ str_limit($recipe->introduction, 200) }}</p>
              </div>
            </section>
          @endforeach
        </div>
    </div>
@endsection