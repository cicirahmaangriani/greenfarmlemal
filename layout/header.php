<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./layout/image/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./layout/style.css">
    <title><?= $title ?> - GreenFarm Lemal</title>
</head>

<body>
    <!-- Transparent Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container">
                <a class="navbar-brand">
                    <img src="./layout/image/logonavbar.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="smooth-scroll nav-link text-white" href="#weatherforecast" data-target="weatherforecast">Radar Cuaca</a>
                        </li>
                        <li class="nav-item">
                            <a class="smooth-scroll nav-link text-white" href="#farmmodern" data-target="farmmodern">Panduan</a>
                        </li>
                        <li class="nav-item">
                            <a class="smooth-scroll nav-link text-white" href="#proyekhijau" data-target="proyekhijau">Proyek Hijau</a>
                        </li>
                        <li class="nav-item">
                            <a class="smooth-scroll nav-link text-white" href="#" data-target="">Kontak Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>