<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('subtitle') - Pengelolaan Proyek</title>

        {{-- Default --}}
        <!-- Favicon -->
        <link href="{{ asset('assets/img/brand/nf.png') }}" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Icons -->
        <link href="{{ asset('assets/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
        <!-- CSS Files -->
        <link href="{{ asset('assets/css/argon-dashboard.css?v=1.1.0') }}" rel="stylesheet" />
    </head>
    <body>        