<?php
const NEW_ALL = "tat-ca-bai-viet";

const ADMIN = 'admin';
const EDITOR = 'editor';

const ACTIVE = 1;
const NOT_ACTIVE = 0;

const DISPLAY = 'Hiển thị';
const NOT_DISPLAY = 'Không hiển thị';

const DEFAULT_PAGE = 10;

const STORAGE_LINK = 'storage/';

const  MENU_ITEMS = [
    [
        'route' => 'admin.users.index',
        'icon' => 'fa-users',
        'text' => 'Thành viên',
        'active' => 'cms/users',
        'role' => 'admin',
        'can' => null
    ],
    [
        'route' => 'admin.category.index', // add the correct route if available
        'icon' => 'fa-list',
        'text' => 'Danh mục',
        'active' => 'cms/category',
        'role' => null,
        'can' => 'list category'
    ],
    [
        'route' => 'admin.news.index',
        'icon' => 'fa-newspaper',
        'text' => 'Tin tức',
        'active' => 'cms/news',
        'role' => null,
        'can' => 'list news'
    ],
    [
        'route' => 'admin.tuyen-dung.index',
        'icon' => 'fa-plus',
        'text' => 'Quản lý tuyển dụng',
        'active' => 'cms/tuyen-dung',
        'role' => null,
        'can' => 'list recruitment'
    ],
    [
        'route' => 'admin.ung-tuyen.index',
        'icon' => 'fa-user',
        'text' => 'Data ứng viên',
        'active' => 'cms/data-applicant',
        'role' => null,
        'can' => 'list applicant'
    ],
    [
        'route' => 'admin.videos.index',
        'icon' => 'fa-video',
        'text' => 'Videos',
        'active' => 'cms/videos',
        'role' => null,
        'can' => 'list videos'
    ],
    [
        'route' => 'admin.media.index',
        'icon' => 'fa-photo-film',
        'text' => 'Media',
        'active' => 'cms/media',
        'role' => null,
        'can' => 'list media'
    ],
    [
        'route' => 'admin.slides.index', // add the correct route if available
        'icon' => 'fa-sliders',
        'text' => 'Quản lý slides',
        'active' => 'cms/slides',
        'role' => null,
        'can' => 'list slides'
    ],
    [
        'route' => 'admin.page-custom.index',
        'icon' => 'fa-pager',
        'text' => 'Quản lý trang đơn',
        'active' => 'cms/trang-don',
        'role' => null,
        'can' => 'list custom pages'
    ],
    [
        'route' => 'dashboard.contact',
        'icon' => 'fa-file-contract',
        'text' => 'Liên hệ',
        'active' => 'cms/contact',
        'role' => null,
        'can' => 'list contact'
    ],
    [
        'route' => 'customSeoPage',
        'icon' => 'fa-gear',
        'text' => 'Customs seo pages',
        'active' => 'cms/custom-seo-page',
        'role' => 'admin',
        'can' => null
    ],
    [
        'route' => 'admin.logs',
        'icon' => 'fa-ghost',
        'text' => 'Logs',
        'active' => 'cms/logs',
        'role' => null,
        'can' => 'list logs'
    ],
    [
        'route' => 'admin.script.index',
        'icon' => 'fa-file',
        'text' => 'Import Script',
        'active' => 'cms/import-script',
        'role' => null,
        'can' => 'list scripts'
    ],
];