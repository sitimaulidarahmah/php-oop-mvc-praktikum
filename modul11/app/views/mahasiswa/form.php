<style>
   
    .card-custom {
        max-width: 650px;
        margin: auto;
        border-radius: 18px;
        padding: 30px 35px;
        background: #ffffff;
        box-shadow: 0 6px 25px rgba(0,0,0,0.10);
    }

    .form-grid {
        display: grid;
        grid-template-columns: 140px auto;
        row-gap: 18px;
        column-gap: 18px;
        align-items: center;
    }

    label {
        font-weight: 600;
        font-size: 15px;
    }

    .form-input-wrapper {
        max-width: 360px;   /* DIPERKECIL */
        width: 100%;
    }

    .form-control,
    .form-select {
        height: 42px;       /* DIPERKECIL */
        border-radius: 8px;
        font-size: 14px;    /* DIPERKECIL */
        padding: 8px 12px;  /* DIPERKECIL */
        border: 1.3px solid #ccc;
        transition: .2s;
        width: 100%;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #009688;
        box-shadow: 0 0 0 2.5px rgba(0,150,136,0.18);
    }

    .btn-custom-success,
    .btn-custom-warning {
        padding: 10px 24px;     /* DIPERKECIL */
        border-radius: 10px;
        font-size: 15px;
        font-weight: 600;
        border: none;
        transition: .25s;
    }

    .btn-custom-success {
        background: #009688;
        color: white;
    }

    .btn-custom-warning {
        background: #f4b400;
        color: #000;
    }

    .btn-custom-success:hover,
    .btn-custom-warning:hover {
        opacity: .85;
        transform: translateY(-1.5px);
    }

    .form-actions {
        margin-left: 140px;
        margin-top: 25px;
    }


</style>


<div class="container mt-2 mb-4">

        <h4 class="fw-bold mb-4">
            <?= $data['judul']; ?>
        </h4>

        <form action="<?= BASEURL; ?>/mahasiswa/<?= $data['aksi']; ?>" method="post">

            <?php if(isset($data['mhs']['id'])): ?>
                <input type="hidden" name="id" value="<?= $data['mhs']['id']; ?>">
            <?php endif; ?>

            <div class="form-grid">

                <label>Nama:</label>
                <div class="form-input-wrapper">
                    <input type="text" class="form-control" name="nama" maxlength="100"
                           placeholder="Masukkan nama mahasiswa"
                           value="<?= $data['mhs']['nama'] ?? ''; ?>" required>
                </div>

                <label>NPM:</label>
                <div class="form-input-wrapper">
                    <input type="text" class="form-control" name="npm" maxlength="20"
                           placeholder="Masukkan NPM"
                           value="<?= $data['mhs']['npm'] ?? ''; ?>" required>
                </div>

                <label>Email:</label>
                <div class="form-input-wrapper">
                    <input type="email" class="form-control" name="email" maxlength="191"
                           placeholder="Masukkan email"
                           value="<?= $data['mhs']['email'] ?? ''; ?>">
                </div>

                <label>Jurusan:</label>
                <div class="form-input-wrapper">
                    <?php $j = $data['mhs']['jurusan'] ?? ''; ?>
                    <select name="jurusan" class="form-select">
                        <option value="Teknik Informatika" <?= $j=='Teknik Informatika'?'selected':''; ?>>Teknik Informatika</option>
                        <option value="Sistem Informasi" <?= $j=='Sistem Informasi'?'selected':''; ?>>Sistem Informasi</option>
                        <option value="Teknik Industri" <?= $j=='Teknik Industri'?'selected':''; ?>>Teknik Industri</option>
                    </select>
                </div>

            </div>

            <div class="form-actions">
                <button type="submit" class="btn-custom-success me-2">Simpan</button>
                <a href="<?= BASEURL; ?>/mahasiswa" class="btn-custom-warning">Kembali</a>
            </div>

        </form>

    </div>

</div>
