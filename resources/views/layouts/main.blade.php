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
            @include('parts.navbar')
            <div class="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <form class="form-inline" action="{{ action('RecipeController@searchIndex') }}" method="get">
                                <div class="form-group">
                                    <label for="search">キーワードで探す</label>
                                    <input type="text" class="form-control nav-form m-1" name="cond_title" placeholder="例：クッキー">
                                </div>
                                {{ csrf_field() }}
                                <button type="submit" class="btn nav-btn m-1">検索</button>
                            </form>
                        </div>
                        <div class="col-md-7">
                            <form class="form-inline" action="{{ action('RecipeController@categoryIndex') }}" method="get">
                                <label for="category" class="m-2">カテゴリーから探す</label>
                                <input type="submit" name="category" value="ケーキ" class="btn nav-btn m-1">
                                <input type="submit" name="category" value="焼き菓子" class="btn nav-btn m-1">
                                <input type="submit" name="category" value="ゼリー・アイス" class="btn nav-btn m-1">
                                <input type="submit" name="category" value="和菓子" class="btn nav-btn m-1">
                                <input type="submit" name="category" value="そのほか" class="btn nav-btn m-1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>
</html>