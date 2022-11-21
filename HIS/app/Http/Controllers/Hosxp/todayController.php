<?php

namespace App\Http\Controllers\Hosxp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class todayController extends Controller
{
    public function index(Request $req)
    {   
        // dd($req->all());
        //################  connection database hosxp #################
        $hosxp_db = DB::connection('hosxp');
        $hosxp_pcu_db = DB::connection('hosxp_pcu');
        
        // ########################################################

        $pt_visit = $this->pt_visit($hosxp_db);
        $pt_opd = $this->pt_opd($hosxp_db);
        $pt_phy = $this->pt_phy($hosxp_db);
        $pt_dent = $this->pt_dent($hosxp_db);
        $pt_ipd = $this->pt_ipd($hosxp_db);
        $pt_ttm = $this->pt_ttm($hosxp_db);
        $pt_er = $this->pt_er($hosxp_db);
        $pt_or = $this->pt_or($hosxp_db);
        $pt_xray = $this->pt_xray($hosxp_db);
        $admit_new = $this->ipt_admitoday_new($hosxp_db);
        $dchtoday = $this->ipt_dchtoday($hosxp_db);
        $admitcount = $this->ipt_admit_total_to_day($hosxp_db);
        $pt_pcu = $this->pt_pcu($hosxp_pcu_db);
        $top_diag_opd = $this->top_diag_opd($hosxp_db);
        $top_diag_ipd = $this->top_diag_ipd($hosxp_db);
        $death_opd = $this->death_opd($hosxp_db);
        $death_ipd = $this->death_ipd($hosxp_db);
        $form_lab = $this->form_lab($hosxp_db);
        $opd = [
            "death_opd" => $death_opd, 
            "death_ipd" => $death_ipd      
        ];
          //dd($top_diag_ipd);
        return view('pages.home.index',compact("pt_opd", "pt_phy", 'pt_dent', 'pt_ipd', 'pt_ttm', 'pt_er', 'pt_or', 'pt_xray', 'pt_visit','pt_pcu','admitcount','dchtoday','admit_new','top_diag_opd','top_diag_ipd','opd','form_lab'));
    }


    public function pt_visit($db)
    {
        $result = $db->select("SELECT COUNT(DISTINCT hn) AS ptm_visit_hn,COUNT(DISTINCT vn) AS ptm_visit_vn
        ,COUNT(DISTINCT IF(vstdate = DATE_FORMAT(NOW(),'%Y-%m-%d'),vn,NULL)) AS pt_visit_today
        FROM ovst
        WHERE vstdate BETWEEN DATE_FORMAT(NOW(),'%Y-%m-01') AND DATE_FORMAT(NOW(),'%Y-%m-%d') ");

        return $result;
    }


    public function pt_opd($db)
    {
        $result = $db->select("SELECT COUNT(DISTINCT hn) AS ptm_opd_hn,COUNT(DISTINCT vn) AS ptm_opd_vn
        ,COUNT(DISTINCT IF(vstdate = DATE_FORMAT(NOW(),'%Y-%m-%d'),vn,NULL)) AS pt_opd_today
        FROM ovst
        WHERE main_dep = 211 AND vstdate BETWEEN DATE_FORMAT(NOW(),'%Y-%m-01') AND DATE_FORMAT(NOW(),'%Y-%m-%d') ");

        return $result;
    }
    public function pt_phy($db)
    {
        $result = $db->select("SELECT COUNT(DISTINCT hn) AS ptm_phy_hn,COUNT(DISTINCT vn) AS ptm_phy_vn
        ,COUNT(DISTINCT IF(vstdate = DATE_FORMAT(NOW(),'%Y-%m-%d'),vn,NULL)) AS pt_phy_today
        FROM physic_main
        WHERE vstdate BETWEEN DATE_FORMAT(NOW(),'%Y-%m-01') AND DATE_FORMAT(NOW(),'%Y-%m-%d')
        ");
        return $result;
    }
    public function pt_ipd($db)
    {
        $result = $db->select("SELECT COUNT(DISTINCT hn) AS ptm_ipd_hn,COUNT(DISTINCT an) AS ptm_ipd_an
        ,COUNT(DISTINCT IF(regdate = DATE_FORMAT(NOW(),'%Y-%m-%d'),an,NULL)) AS pt_ipd_today
        FROM ipt
        WHERE regdate BETWEEN DATE_FORMAT(NOW(),'%Y-%m-01') AND DATE_FORMAT(NOW(),'%Y-%m-%d')");

        return $result;
    }
    public function pt_dent($db)
    {
        $result = $db->select("SELECT COUNT(DISTINCT hn) AS ptm_dent_hn,COUNT(DISTINCT vn) AS ptm_dent_vn
        ,COUNT(DISTINCT IF(vstdate = DATE_FORMAT(NOW(),'%Y-%m-%d'),vn,NULL)) AS pt_dent_today
        FROM dtmain
        WHERE vstdate BETWEEN DATE_FORMAT(NOW(),'%Y-%m-01') AND DATE_FORMAT(NOW(),'%Y-%m-%d')");
        return $result;
    }
    public function pt_ttm($db)
    {
        $result = $db->select("SELECT COUNT(DISTINCT hn) AS ptm_ttm_hn,COUNT(*) AS ptm_ttm_vn
        ,COUNT(DISTINCT IF(service_date = DATE_FORMAT(NOW(),'%Y-%m-%d'),vn,NULL)) AS pt_ttm_today
        FROM health_med_service
        WHERE service_date BETWEEN DATE_FORMAT(NOW(),'%Y-%m-01') AND DATE_FORMAT(NOW(),'%Y-%m-%d')");
        #AND in_hospcode_service = 'Y' ";
        return $result;
    }

    public function pt_er($db)
    {
        $result = $db->select("SELECT COUNT(DISTINCT hn) AS ptm_er_hn,COUNT(DISTINCT vn) AS ptm_er_vn
        ,COUNT(DISTINCT IF(vstdate = DATE_FORMAT(NOW(),'%Y-%m-%d'),vn,NULL)) AS pt_er_today
        FROM ovst
        WHERE main_dep = 221 AND vstdate BETWEEN DATE_FORMAT(NOW(),'%Y-%m-01') AND DATE_FORMAT(NOW(),'%Y-%m-%d')");
        return $result;
    }
    public function pt_or($db)
    {
        $result = $db->select("SELECT COUNT(DISTINCT hn) AS ptm_or_hn
        ,COUNT(hn) AS ptm_or_vn
        ,COUNT(IF(patient_department = 'OPD',vn,NULL)) AS ptm_or_opd
        ,COUNT(IF(patient_department = 'IPD',an,NULL)) AS ptm_or_ipd
        ,COUNT(IF(operation_date = DATE_FORMAT(NOW(),'%Y-%m-%d'),hn,NULL)) AS pt_or_today
        FROM operation_list
        WHERE operation_date BETWEEN DATE_FORMAT(NOW(),'%Y-%m-01') AND DATE_FORMAT(NOW(),'%Y-%m-%d')");
        return $result;
    }
    public function pt_xray($db)
    {
        $result = $db->select("SELECT COUNT(DISTINCT hn) AS ptm_xray_hn
		,COUNT(vn) AS ptm_xray_vn
        ,COUNT(IF(DATE_FORMAT(order_date_time,'%Y-%m-%d') = DATE_FORMAT(NOW(),'%Y-%m-%d'),vn,NULL)) AS pt_xray_today
        FROM xray_head
        WHERE DATE_FORMAT(order_date_time,'%Y-%m-%d') BETWEEN DATE_FORMAT(NOW(),'%Y-%m-01') AND DATE_FORMAT(NOW(),'%Y-%m-%d') ");
        return $result;
    }

    public function pt_pcu($db){
        $result = $db->select("SELECT COUNT(DISTINCT hn) AS ptm_pcu_hn,COUNT(DISTINCT vn) AS ptm_pcu_vn
        ,COUNT(DISTINCT IF(vstdate = DATE_FORMAT(NOW(),'%Y-%m-%d'),vn,NULL)) AS pt_pcu_today
        FROM ovst
        WHERE vstdate BETWEEN DATE_FORMAT(NOW(),'%Y-%m-01') AND DATE_FORMAT(NOW(),'%Y-%m-%d')");
        return $result;
    }
    // public function pt_admit($db){
    //     $result = $db->select("SELECT COUNT(*) AS admittoday FROM ipt WHERE regdate = DATE_FORMAT(NOW(),'%Y-%m-%d')");
    //     return $result;
    // }
    public function ipt_admitoday_new($db){
        $result = $db->select("SELECT COUNT(*) AS admittoday FROM ipt WHERE regdate = DATE_FORMAT(NOW(),'%Y-%m-%d')");
        return $result;
    }
    public function ipt_dchtoday($db){
        $result = $db->select("SELECT COUNT(*) AS dchtoday FROM ipt WHERE dchdate = DATE_FORMAT(NOW(),'%Y-%m-%d')");
        return $result;
    }
    public function ipt_admit_total_to_day($db){
        $result = $db->select("SELECT count(an) total_admit FROM ipt 
        WHERE  regdate BETWEEN DATE_FORMAT(NOW(),'%Y-01-01') AND DATE_FORMAT(NOW(),'%Y-%m-%d')
        AND dchdate IS NULL");
        return $result;
    }
    public function top_diag_opd($db){
        $result = $db->select("SELECT count(v.hn) AS count_visit ,v.pdx,i.name AS diag_name,
        COUNT(DISTINCT v.hn) AS count_hn,COUNT(IF(p.sex = 1,v.hn,NULL)) as man,COUNT(IF(p.sex = 2,v.hn,NULL)) as woman
        FROM vn_stat v
        LEFT JOIN patient p on v.hn = p.hn
        LEFT JOIN icd101 i on i.code=v.pdx
        WHERE !(v.pdx like 'Z%' or v.pdx like'U%') AND v.vstdate BETWEEN DATE_FORMAT(NOW(),'%Y-%m-01') AND DATE_FORMAT(NOW(),'%Y-%m-%d')
        AND v.pdx <> ''
        GROUP BY v.pdx
        ORDER BY count_visit DESC
        limit 10");
        return $result;

    }
    public function top_diag_ipd($db){
        $result = $db->select("SELECT count(v.hn) AS count_visit ,v.pdx,i.name as diag_name,COUNT(IF(p.sex = 1,v.hn,NULL)) as man,COUNT(IF(p.sex = 2,v.hn,NULL)) as woman
        FROM an_stat v
        LEFT JOIN patient p on v.hn = p.hn
        left join icd101 i on i.code=v.pdx
        where !(v.pdx like 'Z%' or v.pdx like'O%') AND v.dchdate between DATE_FORMAT(NOW(),'%Y-%m-01') AND DATE_FORMAT(NOW(),'%Y-%m-%d') and (i.name is not null or i.name <> '') and (v.pdx is not null or v.pdx <> '')
        group by v.pdx
        order by count_visit desc
        limit 11");
        return $result;
    }
    public function death_opd($db){
        $result = $db->select("SELECT d.death_diag_1 as death_diag, i.name as diag_name, COUNT(d.hn)sum_death FROM death d
        JOIN icd101 i ON d.death_diag_1 = i.code
        WHERE d.death_date BETWEEN DATE_SUB(DATE_FORMAT(NOW(),'%Y-10-01'), INTERVAL 1 YEAR ) AND DATE_FORMAT(NOW(),'%Y-%m-%d')
        AND d.an =''
        GROUP BY d.death_diag_1
        ORDER BY sum_death DESC
        LIMIT 5");
        return $result;
    }

    public function death_ipd($db){
        $result = $db->select("SELECT LEFT(idx.icd10,3) as death_diag, i.name as diag_name, COUNT(ip.an)sum_death FROM ipt ip
        LEFT OUTER JOIN iptdiag idx ON ip.an=idx.an
        LEFT OUTER JOIN icd101 i ON idx.icd10 = i.code 
        WHERE ip.dchdate BETWEEN DATE_SUB(DATE_FORMAT(NOW(),'%Y-10-01'), INTERVAL 1 YEAR ) AND DATE_FORMAT(NOW(),'%Y-%m-%d')
        AND ip.dchtype IN ('08', '09')
        AND idx.diagtype='1'
        GROUP BY LEFT(idx.icd10,3)
        ORDER BY sum_death DESC
        LIMIT 5");
        return $result;
    }
    public function form_lab($db){
        $result = $db->select("SELECT count(DISTINCT form_name,hn,order_time) as form_lab_today
        FROM lab_head
        WHERE order_date BETWEEN DATE_FORMAT(NOW(),'%Y-%m-%d') AND DATE_FORMAT(NOW(),'%Y-%m-%d')
        ");
        return $result;
    }
}
