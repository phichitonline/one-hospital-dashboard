<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard',[
            'data' => "Data",
            'message' => "message",
            'version' => "version",
            'last_update' => "last_update",
        ]);

    }

    // public function index()
    // {

    //     return view('livewire.dashboard.dashboard',[
    //         'data' => "Data",
    //         'message' => "message",
    //         'version' => "version",
    //         'last_update' => "last_update",
    //     ]);

    // }

    public function patient()
    {

        $apitoken = env('API_TOKEN_11456');

        $collection = Http::withHeaders([
            'Authorization'=> 'Bearer '.$apitoken.'',
        ])->get('https://apione.tphcp.go.th/api/v1/patient');

        return view('patient',[
            'data' => $collection['data'],
            'message' => $collection['message'],
            'version' => $collection['version'],
            'last_update' => $collection['last_update'],
        ]);

    }

    public function doctor()
    {

        $apitoken = env('API_TOKEN_11456');

        $collection = Http::withHeaders([
            'Authorization'=> 'Bearer '.$apitoken.'',
        ])->get('http://localhost:8002/api/v1/doctor');

        return view('doctor',[
            'data' => $collection['data'],
            'message' => $collection['message'],
            'version' => $collection['version'],
            'last_update' => $collection['last_update'],
        ]);

    }


}
