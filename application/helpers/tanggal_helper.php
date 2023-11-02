<?php
function formatHariTanggal($waktu)
{
    $hari = date('N', strtotime($waktu));
    $nama_hari = [
        1 => 'Senin',
        2 => 'Selasa',
        3 => 'Rabu',
        4 => 'Kamis',
        5 => 'Jumat',
        6 => 'Sabtu',
        7 => 'Minggu',
    ];
    $nama_hari_indonesia = $nama_hari[$hari];

    $tanggal = date('j', strtotime($waktu));
    $nama_bulan = [
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember',
    ];

    $bl = date('n', strtotime($waktu));
    $bulan = $nama_bulan[$bl];
    $tahun = date('Y', strtotime($waktu));

    return "$nama_hari_indonesia, $tanggal $bulan $tahun";
}