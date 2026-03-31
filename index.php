<?php
include "koneksi.php";

$query = mysqli_query($conn,"SELECT * FROM profile");
$data = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div id="app">

<nav class="navbar navbar-expand-lg navbar-light fixed-top custom-navbar">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#home">NaN</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#certificates">Sertifikat</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero d-flex align-items-center justify-content-center text-center">
    <div class="container">
        <h4 class="hello-text mb-2">Haloo saya</h4>

<h1 class="highlight">
<?php echo $data['nama']; ?>
</h1>

<p class="lead mt-3">
<?php echo $data['deskripsi']; ?>
</p>

        <a href="https://instagram.com/hi.nnaan" 
   target="_blank" 
   class="btn calm-btn mt-4">
   instagram
</a>
    </div>
</section>

<section id="about" class="about-section py-5">
    <div class="container">
        <div class="row align-items-center">

           
            <div class="col-md-7">
                <h2 class="section-title mb-3">About Me</h2>
                <p>
                    Saya adalah mahasiswa Sistem Informasi angkatan 2024 
                    yang mempelajari coding, manajemen database serta analisa sistem
                </p>

                <h5 class="mt-4">My Skills</h5>

                <div class="mb-3">
                    <label>Programming(Python)</label>
                    <div class="progress">
                        <div class="progress-bar skill-bar" style="width: 75%;">75%</div>
                    </div>
                </div>

                <div class="mb-3">
                    <label>Software Development</label>
                    <div class="progress">
                        <div class="progress-bar skill-bar" style="width: 80%;">80%</div>
                    </div>
                </div>

                <div class="mb-3">
                    <label>Canva Design</label>
                    <div class="progress">
                        <div class="progress-bar skill-bar" style="width: 80%;">80%</div>
                    </div>
                </div>
            </div>

            <div class="col-md-5 text-center mt-4 mt-md-0">
                <img src="images\latar merah.jpg" 
                     class="about-img" 
                     alt="About Me">
            </div>

            <h5 class="mt-5 mb-4">Experience</h5>

<div class="row">

    <div class="col-md-6 mb-3">
        <div class="exp-card p-3">
            <h6>Communication and Media Information Department Staff</h6>
            <small>2025</small>
            <p>Sebagai Anggota aktif kominfo divisi dokumentasi.</p>
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <div class="exp-card p-3">
            <h6>Database Design Project</h6>
            <small>2025</small>
            <p>Merancang dan membuat ERD untuk sistem manajemen berbasis database.</p>
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <div class="exp-card p-3">
            <h6>Flutter Application</h6>
            <small>2026</small>
            <p>Membuat aplikasi mobile sederhana menggunakan Flutter.</p>
        </div>
    </div>

<?php
$queryCert = mysqli_query($conn,"SELECT * FROM certificates");
?>

<section id="certificates" class="cert-section py-5">
<div class="container">
<h2 class="section-title text-center mb-5">Sertifikat</h2>

<div class="row">

<?php while($cert = mysqli_fetch_assoc($queryCert)) { ?>

<div class="col-md-4 mb-4">
<div class="cert-card">

<img src="images/<?php echo $cert['gambar']; ?>" class="cert-img">

<div class="p-3">
<h6><?php echo $cert['judul']; ?></h6>

<p><?php echo $cert['deskripsi']; ?></p>
</div>

</div>
</div>

<?php } ?>

</div>
</div>
</section>
</div>

        </div>
    </div>
</section>

<footer class="footer text-center py-4">
    <div class="container">
        <p class="mb-1">© 2026 nandaily </p>
        <small> nice to meet youu</small>
    </div>
</footer>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script>
const { createApp } = Vue

createApp({
    data() {
        return {
            name: "Nanda Pesona Putri",
            description: "Mahasiswa Sistem Informasi angkatan 2024 yang mempelajari pengembangan website dan desain antarmuka modern."
        }
    }
}).mount('#app')
</script>
</div>
</body>
</html>