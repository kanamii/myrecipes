<!-- 767px以下のみ表示 -->
<div class="search d-md-none"> 
    <div class="container">
        <div class="row">
            <form class="row col-12" action="{{ action('RecipeController@searchIndex') }}" method="get">
                <div class="form-group mb-0 pr-0 col-9">
                    <input type="text" class="form-control nav-form" name="cond_title" placeholder="キーワードで探す">
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn nav-btn col-3">検索</button>
            </form>
        </div>
        <div class="row">
            <form class="row col-12" action="{{ action('RecipeController@categoryIndex') }}" method="get">
                <h5 class="col-12 mt-2">カテゴリーから探す</h5>
                <div class="col-12">
                    <input type="submit" name="category" value="ケーキ" class="btn nav-btn col-5 mr-2 mb-2">
                    <input type="submit" name="category" value="焼き菓子" class="btn nav-btn col-5 mr-2 mb-2">
                    <input type="submit" name="category" value="ゼリー・アイス" class="btn nav-btn col-5 mr-2 mb-2">
                    <input type="submit" name="category" value="和菓子" class="btn nav-btn col-5 mr-2 mb-2">
                    <input type="submit" name="category" value="そのほか" class="btn nav-btn col-5 mr-2 mb-2">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- 768px以上で表示 -->
<div class="search d-none d-md-block"> 
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <form class="form-inline" action="{{ action('RecipeController@searchIndex') }}" method="get">
                    <div class="form-group">
                        <h6 class="mt-2 mb-2 mr-2">キーワードで探す</h6>
                        <input type="text" class="form-control nav-form m-1" name="cond_title" placeholder="例：クッキー">
                    </div>
                    {{ csrf_field() }}
                    <button type="submit" class="btn nav-btn m-1">検索</button>
                </form>
            </div>
            <div class="col-md-7">
                <form class="form-inline justify-content-end" action="{{ action('RecipeController@categoryIndex') }}" method="get">
                    <h6 class="m-2">カテゴリーから探す</h6>
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