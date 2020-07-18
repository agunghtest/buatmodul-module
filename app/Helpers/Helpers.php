<?php

function profilPns($tampil)
{
    $idPegawai = 1684;

    $dataPns = DB::table('view_data_personal_pns')->where('id', $idPegawai)->first();

    if ($tampil == "id") {
        return $dataPns->id;
    } else if ($tampil == "nama") {
        return $dataPns->nama;
    } else if ($tampil == "nip") {
        return $dataPns->nip_baru;
    } else if ($tampil == "email") {
        return $dataPns->email;
    }
}


function formatTanggal($tgl, $cetak_hari = false)
{
    $hari = array(
        1 =>    'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu',
        'Minggu'
    );

    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $split       = explode('-', $tgl);
    $tgl_indo = $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];

    if ($cetak_hari) {
        $num = date('N', strtotime($tgl));
        return $hari[$num] . ', ' . $tgl_indo;
    } else {
        $num = date('N', strtotime($tgl));
        return $hari[$num];
    }
    return $tgl_indo;
}

function tahunSekarang()
{
    return date('Y');
}
