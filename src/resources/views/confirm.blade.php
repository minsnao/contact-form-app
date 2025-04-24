<h1>入力確認ページ</h1>

<dl>
    <dt>お名前</dt>
    <dd>{{ $inputs['last_name'] }} {{ $inputs['first_name'] }}</dd>
    
    <dt>性別</dt>
    <dd>{{ $inputs['gender'] }}</dd>

    <dt>メールアドレス</dt>
    <dd>{{ $inputs['email'] }}</dd>

    <dt>電話番号</dt>
    <dd>{{ $inputs['tel1'] }}-{{ $inputs['tel2'] }}-{{ $inputs['tel3'] }}</dd>

    <dt>住所</dt>
    <dd>{{ $inputs['address'] }}</dd>

    <dt>建物名</dt>
    <dd>{{ $inputs['building'] }}</dd>

    <dt>お問い合わせの種類</dt>
    <dd>{{ $inputs['category'] }}</dd>

    <dt>お問い合わせの内容</dt>
    <dd>{{ $inputs['detail'] }}</dd>
</dl>

<!-- 送信form -->
<form action="{{ route('contact.send') }}" method="POST">
    @csrf
    @if(!empty($inputs))
        @foreach ($inputs as $key => $value)
        <input type="hidden" name="{{ $key }}" value="{{ $value }}">
        @endforeach
    @endif
    <button type="submit">サンクスページへ</button>
</form>


<!-- 修正form -->
<form action="{{ route('contact.form') }}" method="POST">
    @csrf
    @if(!empty($inputs))
        @foreach ($inputs as $key => $value)
            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
        @endforeach
    @endif
    <button type="submit">修正する</button>
</form>





<!-- 修正ボタンでフォームへの遷移は確認済み、送信ボタンでサンクスページへ飛ばないエラーで詰まっている最中 -->