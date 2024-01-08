@extends('layouts.navbar')

@section('content')
<div class="container sticky-top ms-auto me-0 d-flex align-items-start flex-row-reverse">
  <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><<</button>
</div>
<div class="d-flex flex-column">
  <div class="container d-flex flex-column w-75">
    <h1 class="text-light mt-3 text-start w-100">{{ $material->name }}</h1>
    <p class="text-light mt-3">{{ $material->description }}</p>
  </div>
  <div class="container h-100 d-flex flex-column align-items-center justify-content-center mt-3">
    <video width=1250 height=650 class="object-fit-cover" controls>
      <source src="{{ asset('storage/'.$material->video) }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </div>
  <div class="container d-flex justify-content-around w-75 px-2">
    <div class="container px-0">
      <a href="{{ asset('storage/'.$material->modul) }}" class="btn btn-primary my-3" download>PDF MODUL</a>
    </div>
  </div>
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasRightLabel">{{ $course->name }}</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <h5>{{ $material->name }}</h5>
      <hr>
      <ul class="list-group w-100 text-center mb-5 mt-5">
        @foreach($course->material as $materi)
            
          <li class="list-group-item"><a href="{{ route('learn', ['course' => $course, 'materi' => $materi]) }}" class="btn btn-primary">{{ $materi->name }}</a></li>
          
        @endforeach
        <li class="list-group-item"><a href="{{ route('home') }}" class="btn btn-primary">Back to home</a></li>
      </ul>
    </div>
  </div>
</div>
@endsection