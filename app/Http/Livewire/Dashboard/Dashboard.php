<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class Dashboard extends Component
{
    public $data11456;

    public function mount()
    {


    }

    public function render()
    {
        $apitoken_node = env('API_TOKEN_NODE');
        $apiurl_node = env('API_URL_NODE');

        $collection = Http::withHeaders([
            'Accept'=> 'application/json',
            'Authorization'=> 'Bearer '.$apitoken_node.'',
        ])->get($apiurl_node);
        // dd ($collection['hosinfo']);
            $hosinfo = $collection['hosinfo'];
            $tgh = $hosinfo['tgh'];
            $tphcp = $hosinfo['tphcp'];

        return view('livewire.dashboard.dashboard',[

            'tphcp' => $tphcp,
            'tgh' => $tgh,

        ])->layout('livewire.layouts.base');
    }
}
