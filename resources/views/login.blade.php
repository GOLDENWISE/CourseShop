@extends('layouts.auth')
@section('authorization-content')
<section class="login" style="height: 476px;">
  <h1>LOGIN</h1>
  <form action="{{ route('authorize') }}" method="post">
    @csrf
    <input type="email" name="email" id="email" placeholder="Email">
    <input type="password" name="password" id="password" placeholder="Password">
    <button type="submit" name="register">SUBMIT</button>
  </form>
  <p>Belum memiliki akun? Lakukan <a href="{{ route('register') }}">register</a> sekarang!</p>
</section>
@endsection