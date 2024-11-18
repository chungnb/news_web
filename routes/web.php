<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfomationPageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\RecruitmentController as AdminRecruitmentController;
use App\Http\Controllers\Admin\VideoController as AdminVideoController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\SlideController as AdminSlideController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\Admin\MediaController as AdminMediaController;
use App\Http\Controllers\Admin\CustomSeoPageController as AdminCustomSeoPageController;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Carbon\Carbon;
use Spatie\Sitemap\SitemapIndex;
use Spatie\Sitemap\SitemapGenerator;
use App\Models\News;
use App\Models\Recruitment;
use App\Models\CustomSeoPageLvkd;
// use App\Http\Middleware\LogVisit;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::group(['middleware' => 'log.visits'], function () {
// });


use Illuminate\Support\Facades\Artisan;

Route::get('/create-symlink', function () {
    try {
        Artisan::call('storage:link');
        return 'Symbolic link created successfully.';
    } catch (\Exception $e) {
        return 'Failed to create symbolic link. Error: ' . $e->getMessage();
    }
});

// Sitemap cho trang chủ
Route::get('/sitemap/home', function () {
    $sitemap = Sitemap::create()
        ->add(Url::create('/')
            ->setLastModificationDate(Carbon::yesterday()));

    $sitemap->writeToFile(public_path('sitemap/home.xml'));

    return 'Create Home Sitemap successfully';
});

// Sitemap cho trang liên hệ
Route::get('/sitemap/lien-he', function () {
    $sitemap = Sitemap::create()
        ->add(Url::create('/lien-he')
            ->setLastModificationDate(Carbon::yesterday()));

    $sitemap->writeToFile(public_path('sitemap/lien-he.xml'));

    return 'Create Contact Sitemap successfully';
});

// Sitemap cho trang videos
Route::get('/sitemap/videos', function () {
    $sitemap = Sitemap::create()
        ->add(Url::create('/videos')
            ->setLastModificationDate(Carbon::yesterday()));

    $sitemap->writeToFile(public_path('sitemap/videos.xml'));

    return 'Create Videos Sitemap successfully';
});

// Sitemap cho lĩnh vực kinh doanh   
Route::get('/sitemap/linh-vuc-kinh-doanh', function () {
    $sitemap = Sitemap::create()
        ->add(Url::create('/linh-vuc-kinh-doanh/dich-vu-xuat-nhap-khau')
            ->setLastModificationDate(Carbon::yesterday()))
        ->add(Url::create('/linh-vuc-kinh-doanh/ecommerce')
            ->setLastModificationDate(Carbon::yesterday()))
        ->add(Url::create('/linh-vuc-kinh-doanh/kinh-doanh-san-xuat-mi-pham')
            ->setLastModificationDate(Carbon::yesterday()));

    $sitemap->writeToFile(public_path('sitemap/linh-vuc-kinh-doanh.xml'));

    return 'Create Business Sitemap successfully';
});

// Sitemap cho tin tức
Route::get('/sitemap/tin-tuc', function () {
    $sitemap = Sitemap::create();

    News::all()->each(function (News $news) use ($sitemap) {
        $sitemap->add(Url::create("/tin-tuc/{$news->slug}")->setLastModificationDate(Carbon::yesterday()));
    });

    $sitemap->writeToFile(public_path('sitemap/tin-tuc.xml'));

    return 'Create News Sitemap successfully';
});

// Sitemap cho tuyển dụng
Route::get('/sitemap/tuyen-dung', function () {
    $sitemap = Sitemap::create();

    Recruitment::all()->each(function (Recruitment $recruitment) use ($sitemap) {
        $sitemap->add(Url::create("/tuyen-dung/{$recruitment->slug}")->setLastModificationDate(Carbon::yesterday()));
    });

    $sitemap->writeToFile(public_path('sitemap/tuyen-dung.xml'));

    return 'Create Recruitment Sitemap successfully';
});

Route::get('/sitemapIndex', function () {
    $sitemapIndex = SitemapIndex::create()
        ->add('/sitemap/home.xml')
        ->add('/sitemap/tin-tuc')
        ->add('/sitemap/linh-vuc-kinh-doanh.xml')
        ->add('/sitemap/lien-he.xml')
        ->add('/sitemap/videos.xml')
        ->add('/sitemap/tuyen-dung.xml');


    $sitemapIndex->writeToFile(public_path('sitemap.xml'));

    return 'Create Sitemap Index successfully';
});


Route::get('/clear-all-caches', function () {
    $commands = [
        'cache:clear',
        'view:clear',
        'config:clear',
        'event:clear',
        'route:clear',
        'optimize:clear'
    ];

    $output = [];

    foreach ($commands as $command) {
        try {
            Artisan::call($command);
            $output[] = ucfirst(str_replace(':', ' ', $command)) . ' cleared successfully.';
        } catch (\Exception $e) {
            $output[] = 'Failed to clear ' . str_replace(':', ' ', $command) . '. Error: ' . $e->getMessage();
        }
    }

    return implode('<br>', $output);
});

Route::get('/run-specific-migration', function () {
    try {
        // Chạy migration cụ thể bằng cách chỉ định đường dẫn của nó
        Artisan::call('migrate', [
            '--path' => 'database/migrations/2024_09_25_144540_add_seo_to_recruitment.php'
        ]);
        
        return 'Migration "Recruitment" ran successfully.';
    } catch (\Exception $e) {
        return 'Failed to run migration. Error: ' . $e->getMessage();
    }
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);


Route::get('/tin-tuc/{category}', [NewsController::class, 'index'])->middleware('redirect.500');

Route::get('tuyen-dung', [RecruitmentController::class, 'index'])->name('recruintment');

Route::get('/tuyen-dung/{slug}',[RecruitmentController::class, 'detail'])->name('recruintment.detail');

Route::post('/applicant', [ApplicantController::class, 'store'])->name('applicant.store');

Route::get('/gioi-thieu', [AboutUsController::class, 'index'])->name('aboutus');

Route::get('/lien-he', function () {
    return view('contact');
});

Route::post('/contact', [HomeController::class, 'storeContact'])->name('store.contact');

Route::get('/videos', [VideoController::class, 'index'])->middleware('redirect.500');;

Route::prefix('linh-vuc-kinh-doanh')->group(function () {
    
    Route::get('/dich-vu-xuat-nhap-khau', function () {
        $seoPageLvkd = CustomSeoPageLvkd::findOrFail(1);
        return view('services.xnkService', compact('seoPageLvkd'));
    })->name('lvkd.dvxnk');
    
    Route::get('/ecommerce', function () {
        $seoPageLvkd = CustomSeoPageLvkd::findOrFail(1);
        return view('services.ecomService', compact('seoPageLvkd'));
    })->name('lvkd.ecom');
    
    Route::get('/kinh-doanh-san-xuat-mi-pham', function () {
        $seoPageLvkd = CustomSeoPageLvkd::findOrFail(1);
        return view('services.kdsxService', compact('seoPageLvkd'));
    })->name('lvkd.sxmp');
});

Route::get('thong-tin/{slug}', [InfomationPageController::class, 'getPage']);

// Admin
Route::prefix('cms')->middleware(['auth', 'admin', 'redirect.500'])->group(function () {
    // Custom seo page
    Route::get('/custom-seo-page', [AdminCustomSeoPageController::class, 'index'])->name('customSeoPage');
    Route::put('/custom-seo-page/{id}', [AdminCustomSeoPageController::class, 'store'])->name('admin.seoPage.store');

    Route::get('/custom-seo-page/lvkd', [AdminCustomSeoPageController::class, 'lvkd'])->name('customSeoPage.lvkd');
    Route::put('/custom-seo-page/lvkd/{id}', [AdminCustomSeoPageController::class, 'storeLvkd'])->name('admin.seoPage.store.lvkd');

    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/contact', [AdminController::class, 'getContact'])->name('dashboard.contact');
    Route::post('/ckeditor-upload', [AdminController::class, 'uploadCKeditor'])->name('ckeditor.upload');

    // Profile
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // News
    Route::get('/news', [AdminNewsController::class, 'index'])->name('admin.news.index');
    Route::get('/news/create', [AdminNewsController::class, 'create'])->name('admin.news.create');
    Route::post('/news', [AdminNewsController::class, 'store'])->name('admin.news.store');
    Route::get('/news/{id}/edit', [AdminNewsController::class, 'edit'])->name('admin.news.edit');
    Route::put('/news/{id}', [AdminNewsController::class, 'update'])->name('admin.news.update');
    Route::delete('/news/{id}', [AdminNewsController::class, 'destroy'])->name('admin.news.destroy');
    // User

    Route::get('/users', [AdminUserController::class, 'index'])->name('admin.users.index');
    Route::get('/users/create', [AdminUserController::class, 'create'])->name('admin.users.create');
    Route::post('/users', [AdminUserController::class, 'store'])->name('admin.users.store');
    Route::get('/users/{id}/edit', [AdminUserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/users/{id}', [AdminUserController::class, 'update'])->name('admin.users.update');
    Route::delete('/users/{id}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');

    // Videos

    Route::get('/videos', [AdminVideoController::class, 'index'])->name('admin.videos.index');
    Route::get('/videos/create', [AdminVideoController::class, 'create'])->name('admin.videos.create');
    Route::post('/videos', [AdminVideoController::class, 'store'])->name('admin.videos.store');
    Route::get('/videos/{id}/edit', [AdminVideoController::class, 'edit'])->name('admin.videos.edit');
    Route::put('/videos/{id}', [AdminVideoController::class, 'update'])->name('admin.videos.update');
    Route::delete('/videos/{id}', [AdminVideoController::class, 'destroy'])->name('admin.videos.destroy');

    // Recruitment

    Route::get('/tuyen-dung', [AdminRecruitmentController::class, 'index'])->name('admin.tuyen-dung.index');
    Route::get('/tuyen-dung/create', [AdminRecruitmentController::class, 'create'])->name('admin.tuyen-dung.create');
    Route::post('/tuyen-dung', [AdminRecruitmentController::class, 'store'])->name('admin.tuyen-dung.store');
    Route::get('/tuyen-dung/{id}/edit', [AdminRecruitmentController::class, 'edit'])->name('admin.tuyen-dung.edit');
    Route::put('/tuyen-dung/{id}', [AdminRecruitmentController::class, 'update'])->name('admin.tuyen-dung.update');
    Route::delete('/tuyen-dung/{id}', [AdminRecruitmentController::class, 'destroy'])->name('admin.tuyen-dung.destroy');

    Route::get('/data-applicant', [AdminRecruitmentController::class, 'getDataApply'])->name('admin.ung-tuyen.index');
    
    //  Page đơn

    Route::get('/trang-don', [AdminPageController::class, 'index'])->name('admin.page-custom.index');
    Route::get('/trang-don/create', [AdminPageController::class, 'create'])->name('admin.page-custom.create');
    Route::post('/trang-don', [AdminPageController::class, 'store'])->name('admin.page-custom.store');
    Route::get('/trang-don/{id}/edit', [AdminPageController::class, 'edit'])->name('admin.page-custom.edit');
    Route::put('/trang-don/{id}', [AdminPageController::class, 'update'])->name('admin.page-custom.update');
    Route::delete('/trang-don/{id}', [AdminPageController::class, 'destroy'])->name('admin.page-custom.destroy');

    // Slide
    Route::get('/slides', [AdminSlideController::class, 'index'])->name('admin.slides.index');
    Route::get('/slides/create', [AdminSlideController::class, 'create'])->name('admin.slides.create');
    Route::post('/slides', [AdminSlideController::class, 'store'])->name('admin.slides.store');
    Route::get('/slides/{id}/edit', [AdminSlideController::class, 'edit'])->name('admin.slides.edit');
    Route::put('/slides/{id}', [AdminSlideController::class, 'update'])->name('admin.slides.update');
    Route::delete('/slides/{id}', [AdminSlideController::class, 'destroy'])->name('admin.slides.destroy');

    // Danh mục
    Route::get('/category', [AdminCategoryController::class, 'index'])->name('admin.category.index');
    Route::get('/category/create', [AdminCategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/category', [AdminCategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/category/{id}/edit', [AdminCategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('/category/{id}', [AdminCategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('/category/{id}', [AdminCategoryController::class, 'destroy'])->name('admin.category.destroy');

    Route::get('/media', [AdminMediaController::class, 'index'])->name('admin.media.index');
    Route::get('/media/create', [AdminMediaController::class, 'create'])->name('admin.media.create');
    Route::post('/media', [AdminMediaController::class, 'store'])->name('admin.media.store');
    Route::get('/media/{id}/edit', [AdminMediaController::class, 'edit'])->name('admin.media.edit');
    Route::put('/media/{id}', [AdminMediaController::class, 'update'])->name('admin.media.update');
    Route::delete('/media/{id}', [AdminMediaController::class, 'destroy'])->name('admin.media.destroy');

    // Role and Permission
    Route::get('/user/addPermission/view', [AdminUserController::class, 'addPermissionView'])->name('admin.user.addPermission.view');
    Route::post('/user/addPermission', [AdminUserController::class, 'addPermission'])->name('admin.user.addPermission');
    Route::post('/user/addRoles', [AdminUserController::class, 'addRoles'])->name('admin.user.addRoles');

    Route::get('/logs', [AdminController::class, 'viewLog'])->name('admin.logs');

    //importScript
    Route::get('/importScript', [AdminController::class, 'importScript'])->name('admin.script.index');
    Route::post('/addScript', [AdminController::class, 'store'])->name('admin.script.store');
    Route::get('/createTable', [AdminController::class, 'createTable'])->name('admin.script.createTable');
});

require __DIR__.'/auth.php';

// Error
Route::get('/not-found', function() {
    return view('errors.404');
})->name('error.404');

Route::get('/tin-tuc/{category}/{slug}', [NewsController::class, 'detailRedirect'])->middleware('redirect.500');;


Route::get('/{slug}', [NewsController::class, 'detail'])->middleware('redirect.500');


Route::get('/error', function() {
    return view('errors.500');
})->name('error.500');
