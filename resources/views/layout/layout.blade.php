<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('seo_description', config('app.name'))">
    <meta name="keywords" content="@yield('seo_keywords', config('app.name'))">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    
    <title>@yield('seo_title', config('app.name'))</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <?php
    $scripts['header'] = mb_convert_encoding($scripts['header'] ?? '', 'UTF-8', 'auto');
    echo html_entity_decode($scripts['header'], ENT_QUOTES, 'UTF-8');
    ?>
</head>

<body>
    <?php
    $scripts['body'] = mb_convert_encoding($scripts['body'] ?? '', 'UTF-8', 'auto');
    echo html_entity_decode($scripts['body'], ENT_QUOTES, 'UTF-8');
    ?>
    <button id="clip_board" style="display:none">Copy Link</button>
    <div class="container-layout">
        @include('component.header')
        {{-- @include('component.bannerSlide') --}}
        <div class="main pt-20">
            @yield('content')
        </div>

        @include('component.footer')
        {{-- @include('component.contactBar') --}}
    </div>

    @if (session()->has('success'))
        <script type="module">
            Toastify({
                text: "{{ session('success') }}",
            }).showToast();
        </script>
    @endif

    @if (session()->has('error'))
        <script type="module">
            Toastify({
                text: "{{ session('error') }}",
            }).showToast();
        </script>
    @endif
</body>

</html>
