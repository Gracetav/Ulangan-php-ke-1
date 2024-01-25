<?php

////nama : Afrizal Dwi Handika
/// Kelas : X-RPL-2
/// Absen : 2

function Absen($nomorAbsen, $kondisiTerminasi, $kt1, $kt2, $kt3, $kt4, $kt5, $kt6,$kt7){
    for ($nomorAbsen; $nomorAbsen <= $kondisiTerminasi; $nomorAbsen++){
        if($nomorAbsen == $kt1 || $nomorAbsen == $kt2 || $nomorAbsen == $kt6){
            echo "Peserta didik no $nomorAbsen Tidak Hadir <br/>";
        } elseif($nomorAbsen == $kt3 || $nomorAbsen == $kt4){
            echo "Peserta didik no $nomorAbsen Terlambat <br/>";
        } elseif (   $nomorAbsen == $kt5 || $nomorAbsen == $kt7){
            echo "Peserta didik no $nomorAbsen Sakit<br/>";
        }
        else {
            echo "Peserta didik no $nomorAbsen Hadir <br/>";
     }
    }
}
echo Absen(1,15,2,3,6,8,9,10,13)

?>