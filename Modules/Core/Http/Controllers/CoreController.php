<?php

namespace Modules\Core\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Core\Entities\Settings;
class CoreController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        echo config("core.name");
        print_r(Settings::where('status', '=', '1')->get());
        return view('core::index');
    }

    public function test_notification()
    {
        \Amqp::publish('', 
        json_encode(array(
            'channel' => '1',
            'from' => 'from',
            'to' => 'to',
            'text' => 'Capaian Bulan Juli telah diterima Bpk @suwardi',
            'create_at' => date('Y-m-d H:i:s')
        )), ['queue' => 'testig']);
    }
}
