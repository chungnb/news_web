<x-app-layout>
    <section class="w-full m-auto bg-white shadow sm:rounded-lg p-4">
        <h1 class="text-xl font-bold">Thêm mới Slide</h1>

        <form action="{{ route('admin.slides.store') }}" method="post" class="mt-6 space-y-6" enctype="multipart/form-data">
            @csrf
            @method('post')

            <div>

                <x-input-label for="image" :value="__('Banner')" />

                <label class="block mt-2">
                    <span class="sr-only">Chọn ảnh</span>
                    <input type="file" id="image" name="image"
                        class="block w-full text-sm text-slate-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-full file:border-0
                        file:text-sm file:font-semibold
                        file:bg-violet-50 file:text-violet-700
                        hover:file:bg-violet-100
                    " />
                </label>

                <div class="shrink-0 my-2">
                    <img id="featured_image_preview" class="h-64 w-128 object-cover rounded-md"
                        src="{{ isset($post) ? Storage::url($post->featured_image) : '' }}" alt="Ảnh minh họa" />
                </div>

                <x-input-error class="mt-2" :messages="$errors->get('image')" />

            </div>

            <div class="mt-4">
                <x-input-label for="title" :value="__('Title')" />

                {{-- <textarea id="title" class="block mt-1 w-full border-[1px] px-2" type="text" name="title" required ></textarea> --}}
                <x-text-input id="slug-display" name="title" type="text"
                class="slug-text mt-1 block w-full" />

                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="content" :value="__('Content')" />

                <textarea id="content" class="block mt-1 w-full border-[1px] px-2" type="text" name="content" ></textarea>

                <x-input-error :messages="$errors->get('content')" class="mt-2" />
            </div>

            <div class="mt-4">
                <div class="flex items-center mb-4">
                    <input id="default-checkbox" type="checkbox" name="is_active" :value="ACTIVE" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hiển thị</label>
                </div>
            </div>

            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Lưu') }}</x-primary-button>
            </div>
        </form>
    </section>
</x-app-layout>
<script>
    document.getElementById('image').onchange = function(evt) {
        const [file] = this.files
        if (file) {
            // if there is an image, create a preview in featured_image_preview
            document.getElementById('featured_image_preview').src = URL.createObjectURL(file)
        }
    }
</script>
