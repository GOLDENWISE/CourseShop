@include('content-jurusan')
<div class="nav-jurusan">
    @foreach($jurusan->course as $course)
      @if(Auth::user()->mentor->status)
        @if($course->mentor_id != Auth::user()->mentor->id)
          <a href="{{ route('course-class', ['jurusan' => $course->jurusan_id,'course' => $course->id]) }}" class="link-jurusan">{{ $course->name }}</a>
        @endif
      @endif
    @endforeach
</div>