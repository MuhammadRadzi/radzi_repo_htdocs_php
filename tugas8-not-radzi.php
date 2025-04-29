<?php
//Hari ini Azzam puasa, jika lanjut puasa, maka akan berbuka dengan nasi padang, jika tidak Azzam makan nasi padang disiang hari. Kondisi Azzam tidak puasa karena mokel.

$puasa_azzam = false;

if (!$puasa_azzam) {
    echo "Berbuka dengan nasi padang";
} else {
    echo "Makan nasi padang disiang hari";
}