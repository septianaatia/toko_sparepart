<div class="container-fluid">

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="....." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
        </div>
    </div>
    </div>

    <div class="row text-center">

    <?php foreach ($barang as $brg) : ?>

        <div class="card ml-3" style="width: 16rem;">
            <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
                <small><?php echo $brg->keterangan ?></small>
                <span class="badge badge-pill badge-success mb-3">Rp. <?php echo $brg->harga ?></span>
                <a href="#" class="btn btn-sm btn-primary">Tambah ke Keranjang</a>
                <a href="#" class="btn btn-sm btn-success">Detail </a>
            </div>
        </div>

        <?php endforeach; ?>
    </div>
</div>