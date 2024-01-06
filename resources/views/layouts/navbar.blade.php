@include('layouts.header')
<body style="background-color: #702228;">
  <nav class="navbar">
    
    @if(!Request::routeIs(['admin.index','purchase-data', 'course-data']))

      <div class="logo">
        <a href="{{ route('home') }}">
          <img src="{{ asset('img/CourseShopLogo.png') }}" alt="Logo Course Shop">
        </a>
      </div>
      <div class="menu">
        <ul>
          <li><a href="{{ route('langganan.index') }}">Langganan</a></li>
          <li><a href="{{ route('jurusan') }}">Learning Path</a></li>
          <li><a href="">Lainnya</a></li>
        </ul>
      </div>

    @endif

    @auth

      <div class="menu-profile" style="z-index: 4;">
        <ul>
          @if(Auth::user()->admin->status)

            @if(!Request::routeIs(['admin.index','purchase-data', 'course-data']))

              <li><a href="{{ route('admin.index') }}">Admin</a></li>

            @else

              <li><a href="{{ route('home') }}">Beranda</a></li>

            @endif

          @endif

          <li><a href="{{ route('logout') }}">Logout</a></li>
        </ul>
      </div>

      @if(Request::routeIs(['admin.index','purchase-data', 'course-data'])) 
      
        <img src="{{ asset('img/Profil.jpg') }}" alt="" style="width: 70px; height: 70px;margin-left: auto; margin-right: 0" onclick="showMenu()">
        
      @else
        
        <img src="{{ asset('img/Profil.jpg') }}" alt="" style="width: 70px; height: 70px;" onclick="showMenu()">
        
      @endif
    
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

  @if(!Request::routeIs(['admin.index','purchase-data', 'course-data']))

      <script src="{{ asset('js/script.js') }}"></script>
    
  @endif

</body>
</html>