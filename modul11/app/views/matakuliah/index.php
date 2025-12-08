<div class="container">

    <?php Flasher::flash(); ?>

    <h1>Daftar Mata Kuliah</h1>

    <a href="<?= BASEURL; ?>/matakuliah/tambah" class="btn btn-primary"
       style="padding: 10px 18px; border-radius: 6px; font-weight: bold;">
       + Tambah Mata Kuliah
    </a>

    <br><br>

    <!-- TABLE WRAPPER -->
    <div style="
        margin-top: 10px; 
        overflow-x: auto; 
        background: white; 
        padding: 20px; 
        border-radius: 10px; 
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    ">

        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background:#0069d9; color:white; text-align:left;">
                    <th style="padding: 12px;">No</th>
                    <th style="padding: 12px;">Kode MK</th>
                    <th style="padding: 12px;">Nama Mata Kuliah</th>
                    <th style="padding: 12px;">SKS</th>
                    <th style="padding: 12px;">Semester</th>
                    <th style="padding: 12px; text-align:center;">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php $no = 1; foreach( $data['mk'] as $mk ) : ?>
                <tr style="border-bottom: 1px solid #eee;">
                    <td style="padding: 10px;"><?= $no++; ?></td>
                    <td style="padding: 10px;"><?= $mk['kode_mk']; ?></td>
                    <td style="padding: 10px;"><?= $mk['nama_mk']; ?></td>
                    <td style="padding: 10px;"><?= $mk['sks']; ?></td>
                    <td style="padding: 10px;"><?= $mk['semester']; ?></td>

                    <td style="padding: 10px; text-align:center;">

                        <a href="<?= BASEURL; ?>/matakuliah/ubah/<?= $mk['id']; ?>" 
                           class="btn btn-success"
                           style="
                                padding: 6px 12px;
                                border-radius: 5px;
                                background: #28a745;
                                color: white;
                                text-decoration: none;
                           ">
                           Ubah
                        </a>

                        <a href="<?= BASEURL; ?>/matakuliah/hapus/<?= $mk['id']; ?>" 
                           class="btn btn-danger"
                           onclick="return confirm('Yakin ingin menghapus mata kuliah ini?');"
                           style="
                                padding: 6px 12px;
                                border-radius: 5px;
                                background: #dc3545;
                                color: white;
                                text-decoration: none;
                                margin-left: 6px;
                           ">
                           Hapus
                        </a>

                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

</div>
