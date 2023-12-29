<section class="home">
  <div class="heading-user">
    <div class="content-student">
      <h1>Selamat Datang, {{ Auth::user()->name }}</h1>
      <p>Semoga aktivitas belajarmu menyenangkan</p>
    </div>
    <div class="home-langganan">
      <h1>Status Langganan</h1>
      <div class="langganan-content">
        <p>Mulailah belajar di Course Academy. Jelajahi Course berikut ini : </p>
        <div class="btn-langganan">
          <a href="{{ route('home') }}" class="btn-langganan">Daftar Course</a>
        </div>
      </div>
    </div>
  </div>
  <div class="mid-student">
    <div class="learning-path-home">
      <h4>CourseAcademy</h4>
      <p style="margin-top: -10px;">Student</p>
      <p class="path-title">Playback</p>
      <div class="learning-path-content">
          <a href="">Lihat Perjalanan</a>
      </div>
    </div>
    <div class="learning-activity">
      <h3 style="margin-left: 20px;">Aktivitas Belajar</h3>
      <hr class="line-learning-activity">
      <div class="learning-taken-student">
        <p>Anda belum memiliki aktivitas belajar di Course Academy</p>
        <div class="study-button">
            <a href="">Belajar sekarang</a>
        </div>
      </div>
    </div>
  </div>
  <hr class="line-content-student-footer">
  @include('layouts.footer')
</section>