<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('asset/favicon.png') }}" type="image/x-icon">
    <title>SMS Sender</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="relative">
    @include('backend.layouts.header')
    @include('backend.layouts.slide')
    {{-- Body --}}
    <section class="lg:ml-64 lg:pl-4 lg:flex lg:flex-col lg:w-75% mt-5 mx-2">
        @yield('content')
    </section>

    @include('backend.layouts.footer')
    @livewireScripts

    @yield('script')
    <script src="{{ asset('asset/script/main.js') }}"></script>
</body>

</html>
