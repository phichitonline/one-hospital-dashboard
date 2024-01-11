<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DoctorController extends Controller
{

    public function doctor()
    {

        $apitoken = env('API_TOKEN_11456');

        $collection = Http::withHeaders([
            'Authorization'=> 'Bearer '.$apitoken.'',
        ])->get('https://apione.tphcp.go.th/api/v1/exchange/doctor');

        return view('doctor',[
            'data' => $collection['data'],
            'message' => $collection['message'],
            'version' => $collection['version'],
            'last_update' => $collection['last_update'],
        ]);

    }

}
