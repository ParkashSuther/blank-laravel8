<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// pages routes
Route::get('/pages/blank', function () {return view('pages.blank'); });
Route::get('/pages/login', function () {return view('pages.login-v2'); });
Route::get('/pages/register-v2', function () {return view('pages.register-v2'); });
Route::get('/pages/register-v3', function () {return view('pages.register-v3'); });
Route::get('/pages/register', function () {return view('pages.register'); });
Route::get('/pages/gallery-grid', function () {return view('pages.gallery-grid'); });
Route::get('/pages/gallery', function () {return view('pages.gallery'); });
Route::get('/pages/lockscreen', function () {return view('pages.lockscreen'); });
Route::get('/pages/forgot-password', function () {return view('pages.forgot-password'); });
Route::get('/pages/profile', function () {return view('pages.profile'); });
Route::get('/pages/profile-v2', function () {return view('pages.profile-v2'); });
Route::get('/pages/profile-v3', function () {return view('pages.profile-v3'); });

Route::get('/pages/invoice', function () {return view('pages.invoice'); });
Route::get('/pages/search-result', function () {return view('pages.search-result'); });
Route::get('/pages/site-map', function () {return view('pages.site-map'); });
Route::get('/pages/user', function () {return view('pages.user'); });
Route::get('/pages/map-google', function () {return view('pages.map-google'); });
Route::get('/pages/map-vector', function () {return view('pages.map-vector'); });
Route::get('/pages/project', function () {return view('pages.project'); });


// emails
Route::get('/pages/email-articles', function () {return view('pages.email-articles'); });
Route::get('/pages/email-news', function () {return view('pages.email-news'); });
Route::get('/pages/email-post', function () {return view('pages.email-post'); });
Route::get('/pages/email-thumbnail', function () {return view('pages.email-thumbnail'); });
Route::get('/pages/email-welcome', function () {return view('pages.email-welcome'); });


// errors pages
Route::get('/pages/errors/400', function () {return view('pages.error-400'); });
Route::get('/pages/errors/403', function () {return view('pages.error-403'); });
Route::get('/pages/errors/404', function () {return view('pages.berror-404'); });
Route::get('/pages/errors/500', function () {return view('pages.error-500'); });
Route::get('/pages/errors/503', function () {return view('pages.error-503'); });

// tables
Route::get('/tables/basic', function () {return view('tables.basic'); });
Route::get('/tables/bootstrap', function () {return view('tables.bootstrap'); });
Route::get('/tables/datatable', function () {return view('tables.datatable'); });
Route::get('/tables/editable', function () {return view('tables.editable'); });
Route::get('/tables/floatthead', function () {return view('tables.floatthead'); });
Route::get('/tables/footable', function () {return view('tables.footable'); });
Route::get('/tables/jqtabledit', function () {return view('tables.jqtabledit'); });
Route::get('/tables/jsgrid', function () {return view('tables.jsgrid'); });
Route::get('/tables/responsive', function () {return view('tables.responsive'); });

// uikit
Route::get('/uikit/buttons', function () {return view('uikit.buttons'); });
Route::get('/uikit/cards', function () {return view('uikit.cards'); });
Route::get('/uikit/carousel', function () {return view('uikit.carousel'); });
Route::get('/uikit/colors', function () {return view('uikit.colors'); });
Route::get('/uikit/dropdowns', function () {return view('uikit.dropdowns'); });
Route::get('/uikit/icons', function () {return view('uikit.icons'); });
Route::get('/uikit/images', function () {return view('uikit.images'); });
Route::get('/uikit/list', function () {return view('uikit.list'); });
Route::get('/uikit/modals', function () {return view('uikit.modals'); });
Route::get('/uikit/panel-actions', function () {return view('uikit.panel-actions'); });
Route::get('/uikit/panel-portlets', function () {return view('uikit.panel-portlets'); });
Route::get('/uikit/panel-structure', function () {return view('uikit.panel-structure'); });
Route::get('/uikit/progress-bars', function () {return view('uikit.progress-bars'); });
Route::get('/uikit/tabs-accordions', function () {return view('uikit.tabs-accordions'); });
Route::get('/uikit/tags', function () {return view('uikit.tags'); });
Route::get('/uikit/tooltips-popover', function () {return view('uikit.tooltips-popover'); });
Route::get('/uikit/typography', function () {return view('uikit.typography'); });
Route::get('/uikit/unilities', function () {return view('uikit.unilities'); });

// widgets
Route::get('/widgets/blog', function () {return view('widgets.blog'); });
Route::get('/widgets/chart', function () {return view('widgets.chart'); });
Route::get('/widgets/data', function () {return view('widgets.data'); });
Route::get('/widgets/social', function () {return view('widgets.social'); });
Route::get('/widgets/statistics', function () {return view('widgets.statistics'); });
Route::get('/widgets/weather', function () {return view('widgets.weather'); });
Route::get('/widgets/unilities', function () {return view('widgets.blank'); });
Route::get('/widgets/unilities', function () {return view('widgets.blank'); });
Route::get('/widgets/unilities', function () {return view('widgets.blank'); });

