<x-app-layout>
    @php
        $rows = $pageCustom->map(function ($item, $index) {
            return [$item->id, $item->title, $item->slug, $item->content, $item->is_active ? DISPLAY : NOT_DISPLAY];
        });
        $actions = [
            [
                'route' => 'admin.page-custom.edit',
                'method' => 'GET',
                'class' => 'warning',
                'label' => 'Cập nhật',
                'confirm' => false,
                'permission' => 'edit custom pages',
            ],
            [
                'route' => 'admin.page-custom.destroy',
                'method' => 'DELETE',
                'class' => 'danger',
                'label' => 'Xóa',
                'confirm' => true,
                'permission' => 'delete custom pages',
            ],
        ];
    @endphp
    <x-table :headers="$headers" :rows="$rows" :actions="$actions" :dataTable="$pageCustom" />
</x-app-layout>
