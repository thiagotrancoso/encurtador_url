<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>@yield('title')</title>

        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/toastr/toastr.min.css') }}" rel="stylesheet">

        <style>
            #toast-container {
                margin-top: 50px;
            }
        </style>

        @yield('style-code')
    </head>

    <body class="sb-nav-fixed">
        @include('admin.template.navbar')

        <div id="layoutSidenav">
            @include('admin.template.sidebar')

            <div id="layoutSidenav_content">
                <main>
                    @yield('content')
                </main>

                @include('admin.template.footer')
            </div>
        </div>

        @yield('outside-content')

        <script src="{{ asset('assets/js/jquery.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/js/jquery.inputmask.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/toastr/toastr.min.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
        <script src="{{ asset('assets/js/shortener.js') }}"></script>

        @yield('script-code')
    </body>
</html>
