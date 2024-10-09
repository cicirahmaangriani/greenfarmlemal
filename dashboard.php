<?php

$title = 'Dashboard';
include 'layout/header.php';

$latitude = '-6.66';
$longitude = '106.92';
$api_key = 'bb014173b1c14727ddedd47b9f969de9';

$api_url = 'https://api.openweathermap.org/data/2.5/forecast?lat='.$latitude.'&lon='.$longitude.'&appid='.$api_key;

// Inisialisasi cURL
$ch = curl_init();

// Set opsi untuk cURL
curl_setopt($ch, CURLOPT_URL, $api_url);         // URL tujuan
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  // Mengembalikan hasil sebagai string
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Matikan verifikasi SSL (untuk server lokal)

// Eksekusi cURL
$response = curl_exec($ch);

$weather_array = json_decode($response, true);
$forecast_data = []; // Array untuk menyimpan data setiap hari

// Iterasi melalui data cuaca dari API (misalnya, 7 data untuk 7 hari)
for ($i = 0; $i < 7; $i++) {
    // Pastikan indeks tersedia sebelum mengaksesnya
    if (isset($weather_array['list'][$i])) {
        $temperature = $weather_array['list'][$i]['main']['temp'];
        $temperature_in_celsius = $temperature - 273.15;

        $weather_icon = isset($weather_array['list'][$i]['weather'][0]['icon']) ? $weather_array['list'][$i]['weather'][0]['icon'] : 'default-icon';
        $description = isset($weather_array['list'][$i]['weather'][0]['description']) ? $weather_array['list'][$i]['weather'][0]['description'] : 'No description';

        // Simpan data ini ke array
        $forecast_data[] = [
            'day' => date('l', strtotime('+' . $i . ' day')), // Mendapatkan nama hari (Senin, Selasa, dst.)
            'temperature' => round($temperature_in_celsius, 2),
            'icon' => $weather_icon,
            'description' => $description
        ];
    }
}

// Tutup cURL session
curl_close($ch);

?>

    <section class="hero d-flex align-items-center text-white">
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
        <?php foreach ($forecast_data as $forecast): ?>
            <?php
                // Map deskripsi atau icon code ke dalam kelas cuaca
                $weather_class = '';
                switch ($forecast['icon']) {
                    case '01d':
                    case '01n':
                        $weather_class = 'sunny'; // cerah
                        break;
                    case '02d':
                    case '02n':
                        $weather_class = 'partly-cloudy'; // cerah berawan
                        break;
                    case '03d':
                    case '03n':
                    case '04d':
                    case '04n':
                        $weather_class = 'cloudy'; // berawan
                        break;
                    case '09d':
                    case '09n':
                        $weather_class = 'light-rain'; // hujan ringan
                        break;
                    case '10d':
                    case '10n':
                        $weather_class = 'moderate-rain'; // hujan sedang
                        break;
                    case '11d':
                    case '11n':
                        $weather_class = 'thunderstorm'; // hujan petir
                        break;
                    case '13d':
                    case '13n':
                        $weather_class = 'snow'; // salju (jika berlaku)
                        break;
                    case '50d':
                    case '50n':
                        $weather_class = 'mist'; // berkabut
                        break;
                    default:
                        $weather_class = 'default-weather'; // kondisi tidak terdefinisi
                }
            ?>
            <div class="col-md-2 col-sm-4 forecast-card <?= $weather_class; ?> text-white rounded p-3 m-2">
                <h4><?= $forecast['day']; ?></h4>
                <img src="https://openweathermap.org/img/wn/<?= $forecast['icon']; ?>@2x.png" alt="<?= $forecast['description']; ?>" class="mb-2 img-fluid">
                <p><?= "Temperature: " . $forecast['temperature'] . "°C"; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section id="farmmodern" class="farming-methods container-fluid text-center py-5">
    <div class="forecast-header mb-4">
        <h5 class="text-uppercase">Panduan</h5>
        <p class="text-muted">Memperkenalkan metode pertanian yang inovatif dan ramah lingkungan, relevan untuk masyarakat desa</p>
    </div>
    <div class="row justify-content-center">
        <!-- Aquaponik -->
        <div class="col-md-5 d-flex align-items-stretch mb-4">
            <div class="card border-0 w-100 text-center">
                <div class="card-body">
                    <h3 class="text-primary mb-3">Aquaponik</h3>
                    <img src="./layout/image/aquaponik.png" alt="Aquaponik" class="img-fluid rounded-image mb-3">
                    <p class="text-muted">Aquaponik adalah sistem pertanian berkelanjutan yang menggabungkan budidaya ikan dan tanaman. Limbah ikan menyediakan nutrisi bagi tanaman, sementara tanaman menyaring air untuk ikan, menciptakan sirkulasi yang efisien. Sistem ini menciptakan ekosistem yang berkelanjutan, di mana ikan dan tanaman saling mendukung, serta menggunakan air lebih efisien dibanding metode pertanian konvensional.</p>
                </div>
            </div>
        </div>

        <!-- Hydroponik -->
        <div class="col-md-5 d-flex align-items-stretch mb-4">
            <div class="card border-0 w-100 text-center">
                <div class="card-body">
                    <h3 class="text-primary mb-3">Hydroponik</h3>
                    <img src="./layout/image/hidroponik.png" alt="Hydroponik" class="img-fluid rounded-image mb-3">
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

<section id="proyekhijau" class="proyek-hijau container-fluid py-5">
    <div class="text-center mb-4">
        <h5 class="text-uppercase">Proyek Hijau</h5>
        <p class="text-muted">Gerakan kolaboratif dan solusi kreatif untuk revitalisasi lingkungan dan pelestarian alam</p>
    </div>
    <div class="row align-items-center justify-content-center">
        <div class="col-md-5 text-center">
            <img src="./layout/image/volunteer.png" alt="Volunteer Proyek Hijau" class="img-fluid" style="max-width: 75%; height: auto;">
        </div>
        <div class="col-md-5">
            <h3 class="text-success mb-3">Volunteer Proyek Hijau</h3>
            <p class="text-muted">
                Jadilah agen perubahan! Bergabunglah sebagai relawan Proyek Hijau dan bantu ciptakan dunia yang lebih bersih dan berkelanjutan. Setiap aksi kecil membawa dampak besar. Daftar sekarang dan mulai langkah menuju masa depan yang lebih hijau!
            </p>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdsQIm_K2cXp2G3przoHYoAZ9BoXN_a-M7VQgNX08K1v6qhjA/viewform" class="btn btn-outline-success mt-3">Gabung Sekarang</a>
        </div>
    </div>
</section>




<?php
include 'layout/footer.php';
?>
