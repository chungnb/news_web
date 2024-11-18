@props(['recruintment'])
<div class="flex w-full mt-2col gap-6 md:flex-row mt-8 justify-center items-center flex-wrap">
    @if (!empty($recruintment))
        @foreach ($recruintment as $job)
            <a class="w-full md:w-[30%] rounded-2xl border-[1px] p-6 cursor-pointer"
                href="/tuyen-dung/{{ $job->slug }}">

                <div class="">
                    <h3 class="font-bold text-xl text-bl-222">{{ $job->title }}</h3>
                    <p class="text-sm mt-2 mb-1 text-color-444 flex gap-1"><img
                            src="{{ asset('images/icon/salary-icon.png') }}" class="object-contain" alt="salary">Mức thu
                        nhập: {{ $job->salary }}
                    </p>
                    <p class="text-sm text-color-444 flex gap-1 items-center"><img
                            src="{{ asset('images/icon/calendar-icon.png') }}" alt="end date">Thời hạn:
                        <strong>{{ \Carbon\Carbon::parse($job->end_time)->format('d/m/Y') }}</strong>
                    </p>
                </div>
                <div class="text-[#05326A] text-right w-full block mt-2 text-lg font-semibold">Ứng
                    tuyển ngay</div>

            </a>
        @endforeach
    @endif
</div>
<div class="mt-6 mb-20 flex justify-center items-center hidden-observe">
    {{ $recruintment->render('component.paginator') }}
</div>
