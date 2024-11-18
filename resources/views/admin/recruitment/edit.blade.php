<x-app-layout>
    <section class="w-full m-auto bg-white shadow sm:rounded-lg p-4">
        <h1 class="text-xl font-bold">Cập nhật tin tuyển dụng</h1>

        <form action="{{ route('admin.tuyen-dung.update', $recruitment->id) }}" method="post" class="mt-6 space-y-6">
            @csrf
            @method('put')

            <div>
                <x-input-label for="title" :value="__('Tiêu đề')" />
                <x-text-input id="title" name="title" type="text" :value="old('title', $recruitment->title)"
                    class="title-slug mt-1 block w-full" required autofocus autocomplete="title" />
                <x-input-error class="mt-2" :messages="$errors->get('title')" />
            </div>

            <div>
                <x-input-label for="slug" :value="__('Slug')" />
                <x-text-input :value="old('slug', $recruitment->slug)" id="slug" name="slug" type="hidden"
                    class="slug-text mt-1 block w-full" required />
                <x-text-input id="slug-display" :disabled="true" name="slug-display" type="text"
                    class="slug-text mt-1 block w-full" :value="old('slug', $recruitment->slug)" />
                <x-input-error class="mt-2" :messages="$errors->get('slug')" />
            </div>

            <div class="mt-4">
                <x-input-label for="description" :value="__('Nội dung')" class="mb-2" />
                <textarea id="description" name="description" class="editor-config">
                    {{ $recruitment->description }}
                                </textarea>

                <x-input-error :messages="$errors->get('description')" class="mt-2" />

                <div class="ck ck-word-count flex justify-end items-center gap-2 mt-2">
                    <div class="ck-word-count__words"></div>
                    <div class="ck-word-count__characters"></div>
                </div>
            </div>

            <div class="seo_component">
                <h3 class="font-bold text-xl">Seo</h3>

                <div class="border-[1px] rounded p-3 flex flex-col gap-4 justify-between">
                    <div class="w-full">
                        <x-input-label for="seo_heading" :value="__('Heading')" />
                        <x-text-input id="seo_heading" name="seo_heading" :value="old('seo_heading', $recruitment->seo_heading)" type="text"
                            class="mt-1 block w-full count_text" />
                        <x-input-error class="mt-2" :messages="$errors->get('seo_heading')" />
                        <span id="seo_heading_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                    </div>

                    <div class="w-full">
                        <x-input-label for="seo_title" :value="__('Title')" />
                        <x-text-input id="seo_title" name="seo_title" :value="old('seo_title', $recruitment->seo_title)" type="text"
                            class="mt-1 block w-full count_text" />
                        <x-input-error class="mt-2" :messages="$errors->get('seo_title')" />
                        <span id="seo_title_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                    </div>

                    <div class="w-full">
                        <x-input-label for="seo_description" :value="__('Description')" />
                        <x-text-input id="seo_description" name="seo_description" :value="old('seo_description', $recruitment->seo_description)" type="text"
                            class="mt-1 block w-full count_text" />
                        <x-input-error class="mt-2" :messages="$errors->get('seo_description')" />
                        <span id="seo_description_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                    </div>

                    <div class="w-full">
                        <x-input-label for="seo_keywords" :value="__('KeyWords')" />
                        <x-text-input id="seo_keywords" name="seo_keywords" :value="old('seo_keywords', $recruitment->seo_keywords)" type="text"
                            class="mt-1 block w-full count_text" />
                        <x-input-error class="mt-2" :messages="$errors->get('seo_keywords')" />
                        <span id="seo_keywords_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <x-input-label for="salary" :value="__('Lương')" />

                <x-text-input id="salary" class="block mt-1 w-full" :value="old('salary', $recruitment->salary)" type="text" name="salary"
                    required />

                <x-input-error :messages="$errors->get('salary')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="working_time" :value="__('Thời gian làm việc')" />

                <x-text-input id="working_time" class="block mt-1 w-full" :value="old('working_time', $recruitment->working_time)" type="text"
                    name="working_time" required />

                <x-input-error :messages="$errors->get('working_time')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="num_of_recruitment" :value="__('Số lượng tuyển')" />

                <x-text-input id="num_of_recruitment" class="block mt-1 w-full" :value="old('num_of_recruitment', $recruitment->num_of_recruitment)" type="number"
                    name="num_of_recruitment" required />

                <x-input-error :messages="$errors->get('num_of_recruitment')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="location" :value="__('Địa chỉ')" />

                <x-text-input id="location" class="block mt-1 w-full" :value="old('location', $recruitment->location)" type="text" name="location"
                    required />

                <x-input-error :messages="$errors->get('location')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="position" :value="__('Chức vụ')" />

                <x-text-input id="position" class="block mt-1 w-full" :value="old('position', $recruitment->position)" type="text" name="position"
                    required />

                <x-input-error :messages="$errors->get('position')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="contact" :value="__('Liên hệ')"/>

                <x-text-input id="contact" value="{{ old('contact_address', $recruitment->contact_address) }}" class="block mt-1 w-full" type="text"
                    name="contact_address" />

                <x-input-error :messages="$errors->get('contact_address')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="end_time" :value="__('Thời hạn')" :isRequired="true" />
                <x-text-input id="end_time" class="block mt-1 w-full sm:w-[20%]" type="date" :value="old('end_time', \Carbon\Carbon::parse($recruitment->end_time)->format('Y-m-d'))"
                    min="{{ date('Y-m-d') }}" max="2030-12-31" name="end_time" required />

                <x-input-error :messages="$errors->get('end_time')" class="mt-2" />
            </div>

            <div class="mt-4">
                <div class="flex items-center mb-4">
                    <input id="default-checkbox" type="checkbox" name="is_active" :value="ACTIVE"
                        @if ($recruitment->is_active === ACTIVE) checked @endif
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hiển
                        thị</label>
                </div>
            </div>

            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Lưu') }}</x-primary-button>
            </div>
        </form>
    </section>
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
    function string_to_slug(str) {
        var map = {
            'à': 'a',
            'á': 'a',
            'ạ': 'a',
            'ả': 'a',
            'ã': 'a',
            'â': 'a',
            'ầ': 'a',
            'ấ': 'a',
            'ậ': 'a',
            'ẩ': 'a',
            'ẫ': 'a',
            'ă': 'a',
            'ằ': 'a',
            'ắ': 'a',
            'ặ': 'a',
            'ẳ': 'a',
            'ẵ': 'a',
            'è': 'e',
            'é': 'e',
            'ẹ': 'e',
            'ẻ': 'e',
            'ẽ': 'e',
            'ê': 'e',
            'ề': 'e',
            'ế': 'e',
            'ệ': 'e',
            'ể': 'e',
            'ễ': 'e',
            'ì': 'i',
            'í': 'i',
            'ị': 'i',
            'ỉ': 'i',
            'ĩ': 'i',
            'ò': 'o',
            'ó': 'o',
            'ọ': 'o',
            'ỏ': 'o',
            'õ': 'o',
            'ô': 'o',
            'ồ': 'o',
            'ố': 'o',
            'ộ': 'o',
            'ổ': 'o',
            'ỗ': 'o',
            'ơ': 'o',
            'ờ': 'o',
            'ớ': 'o',
            'ợ': 'o',
            'ở': 'o',
            'ỡ': 'o',
            'ù': 'u',
            'ú': 'u',
            'ụ': 'u',
            'ủ': 'u',
            'ũ': 'u',
            'ư': 'u',
            'ừ': 'u',
            'ứ': 'u',
            'ự': 'u',
            'ử': 'u',
            'ữ': 'u',
            'ỳ': 'y',
            'ý': 'y',
            'ỵ': 'y',
            'ỷ': 'y',
            'ỹ': 'y',
            'đ': 'd',
            'À': 'A',
            'Á': 'A',
            'Ạ': 'A',
            'Ả': 'A',
            'Ã': 'A',
            'Â': 'A',
            'Ầ': 'A',
            'Ấ': 'A',
            'Ậ': 'A',
            'Ẩ': 'A',
            'Ẫ': 'A',
            'Ă': 'A',
            'Ằ': 'A',
            'Ắ': 'A',
            'Ặ': 'A',
            'Ẳ': 'A',
            'Ẵ': 'A',
            'È': 'E',
            'É': 'E',
            'Ẹ': 'E',
            'Ẻ': 'E',
            'Ẽ': 'E',
            'Ê': 'E',
            'Ề': 'E',
            'Ế': 'E',
            'Ệ': 'E',
            'Ể': 'E',
            'Ễ': 'E',
            'Ì': 'I',
            'Í': 'I',
            'Ị': 'I',
            'Ỉ': 'I',
            'Ĩ': 'I',
            'Ò': 'O',
            'Ó': 'O',
            'Ọ': 'O',
            'Ỏ': 'O',
            'Õ': 'O',
            'Ô': 'O',
            'Ồ': 'O',
            'Ố': 'O',
            'Ộ': 'O',
            'Ổ': 'O',
            'Ỗ': 'O',
            'Ơ': 'O',
            'Ờ': 'O',
            'Ớ': 'O',
            'Ợ': 'O',
            'Ở': 'O',
            'Ỡ': 'O',
            'Ù': 'U',
            'Ú': 'U',
            'Ụ': 'U',
            'Ủ': 'U',
            'Ũ': 'U',
            'Ư': 'U',
            'Ừ': 'U',
            'Ứ': 'U',
            'Ự': 'U',
            'Ử': 'U',
            'Ữ': 'U',
            'Ỳ': 'Y',
            'Ý': 'Y',
            'Ỵ': 'Y',
            'Ỷ': 'Y',
            'Ỹ': 'Y',
            'Đ': 'D',
            'ñ': 'n',
            'ç': 'c',
            '·': '-',
            '/': '-',
            '_': '-',
            ',': '-',
            ':': '-',
            ';': '-'
        };

        str = str.replace(/[^a-zA-Z0-9\s]/g, function(match) {
            return map[match] || '';
        });

        str = str.replace(/^\s+|\s+$/g, ''); // trim
        str = str.toLowerCase();

        str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
            .replace(/\s+/g, '-') // collapse whitespace and replace by -
            .replace(/-+/g, '-'); // collapse dashes

        return str;
    }

    document.querySelector('.title-slug').onchange = function(e) {
        const text = e.target.value
        if (text) {
            const str = string_to_slug(text)
            document.getElementById('slug').value = str;
            document.getElementById('slug-display').value = str;
        }
    }
</script>
