@extends('layouts.app')

@section('content')
<div class="breadcrumbs">
  <div class="container">
    <div class="breadcrumbs-main">
      <ol class="breadcrumb">
        <li><a href="{{route('index')}}">Anasayfa</a></li>
        <li class="active">Kayıt Ol</li>
      </ol>
    </div>
  </div>
</div>


<div class="register">
  <div class="container">
    <div class="register-top heading">
      <h2>KAYIT OL</h2>
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf
    <div class="register-main">
      <div class="col-md-6 account-left">
        <input class="{{ $errors->has('name') ? ' is-invalid ' : ''}}" name="name" value="{{ old('name') }}" type="text" placeholder="Adınız ve Soyadınız" tabindex="1" required>
@if ($errors->has('name'))
<span class="invalid-feedback">
  <strong>{{$errors->first('name')}}</strong>
</span>
@endif

<input class="{{ $errors->has('email') ? ' is-invalid ' : ''}}" name="email" value="{{ old('email') }}" type="text" placeholder="Mail Adresiniz" tabindex="3" required>
@if ($errors->has('email'))
<span class="invalid-feedback">
<strong>{{$errors->first('email')}}</strong>
</span>
@endif

<input class="{{ $errors->has('password') ? ' is-invalid ' : ''}}" name="password"  type="password" placeholder="Şifreniz" tabindex="4" required>
@if ($errors->has('password'))
<span class="invalid-feedback">
<strong>{{$errors->first('password')}}</strong>
</span>
@endif

<input id="password-confirm" type="password" name="password_confirmation" required>



      </div>

  </div>
  <div class=<"address submit">
    <input type="submit" value="Submit">
  </div>
</div>





                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
