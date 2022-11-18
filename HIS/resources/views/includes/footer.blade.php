  <!-- jQuery -->
  <script src={{ asset('assets/js/jquery-3.5.1.min.js') }}></script>

  <!-- Bootstrap Core JS -->
  <script src={{ asset('assets/js/popper.min.js') }}></script>
  <script src={{ asset('assets/js/bootstrap.min.js') }}></script>

  <!-- Slimscroll JS -->
  <script src={{ asset('assets/js/jquery.slimscroll.min.js') }}></script>

  <!-- Select2 JS -->
  <script src={{ asset('assets/js/select2.min.js') }}></script>

  <!-- Datatable JS -->
  <script src={{ asset('assets/js/jquery.dataTables.min.js') }}></script>
  <script src={{ asset('assets/js/dataTables.bootstrap4.min.js') }}></script>

  <!-- Datetimepicker JS -->
  <script src={{ asset('assets/js/moment.min.js') }}></script>
  <script src={{ asset('assets/js/bootstrap-datetimepicker.min.js') }}></script>

  <!-- Chart JS -->
  <script src={{ asset('assets/plugins/morris/morris.min.js') }}></script>
  <script src={{ asset('assets/plugins/raphael/raphael.min.js') }}></script>
  <script src={{ asset('assets/js/chart.min.js') }}></script>
  {{-- highcharts js --}}

  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>

  {{-- Chart Custom --}}
  @yield('chart-custom')

  <!-- Custom JS -->
  @yield('js-custom')
  <script src={{ asset('assets/js/app.js') }}></script>
