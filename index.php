<?php
    $serve = "localhost";
    $username = "root";
    $password = "";
    $database = "db_samuel";

    $koneksi = mysqli_connect($serve, $username, $password, $database);

    $data = "SELECT * FROM `karyawan` ";
    $hasil = mysqli_query($koneksi, $data);

    // foreach(($hasil) as $tampilkan)
    // {
    //     var_dump($tampilkan);
    //     // echo['nama_karyawan'];
    // }

    // while($row = mysqli_fetch_assoc($hasil))
    // {
    //     echo ($row['nama_karyawan']);
    // }


    mysqli_close($koneksi);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DAY 03 - Belajar DBMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mx-auto py-5">
        <div class="row">
            <div class="col">
                <h2>Data Karyawan</h2>
                <table class="border-collapse border border-slate-400 ">
                    <tr>
                        <th class="border border-slate-300">No</th>
                        <th class="border border-slate-300">Nama</th>
                        <th class="border border-slate-300">Email</th>
                        <th class="border border-slate-300">Jenis</th>
                        <th class="border border-slate-300">Alamat</th>
                    </tr>
                    <?php $no = 0; while($data_k = mysqli_fetch_assoc($hasil)) :  ?>
                        <tr>
                            <td class="border border-slate-300"> <?= ++$no?></td>
                            <td class="border border-slate-300"><?php echo $data_k['nama_karyawan']?></td>
                            <td class="border border-slate-300"><?= $data_k['email']?></td>
                            <td class="border border-slate-300"><?= $data_k['jk']?></td>
                            <td class="border border-slate-300"><?= $data_k['alamat_jalan'] .' '. $data_k['alamat_distrik']  ?></td>
                        </tr>  
                    <?php endwhile ?>    
                </table>
            </div>
        </div>
    </div>
</body>
</html>