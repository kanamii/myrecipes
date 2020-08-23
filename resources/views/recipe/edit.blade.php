@extends('layouts.main')

@section('title', 'my recipes')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h5>レシピ編集</h5>
            </div>
        </div>
        <form action="{{ route('recipe.update') }}" method="post" enctype="multipart/form-data">
          @if (count($errors) > 0)
            <ul>
              @foreach($errors->all() as $e)
                <li>{{ $e }}</li>
              @endforeach
            </ul>
          @endif
          <div class="form-group">
            <label for="name">レシピの名前</label>
            <input type="text" class="form-control" name="name" value="{{ $recipe_form->name }}">
          </div>
          <div class="form-group">
            <label for="category">カテゴリー</label>
            <select class="form-control" name="category" value="{{ $recipe_form->category }}">
              <option>ケーキ</option>
              <option>焼き菓子</option>
              <option>ゼリー・アイス</option>
              <option>和菓子</option>
              <option>そのほか</option>
            </select>
          </div>
          <div class="form-group">
            <label for="introduction">レシピの説明</label>
            <textarea class="form-control" rows="3" name="introduction">{{ $recipe_form->introduction }}</textarea>
          </div>
          <div class="form-group">
            <label for="image">レシピの写真</label>
            <input type="file" class="form-control-file" name="image">
            <div class="form-text text-info">
              設定中: {{ $recipe_form->image_path }}
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
              </label>
            </div>
          </div>
          <div class="form-inline">
            <label for="item1">材料</label>
            <input type="text" class="form-control m-2" name="item1" value="{{ $recipe_form->item1 }}">
            <label for="quantity1">分量</label>
            <input type="text" class="form-control m-2" name="quantity1" value="{{ $recipe_form->quantity1 }}">
          </div>
          <div class="form-inline">
            <label for="item2">材料</label>
            <input type="text" class="form-control m-2" name="item2" value="{{ $recipe_form->item2 }}">
            <label for="quantity2">分量</label>
            <input type="text" class="form-control m-2" name="quantity2" value="{{ $recipe_form->quantity2 }}">
          </div>
          <div class="form-inline">
            <label for="item3">材料</label>
            <input type="text" class="form-control m-2" name="item3" value="{{ $recipe_form->item3 }}">
            <label for="quantity3">分量</label>
            <input type="text" class="form-control m-2" name="quantity3" value="{{ $recipe_form->quantity3 }}">
          </div>
          <div class="form-group">
            <label for="step1">手順１</label>
            <textarea class="form-control" rows="3" name="step1">{{ $recipe_form->step1 }}</textarea>
          </div>
          <div class="form-group">
            <label for="step2">手順２</label>
            <textarea class="form-control" rows="3" name="step2">{{ $recipe_form->step2 }}</textarea>
          </div>
          <div class="form-group">
            <label for="step3">手順３</label>
            <textarea class="form-control" rows="3" name="step3">{{ $recipe_form->step3 }}</textarea>
          </div>
          <input type="hidden" name="id" value="{{ $recipe_form->id }}">
          {{ csrf_field() }}
          <button type="submit" class="btn">保存</button>
        </form>
    </div>
@endsection