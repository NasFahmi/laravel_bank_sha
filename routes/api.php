<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'api','prefix' => 'auth'], function ($router) {
    Route::post('login', [AuthController::class,'login']);
    Route::post('register', [AuthController::class,'register']);
    Route::post('logout', [AuthController::class,'logout']);
    Route::post('refresh', [AuthController::class,'refresh']);
    //! berfungsi ketika ingin membuat token baru dan lama dihapus,
    //! kenapa harus ada refresh? untuk mengantisipasi user afk/diam lama secara otomatis token harus dihapus, dan harus di ganti, maka refersh digunakan disini 
    /**
     * Keamanan Lebih Lama: JWT biasanya memiliki masa berlaku (expiry time). Dengan mengimplementasikan mekanisme refresh token, aplikasi dapat memperpanjang sesi pengguna tanpa meminta pengguna untuk login ulang, selama token refresh masih valid.
     * Manajemen Sesi: Mekanisme refresh token memungkinkan aplikasi menjaga sesi pengguna lebih lama tanpa harus menyimpan token akses dengan masa berlaku yang sangat panjang. Ini dapat membantu mengurangi risiko keamanan jika token diambil alih oleh pihak yang tidak berwenang.
     * Pencegahan Penggunaan Kembali Token: Dengan menggunakan mekanisme refresh token yang tepat, setiap kali token di-refresh, token yang lama menjadi tidak valid. Ini membantu mengurangi risiko penggunaan kembali token yang sudah dicuri.
     */
    Route::post('me', [AuthController::class,'me']);
});
