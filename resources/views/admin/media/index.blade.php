<x-app-layout>
    @php

        $actions = [];
    @endphp
    <h1 class="md:text-2xl font-bold">Media</h1>

    <div class="text-end">
        <a class="bg-radient-blue text-white rounded-full px-3 py-2 font-semibold"
            href="/{{ request()->path() }}/create">Tạo
            mới</a>
    </div>

    <section class="media_search border-[1px] rounded my-8 flex items-center justify-end flex-wrap px-4 py-2">
        {{-- <div class="py-2 flex gap-3 items-center">
            <a href=""><i class="text-xl text-gray-500 hover:text-blue-500 fa-solid fa-table-list"></i></a>
            <a href=""><i class="text-xl text-gray-500 hover:text-blue-500 fa-solid fa-table-cells"></i></a>

            <a href=""
                class="p-1 px-2 border-[1px] rounded hover:text-white text-blue-500 hover:bg-blue-500">Lọc</a>
        </div> --}}

        <form action="{{ route(request()->route()->getName()) }}" method="GET" class="flex items-center">
            <input type="text" name="search" value="{{ request()->query('search') }}" placeholder="Tìm kiếm"
                class="px-2 py-1 border rounded-md">
            <button type="submit"
                class="bg-white text-blue-500 border-[1px] hover:bg-blue-500 hover:text-white duration-300 rounded px-2 py-1 font-semibold ml-2">Tìm
                kiếm</button>
        </form>
    </section>

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
                @foreach ($media as $row)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                        <td class="p-2 item_media w-[500px]">
                            <div class="flex gap-3 w-full">
                                <img class="object-contain" width="70" height="70"
                                    src="/storage/{{ $row->url }}" alt="" />
                                <div>
                                    <a href="">{{ $row->title }}</a>

                                    <p class="my-2">{{ $row->file_name }}</p>

                                    <div class="h-[20px]">
                                        <div class="action_media flex flex-wrap gap-1">
                                            @can('edit media')
                                                <a class="text-primary"
                                                    href="{{ route('admin.media.edit', $row->id) }}">Chỉnh sửa</a> |
                                            @endcan

                                            @can('delete media')
                                                <form action="{{ route('admin.media.destroy', $row->id) }}" method="POST"
                                                    style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        onclick="return confirm('Bạn có chắc muốn xóa bản ghi này không?')"
                                                        class="text-primary">Xóa file</button>
                                                </form> |
                                            @endcan
                                            {{-- <a class="text-primary" href="">Xem</a> | --}}
                                            <button onclick="onCopyLink('{{ url('storage/' . $row->url) }}')"
                                                class="text-primary">Sao chép URL</button> |
                                            <a class="text-primary" target="blank"
                                                href="{{ url('storage/' . $row->url) }}">Tải tài liệu</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </td>
                        <td class="p-2"><span>{{ $row->user_id }}</span></td>
                        <td class="p-2"><a href="{{ $row->url }}">{{ $row->post_id }}</a></td>
                        <td class="p-2"><span>{{ $row->created_at }}</span></td>
                        @if (!empty($actions))
                            <td class="px-6 py-4 flex gap-3">
                                @foreach ($actions as $action)
                                    <form action="{{ route($action['route'], $row[0]) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method($action['method'])
                                        <button type="submit"
                                            @if ($action['confirm']) onclick="return confirm('Bạn có chắc muốn xóa bản ghi này không?')" @endif
                                            class="py-2 px-3 border-[1px] rounded-lg font-medium text-blue-600 dark:text-blue-500 hover:underline btn btn-{{ $action['class'] }}">{{ $action['label'] }}</button>
                                    </form>
                                @endforeach
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-6 flex justify-center items-center mb-6">
            {{ $media->links() }}
        </div>
    </div>


</x-app-layout>

<script>
    function onCopyLink(link) {
        try {
            navigator.clipboard.writeText(link);
            Toastify({
                text: "Sao chép link thành công!",
                duration: 3000,
            }).showToast();
        } catch (error) {
            console.log('copy clipboard', error);
            Toastify({
                text: "Có lỗi xảy ra",
                duration: 3000,
            }).showToast();
        }
    }
</script>
