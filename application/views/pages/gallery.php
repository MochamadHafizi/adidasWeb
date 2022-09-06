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
                    <a class="nav-link active px-3" href="<?= base_url('C_gallery'); ?>">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="<?= base_url('C_contact'); ?>">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- akhir Navbar -->
<section id="about_us" style="background-color: black;padding-bottom: 2em;">
    <div class="container-fluid  p-5" style="background-image:url(./assets/img/gallery.jpg);filter: brightness(60%);height:100vh;">
        <div class="container  p-5">
            <h1 class="mb-5 text-center" style="margin-top: 7.5em;color:white;">Gallery Foto</h1>
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
                <h1 class="text-white text-center fw-bold mb-5" style="letter-spacing:5px;font-family:'Lato';">SEPATU</h1>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-bottom:10em ;">
            <?php $result = $this->db->where('tb_galeri.nama_galeri', '1')

                ->get('tb_galeri')
                ->result();
            foreach ($result as $key => $value) :

            ?>
                <div class="item col-sm-6 col-md-4 mb-3">
                    <a href="<?= base_url('./assets/img/gallery/sepatu/'); ?><?= $value->foto_galeri; ?>" class="fancybox" data-fancybox="gallery1">
                        <img src="<?= base_url('./assets/img/gallery/sepatu/'); ?><?= $value->foto_galeri; ?>" alt="gambar 1" width="100%">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="row">
            <div class="col">
                <h1 class="text-white text-center fw-bold mb-5" style="letter-spacing:5px;font-family:'Lato';">PAKAIAN</h1>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-bottom:10em ;">
            <?php $result = $this->db->where('tb_galeri.nama_galeri', '2')

                ->get('tb_galeri')
                ->result();
            foreach ($result as $key => $value) :

            ?>
                <div class="item col-sm-6 col-md-4 mb-3">
                    <a href="<?= base_url('./assets/img/gallery/pakaian/'); ?><?= $value->foto_galeri; ?>" class="fancybox" data-fancybox="gallery1">
                        <img src="<?= base_url('./assets/img/gallery/pakaian/'); ?><?= $value->foto_galeri; ?>" alt="gambar 1" width="100%">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="text-white text-center fw-bold mb-5" style="letter-spacing:5px;font-family:'Lato';">AKSESORIS</h1>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-bottom:10em ;">
            <?php $result = $this->db->where('tb_galeri.nama_galeri', '3')

                ->get('tb_galeri')
                ->result();
            foreach ($result as $key => $value) :

            ?>
                <div class="item col-sm-6 col-md-4 mb-3">
                    <a href="<?= base_url('./assets/img/gallery/aksesoris/'); ?><?= $value->foto_galeri; ?>" class="fancybox" data-fancybox="gallery1">
                        <img src="<?= base_url('./assets/img/gallery/aksesoris/'); ?><?= $value->foto_galeri; ?>" alt="gambar 1" width="100%">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>