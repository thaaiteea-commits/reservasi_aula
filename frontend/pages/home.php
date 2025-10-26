<!-- ================= HERO / LANDING SECTION ================= -->
<section class="hero">
  <div class="hero-text">
    <h1>Selamat Datang di <span>AULA</span></h1>
    <p>Kami menghadirkan desain interior dan ruang elegan untuk setiap momen spesial Anda.</p>
    <a href="?page=reservasi" class="btn">Buat Reservasi</a>
  </div>
</section>

<!-- ================= KATEGORI PREVIEW ================= -->
<section class="kategori-preview">
  <h2>Kategori Aula</h2>
  <p>Pilih jenis aula yang sesuai untuk acara Anda</p>
  <div class="kategori-grid">
    <div class="kategori-card">
      <img src="assets/img/aula-wedding.jpg" alt="Aula Pernikahan">
      <div class="overlay">
        <h3>Pernikahan</h3>
        <a href="?page=kategori" class="btn-mini">Lihat Detail</a>
      </div>
    </div>
    <div class="kategori-card">
      <img src="assets/img/aula-birthday.jpg" alt="Aula Ulang Tahun">
      <div class="overlay">
        <h3>Ulang Tahun</h3>
        <a href="?page=kategori" class="btn-mini">Lihat Detail</a>
      </div>
    </div>
    <div class="kategori-card">
      <img src="assets/img/aula-seminar.jpg" alt="Aula Seminar">
      <div class="overlay">
        <h3>Seminar & Meeting</h3>
        <a href="?page=kategori" class="btn-mini">Lihat Detail</a>
      </div>
    </div>
  </div>
</section>

<!-- ================= ABOUT SECTION ================= -->
<section class="about">
  <div class="about-content">
    <img src="../aset/img/wedding.png" alt="Tentang Kami">
    <div class="about-text">
      <h2>Tentang Kami</h2>
      <p>
        AULA Interior & Architecture adalah studio profesional yang fokus pada desain ruang elegan dan modern. 
        Kami membantu Anda mewujudkan suasana acara yang memukau — mulai dari pernikahan, ulang tahun, hingga acara bisnis.
      </p>
      <p>
        Setiap detail kami rancang dengan harmoni dan keindahan untuk menciptakan pengalaman ruang yang berkesan.
      </p>
    </div>
  </div>
</section>

<!-- ================= GALLERY SLIDER SECTION ================= -->
<section class="gallery">
  <h2>Galeri Aula</h2>
  <div class="gallery-slider">
    <div class="slides">
      <div class="slide"><img src="../aset/img/1.jpg" alt="Aula 1"></div>
      <div class="slide"><img src="../aset/img/2.jpg" alt="Aula 2"></div>
      <div class="slide"><img src="../aset/img/3.jpg" alt="Aula 3"></div>
      <div class="slide"><img src="../aset/img/4.jpg" alt="Aula 4"></div>
      <div class="slide"><img src="../aset/img/5.jpg" alt="Aula 5"></div>
    </div>

    <button class="gallery-btn prev">&#10094;</button>
    <button class="gallery-btn next">&#10095;</button>
  </div>
</section>

<script>
  const slidesContainer = document.querySelector('.gallery .slides');
  const slideCount = document.querySelectorAll('.gallery .slide').length;
  const prevButton = document.querySelector('.gallery .prev');
  const nextButton = document.querySelector('.gallery .next');
  let index = 0;
  let isSliding = false;

  function showSlide(n) {
    if (isSliding) return;
    isSliding = true;
    index = (n + slideCount) % slideCount;
    slidesContainer.style.transform = `translateX(-${index * 100}%)`;
    setTimeout(() => { isSliding = false; }, 1000);
  }

  nextButton.addEventListener('click', () => showSlide(index + 1));
  prevButton.addEventListener('click', () => showSlide(index - 1));

  // Auto-slide tiap 6 detik
  setInterval(() => showSlide(index + 1), 6000);
</script>

<!-- ================= SERVICES SECTION ================= -->
<section class="services">
  <h2>Layanan Kami</h2>
  <div class="services-grid">
    <div class="service-card">
      <h3>Desain Interior</h3>
      <p>Desain interior modern dan mewah untuk setiap kebutuhan acara Anda.</p>
    </div>
    <div class="service-card">
      <h3>Dekorasi Event</h3>
      <p>Tema dekorasi elegan untuk menciptakan suasana yang berkesan.</p>
    </div>
    <div class="service-card">
      <h3>VIP Arrangement</h3>
      <p>Paket eksklusif dengan fasilitas premium untuk tamu istimewa Anda.</p>
    </div>
  </div>
</section>
