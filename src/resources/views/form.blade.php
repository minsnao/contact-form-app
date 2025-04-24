<p>フォーム入力ページ</p>

<form action="{{ route('contact.confirm') }}" method="POST">
    @csrf
    {{-- name --}}
    <p>お名前<span>※</span></p>
    <input type="text" name="last_name" placeholder="名字" value="{{ old('last_name') }}" required>
    <input type="text" name="first_name" placeholder="名前" value="{{ old('first_name') }}" required>

    {{-- gender --}}
    <p>性別<span>※</span></p>
    <label>
        <input type="radio" name="gender" value="男性" @checked(old('gender') == '男性') required>男性
    </label>
    <label>
        <input type="radio" name="gender" value="女性" @checked(old('gender') == '女性') required>女性
    </label>
    <label>
        <input type="radio" name="gender" value="その他" @checked(old('gender') == 'その他') required>その他
    </label>
    {{-- ?    old表記赤文字になる --}}

    {{-- email --}}
    <p>メールアドレス<span>※</span></p>
    <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" required>

    {{-- tel, IP電話やフリーダイヤル考慮--}}
    <p>電話番号<span>※</span></p>
    <input type="tel" name="tel1" size="5" maxlength="5" placeholder="080" value="{{ old('tel1') }}" required> - 
    <input type="tel" name="tel2" size="5" maxlength="5" placeholder="1234" value="{{ old('tel2') }}" required> - 
    <input type="tel" name="tel3" size="5" maxlength="5" placeholder="5678" value="{{ old('tel3') }}" required>

    {{-- address --}}
    <p>住所<span>※</span></p>
    <input type="text" name="address" placeholder="住所を入力" value="{{ old('address') }}" required>

    {{-- building --}}
    <p>建物名</p>
    <input type="text" name="building" placeholder="建物名（任意）" value="{{ old('building') }}">

    {{-- category --}}
    <p>お問い合わせの種類<span>※</span></p>
<select name="category" required>
    <option value="">選択してください</option>
    <option value="商品について" @selected(old('category') == '商品について')>商品について</option>
    <option value="配送について" @selected(old('category') == '配送について')>配送について</option>
    <option value="その他" @selected(old('category') == 'その他')>その他</option>
</select> 
    {{-- ?   oldで赤文字になる、構文的に変なのかどうか？ --}}

    {{-- detail --}}
    <p>お問い合わせの内容<span>※</span></p>
    <textarea name="detail" placeholder="お問い合わせ内容をご記載下さい" required>{{ old('detail') }}</textarea>

    <button type="submit">確認画面へ</button>

</form>





<!--　フォーム入力確認に関しては問題なく進むことを確認⇒confirmまで問題なく進む -->

