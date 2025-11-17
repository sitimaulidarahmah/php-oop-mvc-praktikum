<?php
// Memastikan kelas induk User dimuat terlebih dahulu
require_once 'User.php';

/**
 * Kelas Anak (Child Class) Admin
 * Mewarisi semua properti dan metode dari kelas User.
 */
class Admin extends User
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

    /**
     * Method Overriding:
     * Menimpa metode salam() dari kelas User.
     */
    public function salam()
    {
        return "Halo, saya <strong>{$this->nama}</strong>, peran saya adalah <strong>admin</strong>. 
        Sebagai admin, saya memiliki <strong>akses {$this->akses_level}</strong>.";
    }

    /**
     * Metode khusus milik Admin.
     */
    public function kelolaSistem()
    {
        return "Admin {$this->nama} sedang mengelola data sistem.";
    }
}


