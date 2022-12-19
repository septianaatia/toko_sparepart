<div class="container-fluid">
    <button class="btn btn-sm btn-primary"><i class="fas fa-plus fa-sm"></i>Tambah Barang</button>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Keterangan</th>
            <th>kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="3">AKSI</th>  
        </tr>

        <?php
        $no=1;
        foreach($barang as $brg) : ?>

        <tr>
            <td><?php echo $no== ?></td>
            <td><?php echo $brg->nama_brg ?></td>
            <td><?php echo $brg->keterangan ?></td>
            <td><?php echo $brg->kategori ?></td>
            <td><?php echo $brg->harga ?></td>
            <td><?php echo $brg->stok ?></td>
            <td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>
            <td><div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div></td>
            <td><div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div></td>
            
        </tr>


        <?php endforeach; ?>

</div>