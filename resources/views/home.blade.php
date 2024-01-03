  @extends('layouts.navbar')

  @section('content')

    @auth

      @if(Auth::user()->student->status)

        @include('homestudent')
      
      @elseif(Auth::user()->mentor->status)

        @include('homeMentor')

      @endif

    @else

      @include('homeguest')
      
    @endauth

  @endsection
</body>
</html>