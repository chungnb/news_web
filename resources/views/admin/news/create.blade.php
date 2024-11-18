<x-app-layout>
    <section class="w-full m-auto bg-white shadow sm:rounded-lg p-4">
        <h1 class="text-xl font-bold">Thêm mới tin tức</h1>

        <form action="{{ route('admin.news.store') }}" method="post" class="mt-6 space-y-6" enctype="multipart/form-data">
            @csrf
            @method('post')

            <div>
                <x-input-label for="title" :value="__('Title')" :isRequired="true" />
                <x-text-input id="title" name="title" type="text" class="title-slug mt-1 block w-full" required
                    autofocus autocomplete="title" value="{{ old('title') }}" />
                <x-input-error class="mt-2" :messages="$errors->get('title')" />
            </div>

            <div>
                <x-input-label for="slug" :value="__('Slug')" :isRequired="true" />
                <x-text-input id="slug" name="slug" type="text" class="mt-1 block w-full" required
                    value="{{ old('slug') }}" />
                <x-input-error class="mt-2" :messages="$errors->get('slug')" />
            </div>
            <div class="mt-4">
                <x-input-label for="content" :value="__('Nội dung')" class="mb-2" :isRequired="true" />
                <textarea id="editor" name="content" class="editor-config" onchange="checkSEO()">{{ old('content') }}</textarea>
                <x-input-error :messages="$errors->get('content')" class="mt-2" />

                <div class="ck ck-word-count flex justify-end items-center gap-2 mt-2">
                    <div class="ck-word-count__words"></div>
                    <div class="ck-word-count__characters"></div>
                </div>
            </div>

            <div class="seo_component">
                <h3 class="font-bold text-xl">Seo</h3>

                <div class="border-[1px] rounded p-3 flex flex-col gap-4 justify-between">
                    <div class="w-full">
                        <x-input-label for="seo_heading" :value="__('Heading')" />
                        <x-text-input id="heading_seo" name="seo_heading" type="text"
                            class="mt-1 block w-full count_text" oninput="checkSEO()" value="{{ old('seo_heading') }}" />
                        <x-input-error class="mt-2" :messages="$errors->get('seo_heading')" />
                        <span id="seo_heading_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                    </div>

                    <div class="w-full">
                        <x-input-label for="seo_title" :value="__('Title')" />
                        <x-text-input id="title_seo" name="seo_title" type="text"
                            class="mt-1 block w-full count_text" oninput="checkSEO()" maxlength="255" value="{{ old('seo_title') }}" />
                        <x-input-error class="mt-2" :messages="$errors->get('seo_title')" />
                        <span id="seo_title_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                    </div>

                    <div class="w-full">
                        <x-input-label for="seo_description" :value="__('Description')" />
                        <x-text-input id="description_seo" name="seo_description" type="text"
                            class="mt-1 block w-full count_text" oninput="checkSEO()" maxlength="255" value="{{ old('seo_description') }}" />
                        <x-input-error class="mt-2" :messages="$errors->get('seo_description')" />
                        <span id="seo_description_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                    </div>

                    <div class="w-full">
                        <x-input-label for="seo_keywords" :value="__('KeyWords')" />
                        <x-text-input id="seo_keywords" name="seo_keywords" type="text"
                            class="mt-1 block w-full count_text" maxlength="255" value="{{ old('seo_keywords') }}" />
                        <x-input-error class="mt-2" :messages="$errors->get('seo_keywords')" />
                        <span id="seo_keywords_count" class="text-right block mt-2 text-sm text-gray-500"></span>
                    </div>
                </div>
            </div>

            <div class="seo_score">
                <h3 class="font-bold text-xl">SEO KEY</h3>

                <div class="border-[1px] rounded p-3 flex flex-col gap-4 justify-between">
                    <div>
                        <x-input-label for="primary_key" :value="__('Key Chính')" />
                        <x-text-input id="primaryKeyword_seo" name="primary_key" type="text" oninput="checkSEO()" class="primary-key-slug mt-1 block w-full"
                            autofocus autocomplete="primary_key" value="{{ old('primary_key') }}" />
                        <x-input-error class="mt-2" :messages="$errors->get('primary_key')" />
                    </div>

                    <div>
                        <x-input-label for="secondary_key" :value="__('Key Phụ')" />
                        <x-text-input id="secondaryKeyword_seo" name="secondary_key" oninput="checkSEO()" type="text" class="secondary-key-slug mt-1 block w-full"
                            autofocus autocomplete="secondary_key" value="{{ old('secondary_key') }}" />
                        <x-input-error class="mt-2" :messages="$errors->get('secondary_key')" />
                    </div>
                </div>
            </div>

            <div class="seo_score_total_title">
                <h3 class="font-bold text-xl">Điểm Tiêu Đề</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="item">
                                    <div>
                                        <label>Số từ lớn hơn bằng 5</label>
                                        <input id = "title-1" type="text">
                                        <label>Số từ lớn hơn 10</label>
                                        <input id = "title-2" type="text" >
                                        <label>Số từ lớn hơn 12 nhỏ hơn 15</label>
                                        <input id = "title-3" type="text">
                                        <label>Số từ chứa khóa chính</label>
                                        <input id = "title-4" type="text">
                                        <label>Số từ chứa khóa phụ</label>
                                        <input id = "title-5" type="text">
                                        <div class="xl:w-[14%]">
                                            <x-input-label for="title_score" :value="__('Tổng điểm tiêu đề')" />
                                            <x-text-input id="title-score" name="title_score" type="text" class="secondary-key-slug mt-1 block" 
                                                        autofocus autocomplete="title_score" value="{{ old('title_score') }}" />
                                            <x-input-error class="mt-2" :messages="$errors->get('title_score')" />    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="seo_score_total_description">
                <h3 class="font-bold text-xl">Điểm Mô Tả</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="item">
                                    <div>
                                        <label>Có description</label>
                                        <input id = "des-1" type="text">
                                        <label>Số từ lớn hơn 20</label>
                                        <input id = "des-2" type="text" >
                                        <label>Số từ lớn hơn 30 nhỏ hơn 70</label>
                                        <input id = "des-3" type="text">
                                        <label>Mô tả chứa khóa chính</label>
                                        <input id = "des-4" type="text">
                                        <label>Mô tả chứa khóa phụ</label>
                                        <input id = "des-5" type="text">
                                        <div class="xl:w-[14%]">
                                            <x-input-label for="meta_description" :value="__('Tổng điểm mô tả')" />
                                            <x-text-input id="description-score" name="meta_description" type="text" class="secondary-key-slug mt-1 block" 
                                                autofocus autocomplete="meta_description" value="{{ old('meta_description') }}" />
                                            <x-input-error class="mt-2" :messages="$errors->get('meta_description')" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="seo_score_total_heading">
                <h3 class="font-bold text-xl">Điểm Heading</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="item">
                                    <div>
                                        <label>Tồn tại H1 trong tiêu đề</label>
                                        <input id = "heading-1" type="text">
                                        <label>Không trung lặp H1 trong nội dung</label>
                                        <input id = "heading-2" type="text" >
                                        <label>Tồn tại H2 trong nội dung</label>
                                        <input id = "heading-3" type="text">
                                        <label>H1 chứa khóa chính</label>
                                        <input id = "heading-4" type="text">
                                        <label>H2 chứa khóa phụ</label>
                                        <input id = "heading-5" type="text">
                                        <div class="xl:w-[14%]">
                                            <x-input-label for="heading" :value="__('Tổng điểm heading')" />
                                            <x-text-input id="heading-score" name="heading" type="text" class="heading-slug mt-1 block" 
                                                autofocus autocomplete="heading" value="{{ old('heading') }}" />
                                            <x-input-error class="mt-2" :messages="$errors->get('heading')" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="seo_score_total_img">
                <h3 class="font-bold text-xl">Điểm Ảnh</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="item">
                                    <div>
                                        <label>Có hình ảnh trong nội dung</label>
                                        <input id = "img-1" type="text">
                                        <label>Có thuộc tính alt</label>
                                        <input id = "img-2" type="text" >
                                        <label>Alt chứa khóa chính</label>
                                        <input id = "img-3" type="text">
                                        <label>Alt chứa khóa phụ</label>
                                        <input id = "img-4" type="text">
                                        <label>Ảnh có caption</label>
                                        <input id = "img-5" type="text">
                                        <div class="xl:w-[14%]">
                                            <x-input-label for="images" :value="__('Tổng điểm ảnh')" />
                                            <x-text-input id="images" name="images" type="text" class="secondary-key-slug mt-1 block" 
                                                autofocus autocomplete="images" value="{{ old('images') }}" />
                                            <x-input-error class="mt-2" :messages="$errors->get('images')" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="seo_score_total_content">
                <h3 class="font-bold text-xl">Điểm Nội Dung</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="item">
                                    <div>
                                        <label>100 từ đầu tiên chứa và 100 từ cuối cùng chứa từ khóa chính</label>
                                        <input id = "content-1" type="text">
                                        <label>Nội dung tối thiểu 300 từ</label>
                                        <input id = "content-2" type="text" >
                                        <label>Từ khóa chính xuất hiện trong 30 từ đầu tiên của đoạn văn đầu tiên</label>
                                        <input id = "content-3" type="text">
                                        <label>Từ khóa phụ xuất hiện trong 30 từ đầu tiên của đoạn văn đầu tiên</label>
                                        <input id = "content-4" type="text">
                                        <label>Mật độ từ khóa chính tối thiểu 0.7%</label>
                                        <input id = "content-5" type="text">
                                        <label>Mật độ từ khóa phụ tối thiểu 0.2%</label>
                                        <input id = "content-6" type="text">
                                        <label>Mật độ từ khóa phụ và phụ không quá 5%</label>
                                        <input id = "content-7" type="text">
                                        <div class="xl:w-[14%]">
                                            <x-input-label for="link_out" :value="__('Tổng điểm nội dung')" />
                                            <x-text-input id="content-score" name="content_score" type="text" class="secondary-key-slug mt-1 block" 
                                                autofocus autocomplete="content_score" value="{{ old('content_score') }}" />
                                            <x-input-error class="mt-2" :messages="$errors->get('content_score')" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="seo_score_total_internal">
                <h3 class="font-bold text-xl">Điểm Internal Link</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="item">
                                    <div>
                                        <label>Có internal link trên 2 bài viết liên quan cùng chuyên mục</label>
                                        <input id = "internal-1" type="text">
                                        <label>Links nội bộ có thẻ mở tab mới</label>
                                        <input id = "internal-2" type="text" >
                                        <div class="xl:w-[14%]">
                                            <x-input-label for="internal_link" :value="__('Tổng điểm internal link')" />
                                            <x-text-input id="internalLink" name="internal_link" type="text" class="secondary-key-slug mt-1 block" 
                                                autofocus autocomplete="internal_link" value="{{ old('internal_link') }}" />
                                            <x-input-error class="mt-2" :messages="$errors->get('internal_link')" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="seo_score_total">
                <div class="xl:w-[14%]">
                        <x-input-label for="link_out" :value="__('Điểm link out')" />
                        <x-text-input id="externalLink" name="link_out" type="text" class="secondary-key-slug mt-1 block" 
                            autofocus autocomplete="link_out" value="{{ old('link_out') }}" />
                        <x-input-error class="mt-2" :messages="$errors->get('link_out')" />
                    </div>
                <div class="mt-4 xl:w-[14%]">
                        <x-input-label for="total" :value="__('Tổng điểm của bài viết')" />
                        <x-text-input id="total-score" name="seo_score" type="text" class="secondary-key-slug mt-1 block" 
                            autofocus autocomplete="total" value="{{ old('seo_score') }}" />
                        <x-input-error class="mt-2" :messages="$errors->get('total')" />
                </div>
            </div>

            <div>
                <x-input-label for="category_id" :value="__('Danh mục')" />
                <select id="category_id" name="category_id"
                    class="mt-2 p-2 xl:w-[35%] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
                    <option value="1" selected>Mặc định</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <x-input-label for="image" value="Ảnh" />
                <label class="block mt-2">
                    <span class="sr-only">Chọn ảnh</span>
                    <input type="file" id="image" name="image" oninput="checkSEO()"
                        class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100" />
                </label>
                <div class="shrink-0 my-2">
                    <img id="featured_image_preview" class="h-64 w-128 object-cover rounded-md"
                        src="{{ isset($post) ? Storage::url($post->featured_image) : '' }}" alt="Ảnh minh họa" />
                </div>
                <span class="text-gray italic text-sm">File ảnh nhỏ hơn hoặc bằng 1MB. Định dạng (jpeg,jpg,png,gif,webp)</span>
                <x-input-error class="mt-2" :messages="$errors->get('image')" />
            </div>

            <div class="flex items-center gap-4" id="seo_score_total">
                <x-primary-button>{{ __('Lưu') }}</x-primary-button>
            </div>
        </form>
    </section>
</x-app-layout>
<style>
    /* Style cho bảng hoặc danh sách */
    .container {
      width: 100%;
    }
    .item {
      padding: 10px;
      /* background-color: #f4f4f4; */
      margin-bottom: 5px;
      border: 1px solid #f4f4f4;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    /* .item:hover {
      background-color: #e0e0e0;
    } */

    /* Các trường sẽ ẩn đi mặc định */
    .expandable-content {
      display: none;
      padding: 10px;
      background-color: #f9f9f9;
      margin-top: 5px;
      border: 1px solid #ddd;
    }

    /* Định dạng các input */
    input {
      padding: 5px;
      margin-bottom: 10px;
      border: 1px solid #f4f4f4;
      width: 100%;
    }
    strong{
        font-size: 13px;
    }
  </style>
<script>
    document.getElementById('image').onchange = function(evt) {
        const [file] = this.files
        if (file) {
            document.getElementById('featured_image_preview').src = URL.createObjectURL(file)
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        function updateCharCount(inputElement, countElementId) {
            const countElement = document.getElementById(countElementId);
            if (countElement) {
                countElement.textContent = `Ký tự: ${inputElement.value.length}/255`;
            }
        }

        const inputs = document.querySelectorAll('.count_text');
        inputs.forEach(input => {
            const countElementId = input.id + '_count';
            updateCharCount(input, countElementId);
            input.addEventListener('input', function() {
                updateCharCount(input, countElementId);
            });
        });
    });

    function string_to_slug(str) {
        var map = {
            'à': 'a',
            'á': 'a',
            'ạ': 'a',
            'ả': 'a',
            'ã': 'a',
            'â': 'a',
            'ầ': 'a',
            'ấ': 'a',
            'ậ': 'a',
            'ẩ': 'a',
            'ẫ': 'a',
            'ă': 'a',
            'ằ': 'a',
            'ắ': 'a',
            'ặ': 'a',
            'ẳ': 'a',
            'ẵ': 'a',
            'è': 'e',
            'é': 'e',
            'ẹ': 'e',
            'ẻ': 'e',
            'ẽ': 'e',
            'ê': 'e',
            'ề': 'e',
            'ế': 'e',
            'ệ': 'e',
            'ể': 'e',
            'ễ': 'e',
            'ì': 'i',
            'í': 'i',
            'ị': 'i',
            'ỉ': 'i',
            'ĩ': 'i',
            'ò': 'o',
            'ó': 'o',
            'ọ': 'o',
            'ỏ': 'o',
            'õ': 'o',
            'ô': 'o',
            'ồ': 'o',
            'ố': 'o',
            'ộ': 'o',
            'ổ': 'o',
            'ỗ': 'o',
            'ơ': 'o',
            'ờ': 'o',
            'ớ': 'o',
            'ợ': 'o',
            'ở': 'o',
            'ỡ': 'o',
            'ù': 'u',
            'ú': 'u',
            'ụ': 'u',
            'ủ': 'u',
            'ũ': 'u',
            'ư': 'u',
            'ừ': 'u',
            'ứ': 'u',
            'ự': 'u',
            'ử': 'u',
            'ữ': 'u',
            'ỳ': 'y',
            'ý': 'y',
            'ỵ': 'y',
            'ỷ': 'y',
            'ỹ': 'y',
            'đ': 'd',
            'À': 'A',
            'Á': 'A',
            'Ạ': 'A',
            'Ả': 'A',
            'Ã': 'A',
            'Â': 'A',
            'Ầ': 'A',
            'Ấ': 'A',
            'Ậ': 'A',
            'Ẩ': 'A',
            'Ẫ': 'A',
            'Ă': 'A',
            'Ằ': 'A',
            'Ắ': 'A',
            'Ặ': 'A',
            'Ẳ': 'A',
            'Ẵ': 'A',
            'È': 'E',
            'É': 'E',
            'Ẹ': 'E',
            'Ẻ': 'E',
            'Ẽ': 'E',
            'Ê': 'E',
            'Ề': 'E',
            'Ế': 'E',
            'Ệ': 'E',
            'Ể': 'E',
            'Ễ': 'E',
            'Ì': 'I',
            'Í': 'I',
            'Ị': 'I',
            'Ỉ': 'I',
            'Ĩ': 'I',
            'Ò': 'O',
            'Ó': 'O',
            'Ọ': 'O',
            'Ỏ': 'O',
            'Õ': 'O',
            'Ô': 'O',
            'Ồ': 'O',
            'Ố': 'O',
            'Ộ': 'O',
            'Ổ': 'O',
            'Ỗ': 'O',
            'Ơ': 'O',
            'Ờ': 'O',
            'Ớ': 'O',
            'Ợ': 'O',
            'Ở': 'O',
            'Ỡ': 'O',
            'Ù': 'U',
            'Ú': 'U',
            'Ụ': 'U',
            'Ủ': 'U',
            'Ũ': 'U',
            'Ư': 'U',
            'Ừ': 'U',
            'Ứ': 'U',
            'Ự': 'U',
            'Ử': 'U',
            'Ữ': 'U',
            'Ỳ': 'Y',
            'Ý': 'Y',
            'Ỵ': 'Y',
            'Ỷ': 'Y',
            'Ỹ': 'Y',
            'Đ': 'D',
            'ñ': 'n',
            'ç': 'c',
            '·': '-',
            '/': '-',
            '_': '-',
            ',': '-',
            ':': '-',
            ';': '-'
        };

        str = str.replace(/[^a-zA-Z0-9\s]/g, function(match) {
            return map[match] || '';
        });

        str = str.replace(/^\s+|\s+$/g, ''); // trim
        str = str.toLowerCase();

        str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
            .replace(/\s+/g, '-') // collapse whitespace and replace by -
            .replace(/-+/g, '-'); // collapse dashes

        return str;
    }

    document.querySelector('.title-slug').onchange = function(e) {
        const text = e.target.value
        if (text) {
            const str = string_to_slug(text)
            document.getElementById('slug').value = str;
        }
    }
</script>
<script src="/assets/js/checkseo.js"></script>
<script>
document.querySelector('.editor-config').onchange = function(e) {
    checkSEO();
    contents = editor.getData();
    
}

// Hàm đếm số từ trong một chuỗi
function countWords(str) {
    if (str.trim() === "") return 0;
    return str.split(/\s+/).length;
}

function countKeywordMatches(text, keywords) {
        let keyword = '';
        if(keywords) {
            keyword = keywords.split(",");
        }
        let matches = 0;
        if(keyword !== '') {
            keyword.forEach(keyword => {
                const regex = new RegExp(`\\b${keyword}\\b`, "gi");
                matches += (text.match(regex) || []).length;
            });
        }
        return matches;
}

</script>
