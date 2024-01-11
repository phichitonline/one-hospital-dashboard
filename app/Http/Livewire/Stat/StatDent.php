<?php

namespace App\Http\Livewire\Stat;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class StatDent extends Component
{
    public $year,$myearb,$myeare,$enddate,$enddate2
        ,$count_er_month,$count_er_dril10,$count_er_dril11,$count_er_dril12,$count_er_dril1
        ,$count_er_dril2,$count_er_dril3,$count_er_dril4,$count_er_dril5
        ,$count_er_dril6,$count_er_dril7,$count_er_dril8,$count_er_dril9;

    // protected $listeners = ['year' => '$refresh'];

    public function mount()
    {

    }

    public function dentClick()
    {
        // $this->year = "2564";
        // $this->emit(event:'year');
        $this->emit('year');
    }

    public function dehydrate(){
        $this->dispatchBrowserEvent('year', [
            'year' => $this->year,
            'count_er_month' => $this->count_er_month,
            'count_er_dril10' => $this->count_er_dril10,
            'count_er_dril11' => $this->count_er_dril11,
            'count_er_dril12' => $this->count_er_dril12,
            'count_er_dril1' => $this->count_er_dril1,
            'count_er_dril2' => $this->count_er_dril2,
            'count_er_dril3' => $this->count_er_dril3,
            'count_er_dril4' => $this->count_er_dril4,
            'count_er_dril5' => $this->count_er_dril5,
            'count_er_dril6' => $this->count_er_dril6,
            'count_er_dril7' => $this->count_er_dril7,
            'count_er_dril8' => $this->count_er_dril8,
            'count_er_dril9' => $this->count_er_dril9
        ]);
    }


    public function render()
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

        return view('livewire.stat.stat-dent', [

        ])->layout('livewire.layouts.base');
    }
}
