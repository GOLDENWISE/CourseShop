@auth

  @if(!Auth::user()->admin->status)
    
    @include('layouts.header')
    <body style="background-color: #702228;">
  
  @endif
      
@else

    @include('layouts.header')
    <body style="background-color: #702228;">

@endauth

  <nav class="navbar">

    @auth

      @if(!Auth::user()->admin->status)

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
      
    @else
    
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
    
    @endauth

    @auth

      <div class="menu-profile">
        <ul>
          <li><a href="{{ route('logout') }}">Logout</a></li>
          <li><a href="">Dashboard</a></li>
        </ul>
      </div>

      @if(Auth::user()->admin->status) 
        
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

  @auth

    @if(!Auth::user()->admin->status)

      @yield('content')
      <script src="{{ asset('js/script.js') }}"></script>
      
    @endif
  
  @else

    @yield('content')
    <script src="{{ asset('js/script.js') }}"></script>

  @endauth
</body>
</html>