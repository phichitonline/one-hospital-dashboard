<?php

namespace App\Http\Livewire\Stat;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class StatOpd extends Component
{
    public $year,$myearb,$myeare,$nowdate,$enddate,$enddate2;

    protected $queryString = ['year'];

    public function mount()
    {

        if ($this->year == null) {
            if (date("m") > 9) {
                $this->myearb = date("Y");
                $this->myeare = date("Y")+1;
            } else {
                $this->myearb = date("Y")-1;
                $this->myeare = date("Y");
            }
        } else {
            $this->myearb = $this->year-544;
            $this->myeare = $this->year-543;
        }

        $nowdate = date("Y-m-d");
        $TH_Month = array("ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
        $nMonth = date("n")-1;

        if ($nowdate > $this->myeare."-09-30") {
            $this->enddate = $this->myeare."-09-30";
            $this->enddate2 = "30 ก.ย.";
        } else {
            $this->enddate = date("Y-m-d");
            $this->enddate2 = date('j ').$TH_Month[$nMonth];
        }

        $this->count_er_pttype = DB::connection('mysql_hos')->select('
        SELECT et.name,COUNT(*) AS y,et.name AS drilldown
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$this->myearb.'-10-01" AND "'.$this->myeare.'-09-30"
        GROUP BY er.er_pt_type
        ORDER BY et.accident_code DESC,er.er_pt_type ASC
        ');

        $this->count_er_pttdril1 = array();
        $count_er_pttdril1 = DB::connection('mysql_hos')->select('
        SELECT mn.tnamefull AS name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$this->myearb.'-10-01" AND "'.$this->myeare.'-09-30" AND er.er_pt_type = 1
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m")
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC
        ');
        foreach($count_er_pttdril1 as $data) {
        array_push($this->count_er_pttdril1,[$data->name,$data->ercount]);
        }

        $this->count_er_pttdril2 = array();
        $count_er_pttdril2 = DB::connection('mysql_hos')->select('
        SELECT mn.tnamefull AS name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$this->myearb.'-10-01" AND "'.$this->myeare.'-09-30" AND er.er_pt_type = 2
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m")
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC
        ');
        foreach($count_er_pttdril2 as $data) {
        array_push($this->count_er_pttdril2,[$data->name,$data->ercount]);
        }

        $this->count_er_pttdril3 = array();
        $count_er_pttdril3 = DB::connection('mysql_hos')->select('
        SELECT mn.tnamefull AS name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$this->myearb.'-10-01" AND "'.$this->myeare.'-09-30" AND er.er_pt_type = 3
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m")
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC
        ');
        foreach($count_er_pttdril3 as $data) {
        array_push($this->count_er_pttdril3,[$data->name,$data->ercount]);
        }

        $this->count_er_pttdril4 = array();
        $count_er_pttdril4 = DB::connection('mysql_hos')->select('
        SELECT mn.tnamefull AS name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$this->myearb.'-10-01" AND "'.$this->myeare.'-09-30" AND er.er_pt_type = 4
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m")
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC
        ');
        foreach($count_er_pttdril4 as $data) {
        array_push($this->count_er_pttdril4,[$data->name,$data->ercount]);
        }

        $this->count_er_pttdril5 = array();
        $count_er_pttdril5 = DB::connection('mysql_hos')->select('
        SELECT mn.tnamefull AS name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$this->myearb.'-10-01" AND "'.$this->myeare.'-09-30" AND er.er_pt_type = 5
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m")
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC
        ');
        foreach($count_er_pttdril5 as $data) {
        array_push($this->count_er_pttdril5,[$data->name,$data->ercount]);
        }


    }

    public function render()
    {
        return view('livewire.stat.stat-opd', [

            'count_er_pttype' => $this->count_er_pttype,
            'count_er_pttdril1' => $this->count_er_pttdril1,
            'count_er_pttdril2' => $this->count_er_pttdril2,
            'count_er_pttdril3' => $this->count_er_pttdril3,
            'count_er_pttdril4' => $this->count_er_pttdril4,
            'count_er_pttdril5' => $this->count_er_pttdril5,

        ])->layout('livewire.layouts.base');
    }
}
