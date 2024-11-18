<x-app-layout>
    @php
        $rows = $recruitment->map(function ($item, $index) {
            return [$item->id, $item->title, $item->description, $item->salary];
        });
        $actions = [
            [
                'route' => 'admin.tuyen-dung.edit',
                'method' => 'GET',
                'class' => 'warning',
                'label' => 'Cập nhật',
                'confirm' => false,
                'permission' => 'edit recruitment',
            ],
            [
                'route' => 'admin.tuyen-dung.destroy',
                'method' => 'DELETE',
                'class' => 'danger',
                'label' => 'Xóa',
                'confirm' => true,
                'permission' => 'delete recruitment',
            ],
        ];
    @endphp
    <x-table :headers="$headers" :rows="$rows" :actions="$actions" :dataTable="$recruitment" />
</x-app-layout>
