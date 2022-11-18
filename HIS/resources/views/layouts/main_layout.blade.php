<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
</head>

<body>
    {{-- start main-wrapper --}}
    <div class="main-wrapper">
        {{-- start loader --}}
        {{-- @include('includes.loader') --}}
        {{-- end loader --}}

        {{-- start navbar --}}
        @include('includes.navbar')
        {{-- end navbar --}}


        {{-- start menu --}}
        @include('includes.menu')
        {{-- end menu --}}



        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <!-- Page Content -->
            <div class="content container-fluid">
                @yield('page-header')
                @yield('page-content')
            </div>
            <!-- /Page Content -->
        </div>
        <!-- /Page Content -->
    </div>
    {{-- end main-wrapper --}}


    @include('includes.footer')
</body>

</html>
