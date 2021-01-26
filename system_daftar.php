<?php
// class datar
class daftar{
    // properti pada class daftar
    var $nama;
    var $alamat;
    var $telepon;
    var $jenis_kelamin;
    var $tanggal_lahir;
    var $tarif;
    var $skill;
    // method pada class daftar
    public function aksi_daftar($koneksi){
        
        mysqli_query($koneksi,"INSERT INTO guide values('','$this->nama','$this->alamat','$this->telepon','$this->jenis_kelamin','$this->tanggal_lahir','$this->tarif','$this->skill')");
        return "<script>alert('data anda sudah terekam')</script>";
    }

    // public function generate_data(){
    //     $array=array(
    //         'nama'=>"achmad zainun",
    //         'alamat'=>"ketapang",
    //     );
    //     $data=json_encode($array);
    //     $_SESSION['data']=$data;
    //     return $data; 
    // }

}



?>