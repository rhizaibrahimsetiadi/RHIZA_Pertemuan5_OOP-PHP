<?php
class Buku
{
    protected $judul;
    protected $penulis;
    protected $tahunTerbit;

    public function __construct($judul, $penulis, $tahunTerbit)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function getTahunTerbit()
    {
        return $this->tahunTerbit;
    }

    public function getInfo()
    {
        return "Judul: $this->judul, Penulis: $this->penulis, Tahun Terbit: $this->tahunTerbit";
    }
}
