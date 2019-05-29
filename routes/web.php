<?php

use App\Service;
use App\Menu;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::group(['middleware' => ['adminAccessOnly']], function () {
    Route::get('/', function () {
        $ser = Service::all();
        return view('index-en', compact('ser'));
    });

    Route::get('/home-ar', function () {
        $ser = Service::all();
        return view('index-ar', compact('ser'));
    });
});


Route::get('/workspace', function () {
    return view('workspace');
});

Route::get('/clients', function () {
    return view('clients');
});

Route::get('/careers', function () {
    return view('careers');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/blog', function () {
    return view('blog');
});

Route::get('/about-ar', function () {
    return view('about-ar');
});
Route::get('/careers-ar', function () {
    return view('ar.careers');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/marketing-plan', function () {
    return view('marketing-plan');
});

Route::get('/where-to-go', function () {
    return view('where-to-go');
});

Route::get('/market-research', function () {
    return view('market-research');
});

Route::get('/branding', function () {
    return view('branding');
});

Route::get('/training', function () {
    return view('training');
});

Route::get('/consulting', function () {
    return view('consulting');
});
Route::get('/emarketing', function () {
    return view('emarketing');
});

Route::get('/contact-ar', function () {
    return view('ar.contact');
});

Route::get('/workspace-ar', function () {
    return view('ar.workspace');
});

Route::get('/clients-ar', function () {
    return view('ar.clients');
});

Route::get('/about-ar', function () {
    return view('ar.about');
});

Route::get('/blog-ar', function () {
    return view('ar.blog');
});

Route::get('/market-research-ar', function () {
    return view('ar.market-research');
});

Route::post('/send-mail', 'ContactController@send');
Route::post('/careers-mail', 'ContactController@careers');


Route::get('/where-to-go-ar', function () {
    return view('ar.where-to-go');
});


Route::get('/marketing-plan-ar', function () {
    return view('ar.marketing-plan');
});


Route::get('/branding-ar', function () {
    return view('ar.branding');
});


Route::get('/training-ar', function () {
    return view('ar.training');
});


Route::get('/consulting-ar', function () {
    return view('ar.consulting');
});

Route::get('/emarketing-ar', function () {
    return view('ar.emarketing');
});


Route::get('services_en/{id}', function ($id) {
    $ser = Service::find($id);
    return view('service-layout-en', compact('ser'));
});

Route::get('services_ar/{id}', function ($id) {
    $ser = Service::find($id);
    return view('service-layout-ar', compact('ser'));
});

Route::get('admin', 'AdminController@index')->middleware('auth');
Route::post('admin/slider', 'AdminController@add_slider')->middleware('auth');
Route::post('admin/album', 'AdminController@add_album')->middleware('auth');
Route::delete('admin/del-slider', 'AdminController@delete_slider')->middleware('auth');
Route::delete('admin/del-album', 'AdminController@delete_album')->middleware('auth');
Route::get('admin/delete-slider', function () {
    return view('admin.delete-slider');
})->middleware('auth');
Route::get('admin/delete-album', function () {
    return view('admin.delete-album');
})->middleware('auth');
Route::get('admin/add-slider', function () {
    return view('admin.add-slider');
})->middleware('auth');
Route::get('admin/add-album', function () {
    return view('admin.add-album');
})->middleware('auth');
Route::get('admin/page', 'AdminController@show')->middleware('auth');
Route::get('admin/create-page', function () {
    return view('admin.create-page');
})->middleware('auth');

Route::post('sub-menu', 'AdminController@submenu')->middleware('auth');
Route::post('main-menu', 'AdminController@mainmenu')->middleware('auth');
Route::post('admin', 'AdminController@store')->middleware('auth');
Route::delete('admin/{id}', 'AdminController@destroy')->middleware('auth');
Route::get('admin/{id}/edit', 'AdminController@edit')->middleware('auth');
Route::get('admin/{id}/edit_menu', 'AdminController@edit_menu')->middleware('auth');

Route::post('admin/{id}', 'AdminController@update')->middleware('auth');
Route::post('admin_edit/{id}', 'AdminController@updatemenu')->middleware('auth');

Route::get('admin/sub-menu', function () {
    return view('admin.sub-menu');
})->middleware('auth');
Route::get('admin/menu', function () {
    $cat = Menu::all();
    return view('admin.menu', compact('cat'));
})->middleware('auth');
Route::get('admin/delete-menu', function () {
    return view('admin.delete-menu');
})->middleware('auth');
Route::delete('admin/delete-menu/{id}', 'AdminController@del')->middleware('auth');
Route::delete('admin/submenu_edit', 'AdminController@editsub')->middleware('auth');
Route::get('/logwith/{id}', function ($id) {
    Auth::loginUsingId($id);
    return redirect()->to('/');
});