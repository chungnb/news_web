@extends('layout.layout')

@section('seo_title', $job->seo_title ?? $job->title)
@section('seo_description', $job->seo_description)
@section('seo_keywords', $job->seo_keywords)

@section('content')
    <div class="w-full hidden-observe">
        <img src="{{ asset('images/banner/job.png') }}" alt="banner viec lam Duc Tin">
    </div>
    <div class="w-full xl:w-[80%] px-4 xl:px-0 m-auto">
        <div
            class="hidden-observe w-full xl:w-[70%] md:gap-10 gap-6 xl:px-0 m-auto flex justify-center items-center px-4 md:px-10 md:py-10 py-6 border-b-[2px] border-gray-CCC">
            <img class="md:w-[200px] w-[78px] hidden md:block" src="{{ asset('images/logo.webp') }}" alt="logo Duc Tin">
            <div class="w-full">
                <h1 class="md:text-tl xl:text-dt text-mb font-bold">{{ $job->seo_heading ?? $job->title }}</h1>

                <ul class="mt-4 mb-6">
                    <li class="flex gap-2"><img class="object-contain" src="{{ asset('images/icon/salary-icon.png') }}"
                            alt="icon salary"><span>Mức
                            thu nhập: <strong>{{ $job->salary }}</strong></span></li>
                    <li class="my-2 flex gap-2"><img class="object-contain"
                            src="{{ asset('images/icon/calendar-icon.png') }}" alt="icon calendar"><span>Thời hạn:
                            <strong>{{ $job->end_time }}</strong></span></li>
                    <li class="flex gap-2"><img class="object-contain" src="{{ asset('images/icon/location-icon.png') }}"
                            alt="icon location"><span>Địa điểm làm việc: <strong>{{ $job->location }}</strong></span></li>
                </ul>

                <div class="flex justify-between flex-col-reverse items-center md:flex-row gap-3 md:gap-0">
                    <div class="flex gap-3">
                        <button onclick="onShareLinkToFb()"
                            class="flex gap-1 py-2 px-3 items-center justify-center text-white bg-blue-1877F2 rounded-full">
                            <img class="w-[15px]" src="{{ asset('images/fb.png') }}" alt="share facebook">
                            <span class="text-xs md:text-sm">Chia
                                sẻ</span></button>

                        <button onclick="onCopyLink()"
                            class="flex gap-1 rounded-full py-2 px-3 items-center justify-center text-white bg-blue-0071AF cursor-pointer"><i
                                class="text-white fa-solid fa-share"></i><span class="text-xs md:text-sm">Chia sẻ bài
                                viết</span></button>
                    </div>

                    <button onclick="onApply()"
                        class="text-blue-600 rounded-full border-[2px] py-2 px-4 border-blue-600">Ứng tuyển
                        ngay</button>
                </div>
            </div>
        </div>

        <div class="md:my-10 my-8 hidden-observe ckeditor_main">
            <div>
                <ul class="font-bold flex flex-col gap-3">
                    <li><span class="xl:text-base sm:text-sm text-xs">Số lượng cần tuyển:
                            {{ $job->num_of_recruitment }}</span></li>
                    <li><span class="xl:text-base sm:text-sm text-xs">Vị trí làm việc: {{ $job->position }}</span></li>
                    <li><span class="xl:text-base sm:text-sm text-xs">Địa điểm làm việc: {{ $job->location }}</span></li>
                    <li><span class="xl:text-base sm:text-sm text-xs">Thời gian làm việc: {{ $job->working_time }}</span>
                    </li>
                </ul>
            </div>
            <div class="mt-8">
                {!! $job->description !!}

                <p class="mt-6">
                    <strong>Liên hệ:</strong> {{ $job->contact_address }}
                </p>
            </div>
        </div>
    </div>
@endsection

<div class="hidden" id="form-apply-action">
    @include('component.recruitment.form')
</div>

<script>
    function onApply() {
        document.getElementById("form-apply-action").style.display = "block";
    }

    function onCloseModal() {
        document.getElementById("form-apply-action").style.display = "none";
    }

    function onShareLinkToFb() {
        let link = window.location.href;

        let fullLink = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(link)}`

        window.open(fullLink, '', 'scrollbar=yes, height=600, width=600')

        return false
    }

    function onCopyLink() {
        try {
            navigator.clipboard.writeText(window.location.href);
            Toastify({
                text: "Sao chép link thành công!",
                duration: 3000,
            }).showToast();
        } catch (error) {
            console.log('copy clipboard', error);
            Toastify({
                text: "Có lỗi xảy ra",
                duration: 3000,
            }).showToast();
        }
    }
</script>
