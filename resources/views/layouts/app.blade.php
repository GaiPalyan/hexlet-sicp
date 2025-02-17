<!DOCTYPE html>
<html class="h-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description', __('layout.meta.description'))">
    @hasSection ('meta-robots')
    <meta name="robots" content="@yield('meta-robots')">
    @endif

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token" />

    <title>@yield('title', __('layout.nav.name'))</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireStyles
    @includeWhen(app()->environment('production'), 'layouts.deps._gtm_head')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="min-vh-100 d-flex flex-column">
    @includeWhen(app()->environment('production'), 'layouts.deps._gtm_body')
    @include('layouts._nav')
    <div class="flex-grow-1">
        <main class="my-4">
            <div class="container mb-3">
                @include('flash::message')
                @yield('content')
            </div>
        </main>
    </div>
    @include('layouts._footer')
    @livewireScripts
    <script src="{{ mix('js/hljs.js')}}"></script>
    @includeWhen(app()->environment('production'), 'layouts.deps._metrika')
</body>
</html>
