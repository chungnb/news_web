<div class="text-center w-full md:py-16 py-10 px-8 hidden-observe"
    style="background-image: url('{{ asset('images/banner/lvkd-number-banner.png') }}'); background-position: bottom;">
    <h2 class="text-xl md:text-3xl xl:text-[56px] text-white font-bold mt-6">Thành tựu nổi bật</h2>

    <p class="text-ct_mb md:text-ct_tl xl:text-ct_dt text-white my-6 md:w-2/4 w-full m-auto">Chúng tôi luôn nỗ lực không
        ngừng để nâng cao năng lực và hoàn thiện chất lượng dịch vụ thông qua việc đạt được
        nhiều thành tựu và chứng nhận uy tín trong nhiều lĩnh vực.</p>

    <div class="flex justify-evenly items-center flex-wrap">
        <div class="w-2/4 md:w-1/4">
            <p id="nation-count" class="text-radient-yellow xl:text-[64px] text-xl sm:mb-4 sm:text-[40px] font-bold mb-0">
                15</p>
            <span class="sm:text-2xl text-xl text-white font-semibold">Quốc gia</span>
        </div>
        <div class="w-2/4 md:w-1/4">
            <p id="project-count"
                class="text-radient-yellow xl:text-[64px] text-xl sm:mb-4 sm:text-[40px] font-bold mb-0">400+</p>
            <span class="sm:text-2xl text-xl text-white font-semibold">Dự án</span>
        </div>
        <div class="w-2/4 md:w-1/4">
            <p id="good-count" class="text-radient-yellow xl:text-[64px] text-xl sm:mb-4 sm:text-[40px] font-bold mb-0">
                99%</p>
            <span class="sm:text-2xl text-xl text-white font-semibold">Hài lòng</span>
        </div>
        <div class="w-2/4 md:w-1/4">
            <p id="customer-count"
                class="text-radient-yellow xl:text-[64px] text-xl sm:mb-4 sm:text-[40px] font-bold mb-0">2000.000+</p>
            <span class="sm:text-2xl text-xl text-white font-semibold">Khách hàng</span>
        </div>
    </div>

    <div class="sm:mt-14 mt-8">
        <div class="swiper_archievement w-full overflow-hidden mt-12">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="lazy w-[60px] md:w-auto"
                        data-src="{{ asset('images/bank/acb.png') }}" alt="acb bank"></div>
                <div class="swiper-slide"><img class="lazy w-[60px] md:w-auto"
                        data-src="{{ asset('images/bank/tpbank.png') }}" alt="tp bank"></div>
                <div class="swiper-slide"><img class="lazy w-[60px] md:w-auto"
                        data-src="{{ asset('images/bank/coopbank.png') }}" alt="coop bank"></div>
                <div class="swiper-slide"><img class="lazy w-[60px] md:w-auto"
                        data-src="{{ asset('images/bank/vietcombank.png') }}" alt="vietcombank"></div>
                <div class="swiper-slide"><img class="lazy w-[60px] md:w-auto"
                        data-src="{{ asset('images/bank/hbr.png') }}" alt="hbr"></div>
                <div class="swiper-slide"><img class="lazy w-[60px] md:w-auto"
                        data-src="{{ asset('images/bank/mbbank.png') }}" alt="mb bank"></div>
                <div class="swiper-slide"><img class="lazy w-[60px] md:w-auto"
                        data-src="{{ asset('images/bank/msb.png') }}" alt="msb bank"></div>
                <div class="swiper-slide"><img class="lazy w-[60px] md:w-auto"
                        data-src="{{ asset('images/bank/ncb.png') }}" alt="ncb bank"></div>
                <div class="swiper-slide"><img class="lazy w-[60px] md:w-auto"
                        data-src="{{ asset('images/bank/ocb.png') }}" alt="ocb bank"></div>
                <div class="swiper-slide"><img class="lazy w-[60px] md:w-auto"
                        data-src="{{ asset('images/bank/pgbank.png') }}" alt="pg bank"></div>
                <div class="swiper-slide"><img class="lazy w-[60px] md:w-auto"
                        data-src="{{ asset('images/bank/seabank.png') }}" alt="sea bank"></div>
                <div class="swiper-slide"><img class="lazy w-[60px] md:w-auto"
                        data-src="{{ asset('images/bank/vibbank.png') }}" alt="vib bank"></div>
                <div class="swiper-slide"><img class="lazy w-[60px] md:w-auto"
                        data-src="{{ asset('images/bank/vpbank.png') }}" alt="vp bank"></div>
                <div class="swiper-slide"><img class="lazy w-[60px] md:w-auto"
                        data-src="{{ asset('images/bank/hdbank.png') }}" alt="hd bank"></div>
                <div class="swiper-slide"><img class="lazy w-[60px] md:w-auto"
                        data-src="{{ asset('images/bank/vietabank.png') }}" alt="vietabank"></div>
            </div>

        </div>
    </div>
</div>

<script>
    function animateNumber(finalNumber, duration = 5000, startNumber = 0, callback) {
        const startTime = performance.now()

        function updateNumber(currentTime) {
            const elapsedTime = currentTime - startTime
            if (elapsedTime > duration) {
                callback(finalNumber)
            } else {
                const rate = elapsedTime / duration
                const currentNumber = Math.round(rate * finalNumber)
                callback(currentNumber)
                requestAnimationFrame(updateNumber)
            }
        }
        requestAnimationFrame(updateNumber)
    }

    document.addEventListener('DOMContentLoaded', function() {
        animateNumber(15, 5000, 0, function(number) {
            const formattedNumber = number.toLocaleString()
            document.getElementById('nation-count').innerText = formattedNumber
        })

        animateNumber(400, 5000, 0, function(number) {
            const formattedNumber = number.toLocaleString()
            document.getElementById('project-count').innerText = formattedNumber + '+'
        })

        animateNumber(99, 5000, 0, function(number) {
            const formattedNumber = number.toLocaleString()
            document.getElementById('good-count').innerText = formattedNumber + '%'
        })

        animateNumber(2000000, 5000, 0, function(number) {
            const formattedNumber = number.toLocaleString()
            document.getElementById('customer-count').innerText = formattedNumber + '+'
        })
    })
</script>

<style>
    .swiper_archievement {
        height: 100px;
    }



    .swiper_archievement .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: white;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper_archievement>.swiper-wrapper {
        transition-timing-function: linear;
    }
</style>
