<?php

$ar_buah = ['pepeaya', 'mangga', 'pisang', 'jambu'];
// menambahkan index
$ar_buah[] = 'naga';

echo '<br> cetak data array menggunakan looping foreach';

foreach ($ar_buah as  $id = $buah){
    echo 'key array buah : ' .$id;
}
foreach ($ar_buah as $buah){
    echo '<br> Data Buah : ' .$buah;
}
foreach ($ar_buah as $id => $buah){
    echo '<br> Buah dengan id' .$id. ' Adalah Buah : ' .$buah;
}

?>