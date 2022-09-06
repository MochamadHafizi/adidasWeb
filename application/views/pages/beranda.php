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
                    <a class="nav-link active px-3" aria-current="page" href="<?= base_url('C_beranda'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="<?= base_url('C_about'); ?>">About</a>
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
<!-- awal Carousel -->
<div id="carouselExampleCaptions" class="carousel slide carousel-fade shadow" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="<?= base_url('./assets/img/slider/img1.jpg'); ?>" class="d-block w-100 img-fluid min-vh-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('./assets/img/slider/img2.jpg'); ?>" class="d-block w-100 img-fluid min-vh-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('./assets/img/slider/img3.jpg'); ?>" class="d-block w-100 img-fluid min-vh-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- akhir Carousel -->
<!-- awal About -->
<section id="about">
    <div class="container">
        <?php foreach ($tentang->result() as $value) : ?>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h1 class="mb-5" style="margin-top: 5em;"><?= $value->nama_tentang; ?></h1>
                    <p class=""><?= $value->deskripsi_tentang; ?></p>
                </div>
            </div>
    </div>
<?php endforeach; ?>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="black" fill-opacity="1" d="M0,96L120,117.3C240,139,480,181,720,181.3C960,181,1200,139,1320,117.3L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
</svg>
</section>

<!-- akhir About -->
<!-- awal gallery -->
<section id="gallery" style="background-color: black;">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-white mb-5">Gallery</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="<?= base_url('./assets/img/gallery/1.jpg'); ?>" class="fancybox" data-fancybox="gallery1">
                    <img src="<?= base_url('./assets/img/gallery/1.jpg'); ?>" alt="gambar 1" width="100%">
                </a>
            </div>
            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="<?= base_url('./assets/img/gallery/2.jpg'); ?>" class="fancybox" data-fancybox="gallery1">
                    <img src="<?= base_url('./assets/img/gallery/2.jpg'); ?>" alt="gambar 1" width="100%">
                </a>
            </div>
            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="<?= base_url('./assets/img/gallery/3.jpg'); ?>" class="fancybox" data-fancybox="gallery1">
                    <img src="<?= base_url('./assets/img/gallery/3.jpg'); ?>" alt="gambar 1" width="100%">
                </a>
            </div>
            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="<?= base_url('./assets/img/gallery/4.jpg'); ?>" class="fancybox" data-fancybox="gallery1">
                    <img src="<?= base_url('./assets/img/gallery/4.jpg'); ?>" alt="gambar 1" width="100%">
                </a>
            </div>
        </div>
    </div>
</section>
<!-- akhir gallery -->