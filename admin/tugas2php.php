<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 PHP</title>
    <link rel="stylesheet" href="css/tugas2php.css">
</head>
<body>
    <form method="POST">
        <table class="table" border="0" cellpadding ="15" width="100%" cellspacing="0" >
            <thead>
                <tr class="thead">
                    <th colspan="2">FORM DATA DIRI</th>
                </tr>
            </thead>
            <tbody class="tbody">
                <tr>
                    <td><label for="">Nama</label></td>
                    <td><input type="text" name="nama" placeholder="masukan nama"></td>
                </tr>
                <tr>
                    <td><label for="">Pekerjaan</label></td>
                    <td>
                        <select name="pekerjaan" id="">
                        <option value="">pilih pekerjaan</option>
                        <option value="Project Manager">Project Manager</option>
                        <option value="IT Support">IT Support</option>
                        <option value="HR Manager">HR Manager</option>
                        <option value="Finance Staff">Finance Staff</option>
                        <option value="Marketing dan Sales">Marketing dan Sales</option>
                        <option value="UI Design">UI Design</option>
                        <option value="UX Research">UX Research</option>
                        <option value="Product Manager">Product Manager</option>
                        <option value="Software Engineer">Software Engineer</option>
                        <option value="Web Development">Web Development</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td valign = "top"><label for="">Hobby</label></td>
                    <td>
                    <input type="radio" name="hobby" value="Memancing">Memancing <br>
                    <input type="radio" name="hobby" value="Memasak">Memasak <br>
                    <input type="radio" name="hobby" value="Mengambar">Mengambar <br>
                    <input type="radio" name="hobby" value="Berkebun">Berkebun <br>
                    <input type="radio" name="hobby" value="Olahraga">Olahraga <br>
                    <input type="radio" name="hobby" value="Fotografi">Fotografi <br>
                    <input type="radio" name="hobby" value="Traveling">Traveling <br>
                    <input type="radio" name="hobby" value="Koleksi">Koleksi <br>
                    <input type="radio" name="hobby" value="Musik">Musik <br>
                    <input type="radio" name="hobby" value="Main Game">Main Game <br>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="tfoot">
                    <th colspan="2">
                        <button type="submit" name="simpan">Simpan</button>
                    </th>
                </tr>
            </tfoot>
        </table>        
    </form>  

<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $pekerjaan = $_POST['pekerjaan'];
    $hobby = $_POST['hobby'];

    // Menampilkan data dalam bentuk tabel
    echo "<h2 >Data Diri Anda:</h2>";
    echo "<table border='1' cellpadding='15px'>";
    echo "<tr><th>Nama</th><th>Pekerjaan</th><th>Hobby</th></tr>";
    echo "<tr><td>$nama</td><td>$pekerjaan</td><td>$hobby</td></tr>";
    echo "</table>";
}
?>

</body>
</html>