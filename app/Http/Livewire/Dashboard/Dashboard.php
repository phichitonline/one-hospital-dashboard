<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class Dashboard extends Component
{
    public $year,$byear,$myearb,$myeare,$enddate,$enddate2
    ,$count_er_month,$count_er_dril10,$count_er_dril11,$count_er_dril12,$count_er_dril1
    ,$count_er_dril2,$count_er_dril3,$count_er_dril4,$count_er_dril5
    ,$count_er_dril6,$count_er_dril7,$count_er_dril8,$count_er_dril9;

    public function mount()
    {

    }

    public function render()
    {
        $apitoken_11456 = env('API_TOKEN_11456');
        $apiurl_11456 = env('API_URL_11456');
        $apitoken_10726 = env('API_TOKEN_10726');
        $apiurl_10726 = env('API_URL_10726');

        $opd_collection1 = Http::withHeaders([
            'Accept'=> 'application/json',
            'Authorization'=> 'Bearer '.$apitoken_11456.'',
        ])->get($apiurl_11456.'v1/count_visit_opd');

        foreach ($opd_collection1['data'] as $data) {
            $pt_opd_vn_lastm1 = $data['ptm_opd_vn_last'];
            $pt_opd_vnm1 = $data['ptm_opd_vn'];
            $pt_opd_hnm1 = $data['ptm_opd_hn'];
            $pt_opd_today1 = $data['pt_opd_today'];
        }

        $ipd_collection1 = Http::withHeaders([
            'Accept'=> 'application/json',
            'Authorization'=> 'Bearer '.$apitoken_11456.'',
        ])->get($apiurl_11456.'v1/count_visit_ipd');
    	foreach($ipd_collection1['data'] as $data) {
            $ptm_ipd_hn = $data['ptm_ipd_hn'];
            $ptm_ipd_an = $data['ptm_ipd_an'];
            $pt_ipd_today = $data['pt_ipd_today'];
            $ptm_ipd_an_lastm = $data['ptm_ipd_vn_last'];
            $ipt_admit = $data['ipt_admit'];
            $empty_bed0 = $data['empty_bed'];
            $bed_count = $data['bed_count'];
        }

        $er_collection1 = Http::withHeaders([
            'Accept'=> 'application/json',
            'Authorization'=> 'Bearer '.$apitoken_11456.'',
        ])->get($apiurl_11456.'v1/count_visit_er');
    	foreach($er_collection1['data'] as $data) {
            $pt_er_hn = $data['pt_er_hn'];
            $pt_er_vn = $data['pt_er_vn'];
            $pt_er_today = $data['pt_er_today'];
            $ptm_er_vn_lastm = $data['ptm_er_vn_last'];
        }

        $or_collection1 = Http::withHeaders([
            'Accept'=> 'application/json',
            'Authorization'=> 'Bearer '.$apitoken_11456.'',
        ])->get($apiurl_11456.'v1/count_or');
    	foreach($or_collection1['data'] as $data) {
            $ptm_or_hn = $data['ptm_or_hn'];
            $ptm_or_vn = $data['ptm_or_vn'];
            $ptm_or_opd = $data['ptm_or_opd'];
            $ptm_or_ipd = $data['ptm_or_ipd'];
            $pt_or_today = $data['pt_or_today'];
        }

        // OPD

        if ($this->year == null) {
            if (date("m") > 9) {
                $this->myearb = date("Y");
                $this->myeare = date("Y")+1;
                $this->byear = date("Y")+544;
            } else {
                $this->myearb = date("Y")-1;
                $this->myeare = date("Y");
                $this->byear = date("Y")+543;
            }
        } else {
            $this->myearb = $this->year-544;
            $this->myeare = $this->year-543;
            $this->byear = $this->year;
        }

        $this->count_er_month = DB::connection('mysql_hos')->select('
        SELECT mn.tnamefull AS name,COUNT(*) AS y,mn.tnamefull AS drilldown
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$this->myearb.'-10-01" AND "'.$this->myeare.'-09-30"
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m")
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC
        ');

        $this->count_er_dril10 = array();
        $count_er_dril10 = DB::connection('mysql_hos')->select('
        SELECT et.name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$this->myearb.'-10-01" AND "'.$this->myearb.'-10-31"
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m"),er.er_pt_type
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC,et.accident_code DESC,er.er_pt_type ASC
        ');
        foreach($count_er_dril10 as $data) {
        array_push($this->count_er_dril10,[$data->name,$data->ercount]);
        }

        $this->count_er_dril11 = array();
        $count_er_dril11 = DB::connection('mysql_hos')->select('
        SELECT et.name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$this->myearb.'-11-01" AND "'.$this->myearb.'-11-30"
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m"),er.er_pt_type
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC,et.accident_code DESC,er.er_pt_type ASC
        ');
        foreach($count_er_dril11 as $data) {
        array_push($this->count_er_dril11,[$data->name,$data->ercount]);
        }

        $this->count_er_dril12 = array();
        $count_er_dril12 = DB::connection('mysql_hos')->select('
        SELECT et.name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$this->myearb.'-12-01" AND "'.$this->myearb.'-12-31"
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m"),er.er_pt_type
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC,et.accident_code DESC,er.er_pt_type ASC
        ');
        foreach($count_er_dril12 as $data) {
        array_push($this->count_er_dril12,[$data->name,$data->ercount]);
        }

        $this->count_er_dril1 = array();
        $count_er_dril1 = DB::connection('mysql_hos')->select('
        SELECT et.name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$this->myeare.'-01-01" AND "'.$this->myeare.'-01-31"
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m"),er.er_pt_type
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC,et.accident_code DESC,er.er_pt_type ASC
        ');
        foreach($count_er_dril1 as $data) {
        array_push($this->count_er_dril1,[$data->name,$data->ercount]);
        }

        $this->count_er_dril2 = array();
        $count_er_dril2 = DB::connection('mysql_hos')->select('
        SELECT et.name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$this->myeare.'-02-01" AND "'.$this->myeare.'-02-28"
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m"),er.er_pt_type
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC,et.accident_code DESC,er.er_pt_type ASC
        ');
        foreach($count_er_dril2 as $data) {
        array_push($this->count_er_dril2,[$data->name,$data->ercount]);
        }

        $this->count_er_dril3 = array();
        $count_er_dril3 = DB::connection('mysql_hos')->select('
        SELECT et.name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$this->myeare.'-03-01" AND "'.$this->myeare.'-03-31"
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m"),er.er_pt_type
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC,et.accident_code DESC,er.er_pt_type ASC
        ');
        foreach($count_er_dril3 as $data) {
        array_push($this->count_er_dril3,[$data->name,$data->ercount]);
        }

        $this->count_er_dril4 = array();
        $count_er_dril4 = DB::connection('mysql_hos')->select('
        SELECT et.name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$this->myeare.'-04-01" AND "'.$this->myeare.'-04-30"
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m"),er.er_pt_type
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC,et.accident_code DESC,er.er_pt_type ASC
        ');
        foreach($count_er_dril4 as $data) {
        array_push($this->count_er_dril4,[$data->name,$data->ercount]);
        }

        $this->count_er_dril5 = array();
        $count_er_dril5 = DB::connection('mysql_hos')->select('
        SELECT et.name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$this->myeare.'-05-01" AND "'.$this->myeare.'-05-31"
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m"),er.er_pt_type
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC,et.accident_code DESC,er.er_pt_type ASC
        ');
        foreach($count_er_dril5 as $data) {
        array_push($this->count_er_dril5,[$data->name,$data->ercount]);
        }

        $this->count_er_dril6 = array();
        $count_er_dril6 = DB::connection('mysql_hos')->select('
        SELECT et.name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$this->myeare.'-06-01" AND "'.$this->myeare.'-06-30"
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m"),er.er_pt_type
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC,et.accident_code DESC,er.er_pt_type ASC
        ');
        foreach($count_er_dril6 as $data) {
        array_push($this->count_er_dril6,[$data->name,$data->ercount]);
        }

        $this->count_er_dril7 = array();
        $count_er_dril7 = DB::connection('mysql_hos')->select('
        SELECT et.name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$this->myeare.'-07-01" AND "'.$this->myeare.'-07-31"
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m"),er.er_pt_type
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC,et.accident_code DESC,er.er_pt_type ASC
        ');
        foreach($count_er_dril7 as $data) {
        array_push($this->count_er_dril7,[$data->name,$data->ercount]);
        }

        $this->count_er_dril8 = array();
        $count_er_dril8 = DB::connection('mysql_hos')->select('
        SELECT et.name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$this->myeare.'-08-01" AND "'.$this->myeare.'-08-31"
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m"),er.er_pt_type
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC,et.accident_code DESC,er.er_pt_type ASC
        ');
        foreach($count_er_dril8 as $data) {
        array_push($this->count_er_dril8,[$data->name,$data->ercount]);
        }

        $this->count_er_dril9 = array();
        $count_er_dril9 = DB::connection('mysql_hos')->select('
        SELECT et.name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$this->myeare.'-09-01" AND "'.$this->myeare.'-09-30"
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m"),er.er_pt_type
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC,et.accident_code DESC,er.er_pt_type ASC
        ');
        foreach($count_er_dril9 as $data) {
        array_push($this->count_er_dril9,[$data->name,$data->ercount]);
        }

        $pt_opd_vn_lastm = $pt_opd_vn_lastm1;
        $pt_opd_vnm = $pt_opd_vnm1;
        $pt_opd_hnm = $pt_opd_hnm1;

        if ($empty_bed0 < 0) {
            $empty_bed = 0;
        } else {
            $empty_bed = $empty_bed0;
        }


        return view('livewire.dashboard.dashboard',[

            'pt_opd_vn_lastm' => $pt_opd_vn_lastm,
            'pt_opd_vnm' => $pt_opd_vnm,
            'pt_opd_hnm' => $pt_opd_hnm,
            'pt_opd_today' => $pt_opd_today1,
            'ptm_ipd_hn' => $ptm_ipd_hn,
            'ptm_ipd_an' => $ptm_ipd_an,
            'pt_ipd_today' => $pt_ipd_today,
            'ptm_ipd_an_lastm' => $ptm_ipd_an_lastm,
            'ipt_admit' => $ipt_admit,
            'empty_bed' => $empty_bed,
            'bed_count' => $bed_count,
            'pt_er_hn' => $pt_er_hn,
            'pt_er_vn' => $pt_er_vn,
            'pt_er_today' => $pt_er_today,
            'ptm_er_vn_lastm' => $ptm_er_vn_lastm,


            'ptm_or_hn' => $ptm_or_hn,
            'ptm_or_vn' => $ptm_or_vn,
            'ptm_or_opd' => $ptm_or_opd,
            'ptm_or_ipd' => $ptm_or_ipd,
            'pt_or_today' => $pt_or_today,

            'opd_percent' => $pt_opd_vn_lastm == 0 ? 0 : ($pt_opd_vnm * 100 / $pt_opd_vn_lastm),

        ])->layout('livewire.layouts.base');
    }
}
