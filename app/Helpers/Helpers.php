<?php

use App\Models\RefBulan;
use Illuminate\Support\Carbon;

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

function tahunSekarang()
{
    return date('Y');
}

function bulanSekarang()
{
    $bulan = RefBulan::where('id', date('n'))
        ->first();
    return $bulan->bulan;
}

function bulanSebelumnya()
{
    $bulan = RefBulan::where('id', date("n", strtotime("last day of previous month")))
        ->first();
    return $bulan->bulan;
}
