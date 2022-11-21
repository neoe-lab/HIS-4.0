@extends('layouts.main_layout')
@section('page-header')

@endsection
{{-- @section('page-filter')
<form action="{{ route('home-page') }}" method="get" id="filler">
    @include('includes.filter')
</form>
@endsection --}}
@section('page-content')
    <section>
        @include('pages.home.sections.section_dashbard')
    </section>
    <section>
        {{-- @include('pages.home.sections.section_death_rate') --}}
    </section>
    <section>
        @include('pages.home.sections.section_top10_diag')
    </section>
@endsection

@section('script-datepicker')
    <!-- Datepicker Th JS -->
    <script src={{ asset("assets/plugins/bootstrap-datepicker-thai/js/bootstrap-datepicker.js") }}></script>
    <script src={{ asset("assets/plugins/bootstrap-datepicker-thai/js/bootstrap-datepicker-thai.js") }}></script>
    <script src={{ asset("assets/plugins/bootstrap-datepicker-thai/js/locales/bootstrap-datepicker.th.js") }}></script>
@endsection