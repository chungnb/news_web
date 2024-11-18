<x-app-layout>
    <div class="max-w-xl m-auto bg-white shadow sm:rounded-lg p-4">

        <h1 class="text-xl font-bold">Thêm mới vai trò</h1>

        <form action="{{ route('admin.user.addPermission') }}" method="POST" class="mt-6 space-y-6">
            @csrf
            @method('post')

            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required autofocus
                    autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Lưu') }}</x-primary-button>
            </div>
        </form>
    </div>

    <div class="max-w-xl m-auto bg-white shadow sm:rounded-lg p-4 mt-8">

        <h1 class="text-xl font-bold">Thêm mới Roles</h1>

        <form action="{{ route('admin.user.addRoles') }}" method="POST" class="mt-6 space-y-6">
            @csrf
            @method('post')

            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required autofocus
                    autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Lưu') }}</x-primary-button>
            </div>
        </form>
    </div>

</x-app-layout>
