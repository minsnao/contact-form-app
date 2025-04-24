<h1>登録画面になる</h1>

@if ($errors->any())
<div class="">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div>
        <label for="name">名前</label><br>
        <input type="text" name="name" value="{{ old('name') }}" required>
    </div>
    <div>
        <label for="email">メールアドレス</label><br>
        <input type="email" name="email" value="{{ old('email') }}" required>
    </div>
    <div>
        <label for="password">パスワード</label><br>
        <input type="password" name="password" required>
    </div>
    <div>
        <label for="password_confirmation">パスワード確認</label><br>
        <input type="password" name="password_confirmation" required>
    </div>
    <button type="submit">登録する</button>
</form>




<!-- 挙動確認問題なし -->