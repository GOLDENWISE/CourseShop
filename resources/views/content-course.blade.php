@include('content-jurusan')
<div class="nav-jurusan">
    @foreach($jurusan->course as $course)
      <a href="{{ route('course-class', ['jurusan' => $course->jurusan_id,'course' => $course->id]) }}" class="link-jurusan">{{ $course->name }}</a>
    @endforeach
</div>