<?php
    
    $kon = mysqli_connect("localhost", "id9016184_wisnuadhi",'12345',"id9016184_akademik");

    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal : " .mysqli_connect_error();
    }
?>