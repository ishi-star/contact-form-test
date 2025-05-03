@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="contact-form__content">

  <div class="contact-form__heading">
    <h2>Contact</h2>
  </div>

  <form class="form" action="contacts/confirm" method="post">
    @csrf
  <div class="form__group">
    <div class="form__group-title">
      <span class="form__label--item">お名前</span>
      <span class="form__label--required">※</span>
    </div>
    <div class="form__group-content form__group-content--name">
      <div class="form__input--text">
        <input type="text" name="last_name" placeholder="性" value="{{ old('last_name') }}" />
      </div>
      <div class="form__input--text">
        <input type="text" name="first_name" placeholder="名" value="{{ old('first_name') }}" />
      </div>
      <div class="form__error">
        @error('last_name')
          {{ $message }}<br>
        @enderror
        @error('first_name')
          {{ $message }}
        @enderror
      </div>
    </div>
  </div>
  <div class="form__group">
    <div class="form__group-title">
      <span class="form__label--item">性別</span>
      <span class="form__label--required">※</span>
    </div>
    <div class="form__group-content">
      <div class="form__input--radio">
        <label><input type="radio" name="gender" value="男性" checked>男性</label>
        <label><input type="radio" name="gender" value="女性" >女性</label>
        <label><input type="radio" name="gender" value="その他">その他</label>
      </div>
      <div class="form__error">
      @error('gender')
      {{ $message }}
      @enderror
      </div>
    </div>
  </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" 
          name="email" 
          placeholder="test@example.com" 
          value="{{ old('email') }}" />
        </div>
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">電話番号</span>
        <span class="form__label--required">※</span>
      </div>
      < class="form__group-content">
        <div class="form__input--tel">
          <input type="text" name="phone_area_code" placeholder="例：090" value="{{ old('phone_area_code') }}" maxlength="5" />
        </div>
        <div class="form__input--tel">
          <input type="text" name="phone_number_1" placeholder="例：1234" value="{{ old('phone_number_1') }}" maxlength="5" />
        </div>
        <div class="form__input--tel">
          <input type="text" name="phone_number_2" placeholder="例：5678" value="{{ old('phone_number_2') }}" maxlength="5" />
        </div>
        <div class="form__error">
          @error('phone_area_code')
            {{ $message }}<br>
          @enderror
          @error('phone_number_1')
            {{ $message }}<br>
          @enderror
          @error('phone_number_2')
            {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">住所</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="address" placeholder="例：東京都港区1-1-1" value="{{ old('address') }}" />
        </div>
        <div class="form__error">
          @error('address')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">建物名</span>
        <!-- <span class="form__label--required">※</span> -->
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="building" placeholder="例：例：千駄ヶ谷マンション101" value="{{ old('building') }}" />
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせの種類</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--select">
          <select name="detail">
            <option value="">選択してください</option>
            <option value="商品のお届けについて" {{ old('detail') == '商品のお届けについて' ? 'selected' : '' }}>商品のお届けについて</option>
            <option value="商品の交換について" {{ old('detail') == '商品の交換について' ? 'selected' : '' }}>商品の交換について</option>
            <option value="商品トラブル" {{ old('detail') == '商品トラブル' ? 'selected' : '' }}>商品トラブル</option>
            <option value="ショップへのお問い合わせ" {{ old('detail') == 'ショップへのお問い合わせ' ? 'selected' : '' }}>ショップへのお問い合わせ</option>
            <option value="その他" {{ old('detail') == 'その他' ? 'selected' : '' }}>その他</option>
          </select>
        </div>
        <div class="form__error">
          @error('detail')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせ内容</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--textarea">
          <textarea name="content" placeholder="お問い合わせ内容をご記載ください">{{ old('content') }}</textarea>
        </div>
        <div class="form__error">
        @error('content')
        {{ $message }}
        @enderror
        </div>
      </div>
    </div>

    <div class="form__button">
      <button class="form__button-submit" type="submit">確認画面</button>
    </div>


  </form>
</div>
@endsection
