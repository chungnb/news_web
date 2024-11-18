@extends('layout.layout')

@section('seo_title', $news->seo_title ?? $news->title)
@section('seo_description', $news->seo_description)
@section('seo_keywords', $news->seo_keywords)

@section('content')
    <div class="w-full xl:w-[80%] px-4 md:px-0 mt-14 m-auto news-main">

        @include('component.news.categories', [
            'categories' => $categories,
            'categoryChoosen' => $categoryChoosen->slug,
        ])

        <div class="mt-8 news-detail ckeditor_main">
            {{-- Tin nổi bật && side bar --}}
            <div class="flex gap-8 flex-col md:flex-row">
                <div class="md:w-[70%] w-full h-auto">
                    <div class="flex gap-3">
                        <p class="text-color-444 text-sm flex gap-1 items-center"><i class="fa-regular fa-calendar-days"></i>
                            {{ $news->published_at }}</p>

                        {{-- <span class="text-color-444 text-sm flex gap-1 items-center"><i class="fa-regular fa-eye"></i>
                            {{ $news->views }} lượt xem</span> --}}
                    </div>
                    <h1 class="font-bold sm:text-3xl text-2xl mt-2 mb-3">
                        {{ $news->seo_heading ?? $news->title }}
                    </h1>

                    <p class="text-ckeditor">
                        {!! $news->content !!}
                    </p>
                </div>

                {{-- Side bar --}}

                <div class="md:w-[30%] w-full bg-[#F9F9FB] rounded px-6 py-8 news-left-bar h-fit">
                    <h3 class="text-title-1B text-xl xl:text-2xl pb-3 border-b-[3px] font-bold border-title-1B">TIN ĐỌC
                        NHIỀU</h3>
                    <div class="flex flex-col gap-6 mt-6">
                        @foreach ($topViews as $itemView)
                            <a class="flex md:flex-row flex-col gap-3 items-center border-b-[1px] pb-3"
                                href="/{{ $itemView->slug }}">
                                <img src="{{ asset('storage/'.$itemView->image) }}" alt="slug img tin tuc">
                                <div class="flex flex-col gap-2">
                                    <p class="text-color-444 text-sm flex gap-1 items-center "><i
                                            class="fa-regular fa-calendar-days text-color-444"></i>
                                        {{ $itemView->published_at }}</p>
                                    <h4 class="text-lg text-bl-222 font-bold">{{ $itemView->title }}</h4>
                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>
        <div class="flex justify-between w-full items-center my-10 text-bl-222 font-semibold">
            <div>
                @if ($prevNews)
                    <a class="" href="/{{ $prevNews->slug }}"><i
                            class="fa-solid fa-arrow-left-long"></i> Bài trước</a>
                @endif
            </div>

            <div>
                @if ($nextNews)
                    <a class="" href="/{{ $nextNews->slug }}">Bài sau <i
                            class="fa-solid fa-arrow-right-long"></i></a>
                @endif
            </div>
        </div>
        {{-- Relate new --}}
        <div class="my-10">

            <p class="text-sm font-semibold">Các tin liên quan</p>

            <ul class="mt-2">
                @foreach ($relateNews as $item)
                    <li class="list-disc ml-5 text-sm">
                        <a href="/{{ $item->slug }}">
                            <p>{{ $item->title }}</p>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
