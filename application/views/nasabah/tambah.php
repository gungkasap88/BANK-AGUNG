<div class="container">
    
    <div class="mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                Form Tambah Data Nasabah BANK-AGUNG
                </div>
                    <div class="card-body">
                        <?php if( validation_errors() ) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif ?>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="ktp">Nomor KTP</label>
                            <input type="text" name="ktp" class="form-control" id="ktp">
                        </div>
                        <div class="mb-3">
                            <label for="nama">Nama Nasabah</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                        </div>
                        <div class="mb-3">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat">
                        </div>
                        <div class="mb-3">
                            <label for="tempatlahir">Tempat Lahir</label>
                            <input type="text" name="tempatlahir" class="form-control" id="tempatlahir">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal">Tanggal Lahir</label>
                            <input type="text" name="tanggal" class="form-control" id="tanggal">
                        </div>
                        <div class="mb-3">
                            <label for="telp">Nomor Telp</label>
                            <input type="text" name="telp" class="form-control" id="telp">
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">
                            Tambah Data
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>