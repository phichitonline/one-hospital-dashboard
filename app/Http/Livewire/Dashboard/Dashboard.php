<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Dashboard extends Component
{
    // public $pt_opd_vn_lastm,$pt_opd_vnm,$pt_opd_hnm,$pt_opd_today;

    public function mount()
    {

    }

    public function render()
    {
        $count_visit_lastmonth = DB::connection('mysql_hos')->select('
        SELECT COUNT(*) AS ptm_opd_vn_last
        FROM ovst WHERE DATE_FORMAT(vstdate,"%Y-%m") = DATE_FORMAT(CURDATE(),"%Y-%m")
        ');
        foreach ($count_visit_lastmonth as $data) {
            $pt_opd_vn_lastm = $data->ptm_opd_vn_last;
        }

        $count_visit = DB::connection('mysql_hos')->select('
        SELECT COUNT(*) AS ptm_opd_vn,COUNT(DISTINCT(hn)) AS ptm_opd_hn,COUNT(IF(vstdate=CURDATE(),vstdate,NULL)) AS pt_opd_today
        FROM ovst WHERE DATE_FORMAT(vstdate,"%Y-%m") = DATE_FORMAT(CURDATE(),"%Y-%m")
        ');
        foreach ($count_visit as $data) {
            $pt_opd_vnm = $data->ptm_opd_vn;
            $pt_opd_hnm = $data->ptm_opd_hn;
            $pt_opd_today = $data->pt_opd_today;
        }

        $count_ipd_lastmonth = DB::connection('mysql_hos')->select('
        SELECT COUNT(DISTINCT hn) AS ptm_ipd_an_lastm
        FROM ipt WHERE DATE_FORMAT(regdate,"%Y-%m") = DATE_FORMAT(CURDATE(),"%Y-%m")
        ');
    	foreach($count_ipd_lastmonth as $data) {
            $ptm_ipd_an_lastm = $data->ptm_ipd_an_lastm;
        }

        $count_ipd = DB::connection('mysql_hos')->select('
        SELECT COUNT(DISTINCT hn) AS ptm_ipd_hn,COUNT(DISTINCT an) AS ptm_ipd_an
        ,COUNT(DISTINCT IF(regdate = DATE_FORMAT(NOW(),"%Y-%m-%d"),an,NULL)) AS pt_ipd_today
        FROM ipt
        WHERE regdate BETWEEN DATE_FORMAT(NOW(),"%Y-%m-01") AND DATE_FORMAT(NOW(),"%Y-%m-%d")
        ');
    	foreach($count_ipd as $data) {
            $ptm_ipd_hn = $data->ptm_ipd_hn;
            $ptm_ipd_an = $data->ptm_ipd_an;
            $pt_ipd_today = $data->pt_ipd_today;
        }

        $count_er_lastmonth = DB::connection('mysql_hos')->select('
        SELECT COUNT(DISTINCT o.hn) AS ptm_er_vn_lastm
        FROM er_regist er
        LEFT OUTER JOIN ovst o ON o.vn = er.vn
        LEFT OUTER JOIN er_pt_type et ON et.er_pt_type = er.er_pt_type
        WHERE DATE_FORMAT(er.vstdate,"%Y-%m") = DATE_FORMAT(CURDATE(),"%Y-%m")
        AND er.er_pt_type IN (SELECT er_pt_type FROM er_pt_type WHERE accident_code = "Y")
        ');
    	foreach($count_er_lastmonth as $data) {
            $ptm_er_vn_lastm = $data->ptm_er_vn_lastm;
        }

        $count_er = DB::connection('mysql_hos')->select('
        SELECT COUNT(DISTINCT o.hn) AS pt_er_hn,COUNT(DISTINCT o.vn) AS pt_er_vn
        ,COUNT(DISTINCT IF(er.vstdate = DATE_FORMAT(NOW(),"%Y-%m-%d"),o.vn,NULL)) AS pt_er_today
        FROM er_regist er
        LEFT OUTER JOIN ovst o ON o.vn = er.vn
        LEFT OUTER JOIN er_pt_type et ON et.er_pt_type = er.er_pt_type
        WHERE er.vstdate BETWEEN DATE_FORMAT(NOW(),"%Y-%m-01") AND DATE_FORMAT(NOW(),"%Y-%m-%d")
        AND er.er_pt_type IN (SELECT er_pt_type FROM er_pt_type WHERE accident_code = "Y")
        ');
    	foreach($count_er as $data) {
            $pt_er_hn = $data->pt_er_hn;
            $pt_er_vn = $data->pt_er_vn;
            $pt_er_today = $data->pt_er_today;
        }

        return view('livewire.dashboard.dashboard',[

            'pt_opd_vn_lastm' => $pt_opd_vn_lastm,
            'pt_opd_vnm' => $pt_opd_vnm,
            'pt_opd_hnm' => $pt_opd_hnm,
            'pt_opd_today' => $pt_opd_today,
            'ptm_ipd_hn' => $ptm_ipd_hn,
            'ptm_ipd_an' => $ptm_ipd_an,
            'pt_ipd_today' => $pt_ipd_today,
            'pt_er_hn' => $pt_er_hn,
            'pt_er_vn' => $pt_er_vn,
            'pt_er_today' => $pt_er_today,

            'ptm_ipd_an_lastm' => $ptm_ipd_an_lastm,
            'ptm_er_vn_lastm' => $ptm_er_vn_lastm,

        ])->layout('livewire.layouts.base');
    }
}
