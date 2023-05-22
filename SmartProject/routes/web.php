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
    return view('view/index');
});
route::get('/smart-technologies',function(){
    return view('view/about');
});
/* ====== Services route ======== */
route::get('/infogerence',function(){
    return view('view/infogerence');
});
route::get('/Contrat-de-support',function(){
    return view('view/contrat');
});
route::get('/Integration-Migration',function(){
    return view('view/integration-migration');
});

/* ================= Solution route================ */

route::get('/collaboration',function(){
    return view('view/collaboration');
});
route::get('/gestion',function(){
    return view('view/gestion');
});
route::get('/Internet',function(){
    return view('view/Internet');
});
route::get('/Cloud',function(){
    return view('view/Cloud');
});
route::get('/contact',function(){
    return view('view/contact');
});