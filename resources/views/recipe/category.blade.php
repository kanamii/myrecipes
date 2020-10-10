@extends('layouts.main')

@section('title', 'my recipes')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h5>{{ $name }}</h5>
            </div>
        </div>
        <div class="row">
          @include('parts.recipe')
        </div>
        <div class="d-flex">
            <div class="mx-auto">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection