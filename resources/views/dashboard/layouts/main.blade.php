<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dashboard Murahkom</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('/assets/img/icon.ico') }}" type="image/x-icon" />

    {{-- text trix editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">


    {{-- text trix editor dan datatables --}}
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>

    {{-- JQuery --}}
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>


    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>

    <!-- Fonts and icons -->
    <script src="{{ asset('/assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script src="{{ asset('/asset/js/ckeditor.js') }}" defer></script>

    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ['/assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    {{-- data tables --}}
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/atlantis.min.css') }}">

</head>

<body data-background-color="light">
    <div class="wrapper">
        @include('dashboard.layouts.includes.header')
        <!-- Sidebar -->
        @include('dashboard.layouts.includes.sidebar')
        <!-- End Sidebar -->
        <div class="main-panel">
            @yield('content')
        </div>
    </div>
    <!--   Core JS Files   -->
    @include('dashboard.layouts.includes.js')
</body>

</html>
