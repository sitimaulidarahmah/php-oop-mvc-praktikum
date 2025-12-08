<?php 
class MataKuliah extends Controller {

    public function index() {
        $data['judul'] = 'Daftar Mata Kuliah';
        $data['mk'] = $this->model('MataKuliah_model')->getAllMataKuliah();
        $this->view('templates/header', $data);
        $this->view('matakuliah/index', $data);
        $this->view('templates/footer');
    }

    // FORM TAMBAH
    public function tambah() {
        $data['judul'] = 'Tambah Mata Kuliah';
        $data['aksi'] = 'prosesTambah';
        $this->view('templates/header', $data);
        $this->view('matakuliah/form', $data);
        $this->view('templates/footer');
    }

    // FORM UBAH
    public function ubah($id) {
        $data['judul'] = 'Ubah Mata Kuliah';
        $data['aksi'] = 'prosesUbah';
        $data['mk'] = $this->model('matakuliah_model')->getMataKuliahById($id);
        $this->view('templates/header', $data);
        $this->view('matakuliah/form', $data);
        $this->view('templates/footer');
    }

    // PROSES TAMBAH
    public function prosesTambah() {
        if( $this->model('MataKuliah_model')->tambahDataMataKuliah($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/matakuliah');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/matakuliah');
            exit;
        }
    }

    // PROSES UBAH
    public function prosesUbah() {
        if( $this->model('MataKuliah_model')->ubahDataMataKuliah($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/matakuliah');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/matakuliah');
            exit;
        }
    }

    // HAPUS
    public function hapus($id) {
        if( $this->model('MataKuliah_model')->hapusDataMataKuliah($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/matakuliah');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/matakuliah');
            exit;
        }
    }
}
