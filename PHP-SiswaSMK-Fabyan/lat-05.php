<?php 

    $tanggal = 0;
    
    // $hasil = $tanggal < 0;

    // if ($tanggal < 32) {
    //     if ($tanggal > 0) {
    //         echo 'Benar';
    //     }else {
    //         echo 'Salah';
    //     }
    // }else {
    //     echo 'Salah';
    // }

    // echo '<br>';

    $nilai = 1;

    // if ($nilai <= 100) {
    //     if ($nilai >= 0) {
    //         echo 'Nilai Benar';
    //     }else {
    //         echo 'Nilai Salah';
    //     }
    // }else {
    //     echo 'Nilai Salah';
    // }

    // if ($nilai >= 0 && $nilai <= 100) {
    //     echo 'Nilai benar';
    // }else {
    //     echo 'Nilai salah';
    // }

    if ($nilai >= 100 || $nilai <= 0) {
        echo 'Nilai salah';
    }else {
        echo 'Nilai benar';
    }
?>