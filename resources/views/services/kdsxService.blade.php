@extends('layout.layout')

@section('seo_title', $seoPageLvkd->kd_seo_title ?? 'Kinh doanh sản xuất khẩu Đức Tín Groups')
@section('seo_description', $seoPageLvkd->kd_seo_description)
@section('seo_keywords', $seoPageLvkd->kd_seo_keywords ?? 'Kinh doanh sản xuất khẩu Đức Tín Groups')

@section('content')
    <div class="w-full relative">
        <img class="w-full" src="{{ asset('images/banner/services/cosmetic.png') }}" alt="banner cosmetic">
        <div class="service-banner-content absolute top-0 left-0 xl:w-[55%] w-full px-4 md:w-[80%] md:px-0">
            <h1 class="xl:text-[56px] sm:text-[30px] text-base font-bold text-white leading-normal">
                {{ $seoPageLvkd->kd_seo_heading ?? 'Sản xuất và kinh doanh dược mỹ phẩm' }}</h1>

            <p class="text-white xl:text-xl md:text-lg text-xs mt-2 md:mt-8 xl:mt-10">Đức Tín Group cung cấp các sản phẩm
                ngành dược mỹ phẩm, gmang
                đến những sản phẩm chất lượng cao, cải thiện sức khỏe và sắc đẹp cho khách hàng trên toàn thế giới.
            </p>
        </div>
    </div>
    <div class="w-full xl:mb-20 mb-12">
        <div class="w-full xl:w-[80%] px-4 md:px-0 mt-8 xl:mt-14 m-auto sm:mb-[72px] mb-10 hidden-observe">
            <h2 class="line-text-bottom text-[28px] xl:text-[56px] text-h2 font-bold mt-6 text-center">Sản xuất và kinh doanh
                dược
                mỹ phẩm
            </h2>

            <p class="mt-10 text-bl-222 text-sm md:text-lg text-center w-full md:w-[80%] m-auto">Chúng tôi chuyên sản xuất
                và kinh doanh các sản
                phẩm mỹ dược phẩm chất lượng cao, đáp ứng nhu cầu chăm sóc sức khỏe và làm đẹp của người tiêu dùng. Với đội
                ngũ chuyên gia giàu kinh nghiệm và công nghệ sản xuất hiện đại, chúng tôi cam kết mang đến những sản phẩm an
                toàn và hiệu quả.
            </p>

            {{-- data --}}
            <div class="mt-10 xl:mt-[72px] flex flex-col gap-10">
                <div
                    class="flex flex-col-reverse md:flex-row justify-center items-center gap-4 p-4 text-center border-[1px] border-gray-200 rounded-3xl">
                    <div class="w-full">
                        <h3 class="text-mb md:text-tl xl:text-dt font-bold">Nghiên Cứu & Phát Triển</h3>

                        <p class="text-ct_mb md:text-ct_tl xl:text-ct_dt text-bl-222 mt-6">
                            Chúng tôi luôn tiên phong trong việc nghiên cứu và phát triển các sản phẩm mới để đáp ứng nhu
                            cầu ngày càng cao của thị trường. Quy trình kiểm định chất lượng nghiêm ngặt đảm bảo rằng mọi
                            sản phẩm đều đạt tiêu chuẩn cao nhất. Đồng thời, chúng tôi luôn cập nhật và áp dụng công nghệ
                            mới vào quy trình sản xuất, nâng cao hiệu quả và chất lượng sản phẩm, đảm bảo khách hàng luôn
                            nhận được những sản phẩm tiên tiến và an toàn nhất.
                        </p>
                    </div>
                    <div class="rounded-3xl w-full">
                        <img class="lazy max-h-[457px] object-contain w-full"
                            data-src="{{ asset('images/banner/services/sx-1.png') }}" alt="Image nền tảng bán hàng">
                    </div>
                </div>
                <div
                    class="flex flex-col md:flex-row justify-center items-center gap-4 p-4 text-center border-[1px] border-gray-200 rounded-3xl">
                    <div class="rounded-3xl w-full">
                        <img class="lazy max-h-[457px] object-contain w-full"
                            data-src="{{ asset('images/banner/services/sx-2.png') }}" alt="Image nền tảng bán hàng">
                    </div>
                    <div class="w-full">
                        <h3 class="text-mb md:text-tl xl:text-dt font-bold">Sản Xuất Dược Mỹ Phẩm</h3>

                        <p class="text-ct_mb md:text-ct_tl xl:text-ct_dt text-bl-222 mt-6">
                            Với nhà máy sản xuất đạt chuẩn GMP, trang thiết bị hiện đại và quy trình sản xuất tiên tiến,
                            chúng tôi tự hào về khả năng sản xuất các sản phẩm chất lượng cao. Hệ thống quản lý chất lượng
                            toàn diện đảm bảo sản phẩm luôn đạt tiêu chuẩn cao nhất. Bên cạnh đó, quy trình đóng gói chuyên
                            nghiệp giúp bảo vệ sản phẩm trong quá trình vận chuyển và lưu trữ, đảm bảo sản phẩm luôn giữ
                            được chất lượng tốt nhất khi đến tay khách hàng.
                        </p>
                    </div>
                </div>
                <div
                    class="flex flex-col-reverse md:flex-row justify-center items-center gap-4 p-4 text-center border-[1px] border-gray-200 rounded-3xl">
                    <div class="w-full">
                        <h3 class="text-mb md:text-tl xl:text-dt font-bold">Phân Phối Đa Quốc Gia</h3>

                        <p class="text-ct_mb md:text-ct_tl xl:text-ct_dt text-bl-222 mt-6">
                            Chúng tôi có mạng lưới phân phối rộng khắp, giúp đưa sản phẩm đến tay người tiêu dùng một cách
                            nhanh chóng và thuận tiện. Hợp tác với các đối tác chiến lược trong và ngoài nước, chúng tôi đảm
                            bảo sự hiện diện của sản phẩm trên thị trường. Ngoài ra, chúng tôi cung cấp dịch vụ hỗ trợ bán
                            hàng và chăm sóc khách hàng chuyên nghiệp, giúp khách hàng luôn hài lòng và tin tưởng vào sản
                            phẩm của chúng tôi.
                        </p>
                    </div>
                    <div class="rounded-3xl w-full">
                        <img class="lazy max-h-[457px] object-contain w-full"
                            data-src="{{ asset('images/banner/services/sx-3.png') }}" alt="Image nền tảng bán hàng">
                    </div>
                </div>
            </div>


        </div>
        @include('component.buisiness.achievements')

        @include('component.buisiness.tipycalProject')
    </div>
@endsection
