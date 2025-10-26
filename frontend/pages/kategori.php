<section class="kategori-section">
    <h2>Kategori Aula Kami</h2>
    <p>Pilih jenis aula sesuai kebutuhan acara Anda — mulai dari reguler hingga VIP.</p>

    <div class="slider-container">
        <button class="prev-btn">&#10094;</button>
        <div class="slider">
            <div class="slide">
                <img src="assets/img/aula-wedding.jpg" alt="Aula Pernikahan">
                <div class="slide-info">
                    <h3>Aula Pernikahan</h3>
                    <span class="badge vip">VIP</span>
                    <p>Ruang megah untuk momen istimewa pernikahan Anda.</p>
                </div>
            </div>
            <div class="slide">
                <img src="assets/img/aula-birthday.jpg" alt="Aula Ulang Tahun">
                <div class="slide-info">
                    <h3>Aula Ulang Tahun</h3>
                    <span class="badge reguler">Reguler</span>
                    <p>Tempat ideal untuk pesta ulang tahun yang berkesan.</p>
                </div>
            </div>
            <div class="slide">
                <img src="assets/img/aula-meeting.jpg" alt="Aula Meeting">
                <div class="slide-info">
                    <h3>Aula Meeting</h3>
                    <span class="badge vip">VIP</span>
                    <p>Desain profesional untuk rapat dan konferensi eksklusif.</p>
                </div>
            </div>
            <div class="slide">
                <img src="assets/img/aula-seminar.jpg" alt="Aula Seminar">
                <div class="slide-info">
                    <h3>Aula Seminar</h3>
                    <span class="badge reguler">Reguler</span>
                    <p>Ruang nyaman untuk kegiatan edukatif dan pelatihan.</p>
                </div>
            </div>
        </div>
        <button class="next-btn">&#10095;</button>
    </div>
</section>

<script>
    const slider = document.querySelector('.slider');
    const slides = document.querySelectorAll('.slide');
    const next = document.querySelector('.next-btn');
    const prev = document.querySelector('.prev-btn');
    let current = 0;

    function updateSlide() {
        slider.style.transform = `translateX(-${current * 100}%)`;
    }

    next.addEventListener('click', () => {
        current = (current + 1) % slides.length;
        updateSlide();
    });

    prev.addEventListener('click', () => {
        current = (current - 1 + slides.length) % slides.length;
        updateSlide();
    });

    // Auto-slide setiap 5 detik
    setInterval(() => {
        current = (current + 1) % slides.length;
        updateSlide();
    }, 5000);
</script>
