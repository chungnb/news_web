@extends('layout.layout')

@section('seo_title', $data->title)
@section('seo_description', 'Chính sách Đức Tín')
@section('seo_keywords', 'Chính sách Đức Tín')

@section('content')
    <div>
        <img src="{{ asset('images/banner/infomation-page.png') }}" alt="Thông tin chính sách Duc Tin">
    </div>
    <div class="w-full md:w-[80%] md:px-0 px-4 m-auto ckeditor_main">
        <h1 class="text-bl-222 font-bold xl:text-[42px] md:text-[32px] text-2xl xl:my-16 my-10 text-center">
            {{ $data->title }}
        </h1>

        <div class="mb-10">
            {!! $data->content !!}
        </div>

    </div>
@endsection
