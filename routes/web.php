<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('home',['title'=>'home']);
});
*/

/*admin stuff */
Route::get('/deleteBlogList',[\App\Http\Controllers\Admin::class,'deleteBlog'])->middleware(['\App\Http\Middleware\SetSecurityHeaders', '\App\Http\Middleware\CheckRole']);

Route::post('/deleteBlogDo',[\App\Http\Controllers\Admin::class,'deleteBlogDo'])->middleware(['\App\Http\Middleware\SetSecurityHeaders', '\App\Http\Middleware\CheckRole']);

Route::get('/resetPw',[\App\Http\Controllers\Admin::class,'resetPwForm'])->middleware(['\App\Http\Middleware\SetSecurityHeaders', '\App\Http\Middleware\CheckRole']);

Route::post('/resetPw', [\App\Http\Controllers\Admin::class, 'resetPwDO'])->middleware(['\App\Http\Middleware\SetSecurityHeaders', '\App\Http\Middleware\CheckRole']);

Route::get('/editBlog/{slug}',[\App\Http\Controllers\Admin::class,'editBlog'])->middleware(['\App\Http\Middleware\SetSecurityHeaders', '\App\Http\Middleware\CheckRole']);


Route::get('/editBlogList',[\App\Http\Controllers\Admin::class,'editBlogList'])->middleware(['\App\Http\Middleware\SetSecurityHeaders', '\App\Http\Middleware\CheckRole']);

Route::post('/editBlogDo', [\App\Http\Controllers\Admin::class, 'editBlogDo'])->middleware(['\App\Http\Middleware\SetSecurityHeaders', '\App\Http\Middleware\CheckRole']);

Route::get('/blogForm',[\App\Http\Controllers\Admin::class,'blogForm'])->middleware(['\App\Http\Middleware\SetSecurityHeaders', '\App\Http\Middleware\CheckRole']);

Route::post('/newBlog', [\App\Http\Controllers\Admin::class, 'createBlog'])->middleware(['\App\Http\Middleware\SetSecurityHeaders', '\App\Http\Middleware\CheckRole']);

Route::get('/galleryForm',[\App\Http\Controllers\Admin::class,'galleryForm']);
Route::post('/addGallery',[\App\Http\Controllers\Admin::class,'addGallery'])->middleware(['\App\Http\Middleware\SetSecurityHeaders', '\App\Http\Middleware\CheckRole']);

Route::get('/deleteGalleryList',[\App\Http\Controllers\Admin::class,'deleteGallery'])->middleware(['\App\Http\Middleware\SetSecurityHeaders', '\App\Http\Middleware\CheckRole']);

Route::post('/deleteGalleryDo',[\App\Http\Controllers\Admin::class,'deleteGalleryDo'])->middleware(['\App\Http\Middleware\SetSecurityHeaders', '\App\Http\Middleware\CheckRole']);

Route::get('/listBlogs',[\App\Http\Controllers\BlogController::class,'listBlogs']);
Route::get('/listGallery',[\App\Http\Controllers\BlogController::class,'listGallery']);
Route::get('/blogArticle/{slug}',[\App\Http\Controllers\BlogController::class,'blogArticle']);
Route::get('/getSession', [\App\Http\Controllers\Admin::class, 'getSession']);
Route::get('/editBlogForm',[\App\Http\Controllers\Admin::class, 'editBlog'])->middleware(['\App\Http\Middleware\SetSecurityHeaders', '\App\Http\Middleware\CheckRole']);

Route::get('/admin',[\App\Http\Controllers\Admin::class, 'admin'])->middleware(['\App\Http\Middleware\SetSecurityHeaders', '\App\Http\Middleware\CheckRole']);

Route::get('/blackcat', [\App\Http\Controllers\Admin::class, 'blackcat'])->middleware(['\App\Http\Middleware\SetSecurityHeaders']);
Route::post('/login', [\App\Http\Controllers\Admin::class, 'login'])->middleware(['\App\Http\Middleware\SetSecurityHeaders']);
Route::get('/logout', [\App\Http\Controllers\Admin::class, 'logout'])->name('andy');;

/*    Contact Stuff */

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'showForm']);
Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'submitForm'])->middleware('\App\Http\Middleware\CheckSpam');  

//Route::get('/flushSession', [\App\Http\Controllers\Pages::class, 'flushSession']);
Route::get('/spam', [\App\Http\Controllers\ContactController::class, 'spam']);

Route::get('/nopage',function () {
return view('nopage',['title'=>'test']);	
});


//prevent diredt access to pahes like directBlogList




Route::get('/{page?}',[\App\Http\Controllers\Pages::class,'checkPage'])->middleware(['\App\Http\Middleware\SetSecurityHeaders']);  


	
	

Route::fallback(function () {
echo "no such page";
});

















