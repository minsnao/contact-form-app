<h1>管理画面</h1>
<p>ここは管理者用ページです。</p>
@auth
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">ログアウト</button>
    </form>
@endauth

@guest
    <a href="{{ route('login') }}">ログイン</a>
    <a href="{{ route('register') }}">新規登録</a>
@endguest




<!-- しっかりログイン、ログアウト時の挙動確認 -->