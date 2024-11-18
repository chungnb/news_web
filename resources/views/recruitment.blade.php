@extends('layout.layout')

@section('seo_title', $seoPage->tuyen_dung_seo_title ?? 'Tuyển dụng Đức Tín')
@section('seo_description', $seoPage->tuyen_dung_seo_description ?? 'Tuyển dụng việc làm Đức Tín')
@section('seo_keywords', $seoPage->tuyen_dung_seo_keywords ?? 'Tuyển dụng Đức Tín')

@section('content')
    <div class="hidden-observe w-full">
        <img src="{{ asset('images/banner/tuyen-dung.png') }}" alt="banner tuyen dung duc tin">
    </div>
    <div class="main-job w-full xl:w-[80%] px-4 md:px-0 m-auto overflow-hidden my-10">

        <div class="discover-env">
            <h1 class="line-text-bottom text-[24px] md:text-[32px] text-h2 font-bold text-center xl:text-[56px] mb-16">
                {{ $seoPage->tuyen_dung_seo_heading ?? 'Khám phá môi trường tại Đức Tín' }}
            </h1>

            <div class="flex md:flex-row flex-col gap-6 xl:mt-10 mt-8">
                <div class="rounded-2xl boder-shadow">
                    <img class="lazy" data-src="{{ asset('images/recruitment/env/env-1.png') }}"
                        alt="Môi trường tại Đức Tín">
                    <div class="p-6">
                        <h3 class="text-bl-222 text-xl md:text-2xl font-bold">Lấy con người làm trung tâm</h3>
                        <p class="text-gray-666 mt-4">Tại Đức Tín Group, nhân sự được xem là tài sản quý giá, được đào tạo
                            liên tục để nâng cao năng lực chuyên môn. Chúng tôi xây dựng môi trường làm việc tiện nghi,
                            chuyên nghiệp, tạo điều kiện tốt nhất cho các tài năng trẻ phát triển, sáng tạo.
                        </p>
                    </div>
                </div>
                <div class="rounded-2xl boder-shadow">
                    <img class="lazy" data-src="{{ asset('images/recruitment/env/env-2.png') }}"
                        alt="Môi trường tại Đức Tín">
                    <div class="p-6">
                        <h3 class="text-bl-222 text-xl md:text-2xl font-bold">Đoàn kết, yêu thương</h3>
                        <p class="text-gray-666 mt-4">Không chỉ ươm mầm những tài năng trẻ mà còn là một "đại gia đình" luôn
                            yêu thương, hỗ trợ và đoàn kết vì mục tiêu chung. Mỗi thành viên Đức Tín Group còn được tham gia
                            các hoạt động team building, sự kiện nội bộ thú vị như: Thứ 6 Vui Vẻ, minigame, du lịch...
                        </p>
                    </div>
                </div>
                <div class="rounded-2xl boder-shadow">
                    <img class="lazy" data-src="{{ asset('images/recruitment/env/env-3.png') }}"
                        alt="Môi trường tại Đức Tín">
                    <div class="p-6">
                        <h3 class="text-bl-222 text-xl md:text-2xl font-bold">Thăng tiến theo năng lực</h3>
                        <p class="text-gray-666 mt-4">Tất cả thành viên của Đức Tín Group có cơ hội phát triển và thăng tiến
                            theo năng lực. Các kỳ đánh giá, bổ nhiệm nhân sự được tiến hành dựa trên hiệu quả công việc và
                            khả năng lãnh đạo, dẫn dắt đội nhóm cùng phát triển, không theo thâm niên.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="list-job mt-10 hidden-observe">
            <h2 class="line-text-bottom text-[24px] md:text-[32px] text-h2 font-bold text-center xl:text-[56px] mb-16">Cơ
                hội việc làm</h2>

            @include('component.recruitment.listJob', ['recruintment' => $recruitment])
        </div>


        <div class="moment-slide mb-10 xl:mb-20 mt-10">
            <h2 class="line-text-bottom text-[24px] md:text-[32px] text-h2 font-bold text-center xl:text-[56px] mb-16">
                Khoảnh khắc đáng nhớ
            </h2>

            <p class="text-center my-8 w-[80%] m-auto">
                Hãy khám phá những trải nghiệm đặc biệt và các kỷ niệm đáng giá mà Đức Tín đã thực hiện. Từ những sự kiện
                lớn đến những khoảnh khắc nhỏ bé, mỗi trải nghiệm đều mang lại niềm vui và ý nghĩa không thể quên.
            </p>

            <div class="collection xl:h-[350px] md:h-[280px] h-[250px] hidden-observe">
                <div class="swiper-recruitment h-full">
                    <div class="swiper-wrapper swiper-job">
                        <div class="content swiper-slide relative"
                            style="background-image: url('{{ asset('images/recruitment/moment-1.JPG') }}'); background-position: bottom;">
                            <div class="mask absolute bg-title-1B opacity-80 bottom-0 w-full z-1 h-[15%]"></div>
                            <div class="text-content absolute bottom-[20px] z-2 text-white">
                                <p>Sự kiện Đức Tín</p>
                            </div>
                        </div>
                        <div class="content swiper-slide relative"
                            style="background-image: url('{{ asset('images/recruitment/moment-2.jpg') }}'); background-position: bottom;">
                            <div class="mask absolute bg-title-1B opacity-80 bottom-0 w-full z-1 h-[15%]"></div>
                            <div class="text-content absolute bottom-[20px] z-2 text-white">
                                <p>Sự kiện Đức Tín</p>
                            </div>
                        </div>
                        <div class="content swiper-slide relative"
                            style="background-image: url('{{ asset('images/recruitment/moment-3.png') }}'); background-position: bottom;">
                            <div class="mask absolute bg-title-1B opacity-80 bottom-0 w-full z-1 h-[15%]"></div>
                            <div class="text-content absolute bottom-[20px] z-2 text-white">
                                <p>Sự kiện Đức Tín</p>
                            </div>
                        </div>
                        <div class="content swiper-slide relative"
                            style="background-image: url('{{ asset('images/recruitment/moment-4.jpg') }}'); background-position: bottom;">
                            <div class="mask absolute bg-title-1B opacity-80 bottom-0 w-full z-1 h-[15%]"></div>
                            <div class="text-content absolute bottom-[20px] z-2 text-white">
                                <p>Sự kiện Đức Tín</p>
                            </div>
                        </div>
                        <div class="content swiper-slide relative"
                            style="background-image: url('{{ asset('images/recruitment/moment-5.jpg') }}'); background-position: bottom;">
                            <div class="mask absolute bg-title-1B opacity-80 bottom-0 w-full z-1 h-[15%]"></div>
                            <div class="text-content absolute bottom-[20px] z-2 text-white">
                                <p>Sự kiện Đức Tín</p>
                            </div>
                        </div>
                        <div class="content swiper-slide relative"
                            style="background-image: url('{{ asset('images/recruitment/moment-6.png') }}'); background-position: bottom;">
                            <div class="mask absolute bg-title-1B opacity-80 bottom-0 w-full z-1 h-[15%]"></div>
                            <div class="text-content absolute bottom-[20px] z-2 text-white">
                                <p>Sự kiện Đức Tín</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-pagination swiper-pagination-recruitment" style="top: 105% !important;"></div>
                </div>
            </div>
        </div>


    </div>
@endsection

<style>
    .swiper-recruitment .swiper-job .content {
        background-size: cover;
    }
</style>
