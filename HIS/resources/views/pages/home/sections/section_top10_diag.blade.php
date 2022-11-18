<div class="row">
    <div class="col-md-6 d-flex">
        <div class="card card-table flex-fill">
            <div class="card-header">
                <h3 class="card-title mb-0 text-center"><i class="la la-road"></i> 10 อันดับโรคผู้ป่วยนอก OPD เดือนนี้
                </h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="top_diag_opd" class="table custom-table mb-0">
                        <thead>
                            <tr>
                                <th>ICD10/Diag</th>
                                <th>ชาย</th>
                                <th>หญิง</th>
                                <th class="text-right">รวม</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $top_diag_opd as $opd )
                            <tr>
                                <td>
                                    <h4><i class="la la-hashtag"></i><a href="project-view.html">{{ $opd->pdx}}</a>
                                    </h4>
                                    <small class="block text-ellipsis">
                                        <h0 class="text-dark"><i class="la la-caret-square-right"></i> {{ $opd->diag_name }}</h0>

                                    </small>
                                </td>
                                <td>
                                    <div>
                                        <h3><i class="la la-user-tie"></i>{{ $opd->man }}</h3>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <h3><i class="la la-user-nurse"></i>{{ $opd->woman }}</h3>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <h3><i class="la la-user-friends"></i> {{ $opd->count_visit }}</h3>
                                </td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
            </div>

        </div>
    </div>
    {{-- 222 --}}
    <div class="col-md-6 d-flex">
        <div class="card card-table flex-fill">
            <div class="card-header">
                <h3 class="card-title mb-0 text-center"><i class="la la-folder-open"></i> 10
                    อันดับโรคผู้ป่วยใน IPD เดือนนี้</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="top_diag_ipd" class="table custom-table mb-0">
                        <thead>
                            <tr>
                                <th>ICD10/Diag</th>
                                <th>ชาย</th>
                                <th>หญิง</th>
                                <th class="text-right">รวม</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($top_diag_ipd as $ipd )
                            <tr>
                                <td>
                                    <h4><i class="la la-hashtag"></i><a href="#">{{ $ipd->pdx }}</a></h4>
                                    <small class="block text-ellipsis">
                                        <h0 class="text-dark"><i class="la la-caret-square-right"></i>{{ $ipd->diag_name}}</h0>

                                    </small>
                                </td>
                                <td>
                                    <div>
                                        <h3><i class="la la-user-tie"></i>{{ $ipd->man }} </h3>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <h3><i class="la la-user-nurse"></i>{{ $ipd->woman }} </h3>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <h3><i class="la la-user-friends"></i>{{ $ipd->count_visit }} </h3>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
</div>