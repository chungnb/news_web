<x-app-layout>
    @php
        $rows = $news->map(function ($item, $index) {
            return [$item->id, $item->title, $item->image, $item->content, $item->seo_score, $item->published_at];
        });
        $actions = [
            [
                'route' => 'admin.news.edit',
                'method' => 'GET',
                'class' => 'warning',
                'label' => 'Edit',
                'confirm' => false,
                'permission' => 'edit news',
            ],
            [
                'route' => 'admin.news.destroy',
                'method' => 'DELETE',
                'class' => 'danger',
                'label' => 'Delete',
                'confirm' => true,
                'permission' => 'delete news',
            ],
        ];
    @endphp
    <x-table :headers="$headers" :rows="$rows" :actions="$actions" :dataTable="$news" />
</x-app-layout>
