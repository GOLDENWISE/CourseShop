@include('layouts.header')
<body style="background-color: #702228;">
  <nav class="navbar">
    <div class="logo">
      <a href="{{ route('home') }}">
        <img src="{{ asset('img/CourseShopLogo.png') }}" alt="Logo Course Shop">
      </a>
    </div>
    <div class="menu">
      <ul>
        <li><a href="">Langganan</a></li>
        <li><a href="{{ route('jurusan') }}">Learning Path</a></li>
        <li><a href="">Lainnya</a></li>
      </ul>
    </div>
    @auth
    <div class="menu-profile">
      <ul>
        <li><a href="{{ route('logout') }}">Logout</a></li>
        <li><a href="">Dashboard</a></li>
      </ul>
    </div>
      <img src="{{ asset('img/Profil.jpg') }}" alt="" style="width: 70px; height: 70px;" onclick="showMenu()">
    @else
      <a href="{{ route('login') }}" class="login-button">Login</a>
    @endauth
  </nav>
  
  @if(Request::routeIs('jurusan'))
    
    @include('content-jurusan')
    
  @elseif(Request::routeIs(['course', 'course-class']))
  
    @include('content-course')
  
  @endif

  @yield('content')
  <script>
    function showMenu() {
      var menu = document.querySelector('div.menu-profile');
      if (menu.style.display === 'none' || menu.style.display === '') {
        menu.style.display = 'flex';
      } else {
        menu.style.display = 'none';
      }
    }
  </script>
</body>
</html>