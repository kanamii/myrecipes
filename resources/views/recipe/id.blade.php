@extends('layouts.main')

@section('title', 'my recipes')

@section('content')
    <div class="container">
        <div class="row col-md-12 mt-3 mb-3">
            <h3>{{ $recipe_form->name }}</h3>
            <span class="m-2">recipe by <a href="{{ route('member', ['id' => $recipe_form->user->id]) }}">{{ $recipe_form->user->name }}</a></span>
        </div>
        <div class="row">
            <div class="col-md-4">
                @if($recipe_form->image_path == null)
                    <img class="recipe-img" src="https://techmyrecipes.s3-ap-northeast-1.amazonaws.com/noimage.png">
                @else
                    <img class="recipe-img" src="{{ $post->image_path }}">
                @endif
            </div>
            <div class="col-md-4 t-area">
                <div class="t-center">　{{ $recipe_form->category }}　</div>
                <p>{!! nl2br(e($recipe_form->introduction)) !!}</p>
            </div>
            <div class="col-md-4">
                <table class="table table-striped">
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
            </div>
        </div>
        <div class="mt-4 mb-2">
            <h4>手順</h4>
        </div>
        <section class="t-area m-1">
            <div class="card-content">
                <p class="card-text">{!! nl2br(e($recipe_form->step1)) !!}</p>
            </div>
        </section>
        <section class="t-area m-1">
            <div class="card-content">
                <p class="card-text">{!! nl2br(e($recipe_form->step2)) !!}</p>
            </div>
        </section>
        <section class="t-area m-1">
            <div class="card-content">
                <p class="card-text">{!! nl2br(e($recipe_form->step3)) !!}</p>
            </div>
        </section>
    </div>
@endsection