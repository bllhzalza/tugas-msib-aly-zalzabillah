<div class="container p-2 mt-4">
    <div class="row">
        <div class="col-lg-12">

            <!-- flasher -->
            <div class="row">
                <div class="col-lg-6">
                    <?php flasher::flash();?>
                </div>
            </div>

            <h2 class="mb-3">Data Siswa Baru</h2>

            <!-- button buat artikel untuk muncul topup -->
            <button type="button" class="btn btn-primary mt-3 tombolTambahData" data-bs-toggle="modal"
                data-bs-target="#formModal">
                Tambah Siswa
            </button>

            <!-- Modal Pop up-->
            <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <div class="modal-header">
                            <!-- modal title -->
                            <h5 class="modal-title" id=" judulModal">Tambah Siswa Baru</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                        </div>

                        <!-- modal body -->
                        <div class="modal-body">
                            <form action="<?= BASE_URL; ?>/data_siswa/tambah" method="post">
                                <div class="form-group">
                                    <label for="nama">Nama Siswa</label>
                                    <input type="text" class="form-control" id="nama" name="nama"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="TTL">TTL</label>
                                    <input type="text" class="form-control" id="TTL" name="TTL"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <input type="text" class="form-control" id="jenis_kelamin"
                                        name="jenis_kelamin"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" rows="5" id="alamat" name="alamat"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="asal_sekolah">Asal Sekolah</label>
                                    <textarea class="form-control" rows="3" id="asal_sekolah"
                                        name="asal_sekolah"></textarea>
                                </div>
                                <!-- footer modal -->
                                <div class="modal-footer">
                                    <a href="<?= BASE_URL;?>/data_siswa" class="btn btn-secondary">Kembali</a>
                                    <button type="submit" class="btn btn-primary">Tambah Siswa Baru</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- index blog -->
            <!-- table isi database -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">TTL</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Asal Sekolah</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['data_siswa'] as $key => $data_siswa) :?>
                    <tr>
                        <th scope="row"><?= ($key + 1); ?></th>
                        <td><?= $data_siswa['nama']; ?></td>
                        <td><?= $data_siswa['TTL']; ?></td>
                        <td><?= $data_siswa['jenis_kelamin']; ?></td>
                        <td><?= $data_siswa['alamat']; ?></td>
                        <td><?= $data_siswa['asal_sekolah']; ?></td>

                        <td>
                            <div class="float-end">
                                <a href="<?= BASE_URL;?>/data_siswa/detail/<?= $data_siswa['id'];?>"
                                    class="btn btn-primary">Detail</a>

                                <a href="<?= BASE_URL;?>/data_siswa/edit/<?= $data_siswa['id'];?>"
                                    class="btn btn-success">Edit</a>

                                <a href="<?= BASE_URL;?>/data_siswa/hapus/<?= $data_siswa['id'];?>"
                                    class="btn btn-danger" onclick="return confirm('yakin')">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>