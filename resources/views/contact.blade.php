@extends('layout.layout')

@section('content')
    <div>
        <img src="{{ asset('images/banner/contact-banner.png') }}" alt="Banner contact Duc Tin">
    </div>
    <div class="w-full xl:w-[80%] px-4 md:px-0 mt-10 xl:mt-16 m-auto">

        <div class="form-contact flex gap-6 flex-col md:flex-row">
            <div class="w-full">
                <h1 class="xl:text-dt text-tl font-bold text-radient-blue">TẬP ĐOÀN ĐỨC TÍN</h1>

                <div class="flex flex-col gap-2 justify-center mt-4">
                    <p class="text-bl-222 text-lg"><strong>Trụ sở chính:</strong> <span>Nhà 84 đường 23, khu đô thị thành phố
                            Giao Lưu,Cổ Nhuế 2, Bắc Từ
                            Liêm, Thành Phố Hà Nội.</span></p>
                    <p class="text-bl-222 text-lg"><strong>Điện thoại:</strong> <span>0963290292</span></p>
                    <p class="text-bl-222 text-lg"><strong>Email:</strong> <span>admin@ductingroup.com</span></p>
                    <p class="text-bl-222 text-lg"><strong>Mã số thuế:</strong> <span>0108970525</span></p>
                    <p class="text-bl-222 text-lg"><strong>Ngày cấp:</strong> <span>04/11/2019</span></p>
                </div>

                <div>
                    <h3 class="md:text-2xl text-xl text-bl-222 font-bold xl:mt-12 mt-8">Kết nối với chúng tôi</h3>
                    <div class="flex mt-6 gap-4">
                        <a href="https://www.facebook.com/ductingroup.dtg" target="_blank"><img width="40" src="{{ asset('images/fb.png') }}" alt="Facebook"></a>
                        <a href="https://www.tiktok.com/@ductin_group  " target="_blank"><img width="40" src="{{ asset('images/Tiktok.png') }}" alt="Tiktok"></a>
                        <a href="https://www.instagram.com/ductingroup/" target="_blank"><img width="40" src="{{ asset('images/Instagram.png') }}" alt="Instagram"></a>
                        <a href="https://www.linkedin.com/in/duc-tin-group-7b01ba312/" target="_blank"><img width="40" src="{{ asset('images/LinkedIn.png') }}" alt="Linkedin"></a>
                    </div>
                </div>
            </div>

            <div class="w-full rounded-2xl boder-shadow md:p-10 p-6">
                <h3 class="text-2xl font-semibold text-color-444">LIÊN HỆ VỚI CHÚNG TÔI</h3>
                <form class="mt-8 flex flex-col gap-6 justify-center" action="{{route('store.contact')}}" method="POST">
                    @csrf

                    <div class="w-full">
                        <div class="relative w-full min-w-[200px] h-[50px]">
                            <input name="name"
                                class="peer w-full h-full bg-transparent font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 focus:border-t-transparent text-sm px-3 py-2.5 rounded border-blue-gray-200 focus:border-gray-E0"
                                placeholder=" " />
                            <label
                                class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-sm peer-focus:text-sm before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[4] text-bl-222 peer-focus:text-bl-222 before:border-blue-gray-200 peer-focus:before:!border-gray-E0 after:border-blue-gray-200 peer-focus:after:!border-gray-E0">Name<span class="error">*</span>
                            </label>
                        </div>
                    </div>

                    <div class="w-full">
                        <div class="relative w-full min-w-[200px] h-[50px]">
                            <input name="email" type="email"
                                class="peer w-full h-full bg-transparent font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 focus:border-t-transparent text-sm px-3 py-2.5 rounded border-blue-gray-200 focus:border-gray-E0"
                                placeholder=" " />
                            <label
                                class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-sm peer-focus:text-sm before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[4] text-bl-222 peer-focus:text-bl-222 before:border-blue-gray-200 peer-focus:before:!border-gray-E0 after:border-blue-gray-200 peer-focus:after:!border-gray-E0">Email
                            </label>
                        </div>
                    </div>


                    <div class="w-full">
                        <div class="relative w-full min-w-[200px] h-[50px]">
                            <input name="phone"
                                class="peer w-full h-full bg-transparent font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 focus:border-t-transparent text-sm px-3 py-2.5 rounded border-blue-gray-200 focus:border-gray-E0"
                                placeholder=" " />
                            <label
                                class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-sm peer-focus:text-sm before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[4] text-bl-222 peer-focus:text-bl-222 before:border-blue-gray-200 peer-focus:before:!border-gray-E0 after:border-blue-gray-200 peer-focus:after:!border-gray-E0">Số
                                Phone number<span class="error">*</span>
                            </label>
                        </div>
                    </div>

                    <div class="w-full">
                        <div class="relative w-full min-w-[200px]">
                            <textarea name="messages"
                                class="peer h-full min-h-[100px] w-full resize-none rounded-[7px] border border-blue-gray-200 bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-gray-E0 focus:border-t-transparent focus:outline-0 disabled:resize-none disabled:border-0 disabled:bg-blue-gray-50"
                                placeholder=" "></textarea>
                            <label
                                class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-bl-222 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-gray-E0 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-gray-E0 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                Message
                            </label>
                        </div>
                    </div>

                    <button class="bg-radient-blue text-white text-center font-semibold h-[50px] w-[150px] rounded"
                        type="submit">Gửi yêu cầu</button>
                </form>
            </div>
        </div>

    </div>
    <div class="w-full xl:mt-16 mt-10">
        <iframe class="xl:h-[550px] md:h-[400px] h-[250px] w-full"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232.71426263108694!2d105.78062021589668!3d21.05555318785175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455821f872591%3A0xba4a9c42d864b24b!2zQ8O0bmcgdHkgQ1AgVE0gJiBYTksgxJDhu6ljIFTDrW4!5e0!3m2!1svi!2s!4v1720575181669!5m2!1svi!2s"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
