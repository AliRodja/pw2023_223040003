<?php
function urutanAngka($angka)
{
    $mulai = 1;
    for ($a = 1; $a <= $angka; $a++) {
        for ($b = 1; $b <= $a; $b++) {
            echo $mulai . " ";
            $mulai++;
        }
        echo "</br>";
    }
}

urutanAngka(5);
