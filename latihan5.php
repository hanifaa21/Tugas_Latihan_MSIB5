<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Datar Persegi</title>
</head>
<body>
    <h1>Rumus Bangun Datar</h1>
    <table method="POST">
        <tr>
            <td>Sisi 1</td>
            <td>
                <input type="text" name="sisi1">
            </td>
        </tr>
        <tr>
            <td>Sisi 2</td>
            <td>
                <input type="text" name="sisi2">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="Hitung">
            </td>
        </tr>
    </table>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $sisi1 = $_POST ['sisi1'];
    $sisi2 = $_POST ['sisi2'];

    $luasPersegi = $sisi1 * $sisi2;
    echo 'Hasil Perhitungan luas persegi';
    echo 'Diketahui <br>';
    echo '   Sisi 1 : ' .$sisi1;
    echo '   Sisi 2 : ' .$sisi2;
    echo '<br> Hasil Perhitungan : ' .$luasPersegi;

}

?>