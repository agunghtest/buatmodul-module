<?php

namespace Modules\KinerjaIndividu\Http\Controllers;

use App\Models\MstPk;
use App\Models\MstSetLaptek;
use App\Models\MstSetLogbook;
use App\Models\RefPersetujuanLaptek;

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
        $skp = DB::table('view_master_skp')
            ->where('id_pegawai', profilPns('id'))
            ->first();

        $riwayatPersetujuanSkp = DB::table('view_riwayat_persetujuan_skp')
            ->where('id_mst_skp', $skp->id)
            ->first();

        $pk = MstPk::where('idp', profilPns('id'))
            ->where('tahun', tahunSekarang())
            ->where('deleted_at', null)
            ->orderByDesc('created_at')
            ->first();

        $formatCapaianRenaksi = MstSetLaptek::where('id_mst_pegawai', profilPns('id'))
            ->first();

        $formatLogbook = MstSetLogbook::where('id_mst_pegawai', profilPns('id'))
            ->first();

        $penilaiLogbook = DB::table('view_penilai_logbook')
            ->where('id_pegawai', profilPns('id'))
            ->first();

        #dd($pk);

        return view('kinerjaindividu::index', [
            'skp' => $skp,
            'riwayatPersetujuanSkp' => $riwayatPersetujuanSkp,
            'pk' => $pk,
            'formatCapaianRenaksi' => $formatCapaianRenaksi,
            'formatLogbook' => $formatLogbook,
            'penilaiLogbook' => $penilaiLogbook,
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
