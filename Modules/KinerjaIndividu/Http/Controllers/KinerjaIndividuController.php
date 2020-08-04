<?php

namespace Modules\KinerjaIndividu\Http\Controllers;

use App\Models\MstLogbook;
use App\Models\MstPk;
use App\Models\MstSetLaptek;
use App\Models\MstSetLogbook;
use App\Models\RefPersetujuanLaptek;
use App\Models\ViewMasterSkp;
use App\Models\ViewDetailPenilaiLogbook;
use App\Models\TrxPersetujuanSkp;
use App\Models\ViewMasterOfk;
use App\Models\ViewPenilaianCapaian;
use App\Models\ViewPenilaiOfk;
use App\Models\ViewRiwayatPersetujuanCapaian;
use App\Models\ViewRiwayatPersetujuanLaptek;
use App\Models\ViewRiwayatPersetujuanLogbook;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class KinerjaIndividuController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $skp = ViewMasterSkp::where('id_pegawai', profilPns('id'))
            ->first();

        $riwayatPersetujuanSkp = TrxPersetujuanSkp::where('id_mst_skp', $skp->id)
            ->first();

        $pk = MstPk::where('idp', profilPns('id'))
            ->where('tahun', tahunSekarang())
            ->where('deleted_at', null)
            ->orderByDesc('created_at')
            ->first();

        $formatCapaianRenaksi = MstSetLaptek::where('id_mst_pegawai', profilPns('id'))
            ->first();

        $masterOfk = ViewMasterOfk::where('id_mst_pegawai', profilPns('id'))
            ->first();

        $penilaiOfk = ViewPenilaiOfk::where('id_pegawai', profilPns('id'))
            ->get();

        $riwayatCapaianBulanIni = ViewRiwayatPersetujuanCapaian::where('id_pegawai', profilPns('id'))
            ->where('bulan', bulanSekarang())
            ->where('tahun', 'tahunSekarang()')
            ->orderByDesc('tgl_selesai')
            ->first();

        $PenilaianCapaianBulanIni = ViewPenilaianCapaian::where('id_mst_capaian', 12)
            #->where('id_mst_capaian', $riwayatCapaianBulanIni->id_mst_capaian)
            ->first();

        $PenilaianCapaianBulanSebelumnya = ViewPenilaianCapaian::where('id_mst_capaian', 26)
            #->where('id_mst_capaian', $riwayatCapaianBulanIni->id_mst_capaian)
            ->first();

        $riwayatCapaianBulanSebelumnya = ViewRiwayatPersetujuanCapaian::where('id_pegawai', profilPns('id'))
            ->where('bulan', bulanSebelumnya())
            ->where('tahun', 'tahunSekarang()')
            ->orderByDesc('tgl_selesai')
            ->first();

        $riwayatLaptekBulanIni = ViewRiwayatPersetujuanLaptek::where('id_pegawai', profilPns('id'))
            ->where('bulan', bulanSekarang())
            ->where('tahun', 'tahunSekarang()')
            ->orderByDesc('tgl_upload')
            ->first();

        $riwayatLaptekBulanSebelumnya = ViewRiwayatPersetujuanLaptek::where('id_pegawai', profilPns('id'))
            ->where('bulan', bulanSebelumnya())
            ->where('tahun', 'tahunSekarang()')
            ->orderByDesc('tgl_upload')
            ->first();

        $formatLogbook = MstSetLogbook::where('id_mst_pegawai', profilPns('id'))
            ->first();

        $penilaiLogbook = ViewDetailPenilaiLogbook::where('id_mst_pegawai', profilPns('id'))
            ->first();

        $riwayatLogbookBulanIni = ViewRiwayatPersetujuanLogbook::where('id_pegawai', profilPns('id'))
            ->where('bulan', bulanSekarang())
            ->where('tahun', 'tahunSekarang()')
            ->orderByDesc('created_at')
            ->first();

        $riwayatLogbookBulanSebelumnya = ViewRiwayatPersetujuanLogbook::where('id_pegawai', profilPns('id'))
            ->where('bulan', bulanSebelumnya())
            ->where('tahun', 'tahunSekarang()')
            ->orderByDesc('created_at')
            ->first();

        #dd($penilaiOfk);

        return view('kinerjaindividu::index', [
            'skp' => $skp,
            'riwayatPersetujuanSkp' => $riwayatPersetujuanSkp,
            'pk' => $pk,
            'formatCapaianRenaksi' => $formatCapaianRenaksi,
            'formatLogbook' => $formatLogbook,
            'penilaiLogbook' => $penilaiLogbook,
            'riwayatLogbookBulanIni' => $riwayatLogbookBulanIni,
            'riwayatLogbookBulanSebelumnya' => $riwayatLogbookBulanSebelumnya,
            'masterOfk' => $masterOfk,
            'penilaiOfk' => $penilaiOfk,
            'riwayatLaptekBulanIni' => $riwayatLaptekBulanIni,
            'riwayatLaptekBulanSebelumnya' => $riwayatLaptekBulanSebelumnya,
            'riwayatCapaianBulanIni' => $riwayatCapaianBulanIni,
            'riwayatCapaianBulanSebelumnya' => $riwayatCapaianBulanSebelumnya,
            'PenilaianCapaianBulanIni' => $PenilaianCapaianBulanIni,
            'PenilaianCapaianBulanSebelumnya' => $PenilaianCapaianBulanSebelumnya,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('kinerjaindividu::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('kinerjaindividu::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('kinerjaindividu::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
