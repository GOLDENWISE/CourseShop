@include('layouts.header')
<body>
  <nav style="display: flex; align-items: center; justify-content: space-evenly; height: 157px">
    <div class="logo">
      <img src="../img/CourseShopLogo.png" alt="Logo Course Shop">
    </div>
    <div class="menu" >
      <ul>
        <li><a href="">Langganan</a></li>
        <li><a href="">Learning Path</a></li>
        <li><a href="">Lainnya</a></li>
      </ul>
    </div>
    @auth
    <a href="{{ route('logout') }}" class="login-button">Logout</a>
    @else
      <a href="{{ route('login') }}" class="login-button">Login</a>
    @endauth
  </nav>
  @yield('content')
</body>

