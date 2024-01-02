@extends('layouts.navbar')

@section('content')
  <section class="home">
    <div class="course-heading" style="
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 228px;
      width: 100%;
      background-color: #d9d9d9">
        <div class="content-course-heading" style="
          width: 363px;
          text-align: center;">
          <h2>{{ $course->name }}</h2>
          <p>{{ $course->description }}</p>
        </div>
    </div>
    <div class="course-materials" style="
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 378px;
      width: 100%;
      gap: 48px;">
        @foreach($course->material->chunk(3) as $chunk)
          <div class="materials" style="
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            gap: 151px;">
            @foreach($chunk as $material)
              <div class="material" style="
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
                justify-content: center;
                min-height: 100px;
                width: 300px;
                background-color: #d9d9d9">
                  <p>{{ $material->name }}</p>
                </div>
            @endforeach
          </div>
        @endforeach
    </div>
  </section>
@endsection