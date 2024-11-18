@props(['slides'])
<div class="swiper home-slide w-full">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        @foreach ($slides as $slide)
            <div class="swiper-slide relative">
                <img class="lazy slide-image" data-src="{{ asset('storage/' . $slide->image) }}"
                    alt="{{ $slide->content }}">
                <div class="absolute home-slide__content px-4 py-8 w-full md:w-4/5 xl:w-3/5 slide-text">
                    <span>
                        <h3 class="text-white font-bold md:text-[32px] xl:text-[48px] leading-normal">
                            {!! $slide->title !!}</h3>
                        <p class="text-white md:text-[20px] xl:text-[28px] mt-6 leading-normal">{{ $slide->content }}</p>
                    </span>
                </div>
            </div>
        @endforeach
    </div>
</div>
