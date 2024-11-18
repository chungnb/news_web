@extends('layout.layout')

@section('seo_title', $seoPage->home_seo_title ?? 'Home Page Duc Tin')
@section('seo_description', $seoPage->home_seo_description)
@section('seo_keywords', $seoPage->home_seo_keywords)

@section('content')
    @include('component.bannerSlide', ['slides' => $slides])
    <div
        class="hidden-observe flex flex-col md:flex-row gap-4 w-full xl:w-[80%] px-4 md:px-0 m-auto py-16 md:items-center justify-center">
        <div class="w-full">
            <h1 class="text-[28px] md:text-[56px] text-h2 font-bold line-text-bottom bottom_right text-left">
                {{ $seoPage->home_seo_heading ?? 'Đức Tín Group' }}
            </h1>
            <div class="mt-10 mb-6">
                <p>Chúng tôi tự hào cung cấp dịch vụ thương mại điện tử đa quốc gia, mở rộng cánh cửa cho doanh nghiệp vươn
                    tầm quốc tế. Chúng tôi chuyên tư vấn chiến lược kinh doanh toàn cầu, xây dựng và quản lý gian hàng trực
                    tuyến chuyên nghiệp, và đảm bảo vận chuyển hàng hóa an toàn, nhanh chóng.</p>

                <p class="mt-4">Với dịch vụ khách hàng đa ngôn ngữ và đội ngũ chuyên gia tận tâm, Đức Tín cam kết mang lại
                    giá trị bền vững và sự hài lòng vượt trội cho khách hàng. Chúng tôi luôn đặt lợi ích của khách hàng lên
                    hàng đầu, không ngừng nỗ lực để đáp ứng và vượt qua mọi mong đợi.</p>
            </div>
            <a class="flex gap-2 text-white font-bold rounded-full bg-radient-yellow max-w-[156px] items-center justify-center p-2 md:p-4"
                href="/gioi-thieu">Xem thêm <i class="hidden md:block fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="w-full">
            <img class="lazy" data-src="{{ asset('images/about-img.png') }}" alt="about us">
        </div>

    </div>

    <div id="linh-vuc-kinh-doanh"></div>
    <div class="home-service-component">
        <h2 class="line-text-bottom text-[24px] md:text-[32px] text-h2 font-bold text-center xl:text-[56px]">Lĩnh vực kinh
            doanh</h2>

        <div class="flex gap-1 flex-col md:flex-row md:mt-12 hidden-observe mt-8">
            <div class="sv-xnk-service w-full h-[300px] md:h-[444px] xl:h-[666px] relative cursor-pointer bg-bottom"
                style="background-image: url({{ asset('images/xnk.png') }})">

                <div class="mask-layer absolute top-0 left-0 w-full h-full opacity-80"></div>
                <div class="home-service-component-more absolute top-[10%] w-[80%] left-10 hidden">

                    <h3
                        class="leading-normal w-full text-white md:text-2xl text-xl font-bold xl:text-[40px] flex-wrap xl:leading-normal	">
                        Xuất Nhập Khẩu </h3>

                    <p class="text-white mt-4 mb-10 text-eclip-3">Chúng tôi chuyên cung cấp dịch vụ xuất nhập khẩu toàn
                        diện, từ kết nối với nhà cung cấp hàng đầu, tối
                        ưu hóa quy trình vận chuyển đến hoàn tất thủ tục hải quan, đảm bảo hàng hóa của bạn luôn đến nơi an
                        toàn và đúng lịch trình.</p>

                    <a class="text-white font-bold rounded-full text-center py-4 px-6 bg-radient-yellow max-w-[156px]"
                        href="/linh-vuc-kinh-doanh/dich-vu-xuat-nhap-khau">Xem thêm</a>

                </div>

                <div class="sv-xnk-show flex items-center gap-2 absolute top-[60%] left-[10%]">
                    <h3
                        class="leading-normal w-full text-white md:text-2xl text-xl font-bold xl:text-[40px] flex-wrap xl:leading-normal	">
                        Xuất Nhập Khẩu </h3>
                    <i class="fa-solid fa-arrow-right text-white text-[32px]"></i>
                </div>
            </div>
            <div class="ecommerce-service w-full h-[300px] md:h-[444px] xl:h-[666px] relative cursor-pointer bg-bottom"
                style="background-image: url({{ asset('images/tmdt.png') }})">
                <div class="mask-layer absolute top-0 left-0 w-full h-full opacity-80"></div>
                <div class="home-service-component-more absolute top-[10%] w-[80%] left-10 hidden">

                    <h3
                        class="leading-normal w-full text-white md:text-2xl text-xl font-bold xl:text-[40px] flex-wrap xl:leading-normal	">
                        Thương Mại Điện Tử</h3>

                    <p class="text-white mt-4 mb-10 text-eclip-3">Chúng tôi tự hào kết nối hàng triệu khách hàng và doanh
                        nghiệp trên toàn thế giới. Hệ thống của chúng tôi mang đến trải nghiệm mua sắm trực tuyến liền mạch,
                        an toàn và đa dạng với hàng ngàn sản phẩm chất lượng. Đội ngũ hỗ trợ khách hàng chuyên nghiệp luôn
                        sẵn sàng giúp đỡ, đảm bảo mọi giao dịch được thực hiện một cách suôn sẻ. Nhờ đó, chúng tôi giúp các
                        doanh nghiệp mở rộng cơ hội kinh doanh không biên giới và tiếp cận khách hàng toàn cầu.</p>

                    <a class="text-white font-bold rounded-full text-center py-4 px-6 bg-radient-yellow max-w-[156px]"
                        href="/linh-vuc-kinh-doanh/ecommerce">Xem thêm</a>

                </div>
                <div class="ecommerce-show flex items-center gap-2 absolute top-[60%] left-[10%]">
                    <h3
                        class="leading-normal w-full text-white md:text-2xl text-xl font-bold xl:text-[40px] flex-wrap xl:leading-normal	">
                        Thương Mại Điện Tử</h3>
                    <i class="fa-solid fa-arrow-right text-white text-[32px]"></i>
                </div>
            </div>
            <div class="kd-sx-service w-full h-[300px] md:h-[444px] xl:h-[666px] relative cursor-pointer bg-bottom"
                style="background-image: url({{ asset('images/sx-kd.png') }})">
                <div class="mask-layer absolute top-0 left-0 w-full h-full opacity-80"></div>
                <div class="home-service-component-more absolute top-[10%] w-[80%] left-10 hidden">

                    <h3
                        class="leading-normal w-full text-white md:text-2xl text-xl font-bold xl:text-[40px] flex-wrap xl:leading-normal	">
                        Sản Xuất Và Kinh Doanh Mỹ Phẩm, Thực Phẩm Bảo Vệ Sức Khỏe</h3>

                    <p class="text-white mt-4 mb-10 text-eclip-3">Chúng tôi sản xuất và kinh doanh các sản phẩm mỹ phẩm và
                        dược phẩm chất lượng cao, được chứng nhận bởi các tiêu chuẩn quốc tế, đảm bảo an toàn và hiệu quả,
                        đáp ứng nhu cầu làm đẹp và chăm sóc sức khỏe ngày càng cao của người tiêu dùng.</p>

                    <a class="text-white font-bold rounded-full text-center py-4 px-6 bg-radient-yellow max-w-[156px]"
                        href="/linh-vuc-kinh-doanh/kinh-doanh-san-xuat-mi-pham">Xem thêm</a>

                </div>
                <div class="kd-sx-show flex items-center gap-2 absolute top-[60%] left-[10%]">
                    <h3
                        class="leading-normal w-full text-white md:text-2xl text-xl font-bold xl:text-[40px] flex-wrap xl:leading-normal	">
                        Sản Xuất Và Kinh Doanh Mỹ Phẩm, Thực Phẩm Bảo Vệ Sức Khỏe
                    </h3>
                    <i class="fa-solid fa-arrow-right text-white text-[32px]"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="xl:mt-[72px] pt-10 bg-[#FAFAFA] hidden-observe">
        <h2 class="line-text-bottom text-[24px] md:text-[32px] text-h2 font-bold text-center xl:text-[56px]">Phạm vi toàn
            cầu</h2>

        <p class="text-center md:px-4 xl:px-0 md:w-2/4 m-auto mb-12 mt-14">Đức Tín Group tự hào cung cấp dịch vụ xuất nhập
            khẩu và thương mại điện tử đến mọi nơi trên thế giới. Với mạng lưới đối tác toàn cầu và công nghệ hiện đại,
            chúng tôi đảm bảo hàng hóa của bạn được vận chuyển nhanh chóng và an toàn. Đức Tín cam kết đồng hành cùng sự
            phát triển của doanh nghiệp bạn, tối ưu hóa hiệu quả thương mại quốc tế.</p>

        <div class="w-full">
            <img class="m-auto lazy" data-src="{{ asset('images/home-global.png') }}" alt="global image">
        </div>
    </div>

    <div class="my-14 hidden-observe">
        <h2 class="line-text-bottom text-[24px] md:text-[32px] text-h2 font-bold text-center xl:text-[56px]">Tại sao nên lựa
            chọn chúng
            tôi?</h2>

        <div
            class="xl:w-[80%] xl:px-0 px-4 flex items-center flex-col flex-wrap md:flex-row justify-center gap-6 mt-10 m-auto">
            <div class="w-full md:w-[29%] p-4">
                <div class="w-full flex items-center flex-row gap-6 md:flex-col text-center home_why_choose_we">
                    <img class="lazy md:w-[100px] w-[50px] h-[50px] md:h-[100px]"
                        data-src="{{ asset('images/home-we-1.png') }}" alt="Ảnh tại sao nên chọn chúng tôi">
                    <div class="flex flex-col gap-4 mt-6">
                        <h3 class="text-title-1B text-xl md:text[28px] xl:text-[32px] font-bold">Công nghệ hiện đại</h3>
                        <p class="text-bl-222 text-sm xl:text-base md:text-center text-justify">Chúng tôi áp dụng các công
                            nghệ quản lý tiên tiến trong
                            quá trình vận hành và theo dõi, giúp tối ưu
                            hóa chi phí, thời gian giao hàng và đảm bảo hiệu quả thương mại quốc tế.</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-[29%] p-4">
                <div class="w-full flex items-center flex-row gap-6 md:flex-col text-center home_why_choose_we">
                    <img class="lazy md:w-[100px] w-[50px] h-[50px] md:h-[100px]"
                        data-src="{{ asset('images/home-we-2.png') }}" alt="Tại sao nên chọn chúng tôi">
                    <div class="flex flex-col gap-4 mt-6">

                        <h3 class="text-title-1B text-xl md:text[28px] xl:text-[32px] font-bold">Dịch vụ tận tâm</h3>
                        <p class="text-bl-222 text-sm xl:text-base md:text-center text-justify">Chúng tôi luôn lắng nghe và
                            đáp ứng mọi yêu cầu của
                            khách hàng một cách nhanh chóng và chuyên nghiệp.
                            Đội ngũ hỗ trợ tận tâm của Đức Tín Group luôn sẵn sàng giải quyết các vấn đề và cung cấp giải
                            pháp
                            tối ưu.</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-[29%] p-4">
                <div class="w-full flex items-center flex-row gap-6 md:flex-col text-center home_why_choose_we">
                    <img class="lazy md:w-[100px] w-[50px] h-[50px] md:h-[100px]"
                        data-src="{{ asset('images/home-we-3.png') }}" alt="Tại sao nên chọn chúng tôi">
                    <div class="flex flex-col gap-4 mt-6">
                        <h3 class="text-title-1B text-xl md:text[28px] xl:text-[32px] font-bold">Tối ưu hóa quy trình</h3>
                        <p class="text-bl-222 text-sm xl:text-base md:text-center text-justify">Công ty áp dụng hệ thống tự
                            động hóa trong các khâu từ
                            quản lý hàng hóa, đóng gói đến vận chuyển.
                            Điều này giúp giảm thiểu chi phí vận hành, tối ưu hóa quy trình làm việc và cung cấp sản phẩm
                            với
                            giá cạnh tranh nhất trên thị trường.</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-[29%] p-4">
                <div class="w-full flex items-center flex-row gap-6 md:flex-col text-center home_why_choose_we">
                    <img class="lazy md:w-[100px] w-[50px] h-[50px] md:h-[100px]"
                        data-src="{{ asset('images/home-we-4.png') }}" alt="Tại sao nên chọn chúng tôi">
                    <div class="flex flex-col gap-4 mt-6">
                        <h3 class="text-title-1B text-xl md:text[28px] xl:text-[32px] font-bold">Đổi mới sáng tạo</h3>
                        <p class="text-bl-222 text-sm xl:text-base md:text-center text-justify">Chúng tôi không ngừng nỗ lực
                            để mang đến những giải pháp
                            sáng tạo và tiên tiến nhất cho khách hàng.
                            Các tính năng mua sắm tiện ích, chúng tôi luôn hướng tới việc tạo ra những giá trị vượt trội và
                            đột
                            phá cho người dùng.</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-[29%] p-4">
                <div class="w-full flex items-center flex-row gap-6 md:flex-col text-center home_why_choose_we">
                    <img class="lazy md:w-[100px] w-[50px] h-[50px] md:h-[100px]"
                        data-src="{{ asset('images/home-we-5.png') }}" alt="Tại sao nên chọn chúng tôi">
                    <div class="flex flex-col gap-4 mt-6">
                        <h3 class="text-title-1B text-xl md:text[28px] xl:text-[32px] font-bold">Giao hàng siêu tốc</h3>
                        <p class="text-bl-222 text-sm xl:text-base md:text-center text-justify">Với hệ thống logistics hiện
                            đại và mạng lưới đối tác vận
                            chuyển rộng khắp, chúng tôi cam kết giao
                            hàng nhanh chóng và đúng hẹn. Bạn sẽ nhận được sản phẩm mình mong muốn trong thời gian ngắn
                            nhất,
                            bất kể bạn ở đâu.</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-[29%] p-4">
                <div class="w-full flex items-center flex-row gap-6 md:flex-col text-center home_why_choose_we">
                    <img class="lazy md:w-[100px] w-[50px] h-[50px] md:h-[100px]"
                        data-src="{{ asset('images/home-we-6.png') }}" alt="Tại sao nên chọn chúng tôi">
                    <div class="flex flex-col gap-4 mt-6">
                        <h3 class="text-title-1B text-xl md:text[28px] xl:text-[32px] font-bold">Sản phẩm chất lượng cao
                        </h3>
                        <p class="text-bl-222 text-sm xl:text-base md:text-center text-justify">Chúng tôi chỉ cung cấp
                            những sản phẩm chất lượng cao từ
                            các nhà cung cấp uy tín. Mỗi sản phẩm trước
                            khi đến tay khách hàng đều trải qua quy trình kiểm tra nghiêm ngặt, đảm bảo chất lượng và độ tin
                            cậy
                            cao nhất.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full bg-[#FAFAFA] hidden-observe">
        @include('component.home.partner')
    </div>
    @include('component.home.trending', ['trending' => $trending])
@endsection
