<?php

use Illuminate\Support\Arr;

function format_uang($nomer)
{
    return number_format($nomer, 0, ',', '.');
}
function terbilang($nomer)
{
    $nomer = abs($nomer);
    $baca = array('', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh', 'sebeleas');
    $terbilang = '';

    if ($nomer < 12) { //1-11
        $terbilang = ' ' . $baca[$nomer];
    } elseif ($nomer < 20) { //12-19
        $terbilang = terbilang($nomer - 10) . ' belas';
    } elseif ($nomer < 100) { //20-99
        $terbilang = terbilang($nomer / 10) . ' puluh' . terbilang($nomer % 10);
    } elseif ($nomer < 200) { //100-199
        $terbilang = ' seratus' . terbilang($nomer - 100);
    } elseif ($nomer < 1000) { //200-999
        $terbilang = terbilang($nomer / 100) . ' ratus' . terbilang($nomer % 100);
    } elseif ($nomer < 2000) { //1.000-1.999
        $terbilang = ' seribu' . terbilang($nomer - 1000);
    } elseif ($nomer < 1000000) { //2.000-999.999
        $terbilang = terbilang($nomer / 1000) . ' ribu' . terbilang($nomer % 1000);
    } elseif ($nomer < 1000000000) { //10.000.00- 999.999.999
        $terbilang = terbilang($nomer / 1000000) . ' juta' . terbilang($nomer % 1000000);
    }

    return $terbilang;
}
function tanggal_indonesia($tgl, $tampil_hari = true)
{
    $nama_hari = array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\`at', 'Sabtu');
    $nama_bulan = array(1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');

    $tahun = substr($tgl, 0, 4);
    $bulan = $nama_bulan[(int) substr($tgl, 5, 2)];
    $tanggal = substr($tgl, 8, 2);
    $text = '';

    if ($tampil_hari) {
        $urutan_hari = date('w', mktime(0, 0, 0, substr($tgl, 5, 2), $tanggal, $tahun));
        $hari = $nama_hari[$urutan_hari];
        $text .= "$hari, $tanggal $bulan $tahun";
    } else {
        $text .= "$tanggal $bulan $tahun";
    }
    return $text;
}
function tambah_nol_didepan($value, $threshold = null){
    return sprintf("%0". $threshold . "s", $value);
}