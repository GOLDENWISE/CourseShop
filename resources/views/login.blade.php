@extends('layouts.auth')
@section('login')
<section class="login" style="height: 476px;">
      <h1>LOGIN</h1>
      <form action="">
        @csrf
        <input type="email" name="email" id="email" placeholder="Email">
        <input type="password" name="password" id="password" placeholder="Password">
        <button type="submit" name="register">SUBMIT</button>
      </form>
      <p>Belum memiliki akun? Lakukan <a href="/register">register</a> sekarang!</p>
    </section>
    @endsection