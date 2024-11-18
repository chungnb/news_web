<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', config('app.name'))">
    <meta name="keywords" content="@yield('meta_keywords', config('app.name'))">
    <title>@yield('title', 'Duc tin group')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <title>{{config('app.name')}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center">
                <h1 class="mb-4 text-[40px] tracking-tight lg:text-9xl text-blue-500 font-bold">404</h1>
                <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl">Trang thông tin không tồn tại hoặc đã bị xóa</p>
                <p class="mb-4 text-lg font-light text-gray-500">Xin lỗi vì sự cố này vui lòng quay về <a href="/" class="text-blue-600">Trang chủ</a> </p>
                <a href="#" class="inline-flex text-white bg-primary-600 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center my-4">Back to Homepage</a>
            </div>   
        </div>
    </section>
</body>