<?php

use Illuminate\Support\Facades\Route;

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

//untuk_halaman_login
Route::get('/', function () {
    return view('auth.login');
});
//untuk_home/halamn_utama
Route::get('/home', function () {
    return view('home');
});

//untuk_halaman_register
Route::get('/register', function () {
    return view('auth.register');
});

//untuk_halaman_forget-password
Route::get('/forget-password', function () {
    return view('auth.forget-password');
});

//untuk_halaman_izin_foto/camera/permintaan yang lain/quest
Route::get('/caution', function () {
    return view('quest.caution');
});

//untuk_halaman_pertanyaan_anxienty
Route::get('/questioner-page', function () {
    return view('quest.questioner-page');
});

//untuk_halaman_user-manual/cara_usernan_web_oleh_user(ini_belum_dibuat_atau_ga_usah_jg_gapapa)
Route::get('/user-manual', function () {
    return view('quest.user-manual');
});

//untuk_halaman_hasil_ringan
Route::get('/result-ringan', function () {
    return view('quest.result.result-ringan');
});

//untuk_halaman_hasil_sedang
Route::get('/result-sedang', function () {
    return view('quest.result.result-sedang');
});

//untuk_halaman_hasil_berat
Route::get('/result-berat', function () {
    return view('quest.result.result-berat');
});

//untuk_halaman_hasil_sangat_berat
Route::get('/result-sangat-berat', function () {
    return view('quest.result.result-sangat-berat');
});

//untuk_halaman_habit-tracking
Route::get('/trackinghabits_b', function () {
    return view('tracking-habits.trackinghabits_b');
});

//untuk_halaman_jadwal
Route::get('/halaman-jadwal', function () {
    return view('tracking-habits.halaman-jadwal');
});

//untuk_halaman_hasil
Route::get('/hasil-21hari', function () {
    return view('tracking-habits.hasil-21hari');
});

//untuk_templates_footer(kalo udah diganti ga perlu berarti)
Route::get('/footer', function () {
    return view('templates.footer');
});

//untuk_templates_header(kalo udah diganti ga perlu berarti)
Route::get('/header', function () {
    return view('templates.header');
});

//untuk_template_sidebar(niat awal ada sidebar tapi yternyata ga ada, kalo ga kepake dihapus gapapa)
Route::get('/sidebar', function () {
    return view('templates.sidebar');
});

//untuk_halaman_feedback(belum dibuat_ini isinya review user terhadap web kita)
Route::get('/feedback', function () {
    return view('feedback');
});

include 'FromController.php';
