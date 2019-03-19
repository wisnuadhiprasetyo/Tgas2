<?php
    include 'koneksi.php';
    
    $no = 1;
    $data = mysqli_query($kon,"select * from customer");
?>

<?php
    include 'koneksi.php';
    
    $no1 = 1;
    $data1 = mysqli_query($kon,"select * from matakuliah");
?>

<?php
    include 'koneksi.php';
    
    $no2 = 1;
    $data2 = mysqli_query($kon,"select * from mahasiswa");
?>

<?php
    include 'koneksi.php';
    
    $no3 = 1;
    $data3 = mysqli_query($kon,"select * from nilai");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Akademik</title>
    <style>
        body {
            font-family: "Arial", Arial, Arial, sans-serif;
        }
        #customers {
          font-family: "Arial", Arial, Arial, sans-serif;
          border-collapse: collapse;
          width: 50%;
          margin-left: 4%;
        }

        #customers td, #customers th {
          border: 5px solid #2a4bdd;
          padding: 5px;
        }

        #customers tr:nth-child(even)

        #customers tr:hover 

        #customers th {
          padding-top: 15px;
          padding-bottom: 15px;
          text-align: center;
          background-color: #1833a7;
          color: white;
        }
        .tbedit {
            background-color: #5ec3cc; /* Blue */
            border: none;
            color: white;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 13px;
            margin: 4px 2px;
            cursor: pointer;
            
        }
        .tbhapus {
            background-color: #bf3b3b; /* Red */
            border: none;
            color: white;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 13px;
            margin: 4px 2px;
            cursor: pointer;
            
        }

        .tbadd {
            background-color: #16a085; /* Red */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            margin: 4px 2px;
            cursor: pointer;
            
        }
    </style>
</head>
<body>
    <h1>MENAMPILKAN DATA MYSQL</h1>
    <h2>Nama : Wisnu Adhi Prasetyo</h2>
    <h2>NIM  : 16.01.53.0086</h2>

    <hr>
    <center><h2>Data Customer</h2></center>
    <table id="customers" border="5">
        <tr>
            <th>Id Customer</th>
            <th>Username</th>
            <th>Password</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Email</th>
            <th>Tanggal Lahir</th>
            <th>Kode Pos</th>
            <th>Nama Ibu Kandung</th>
            <th>Gender</th>
        </tr>
        <?php while($d = mysqli_fetch_array($data)){?>
        <tr>
          
            <td><?=$d['id_customer']?></td>
            <td><?=$d['username']?></td>
             <td><?=$d['password']?></td>
             <td><?=$d['nama']?></td>
             <td><?=$d['umur']?></td>
             <td><?=$d['alamat']?></td>
             <td><?=$d['telp']?></td>
             <td><?=$d['email']?></td>
             <td><?=$d['tgl_lahir']?></td>
             <td><?=$d['kode_pos']?></td>
             <td><?=$d['nama_ibu_k']?></td>
             <td><?=$d['gender']?></td>
        </tr>
        <?php } ?>
    </table>
    
    <center><h2>Data Mata Kuliah</h2></center>
    <table id="customers" border="5">
        <tr>
            <th>Kode Mata Kuliah</th>
            <th>Mata Kuliah</th>
            <th>SKS</th>
            <th>Program Studi</th>
        </tr>
        <?php while($d = mysqli_fetch_array($data1)){?>
        <tr>
            
            <td><?=$d['kdmk']?></td>
            <td><?=$d['nmmk']?></td>
             <td><?=$d['sks']?></td>
             <td><?=$d['prodi']?></td>
        </tr>
        <?php } ?>
    </table>
   
    <center><h2>Data Mahasiswa</h2></center>
    <table id="customers" border="5">
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Program Studi</th>
        </tr>
        <?php while($d = mysqli_fetch_array($data2)){?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$d['nim']?></td>
            <td><?=$d['nama']?></td>
             <td><?=$d['prodi']?></td>
        </tr>
        <?php } ?>
    </table>

   
    <center><h2>Data Nilai</h2></center>
    <table id="customers" border="5">
        <tr>
            <th>Tahun Kode</th>
            <th>NIM</th>
            <th>Kode Mata Kuliah</th>
            <th>Nilai</th>
        </tr>
        <?php while($d = mysqli_fetch_array($data3)){?>
        <tr>
            
            <td><?=$d['thakd']?></td>
            <td><?=$d['nim']?></td>
             <td><?=$d['kdmk']?></td>
             <td><?=$d['nilai']?></td>
        </tr>
        <?php } ?>
    </table>

    
</body>
</html>