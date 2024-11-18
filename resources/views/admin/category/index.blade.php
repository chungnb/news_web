<x-app-layout>
    @php
        $rows = $category->map(function ($item, $index) {
            return [$item->id, $item->name, $item->slug, $item->is_active ? DISPLAY : NOT_DISPLAY];
        });
        $actions = [
            [
                'route' => 'admin.category.edit',
                'method' => 'GET',
                'class' => 'warning',
                'label' => 'Cập nhật',
                'confirm' => false,
                'permission' => 'edit category'
            ],
            [
                'route' => 'admin.category.destroy',
                'method' => 'DELETE',
                'class' => 'danger',
                'label' => 'Xóa',
                'confirm' => true,
                'permission' => 'delete category'
            ],
        ];
    @endphp
   <x-table :headers="$headers" :rows="$rows" :actions="$actions" :dataTable="$category" />

</x-app-layout>
