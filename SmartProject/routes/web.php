<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

route::get('/contact',function(){
    return view('view/contact');
});
/* ====== Services route ======== */
route::get('services/infogerence',function(){
    return view('view.services.infogerence');
});
route::get('services/Contrat-de-support',function(){
    return view('view.services.contrat');
});
route::get('services/Integration-Migration',function(){
    return view('view.services.integration-migration');
});

/* ================= Solution route================ */

route::get('solutions/collaboration',function(){
    return view('view.solutions.collaboration');
});
route::get('solutions/gestion',function(){
    return view('view.solutions.gestion');
});
route::get('solutions/Internet',function(){
    return view('view.solutions.Internet');
});
route::get('solutions/Cloud',function(){
    return view('view.solutions.Cloud');
});

/* */
route::post('contact',[
    ContactController::class,'index'
])->name('SendEmail');