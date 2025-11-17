<?php

/**
 * Kelas Induk (Parent Class) untuk semua pengguna.
 * Mewakili pengguna dasar dengan properti nama dan peran default 'user'.
 */
class User
{
    protected $nama;     // dilindungi, bisa diakses oleh kelas anak
    protected $role;     // peran default ditetapkan pada konstruktor

    /**
     * Konstruktor User.
     */
    public function __construct($nama, $role = 'user')
    {
        $this->nama = $nama;
        $this->role = $role;
    }

    /**
     * Metode dasar sapaan User.
     */
    public function salam()
    {
        return "Halo, saya <strong>{$this->nama}</strong>, peran saya adalah <strong>{$this->role}</strong>.";
    }

    /**
     * Mendapatkan peran user.
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Destruktor (opsional, hanya untuk pembelajaran OOP)
     */
    public function __destruct()
    {
       echo "--> Objek User **{$this->nama}** telah dihancurkan.<br>";
    }
}


