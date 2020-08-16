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
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">カテゴリー</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">レシピの説明</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">レシピの写真</label>
            <input type="file" id="exampleInputFile">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">材料</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">分量</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">手順１</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">手順２</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">手順３</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Check me out
            </label>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@endsection