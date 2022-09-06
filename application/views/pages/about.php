<!-- awal Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow" style="background-color: black;">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('C_beranda'); ?>">
            <img src="./assets/img/logo.png" alt="" width="10%">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link  px-3" aria-current="page" href="<?= base_url('C_beranda'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active px-3" href="<?= base_url('C_about'); ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="<?= base_url('C_product'); ?>">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="<?= base_url('C_gallery'); ?>">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="<?= base_url('C_contact'); ?>">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- akhir Navbar -->
<!-- Awal About -->
<section id="about_us" style="background-color: black;padding-bottom: 2em;">
    <div class="container-fluid  p-5" style="background-image:url(./assets/img/about.jpg);filter: brightness(60%);height:100vh;">
        <?php foreach ($result as $key => $value) : ?>


            <div class="container  p-5">
                <h1 class="mb-5 text-center" style="margin-top: 7.5em;color:white;"><?= $value->nama_tentang ?></h1>
            </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <img src="<?= base_url('./assets/img/'); ?><?= $value->foto_tentang; ?>" alt="" width="40%" class="img-fluid" style="margin-top: 10em;margin-bottom:20em;">
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-4">
                <h1 class="text-white">ORIGINAL</h1>
            </div>
            <div class="col-md-4">
                <p class="text-white"><?= $value->original; ?></p>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-4">
                <h1 class="text-white">PERFORMA OLAHRAGA</h1>
            </div>
            <div class="col-md-4">
                <p class="text-white"><?= $value->sport_perfomance; ?></p>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-4">
                <h1 class="text-white">TEKNOLOGI</h1>
            </div>
            <div class="col-md-4">
                <p class="text-white"><?= $value->technologies; ?></p>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-4">
                <h1 class="text-white">UKURAN</h1>
            </div>
            <div class="col-md-4">
                <p class="text-white"><?= $value->sizing; ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</section>
<!-- Akhir About -->