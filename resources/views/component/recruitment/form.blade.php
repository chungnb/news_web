<div class="fixed z-10 w-full bg-form-apply h-full">
    <div
        class="xl:w-[65%] w-[90%] h-[80%] overflow-auto flex flex-col form-apply px-4 py-6  xl:px-12 xl:py-14 xl:flex-row-reverse gap-6 bg-white rounded-2xl">
        <button class="absolute top-[10px] right-5" onclick="onCloseModal()"><i
                class="text-md md:text-3xl xl:text-[40px] text-gray-888 fa-solid fa-xmark"></i></button>
        <div class="w-full rounded-full">
            {{-- img hiring --}}
            <img class="w-full h-[200px] md:h-full object-contain" src="{{ asset('images/banner-recruitment.png') }}"
                alt="anh tuyen dung">
        </div>

        <div class="w-full">
            {{-- form --}}
            <h3 class="text-xl md:text-2xl xl:text-[32px] font-bold text-center">Đăng ký ứng tuyển</h3>

            {{-- <form class="flex flex-col gap-2 mt-6" action="{{ route('applicant.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('post')

                <div class="relative h-14 w-full min-w-[200px]">
                    <input placeholder="Họ và tên" name="full_name"
                        class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                    <label
                        class="after:content[''] pointer-events-none absolute left-0  -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Họ và tên <span class="error">*</span>
                    </label>
                </div>

                <div class="relative h-14 w-full min-w-[200px]">
                    <input placeholder="Số điện thoại" name="phone"
                        class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                    <label
                        class="after:content[''] pointer-events-none absolute left-0  -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Số điện thoại <span class="error">*</span>
                    </label>
                </div>

                <div class="relative h-14 w-full min-w-[200px]">
                    <input placeholder="Email" name="email"
                        class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                    <label
                        class="after:content[''] pointer-events-none absolute left-0  -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Email <span class="error">*</span>
                    </label>
                </div>

                <div class="relative h-14 w-full min-w-[200px]">
                    <input placeholder="Vị trí ứng tuyển" name="position"
                        class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                    <label
                        class="after:content[''] pointer-events-none absolute left-0  -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Vị trí ứng tuyển <span class="error">*</span>
                    </label>
                </div>


                <div class="flex items-center justify-center w-full mt-6">
                    <label for="dropzone-file"
                        class="flex flex-col items-center justify-center w-full h-25 border-2 border-white border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <i class="text-blue-500 text-3xl fa-solid fa-cloud-arrow-up"></i>
                            <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click
                                    to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500">Đính kèm tập tin. Kích thước tập tin của bạn không được vượt quá 10MB.
                            </p>
                        </div>
                        <input id="dropzone-file" name="resume" type="file" class="hidden" />
                    </label>
                </div>


                <div class="my-4">
                    <input type="checkbox" name="term" id="term-privacy">
                    <span class="text-text-888 text-sm">Tôi đã đọc và đồng ý với các điều khoản và điều kiện sử dụng
                        dịch vụ.</span>
                </div>

                <button id="submit_button" disabled class="m-auto bg-radient-blue text-white text-center font-semibold h-[59px] w-[213px] rounded-full"
                    type="submit">Gửi hồ sơ ứng tuyển</button>

            </form> --}}

            <form id="applicationForm" action="{{ route('applicant.store') }}" class="flex flex-col gap-2 mt-6" method="POST" enctype="multipart/form-data">
                @csrf
                @method('post')

                <div class="relative h-14 w-full min-w-[200px]">
                    <input id="full_name" name="full_name" placeholder="Họ và tên"
                        class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                    <label
                        class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Họ và tên <span class="error">*</span>
                    </label>
                    <span class="text-red-500 text-xs hidden" id="full_name_error">Họ và tên không được để trống.</span>
                </div>

                <div class="relative h-14 w-full min-w-[200px]">
                    <input id="phone" name="phone" placeholder="Số điện thoại"
                        class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                    <label
                        class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Số điện thoại <span class="error">*</span>
                    </label>
                    <span class="text-red-500 text-xs hidden" id="phone_error">Số điện thoại không được để trống.</span>
                </div>

                <div class="relative h-14 w-full min-w-[200px]">
                    <input id="email" name="email" placeholder="Email"
                        class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                    <label
                        class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Email <span class="error">*</span>
                    </label>
                    <span class="text-red-500 text-xs hidden" id="email_error">Email không được để trống.</span>
                </div>

                <div class="relative h-14 w-full min-w-[200px]">
                    <input id="position" name="position" placeholder="Vị trí ứng tuyển"
                        class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                    <label
                        class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Vị trí ứng tuyển <span class="error">*</span>
                    </label>
                    <span class="text-red-500 text-xs hidden" id="position_error">Vị trí ứng tuyển không được để
                        trống.</span>
                </div>

                <div class="flex items-center justify-center w-full mt-6">
                    <label for="dropzone-file"
                        class="flex flex-col items-center justify-center w-full h-25 border-2 border-white border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <i class="text-blue-500 text-3xl fa-solid fa-cloud-arrow-up"></i>
                            <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or
                                drag and drop</p>
                            <p class="text-xs text-gray-500">Đính kèm tập tin. Kích thước tập tin của bạn không được
                                vượt quá 2MB.</p>
                        </div>
                        <input id="dropzone-file" name="resume" type="file" class="hidden" />
                    </label>
                </div>

                <div class="my-4">
                    <input type="checkbox" name="term" id="term-privacy">
                    <span class="text-text-888 text-sm">Tôi đã đọc và đồng ý với các điều khoản và điều kiện sử dụng
                        dịch vụ.</span>
                </div>

                <button id="submit_button" disabled
                    class="m-auto bg-gray-500 text-white text-center font-semibold h-[59px] w-[213px] rounded-full"
                    type="submit">Gửi hồ sơ ứng tuyển</button>
            </form>

        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('applicationForm');
        const submitButton = document.getElementById('submit_button');
        const termPrivacyCheckbox = document.getElementById('term-privacy');

        const inputs = [{
                id: 'full_name',
                errorId: 'full_name_error',
                required: true
            },
            {
                id: 'phone',
                errorId: 'phone_error',
                required: true
            },
            {
                id: 'email',
                errorId: 'email_error',
                required: true
            },
            {
                id: 'position',
                errorId: 'position_error',
                required: true
            }
        ];

        function validateInput(input) {
            const inputElement = document.getElementById(input.id);
            const errorElement = document.getElementById(input.errorId);
            if (inputElement.value.trim() === '') {
                errorElement.classList.remove('hidden');
                return false;
            } else {
                errorElement.classList.add('hidden');
                return true;
            }
        }

        function validateForm() {
            let isValid = true;
            inputs.forEach(input => {
                if (!validateInput(input)) {
                    isValid = false;
                }
            });
            if (!termPrivacyCheckbox.checked) {
                isValid = false;
            }
            submitButton.disabled = !isValid;
            submitButton.style.background = isValid ? 'linear-gradient(to left, #0A62D0, #05326A)' : 'gray'
        }

        inputs.forEach(input => {
            const inputElement = document.getElementById(input.id);
            inputElement.addEventListener('input', validateForm);
        });

        termPrivacyCheckbox.addEventListener('change', validateForm);

        form.addEventListener('submit', function(event) {
            event.preventDefault();
            let isValid = true;
            inputs.forEach(input => {
                if (!validateInput(input)) {
                    isValid = false;
                }
            });

            if (!termPrivacyCheckbox.checked) {
                isValid = false;
            }

            if (isValid) {
                form.submit();
            } else {
                validateForm();
            }
        });
    });
</script>
