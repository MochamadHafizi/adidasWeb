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
                    <a class="nav-link active px-3" href="<?= base_url('C_product'); ?>">Products</a>
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
<section id="product" style="background-color: black;padding-bottom: 2em;">
    <div class="container-fluid  p-5" style="background-image:url(./assets/img/product.jpg);filter: brightness(60%);height:100vh;">
        <div class="container  p-5">
            <h1 class="mb-5 text-center" style="margin-top: 7.5em;color:white;">PRODUCTS</h1>
        </div>
    </div>


    <div class="container" id="product">
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <img src="<?= base_url('./assets/img/logo.png'); ?>" alt="" width="40%" class="img-fluid" style="margin-top: 10em;margin-bottom:20em;">
                </div>
            </div>
        </div>
        <div class="row text-center justify-content-center">

            <?php foreach ($barang as $brg) : ?>
                <div class="col-md-4">
                    <div class="card card text-white bg-dark ml-1 m-1 mb-5" style="width: 16rem;">
                        <img src="<?php echo base_url() . './assets/img/produk/' . $brg->gambar ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
                            <span class="badge badge-pill badge-success mb-2">Harga Rp. <?= number_format($brg->harga) ?></span><br>
                            <?php echo anchor('C_product/detail/' . $brg->id_brg, '<div class="btn btn-sm btn-primary">Lihat Detail</div>') ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>
</section>