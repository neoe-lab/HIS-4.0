@extends('layouts.main_layout')
@section('page-header')
@endsection
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