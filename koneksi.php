<?php
$koneksi = new mysqli('localhost', 'root', '', 'db_ddg');
if ($koneksi) {
    // echo "Koneksi Berhasil";
}else{
    echo $koneksi->error;
}

?>