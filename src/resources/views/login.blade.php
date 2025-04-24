<h2>ログインページ</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">メールアドレス</label>
            <input type="email" name="email" required autofocus>
        </div>
        <div>
            <label for="password">パスワード</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <button type="submit">ログイン</button>
        </div>
    </form>

    <div>
        <a href="{{ route('register') }}">新規登録</a>
    </div>



    <!-- 挙動確認問題なし -->
    <!-- 次、出来たらログイン状態のみに'/'許可し、ログアウト時はログイン画面に栓されるようにする -->