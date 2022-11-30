<?php

#diperlukan jika sumber beberapa syntax berada di file lain
require 'koneksi.php';

#sambungan ke tambahsepatu.php
if(isset($_POST['kirim'])){
    $nama = $_POST['nama_film'];
    $genre = $_POST['genre'];
    $usia = $_POST['usia'];
    $tiket = $_POST['jml_tiket'];
    $jadwal = $_POST['jadwal'];
    $sinopsis = $_POST['sinopsis'];

    $gambar = $_FILES['cvr_film']['name'];
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));

    $newgambar = "$nama.$ekstensi";
    $tmp = $_FILES['cvr_film']['tmp_name'];

    if (move_uploaded_file($tmp, 'film/'.$newgambar)){
        $query = "INSERT INTO film (nama_film,genre,usia,jml_tiket,jadwal,cvr_film) VALUES ('$nama','$genre','$usia','$tiket','$jadwal','$sinopsis','$newgambar')";
        $result = $db->query($query);

        #jika pengiriman berhasil
        if($result){
            echo "<script> alert('Data Berhasil Dikirim');</script>";
            header("Location:film.php");
        } else { # jika pengiriman gagal
            echo "Sending Fail!";
        }
    }

    
}


?>