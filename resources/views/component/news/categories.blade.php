<div class="flex gap-3 md:flex-row flex-col">
    {{-- Danh mục --}}
    @foreach ($categories as $category)
        <a href="/tin-tuc/{{$category->slug}}"
             class="text-[#cccccc] text-lg px-3 py-1 hover:bg-[#f6f6f6] hover:text-color-444 rounded"
            @style([
                'background: #f6f6f6' => ($category->slug == $categoryChoosen),
                'color: #444444' => ($category->slug == $categoryChoosen)
            ])>{{ $category->name }}</a>
    @endforeach
</div>