<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DUCTINGROUP') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/ckeditor.js'])
</head>

<body style="overflow-y: hidden">
    <button id="clip_board" style="display:none"></button>
    @include('layout.navigation')
    <div class="flex h-screen overflow-hidden">
        <div id="admin-menu" class="admin-menu w-72 h-screen relative duration-300 bg-radient-blue">
            <button onclick="onToggleMenu()"
                class="absolute top-[20%] right-[-18px] rounded-full border-2 border-black w-[40px] h-[40px] bg-white">
                <i id="menu-toggle-left" class="text-xl fa-solid fa-chevron-left"></i>
                <i id="menu-toggle-right" class="fa-solid fa-chevron-right hidden"></i>
            </button>
            <div class="pt-[65px] overflow-y-auto h-full">
                <ul class="px-4 py-12 text-white flex flex-col gap-8">
                    @php
                        $isAdmin = auth()->user()->hasRole('admin');
                    @endphp

                    @foreach (MENU_ITEMS as $item)
                        @if ($isAdmin || $item['role'] === null)


                                <li>
                                    <a class="{{ request()->is($item['active']) ? 'active-menu-admin' : '' }} text-base w-full flex px-5 py-2 hover:bg-white hover:text-blue-800 hover:duration-300 rounded-full font-bold gap-2 items-center"
                                        href="{{ $item['route'] ? route($item['route']) : '#' }}">
                                        <i class="fa-solid {{ $item['icon'] }}"></i>
                                        <span class="menu-text">{{ $item['text'] }}</span>
                                    </a>
                                </li>

                            
                        @endif
                    @endforeach

                </ul>
            </div>
        </div>

        <main class="w-full pt-[65px] h-auto overflow-y-auto px-6 my-8">
            {{ $slot }}
        </main>
    </div>
    @if (session()->has('success'))
        <script type="module">
            Toastify({
                text: "{{ session('success') }}",
            }).showToast();
        </script>
    @endif
</body>

</html>
<script>
    let menu = document.getElementById('admin-menu')
    let menu_toggle_left = document.getElementById('menu-toggle-left')
    let menu_toggle_right = document.getElementById('menu-toggle-right')
    let menu_text = document.querySelectorAll('.menu-text')

    function onToggleMenu() {
        // console.log(menu.style.width);
        if (menu.style.width && menu.style.width == '100px') {
            menu.style.width = '288px'
            menu_toggle_left.style.display = 'block'
            menu_toggle_right.style.display = 'none'
            for (let i = 0; i < menu_text.length; i++) {
                menu_text[i].style.transform = "scale(1)";
                menu_text[i].style.display = 'block'
            }
        } else {
            menu.style.width = '100px'
            menu_toggle_left.style.display = 'none'
            menu_toggle_right.style.display = 'block'
            for (let i = 0; i < menu_text.length; i++) {
                menu_text[i].style.transform = "scale(0)";
                menu_text[i].style.display = 'none'
            }
        }
    }
</script>
