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
                    <a class="nav-link px-3" aria-current="page" href="<?= base_url('C_beranda'); ?>">Home</a>
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
                    <a class="nav-link active px-3" href="<?= base_url('C_contact'); ?>">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- akhir Navbar -->
<!-- awal Contact -->
<section id="contact" style="background-color: black;padding: bottom 2em;">
    <div class="container-fluid  p-5" style="background-image:url(./assets/img/contact.jpg);filter: brightness(60%);height:100vh;">
        <?php foreach ($result as $key => $value) : ?>
            <div class="container  p-5">
                <h1 class="mb-5 text-center" style="margin-top: 7.5em;color:white;">Contact</h1>
            </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <img src="<?= base_url('./assets/img/logo.png'); ?>" alt="" width="40%" class="img-fluid" style="margin-top: 10em;margin-bottom:20em;">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="text-center text-white fw-bold mb-5" style="font-family: 'Open Sans';">Our Social Media</h1>
            </div>
        </div>
        <div class="row " style="margin-bottom:15em;margin-top: 10em;">
            <div class="col-md-3">
                <a href="https://www.instagram.com/adidasindonesia/?hl=en"><button type="button" class="btn btn-outline-danger"><i class="bi bi-instagram"> Instagram</i></button></a>
            </div>
            <div class="col-md-3">
                <a href="https://twitter.com/adidas?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><button type="button" class="btn btn-outline-primary"><i class="bi bi-twitter"> Twitter</i></button></a>
            </div>

            <div class="col-md-3">
                <a href="https://www.facebook.com/adidasID/?brand_redir=182162001806727"><button type="button" class="btn btn-outline-primary"><i class="bi bi-facebook"> Facebook</i></button></a>
            </div>
            <div class="col-md-3">
                <a href="https://www.youtube.com/user/adidas"><button type="button" class="btn btn-outline-danger"><i class="bi bi-youtube"> Youtube</i></button></a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="text-white text-center mb-5">Our Location</h1>
                <h5 class="text-white">Alamat: <?= $value->deskripsi_kontak; ?></h5>
                <h5 class="text-white">Telepon: <?= $value->telepon; ?></h5>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="text-center">
                <div class="col">
                    <?= $value->script; ?>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</section>
<!-- akhir Contact -->