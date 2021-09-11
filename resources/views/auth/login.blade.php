@extends('layouts.app')

@section('content')

<div class="breadcrumbs">
  <div class="container">
    <div class="breadcrumbs-main">
      <ol class="breadcrumb">
        <li><a href="{{route('index')}}">Ana Sayfa</a></li>
        <li class="active">Giriş Yap</li>
      </ol>
    </div>
  </div>
</div>

<div class="account">
  <div class="container">
  <div class="account-top heading">
      <h2>GİRİŞ YAP</h2>
    </div>
    <div class="account-main" align="center">
      <div class="col-md-6 account-left">
        <h3>Yönetim Paneli</h3>
        <div class="account-bottom">
          <form method="POST" action="{{ route('login') }}">
              @csrf
          <input placeholder="Mail Adresiniz" name="email" type="text" tabindex="3" required>
          @if($errors->has('email'))
          <span class="invalid-feedback">
            <strong>{{ $errors->first('email')}}</strong>
          </span>
          @endif
          <input placeholder="Şifreniz" name="password" type="password" tabindex="4" required>
          @if($errors->has('password'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
          <div class="address">

            <input type="submit" value="Login" >
          </div>
        </form>
        </div>
      </div>

      <div class="clearfix"></div>
    </div>
  </div>
</div>

@endsection
