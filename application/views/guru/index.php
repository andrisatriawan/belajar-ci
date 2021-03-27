<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul_laman ?></h1>
    <div class="row">
        <div class="col-8">
            <a href="<?= base_url('guru/tambah') ?>" class="btn btn-primary mb-3">Tambah Guru</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $j = 1;
                    foreach ($guru as $g) :
                    ?>
                        <tr>
                            <th scope="row"><?= $j++ ?></th>
                            <td><?= $g['nip'] ?></td>
                            <td><?= $g['nama'] ?></td>
                            <td><?= $g['jenis_kelamin'] ?></td>
                            <td><?= $g['alamat'] ?></td>
                            <td>
                                <a href="<?= base_url('guru/edit/') . $g['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->