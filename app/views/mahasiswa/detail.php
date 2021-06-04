<div class="container mt-5">
    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header"><b>
                <h4 class="card-title"><?= $data['judul']; ?></b< /h4>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
            <h5 class="card-title"><?= $data['mhs']['npm']; ?></h5>
            <p class="card-text"><?= $data['mhs']['email']; ?></p>
            <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
            <a href="<?= BASEURL; ?>/mahasiswa" class="badge badge-warning text-white">Kembali</a>
        </div>
    </div>
</div>