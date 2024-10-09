<?php

$title = 'Dashboard';
include 'layout/header.php';

?>

    <section id="home" class="hero d-flex align-items-center text-white">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
            <div class="content col-md-6">
                <h2 class="mb-3">Menghubungkan Alam dengan Teknologi</h2>
                <p>
                    Menghubungkan alam dengan teknologi adalah konsep yang mencoba memanfaatkan teknologi untuk memahami, melestarikan, atau meningkatkan interaksi manusia dengan alam. Ide ini melibatkan penggunaan inovasi teknologi untuk mendukung keberlanjutan ekosistem alami, memahami fenomena alam, atau menciptakan solusi yang terinspirasi dari alam (biomimikri).
                </p>
            </div>
            <div class="image col-md-6 text-center">
                <img src="./layout/image/bghome1.png" alt="Nature and Technology Illustration" class="img-fluid" style="max-width: 400px; height: auto;">
            </div>
        </div>
    </section>

<section id="weatherforecast" class="weather-forecast container-fluid text-center py-5">
    <div class="forecast-header mb-4">
        <h5 class="text-uppercase">Radar Cuaca</h5>
        <p class="text-muted">Pemantauan real-time untuk prakiraan cepat dan akurat</p>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-2 col-sm-4 forecast-card bg-warning text-white rounded p-3 m-2">
            <h4>Senin</h4>
            <img src="icon-sunny.png" alt="Sunny" class="mb-2 img-fluid" style="width: 40px;">
            <p>25°C – 30°C</p>
        </div>
        <div class="col-md-2 col-sm-4 forecast-card bg-warning text-white rounded p-3 m-2">
            <h4>Selasa</h4>
            <img src="icon-cloudy-sun.png" alt="Partly Cloudy" class="mb-2 img-fluid" style="width: 40px;">
            <p>28°C – 30°C</p>
        </div>
        <div class="col-md-2 col-sm-4 forecast-card bg-secondary text-white rounded p-3 m-2">
            <h4>Rabu</h4>
            <img src="icon-night.png" alt="Night" class="mb-2 img-fluid" style="width: 40px;">
            <p>20°C – 25°C</p>
        </div>
        <div class="col-md-2 col-sm-4 forecast-card bg-warning text-white rounded p-3 m-2">
            <h4>Kamis</h4>
            <img src="icon-sunny.png" alt="Sunny" class="mb-2 img-fluid" style="width: 40px;">
            <p>30°C – 32°C</p>
        </div>
        <div class="col-md-2 col-sm-4 forecast-card bg-dark text-white rounded p-3 m-2">
            <h4>Jum'at</h4>
            <img src="icon-cloudy.png" alt="Cloudy" class="mb-2 img-fluid" style="width: 40px;">
            <p>18°C – 23°C</p>
        </div>
        <div class="col-md-2 col-sm-4 forecast-card bg-secondary text-white rounded p-3 m-2">
            <h4>Sabtu</h4>
            <img src="icon-night.png" alt="Night" class="mb-2 img-fluid" style="width: 40px;">
            <p>25°C – 28°C</p>
        </div>
    </div>
</section>

<section id="farmmodern" class="farming-methods container-fluid text-center py-5">
    <div class="forecast-header mb-4">
        <h5 class="text-uppercase">Panduan</h5>
        <p class="text-muted">Memperkenalkan metode pertanian yang inovatif dan ramah lingkungan, relevan untuk masyarakat desa</p>
    </div>
        <div class="row justify-content-center">
            <!-- Aquaponik -->
            <div class="col-md-5  d-flex align-items-stretch  mb-4">
                <div class="card border-0 w-100">
                    <div class="card-body">
                        <img src="./layout/image/aquaponik.png" alt="Aquaponik" class="img-fluid rounded-circle mb-3" style="height: 200px; width: auto;">
                        <h3 class="text-primary">Aquaponik</h3>
                        <p class="text-muted">Aquaponik adalah sistem pertanian berkelanjutan yang menggabungkan budidaya ikan dan tanaman. Limbah ikan menyediakan nutrisi bagi tanaman, sementara tanaman menyaring air untuk ikan, menciptakan sirkulasi yang efisien. Sistem ini menciptakan ekosistem yang berkelanjutan, di mana ikan dan tanaman saling mendukung, serta menggunakan air lebih efisien dibanding metode pertanian konvensional.</p>
                    </div>
                </div>
            </div>

            <!-- Hydroponik -->
            <div class="col-md-5 d-flex align-items-stretch mb-4">
                <div class="card border-0 w-100">
                    <div class="card-body">
                        <img src="./layout/image/hidroponik.png" alt="Hydroponik" class="img-fluid rounded-circle mb-3" style="height: 200px; width: auto;">
                        <h3 class="text-primary">Hydroponik</h3>
                        <p class="text-muted">Hydroponik adalah metode menanam tanpa tanah, menggunakan air yang kaya nutrisi untuk memberi makan tanaman. Di mana akar tanaman ditanam dalam air atau media tumbuh seperti pasir, kerikil, atau serat kelapa. Ini efisien dalam penggunaan air dan cocok untuk ruang terbatas atau lingkungan yang tidak cocok untuk pertanian tradisional.</p>
                    </div>
          </div>
            </div>
        </div>
    
</section>

<section id="farmdetails" class="steps-section py-5">
    <div class="container text-center">
        <div class="row justify-content-center">
            <!-- Langkah Awal -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm p-4">
                    <div class="card-body">
                        <div class="icon mb-3">
                            <i class="fas fa-map-marker-alt fa-2x text-brown"></i>
                        </div>
                        <h5 class="card-title text-uppercase">Langkah Awal</h5>
                        <p class="card-text">Mari kita bahas langkah-langkah utama dari kedua sistem Aquaponik dan Hidroponik ini.</p>
                        <a href="#" class="text-decoration-none text-brown">Lebih Banyak</a>
                    </div>
                </div>
            </div>
            <!-- Jenis -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm p-4">
                    <div class="card-body">
                        <div class="icon mb-3">
                            <i class="fas fa-seedling fa-2x text-brown"></i>
                        </div>
                        <h5 class="card-title text-uppercase">Jenis</h5>
                        <p class="card-text">Mari kita jelajahi jenis-jenis utama dari kedua metode ini dan bagaimana mereka berfungsi.</p>
                        <a href="#" class="text-decoration-none text-brown">Lebih Banyak</a>
                    </div>
                </div>
            </div>
            <!-- Perawatan -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm p-4">
                    <div class="card-body">
                        <div class="icon mb-3">
                            <i class="fas fa-hand-holding-water fa-2x text-brown"></i>
                        </div>
                        <h5 class="card-title text-uppercase">Perawatan</h5>
                        <p class="card-text">Mari kita bahas langkah-langkah perawatan yang diperlukan untuk menjaga keberhasilan sistem ini.</p>
                        <a href="#" class="text-decoration-none text-brown">Lebih Banyak</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
include 'layout/footer.php';
?>
