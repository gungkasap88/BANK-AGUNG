<!-- <?php var_dump($nasabah); ?> -->
<div class="container mt-3">

    <!-- Button Tambah Data  -->
    <div class="row mb-3">
        <div class="col-lg-6">
            <a href="<?= base_url(); ?>nasabah/tambah" class="btn btn-primary">Tambah Data Nasabah</a>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <h3 >Daftar Nasabah</h3>               
                <ul class="list-group">
                    <?php foreach( $nasabah as $nsbh ) : ?>
                        <li class="list-group-item "><?= $nsbh['nama']; ?></li>
                    <?php endforeach; ?>
                </ul> 
        </div>
    </div>
</div>