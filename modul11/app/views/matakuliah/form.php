<style>
    .card-custom {
        max-width: 520px;
        margin: auto;
        border-radius: 16px;
        padding: 20px 20px;
        background: #ffffff;
        box-shadow: 0 6px 20px rgba(0,0,0,0.08);
    }

    .form-grid {
        display: grid;
        grid-template-columns: 130px 250px; /* ukuran input disamakan */
        row-gap: 20px;
        column-gap: 18px;
        align-items: center;
    }

    label {
        font-weight: 600;
        font-size: 15px;
    }

    .form-input-wrapper select,
    .form-input-wrapper .form-control {
        width: 250px;      
        max-width: 250px;    
        border-radius: 10px;
        padding: 10px 14px;
        height: 42px;
        border: 1.5px solid #ccc;
        font-size: 15px;
    }

    .btn-custom-success {
        background: #009688;
        color: white;
        padding: 10px 22px;
        border-radius: 10px;
        border: none;
        font-size: 15px;
        font-weight: 600;
    }

    .btn-custom-warning {
        background: #f4b400;
        color: #000;
        padding: 10px 22px;
        border-radius: 10px;
        border: none;
        font-size: 15px;
        font-weight: 600;
    }

    .form-actions {
        margin-left: 130px;
        margin-top: 25px;
    }
</style>


<div class="container mt-2 mb-4">

    <h4 class="fw-bold mb-4" style="text-align:center;">
        <?= $data['judul']; ?>
    </h4>

    <form action="<?= BASEURL; ?>/matakuliah/<?= $data['aksi']; ?>" method="post">

        <?php if(isset($data['mk']['id'])): ?>
            <input type="hidden" name="id" value="<?= $data['mk']['id']; ?>">
        <?php endif; ?>

        <div class="form-grid">

            <!-- KODE MK -->
            <label>Kode MK:</label>
            <div class="form-input-wrapper">
                <input type="text" class="form-control" name="kode_mk"
                       placeholder="Masukkan kode mata kuliah"
                       value="<?= $data['mk']['kode_mk'] ?? ''; ?>" required>
            </div>

            <!-- NAMA MK -->
            <label>Nama MK:</label>
            <div class="form-input-wrapper">
                <input type="text" class="form-control" name="nama_mk"
                       placeholder="Masukkan nama mata kuliah"
                       value="<?= $data['mk']['nama_mk'] ?? ''; ?>" required>
            </div>

            <!-- SEMESTER -->
            <label>Semester:</label>
            <div class="form-input-wrapper">
                <?php $s = $data['mk']['semester'] ?? ''; ?>
                <select name="semester" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    <?php for ($i = 1; $i <= 8; $i++) : ?>
                        <option value="<?= $i; ?>" <?= $s == $i ? 'selected' : ''; ?>>
                            Semester <?= $i; ?>
                        </option>
                    <?php endfor; ?>
                </select>
            </div>

            <!-- SKS -->
            <label>SKS:</label>
            <div class="form-input-wrapper">
                <?php $sks = $data['mk']['sks'] ?? ''; ?>
                <select name="sks" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    <?php for ($i = 1; $i <= 6; $i++) : ?>
                        <option value="<?= $i; ?>" <?= $sks == $i ? 'selected' : ''; ?>>
                            <?= $i; ?> SKS
                        </option>
                    <?php endfor; ?>
                </select>
            </div>

        </div>

        <!-- ACTION BUTTONS -->
        <div class="form-actions">
            <button type="submit" class="btn-custom-success me-2">Simpan</button>
            <a href="<?= BASEURL; ?>/matakuliah" class="btn-custom-warning">Kembali</a>
        </div>

    </form>

</div>
