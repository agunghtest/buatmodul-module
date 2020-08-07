<?php

namespace Modules\CreateModul\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class CreateModulController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        
        $client = new Client();
        $res = $client->request('GET', 'https://kinerja.lapan.go.id/sximoapi?module=unitkerja', [
            'auth' => ['api_dok_perencanaan@mail.com', 'Pxv3/78h0ADJSvO401eD3bRpa']
        ]);



        $test= $res->getBody();
        
        return view('createmodul::index',['skp' => $test]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('createmodul::create');
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
        return view('createmodul::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('createmodul::edit');
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


    public function getCreate()
    {

        $this->data = array(
            'pageTitle'    => 'Create New Module',
            'pageNote'    => 'Create Quick Module ',
        );          
      //  $this->data['tables'] = Module::getTableList($this->db);
        $this->data['cruds'] = \SiteHelpers::crudOption(); 
        return view('createmodul::create',$this->data);       
    
    } 
}
