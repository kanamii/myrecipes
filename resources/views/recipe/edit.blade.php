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
            <label for="exampleInputEmail1">レシピの名前</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="例：基本のショートケーキ">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">カテゴリー</label>
            <select class="form-control">
              <option>ケーキ</option>
              <option>焼き菓子</option>
              <option>ゼリー・アイス</option>
              <option>和菓子</option>
              <option>そのほか</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">レシピの説明</label>
            <textarea class="form-control" rows="3" placeholder="例：基本的なショートケーキの作り方です"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">レシピの写真</label>
            <input type="file" id="exampleInputFile">
          </div>
          <div class="form-inline">
            <label for="exampleInputEmail1">材料</label>
            <input type="text" class="form-control m-2" id="exampleInputEmail1" placeholder="小麦粉">
            <label for="exampleInputEmail1">分量</label>
            <input type="text" class="form-control m-2" id="exampleInputEmail1" placeholder="100g">
          </div>
          <div class="form-inline">
            <label for="exampleInputEmail1">材料</label>
            <input type="text" class="form-control m-2" id="exampleInputEmail1" placeholder="たまご">
            <label for="exampleInputEmail1">分量</label>
            <input type="text" class="form-control m-2" id="exampleInputEmail1" placeholder="1個">
          </div>
          <div class="form-inline">
            <label for="exampleInputEmail1">材料</label>
            <input type="text" class="form-control m-2" id="exampleInputEmail1" placeholder="いちご">
            <label for="exampleInputEmail1">分量</label>
            <input type="text" class="form-control m-2" id="exampleInputEmail1" placeholder="適量">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">手順１</label>
            <textarea class="form-control" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">手順２</label>
            <textarea class="form-control" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">手順３</label>
            <textarea class="form-control" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-default">投稿</button>
        </form>
    </div>
@endsection