<x-app-layout>
    <section class="w-full m-auto bg-white shadow sm:rounded-lg p-4">
        <h1 class="text-xl font-bold">Import Script</h1>

        <form action="{{ route('admin.script.store') }}" method="post" class="mt-6 space-y-6" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="mt-4">
                <x-input-label for="header" :value="__('Header')" class="mb-2" />
                <textarea name="header" class="header mt-1 block w-full" rows='10'>{{ $script['header'] }}</textarea>
                <x-input-error :messages="$errors->get('header')" />
            </div>

            <div class="mt-4">
                <x-input-label for="body" :value="__('Body')" class="mb-2" />
                <textarea name="body" class="body mt-1 block w-full" rows='10'>{{ $script['body'] }}</textarea>
                <x-input-error :messages="$errors->get('body')" />
            </div>

            <div class="mt-4">
                <x-input-label for="footer" :value="__('Footer')" class="mb-2" />
                <textarea name="footer" class="footer mt-1 block w-full" rows='10'>{{ $script['footer'] }}</textarea>
                <x-input-error :messages="$errors->get('footer')" />
            </div>

            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Lưu') }}</x-primary-button>
            </div>
        </form>
    </section>
</x-app-layout>


<style>
    textarea {
    border: 1px solid;
    border-color:#e5e7eb; /* Semi-transparent orange */
}
</style>