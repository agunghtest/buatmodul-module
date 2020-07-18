<?php

namespace Modules\Tema\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;

class Profile extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        if (cas()->isAuthenticated()) {
            $response = Http::get('https://simpeg.lapan.go.id/index.php/api/sdmpusispan?email=' . cas()->getAttribute('mail'));
            // $this->data['image'] = json_decode($response->body())->result[0]->image;
            // $this->data['name'] = json_decode($response->body())->result[0]->nama;
            // $this->data['org'] = json_decode($response->body())->result[0]->satker;
            $this->data['image'] = 'https://cdn.iconscout.com/icon/free/png-512/avatar-380-456332.png';
            $this->data['name'] = 'Nama';
            $this->data['org'] = 'asdsdsad';
            return view('tema::components.profile', $this->data);
        }
    }
}
