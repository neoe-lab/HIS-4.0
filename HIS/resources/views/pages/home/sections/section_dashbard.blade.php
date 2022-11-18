<div class="row">
    {{-- row 1 --}}
    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="card-group m-b-30">
            <div class="card flex-fill">
                <div class="card-body">
                    <h4 class="card-title text-center"><i class="la la-folder"></i> สถิติผู้รับบริการ IPD วันนี้
                    </h4>
                    <hr>
                    <div class="statistics">
                        {{-- <div class="row">
                            <div class="col-md-6 col-6 text-center">
                                <div class="stats-box mb-4">
                                    <p>จำนวนเตียงทั้งหมด</p>
                                    <h3>00</h3>
                                </div>
                            </div>
                            <div class="col-md-6 col-6 text-center">
                                <div class="stats-box mb-4">
                                    <p>เตียงที่ว่าง</p>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div> --}}
                    </div>
            
                    <div>
                        <h4 class="mb-1"><i class="fa fa-dot-circle-o text-primary mr-2"></i>รับใหม่วันนี้
                            <span id="admit_new" class="float-right">{{ $admit_new[0]->admittoday }}</span>
                        </h4>
                        <h4 class="mb-1"><i class="fa fa-dot-circle-o text-secondary mr-2"></i>จำหน่ายวันนี้
                            <span id="dchtoday" class="float-right">{{ $dchtoday[0]->dchtoday}}</span>
                        </h4>
                        <h4 class="mb-1"><i class="fa fa-dot-circle-o text-purple mr-2"></i>admit อยู่ 
                            <span id="admitcount-total" class="float-right">{{ $admitcount[0]->total_admit }}</span></h4>
                        {{-- <h4 class="mb-1"><i class="fa fa-dot-circle-o text-success mr-2"></i>สิทธ์ UC <span
                                class="float-right">0</span></h4>
                        <h4 class="mb-1"><i class="fa fa-dot-circle-o text-danger mr-2"></i>สิทธิ์อื่นๆ <span
                                class="float-right">0</span></h4>
                        <h4 class="mb-1"><i class="fa fa-dot-circle-o text-warning mr-2"></i>เตียงว่าง 
                            <span id="bedcount-wblank" class="float-right">0</span></h4>
                        <h4 class="mb-1"><i class="fa fa-dot-circle-o text-info mr-2"></i>สิทธิ์ชำระและเบิกได้
                            <span class="float-right">0</span>
                        </h4>
                        <h4 class="mb-1"><i class="fa fa-dot-circle-o text-dark mr-2"></i>อัตราการครองเตียง
                            <span class="float-right">0</span>
                        </h4> --}}
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="card-group m-b-30">
            <a href="#" class="card">
                <div class="card-body bg-success text-white">
                    <div class="text-center">
                        <h3 class="text-title">ผู้รับบริการ วันนี้</h3>
                        <h1 class="mb-3"> <i class="la la-stethoscope"></i> <span id="pt_visit_today">{{ $pt_visit[0]->pt_visit_today }}</span></h1>
                        <p class="mb-0">(เดือนนี้ <span id="ptm_visit_hn">{{ $pt_visit[0]->ptm_visit_hn }}</span> คน / <span id="ptm_visit_vn">{{ $pt_visit[0]->ptm_visit_vn }}</span> ครั้ง)</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="card-group m-b-30">
            <a href="#" class="card">
                <div class="card-body bg-danger text-white">
                    <div class="text-center">
                        <h3 class="text-title">ER วันนี้</h3>
                        <h1 class="mb-3"> <i class="la la-taxi"></i> <span id="pt_er_today">{{ $pt_er[0]->pt_er_today }}</span></h1>
                        <p class="mb-0">(เดือนนี้ <span id="ptm_er_hn">{{ $pt_er[0]->ptm_er_hn }}</span> คน / <span id="ptm_er_vn">{{ $pt_er[0]->ptm_er_vn }}</span> ครั้ง)</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="card-group m-b-30">
            <a href="#" class="card">
                <div class="card-body bg-info text-white">
                    <div class="text-center">
                        <h3 class="text-title">OPD วันนี้</h3>
                        <h1  class="mb-3"> <i class="la la-id-card"></i> <span id="pt_opd_today">{{ $pt_opd[0]->pt_opd_today }}</span></h1>
                        <p class="mb-0">(เดือนนี้ <span id="ptm_opd_hn">{{ $pt_opd[0]->ptm_opd_hn }}</span> คน / <span id="ptm_opd_vn">{{ $pt_opd[0]->ptm_opd_vn }}</span> ครั้ง)</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="card-group m-b-30">
            <div class="card">
                <div class="card-body bg-info text-white">
                    <div class="text-center">
                        <h3 class="text-title">PCU วันนี้</h3>
                        <h1 class="mb-3"> <i class="la la-hospital-o"></i><span id="pt_pcu_today">{{ $pt_pcu[0]->pt_pcu_today }}</span></h1>
                        <p class="mb-0">(เดือนนี้ <span id="ptm_pcu_hn">{{ $pt_pcu[0]->ptm_pcu_hn }}</span> คน / <span id="ptm_pcu_vn">{{ $pt_pcu[0]->ptm_pcu_vn }}</span> ครั้ง)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="card-group m-b-30">

            <div class="card">
                <div class="card-body bg-warning text-white">
                    <div class="text-center">
                        <h3 class="text-title">IPD วันนี้</h3>
                        <h1 class="mb-3"> <i class="la la-bed"></i> <span id="pt_ipd_today">{{ $pt_ipd[0]->pt_ipd_today }}</span></h1>
                        <p class="mb-0">(เดือนนี้ <span id="ptm_ipd_hn">{{ $pt_ipd[0]->ptm_ipd_hn }}</span> คน / <span id="ptm_ipd_an">{{ $pt_ipd[0]->ptm_ipd_an }}</span> ครั้ง)</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-group m-b-30">
            <div class="card">
                <div class="card-body bg-warning text-white">
                    <div class="text-center">
                        <h3 class="text-title">X-RAY วันนี้</h3>
                        <h1 class="mb-3"> <i class="la la-close"></i> <span id="pt_xray_today">{{ $pt_xray[0]->pt_xray_today }}</span></h1>
                        <p class="mb-0">(เดือนนี้ <span id="ptm_xray_hn">{{ $pt_xray[0]->ptm_xray_hn }}</span> คน /<span id="ptm_xray_vn">{{ $pt_xray[0]->ptm_xray_vn }}</span> ครั้ง)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- row 3 --}}
    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="card-group m-b-30">
            <div class="card">
                <div class="card-body bg-dark text-white">
                    <div class="text-center">
                        <h3 class="text-title">LAB วันนี้</h3>
                        <h1 class="mb-3"> <i class="la la-flask"></i> <span id="form_lab_today">{{ $form_lab[0]->form_lab_today }}</span></h1>
                        {{-- <p class="mb-0">(เดือนนี้ 0 คน / 0 ครั้ง)</p> --}}
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="card-group m-b-30">
            <div class="card bg-dark text-white">
                <div class="card-body">
                    <div class="text-center">
                        <h3 class="text-title">กายภาพบำบัด วันนี้</h3>
                        <h1 class="mb-3"> <i class="fa fa-wheelchair"></i> <span id="pt_phy_today">{{ $pt_phy[0]->pt_phy_today }}</span></h1>
                        <p class="mb-0">(เดือนนี้ <span id="ptm_phy_hn">{{ $pt_phy[0]->ptm_phy_hn }}</span> คน / <span id="ptm_phy_vn">{{ $pt_phy[0]->ptm_phy_vn }}</span> ครั้ง)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="card-group m-b-30">
            <div class="card">
                <div class="card-body bg-purple text-white">
                    <div class="text-center">
                        <h3 class="text-title">แพทย์แผนไทย วันนี้</h3>
                        <h1 class="mb-3"> <i class="la la-fist-raised"></i> <span id="pt_ttm_today">{{ $pt_ttm[0]->pt_ttm_today }}</span></h1>
                        <p class="mb-0">(เดือนนี้ <span id="ptm_ttm_hn">{{ $pt_ttm[0]->ptm_ttm_hn }}</span> คน / <span id="ptm_ttm_vn">{{ $pt_ttm[0]->ptm_ttm_vn }}</span> ครั้ง)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="card-group m-b-30">
            <div class="card bg-purple text-white">
                <div class="card-body">
                    <div class="text-center">
                        <h3 class="text-title">ทันตกรรม วันนี้</h3>
                        <h1 class="mb-3"> <i class="la la-user-md"></i>  <span id="pt_dent_today">{{ $pt_dent[0]->pt_dent_today }}</span></h1>
                        <p class="mb-0">(เดือนนี้ <span id="ptm_dent_hn">{{ $pt_dent[0]->ptm_dent_hn }}</span> คน / <span id="ptm_dent_vn">{{ $pt_dent[0]->ptm_dent_vn }}</span> ครั้ง)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>