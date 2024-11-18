<x-app-layout>
    {{-- {{ route('admin.seoPageLvkd.store', $seoPageLvkd->id) }} --}}
    <form action="{{route('admin.seoPage.store.lvkd', $seoPageLvkd->id)}}" method="post" class="mt-6 space-y-6">
        @csrf
        @method('put')
        <div class="seo_component">
            <h3 class="font-bold text-xl">LVKD Xuất Nhập Khẩu Page Seo</h3>

            <div class="border-[1px] rounded p-3 flex flex-col gap-4 justify-between">
                <div class="w-full">
                    <x-input-label for="xnk_seo_heading" :value="__('Heading')" />
                    <x-text-input id="xnk_seo_heading" name="xnk_seo_heading" :value="old('xnk_seo_heading', $seoPageLvkd->xnk_seo_heading)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('xnk_seo_heading')" />
                    <span id="xnk_seo_heading_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>

                <div class="w-full">
                    <x-input-label for="xnk_seo_title" :value="__('Title')" />
                    <x-text-input id="xnk_seo_title" name="xnk_seo_title" :value="old('xnk_seo_title', $seoPageLvkd->xnk_seo_title)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('xnk_seo_title')" />
                    <span id="xnk_seo_title_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>

                <div class="w-full">
                    <x-input-label for="xnk_seo_description" :value="__('Description')" />
                    <x-text-input id="xnk_seo_description" name="xnk_seo_description" :value="old('xnk_seo_description', $seoPageLvkd->xnk_seo_description)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('xnk_seo_description')" />
                    <span id="xnk_seo_description_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>

                <div class="w-full">
                    <x-input-label for="xnk_seo_keywords" :value="__('KeyWords')" />
                    <x-text-input id="xnk_seo_keywords" name="xnk_seo_keywords" :value="old('xnk_seo_keywords', $seoPageLvkd->xnk_seo_keywords)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('xnk_seo_keywords')" />
                    <span id="xnk_seo_keywords_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>
            </div>
        </div>

        {{-- KDSX --}}
        <div class="seo_component">
            <h3 class="font-bold text-xl">LVKD Kinh Doanh Sản Xuất Page Seo</h3>

            <div class="border-[1px] rounded p-3 flex flex-col gap-4 justify-between">
                <div class="w-full">
                    <x-input-label for="kd_seo_heading" :value="__('Heading')" />
                    <x-text-input id="kd_seo_heading" name="kd_seo_heading" :value="old('kd_seo_heading', $seoPageLvkd->kd_seo_heading)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('kd_seo_heading')" />
                    <span id="kd_seo_heading_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>

                <div class="w-full">
                    <x-input-label for="kd_seo_title" :value="__('Title')" />
                    <x-text-input id="kd_seo_title" name="kd_seo_title" :value="old('kd_seo_title', $seoPageLvkd->kd_seo_title)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('kd_seo_title')" />
                    <span id="kd_seo_title_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>

                <div class="w-full">
                    <x-input-label for="kd_seo_description" :value="__('Description')" />
                    <x-text-input id="kd_seo_description" name="kd_seo_description" :value="old('kd_seo_description', $seoPageLvkd->kd_seo_description)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('kd_seo_description')" />
                    <span id="kd_seo_description_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>

                <div class="w-full">
                    <x-input-label for="kd_seo_keywords" :value="__('KeyWords')" />
                    <x-text-input id="kd_seo_keywords" name="kd_seo_keywords" :value="old('kd_seo_keywords', $seoPageLvkd->kd_seo_keywords)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('kd_seo_keywords')" />
                    <span id="kd_seo_keywords_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>
            </div>
        </div>

        {{-- Ecommerce --}}
        <div class="seo_component">
            <h3 class="font-bold text-xl">LVKD Ecommerce Page Seo</h3>

            <div class="border-[1px] rounded p-3 flex flex-col gap-4 justify-between">
                <div class="w-full">
                    <x-input-label for="ecommerce_seo_heading" :value="__('Heading')" />
                    <x-text-input id="ecommerce_seo_heading" name="ecommerce_seo_heading" :value="old('ecommerce_seo_heading', $seoPageLvkd->ecommerce_seo_heading)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('ecommerce_seo_heading')" />
                    <span id="ecommerce_seo_heading_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>

                <div class="w-full">
                    <x-input-label for="ecommerce_seo_title" :value="__('Title')" />
                    <x-text-input id="ecommerce_seo_title" name="ecommerce_seo_title" :value="old('ecommerce_seo_title', $seoPageLvkd->ecommerce_seo_title)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('ecommerce_seo_title')" />
                    <span id="ecommerce_seo_title_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>

                <div class="w-full">
                    <x-input-label for="ecommerce_seo_description" :value="__('Description')" />
                    <x-text-input id="ecommerce_seo_description" name="ecommerce_seo_description" :value="old('ecommerce_seo_description', $seoPageLvkd->ecommerce_seo_description)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('ecommerce_seo_description')" />
                    <span id="ecommerce_seo_description_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                </div>

                <div class="w-full">
                    <x-input-label for="ecommerce_seo_keywords" :value="__('KeyWords')" />
                    <x-text-input id="ecommerce_seo_keywords" name="ecommerce_seo_keywords" :value="old('ecommerce_seo_keywords', $seoPageLvkd->ecommerce_seo_keywords)" type="text"
                        class="mt-1 block w-full count_text" />
                    <x-input-error class="mt-2" :messages="$errors->get('ecommerce_seo_keywords')" />
                    <span id="ecommerce_seo_keywords_count" class="text-right block mt-2 text-sm text-gray-500"></span>
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