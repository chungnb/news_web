<x-app-layout>
    @php
        $rows = $videos->map(function ($item, $index) {
            return [$item->id, $item->title, $item->url, $item->published_at];
        });
        $actions = [
            [
                'route' => 'admin.videos.edit',
                'method' => 'GET',
                'class' => 'warning',
                'label' => 'Cập nhật',
                'confirm' => false,
                'permission' => 'edit videos',
            ],
            [
                'route' => 'admin.videos.destroy',
                'method' => 'DELETE',
                'class' => 'danger',
                'label' => 'Xóa',
                'confirm' => true,
                'permission' => 'delete videos',
            ],
        ];
    @endphp

    @can('add videos')
        <div class="text-end">
            <a class="bg-radient-blue text-white rounded-full px-3 py-2 font-semibold"
                href="/{{ request()->path() }}/create">Tạo
                mới</a>
        </div>
    @endcan

    <div class="flex justify-between items-center mb-4">
        <form action="{{ route(request()->route()->getName()) }}" method="GET" class="flex items-center">
            <input type="text" name="search" value="{{ request()->query('search') }}" placeholder="Tìm kiếm"
                class="px-2 py-1 border rounded-md">
            <button type="submit"
                class="bg-white text-blue-500 border-[1px] hover:bg-blue-500 hover:text-white duration-300 rounded px-2 py-1 font-semibold ml-2">Tìm
                kiếm</button>
        </form>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    @foreach ($headers as $header)
                        <th class="px-6 py-3">{{ $header }}</th>
                    @endforeach
                    @if (!empty($actions))
                        <th class="px-6 py-3">Actions</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($rows as $row)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        @foreach ($row as $cell)
                            @if (is_string($cell) && str_contains($cell, '/embed'))
                                <td class="max-w-[500px]">
                                    <iframe width="300" height="150" src="{{ $cell }}"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </td>
                            @else
                                <td class="px-6 py-4 max-w-[500px]"><span class="text-eclip">{{ $cell }}</span>
                                </td>
                            @endif
                        @endforeach
                        @if (!empty($actions))
                            <td class="px-6 py-4 flex gap-3">
                                @foreach ($actions as $action)
                                    @can($action['permission'])
                                        <form action="{{ route($action['route'], $row[0]) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            @method($action['method'])
                                            <button type="submit"
                                                @if ($action['confirm']) onclick="return confirm('Bạn có chắc muốn xóa bản ghi này không?')" @endif
                                                class="py-2 px-3 border-[1px] rounded-lg font-medium text-blue-600 dark:text-blue-500 hover:underline btn btn-{{ $action['class'] }}">{{ $action['label'] }}</button>
                                        </form>
                                    @endcan
                                @endforeach
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-6 flex justify-center items-center mb-6">
            {{ $videos->links() }}
        </div>
    </div>

</x-app-layout>