<!DOCTYPE html>
<html lang="en" data-theme="light" id="theme">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    {{-- Include Header --}}
    @yield('header')

    <div>
        @include('layouts.header')
        <div class="flex overflow-hidden bg-white pt-16">
            @include('layouts.sidebar')
            @include('layouts.sidebar')

            <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
            {{-- Main Content --}}
            <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
                <main>
                    <div class="pt-6 px-4">
                        {{-- content --}}
                        @yield('content')
                        @include('layouts.footer')
                    </div>
                </main>
        </div>
    </div>

</body>

</html>
