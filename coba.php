<?php
session_start();
$koneksi=mysqli_connect('localhost','root','','bahtiar');
?>
<html>
    <head>

    </head>
    <body>
        <form action="" method="post">
<label for="">nama</label>
<input type="text" name="nama">
<label for="">alamat</label>
<input type="text" name="alamat">
<input type="submit" name="simpan" value="simpan">
<!-- <input type="submit" name="generate_data" value="generate data"> -->
        </form>
    </body>
</html>

<?php
include 'system_daftar.php';


if(isset($_POST['simpan'])){
// object
$daftar=new daftar();

$daftar->nama=$_POST['nama'];
// echo $_POST['nama'];
echo $daftar->aksi_daftar($koneksi,$_POST['nama'],$_POST['alamat']);
}


if(isset($_POST['generate_data'])){
    $daftar=new daftar();
    echo $daftar->generate_data();
}



?>