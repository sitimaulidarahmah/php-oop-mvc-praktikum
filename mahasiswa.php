<?php
class Mahasiswa
{
    private string $nama;
    private string $nim;

    public function __construct(string $nama, string $nim)
    {
        $this->nama = $nama;
        $this->nim = $nim;
    }

    public function setNim($nim)
    {
        // Validasi Sederhana: NIM harus memiliki panjang 7
        if (strlen($nim) === 7) {
            $this->nim = $nim;
            return true;
        } else {
            echo "<span style='color: red;'>[ERROR ENKAPSULASI] NIM '{$nim}' tidak valid (Harus 7
digit). NIM tidak diubah.</span><br>";
            return false;
        }
    }

    public function getNama(): string
    {
        return $this->nama;
    }

    public function getNim(): string
    {
        return $this->nim;
    }

    public function sayHello(): string
    {
        return "Halo, saya adalah Mahasiswa {$this->nama}.<br>" .
            "NIM saya adalah {$this->nim}. Selamat datang di dunia OOP!";
    }

    public function __destruct()
    {
        echo "--> Objek **{$this->nama}** telah dihancurkan (Destruktor berjalan).<br>";
    }
}
