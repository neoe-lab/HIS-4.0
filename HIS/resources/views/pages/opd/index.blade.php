@extends('layouts.main_layout')
@section('page-header')
<!-- Page Header -->
<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">ข้อมูลและสถิติ <span class="text-muted">โรงพยาบาลทุ่งยางแดง</span></h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><i class="la la-home"></i> <a href="index.html">Home</a></li>
                <li class="breadcrumb-item">ข้อมูลและสถิติ</li>
                <li class="breadcrumb-item active">ผู้รับบริการ</li>
            </ul>
        </div>

        <div class="col-auto float-right ml-auto">
            <div class="btn-group btn-group-sm">



            </div>
        </div>
    </div>
</div>
<!-- /Page Header -->
@endsection
@section('page-content')
    <!-- Content Starts -->
    <section>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><i class="la la-pen"></i>ผู้รับบริการ ปีงบประมาณ 256? ({{ $date_start}} ถึง {{ $date_end }})</h4>
                        <div class="card-tools pull-right">
                            <div class="btn-group btn-group-sm">
                                <form action="{{ route('opd-page') }}" method="GET">
                                    <input class="form-control-sm" type="number" name="year" placeholder="ปี พ.ศ. เท่านั้น">
                                    <a class="btn btn-white" href=""><i class="la la-search"></i> ค้นหาปี</a>
                                </form>

                            </div>
                        </div>
                        <ul class="nav nav-tabs nav-tabs-top">
                            <li class="nav-item"><a class="nav-link" href="#tab-chart" data-toggle="tab">แผนภูมิ</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#tab-table" data-toggle="tab">ตารางข้อมูล</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab-help" data-toggle="tab">HELP</a></li>
                        </ul>


                        <div class="tab-content">


                            <!-- start tab-chart -->
                            <div class="tab-pane" id="tab-chart">
                                @include('pages.opd.tabs.tab-chart')                                
                            </div>
                            <!-- end tab-chart -->
                            
                            <!-- start tab-table -->
                            <div class="tab-pane show active" id="tab-table">
                                @include('pages.opd.tabs.tab-table')                              
                            </div>
                            <!-- end tab-table -->
                            
                            <!-- start tab-help -->
                            <div class="tab-pane" id="tab-help">
                                @include('pages.opd.tabs.tab-help')
                            </div>
                            <!-- end tab-help -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Content End -->
@endsection