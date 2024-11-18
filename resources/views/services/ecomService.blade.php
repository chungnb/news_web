@extends('layout.layout')

@section('seo_title', $seoPageLvkd->ecommerce_seo_title ?? 'Thương mại điện tử khẩu Đức Tín Groups')
@section('seo_description', $seoPageLvkd->ecommerce_seo_description)
@section('seo_keywords', $seoPageLvkd->ecommerce_seo_keywords ?? 'Thương mại điện tử khẩu Đức Tín Groups')

@section('content')
    <div class="w-full relative">
        <img class="w-full" src="{{ asset('images/banner/services/ecommerce.png') }}" alt="banner ecommerce">
        <div class="service-banner-content absolute top-0 left-0 xl:w-[55%] w-full px-4 md:w-[80%] md:px-0">
            <h1 class="xl:text-[56px] sm:text-[30px] text-lg font-bold text-white leading-normal">
                {{ $seoPageLvkd->ecommerce_seo_heading ?? 'Dịch vụ thương mại điện tử đa quốc gia' }}</h1>

            <p class="text-white xl:text-xl md:text-lg text-xs mt-2 md:mt-8 xl:mt-10">Đức Tín Group mang đến các giải pháp
                thương mại điện tử tiên
                tiến, giúp doanh nghiệp của bạn dễ dàng vươn ra thị trường quốc tế một cách nhanh chóng và hiệu quả.
            </p>
        </div>
    </div>
    <div class="w-full xl:mb-20 mb-12">
        <div class="w-full xl:w-[80%] px-4 md:px-0 mt-8 xl:mt-14 m-auto sm:mb-[72px] mb-10">
            <h2 class="line-text-bottom text-[28px] xl:text-[56px] text-h2 font-bold mt-6 text-center">Giải pháp của chúng
                tôi
            </h2>

            <p class="mt-10 text-bl-222 text-sm md:text-lg text-center w-full md:w-[80%] m-auto">Thương mại điện tử đa quốc
                gia là cầu nối giữa
                người tiêu dùng và các nhà cung cấp trên toàn thế giới. Chúng tôi cung cấp một nền tảng toàn diện và linh
                hoạt, giúp doanh nghiệp tối ưu hóa hoạt động kinh doanh và mở rộng quy mô một cách nhanh chóng và hiệu quả.
            </p>

            {{-- data --}}
            <div class="mt-10 xl:mt-[72px] flex flex-col gap-10 hidden-observe">
                <div
                    class="flex flex-col-reverse md:flex-row justify-center items-center gap-4 p-4 text-center border-[1px] border-gray-200 rounded-3xl">
                    <div class="w-full">
                        <h3 class="text-mb md:text-tl xl:text-dt font-bold">Nền tảng bán hàng</h3>

                        <p class="text-ct_mb md:text-ct_tl xl:text-ct_dt text-bl-222 mt-6">
                            Chúng tôi cung cấp một hệ thống quản lý sản phẩm dễ sử dụng, giúp bạn dễ dàng cập nhật và theo
                            dõi tồn kho một cách hiệu quả. Hệ thống của chúng tôi tích hợp các phương thức thanh toán đa
                            dạng và bảo mật, đảm bảo mọi giao dịch luôn an toàn. Bên cạnh đó, giao diện thân thiện với người
                            dùng và hỗ trợ đa ngôn ngữ giúp bạn tiếp cận khách hàng trên toàn cầu một cách dễ dàng.
                        </p>
                    </div>
                    <div class="rounded-3xl w-full">
                        <img class="lazy max-h-[457px] object-contain w-full"
                            data-src="{{ asset('images/banner/services/ecom-1.png') }}" alt="Image nền tảng bán hàng">
                    </div>
                </div>
                <div
                    class="flex flex-col md:flex-row justify-center items-center gap-4 p-4 text-center border-[1px] border-gray-200 rounded-3xl">
                    <div class="rounded-3xl w-full">
                        <img class="lazy max-h-[457px] object-contain w-full"
                            data-src="{{ asset('images/banner/services/ecom-2.png') }}" alt="Image nền tảng bán hàng">
                    </div>
                    <div class="w-full">
                        <h3 class="text-mb md:text-tl xl:text-dt font-bold">Quản Lý Kho Hàng</h3>

                        <p class="text-ct_mb md:text-ct_tl xl:text-ct_dt text-bl-222 mt-6">
                            Hệ thống kho bãi thông minh của chúng tôi tối ưu hóa không gian lưu trữ và quản lý hàng tồn kho
                            một cách hiệu quả. Chúng tôi đảm bảo việc giao hàng nhanh chóng và chính xác, giúp giảm thiểu
                            thời gian chờ đợi của khách hàng. Ngoài ra, quy trình kiểm soát chất lượng chặt chẽ từ kho đến
                            tay khách hàng giúp giảm thiểu lỗi và khiếu nại, đảm bảo sự hài lòng tối đa của khách hàng.
                        </p>
                    </div>
                </div>
                <div
                    class="flex flex-col-reverse md:flex-row justify-center items-center gap-4 p-4 text-center border-[1px] border-gray-200 rounded-3xl">
                    <div class="w-full">
                        <h3 class="text-mb md:text-tl xl:text-dt font-bold">Marketing Đa Kênh</h3>

                        <p class="text-ct_mb md:text-ct_tl xl:text-ct_dt text-bl-222 mt-6">
                            Chúng tôi cung cấp các chiến lược Digital Marketing hiệu quả để tối ưu hóa công cụ tìm kiếm,
                            giúp tăng thứ hạng và khả năng hiển thị của website. Bên cạnh đó, chúng tôi triển khai các chiến
                            dịch quảng cáo trực tuyến trên Google, Facebook, và các mạng xã hội khác, đảm bảo tiếp cận đúng
                            đối tượng khách hàng mục tiêu. Chúng tôi cũng xây dựng và quản lý các chiến dịch email marketing
                            chuyên nghiệp, tăng cường kết nối và chăm sóc khách hàng, từ đó thúc đẩy doanh số và sự hài lòng
                            của khách hàng.
                        </p>
                    </div>
                    <div class="rounded-3xl w-full">
                        <img class="lazy max-h-[457px] object-contain w-full"
                            data-src="{{ asset('images/banner/services/ecom-3.png') }}" alt="Image nền tảng bán hàng">
                    </div>
                </div>
            </div>


        </div>
        @include('component.buisiness.achievements')

        @include('component.buisiness.tipycalProject')
    </div>
@endsection
