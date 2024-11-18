<x-app-layout>
    <section class="w-full m-auto bg-white shadow sm:rounded-lg p-4">
        <h1 class="text-xl font-bold">Thêm mới video</h1>

        <form action="{{ route('admin.tuyen-dung.store') }}" method="post" class="mt-6 space-y-6">
            @csrf
            @method('post')

            <div>
                <x-input-label for="title" :value="__('Tiêu đề')" />
                <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" required autofocus
                    autocomplete="title" />
                <x-input-error class="mt-2" :messages="$errors->get('title')" />
            </div>

            <div class="mt-4">
                <x-input-label for="url" :value="__('URL')" />
    
                <x-text-input id="url" class="block mt-1 w-full"
                                type="text"
                                name="url"
                                required />
    
                <x-input-error :messages="$errors->get('url')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="desciption" :value="__('Mô tả')" />
    
                <x-text-input id="desciption" class="block mt-1 w-full"
                                type="text"
                                name="desciption"
                                required />
    
                <x-input-error :messages="$errors->get('desciption')" class="mt-2" />
            </div>

            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Lưu') }}</x-primary-button>
            </div>
        </form>
    </section>
</x-app-layout>
