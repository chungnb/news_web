<x-app-layout>
    @php
        $rows = $applicant->map(function ($item, $index) {
            return [
                $item->id,
                $item->full_name,
                $item->phone,
                $item->email,
                $item->position,
                $item->resume,
                $item->created_at,
            ];
        });
        $actions = [];
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
                @foreach ($applicant as $row)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                        <td class="px-6 py-4 max-w-[500px]"><span class="text-eclip">{{ $row->id }}</span>
                        </td>
                        <td class="px-6 py-4 max-w-[500px]"><span class="text-eclip">{{ $row->full_name }}</span>
                        </td>
                        <td class="px-6 py-4 max-w-[500px]"><span class="text-eclip">{{ $row->phone }}</span>
                        </td>
                        <td class="px-6 py-4 max-w-[500px]"><span class="text-eclip">{{ $row->email }}</span>
                        </td>
                        <td class="px-6 py-4 max-w-[500px]"><span class="text-eclip">{{ $row->position }}</span>
                        </td>
                        <td class="px-6 py-4 max-w-[500px]"><span class="text-eclip">
                                @if ($row->resume)
                                    <a class="px-2 py-1 border-[1px] rounded inline-block bg-blue-400 text-white"
                                        href="{{ asset('storage/' . $row->resume) }}" download>Download cv</a>
                                @endif
                            </span>
                        </td>
                        <td class="px-6 py-4 max-w-[500px]"><span class="text-eclip">{{ $row->created_at }}</span>
                        </td>

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
            {{ $applicant->links() }}
        </div>
    </div>
</x-app-layout>
