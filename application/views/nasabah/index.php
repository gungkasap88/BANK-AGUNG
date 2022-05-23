<!-- <?php var_dump($nasabah); ?> -->

<div class="container">

    <!-- Kondisi untuk flashdata agar muncul hanya ketika berhasil -->
    <?php if( $this->session->flashdata('flash') ) : ?>

    <!-- Flash Data -->
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert"> Data nasabah
                <strong>berhasil</strong> 
                    <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>

    <?php endif ?>


    <!-- Button Tambah Data  -->
    <div class="row mb-3">
        <div class="col-lg-6">
            <a href="<?= base_url(); ?>nasabah/tambah" class="btn btn-primary">Tambah Data Nasabah</a>
        </div>
    </div>

    <!-- Daftar nasabah -->
    <div class="row mb-3">
        <div class="col-lg-6">
            <h3 >Daftar Nasabah</h3>               
                <ul class="list-group">
                    <?php foreach( $nasabah as $nsbh ) : ?>
                        <li class="list-group-item ">
                            <?= $nsbh['nama']; ?>
                            <a href="<?= base_url(); ?>nasabah/hapus/<?= $nsbh['id']; ?>" class="badge text-bg-danger float-right" onclick="return confirm('yakin menghapus data ?');">hapus</a>
                        </li>
                    <?php endforeach; ?>
                </ul> 
        </div>
    </div>
</div>