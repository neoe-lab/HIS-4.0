<?php

namespace App\Http\Controllers\Hosxp;

use App\Http\Controllers\Controller;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class opdController extends Controller
{
    public function index(Request $req){

        if($req->all() == NULL){
            if(date("m") > 9){
                $date_start = date('Y');
                $date_end = date('Y')+1;
            }else{
                $date_start = date('Y')-1;
                $date_end = date('Y');
            }
        }else{
            $date_start = $req->year - 544;
            $date_end = $req->year - 543;
        }
        $date_start = $date_start.'-10-01';
        $date_end = $date_end.'-09-30';

        $data_visit_month = $this->all_visit($date_start,$date_end);
        $TOTAL_VISIT_IN_YEAR = $this->total_all_year($date_start ,$date_end);
        // dd($data);
        return view('pages.opd.index',compact('data_visit_month',"TOTAL_VISIT_IN_YEAR",'date_start','date_end'));
    }

    //  นับจำนวนคนมารับบริการแยกรายเดือนของปีงบนั้น จำนวนครั้งและคน
    public function all_visit($date_start ,$date_end){
        // $date_start = $date_start.'-10-01';
        // $date_end = $date_end.'-09-30';
        return $data = DB::connection('hosxp')->select("SELECT t.AMONTH,SUM(t.visitopdhn)-SUM(t.visitipdhn) AS opdhn,SUM(t.visitopd)-SUM(t.visitipd) AS opd,
        SUM(t.visitipdhn) AS ipdhn,SUM(t.visitipd) AS ipd,t.AY,t.AM 
        FROM (
            SELECT DATE_FORMAT(vstdate,'%Y-%m') AS AMONTH,COUNT(DISTINCT hn) AS visitopdhn,COUNT(*) AS visitopd,'' AS visitipdhn,'' AS visitipd
            ,DATE_FORMAT(vstdate,'%Y')+543 AS AY,DATE_FORMAT(vstdate,'%m') AS AM
            FROM vn_stat 
            WHERE vstdate BETWEEN '$date_start' AND '$date_end'
            GROUP BY DATE_FORMAT(vstdate,'%Y-%m')
            UNION
            SELECT DATE_FORMAT(regdate,'%Y-%m') AS AMONTH,'' AS visitopdhn,'' AS visitopd,COUNT(DISTINCT hn) AS visitipdhn,COUNT(*) AS visitipd
            ,DATE_FORMAT(regdate,'%Y')+543 AS AY,DATE_FORMAT(regdate,'%m') AS AM
            FROM an_stat 
            WHERE regdate BETWEEN '$date_start' AND '$date_end'
            GROUP BY DATE_FORMAT(regdate,'%Y-%m')
        ) AS t
        GROUP BY t.AMONTH");
    }
    // ยอดรวมทั้งหมดของปีงบระหว่าง IPD and OPD แยกจำนวนคนและ จำนวนครั้ง
    public function total_all_year($date_start ,$date_end){
        return $data = DB::connection('hosxp')->select("SELECT t.AMONTH,SUM(t.visitopdhn)-SUM(t.visitipdhn) AS opdhn,SUM(t.visitopd)-SUM(t.visitipd) AS opd,
		SUM(t.visitipdhn) AS ipdhn,SUM(t.visitipd) AS ipd,t.AY,t.AM 
		FROM (
			SELECT DATE_FORMAT(vstdate,'%Y-%m') AS AMONTH,COUNT(DISTINCT hn) AS visitopdhn,COUNT(*) AS visitopd,'' AS visitipdhn,'' AS visitipd
			,DATE_FORMAT(vstdate,'%Y')+543 AS AY,DATE_FORMAT(vstdate,'%m') AS AM
			FROM vn_stat 
			WHERE vstdate BETWEEN '$date_start' AND '$date_end'
			GROUP BY DATE_FORMAT(vstdate,'%Y-%m')
			UNION
			SELECT DATE_FORMAT(regdate,'%Y-%m') AS AMONTH,'' AS visitopdhn,'' AS visitopd,COUNT(DISTINCT hn) AS visitipdhn,COUNT(*) AS visitipd
			,DATE_FORMAT(regdate,'%Y')+543 AS AY,DATE_FORMAT(regdate,'%m') AS AM
			FROM an_stat 
			WHERE regdate BETWEEN '$date_start' AND '$date_end'
			GROUP BY DATE_FORMAT(regdate,'%Y-%m')
					) AS t ");
    }
}
