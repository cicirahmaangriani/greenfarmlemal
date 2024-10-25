<?php

$title = 'Dashboard';
include 'layout/header.php';

$latitude = htmlspecialchars('-6.66');
$longitude = htmlspecialchars('106.92');
$api_key = htmlspecialchars('bb014173b1c14727ddedd47b9f969de9');

$api_urlbaru = 'https://api.open-meteo.com/v1/forecast?latitude='.$latitude.'&longitude='.$longitude.'&daily=weather_code,temperature_2m_max,temperature_2m_min&timezone=Asia%2FBangkok';

// Inisialisasi cURL
$ch = curl_init();

// Set opsi untuk cURL
curl_setopt($ch, CURLOPT_URL, $api_urlbaru);         // URL tujuan
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  // Mengembalikan hasil sebagai string
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Matikan verifikasi SSL (untuk server lokal)

// Eksekusi cURL
$response = curl_exec($ch);

if (curl_errno($ch)) {
    $error_msg = curl_error($ch);
    echo "cURL error: " . $error_msg;
}

$weather_array = json_decode($response, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    echo "Error decoding JSON response: " . json_last_error_msg();
}
$forecast_data = []; // Array untuk menyimpan data setiap hari

// Iterasi melalui data cuaca dari API (misalnya, 7 data untuk 7 hari)
if (isset($weather_array['daily'])) {
    $daily = $weather_array['daily'];
    $dates = $daily['time'];
    $weather_codes = $daily['weather_code'];
    $max_temps = $daily['temperature_2m_max'];
    $min_temps = $daily['temperature_2m_min'];

    // Populate the forecast_data array for the next 7 days
    for ($i = 0; $i < min(count($dates), 7); $i++) {
        $forecast_data[] = [
            'day' => date('l', strtotime($dates[$i])), // Get the day name
            'weather_code' => $weather_codes[$i],
            'temperature_max' => round($max_temps[$i], 2),
            'temperature_min' => round($min_temps[$i], 2),
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
                <img src="./layout/image/bghome.png" alt="Nature and Technology Illustration" class="img-fluid" style="max-width: 400px; height: auto;">
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
                // Map deskripsi atau icon code ke dalam kelas cuaca berdasarkan weather_code dari Open-Meteo
                $icon_class_map = [
                    0 => 'clear-sky',     
                    1 => 'partly-cloudy',  
                    2 => 'partly-cloudy',
                    3 => 'partly-cloudy',
                    45 => 'fog',
                    48 => 'fog',
                    51 => 'drizzle',
                    53 => 'drizzle',
                    55 => 'drizzle',
                    61 => 'rain',
                    63 => 'rain',
                    65 => 'rain',
                    80 => 'rain',
                    96 => 'thunderstorm',
                    99 => 'thunderstorm'
                ];

                $weather_class = isset($icon_class_map[$forecast['weather_code']]) ? $icon_class_map[$forecast['weather_code']] : 'default-weather';
            ?>
            <div class="col-md-2 col-sm-4 forecast-card <?= $weather_class; ?> text-white rounded p-3 m-2">
                <h4><?= $forecast['day']; ?></h4>
                <img src="./layout/image/weather/<?= $weather_class; ?>.png" alt="Weather icon" class="mb-2 img-fluid">
                <p>Weather Code: <?= $forecast['weather_code']; ?></p>
                <p>Max Temp: <?= $forecast['temperature_max']; ?>°C</p>
                <p>Min Temp: <?= $forecast['temperature_min']; ?>°C</p>
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
            <div class="card border-0 text-center">
                <div class="card-body">
                    <h3 style="color: #03045E;" class="mb-3">Aquaponik</h3>
                    <a href="aquaponik">
                        <img src="./layout/image/aquaponik.jpg" alt="Aquaponik" class="img-fluid rounded-image mb-3">
                    </a>
                    <p class="text-muted">Aquaponik adalah sistem pertanian berkelanjutan yang menggabungkan budidaya ikan dan tanaman...</p>
                    <a type="button" class="btn btn-custom" href="aquaponik">Lihat Lainnya</a>
                </div>
            </div>
        </div>

        <!-- Hidroponik -->
        <div class="col-md-5 d-flex align-items-stretch mb-4">
            <div class="card border-0 text-center">
                <div class="card-body">
                    <h3 style="color: #03045E;" class="mb-3">Hidroponik</h3>
                    <a href="hidroponik">
                        <img src="./layout/image/hidroponik1.png" alt="Hidroponik" class="img-fluid rounded-image mb-3">
                    </a>
                    <p class="text-muted">Hidroponik adalah metode menanam tanpa tanah, menggunakan air yang kaya nutrisi untuk memberi makan tanaman...</p>
                    <a type="button" class="btn btn-custom" href="hidroponik">Lihat Lainnya</a>
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
            <h3 style="color: #283618;" class="mb-3">Volunteer Proyek Hijau</h3>
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
