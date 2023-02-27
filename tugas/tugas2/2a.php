<?php
$awal = "Ali Imran";
$akhir = "Rodja";

for ($o = 1; $o <= 100; $o++) {
    if ($o % 3 == 0 && $o % 5 == 0) {
        echo $awal . " " . $akhir . "<br>";
    } elseif ($o % 3 == 0) {
        echo $awal . "<br>";
    } elseif ($o % 5 == 0) {
        echo $akhir . "<br>";
    } else {
        echo $o . "<br>";
    }
}
