@extends('layouts.main')

@section('title', 'my recipes')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h5>{{ $recipe_form->name }}</h5>
            </div>
        </div>
        <div class="row">
            <img src="#" alt="">
            <p>{{ $recipe_form->category }}</p>
            @if($recipe_form->image_path == null)
                <img class="card-img" src="{{ asset('storage/image/noimage.png') }}" alt="">
            @else
                <img class="card-img" src="{{ asset('storage/image/' . $recipe_form->user->image_path) }}" alt="">
            @endif
            <p>投稿者：</p>
            <a href="{{ route('member', ['id' => $recipe_form->user->id]) }}">{{ $recipe_form->user->name }}</a>
        </div>
        <div class="row">
            @if($recipe_form->image_path == null)
                <img class="card-img" src="{{ asset('storage/image/noimage.png') }}" alt="">
            @else
                <img class="card-img" src="{{ asset('storage/image/' . $recipe_form->image_path) }}" alt="">
            @endif
            <p>{{ $recipe_form->introduction }}</p>
        </div>
        <table class="table table-striped col-md-6">
            <tr>
                <th>材料</th>
                <th>分量</th>
            </tr>
            <tr>
                <td>{{ $recipe_form->item1 }}</td>
                <td>{{ $recipe_form->quantity1 }}</td>
            </tr>
            <tr>
                <td>{{ $recipe_form->item2 }}</td>
                <td>{{ $recipe_form->quantity2 }}</td>
            </tr>
            <tr>
                <td>{{ $recipe_form->item3 }}</td>
                <td>{{ $recipe_form->quantity3 }}</td>
            </tr>
        </table>
        <h7>手順</h7>
        <section class="col-md-6 card m-1">
            <div class="card-content">
                <p class="card-text">{{ $recipe_form->step1 }}</p>
            </div>
        </section>
        <section class="col-md-6 card m-1">
            <div class="card-content">
                <p class="card-text">{{ $recipe_form->step2 }}</p>
            </div>
        </section>
        <section class="col-md-6 card m-1">
            <div class="card-content">
                <p class="card-text">{{ $recipe_form->step3 }}</p>
            </div>
        </section>
    </div>
@endsection