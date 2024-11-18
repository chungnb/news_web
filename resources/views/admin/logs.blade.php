<x-app-layout>

    @php

        $rows = $logs->map(function ($item, $index) {
            return [$item->id, $item->user_name, $item->url , $item->action, $item->created_at];
        });
        $actions = [];

    @endphp

    <x-table :headers="$headers" :rows="$rows" :actions="$actions" :dataTable="$logs" :showCreateButton="false" />

</x-app-layout>
