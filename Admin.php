<?php
// Memastikan kelas induk User dimuat terlebih dahulu
require_once 'User.php';
require_once 'LoginInterface.php';

/**
 * Kelas Anak (Child Class) Admin
 * Mewarisi semua properti dan metode dari kelas User.
 */
class Admin extends User implements LoginInterface
{
    private $akses_level = 'full';

    /**
     * Konstruktor Admin.
     * Role selalu dipaksa menjadi 'admin'.
     */
    public function __construct($nama)
    {
        // Memanggil konstruktor kelas induk dengan role = 'admin'
        parent::__construct($nama, "admin");
    }

    // ===========================================
 // IMPLEMENTASI DARI LoginInterface
 // ===========================================

    /**
     * Implementasi wajib dari LoginInterface.
     */
    public function login()
    {
        return "Admin **{$this->nama}** berhasil login ke sistem dengan hak akses penuh.";
    }
    //  Implementasi wajib dari LoginInterface.

    public function logout()
    {
        return "Admin **{$this->nama}** berhasil logout dari sistem.";
    }



    /**
     * Method Overriding:
     * Menimpa metode salam() dari kelas User.
     */
    public function salam()
    {
        // Menggunakan parent::salam() untuk mendapatkan sapaan default dari Induk
        $pesan_induk = parent::salam();
        return $pesan_induk . " Sebagai admin, saya memiliki **akses {$this->akses_level}**.";
    }

    /**
     * Metode khusus milik Admin.
     */
    public function kelolaSistem()
    {
        return "Admin {$this->nama} sedang mengelola data sistem.";
    }
}
