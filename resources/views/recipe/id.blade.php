@extends('layouts.main')

@section('title', 'my recipes')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h5>レシピの名前</h5>
            </div>
        </div>
        <div class="row">
            <img src="#" alt="">
            <p>カテゴリー名</p>
            <img src="#" alt="ユーザー写真" class="img-circle">
            <p>投稿ユーザー名</p>
            <p>編集ボタン</p>
        </div>
        <h7>材料</h7>
        <table class="table table-striped col-md-6">
            <tr>
                <th>材料</th>
                <th>分量</th>
                <th>単位</th>
            </tr>
            <tr>
                <td>例１</td>
                <td>123</td>
                <td>g</td>
            </tr>
        </table>
        <h7>手順</h7>
        <section class="col-md-6 card m-1">
            <div class="card-content">
                <p class="card-text">レシピの詳細や説明を記載するところ。</p>
            </div>
        </section>
        <section class="col-md-6 card m-1">
            <div class="card-content">
                <p class="card-text">レシピの詳細や説明を記載するところ。</p>
            </div>
        </section>
        <section class="col-md-6 card m-1">
            <div class="card-content">
                <p class="card-text">レシピの詳細や説明を記載するところ。</p>
            </div>
        </section>
    </div>
@endsection