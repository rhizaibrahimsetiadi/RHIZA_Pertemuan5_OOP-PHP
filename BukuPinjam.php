<?php
require_once 'Buku.php';

class BukuPinjam extends Buku
{
    protected $tanggalPinjam;

    public function __construct($judul, $penulis, $tahunTerbit, $tanggalPinjam)
    {
        parent::__construct($judul, $penulis, $tahunTerbit);
        $this->tanggalPinjam = $tanggalPinjam;
    }

    public function getTanggalPinjam()
    {
        return $this->tanggalPinjam;
    }

    public function getInfo()
    {
        return parent::getInfo() . ", Tanggal Pinjam: $this->tanggalPinjam";
    }
}
