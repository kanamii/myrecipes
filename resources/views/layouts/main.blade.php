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
        <script src="{{ secure_asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <div class="header-logo row">
                <img src="./storage/topphoto.jpg" alt="トップページ" width="140">
                <h1>My Recipes</h1>
            </div>
            <div class="container">
                <div class="text-right">
                    {{-- ログインしていなかったらログイン画面へのリンクを表示 --}}
                    @guest
                        <a class="btn btn-info m-1" href="{{ route('login') }}">ログイン</a>
                        <a class="btn btn-info m-1" href="{{ url('/register') }}" role="button">新規登録</a>
                    {{-- ログインしていたらメンバーページとログアウトボタンを表示 --}}
                    @else
                        <a href="{{ route('member', auth()->user()->id) }}">{{ auth()->user()->name }}</a>
                        <a class="btn btn-info m-1" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                </div>

                <div class="text-left">
                    <form class="form-inline" action="{{ action('RecipeController@searchIndex') }}" method="get">
                      <div class="form-group">
                        <label for="search">キーワードで探す</label>
                        <input type="text" class="form-control m-1" name="cond_title" placeholder="例：クッキー">
                      </div>
                      {{ csrf_field() }}
                      <button type="submit" class="btn btn-default m-1">検索</button>
                    </form>
                </div>
                <div class="row">
                    <form action="{{ action('RecipeController@categoryIndex') }}" method="get">
                        <label for="category">カテゴリーから探す</label>
                        <input type="submit" name="category" value="ケーキ" class="btn btn-info col-md-2 m-1">
                        <input type="submit" name="category" value="焼き菓子" class="btn btn-info col-md-2 m-1">
                        <input type="submit" name="category" value="ゼリー・アイス" class="btn btn-info col-md-2 m-1">
                        <input type="submit" name="category" value="和菓子" class="btn btn-info col-md-2 m-1">
                        <input type="submit" name="category" value="そのほか" class="btn btn-info col-md-2 m-1">
                    </form>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <p>確認用リンク</p>
                    <a href="{{ url('/') }}" class="m-1">トップ</a>
                    <a href="{{ url('/register') }}" class="m-1">会員登録</a>
                    <a href="{{ url('/login') }}">ログイン</a>
                </div>
            </div>
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>
</html>