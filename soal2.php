<?php

class Nilai {
    public $mapel;
    public $nilai;

    public function __construct($mapel, $nilai) {
        $this->mapel = $mapel;
        $this->nilai = $nilai;
    }
}

class Siswa {
    public $nrp;
    public $nama;
    public $daftarNilai = [];

    public function __construct($nrp, $nama) {
        $this->nrp = $nrp;
        $this->nama = $nama;
    }

    public function tambahNilai($mapel, $nilai) {
        $this->daftarNilai[] = new Nilai($mapel, $nilai);
    }
}

$siswaBaru = new Siswa("123456", "Nama Siswa");
$siswaBaru->tambahNilai("Inggris", 100);

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$mapelOptions = ["Inggris", "Indonesia", "Jepang"];

$daftarSiswa = [];
for ($i = 0; $i < 10; $i++) {
    $namaSiswa = generateRandomString(10);
    $mapelRandom = $mapelOptions[array_rand($mapelOptions)];
    $nilaiRandom = rand(0, 100);

    $siswa = new Siswa("NRP" . ($i + 1), $namaSiswa);
    $siswa->tambahNilai($mapelRandom, $nilaiRandom);
    $daftarSiswa[] = $siswa;
}

echo "Siswa Baru: <br>";
echo "NRP: " . $siswaBaru->nrp . "<br>";
echo "Nama: " . $siswaBaru->nama . "<br>";
echo "Daftar Nilai: <br>";
foreach ($siswaBaru->daftarNilai as $nilai) {
    echo "Mapel: " . $nilai->mapel . ", Nilai: " . $nilai->nilai . "<br>";
}

echo "<br>";

echo "Daftar 10 Siswa: <br>";
foreach ($daftarSiswa as $siswa) {
    echo "NRP: " . $siswa->nrp . "<br>";
    echo "Nama: " . $siswa->nama . "<br>";
    echo "Daftar Nilai: <br>";
    foreach ($siswa->daftarNilai as $nilai) {
        echo "Mapel: " . $nilai->mapel . ", Nilai: " . $nilai->nilai . "<br>";
    }
    echo "<br>";
}
?>
