<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\JobController;


/*
|--------------------------------------------------------------------------
| HALAMAN UTAMA
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| LOWONGAN
|--------------------------------------------------------------------------
*/

Route::get('/lowongan', [JobController::class, 'index'])
    ->name('lowongan');


/*
|--------------------------------------------------------------------------
| DETAIL LOWONGAN
|--------------------------------------------------------------------------
*/

Route::get('/lowongan/{id}', [JobController::class, 'show'])
->name('lowongan.detail');


/*
|--------------------------------------------------------------------------
| FORM LAMAR LOWONGAN
|--------------------------------------------------------------------------
*/

Route::get('/lowongan/{id}/lamar', [JobController::class, 'lamar'])
    ->name('lowongan.lamar');

/*
|--------------------------------------------------------------------------
| TENTANG
|--------------------------------------------------------------------------
*/

Route::get('/tentang', function () {
    return view('tentang');
});


/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {
    return view('login');
})->name('login');


/*
|--------------------------------------------------------------------------
| DAFTAR AKUN
|--------------------------------------------------------------------------
*/

Route::get('/daftar', function () {
    return view('daftar');
})->name('daftar');


/*
|--------------------------------------------------------------------------
| PROSES LOGIN
|--------------------------------------------------------------------------
*/

Route::post('/login', function (Request $request) {

    $email = $request->email;
    $password = $request->password;


    /*
    |--------------------------------------------------------------------------
    | AKUN DUMMY PERUSAHAAN
    |--------------------------------------------------------------------------
    */

    if (
        $email === 'perusahaan@gmail.com' &&
        $password === 'perusahaan123'
    ) {

        session([
            'login' => true,
            'role' => 'perusahaan',
            'nama_perusahaan' => 'PT Sansan Saudaratex',
            'email_perusahaan' => 'perusahaan@gmail.com'
        ]);

        return redirect('/dashboard-perusahaan');
    }


    /*
    |--------------------------------------------------------------------------
    | AKUN DUMMY PENCARI KERJA
    |--------------------------------------------------------------------------
    */

    if (
        $email === 'pencari@gmail.com' &&
        $password === 'pencari123'
    ) {

        session([
            'login' => true,
            'role' => 'pencari',
            'nama_pengguna' => 'Ahmad Rizky Pratama',
            'email_pengguna' => 'pencari@gmail.com',
            'kota_pengguna' => 'Tasikmalaya'
        ]);

        return redirect('/dashboard-pencari');
    }


    /*
    |--------------------------------------------------------------------------
    | LOGIN GAGAL
    |--------------------------------------------------------------------------
    */

    return back()->with(
        'error',
        'Email atau password salah.'
    );

})->name('login.process');


/*
|--------------------------------------------------------------------------
| DASHBOARD PERUSAHAAN
|--------------------------------------------------------------------------
*/

Route::get('/dashboard-perusahaan', function () {

    if (!session('login')) {
        return redirect('/login');
    }

    if (session('role') !== 'perusahaan') {
        return redirect('/login');
    }

    return view('dashboard-perusahaan');

})->name('dashboard.perusahaan');


/*
|--------------------------------------------------------------------------
| LOWONGAN SAYA - PERUSAHAAN
|--------------------------------------------------------------------------
*/

Route::get('/lowongan-saya', function () {

    if (
        !session('login') ||
        session('role') !== 'perusahaan'
    ) {
        return redirect('/login');
    }

    return view('lowongan-saya');

})->name('lowongan.saya');


/*
|--------------------------------------------------------------------------
| TAMBAH LOWONGAN
|--------------------------------------------------------------------------
*/

Route::get('/tambah-lowongan', function () {

    if (
        !session('login') ||
        session('role') !== 'perusahaan'
    ) {
        return redirect('/login');
    }

    return view('tambah-lowongan');

})->name('tambah.lowongan');


/*
|--------------------------------------------------------------------------
| PROFIL PERUSAHAAN
|--------------------------------------------------------------------------
*/

Route::get('/profil-perusahaan', function () {

    if (
        !session('login') ||
        session('role') !== 'perusahaan'
    ) {
        return redirect('/login');
    }

    return view('profil-perusahaan');

})->name('profil.perusahaan');


/*
|--------------------------------------------------------------------------
| DASHBOARD PENCARI KERJA
|--------------------------------------------------------------------------
*/

Route::get('/dashboard-pencari', function () {

    if (
        !session('login') ||
        session('role') !== 'pencari'
    ) {
        return redirect('/login');
    }

    return view('dashboard-pencari');

})->name('dashboard.pencari');


/*
|--------------------------------------------------------------------------
| PROFIL PENCARI KERJA
|--------------------------------------------------------------------------
*/

Route::get('/profil-pencari', function () {

    if (
        !session('login') ||
        session('role') !== 'pencari'
    ) {
        return redirect('/login');
    }

    return view('profil-pencari');

})->name('profil.pencari');


/*
|--------------------------------------------------------------------------
| KEAHLIAN PENCARI KERJA
|--------------------------------------------------------------------------
*/

Route::get('/keahlian-pencari', function () {

    if (
        !session('login') ||
        session('role') !== 'pencari'
    ) {
        return redirect('/login');
    }

    return view('keahlian-pencari');

})->name('keahlian.pencari');


/*
|--------------------------------------------------------------------------
| PENDIDIKAN PENCARI KERJA
|--------------------------------------------------------------------------
*/

Route::get('/pendidikan-pencari', function () {

    if (
        !session('login') ||
        session('role') !== 'pencari'
    ) {
        return redirect('/login');
    }

    return view('pendidikan-pencari');

})->name('pendidikan.pencari');


/*
|--------------------------------------------------------------------------
| PENGALAMAN PENCARI KERJA
|--------------------------------------------------------------------------
*/

Route::get('/pengalaman-pencari', function () {

    if (
        !session('login') ||
        session('role') !== 'pencari'
    ) {
        return redirect('/login');
    }

    return view('pengalaman-pencari');

})->name('pengalaman.pencari');


/*
|--------------------------------------------------------------------------
| CV PENCARI KERJA
|--------------------------------------------------------------------------
*/

Route::get('/cv-pencari', function () {

    if (
        !session('login') ||
        session('role') !== 'pencari'
    ) {
        return redirect('/login');
    }

    return view('cv-pencari');

})->name('cv.pencari');


/*
|--------------------------------------------------------------------------
| LOGOUT
|--------------------------------------------------------------------------
*/

Route::get('/logout', function () {

    session()->flush();

    return redirect('/login');

})->name('logout');

Route::get('/pengaturan-akun', function () {
    return view('pengaturan-akun');
})->name('pengaturan-akun');

Route::get('/pelamar-masuk', function () {
    return view('pelamar-masuk');
})->name('pelamar-masuk');

Route::get('/sejarah', function () {
    return view('sejarah');
})->name('sejarah');

Route::get('/struktur-organisasi', function () {
    return view('struktur-organisasi');
})->name('struktur-organisasi');

Route::get('/tupoksi', function () {
    return view('tupoksi');
})->name('tupoksi');

Route::get('/visi-misi', function () {
    return view('visi-misi');
})->name('visi-misi');