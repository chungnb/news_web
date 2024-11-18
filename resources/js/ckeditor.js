import {
    ClassicEditor,
    Alignment,
    BlockQuote,
    Bold,
    CloudServices,
    Code,
    CodeBlock,
    Essentials,
    Font,
    Heading,
    Image,
    ImageInline,
    ImageStyle,
    ImageToolbar,
    ImageUpload,
    ImageResize,
    Base64UploadAdapter,
    Indent,
    IndentBlock,
    Italic,
    LinkImage,
    List,
    ListProperties,
    PasteFromOffice,
    RemoveFormat,
    Strikethrough,
    Subscript,
    Superscript,
    TodoList,
    Underline,
    SourceEditing,
    SimpleUploadAdapter,
    GeneralHtmlSupport,
    ShowBlocks,
    Table,
    TableToolbar,
    TableCaption,
    TableCellProperties,
    TableColumnResize,
    TableProperties,
    Link,
    WordCount,
    Style,
    // MediaEmbed
} from "ckeditor5";

const charactersBox = document.querySelector( '.ck-word-count__characters' );
const wordsBox = document.querySelector( '.ck-word-count__words' );

import "ckeditor5/ckeditor5.css";

const editor_config = {
    plugins: [
        Alignment,
        BlockQuote,
        Bold,
        CloudServices,
        Code,
        CodeBlock,
        Essentials,
        Font,
        Heading,
        Image,
        ImageInline,
        ImageStyle,
        ImageToolbar,
        ImageResize,
        ImageUpload,
        Base64UploadAdapter,
        Indent,
        IndentBlock,
        Italic,
        LinkImage,
        List,
        ListProperties,
        PasteFromOffice,
        RemoveFormat,
        Strikethrough,
        Subscript,
        Superscript,
        TodoList,
        Underline,
        SourceEditing,
        SimpleUploadAdapter,
        GeneralHtmlSupport,
        ShowBlocks,
        Table,
        TableToolbar,
        TableCaption,
        TableCellProperties,
        TableColumnResize,
        TableProperties,
        Link,
        WordCount,
        Style,
        // MediaEmbed
    ],
    toolbar: [
        "heading",
        "sourceEditing",
        "showBlocks",
        // "mediaEmbed",
        "|",
        "bold",
        "italic",
        'underline',
        'strikethrough',
        "link",
        "bulletedList",
        "numberedList",
        "todoList",
        "outdent",
        "indent",
        "|",
        "imageUpload",
        "blockQuote",
        "insertTable",
        "|",
        "fontSize",
        // "fontFamily",
        "fontColor",
        "fontBackgroundColor",
        "|",
        "undo",
        "redo",
    ],
    heading: {
        options: [
            {
                model: "paragraph",
                title: "Paragraph",
                class: "ck-heading_paragraph",
            },
            {
                model: "heading1",
                view: "h1",
                title: "Heading 1",
                class: "ck-heading_heading1",
            },
            {
                model: "heading2",
                view: "h2",
                title: "Heading 2",
                class: "ck-heading_heading2",
            },
            {
                model: "heading3",
                view: "h3",
                title: "Heading 3",
                class: "ck-heading_heading3",
            },
        ],
    },
    image: {
        toolbar: [
            "toggleImageCaption",
            "imageTextAlternative",
            "|",
            "imageStyle:inline",
            "imageStyle:wrapText",
            "imageStyle:breakText",
            "|",
            "resizeImage",
        ],
    },
    list: {
        properties: {
            styles: true,
            startIndex: true,
            reversed: true,
        },
    },
    link: {
        decorators: {
            toggleDownloadable: {
                mode: "manual",
                label: "Downloadable",
                attributes: {
                    download: "file",
                },
            },
        },
        addTargetToExternalLinks: true,
        defaultProtocol: "https://",
    },
    table: {
        contentToolbar: [
            "tableColumn",
            "tableRow",
            "mergeTableCells",
            "tableProperties",
            "tableCellProperties",
        ],
    },
    simpleUpload: {
        // The URL that the images are uploaded to.
        uploadUrl: "/cms/ckeditor-upload",

        // Enable the XMLHttpRequest.withCredentials property.
        withCredentials: true,

        // Headers sent along with the XMLHttpRequest to the upload server.
        headers: {
            "X-CSRF-TOKEN": document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        },
    },
    htmlSupport: {
        allow: [
            // Enables all HTML features.
            {
                name: /.*/,
                attributes: true,
                classes: true,
                styles: true,
            },
        ],
        disallow: [
            {
                attributes: [
                    { key: /^on(.*)/i, value: true },
                    {
                        key: /.*/,
                        value: /(\b)(on\S+)(\s*)=|javascript:|(<\s*)(\/*)script/i,
                    },
                    { key: /.*/, value: /data:(?!image\/(png|jpeg|gif|webp))/i },
                ],
            },
            { name: 'script' },
        ],
    },
    wordCount: {
        onUpdate: stats => {
            // Prints the current content statistics.
            wordsBox.innerHTML = `<span style="color:gray;">Words in the post</span>: <strong>${ stats.words }</strong>`;

            charactersBox.innerHTML = `<span style="color:gray;">Characters in the post</span>: <strong>${ stats.characters }</strong>`;
        }
    }
};

document.addEventListener("DOMContentLoaded", () => {
    ClassicEditor.create(
        document.querySelector(".editor-config"),
        editor_config
    )
        .then((editor) => {
            window.editor = editor;
            // document.getElementById('external-file-upload').addEventListener('change', function() {
            //     let file = this.files[0];
            //     let formData = new FormData();
            //     formData.append('upload', file);

            //     fetch('/cms/ckeditor-upload', {
            //         method: 'POST',
            //         headers: {
            //             "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
            //         },
            //         body: formData
            //     }).then(response => response.json()).then(data => {
            //         if (data.url) {
            //             if (file.type.startsWith('image/')) {
            //                 editor.model.change(writer => {
            //                     const imageElement = writer.createElement('image', {
            //                         src: data.url
            //                     });
            //                     editor.model.insertContent(imageElement, editor.model.document.selection);
            //                 });
            //             } else {
            //                 editor.model.change(writer => {
            //                     const videoElement = writer.createElement('video', {
            //                         src: data.url,
            //                         controls: true
            //                     });
            //                     editor.model.insertContent(videoElement, editor.model.document.selection);
            //                 });
            //             }
            //             Toastify({
            //                 text: "Upload thành công",
            //                 duration: 3000,
            //             }).showToast();
            //         } else {
            //             Toastify({
            //                 text: "Có lỗi xảy ra",
            //                 duration: 3000,
            //             }).showToast();
            //         }
            //     }).catch(error => {
            //         console.error('Upload failed:', error);
            //         Toastify({
            //             text: "Có lỗi xảy ra",
            //             duration: 3000,
            //         }).showToast();
            //     });
            // });
        })
        .catch((error) => {
            console.error(error.stack);
        });
});
