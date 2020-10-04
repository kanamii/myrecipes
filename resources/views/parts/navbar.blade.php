<nav class="navbar navbar-expand-lg navbar-light navbar-bg">
  <a class="navbar-brand" href="{{ url('/') }}">My Recipes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarToggler">
    {{-- ログインしていなかったらログイン画面へのリンクを表示 --}}
        @guest
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">ログイン</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/register') }}" role="button">新規登録</a>
                </li>
            </ul>
    {{-- ログインしていたらメンバーページとログアウトボタンを表示 --}}
        @else
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('member', auth()->user()->id) }}">マイページ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('member.edit', auth()->user()->id) }}">マイページ編集</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('recipe.add') }}">レシピ投稿</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('messages.Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
        @endguest
  </div>
</nav>