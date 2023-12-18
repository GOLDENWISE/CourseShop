@include('layouts.header')
<body>
  <section class="auth" style="margin-top: 110px; display: flex; justify-content: space-evenly; align-items: center; margin-bottom: 110px;">
    @include('layouts.authlogo')
    @yield('login')
    @yield('register')
  </section>
</body>
</html>