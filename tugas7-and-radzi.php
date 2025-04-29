<?php
// Hari ini Bukhori sehat Wal Afiat, dan motornya menyala dengan lancer, maka Bukhori berangkat ke sekolah jika tidak ada kendala di keduanya. Kondisi motor mogok.

$kondisi_bukhori = true; //true=sehat, false=sebaliknya
$kondisi_motor = false;

if ($kondisi_bukhori == true && $kondisi_motor == true) {
    echo "Berangkat ke sekolah";
} else {
    echo "Tidak jadi ke sekolah";
}