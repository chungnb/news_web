@extends('layout.layout')

@section('seo_title', $seoPage->about_seo_title ?? 'Về Đức Tín Groups')
@section('seo_description', $seoPage->about_seo_description)
@section('seo_keywords', $seoPage->about_seo_keywords ?? 'Về Đức Tín Groups')

@section('content')
    @include('component.bannerSlide', ['slides' => $slides])

    <div
        class="flex flex-col md:flex-row gap-4 w-full xl:w-[80%] px-4 md:px-0 m-auto py-16 md:items-center justify-center hidden-observe">
        <div class="w-full">
            <h1 class="text-[28px] md:text-[56px] text-h2 font-bold line-text-bottom bottom_right text-left">
                {{ $seoPage->about_seo_heading ?? 'Đức Tín Group' }}</h1>
            <div class="mt-10 mb-6">
                <p>Chúng tôi tự hào cung cấp dịch vụ thương mại điện tử đa quốc gia, mở rộng cánh cửa cho doanh nghiệp vươn
                    tầm quốc tế. Chúng tôi chuyên tư vấn chiến lược kinh doanh toàn cầu, xây dựng và quản lý gian hàng trực
                    tuyến chuyên nghiệp, và đảm bảo vận chuyển hàng hóa an toàn, nhanh chóng.</p>

                <p class="mt-4">Đội ngũ chuyên gia tận tâm và dịch vụ khách hàng đa ngôn ngữ của Đức Tín cam kết mang lại
                    giá trị bền vững và sự hài lòng vượt trội cho khách hàng. Chúng tôi luôn nỗ lực không ngừng để cung cấp
                    những giải pháp hiệu quả nhất, giúp doanh nghiệp thành công và phát triển trong môi trường kinh doanh
                    toàn cầu.</p>
            </div>
            <a class="flex gap-2 text-white font-bold rounded-full bg-radient-yellow max-w-[156px] items-center justify-center p-2 md:p-4"
                href="/gioi-thieu">Xem thêm <i class="hidden md:block fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="w-full">
            <img class="lazy" data-src="{{ asset('images/about-img.png') }}" alt="about us">
        </div>

    </div>

    <div class="home-service-component">
        <div class="flex gap-1 flex-col md:flex-row md:mt-12 hidden-observe">
            <div class="sv-xnk-service w-full h-[300px] md:h-[444px] xl:h-[666px] relative cursor-pointer bg-bottom"
                style="background-image: url({{ asset('images/xnk.png') }})">

                <div class="mask-layer absolute top-0 left-0 w-full h-full opacity-80"></div>
                <div class="home-service-component-more absolute top-[10%] w-[80%] left-10 text-center hidden">

                    <h3
                        class="leading-normal w-full text-white md:text-2xl text-xl font-bold xl:text-[40px] flex-wrap xl:leading-normal	">
                        TẦM NHÌN</h3>

                    <p class="text-white mt-4 mb-10 text-eclip-3">Là lựa chọn uy tín về sản phẩm sức khỏe và sắc đẹp, mang
                        đến trải nghiệm vượt trội cho 10 triệu khách hàng, hiện diện trên 15 quốc gia</p>


                </div>

                <div class="sv-xnk-show flex items-center gap-2 absolute top-[60%] left-[10%]">
                    <h3
                        class="leading-normal w-full text-white md:text-2xl text-xl font-bold xl:text-[40px] flex-wrap xl:leading-normal	">
                        TẦM NHÌN</h3>
                </div>
            </div>
            <div class="ecommerce-service w-full h-[300px] md:h-[444px] xl:h-[666px] relative cursor-pointer bg-bottom"
                style="background-image: url({{ asset('images/tmdt.png') }})">
                <div class="mask-layer absolute top-0 left-0 w-full h-full opacity-80"></div>
                <div class="home-service-component-more absolute top-[10%] w-[80%] left-10 text-center hidden">

                    <h3
                        class="leading-normal w-full text-white md:text-2xl text-xl font-bold xl:text-[40px] flex-wrap xl:leading-normal	">
                        SỨ MỆNH</h3>

                    <p class="text-white mt-4 mb-10 text-eclip-3">Chúng tôi mang đến giải pháp sức khỏe và vẻ đẹp toàn diện
                        bằng trải nghiệm vượt trội nhằm kiến tạo cuộc sống thịnh vượng cho mọi người</p>
                </div>
                <div class="ecommerce-show flex items-center gap-2 absolute top-[60%] left-[10%]">
                    <h3
                        class="leading-normal w-full text-white md:text-2xl text-xl font-bold xl:text-[40px] flex-wrap xl:leading-normal	">
                        SỨ MỆNH</h3>
                </div>
            </div>
            <div class="kd-sx-service w-full h-[300px] md:h-[444px] xl:h-[666px] relative cursor-pointer bg-bottom"
                style="background-image: url({{ asset('images/sx-kd.png') }})">
                <div class="mask-layer absolute top-0 left-0 w-full h-full opacity-80"></div>
                <div class="home-service-component-more absolute top-[10%] w-[80%] left-10 text-center hidden">

                    <h3
                        class="leading-normal w-full text-white md:text-2xl text-xl font-bold xl:text-[40px] flex-wrap xl:leading-normal	">
                        GIÁ TRỊ CỐT LÕI</h3>

                    <p class="text-white mt-4 mb-10 text-eclip-3">MÌNH LÀ GỐC RỄ CỦA MỌI VẤN ĐỀ: Khi một vấn đề xảy ra, hãy
                        đón nhận như một món quà. Chúng ta chỉ có thể học hỏi và trưởng thành khi thấy rõ trách nhiệm của
                        chính mình trong mỗi vấn đề. Từ đó, chủ động đưa ra các giải pháp, lắng nghe trọn vẹn và phối hợp
                        với nhau để đạt được mục tiêu chung. TƯ DUY PHÁT TRIỂN: Sự phát triển và tiềm năng của mỗi người là
                        vô hạn. Bằng việc liên tục học tập, đổi mới, sáng tạo, chúng ta sẽ trở nên giỏi hơn, vượt trội hơn
                        mỗi ngày. TRÂN TRỌNG LỜI NÓI: Trân trọng lời nói của mình bao gồm giữ cam kết, làm đúng quy trình,
                        tiêu chuẩn.</p>



                </div>
                <div class="kd-sx-show flex items-center gap-2 absolute top-[60%] left-[10%]">
                    <h3
                        class="leading-normal w-full text-white md:text-2xl text-xl font-bold xl:text-[40px] flex-wrap xl:leading-normal	">
                        GIÁ TRỊ CỐT LÕI
                    </h3>
                </div>
            </div>
        </div>

        <div class="xl:mt-[72px] mt-10 hidden-observe">
            <h2 class="line-text-bottom text-[24px] md:text-[32px] text-h2 font-bold text-center xl:text-[56px]">Giai đoạn
                phát triển</h2>

            <p class="text-center md:px-4 xl:px-0 md:w-[64%] m-auto mb-12 mt-14">Công ty Cổ phần Thương mại và Xuất nhập
                khẩu Đức Tín (gọi tắt là Đức Tín Group) được thành lập và chính thức đi vào hoạt động từ tháng 11/2019. Đức
                Tín Group mang khát vọng của người Việt trẻ đưa hình ảnh Việt Nam ra thế giới, xây dựng một doanh nghiệp
                toàn cầu. Với tầm nhìn và chiến lược kinh doanh dài hạn, công ty đang vươn mình mạnh mẽ, đạt được những
                thành tựu đáng tự hào trong lĩnh vực thương mại điện tử và xuất nhập khẩu đa nền tảng, đa quốc gia</p>

            <div class="w-full">
                <img class="m-auto lazy" data-src="{{ asset('images/timeline.png') }}" alt="giai doan phat trien">
            </div>
        </div>

        <div class="my-14 bg-[#FBFBFB] hidden-observe">
            <h2 class="line-text-bottom text-[24px] md:text-[32px] text-h2 font-bold text-center xl:text-[56px] mt-8">Ban
                Lãnh đạo công ty
            </h2>

            <div
                class="xl:w-[80%] xl:px-0 px-4 flex items-center flex-col flex-wrap md:flex-row justify-center gap-6 mt-10 m-auto py-8">
                <div class="xl:hidden w-full bg-[#FBFBFB] xl:w-[80%] px-4 md:px-0 m-auto">
                    <div class="swiper swiper-gd-about">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide swiper-slide-about grid-cols-2 gap-3 w-full">
                                <div
                                    class="about-slide-item boder-shadow text-center flex flex-col gap-6 items-center p-8 rounded-lg">
                                    <img class="w-[150px] md:w-[209px] xl:w-[275px] lazy"
                                        data-src="{{ asset('images/GD/gd-1.png') }}" alt="Hoàng Thị Phượng">
                                    <div class="w-full">
                                        <h4 class="xl:text-[28px] md:text-[24px] text-lg text-bl-222 font-bold">Hoàng Thị
                                            Phượng
                                        </h4>

                                        <p class="mt-2 xl:text-lg md:text-md text-sm text-color-444">Giám Đốc Điều Hành</p>
                                    </div>
                                </div>

                                <div
                                    class="about-slide-item boder-shadow text-center flex flex-col gap-6 items-center p-8 rounded-lg">
                                    <img class="w-[150px] md:w-[209px] xl:w-[275px] lazy"
                                        data-src="{{ asset('images/GD/gd-2.png') }}" alt="Nghiêm Văn Tiến">
                                    <div class="w-full">
                                        <h4 class="xl:text-[28px] md:text-[24px] text-lg text-bl-222 font-bold">Nghiêm Văn
                                            Tiến
                                        </h4>

                                        <p class="mt-2 xl:text-lg md:text-md text-sm text-color-444">Tổng Giám Đốc</p>
                                    </div>
                                </div>

                                <div
                                    class="about-slide-item boder-shadow text-center flex flex-col gap-6 items-center p-8 rounded-lg">
                                    <img class="lazy w-[150px] md:w-[209px] xl:w-[275px]"
                                        data-src="{{asset('images/GD/pgd_Nguyen_Thi_Thu_Hoa.png')}}" alt="Nguyễn Thị Thu Hoa">
                                    <div class="w-full">
                                        <h4 class="xl:text-[28px] md:text-[24px] text-lg text-bl-222 font-bold">Nguyễn Thị
                                            Thu Hoa
                                        </h4>

                                        <p class="mt-2 xl:text-lg md:text-md text-sm text-color-444">Phó Tổng Giám Đốc</p>
                                    </div>
                                </div>

                                <div
                                    class="about-slide-item boder-shadow text-center flex flex-col gap-6 items-center p-8 rounded-lg">
                                    <img class="w-[150px] md:w-[209px] xl:w-[275px] lazy"
                                        data-src="{{ asset('images/GD/gd-3.png') }}" alt="">
                                    <div class="w-full">
                                        <h4 class="xl:text-[28px] md:text-[24px] text-lg text-bl-222 font-bold">Nguyễn Thanh
                                            Đoàn
                                        </h4>

                                        <p class="mt-2 xl:text-lg md:text-md text-sm text-color-444">Giám đốc chi nhánh
                                            Darius
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="about-slide-item boder-shadow text-center flex flex-col gap-6 items-center p-8 rounded-lg">
                                    <img class="w-[150px] md:w-[209px] xl:w-[275px] lazy"
                                        data-src="{{ asset('images/GD/gd-4.png') }}" alt="">
                                    <div class="w-full">
                                        <h4 class="xl:text-[28px] md:text-[24px] text-lg text-bl-222 font-bold">Phạm Ngọc
                                            Thiện
                                        </h4>

                                        <p class="mt-2 xl:text-lg md:text-md text-sm text-color-444">Giám đốc chi nhánh
                                            Thành
                                            Hưng
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide swiper-slide-about grid-cols-2 gap-3 w-full">

                                <div
                                    class="about-slide-item boder-shadow text-center flex flex-col gap-6 items-center p-8 rounded-lg">
                                    <img class="lazy w-[150px] md:w-[209px] xl:w-[275px] lazy"
                                        data-src="{{ asset('images/GD/gd-5.png') }}" alt="">
                                    <div class="w-full">
                                        <h4 class="xl:text-[28px] md:text-[24px] text-lg text-bl-222 font-bold">Lê Đình
                                            Luyện
                                        </h4>

                                        <p class="mt-2 xl:text-lg md:text-md text-sm text-color-444">Giám đốc chi nhánh
                                            Luway &
                                            Greatking</p>
                                    </div>
                                </div>

                                <div
                                    class="about-slide-item boder-shadow text-center flex flex-col gap-6 items-center p-8 rounded-lg">
                                    <img class="lazy w-[150px] md:w-[209px] xl:w-[275px]"
                                        data-src="{{ asset('images/GD/gd-6.png') }}" alt="">
                                    <div class="w-full">
                                        <h4 class="xl:text-[28px] md:text-[24px] text-lg text-bl-222 font-bold">Nguyễn Tiến
                                            Ba
                                        </h4>

                                        <p class="mt-2 xl:text-lg md:text-md text-sm text-color-444">Giám đốc chi nhánh
                                            Bali
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="about-slide-item boder-shadow text-center flex flex-col gap-6 items-center p-8 rounded-lg">
                                    <img class="lazy w-[150px] md:w-[209px] xl:w-[275px]"
                                        data-src="{{ asset('images/GD/gd-7.png') }}" alt="">
                                    <div class="w-full">
                                        <h4 class="xl:text-[28px] md:text-[24px] text-lg text-bl-222 font-bold">Ta Quang
                                            Văn
                                        </h4>

                                        <p class="mt-2 xl:text-lg md:text-md text-sm text-color-444">Giám đốc chi nhánh
                                            Fushi
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="about-slide-item boder-shadow text-center flex flex-col gap-6 items-center p-8 rounded-lg">
                                    <img class="lazy w-[150px] md:w-[209px] xl:w-[275px]"
                                        data-src="{{ asset('images/GD/gd-8.png') }}" alt="">
                                    <div class="w-full">
                                        <h4 class="xl:text-[28px] md:text-[24px] text-lg text-bl-222 font-bold">Nguyễn Đình
                                            Hải
                                        </h4>

                                        <p class="mt-2 xl:text-lg md:text-md text-sm text-color-444">Giám đốc chi nhánh BTA
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="hidden xl:block w-full bg-[#FBFBFB] xl:w-[80%] px-4 md:px-0 m-auto hidden-observe">
                    <div class="swiper swiper-gd-about">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide swiper-slide-about grid-cols-4 gap-3 w-full">
                                <div
                                    class="about-slide-item boder-shadow text-center flex flex-col gap-6 items-center p-8 rounded-lg">
                                    <img class="lazy w-[150px] md:w-[209px] xl:w-[275px]"
                                        data-src="{{ asset('images/GD/gd-1.png') }}" alt="Hoàng Thị Phượng">
                                    <div class="w-full">
                                        <h4 class="xl:text-[28px] md:text-[24px] text-lg text-bl-222 font-bold">Hoàng Thị
                                            Phượng
                                        </h4>

                                        <p class="mt-2 xl:text-lg md:text-md text-sm text-color-444">Giám đốc điều hành</p>
                                    </div>
                                </div>

                                <div
                                    class="about-slide-item boder-shadow text-center flex flex-col gap-6 items-center p-8 rounded-lg">
                                    <img class="lazy w-[150px] md:w-[209px] xl:w-[275px]"
                                        data-src="{{ asset('images/GD/gd-2.png') }}" alt="Nghiêm Văn Tiến">
                                    <div class="w-full">
                                        <h4 class="xl:text-[28px] md:text-[24px] text-lg text-bl-222 font-bold">Nghiêm Văn
                                            Tiến
                                        </h4>

                                        <p class="mt-2 xl:text-lg md:text-md text-sm text-color-444">Tổng Giám Đốc</p>
                                    </div>
                                </div>
                                <div
                                    class="about-slide-item boder-shadow text-center flex flex-col gap-6 items-center p-8 rounded-lg">
                                    <img class="lazy w-[150px] md:w-[209px] xl:w-[275px]"
                                        data-src="{{asset('images/GD/pgd_Nguyen_Thi_Thu_Hoa.png')}}" alt="Nguyễn Thị Thu Hoa">
                                    <div class="w-full">
                                        <h4 class="xl:text-[28px] md:text-[24px] text-lg text-bl-222 font-bold">Nguyễn Thị
                                            Thu Hoa
                                        </h4>

                                        <p class="mt-2 xl:text-lg md:text-md text-sm text-color-444">Phó Tổng Giám Đốc</p>
                                    </div>
                                </div>
                                <div
                                    class="about-slide-item boder-shadow text-center flex flex-col gap-6 items-center p-8 rounded-lg">
                                    <img class="lazy w-[150px] md:w-[209px] xl:w-[275px]"
                                        data-src="{{ asset('images/GD/gd-3.png') }}" alt="">
                                    <div class="w-full">
                                        <h4 class="xl:text-[28px] md:text-[24px] text-lg text-bl-222 font-bold">Nguyễn
                                            Thanh
                                            Đoàn
                                        </h4>

                                        <p class="mt-2 xl:text-lg md:text-md text-sm text-color-444">Giám đốc chi nhánh
                                            Darius
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="about-slide-item boder-shadow text-center flex flex-col gap-6 items-center p-8 rounded-lg">
                                    <img class="lazy w-[150px] md:w-[209px] xl:w-[275px]"
                                        data-src="{{ asset('images/GD/gd-4.png') }}" alt="">
                                    <div class="w-full">
                                        <h4 class="xl:text-[28px] md:text-[24px] text-lg text-bl-222 font-bold">Phạm Ngọc
                                            Thiện
                                        </h4>

                                        <p class="mt-2 xl:text-lg md:text-md text-sm text-color-444">Giám đốc chi nhánh
                                            Thành
                                            Hưng
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="about-slide-item boder-shadow text-center flex flex-col gap-6 items-center p-8 rounded-lg">
                                    <img class="lazy w-[150px] md:w-[209px] xl:w-[275px]"
                                        data-src="{{ asset('images/GD/gd-5.png') }}" alt="">
                                    <div class="w-full">
                                        <h4 class="xl:text-[28px] md:text-[24px] text-lg text-bl-222 font-bold">Lê Đình
                                            Luyện
                                        </h4>

                                        <p class="mt-2 xl:text-lg md:text-md text-sm text-color-444">Giám đốc chi nhánh
                                            Luway &
                                            Greatking</p>
                                    </div>
                                </div>
                                <div
                                    class="about-slide-item boder-shadow text-center flex flex-col gap-6 items-center p-8 rounded-lg">
                                    <img class="lazy w-[150px] md:w-[209px] xl:w-[275px]"
                                        data-src="{{ asset('images/GD/gd-6.png') }}" alt="">
                                    <div class="w-full">
                                        <h4 class="xl:text-[28px] md:text-[24px] text-lg text-bl-222 font-bold">Nguyễn Tiến
                                            Ba
                                        </h4>

                                        <p class="mt-2 xl:text-lg md:text-md text-sm text-color-444">Giám đốc chi nhánh
                                            Bali
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="about-slide-item boder-shadow text-center flex flex-col gap-6 items-center p-8 rounded-lg">
                                    <img class="lazy w-[150px] md:w-[209px] xl:w-[275px]"
                                        data-src="{{ asset('images/GD/gd-7.png') }}" alt="">
                                    <div class="w-full">
                                        <h4 class="xl:text-[28px] md:text-[24px] text-lg text-bl-222 font-bold">Ta Quang
                                            Văn
                                        </h4>

                                        <p class="mt-2 xl:text-lg md:text-md text-sm text-color-444">Giám đốc chi nhánh
                                            Fushi
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="about-slide-item boder-shadow text-center flex flex-col gap-6 items-center p-8 rounded-lg">
                                    <img class="lazy w-[150px] md:w-[209px] xl:w-[275px]"
                                        data-src="{{ asset('images/GD/gd-8.png') }}" alt="">
                                    <div class="w-full">
                                        <h4 class="xl:text-[28px] md:text-[24px] text-lg text-bl-222 font-bold">Nguyễn Đình
                                            Hải
                                        </h4>

                                        <p class="mt-2 xl:text-lg md:text-md text-sm text-color-444">Giám đốc chi nhánh BTA
                                        </p>
                                    </div>
                                </div>
                            </div>
                            {{-- 
                        <div class="swiper-slide swiper-slide-about grid-cols-4 gap-3 w-full">
                            <div
                                class="about-slide-item boder-shadow text-center flex flex-col gap-6 items-center p-8 rounded-lg">
                                <img class="w-[150px] md:w-[209px] xl:w-[275px]" src="{{ asset('images/GD/gd-1.png') }}"
                                    alt="Hoàng Thị Phượng">
                                <div class="w-full">
                                    <h4 class="xl:text-[28px] md:text-[24px] text-lg text-bl-222 font-bold">Hoàng Thị
                                        Phượng
                                    </h4>

                                    <p class="mt-2 xl:text-lg md:text-md text-sm text-color-444">Giám đốc sáng tạo kiêm
                                        giám đốc
                                        điều hành</p>
                                </div>
                            </div>

                            <div
                                class="about-slide-item boder-shadow text-center flex flex-col gap-6 items-center p-8 rounded-lg">
                                <img class="w-[150px] md:w-[209px] xl:w-[275px]" src="{{ asset('images/GD/gd-2.png') }}"
                                    alt="Nghiêm Văn Tiến">
                                <div class="w-full">
                                    <h4 class="xl:text-[28px] md:text-[24px] text-lg text-bl-222 font-bold">Nghiêm Văn Tiến
                                    </h4>

                                    <p class="mt-2 xl:text-lg md:text-md text-sm text-color-444">Tổng Giám Đốc</p>
                                </div>
                            </div>
                            <div
                                class="about-slide-item boder-shadow text-center flex flex-col gap-6 items-center p-8 rounded-lg">
                                <img class="w-[150px] md:w-[209px] xl:w-[275px]" src="{{ asset('images/GD/gd-3.png') }}"
                                    alt="">
                                <div class="w-full">
                                    <h4 class="xl:text-[28px] md:text-[24px] text-lg text-bl-222 font-bold">Nguyễn Thanh
                                        Đoàn
                                    </h4>

                                    <p class="mt-2 xl:text-lg md:text-md text-sm text-color-444">Giám đốc chi nhánh Darius
                                    </p>
                                </div>
                            </div>
                            <div
                                class="about-slide-item boder-shadow text-center flex flex-col gap-6 items-center p-8 rounded-lg">
                                <img class="w-[150px] md:w-[209px] xl:w-[275px]" src="{{ asset('images/GD/gd-4.png') }}"
                                    alt="">
                                <div class="w-full">
                                    <h4 class="xl:text-[28px] md:text-[24px] text-lg text-bl-222 font-bold">Phạm Ngọc Thiện
                                    </h4>

                                    <p class="mt-2 xl:text-lg md:text-md text-sm text-color-444">Giám đốc chi nhánh Thành
                                        Hưng
                                    </p>
                                </div>
                            </div>
                            <div
                                class="about-slide-item boder-shadow text-center flex flex-col gap-6 items-center p-8 rounded-lg">
                                <img class="w-[150px] md:w-[209px] xl:w-[275px]" src="{{ asset('images/GD/gd-5.png') }}"
                                    alt="">
                                <div class="w-full">
                                    <h4 class="xl:text-[28px] md:text-[24px] text-lg text-bl-222 font-bold">Lê Đình Luyện
                                    </h4>

                                    <p class="mt-2 xl:text-lg md:text-md text-sm text-color-444">Giám đốc chi nhánh Luway &
                                        Greatking</p>
                                </div>
                            </div>
                            <div
                                class="about-slide-item boder-shadow text-center flex flex-col gap-6 items-center p-8 rounded-lg">
                                <img class="w-[150px] md:w-[209px] xl:w-[275px]" src="{{ asset('images/GD/gd-6.png') }}"
                                    alt="">
                                <div class="w-full">
                                    <h4 class="xl:text-[28px] md:text-[24px] text-lg text-bl-222 font-bold">Nguyễn Tiến Ba
                                    </h4>

                                    <p class="mt-2 xl:text-lg md:text-md text-sm text-color-444">Giám đốc chi nhánh Bali
                                    </p>
                                </div>
                            </div>
                            <div
                                class="about-slide-item boder-shadow text-center flex flex-col gap-6 items-center p-8 rounded-lg">
                                <img class="w-[150px] md:w-[209px] xl:w-[275px]" src="{{ asset('images/GD/gd-7.png') }}"
                                    alt="">
                                <div class="w-full">
                                    <h4 class="xl:text-[28px] md:text-[24px] text-lg text-bl-222 font-bold">Ta Quang Văn
                                    </h4>

                                    <p class="mt-2 xl:text-lg md:text-md text-sm text-color-444">Giám đốc chi nhánh Fushi
                                    </p>
                                </div>
                            </div>
                            <div
                                class="about-slide-item boder-shadow text-center flex flex-col gap-6 items-center p-8 rounded-lg">
                                <img class="w-[150px] md:w-[209px] xl:w-[275px]" src="{{ asset('images/GD/gd-8.png') }}"
                                    alt="">
                                <div class="w-full">
                                    <h4 class="xl:text-[28px] md:text-[24px] text-lg text-bl-222 font-bold">Phạm Ngọc Thiện
                                    </h4>

                                    <p class="mt-2 xl:text-lg md:text-md text-sm text-color-444">Giám đốc chi nhánh BTA</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div> --}}

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            </div>
        </div>


        <div class="moment-slide mb-10 xl:mb-20 mt-10 hidden-observe">
            <h2 class="line-text-bottom text-[24px] md:text-[32px] text-h2 font-bold text-center xl:text-[56px] mb-16">Văn
                hóa doanh
                nghiệp
            </h2>

            <p class="text-center my-8 w-[80%] m-auto">
                Văn hóa doanh nghiệp của Đức Tín Group chú trọng vào xây dựng và phát triển con người. Lấy con người làm cốt
                lõi
                với những đức tính tốt đẹp nhất. Đề cao giá trị của con người, của khách hàng. Con người phát triển – tập
                thể
                phát triển – doanh nghiệp phát triển.
            </p>

            <div class="collection xl:h-[350px] md:h-[280px] h-[250px]">
                <div class="swiper-recruitment h-full">
                    <div class="swiper-wrapper">
                        <div class="content swiper-slide">
                            <img class="lazy" data-src="{{ asset('images/culture/culture-1.png') }}"
                                alt="img momment Duc Tin">
                        </div>
                        <div class="content swiper-slide">
                            <img class="lazy" data-src="{{ asset('images/culture/culture-2.png') }}"
                                alt="img momment Duc Tin">
                        </div>
                        <div class="content swiper-slide">
                            <img class="lazy" data-src="{{ asset('images/culture/culture-3.png') }}"
                                alt="img momment Duc Tin">
                        </div>
                        <div class="content swiper-slide">
                            <img class="lazy" data-src="{{ asset('images/culture/culture-4.png') }}"
                                alt="img momment Duc Tin">
                        </div>
                        <div class="content swiper-slide">
                            <img class="lazy" data-src="{{ asset('images/culture/culture-5.png') }}"
                                alt="img momment Duc Tin">
                        </div>
                        <div class="content swiper-slide">
                            <img class="lazy" data-src="{{ asset('images/culture/culture-6.png') }}"
                                alt="img momment Duc Tin">
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination-recruitment"></div>
                </div>
            </div>
        </div>
    @endsection
