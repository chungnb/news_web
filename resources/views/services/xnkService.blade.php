@extends('layout.layout')

@section('seo_title', $seoPageLvkd->xnk_seo_title ?? 'Xuất nhập khẩu Đức Tín Groups')
@section('seo_description', $seoPageLvkd->xnk_seo_description)
@section('seo_keywords', $seoPageLvkd->xnk_seo_keywords ?? 'Xuất nhập khẩu Đức Tín Groups')

@section('content')
    <div class="w-full relative">
        <img class="lazy w-full" data-src="{{ asset('images/banner/services/xnk.png') }}" alt="banner xuat nhap khau">
        <div class="service-banner-content absolute top-0 left-0 xl:w-[55%] w-full px-4 md:w-[80%] md:px-0">
            <h1 class="xl:text-[56px] sm:text-[30px] text-base font-bold text-white leading-normal">
                {{ $seoPageLvkd->xnk_seo_heading ?? 'Dịch vụ xuất nhập khẩu' }}</h1>

            <p class="text-white xl:text-xl md:text-lg text-xs mt-2 md:mt-8 xl:mt-10">Đức Tín Group cung cấp các giải pháp
                xuất nhập khẩu toàn
                diện, giúp doanh nghiệp của bạn tiếp cận thị trường quốc tế một cách nhanh chóng và hiệu quả.</p>
        </div>
    </div>
    <div class="w-full xl:mb-20 mb-12">
        <div class="w-full xl:w-[80%] px-4 md:px-0 mt-8 xl:mt-14 m-auto sm:mb-[72px] mb-10">
            <h2 class="line-text-bottom text-[28px] xl:text-[56px] text-h2 font-bold mt-6 text-center">Dịch vụ của chúng tôi
            </h2>

            <p class="mt-10 text-bl-222 text-sm md:text-lg text-center w-full md:w-[80%] m-auto">Với nhiều năm kinh nghiệm
                trong ngành và mạng
                lưới
                đối tác rộng khắp, chúng tôi cam kết mang đến cho khách hàng
                những giải pháp xuất nhập khẩu toàn diện và hiệu quả nhất. Chúng tôi luôn đảm bảo rằng các quy trình xuất
                nhập
                khẩu diễn ra nhanh chóng, an toàn và tuân thủ mọi quy định pháp luật, giúp doanh nghiệp của bạn tiếp cận thị
                trường quốc tế một cách thuận lợi.</p>

            {{-- data --}}
            <div class="mt-10 xl:mt-[72px] flex flex-col gap-10 hidden-observe">
                <div
                    class="flex flex-col-reverse md:flex-row justify-center items-center gap-4 p-4 text-center border-[1px] border-gray-200 rounded-3xl">
                    <div class="w-full">
                        <h3 class="text-mb md:text-tl xl:text-dt font-bold">Xuất Khẩu</h3>

                        <p class="text-ct_mb md:text-ct_tl xl:text-ct_dt text-bl-222 mt-6">
                            Với nhiều năm kinh nghiệm trong ngành và mạng lưới đối tác rộng khắp, chúng tôi cam kết mang đến
                            cho khách hàng những giải pháp xuất nhập khẩu toàn diện và hiệu quả nhất. Chúng tôi luôn đảm bảo
                            rằng các quy trình xuất nhập khẩu diễn ra nhanh chóng, an toàn và tuân thủ mọi quy định pháp
                            luật, giúp doanh nghiệp của bạn tiếp cận thị trường quốc tế một cách thuận lợi.
                        </p>
                    </div>
                    <div class="rounded-3xl w-full">
                        <img class="lazy max-h-[457px] object-contain w-full"
                            data-src="{{ asset('images/banner/services/xnk-1.png') }}" alt="Image nền tảng bán hàng">
                    </div>
                </div>
                <div
                    class="flex flex-col md:flex-row justify-center items-center gap-4 p-4 text-center border-[1px] border-gray-200 rounded-3xl">
                    <div class="rounded-3xl w-full">
                        <img class="lazy max-h-[457px] object-contain w-full"
                            data-src="{{ asset('images/banner/services/xnk-2.png') }}" alt="Image nền tảng bán hàng">
                    </div>
                    <div class="w-full">
                        <h3 class="text-mb md:text-tl xl:text-dt font-bold">Nhập Khẩu</h3>

                        <p class="text-ct_mb md:text-ct_tl xl:text-ct_dt text-bl-222 mt-6">
                            Chúng tôi cung cấp dịch vụ nhập khẩu hàng hóa từ khắp nơi trên thế giới, đảm bảo sản phẩm về đến
                            kho của bạn một cách an toàn và đúng tiến độ. Dịch vụ nhập khẩu của Đức Tín Group không chỉ đơn
                            thuần là vận chuyển mà còn bao gồm việc tư vấn chọn lựa nguồn hàng, đánh giá nhà cung cấp, và
                            quản lý rủi ro, giúp bạn yên tâm về chất lượng và nguồn gốc của sản phẩm.
                        </p>
                    </div>
                </div>
                <div
                    class="flex flex-col-reverse md:flex-row justify-center items-center gap-4 p-4 text-center border-[1px] border-gray-200 rounded-3xl">
                    <div class="w-full">
                        <h3 class="text-mb md:text-tl xl:text-dt font-bold">Hỗ Trợ Pháp Lý</h3>

                        <p class="text-ct_mb md:text-ct_tl xl:text-ct_dt text-bl-222 mt-6">
                            Đức Tín Group cung cấp dịch vụ tư vấn và hỗ trợ pháp lý toàn diện, giúp doanh nghiệp tuân thủ
                            các quy định và thủ tục pháp lý liên quan đến xuất nhập khẩu. Chúng tôi sẽ đồng hành cùng bạn
                            trong việc giải quyết các vấn đề pháp lý, đảm bảo rằng mọi giao dịch đều hợp pháp và không gặp
                            phải rắc rối với các cơ quan chức năng.
                        </p>
                    </div>
                    <div class="rounded-3xl w-full">
                        <img class="lazy max-h-[457px] object-contain w-full"
                            data-src="{{ asset('images/banner/services/xnk-3.png') }}" alt="Image nền tảng bán hàng">
                    </div>
                </div>
                <div
                    class="flex flex-col md:flex-row justify-center items-center gap-4 p-4 text-center border-[1px] border-gray-200 rounded-3xl">
                    <div class="rounded-3xl w-full">
                        <img class="max-h-[457px] object-contain w-full"
                            src="{{ asset('images/banner/services/xnk-4.png') }}" alt="Image nền tảng bán hàng">
                    </div>
                    <div class="w-full">
                        <h3 class="text-mb md:text-tl xl:text-dt font-bold">Vận Tải và Logistics</h3>

                        <p class="text-ct_mb md:text-ct_tl xl:text-ct_dt text-bl-222 mt-6">
                            Dịch vụ vận tải và logistics của chúng tôi được thiết kế để tối ưu hóa chi phí và thời gian vận
                            chuyển. Với mạng lưới vận tải rộng khắp và đội ngũ nhân viên giàu kinh nghiệm, chúng tôi đảm bảo
                            hàng hóa của bạn được vận chuyển một cách nhanh chóng và an toàn. Chúng tôi cung cấp các giải
                            pháp logistics toàn diện từ lưu kho, quản lý hàng tồn, đến phân phối cuối cùng.
                        </p>
                    </div>
                </div>

            </div>


        </div>
        @include('component.buisiness.achievements')

        @include('component.buisiness.tipycalProject')
    </div>
@endsection
