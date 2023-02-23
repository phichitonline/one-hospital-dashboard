<?php

namespace App\Http\Livewire\Stat;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class StatEr extends Component
{
    public $year;

    // protected $queryString = ['year'];

    public function mount()
    {

        // dd($this->count_er_dril10);

    }

    public function render()
    {

        if ($this->year == null) {
            if (date("m") > 9) {
                $myearb = date("Y");
                $myeare = date("Y")+1;
            } else {
                $myearb = date("Y")-1;
                $myeare = date("Y");
            }
        } else {
            $myearb = $this->year-544;
            $myeare = $this->year-543;
        }

        $nowdate = date("Y-m-d");
        $TH_Month = array("ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
        $nMonth = date("n")-1;

        if ($nowdate > $myeare."-09-30") {
            $enddate = $myeare."-09-30";
            $enddate2 = "30 ก.ย.";
        } else {
            $enddate = date("Y-m-d");
            $enddate2 = date('j ').$TH_Month[$nMonth];
        }

        $count_er = DB::connection('mysql_hos')->select('
        SELECT et.er_pt_type,et.name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        WHERE er.vstdate BETWEEN "'.$myearb.'-10-01" AND "'.$myeare.'-09-30"
        GROUP BY er.er_pt_type
        ORDER BY er.er_pt_type ASC
        ');
        $count_er_type1 = $count_er[0]->ercount;
        $count_er_type2 = $count_er[1]->ercount;
        $count_er_type3 = $count_er[2]->ercount;
        $count_er_type4 = $count_er[3]->ercount;
        $count_er_type5 = $count_er[4]->ercount;

        $count_er_month = DB::connection('mysql_hos')->select('
        SELECT mn.tnamefull AS name,COUNT(*) AS y,mn.tnamefull AS drilldown
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$myearb.'-10-01" AND "'.$myeare.'-09-30"
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m")
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC
        ');

        $count_er_dril10 = array();
        $count_er_dril10 = DB::connection('mysql_hos')->select('
        SELECT et.name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$myearb.'-10-01" AND "'.$myearb.'-10-31"
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m"),er.er_pt_type
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC,et.accident_code DESC,er.er_pt_type ASC
        ');
        foreach($count_er_dril10 as $data) {
        array_push($count_er_dril10,[$data->name,$data->ercount]);
        }

        $count_er_dril11 = array();
        $count_er_dril11 = DB::connection('mysql_hos')->select('
        SELECT et.name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$myearb.'-11-01" AND "'.$myearb.'-11-30"
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m"),er.er_pt_type
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC,et.accident_code DESC,er.er_pt_type ASC
        ');
        foreach($count_er_dril11 as $data) {
        array_push($count_er_dril11,[$data->name,$data->ercount]);
        }

        $count_er_dril12 = array();
        $count_er_dril12 = DB::connection('mysql_hos')->select('
        SELECT et.name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$myearb.'-12-01" AND "'.$myearb.'-12-31"
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m"),er.er_pt_type
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC,et.accident_code DESC,er.er_pt_type ASC
        ');
        foreach($count_er_dril12 as $data) {
        array_push($count_er_dril12,[$data->name,$data->ercount]);
        }

        $count_er_dril1 = array();
        $count_er_dril1 = DB::connection('mysql_hos')->select('
        SELECT et.name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$myeare.'-01-01" AND "'.$myeare.'-01-31"
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m"),er.er_pt_type
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC,et.accident_code DESC,er.er_pt_type ASC
        ');
        foreach($count_er_dril1 as $data) {
        array_push($count_er_dril1,[$data->name,$data->ercount]);
        }

        $count_er_dril2 = array();
        $count_er_dril2 = DB::connection('mysql_hos')->select('
        SELECT et.name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$myeare.'-02-01" AND "'.$myeare.'-02-28"
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m"),er.er_pt_type
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC,et.accident_code DESC,er.er_pt_type ASC
        ');
        foreach($count_er_dril2 as $data) {
        array_push($count_er_dril2,[$data->name,$data->ercount]);
        }

        $count_er_dril3 = array();
        $count_er_dril3 = DB::connection('mysql_hos')->select('
        SELECT et.name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$myeare.'-03-01" AND "'.$myeare.'-03-31"
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m"),er.er_pt_type
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC,et.accident_code DESC,er.er_pt_type ASC
        ');
        foreach($count_er_dril3 as $data) {
        array_push($count_er_dril3,[$data->name,$data->ercount]);
        }

        $count_er_dril4 = array();
        $count_er_dril4 = DB::connection('mysql_hos')->select('
        SELECT et.name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$myeare.'-04-01" AND "'.$myeare.'-04-30"
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m"),er.er_pt_type
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC,et.accident_code DESC,er.er_pt_type ASC
        ');
        foreach($count_er_dril4 as $data) {
        array_push($count_er_dril4,[$data->name,$data->ercount]);
        }

        $count_er_dril5 = array();
        $count_er_dril5 = DB::connection('mysql_hos')->select('
        SELECT et.name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$myeare.'-05-01" AND "'.$myeare.'-05-31"
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m"),er.er_pt_type
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC,et.accident_code DESC,er.er_pt_type ASC
        ');
        foreach($count_er_dril5 as $data) {
        array_push($count_er_dril5,[$data->name,$data->ercount]);
        }

        $count_er_dril6 = array();
        $count_er_dril6 = DB::connection('mysql_hos')->select('
        SELECT et.name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$myeare.'-06-01" AND "'.$myeare.'-06-30"
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m"),er.er_pt_type
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC,et.accident_code DESC,er.er_pt_type ASC
        ');
        foreach($count_er_dril6 as $data) {
        array_push($count_er_dril6,[$data->name,$data->ercount]);
        }

        $count_er_dril7 = array();
        $count_er_dril7 = DB::connection('mysql_hos')->select('
        SELECT et.name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$myeare.'-07-01" AND "'.$myeare.'-07-31"
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m"),er.er_pt_type
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC,et.accident_code DESC,er.er_pt_type ASC
        ');
        foreach($count_er_dril7 as $data) {
        array_push($count_er_dril7,[$data->name,$data->ercount]);
        }

        $count_er_dril8 = array();
        $count_er_dril8 = DB::connection('mysql_hos')->select('
        SELECT et.name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$myeare.'-08-01" AND "'.$myeare.'-08-31"
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m"),er.er_pt_type
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC,et.accident_code DESC,er.er_pt_type ASC
        ');
        foreach($count_er_dril8 as $data) {
        array_push($count_er_dril8,[$data->name,$data->ercount]);
        }

        $count_er_dril9 = array();
        $count_er_dril9 = DB::connection('mysql_hos')->select('
        SELECT et.name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$myeare.'-09-01" AND "'.$myeare.'-09-30"
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m"),er.er_pt_type
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC,et.accident_code DESC,er.er_pt_type ASC
        ');
        foreach($count_er_dril9 as $data) {
        array_push($count_er_dril9,[$data->name,$data->ercount]);
        }


        // แยกประเภท

        $count_er_pttype = DB::connection('mysql_hos')->select('
        SELECT et.name,COUNT(*) AS y,et.name AS drilldown
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$myearb.'-10-01" AND "'.$myeare.'-09-30"
        GROUP BY er.er_pt_type
        ORDER BY et.accident_code DESC,er.er_pt_type ASC
        ');

        $count_er_pttdril1 = array();
        $count_er_pttdril1 = DB::connection('mysql_hos')->select('
        SELECT mn.tnamefull AS name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$myearb.'-10-01" AND "'.$myeare.'-09-30" AND er.er_pt_type = 1
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m")
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC
        ');
        foreach($count_er_pttdril1 as $data) {
        array_push($count_er_pttdril1,[$data->name,$data->ercount]);
        }

        $count_er_pttdril2 = array();
        $count_er_pttdril2 = DB::connection('mysql_hos')->select('
        SELECT mn.tnamefull AS name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$myearb.'-10-01" AND "'.$myeare.'-09-30" AND er.er_pt_type = 2
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m")
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC
        ');
        foreach($count_er_pttdril2 as $data) {
        array_push($count_er_pttdril2,[$data->name,$data->ercount]);
        }

        $count_er_pttdril3 = array();
        $count_er_pttdril3 = DB::connection('mysql_hos')->select('
        SELECT mn.tnamefull AS name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$myearb.'-10-01" AND "'.$myeare.'-09-30" AND er.er_pt_type = 3
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m")
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC
        ');
        foreach($count_er_pttdril3 as $data) {
        array_push($count_er_pttdril3,[$data->name,$data->ercount]);
        }

        $count_er_pttdril4 = array();
        $count_er_pttdril4 = DB::connection('mysql_hos')->select('
        SELECT mn.tnamefull AS name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$myearb.'-10-01" AND "'.$myeare.'-09-30" AND er.er_pt_type = 4
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m")
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC
        ');
        foreach($count_er_pttdril4 as $data) {
        array_push($count_er_pttdril4,[$data->name,$data->ercount]);
        }

        $count_er_pttdril5 = array();
        $count_er_pttdril5 = DB::connection('mysql_hos')->select('
        SELECT mn.tnamefull AS name,COUNT(*) AS ercount
        FROM er_regist er
        LEFT JOIN er_pt_type et ON er.er_pt_type = et.er_pt_type
        LEFT JOIN hosinfo_12month mn ON DATE_FORMAT(er.vstdate,"%m") = mn.mid
        WHERE er.vstdate BETWEEN "'.$myearb.'-10-01" AND "'.$myeare.'-09-30" AND er.er_pt_type = 5
        GROUP BY DATE_FORMAT(er.vstdate,"%Y-%m")
        ORDER BY DATE_FORMAT(er.vstdate,"%Y-%m") ASC
        ');
        foreach($count_er_pttdril5 as $data) {
        array_push($count_er_pttdril5,[$data->name,$data->ercount]);
        }


        return view('livewire.stat.stat-er', [


            'myearb' => $myearb,
            'myeare' => $myeare,
            'enddate' => $enddate,
            'enddate2' => $enddate2,

            'count_er_pttype' => $count_er_pttype,
            'count_er_type1' => $count_er_type1,
            'count_er_type2' => $count_er_type2,
            'count_er_type3' => $count_er_type3,
            'count_er_type4' => $count_er_type4,
            'count_er_type5' => $count_er_type5,

            'count_er_pttdril1' => $count_er_pttdril1,
            'count_er_pttdril2' => $count_er_pttdril2,
            'count_er_pttdril3' => $count_er_pttdril3,
            'count_er_pttdril4' => $count_er_pttdril4,
            'count_er_pttdril5' => $count_er_pttdril5,

            'count_er_month' => $count_er_month,
            'count_er_dril10' => $count_er_dril10,
            'count_er_dril11' => $count_er_dril11,
            'count_er_dril12' => $count_er_dril12,
            'count_er_dril1' => $count_er_dril1,
            'count_er_dril2' => $count_er_dril2,
            'count_er_dril3' => $count_er_dril3,
            'count_er_dril4' => $count_er_dril4,
            'count_er_dril5' => $count_er_dril5,
            'count_er_dril6' => $count_er_dril6,
            'count_er_dril7' => $count_er_dril7,
            'count_er_dril8' => $count_er_dril8,
            'count_er_dril9' => $count_er_dril9,


        ])->layout('livewire.layouts.base');
    }
}
