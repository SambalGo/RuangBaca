<?php
    $sname ="localhost";
    $uname ="root";
    $password ="";

    $db     ="ruangbaca";
    $conn   = mysqli_connect($sname, $uname, $password, $db);

    if(!$conn) {
        echo "gagal koneksi";
        exit();
    }