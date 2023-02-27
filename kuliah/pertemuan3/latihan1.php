
<?php
// Pengulaawan while 
// 1. instalisasi / nilai awal
// 2. 
// 3. increment / Decrement

$nilai_awal = 1;
while ($nilai_awal <= 10) { // kondisi terminasi
    echo "Hello Mamen $nilai_awal <br>";
    $nilai_awal++;
    // Atau = $nilai_awal ++;
}

$nilai_awal = 10;
while ($nilai_awal >= 1) { // kondisi terminasi
    echo "Hello Mamen $nilai_awal <br>";
    $nilai_awal--;
    // Atau = $nilai_awal ++;
}


// terbabru
$nilai_awal = 1;
while ($nilai_awal <= 10) { // kondisi terminasi
    echo $nilai_awal;
    echo "<br>";
    $nilai_awal += 2;
    // Atau = $nilai_awal ++;
}

echo "<hr>";

// for 
for ($nilai_awal = 1; $nilai_awal <= 10; $nilai_awal++) {
    echo "hello world $nilai_awal x<br>";
}

?>