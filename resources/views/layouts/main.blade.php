<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title')</title>

        <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <div class="header-logo row">
                <img src="./storage/topphoto.jpg" alt="トップページ" width="140">
                <h1>My Recipes</h1>
            </div>
            <div class="container">
                <div class="row">
                    <form class="form-inline">
                      <div class="form-group">
                        <label for="exampleInputEmail1">キーワードで探す</label>
                        <input type="text" class="form-control m-1" id="exampleInputEmail1" placeholder="例：クッキー">
                      </div>
                      <button type="submit" class="btn btn-default m-1">検索</button>
                    </form>
                    <a class="btn btn-info m-1" href="#" role="button">ログイン</a>
                    <a class="btn btn-info m-1" href="#" role="button">新規登録</a>
                </div>
                <div class="row">
                    <div class="text-center p-2">カテゴリーから探す</div>
                    <a class="btn btn-info col-md-2 m-1" href="#" role="button">カテゴリー１</a>
                    <a class="btn btn-info col-md-2 m-1" href="#" role="button">カテゴリー２</a>
                    <a class="btn btn-info col-md-2 m-1" href="#" role="button">カテゴリー１</a>
                    <a class="btn btn-info col-md-2 m-1" href="#" role="button">カテゴリー２</a>
                    <a class="btn btn-info col-md-2 m-1" href="#" role="button">カテゴリー１</a>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <p>確認用リンク</p>
                    <a href="{{ url('/') }}" class="m-1">トップ</a>
                    <a href="{{ url('/register') }}" class="m-1">会員登録</a>
                    <a href="{{ url('/login') }}">ログイン</a>
                    <a href="{{ route('search') }}">検索結果</a>
                    <a href="{{ route('recipe.index') }}">レシピ一覧</a>
                    <a href="{{ route('category') }}">カテゴリー別一覧</a>
                    <a href="{{ route('recipe') }}">レシピ個別ページ</a>
                    <a href="{{ route('recipe.create') }}">レシピ投稿ページ</a>
                    <a href="{{ route('recipe.edit', ['id' => 1]) }}">レシピ編集ページ</a>
                    <a href="{{ route('member') }}">メンバーページ</a>
                    <a href="{{ route('member.edit') }}">メンバー編集ページ</a>
                </div>
            </div>
            <main class="py-4">
                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                @yield('content')
            </main>
        </div>
    </body>
</html>