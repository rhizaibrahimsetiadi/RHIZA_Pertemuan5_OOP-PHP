<?php
require_once 'Buku.php';
require_once 'BukuPinjam.php';
require_once 'Perpustakaan.php';

// Membuat objek buku
$buku1 = new Buku("Sejarah peperangan broker", "goufur", 2000);
$buku2 = new Buku("Sejarah terbentuknya Hejoboys", "Drax", 2010);
$buku3 = new BukuPinjam("Perjalanan GHO", "Doni", 2020, "2024-04-04");

// Menambahkan buku ke perpustakaan
Perpustakaan::tambahBuku($buku1);
Perpustakaan::tambahBuku($buku2);
Perpustakaan::tambahBuku($buku3);

// Menampilkan buku tersedia
Perpustakaan::tampilkanBukuTersedia();

// Menampilkan buku yang dipinjam
Perpustakaan::tampilkanBukuDipinjam();
