<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contacts Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Contacts Form
      </a>
    </div>
  </header>

  <main>
    <div class="contacts-form__content">
      <div class="contacts-form__heading">
        <h2>お問い合わせ</h2>
      </div>
      <form class="form" action="/contacts/confirm" method="post">
          @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="name" placeholder="テスト太郎" value="{{ old('name') }}" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別を選択</span>
            <span class="form__label--required">必須</span>
        　</div>
        　<div class="form-item_val">
            <input type="radio" name="gender" id="male" value="" value="{{ old('gender') }}" />
            <label for="male">男性</label>
            <input type="radio" name="gender" id="female" value="" value="{{ old('gender') }}" />
            <label for="female">女性</label>
            <input type="radio" name="gender"
            id="other" value="" value="{{ old('gender') }}" />
            <label for="other">その他</label>
          </div>
          <span class="error-message" style="color: red; display: none;">性別を選択してください</span>
          </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="tel" name="tel" placeholder="09012345678" value="{{ old('tel') }}" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
        　<div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">必須</span>
        </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address_line1"placeholder="住所" value= "{{ old('address_line1') }}">
          </div>
          <div class="form__error">
             <input type="text" name="address_line2" placeholder="建物名value= "{{ old('address_line2') }}">
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">必須</span>
          </div>
             <input type="radio" id="type1" name="inquiry_type" value="商品のお届けについて”
             <label for="type1”>商品のお届けについて<label>
             <input type="radio" id="type2" name="inquiry_type" value="
             商品の交換について
             <label for="type2”>商品の交換について<label>
        　　　<input type="radio" id="type3” name="inquiry_type” value”
             商品トラブル
             <label for="type3">商品トラブル<label>
             <input type="radio" id="type4" name="inquiry_type" value="
             ショップへの問い合わせ
             <label for="type4”>ショップへの問い合わせ<label>
             <input type="radio" id="type5” name="inquiry_type” value”
             その他
             <label for="type5”>その他<label>
             @error(' inquiry_type' )
                 <div style="color:red;”>
             @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問合せ内容</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--textarea">
            <textarea name="content" placeholder="お問合せ内容を入力して下さい"></textarea>
         </div>
         <div class="form__error">
         </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>

