<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class Dashboard extends Component
{
    public
        $pt_er_hn,$pt_er_vn,$pt_er_today,$ptm_er_vn_lastm // ER data
        ,$pt_opd_vn_lastm,$pt_opd_vnm,$pt_opd_hnm,$pt_opd_today,$opd_percent // OPD data
        ,$h11263,$h11456,$h10726,$h11258,$h27978,$h27979,$h11260,$h11631,$h11261,$h11262,$h11259,$h27980 // IPD data
        ;

    public function mount()
    {
        // IPD data
        $apitoken_node = env('API_TOKEN_NODE');
        $apiurl_node = env('API_URL_NODE');

        $collection = Http::withHeaders([
            'Accept'=> 'application/json',
            'Authorization'=> 'Bearer '.$apitoken_node.'',
        ])->get($apiurl_node."oneipd");
        // dd ($collection['hosinfo']);
            $hosinfo = $collection['hosinfo'];
            $this->h11263 = $hosinfo['h11263'];
            $this->h11456 = $hosinfo['h11456'];
            $this->h10726 = $hosinfo['h10726'];
            $this->h11258 = $hosinfo['h11258'];
            $this->h27978 = $hosinfo['h27978'];
            $this->h27979 = $hosinfo['h27979'];
            $this->h11260 = $hosinfo['h11260'];
            $this->h11631 = $hosinfo['h11631'];
            $this->h11261 = $hosinfo['h11261'];
            $this->h11262 = $hosinfo['h11262'];
            $this->h11259 = $hosinfo['h11259'];
            $this->h27980 = $hosinfo['h27980'];

        // ER data
        // $apitoken_11456 = env('API_TOKEN_11456');
        // $apiurl_11456 = env('API_URL_11456');

        // $er_collection1 = Http::withHeaders([
        //     'Accept'=> 'application/json',
        //     'Authorization'=> 'Bearer '.$apitoken_11456.'',
        // ])->get($apiurl_11456.'v1/count_visit_er');
    	// foreach($er_collection1['data'] as $data) {
        //     $this->pt_er_hn = $data['pt_er_hn'];
        //     $this->pt_er_vn = $data['pt_er_vn'];
        //     $this->pt_er_today = $data['pt_er_today'];
        //     $this->ptm_er_vn_lastm = $data['ptm_er_vn_last'];
        // }

        $this->pt_er_hn = 1;
        $this->pt_er_vn = 1;
        $this->pt_er_today = 1;
        $this->ptm_er_vn_lastm = 1;

        // OPD data
        // $opd_collection1 = Http::withHeaders([
        //     'Accept'=> 'application/json',
        //     'Authorization'=> 'Bearer '.$apitoken_11456.'',
        // ])->get($apiurl_11456.'v1/count_visit_opd');
        // foreach ($opd_collection1['data'] as $data) {
        //     $this->pt_opd_vn_lastm = $data['ptm_opd_vn_last'];
        //     $this->pt_opd_vnm = $data['ptm_opd_vn'];
        //     $this->pt_opd_hnm = $data['ptm_opd_hn'];
        //     $this->pt_opd_today = $data['pt_opd_today'];
        //     $this->opd_percent = $data['ptm_opd_vn_last'] == 0 ? 0 : ($data['ptm_opd_vn'] * 100 / $data['ptm_opd_vn_last']);
        // }
        $this->pt_opd_vn_lastm = 1;
        $this->pt_opd_vnm = 1;
        $this->pt_opd_hnm = 1;
        $this->pt_opd_today = 1;
        $this->opd_percent = 1;

    }

    public function render()
    {
        // $apitoken_node = env('API_TOKEN_NODE');
        // $apiurl_node = env('API_URL_NODE');

        // $collection = Http::withHeaders([
        //     'Accept'=> 'application/json',
        //     'Authorization'=> 'Bearer '.$apitoken_node.'',
        // ])->get($apiurl_node."oneipd");
        // dd ($collection['hosinfo']);
            // $hosinfo = $collection['hosinfo'];
            // $h11263 = $hosinfo['h11263'];
            // $h11456 = $hosinfo['h11456'];

        // $apitoken_11456 = env('API_TOKEN_11456');
        // $apiurl_11456 = env('API_URL_11456');
        // $opd_collection1 = Http::withHeaders([
        //     'Accept'=> 'application/json',
        //     'Authorization'=> 'Bearer '.$apitoken_11456.'',
        // ])->get($apiurl_11456.'v1/count_visit_opd');
        // foreach ($opd_collection1['data'] as $data) {
        //     $pt_opd_vn_lastm1 = $data['ptm_opd_vn_last'];
        //     $pt_opd_vnm1 = $data['ptm_opd_vn'];
        //     $pt_opd_hnm1 = $data['ptm_opd_hn'];
        //     $pt_opd_today1 = $data['pt_opd_today'];
        // }


        return view('livewire.dashboard.dashboard',[

            // 'h11263' => $h11263,
            // 'h11456' => $h11456,

            // 'pt_opd_vn_lastm' => $pt_opd_vn_lastm1,
            // 'pt_opd_vnm' => $pt_opd_vnm1,
            // 'pt_opd_hnm' => $pt_opd_hnm1,
            // 'pt_opd_today' => $pt_opd_today1,
            // 'opd_percent' => $pt_opd_vn_lastm1 == 0 ? 0 : ($pt_opd_vnm1 * 100 / $pt_opd_vn_lastm1),


        ])->layout('livewire.layouts.base');
    }
}
