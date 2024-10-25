<?php

$title = 'Hidroponik';
include 'layout/navbar.php';

?>

<section id="aquaponik-details" class="aquaponik-section container-fluid py-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-5 text-center">
            <img src="./layout/image/hidroponikpage.png" alt="Aquaponik" class="img-fluid rounded" style="width: 350px;">
        </div>
        <div class="col-md-5">
            <p>
                Hidroponik adalah metode menanam tanpa tanah, menggunakan air yang kaya nutrisi untuk memberi makan tanaman. Di mana akar tanaman ditanam dalam air atau media tumbuh seperti pasir, kerikil, atau serat kelapa. Ini efisien dalam penggunaan air dan cocok untuk ruang terbatas atau lingkungan yang tidak cocok untuk pertanian tradisional.
            </p>
        </div>
    </div>

    <div class="stepsa-section py-5">
        <div class="row justify-content-center">
            <div class="forecast-header mb-4 text-center">
                <h5 class="text-uppercase">Langkah - Langkah</h5>
            </div>
            <div class="col-md-5">
                <h3>Panduan Hidroponik Untuk Pemula</h3>
                <p class="teksvideo">
                    Mulai petualangan berkebun tanpa tanah dengan metode hidroponik! Dalam video ini, kamu akan dipandu langkah demi langkah mulai dari persiapan alat dan bahan, memilih sistem hidroponik yang cocok, hingga cara merawat tanaman agar tumbuh optimal. Dengan metode ini, kamu bisa menanam sayuran segar di rumah, bahkan di lahan yang terbatas. Video ini dirancang khusus untuk pemula, jadi kamu bisa mengikuti dengan mudah. Selamat mencoba dan nikmati hasil panenmu!"
                </p>
            </div>
            <div class="col-md-6 text-center">
                <div class="video-container">
                    <iframe class="video-frame" src="https://www.youtube.com/embed/9l-ti-tT9xw?si=IU7_Opj0il-uCScp" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="aquaponik-systems" class="aquaponik-systems-section container-fluid py-5">
    <div class="row justify-content-center align-items-center text-center">
        <div class="forecast-header mb-4 text-center">
            <h5 class="text-uppercase">Jenis Sistem</h5>
        </div>

        <!-- Media Bed Section -->
        <div class="col-md-7 d-flex flex-md-row align-items-center mb-4">
            <div>
                <img src="./layout/image/wick.png" alt="Media Bed" class="img-fluid system-image">
            </div>
            <div class="text-md-start p-md-3">
                <h5 class="judulsistem">SISTEM WICK</h5>
                <p>
                Sistem paling sederhana yang menggunakan sumbu untuk menyerap nutrisi dari larutan ke akar tanaman. Cocok untuk tanaman kecil dengan kebutuhan air rendah. Tidak memerlukan pompa atau listrik, sehingga sangat mudah dioperasikan.
                </p>
            </div>
        </div>

        <!-- NFT Section -->
        <div class="col-md-7 d-flex flex-md-row align-items-center">
            <div>
                <img src="./layout/image/dwc.png" alt="NFT Aquaponik" class="img-fluid system-image">
            </div>
            <div class="text-md-start p-md-3">
                <h5 class="judulsistem2">SISTEM DEEP WATER CULTURE (DWC)</h5>
                <p class="systemtext2">
                Dalam sistem ini, akar tanaman direndam langsung dalam larutan nutrisi. Oksigen disuplai ke akar melalui aerator yang menjaga air tetap kaya oksigen. DWC populer karena kesederhanaannya dan cocok untuk pertumbuhan cepat tanaman berdaun seperti selada.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="aquaponik-systems" class="aquaponik-section container-fluid py-5">
    <div class="row justify-content-center align-items-center">
        <div class="forecast-header mb-4 text-center">
            <h5 class="text-uppercase">Perawatan</h5>
        </div>
        <div class="col-md-5">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h6 class="card-title text-uppercase text-muted">Memantau pH dan Kadar Nutrisi</h6>
                    <p class="card-text">
                        Salah satu aspek paling penting dalam hidroponik adalah menjaga pH dan kadar nutrisi air dalam kisaran yang optimal. Umumnya, pH untuk tanaman hidroponik berada di antara 5,5 hingga 6,5. Nutrisi harus disesuaikan dengan jenis tanaman, dan larutan harus diperiksa secara teratur untuk memastikan tanaman mendapatkan unsur hara yang cukup.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h6 class="card-title text-uppercase text-muted">Mengganti Larutan Nutrisi</h6>
                    <p class="card-text">
                        Larutan nutrisi perlu diganti secara rutin untuk mencegah akumulasi garam dan menjaga keseimbangan nutrisi. Larutan lama dapat menyebabkan penumpukan zat yang tidak diinginkan, yang menghambat pertumbuhan tanaman. Biasanya, larutan diganti setiap 1 hingga 2 minggu, tergantung pada kondisi dan kebutuhan tanaman.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h6 class="card-title text-uppercase text-muted">Membersihkan Sistem</h6>
                    <p class="card-text">
                        Sistem hidroponik, terutama pompa, pipa, dan wadah tanaman, harus dibersihkan secara berkala untuk mencegah pertumbuhan lumut, alga, atau penyumbatan yang dapat mengganggu aliran air dan nutrisi. Pembersihan ini juga membantu mencegah penyebaran hama atau penyakit.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h6 class="card-title text-uppercase text-muted">Menjaga Aerasi</h6>
                    <p class="card-text">
                        Kadar oksigen dalam larutan sangat penting, terutama untuk sistem yang merendam akar tanaman dalam air seperti Deep Water Culture (DWC). Aerator atau pompa udara harus dipastikan berfungsi dengan baik untuk menjaga sirkulasi udara dan oksigenasi yang baik bagi akar tanaman.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h6 class="card-title text-uppercase text-muted">Pencahayaan yang Cukup </h6>
                    <p class="card-text">
                        Tanaman hidroponik sangat bergantung pada pencahayaan yang baik, baik itu sinar matahari langsung atau lampu tumbuh (grow light) buatan. Pemantauan intensitas dan durasi pencahayaan sangat penting agar tanaman dapat berfotosintesis dengan optimal.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'layout/footer.php';
?>
