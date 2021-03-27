<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul_laman ?></h1>

    <div class="row">
        <div class="col-8">
            <form method="post">
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" class="form-control" id="nip" name="nip">
                    <?= form_error('nip', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select id="jk" class="form-control" name="jk">
                        <option value="">Choose...</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    <?= form_error('jk', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="alamat">Allamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->