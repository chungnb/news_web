<x-app-layout>
    <h1 class="text-xl font-bold">Thêm mới media</h1>
    <div class="flex gap-4 md:flex-row flex-col  mt-8">

        <div class="border-[1px] rounded p-3 md:p-4 w-full md:w-[69%]">
            <form action="{{ route('admin.media.update', $media->id) }}" method="post" enctype="multipart/form-data"
                class="space-y-6">
                @csrf
                @method('put')

                <div>
                    <x-input-label for="title" :value="__('Tiêu đề')" />
                    <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" autofocus
                        autocomplete="title" :value="old('title', $media->title)" />
                    <x-input-error class="mt-2" :messages="$errors->get('title')" />
                </div>

                <div>
                    <x-input-label for="image" value="Ảnh" />
                    <label class="block mt-2">
                        <span class="sr-only">Chọn ảnh</span>
                        <input type="file" id="image" name="upload"
                            class="block w-full text-sm text-slate-500
                            file:mr-4 file:py-2 file:px-4
                            file:rounded-full file:border-0
                            file:text-sm file:font-semibold
                            file:bg-violet-50 file:text-violet-700
                            hover:file:bg-violet-100
                        " />
                    </label>
                    <div class="shrink-0 my-2">
                        <img id="featured_image_preview" class="h-64 w-128 object-cover rounded-md"
                            src="{{ asset('storage/'.$media->url) ?? '' }}" alt="Ảnh minh họa" />
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('upload')" />
                </div>

                <div>
                    <x-input-label for="alt" :value="__('Văn bản thay thế (alt)')" />
                    <x-text-input id="alt" name="alt" type="text" class="mt-1 block w-full" required
                        autofocus autocomplete="alt" />
                    <x-input-error class="mt-2" :messages="$errors->get('alt')" />
                </div>

                <div>
                    <x-input-label for="description" :value="__('Mô tả')" />
                    <textarea id="editor" name="description" class="border-[1px] rounded w-full px-2 py-1">
                        {{ $media->description }}
                    </textarea>
                </div>

                <div class="flex items-center gap-4">
                    <x-primary-button>{{ __('Lưu') }}</x-primary-button>
                </div>
            </form>

        </div>
        <div class="w-full md:w-[30%]">
            <h3 class="mb-3 font-bold">Thông tin chi tiết</h3>
            <div class="border-[1px] rounded md:p-4 p-3 text-gray-600 space-y-3">
                <p>Tải lên vào: <strong>{{ $media->created_at }}</strong></p>
                <p>Được tải bởi: <strong> {{ $media->user_id }} </strong> </p>
                <p>Đã tải lên: <strong> {{ $media->post_id }} </strong></p>
                <div class="flex flex-col gap-2">
                    <x-input-label for="image" value="File url:" />
                    <input class="image px-2 py-1 w-full border-[1px] rounded" id="storage_link" type="text" disabled
                        value="{{ asset('storage/' . $media->url) }}">
                    <button onclick="onCopyLink()"
                        class="w-[150px] h-[25px] rounded-full border-[1px] text-gray-500 hover:text-blue-500">Sao chép
                        url</button>
                </div>

                <p>Tên tệp tin: <strong>{{ $media->file_name }}</strong></p>
                <p>Loại tệp: <strong>{{ $media->file_type }}</strong></p>
                <p>Dung lượng file: <strong>{{ $media->file_size }}</strong></p>
                <p>Kích thước: <strong>{{ $media->width }} dài và rộng {{ $media->height }}</strong></p>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    document.getElementById('image').onchange = function(evt) {
        const [file] = this.files
        if (file) {
            // if there is an image, create a preview in featured_image_preview
            document.getElementById('featured_image_preview').src = URL.createObjectURL(file)
        }
    }

    const link = document.getElementById('storage_link').value

    function onCopyLink() {
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
