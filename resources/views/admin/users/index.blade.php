<x-app-layout>
    @php
        $rows = $users->map(function ($item, $index) {
            $role = '';

            if ($item->roles->isNotEmpty()) {
                $role = $item->roles[0]->name;
            }

            return [$item->id, $item->name, $item->email, $role, $item->created_at];
        });
        $actions = [
            [
                'route' => 'admin.users.edit',
                'method' => 'GET',
                'class' => 'warning',
                'label' => 'Edit',
                'confirm' => false,
                'permission' => null,
            ],
            [
                'route' => 'admin.users.destroy',
                'method' => 'DELETE',
                'class' => 'danger',
                'label' => 'Delete',
                'confirm' => true,
                'permission' => null,
            ],
        ];
    @endphp

    {{-- <div>
        <form action="{{ route('admin.user.addPermission') }}" method="POST">
            @csrf
            @method('post')
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required autofocus
                    autocomplete="name" />
            </div>

            <button type="submit">Submit</button>
        </form>
    </div> --}}

    <x-table :headers="$headers" :rows="$rows" :actions="$actions" :dataTable="$users" />

</x-app-layout>
