@extends('layouts.main')

@section('title', 'my recipes')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h5>レシピ編集</h5>
            </div>
        </div>
        <form>
          <div class="form-group">
            <label for="name">レシピの名前</label>
            <input type="text" class="form-control" name="name" placeholder="例：ショートケーキ" >
          </div>
          <div class="form-group">
            <label for="category">カテゴリー</label>
            <select class="form-control" name="category">
              <option>ケーキ</option>
              <option>焼き菓子</option>
              <option>ゼリー・アイス</option>
              <option>和菓子</option>
              <option>そのほか</option>
            </select>
          </div>
          <div class="form-group">
            <label for="introduction">レシピの説明</label>
            <textarea class="form-control" rows="3" placeholder="例：基本的なショートケーキの作り方です" name="introduction"></textarea>
          </div>
          <div class="form-group">
            <label for="image">レシピの写真</label>
            <input type="file" class="form-control-file" name="image">
          </div>
          <div class="form-inline">
            <label for="item1">材料</label>
            <input type="text" class="form-control m-2" name="item1" placeholder="小麦粉">
            <label for="quantity1">分量</label>
            <input type="text" class="form-control m-2" name="quantity1" placeholder="100g">
          </div>
          <div class="form-inline">
            <label for="item2">材料</label>
            <input type="text" class="form-control m-2" name="item2" placeholder="たまご">
            <label for="quantity2">分量</label>
            <input type="text" class="form-control m-2" name="quantity2" placeholder="1個">
          </div>
          <div class="form-inline">
            <label for="item3">材料</label>
            <input type="text" class="form-control m-2" name="item3" placeholder="いちご">
            <label for="quantity3">分量</label>
            <input type="text" class="form-control m-2" name="quantity3" placeholder="適量">
          </div>
          <div class="form-group">
            <label for="step1">手順１</label>
            <textarea class="form-control" rows="3" name="step1"></textarea>
          </div>
          <div class="form-group">
            <label for="step2">手順２</label>
            <textarea class="form-control" rows="3" name="step2"></textarea>
          </div>
          <div class="form-group">
            <label for="step3">手順３</label>
            <textarea class="form-control" rows="3" name="step3"></textarea>
          </div>
          {{ csrf_field() }}
          <button type="submit" class="btn">投稿</button>
        </form>
    </div>
@endsection