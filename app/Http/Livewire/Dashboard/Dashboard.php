<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class Dashboard extends Component
{
    public $onehos;

    public function mount()
    {
        //
    }

    public function render()
    {
        // IPD data -->
        $apitoken_node = env('API_TOKEN_NODE');
        $apiurl_node = env('API_URL_NODE');

        $collection = Http::withHeaders([
            'Accept'=> 'application/json',
            'Authorization'=> 'Bearer '.$apitoken_node.'',
        ])->get($apiurl_node."oneipd");
            $hosinfo = $collection['hosinfo'];

        foreach ($hosinfo['h11456']['data'] as $data) {
            $h11456_ptm_ipd_hn = $data['ptm_ipd_hn'];
            $h11456_ptm_ipd_an = $data['ptm_ipd_an'];
            $h11456_pt_ipd_today = $data['pt_ipd_today'];
            $h11456_ptm_ipd_vn_last = $data['ptm_ipd_vn_last'];
            $h11456_ipt_admit = $data['ipt_admit'];
            $h11456_empty_bed = $data['empty_bed'];
            $h11456_bed_count = $data['bed_count'];
        }

        foreach ($hosinfo['h11263']['data'] as $data) {
            $h11263_ptm_ipd_hn = $data['ptm_ipd_hn'];
            $h11263_ptm_ipd_an = $data['ptm_ipd_an'];
            $h11263_pt_ipd_today = $data['pt_ipd_today'];
            $h11263_ptm_ipd_vn_last = $data['ptm_ipd_vn_last'];
            $h11263_ipt_admit = $data['ipt_admit'];
            $h11263_empty_bed = $data['empty_bed'];
            $h11263_bed_count = $data['bed_count'];
        }

        foreach ($hosinfo['h10726']['data'] as $data) {
            $h10726_ptm_ipd_hn = $data['ptm_ipd_hn'];
            $h10726_ptm_ipd_an = $data['ptm_ipd_an'];
            $h10726_pt_ipd_today = $data['pt_ipd_today'];
            $h10726_ptm_ipd_vn_last = $data['ptm_ipd_vn_last'];
            $h10726_ipt_admit = $data['ipt_admit'];
            $h10726_empty_bed = $data['empty_bed'];
            $h10726_bed_count = $data['bed_count'];
        }

        foreach ($hosinfo['h11258']['data'] as $data) {
            $h11258_ptm_ipd_hn = $data['ptm_ipd_hn'];
            $h11258_ptm_ipd_an = $data['ptm_ipd_an'];
            $h11258_pt_ipd_today = $data['pt_ipd_today'];
            $h11258_ptm_ipd_vn_last = $data['ptm_ipd_vn_last'];
            $h11258_ipt_admit = $data['ipt_admit'];
            $h11258_empty_bed = $data['empty_bed'];
            $h11258_bed_count = $data['bed_count'];
        }

        foreach ($hosinfo['h27978']['data'] as $data) {
            $h27978_ptm_ipd_hn = $data['ptm_ipd_hn'];
            $h27978_ptm_ipd_an = $data['ptm_ipd_an'];
            $h27978_pt_ipd_today = $data['pt_ipd_today'];
            $h27978_ptm_ipd_vn_last = $data['ptm_ipd_vn_last'];
            $h27978_ipt_admit = $data['ipt_admit'];
            $h27978_empty_bed = 0;
            $h27978_bed_count = 0;
        }

        foreach ($hosinfo['h27979']['data'] as $data) {
            $h27979_ptm_ipd_hn = $data['ptm_ipd_hn'];
            $h27979_ptm_ipd_an = $data['ptm_ipd_an'];
            $h27979_pt_ipd_today = $data['pt_ipd_today'];
            $h27979_ptm_ipd_vn_last = $data['ptm_ipd_vn_last'];
            $h27979_ipt_admit = $data['ipt_admit'];
            $h27979_empty_bed = $data['empty_bed'];
            $h27979_bed_count = $data['bed_count'];
        }

        foreach ($hosinfo['h11260']['data'] as $data) {
            $h11260_ptm_ipd_hn = $data['ptm_ipd_hn'];
            $h11260_ptm_ipd_an = $data['ptm_ipd_an'];
            $h11260_pt_ipd_today = $data['pt_ipd_today'];
            $h11260_ptm_ipd_vn_last = $data['ptm_ipd_vn_last'];
            $h11260_ipt_admit = $data['ipt_admit'];
            $h11260_empty_bed = $data['empty_bed'];
            $h11260_bed_count = $data['bed_count'];
        }

        foreach ($hosinfo['h11631']['data'] as $data) {
            $h11631_ptm_ipd_hn = $data['ptm_ipd_hn'];
            $h11631_ptm_ipd_an = $data['ptm_ipd_an'];
            $h11631_pt_ipd_today = $data['pt_ipd_today'];
            $h11631_ptm_ipd_vn_last = $data['ptm_ipd_vn_last'];
            $h11631_ipt_admit = $data['ipt_admit'];
            $h11631_empty_bed = $data['empty_bed'];
            $h11631_bed_count = $data['bed_count'];
        }

        // foreach ($hosinfo['h11261']['data'] as $data) {
            $h11261_ptm_ipd_hn = 0;
            $h11261_ptm_ipd_an = 0;
            $h11261_pt_ipd_today = 0;
            $h11261_ptm_ipd_vn_last = 0;
            $h11261_ipt_admit = 0;
            $h11261_empty_bed = 0;
            $h11261_bed_count = 0;
        // }

        // foreach ($hosinfo['h11262']['data'] as $data) {
            $h11262_ptm_ipd_hn = 0;
            $h11262_ptm_ipd_an = 0;
            $h11262_pt_ipd_today = 0;
            $h11262_ptm_ipd_vn_last = 0;
            $h11262_ipt_admit = 0;
            $h11262_empty_bed = 0;
            $h11262_bed_count = 0;
        // }

        // foreach ($hosinfo['h11259']['data'] as $data) {
            $h11259_ptm_ipd_hn = 0;
            $h11259_ptm_ipd_an = 0;
            $h11259_pt_ipd_today = 0;
            $h11259_ptm_ipd_vn_last = 0;
            $h11259_ipt_admit = 0;
            $h11259_empty_bed = 0;
            $h11259_bed_count = 0;
        // }

        foreach ($hosinfo['h27980']['data'] as $data) {
            $h27980_ptm_ipd_hn = $data['ptm_ipd_hn'];
            $h27980_ptm_ipd_an = $data['ptm_ipd_an'];
            $h27980_pt_ipd_today = $data['pt_ipd_today'];
            $h27980_ptm_ipd_vn_last = $data['ptm_ipd_vn_last'];
            $h27980_ipt_admit = $data['ipt_admit'];
            $h27980_empty_bed = $data['empty_bed'];
            $h27980_bed_count = $data['bed_count'];
        }
        // <-- IPD data

        // ER data -->
        // $apitoken_11456 = env('API_TOKEN_11456');
        // $apiurl_11456 = env('API_URL_11456');

        // $er_collection1 = Http::withHeaders([
        //     'Accept'=> 'application/json',
        //     'Authorization'=> 'Bearer '.$apitoken_11456.'',
        // ])->get($apiurl_11456.'v1/count_visit_er');
    	// foreach($er_collection1['data'] as $data) {
        //     $pt_er_hn = $data['pt_er_hn'];
        //     $pt_er_vn = $data['pt_er_vn'];
        //     $pt_er_today = $data['pt_er_today'];
        //     $ptm_er_vn_lastm = $data['ptm_er_vn_last'];
        //     $er_percent = $data['ptm_er_vn_last'] == 0 ? 0 : ($data['pt_er_vn'] * 100 / $data['ptm_er_vn_last']);
        // }

        $pt_er_hn = 1;
        $pt_er_vn = 1;
        $pt_er_today = 1;
        $ptm_er_vn_lastm = 1;
        $er_percent = 1;

        // <-- ER data

        // OPD data -->
        // $opd_collection1 = Http::withHeaders([
        //     'Accept'=> 'application/json',
        //     'Authorization'=> 'Bearer '.$apitoken_11456.'',
        // ])->get($apiurl_11456.'v1/count_visit_opd');
        // foreach ($opd_collection1['data'] as $data) {
        //     $pt_opd_vn_lastm = $data['ptm_opd_vn_last'];
        //     $pt_opd_vnm = $data['ptm_opd_vn'];
        //     $pt_opd_hnm = $data['ptm_opd_hn'];
        //     $pt_opd_today = $data['pt_opd_today'];
        //     $opd_percent = $data['ptm_opd_vn_last'] == 0 ? 0 : ($data['ptm_opd_vn'] * 100 / $data['ptm_opd_vn_last']);
        // }
        $pt_opd_vn_lastm = 1;
        $pt_opd_vnm = 1;
        $pt_opd_hnm = 1;
        $pt_opd_today = 1;

        // <-- OPD data


        return view('livewire.dashboard.dashboard',[

            'ptm_ipd_hn' => $h11263_ptm_ipd_hn + $h11456_ptm_ipd_hn + $h10726_ptm_ipd_hn + $h11258_ptm_ipd_hn + $h27978_ptm_ipd_hn + $h27979_ptm_ipd_hn + $h11260_ptm_ipd_hn + $h11631_ptm_ipd_hn + $h11261_ptm_ipd_hn + $h11262_ptm_ipd_hn + $h11259_ptm_ipd_hn + $h27980_ptm_ipd_hn,
            'ptm_ipd_an' => $h11263_ptm_ipd_an + $h11456_ptm_ipd_an + $h10726_ptm_ipd_an + $h11258_ptm_ipd_an + $h27978_ptm_ipd_an + $h27979_ptm_ipd_an + $h11260_ptm_ipd_an + $h11631_ptm_ipd_an + $h11261_ptm_ipd_an + $h11262_ptm_ipd_an + $h11259_ptm_ipd_an + $h27980_ptm_ipd_an,
            'pt_ipd_today' => $h11263_pt_ipd_today + $h11456_pt_ipd_today + $h10726_pt_ipd_today + $h11258_pt_ipd_today + $h27978_pt_ipd_today + $h27979_pt_ipd_today + $h11260_pt_ipd_today + $h11631_pt_ipd_today + $h11261_pt_ipd_today + $h11262_pt_ipd_today + $h11259_pt_ipd_today + $h27980_pt_ipd_today,
            'ptm_ipd_vn_last' => $h11263_ptm_ipd_vn_last + $h11456_ptm_ipd_vn_last + $h10726_ptm_ipd_vn_last + $h11258_ptm_ipd_vn_last + $h27978_ptm_ipd_vn_last + $h27979_ptm_ipd_vn_last + $h11260_ptm_ipd_vn_last + $h11631_ptm_ipd_vn_last + $h11261_ptm_ipd_vn_last + $h11262_ptm_ipd_vn_last + $h11259_ptm_ipd_vn_last + $h27980_ptm_ipd_vn_last,
            'ipt_admit' => $h11263_ipt_admit + $h11456_ipt_admit + $h10726_ipt_admit + $h11258_ipt_admit + $h27978_ipt_admit + $h27979_ipt_admit + $h11260_ipt_admit + $h11631_ipt_admit + $h11261_ipt_admit + $h11262_ipt_admit + $h11259_ipt_admit + $h27980_ipt_admit,
            'empty_bed' => $h11263_empty_bed + $h11456_empty_bed + $h10726_empty_bed + $h11258_empty_bed + $h27978_empty_bed + $h27979_empty_bed + $h11260_empty_bed + $h11631_empty_bed + $h11261_empty_bed + $h11262_empty_bed + $h11259_empty_bed + $h27980_empty_bed,
            'bed_count' => $h11263_bed_count + $h11456_bed_count + $h10726_bed_count + $h11258_bed_count + $h27978_bed_count + $h27979_bed_count + $h11260_bed_count + $h11631_bed_count + $h11261_bed_count + $h11262_bed_count + $h11259_bed_count + $h27980_bed_count,

            'pt_opd_vn_lastm' => $pt_opd_vn_lastm,
            'pt_opd_vnm' => $pt_opd_vnm,
            'pt_opd_hnm' => $pt_opd_hnm,
            'pt_opd_today' => $pt_opd_today,
            'opd_percent' => $pt_opd_vn_lastm == 0 ? 0 : ($pt_opd_vnm * 100 / $pt_opd_vn_lastm),

            'pt_er_hn' => $pt_er_hn,
            'pt_er_vn' => $pt_er_vn,
            'pt_er_today' => $pt_er_today,
            'ptm_er_vn_lastm' => $ptm_er_vn_lastm,
            'er_percent' => $er_percent,

        ])->layout('livewire.layouts.base');
    }
}
