  @extends('layouts.navbar')

  @section('content')
  <section class="home">
    <div class="heading">
      <div class="content">
        <h1>Apa itu Course Shop?</h1>
        <p>platform pembelajaran online yang berfokus pada kebutuhan dan minat pembelajar, menawarkan berbagai kursus yang relevan dan terkini, dirancang oleh para ahli untuk membantu pembelajar mencapai tujuan mereka serta memiliki sistem pembelajaran yang terstruktur dan mudah diikuti, dengan fitur pendukung yang membantu pelajar belajar secara efektif.</p>
      </div>
    </div>
    <div class="list-product">
      <div class="product">
        <p>Produk 1</p>
      </div>
      <div class="product">
        <p>Produk 2</p>
      </div>
      <div class="product">
        <p>Produk 3</p>
      </div>
      <div class="product">
        <p>Produk 4</p>
      </div>
    </div>

    <div class="reason">
      <h1>"Kenapa Course Academy Berbeda?"</h1>
      <p>Course Academy melakukan pendekatan yang berpusat pada pembelajar, materi yang diberikan relevan dan terkini, sistem pembelajaran yang diberikan terstruktur, dan fitur-fitur yang disediakan mendukung kesuksesan pembelajar. Sehingga,  Course Academy menjadi pilihan yang tepat bagi para pembelajar yang ingin meningkatkan keterampilan dan pengetahuan mereka.</p>
    </div>

    <div class="promotion">
      <div class="text-content">
        <h1>Belajar Fleksibel Sesuai Jadwal Anda</h1>
        <p>Belajar kapan pun, dimana pun, secara mandiri. Bebas memilih kelas sesuai minat belajar. Akses Seumur Hidup ke kelas dan forum diskusi setelah lulus.</p>
        <hr>
        <h1>Learning Path</h1>
        <p>Learning path akan membantu anda dalam belajar di Academy dengan kurikulum yang dibangun bersama pelaku industri ternama.</p>
      </div>
    </div>

    <div class="link-login-promotion">
      <p>Ayo belajar lebih terarah dengan learning path</p>
      <a href="{{ route('register') }}">Buat Akun</a>
    </div>

    <div class="line"></div>

    <div class="footer">
      <div class="footer-asideLeft">
        <p>COURSE SHOP</p>
        <p>Jl. Teuku Nyak Arief, RT.7/RW.8, Simprug, Kec. Kby. Lama, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12220</p>
      </div>

      <div class="footer-mid">
        <ul>
          <li>Hubungi Kami</li>
          <li>Tentang Kami</li>
          <li>FAQ</li>
        </ul>
      </div>

      <div class="footer-asideRight">
        <ul>
          <li><img src="../img/Instagram.png" alt="">Instagram</li>
          <li><img src="../img/Youtube.png" alt="">Youtube</li>
          <li><img src="../img/Twitter.png" alt="">Twitter</li>
        </ul>
      </div>
    </div>
  </section>
  @endsection
</body>
</html>