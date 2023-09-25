<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <?php
        $m1 = ['nim' => '0111001', 'nama' => 'Andi', 'nilai' => 85];
        $m2 = ['nim' => '0121002', 'nama' => 'Ali', 'nilai' => 99];
        $m3 = ['nim' => '0121003', 'nama' => 'Ami', 'nilai' => 78];
        $m4 = ['nim' => '0111004', 'nama' => 'Aji', 'nilai' => 96];
        $m5 = ['nim' => '0121005', 'nama' => 'Adi', 'nilai' => 54];
        $m6 = ['nim' => '0131006', 'nama' => 'Ani', 'nilai' => 68];
        $m7 = ['nim' => '0121007', 'nama' => 'Anya', 'nilai' => 89];
        $m8 = ['nim' => '0111008', 'nama' => 'Ara', 'nilai' => 100];
        $m9 = ['nim' => '0131009', 'nama' => 'Ari', 'nilai' => 37];
        $m10 = ['nim' => '01210010', 'nama' => 'Anri', 'nilai' => 60];
        

        $ar_judul = ['No','NIM','Nama Mahasiswa','Nilai','Keterangan','Grade','Predikat'];
        $mahasiswa = [$m1, $m2, $m3, $m4,$m5, $m6, $m7, $m8, $m9, $m10];
        $nilai_tertinggi = max(array_column($mahasiswa, 'nilai'));
        $nilai_terendah = min(array_column($mahasiswa, 'nilai'));
        $total_nilai = array_sum(array_column($mahasiswa, 'nilai'));
        $jumlah_mahasiswa = count($mahasiswa);
        $nilai_rata_rata = $total_nilai / $jumlah_mahasiswa; 
         
        

        $agregate = [
            'Nilai Tertinggi' =>  $nilai_tertinggi,
            'Nilai Terendah' => $nilai_terendah,
            'Nilai Rata-rata' => $nilai_rata_rata,
            'Jumlah Mahasiswa' => $jumlah_mahasiswa,
            'Jumlah Keseluruhan Nilai' => $total_nilai,
        ];
    ?>
         <h3 align ="center">Daftar Nilai Mahasiswa</h3>
         <table border="1" cellpadding="10" cellspacing="0" width="100%">
            <thead>
                <tr >
                    <?php
                        foreach ($ar_judul as $judul){
                    ?>
                    <th><?= $judul ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                    foreach($mahasiswa as $mhs){
                    $ket = ($mhs ['nilai'] >= 60) ? "Lulus" : "Gagal";
                    $nilai = $mhs ['nilai'];
                        if ($nilai >= 85 && $nilai  <= 100) $grade = "A";
                        else if ($nilai >= 75 && $nilai <= 84) $grade = "B";
                        else if ($nilai >= 60 && $nilai <= 74) $grade = "C";
                        else if ($nilai >= 30 && $nilai <= 59) $grade = "D";
                        else if ($nilai >= 0 && $nilai <= 29) $grade = "E";
                        else $grade = "";

                        switch ($grade){
                        case "A" : $predikat = "Memuaskan"; break;
                        case "B" : $predikat = "Bagus"; break;
                        case "C" : $predikat = "Cukup"; breaK;
                        case "D" : $predikat = "Kurang"; break;
                        case "E" : $predikat = "Buruk"; break;
                        default  : $predikat = '';
                        }

                    
                ?>  
                    <tr align="center">
                        <td ><?= $no++ ?></td>
                        <td><?= $mhs ['nim']?></td>
                        <td><?= $mhs ['nama']?></td>
                        <td><?= $mhs ['nilai']?></td>
                        <td><?= $ket ?> </td>
                        <td><?= $grade ?> </td>
                        <td><?= $predikat ?> </td>

                    </tr>

                <?php } ?>
            </tbody>
            <tfoot>
            <?php 
                foreach ($agregate as $agr => $hasil){
            ?>
                <tr>
                    <th colspan = "3"><?= $agr ?></th>
                    <th colspan = "5"><?= $hasil ?></th>
                </tr>
            <?php } ?>
        </tfoot>
           
        </table>

    
</body>
</html>