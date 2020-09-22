@extends('layouts.main')

@section('title', 'my recipes')

@section('content')
    <div class="container">
        <div class="row">
            <h3>{{ $recipe_form->name }}</h3>
        </div>
        <div class="row">
            <div class="col">
                @if($recipe_form->image_path == null)
                    <img class="card-img img-thumbnail" src="{{ asset('storage/image/noimage.png') }}" alt="">
                @else
                    <img class="card-img img-thumbnail" src="{{ asset('storage/image/' . $recipe_form->image_path) }}" alt="">
                @endif
            </div>
            <div class="col">
                <p class="btn">{{ $recipe_form->category }}</p>
                <p>{{ $recipe_form->introduction }}</p>
            </div>
            <div class="col">
                @if($recipe_form->user->image_path == null)
                    <img class="img-thumbnail member-img" src="{{ asset('storage/image/noimage.png') }}" alt="">
                @else
                    <img class="img-thumbnail member-img" src="{{ asset('storage/image/' . $recipe_form->user->image_path) }}" alt="">
                @endif
                <a href="{{ route('member', ['id' => $recipe_form->user->id]) }}">{{ $recipe_form->user->name }}</a>
            </div>
        </div>
        <table class="table table-striped col-xl-6 m-5">
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
        <section class="card m-1">
            <div class="card-content">
                <p class="card-text">{{ $recipe_form->step1 }}</p>
            </div>
        </section>
        <section class="card m-1">
            <div class="card-content">
                <p class="card-text">{{ $recipe_form->step2 }}</p>
            </div>
        </section>
        <section class="card m-1">
            <div class="card-content">
                <p class="card-text">{{ $recipe_form->step3 }}</p>
            </div>
        </section>
    </div>
@endsection