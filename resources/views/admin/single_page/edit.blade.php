<x-app-layout>
    <section class="w-full m-auto bg-white shadow sm:rounded-lg p-4">
        <h1 class="text-xl font-bold">Cập nhật trang đơn</h1>

        <form action="{{ route('admin.page-custom.update', $pages->id) }}" method="post" class="mt-6 space-y-6">
            @csrf
            @method('put')

            <div>
                <x-input-label for="title" :value="__('Tiêu đề')" />
                <x-text-input id="title" name="title" :value="old('title', $pages->title)" type="text" class="mt-1 block w-full"
                    required autofocus autocomplete="title" />
                <x-input-error class="mt-2" :messages="$errors->get('title')" />
            </div>

            <div>
                <x-input-label for="slug" :value="__('Slug')" />
                <x-text-input id="slug" name="slug" type="text" :value="old('slug', $pages->slug)" class="mt-1 block w-full"
                    required autocomplete="title" />
                <p class="my-2 text-xs">ví dụ: <i class="text-blue-500">dieu-khoan-dich-vu</i></p>
                <x-input-error class="mt-2" :messages="$errors->get('slug')" />
            </div>

            <div class="mt-4">
                <x-input-label for="content" :value="__('Nội dung')" class="mb-2" />
                <textarea id="content" name="content" class="editor-config">
                    {{ $pages->content }}
                </textarea>

                <x-input-error :messages="$errors->get('content')" class="mt-2" />

                <div class="ck ck-word-count flex justify-end items-center gap-2 mt-2">
                    <div class="ck-word-count__words"></div>
                    <div class="ck-word-count__characters"></div>
                </div>
            </div>

            <div class="mt-4">
                <div class="flex items-center mb-4">
                    <input id="default-checkbox" type="checkbox" name="is_active" :value="ACTIVE"
                        @if ($pages->is_active == ACTIVE) checked @endif
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
