<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class DashboardOpd extends Component
{
    // public $pt_opd_vn_lastm,$pt_opd_vnm,$pt_opd_hnm,$pt_opd_today;

    public function mount()
    {

    }

    public function render()
    {
        $count_visit_lastmonth = DB::connection('mysql_hos')->select('
        SELECT COUNT(*) AS ptm_opd_vn_last
        FROM ovst WHERE vstdate BETWEEN "2023-01-01" AND "2023-01-31"
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

        return view('livewire.dashboard.dashboard-opd', [

            'pt_opd_vn_lastm' => $pt_opd_vn_lastm,
            'pt_opd_vnm' => $pt_opd_vnm,
            'pt_opd_hnm' => $pt_opd_hnm,
            'pt_opd_today' => $pt_opd_today,

        ])->layout('livewire.layouts.base');
    }
}
