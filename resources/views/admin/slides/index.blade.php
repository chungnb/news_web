<x-app-layout>
    @php
        $rows = $slides->map(function ($item, $index) {
            return [$item->id, $item->image, $item->content, $item->is_active ? DISPLAY : NOT_DISPLAY];
        });
        $actions = [
            [
                'route' => 'admin.slides.edit',
                'method' => 'GET',
                'class' => 'warning',
                'label' => 'Edit',
                'confirm' => false,
                'permission' => 'edit slides',
            ],
            [
                'route' => 'admin.slides.destroy',
                'method' => 'DELETE',
                'class' => 'danger',
                'label' => 'Delete',
                'confirm' => true,
                'permission' => 'delete slides',
            ],
        ];
    @endphp
    <x-table :headers="$headers" :rows="$rows" :actions="$actions" :dataTable="$slides" :showSearchBox="false" />
</x-app-layout>
