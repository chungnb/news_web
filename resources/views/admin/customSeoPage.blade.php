<x-app-layout>
    @php
    @endphp
    {{-- {{ route('admin.seoPage.store', $seoPage->id) }} --}}
    <a class="seo_component cursor-pointer text-blue-500 mb-8 text-right" href="{{route('customSeoPage.lvkd')}}">
        <h3 class="font-bold text-xl">Chỉnh Sửa LVKD Page Seo</h3>
    </a>
    <form action="{{route('admin.seoPage.store', $seoPage->id)}}" method="post" class="mt-6 space-y-6">
        @csrf
        @method('put')
        {{-- Home --}}
        <div class="seo_component">
            <h3 class="font-bold text-xl">Home Page Seo</h3>

            <div class="border-[1px] rounded p-3 flex flex-col gap-4 justify-between">
                <div class="w-full">
                    <x-input-label for="home_seo_heading" :value="__('Heading')" />
                    <x-text-input id="home_seo_heading" name="home_seo_heading" :value="old('home_seo_heading', $seoPage->home_seo_heading)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('home_seo_heading')" />
                    <span id="home_seo_heading_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>

                <div class="w-full">
                    <x-input-label for="home_seo_title" :value="__('Title')" />
                    <x-text-input id="home_seo_title" name="home_seo_title" :value="old('home_seo_title', $seoPage->home_seo_title)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('home_seo_title')" />
                    <span id="home_seo_title_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>

                <div class="w-full">
                    <x-input-label for="home_seo_description" :value="__('Description')" />
                    <x-text-input id="home_seo_description" name="home_seo_description" :value="old('home_seo_description', $seoPage->home_seo_description)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('home_seo_description')" />
                    <span id="home_seo_description_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>

                <div class="w-full">
                    <x-input-label for="home_seo_keywords" :value="__('KeyWords')" />
                    <x-text-input id="home_seo_keywords" name="home_seo_keywords" :value="old('home_seo_keywords', $seoPage->home_seo_keywords)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('home_seo_keywords')" />
                    <span id="home_seo_keywords_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>
            </div>
        </div>

        {{-- About --}}
        <div class="seo_component">
            <h3 class="font-bold text-xl">About Us Page Seo</h3>

            <div class="border-[1px] rounded p-3 flex flex-col gap-4 justify-between">
                <div class="w-full">
                    <x-input-label for="about_seo_heading" :value="__('Heading')" />
                    <x-text-input id="about_seo_heading" name="about_seo_heading" :value="old('about_seo_heading', $seoPage->about_seo_heading)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('about_seo_heading')" />
                    <span id="about_seo_heading_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>

                <div class="w-full">
                    <x-input-label for="about_seo_title" :value="__('Title')" />
                    <x-text-input id="about_seo_title" name="about_seo_title" :value="old('about_seo_title', $seoPage->about_seo_title)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('about_seo_title')" />
                    <span id="about_seo_title_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>

                <div class="w-full">
                    <x-input-label for="about_seo_description" :value="__('Description')" />
                    <x-text-input id="about_seo_description" name="about_seo_description" :value="old('about_seo_description', $seoPage->about_seo_description)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('about_seo_description')" />
                    <span id="about_seo_description_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>

                <div class="w-full">
                    <x-input-label for="about_seo_keywords" :value="__('KeyWords')" />
                    <x-text-input id="about_seo_keywords" name="about_seo_keywords" :value="old('about_seo_keywords', $seoPage->about_seo_keywords)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('about_seo_keywords')" />
                    <span id="about_seo_keywords_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>
            </div>
        </div>

        {{-- Thư viện videos --}}
        <div class="seo_component">
            <h3 class="font-bold text-xl">Videos Page Seo</h3>

            <div class="border-[1px] rounded p-3 flex flex-col gap-4 justify-between">
                <div class="w-full">
                    <x-input-label for="video_seo_heading" :value="__('Heading')" />
                    <x-text-input id="video_seo_heading" name="video_seo_heading" :value="old('video_seo_heading', $seoPage->video_seo_heading)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('video_seo_heading')" />
                    <span id="video_seo_heading_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>

                <div class="w-full">
                    <x-input-label for="video_seo_title" :value="__('Title')" />
                    <x-text-input id="video_seo_title" name="video_seo_title" :value="old('video_seo_title', $seoPage->video_seo_title)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('video_seo_title')" />
                    <span id="video_seo_title_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>

                <div class="w-full">
                    <x-input-label for="video_seo_description" :value="__('Description')" />
                    <x-text-input id="video_seo_description" name="video_seo_description" :value="old('video_seo_description', $seoPage->video_seo_description)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('video_seo_description')" />
                    <span id="video_seo_description_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>

                <div class="w-full">
                    <x-input-label for="video_seo_keywords" :value="__('KeyWords')" />
                    <x-text-input id="video_seo_keywords" name="video_seo_keywords" :value="old('video_seo_keywords', $seoPage->video_seo_keywords)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('video_seo_keywords')" />
                    <span id="video_seo_keywords_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>
            </div>
        </div>

        {{-- Tuyen dụng --}}
        <div class="seo_component">
            <h3 class="font-bold text-xl">Recruitment Page Seo</h3>

            <div class="border-[1px] rounded p-3 flex flex-col gap-4 justify-between">
                <div class="w-full">
                    <x-input-label for="tuyen_dung_seo_heading" :value="__('Heading')" />
                    <x-text-input id="tuyen_dung_seo_heading" name="tuyen_dung_seo_heading" :value="old('tuyen_dung_seo_heading', $seoPage->tuyen_dung_seo_heading)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('tuyen_dung_seo_heading')" />
                    <span id="tuyen_dung_seo_heading_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>

                <div class="w-full">
                    <x-input-label for="tuyen_dung_seo_title" :value="__('Title')" />
                    <x-text-input id="tuyen_dung_seo_title" name="tuyen_dung_seo_title" :value="old('tuyen_dung_seo_title', $seoPage->tuyen_dung_seo_title)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('tuyen_dung_seo_title')" />
                    <span id="tuyen_dung_seo_title_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>

                <div class="w-full">
                    <x-input-label for="tuyen_dung_seo_description" :value="__('Description')" />
                    <x-text-input id="tuyen_dung_seo_description" name="tuyen_dung_seo_description" :value="old('tuyen_dung_seo_description', $seoPage->tuyen_dung_seo_description)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('tuyen_dung_seo_description')" />
                    <span id="tuyen_dung_seo_description_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>

                <div class="w-full">
                    <x-input-label for="tuyen_dung_seo_keywords" :value="__('KeyWords')" />
                    <x-text-input id="tuyen_dung_seo_keywords" name="tuyen_dung_seo_keywords" :value="old('tuyen_dung_seo_keywords', $seoPage->tuyen_dung_seo_keywords)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('tuyen_dung_seo_keywords')" />
                    <span id="tuyen_dung_seo_keywords_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>
            </div>
        </div>


        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Lưu') }}</x-primary-button>
        </div>
    </form>

</x-app-layout>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        function updateCharCount(inputElement, countElementId) {
            const countElement = document.getElementById(countElementId)
            if (countElement) {
                countElement.textContent = `Ký tự: ${inputElement.value.length}/255`;
            }
        }

        const inputs = document.querySelectorAll('.count_text')

        inputs.forEach(input => {
            const countElementId = input.id + '_count'

            updateCharCount(input, countElementId)

            input.addEventListener('input', function() {
                updateCharCount(input, countElementId)
            })
        });

    })
</script>