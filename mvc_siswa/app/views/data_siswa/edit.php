<div class="container mt-5">
    <h1>Edit Siswa</h1>

    <form action="<?= BASE_URL; ?>/data_siswa/update" method="post">
    <div class="card" style="width: 50rem;">
            <div class="card-body">
                <input type="hidden" name="id" value="<?= $data['data_siswa']['id'];?>">

                <label for="nama" class="col-form-label">Nama Siswa</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="col-form-label" required
                    value="<?= $data['data_siswa']['nama'];?>">

                <label for="TTL" class="col-form-label">TTL</label>
                <input type="text" class="form-control" id="TTL" name="TTL" placeholder="col-form-label" required
                    value="<?= $data['data_siswa']['TTL'];?>">

                <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin</label>
                <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin"
                    placeholder="col-form-label" required value="<?= $data['data_siswa']['jenis_kelamin'];?>">

                <label for="alamat" class="col-form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="col-form-label" required
                    value="<?= $data['data_siswa']['alamat'];?>">

                <label for="asal_sekolah" class="col-form-label">Asal Sekolah</label>
                <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah"
                    placeholder="col-form-label" required value="<?= $data['data_siswa']['asal_sekolah'];?>">
            </div>

            <div class="card-footer">
                <div class="float-end">
                    <a href="<?= BASE_URL;?>/data_siswa" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Submit
                    </button>
                </div>
            </div>
    </div>
    </form>
</div>