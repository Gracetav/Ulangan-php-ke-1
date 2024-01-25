<?php
function reservasihotel($nama, $no_telp, $alamat, $tipe, $harga, $waktu, $diskon, $total, $status){
    echo "
    ===Program Reservasi Hotel Sederhana=== <br/>
    Nama Pemesan : $nama <br/>
    Nomor Whatsapp : $no_telp <br/>
    Alamat : $alamat <br/>
    Tipe Kamar : $tipe <br/>";

    if($tipe == "Deluxe"){
        $hargakamar = 200000;

        if($waktu > 4){
            $totalharga = $hargakamar * $waktu * 0.5;
            $diskon = "50%";
        }
        else{
            $totalharga = $hargakamar * $waktu;
            $diskon = "0";
        }
    }elseif($tipe == "Superior"){
        $hargakamar = 400000;

        if($waktu > 4){
            $totalharga = $hargakamar * $waktu * 0.35;
            $diskon = "35%";
        }
        else{
            $totalharga = $hargakamar * $waktu;
            $diskon = "0";
        }
    }else{
        $hargakamar = 800000;

        if($waktu > 4){
            $totalharga = $hargakamar * $waktu * 0.25;
            $diskon = "25%";
        }
        else{
            $totalharga = $hargakamar * $waktu;
            $diskon = "0";
        }
    }

    if ($status == "Waiting") {
        $warna_status = "yellow";
    } elseif ($status == "Check In") {
        $warna_status = "green";
    } else {
        $warna_status = "Red"; 
    }
    echo "
    Harga per Malam : Rp ".number_format($hargakamar)." <br/>
    Lama Menginap : $waktu <br/>
    Diskon : Rp $diskon <br/>
    Total Harga : Rp ".number_format($totalharga)." <br/>
    Status : <span style='color: $warna_status;'>$status</span>";
}

    global $totalharga, $diskon, $hargakamar, $harga;
    
    echo reservasihotel("Afrzizal Dwi Handika", "0895321015259", "jl.abdul muis no 44", "Premium", $hargakamar, 31, $diskon, $totalharga, "Checkin")
?>