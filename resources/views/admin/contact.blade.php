<x-app-layout>
    @php
        $rows = $contact->map(function ($item, $index) {
            return [$item->id, $item->name, $item->email, $item->phone, $item->messages, $item->created_at];
        });
        $actions = [
            // [
            //     'route' => 'admin.contact.destroy',
            //     'method' => 'DELETE',
            //     'class' => 'danger',
            //     'label' => 'Xóa',
            //     'confirm' => true,
            // ],
        ];
    @endphp
   <x-table :headers="$headers" :rows="$rows" :actions="$actions" :dataTable="$contact" :showCreateButton="false"/>

</x-app-layout>
