@extends('layout.layout')
@section('seo_title', $categoryChoosen->seo_title ?? $categoryChoosen->name)
@section('seo_description', $categoryChoosen->seo_description)
@section('seo_keywords', $categoryChoosen->seo_keywords)

@section('content')
    <div class="">
        <img src="{{ asset('images/banner/tin-tuc.png') }}" alt="banner tin tuc Duc Tin">
    </div>


    <div class="w-full px-4 md:px-8 mt-14 m-auto news-main">

        @include('component.news.categories', [
            'categories' => $categories,
            'categoryChoosen' => $categoryChoosen->slug,
        ])


        <h2 class="text-2xl text-h2 font-bold text-left mt-6 line-text-bottom-full">{{ $categoryChoosen->name }}</h2>



        <div class="mt-8">
            {{-- Tin nổi bật && side bar --}}
            <div class="flex flex-col md:flex-row gap-8">
                @if (count($newsAll) > 0)
                    <div class="md:w-[70%] w-full news-popuplar">
                        <a class="flex flex-col" href="/{{ $newsAll[0]->slug }}">
                            <img class="lazy" data-src="{{ asset('storage/' . $newsAll[0]->image) }}"
                                alt="slug img tin tuc">

                            <div class="mt-6">
                                <div class="flex flex-col gap-2">
                                    <p class="text-color-444 text-sm flex gap-1 items-center "><i
                                            class="fa-regular fa-calendar-days text-color-444"></i>
                                        {{ $newsAll[0]->published_at }}</p>
                                    <h4 class="text-lg text-bl-222 font-bold">{{ $newsAll[0]->title }}</h4>
                                    <p>
                                        <span class="text-eclip">
                                            {{ strip_tags($newsAll[0]->content) }}
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif

                {{-- Side bar --}}

                <div class="md:w-[30%] w-full bg-[#F9F9FB] rounded px-6 py-8 news-left-bar h-fit">
                    <h3 class="text-title-1B text-xl xl:text-2xl pb-3 border-b-[3px] font-bold border-title-1B">TIN TỨC MỚI
                        NHẤT</h3>
                    <div class="flex flex-col gap-6 mt-6">
                        @foreach ($newsBar as $itemBar)
                            <a class="flex flex-col md:flex-row gap-3 items-center border-b-[1px] pb-3"
                                href="/{{ $itemBar->slug }}">
                                <img class="lazy" data-src="{{ asset('storage/' . $itemBar->image) }}"
                                    alt="slug img tin tuc">
                                <div class="flex flex-col gap-2">
                                    <p class="text-color-444 text-sm flex gap-1 items-center "><i
                                            class="fa-regular fa-calendar-days text-color-444"></i>{{ $itemBar->published_at }}
                                    </p>
                                    <h4 class="text-lg text-bl-222 font-bold">{{ $itemBar->title }}</h4>
                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>

            {{-- List tin --}}
            <div class="flex flex-col gap-6 news-list mt-6">
                @foreach ($newsAll as $item)
                    <a class="flex flex-col md:flex-row gap-4 items-center pb-3 border-b-[1px] w-full"
                        href="/{{ $item->slug }}">
                        <img class="lazy" data-src="{{ asset('storage/' . $item->image) }}" alt="slug img tin tuc">
                        <div class="flex flex-col gap-2 w-full overflow-hidden">
                            <p class="text-color-444 text-sm flex gap-1 items-center "><i
                                    class="fa-regular fa-calendar-days text-color-444"></i>{{ $item->published_at }}</p>
                            <h4 class="text-lg text-bl-222 font-bold">{{ $item->title }}</h4>
                                <span class="text-eclip">
                                    {{ strip_tags($item->content) }}
                                </span>
                        </div>
                    </a>
                @endforeach

            </div>

            <div class="mt-6 mb-20 flex justify-center items-center">
                {{ $newsAll->render('component.paginator') }}
            </div>

        </div>
    </div>
@endsection
