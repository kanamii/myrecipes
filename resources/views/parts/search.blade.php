<!-- 767px以下のみ表示 -->
<div class="navigation d-md-none"> 
    <div class="container-fluid">
        <div class="row">
            <form class="form-inline" action="{{ action('RecipeController@searchIndex') }}" method="get">
                <div class="form-group">
                    <input type="text" class="form-control nav-form" name="cond_title" placeholder="キーワードで探す">
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn nav-btn">検索</button>
            </form>
        </div>
        <div class="row">
            <form class="form-inline" action="{{ action('RecipeController@categoryIndex') }}" method="get">
                <label for="category" class="col-5 m-1">カテゴリーから探す</label>
                <input type="submit" name="category" value="ケーキ" class="col-5 btn nav-btn m-1">
                <input type="submit" name="category" value="焼き菓子" class="col-5 btn nav-btn m-1">
                <input type="submit" name="category" value="ゼリー・アイス" class="col-5 btn nav-btn m-1">
                <input type="submit" name="category" value="和菓子" class="col-5 btn nav-btn m-1">
                <input type="submit" name="category" value="そのほか" class="col-5 btn nav-btn m-1">
            </form>
        </div>
    </div>
</div>

<!-- 768px以上で表示 -->
<div class="navigation d-none d-md-block"> 
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