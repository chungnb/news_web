@extends('layout.layout')
@section('seo_title', $seoPage->video_seo_title ?? 'Thư viện video Đức Tín')
@section('seo_description', $seoPage->video_seo_description ?? 'Thư viện video làm Đức Tín')
@section('seo_keywords', $seoPage->video_seo_keywords ?? 'Thư viện video Đức Tín')
@section('content')
   <div>
      <img src="{{asset('images/banner/video-banner.png')}}" alt="banner videos">
   </div>
   <div class="flex flex-col gap-4 w-full xl:w-[80%] px-4 md:px-0 m-auto py-8 xl:py-16 md:items-center justify-center">
      <h1 class="text-[28px] md:text-[56px] text-h2 font-bold text-center line-text-bottom">{{ $seoPage->video_seo_heading ?? 'Thư viện video'}}</h1>
      <div class="grid w-full xl:grid-cols-3 md:grid-cols-2 grid-cols-1 justify-center items-center gap-8 m-auto my-8">
         @foreach ($videos as $video)
            <div class="w-full">
               <iframe class="rounded-xl w-full h-[388px]" src="{{ $video->url }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
         @endforeach
      </div>

      {{$videos->render('component.paginator')}}
   </div>
@endsection
