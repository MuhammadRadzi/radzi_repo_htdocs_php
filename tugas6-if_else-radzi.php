<?php
// Kunsyafei akan menyelesaikan masa studinya agar mendapatkan kriteria sangat mampu maka nilai harus >= 90, kriteria baik >= 80, cukup >=75, dilain itu maka tidak mampu. kondisi nilai kunsyafei 94.

$nilai_syafei = 94;

if ($nilai_syafei >= 90) {
    echo "Baik";
} elseif ($nilai_syafei >= 75) {
    echo "Cukup";
} else {
    echo "Tidak mampu";
}