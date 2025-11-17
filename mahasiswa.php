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

    
}
