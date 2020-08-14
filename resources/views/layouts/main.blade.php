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
            <h1>My Recipes</h1>
            <!--
            {{-- 画面上部に表示するナビゲーションバーです。 --}}
            <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    -->
                        <!-- Left Side Of Navbar 
                        <ul class="navbar-nav mr-auto">
                            <li>top</li>
                            <li>recipe</li>
                            <li>mypage</li>
                        </ul>
                        -->
                        <!-- Right Side Of Navbar
                        <ul class="navbar-nav ml-auto">
                        </ul>
                    </div>
                </div>
            </nav>
            {{-- ここまでナビゲーションバー --}}
             -->
            
            <div class="container">
                <div class="row">
                    <form class="form-inline col-md-8">
                      <div class="form-group">
                        <label for="exampleInputEmail1">キーワードで探す</label>
                        <input type="text" class="form-control m-1" id="exampleInputEmail1" placeholder="例：クッキー">
                      </div>
                      <button type="submit" class="btn btn-default m-1">検索</button>
                    </form>
                    <a class="btn btn-info col-md-1 m-1" href="#" role="button">ログイン</a>
                    <a class="btn btn-info col-md-1 m-1" href="#" role="button">新規登録</a>
                </div>
                <div class="row">
                    <div class="col-md-2 text-center m-1">カテゴリーから探す</div>
                    <a class="btn btn-info col-md-2 m-1" href="#" role="button">カテゴリー１</a>
                    <a class="btn btn-info col-md-2 m-1" href="#" role="button">カテゴリー２</a>
                    <a class="btn btn-info col-md-2 m-1" href="#" role="button">カテゴリー１</a>
                    <a class="btn btn-info col-md-2 m-1" href="#" role="button">カテゴリー２</a>
                    <a class="btn btn-info col-md-2 m-1" href="#" role="button">カテゴリー１</a>
                </div>
            </div>

            <main class="py-4">
                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                @yield('content')
            </main>
        </div>
    </body>
</html>