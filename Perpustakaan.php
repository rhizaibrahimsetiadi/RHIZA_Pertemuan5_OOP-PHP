<?php
class Perpustakaan
{
    protected static $daftarBuku = array();

    public static function tambahBuku(Buku $buku)
    {
        self::$daftarBuku[] = $buku;
    }

    public static function tampilkanBukuTersedia()
    {
        echo "Buku Tersedia:\n";
        // Menampilkan buku tersedia
        foreach (Perpustakaan::$daftarBuku as $buku) {
            if (!($buku instanceof BukuPinjam)) {
                echo "<li>" . $buku->getInfo() . "</li>";
            }
        }
    }

    public static function tampilkanBukuDipinjam()
    {
        echo "Buku Dipinjam:\n";
        foreach (Perpustakaan::$daftarBuku as $buku) {
            if ($buku instanceof BukuPinjam) {
                echo "<li>" . $buku->getInfo() . "</li>";
            }
        }
    }
}
