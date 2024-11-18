<div class="mb-20 mt-12 hidden-observe">
    <h2 class="line-text-bottom text-[24px] md:text-[32px] text-h2 font-bold text-center xl:text-[56px] mb-16">Xu hướng
        thị trường</h2>

    <div class="w-full xl:w-[80%] px-4 xl:px-0 m-auto mt-10">
        <p class="sm:w-[200px] w-full bg-gray-100 px-4 py-3 rounded mb-12 text-center">Thông tin mới nhất</p>

        <div class="flex flex-wrap gap-6 justify-center items-center flex-col md:flex-row">
            @foreach ($trending as $item)
                <a class="md:w-[23%] w-full border-b-[1px] flex flex-row md:flex-col gap-6 pb-6"
                    href="/tin-tuc/{{ $item->category->slug }}/{{ $item->slug }}">
                    <div class="h-[200px] max-h-[200px]">

                        <img class="w-full max-h-[200px] lazy object-contain"
                            data-src="{{ asset('storage/' . $item->image) }}" alt="img trending">
                    </div>
                    <div class="flex gap-6 flex-col w-full pr-5 md:pr-0">
                        <h3 class="font-bold text-title-1B font-2xl text-eclip-one-line block">{{ $item->title }}</h3>

                        <p class="text-eclip h-[52px]">{{ strip_tags($item->content) }}</p>

                        <p class="text-sm text-text-888">{{ $item->created_at }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <a class="mt-10 m-auto flex gap-2 text-white font-bold rounded-full bg-radient-yellow max-w-[156px] items-center justify-center p-2 md:p-4"
        href="/tin-tuc/{{ NEW_ALL }}">Xem thêm <i class="hidden md:block fa-solid fa-arrow-right"></i></a>
</div>
