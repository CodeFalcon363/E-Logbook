<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <style type="text/css">
            .btn:focus, .form-control:focus, .btn-close:focus{
                box-shadow: none !important;
            }
            main{
                min-height: 80vh;
            }
        </style>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-light">
        <x-jet-banner />
        @livewire('navigation-menu')

        <!-- Page Heading -->
        <header class="d-flex py-3 bg-white shadow-sm border-bottom">
            <div class="container">
                {{ $header }}
            </div>
        </header>

        <!-- Page Content -->
        <main class="container-fluid py-2">
            {{ $slot }}
        </main>

        <footer class="footer bg-primary text-dark py-4 container-fluid ">
            <div class="row">
                <div class="col">
                    <p>
                        Copyright @ <strong>2022</strong>
                    </p>
                </div>

                <div class="col">
                    <p class="text-end">
                        Logged in as: @if(Auth::user()->role == 1)
                        Administrator

                        @elseif(Auth::user()->role == 2)
                        Supervisor
                        @elseif(Auth::user()->role == 3)
                        Student
                        @endif
                    </p>
                </div>
            </div>
        </footer>

        @stack('modals')

        @livewireScripts

        @stack('scripts')
        
        <script src="{{asset('js/jquery.js')}}"></script>
        <script>
            $(".delete_btn").on('click',function(e){
                e.preventDefault();
                var result = confirm('Are you sure want to delete?');
                if(result){
                 window.location = $(this).attr('href');
                }
            });
        </script>
    </body>
</html>
