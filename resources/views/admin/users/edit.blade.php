<x-app-layout>
    <section class="max-w-3xl m-auto bg-white shadow sm:rounded-lg p-4">
        <h1 class="text-xl font-bold">Cập nhật thông tin</h1>

        <form action="{{ route('admin.users.update', $users->id) }}" method="post" class="mt-6 space-y-6">
            @csrf
            @method('put')

            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" name="name" type="text" :value="old('name', $users->name)" class="mt-1 block w-full"
                    required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" name="email" type="email" :value="old('name', $users->email)" class="mt-1 block w-full"
                    required />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
            </div>

            <div>
                <x-input-label for="update_password_current_password" :value="__('Current Password')" />
                <x-text-input id="update_password_current_password" name="current_password" type="password"
                    class="mt-1 block w-full" autocomplete="current-password" />
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                    autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->

            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="role" :value="__('Roles')" />

                <x-text-input id="role" class="block mt-1 w-full" type="hidden" name="role_old" required :value="old('role', $current_role->name)" />
                <x-text-input id="role" class="block mt-1 w-full" type="text" name="role" required :value="old('role', $current_role->name)"/>

                <x-input-error :messages="$errors->get('role')" class="mt-2" />
            </div>

            <div>
                <div class="flex flex-wrap justify-between items-center">

                    <x-input-label for="role" :value="__('Phân vai trò')" />

                    {{-- <a class="text-blue-500 font-bold" href="{{ route('admin.user.addPermission.view') }}">Thêm mới
                        quyền</a> --}}

                </div>

                <div class="grid w-full grid-cols-4 items-center gap-4 mt-4">

                    @foreach ($permission as $item_permission)
                        <label class="inline-flex items-center mb-2">
                            <input type="checkbox" class="form-checkbox" name="permission[]"
                                @foreach ($current_permission as $cr_permission)
                                @if ($item_permission->id == $cr_permission->id) checked @endif @endforeach
                                value="{{ $item_permission->name }}" id="{{ $item_permission->id }}" />
                            <span class="ml-2 text-sm text-gray-900">
                                {{ $item_permission->title == null ? $item_permission->name : $item_permission->title }}
                            </span>
                        </label>
                    @endforeach
                </div>
            </div>

            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Lưu') }}</x-primary-button>
            </div>
        </form>
    </section>
</x-app-layout>
