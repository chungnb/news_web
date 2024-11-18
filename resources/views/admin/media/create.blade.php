<x-app-layout>
    <h1 class="text-xl font-bold">Thêm mới media</h1>

    <div class="border-[1px] rounded p-4 mt-8">

        <form action="{{route('admin.media.store')}}" method="post" enctype="multipart/form-data" class="">
            @csrf
            @method('post')
    
            <div>
                <x-input-label for="image" value="Ảnh" />
                <label class="block mt-2">
                    <span class="sr-only">Chọn ảnh</span>
                    <input type="file" id="image" name="upload" class="block w-full text-sm text-slate-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-full file:border-0
                        file:text-sm file:font-semibold
                        file:bg-violet-50 file:text-violet-700
                        hover:file:bg-violet-100
                    "/>
                </label>
                <div class="shrink-0 my-2">
                    <img id="featured_image_preview" class="h-64 w-128 object-cover rounded-md" src="" alt="Ảnh minh họa" />
                </div>
                <x-input-error class="mt-2" :messages="$errors->get('upload')" />
            </div>
    
            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Lưu') }}</x-primary-button>
            </div>
        </form>
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
</script>