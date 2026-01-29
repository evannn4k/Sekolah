<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;

use App\Http\Controllers\Guru\DashboardController as GuruDashboard;
use App\Http\Controllers\Guru\BeritaController as GuruBerita;
use App\Http\Controllers\Guru\GuruStaffController as GuruGuruStaff;

use App\Http\Controllers\Admin\UserController as AdminUser;
use App\Http\Controllers\Admin\BeritaController as AdminBerita;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\ProfilController as AdminProfil;
use App\Http\Controllers\Admin\BannerController as AdminBanner;
use App\Http\Controllers\Admin\GaleriController as AdminGaleri;
use App\Http\Controllers\Admin\PrestasiController as AdminPrestasi;
use App\Http\Controllers\Admin\GuruStaffController as AdminGuruStaff;
use App\Http\Controllers\Admin\FasilitasController as AdminFasilitas;
use App\Http\Controllers\Admin\PesanController as AdminPesan;

Route::controller(AuthController::class)
    ->group(function () {
        Route::get("/login", "login")->name("login")->middleware("guest.role");
        Route::get("/formRegister", "formRegister")->name("formRegister")->middleware("guest.role");

        Route::post("/register", "register")->name("register");
        Route::post("/verify", "verify")->name("verify");
        Route::get("/logout", "logout")->name("logout");
    });

Route::controller(GuestController::class)
    ->group(function () {
        Route::get("/", "index")->name("index");
        Route::get("/profil", "profil")->name("profil");
        Route::get("/guru-staff", "guruStaff")->name("guru-staff");
        Route::get("/berita", "berita")->name("berita");
        Route::get("/detail-berita/{berita}", "detailBerita")->name("detail-berita");
        Route::get("/galeri", "galeri")->name("galeri");
        Route::get("/prestasi", "prestasi")->name("galeri");
        Route::get("/prestasi", "prestasi")->name("prestasi");
        Route::get("/fasilitas", "fasilitas")->name("fasilitas");
        Route::get("/kontak", "kontak")->name("kontak");

        Route::get("/berita/search", "beritaSearch")->name("berita.search");
        Route::get("/berita/{k}", "beritaKategori")->name("berita.kategori");
        Route::post("/pesan", "pesan")->name("pesan");
    });

Route::middleware("auth:guru")
    ->prefix("/guru")
    ->name("guru.")
    ->group(function () {

        Route::controller(GuruDashboard::class)
            ->group(function () {
                Route::get("/dashboard", "dashboard")->name("dashboard");
            });

        Route::controller(GuruBerita::class)
            ->prefix("/berita")
            ->name("berita.")
            ->group(function () {
                Route::get("/", "index")->name("index");
                Route::get("/create", "create")->name("create");
                Route::get("/edit/{berita}", "edit")->name("edit");
                Route::get("/detail/{berita}", "detail")->name("detail");

                Route::post("/store", "store")->name("store");
                Route::post("/update/{berita}", "update")->name("update");
                Route::post("/delete/{berita}", "delete")->name("delete");
            });

        Route::controller(GuruGuruStaff::class)
            ->prefix("/guru-staff")
            ->name("guru-staff.")
            ->group(function () {
                Route::get("/", "index")->name("index");
                Route::get("/create", "create")->name("create");
                Route::get("/edit/{guruStaff}", "edit")->name("edit");

                Route::post("/store", "store")->name("store");
                Route::post("/update/{guruStaff}", "update")->name("update");
                Route::post("/delete/{guruStaff}", "delete")->name("delete");
            });
    });

Route::middleware("auth:admin")
    ->prefix("/admin")
    ->name("admin.")
    ->group(function () {

        Route::controller(AdminDashboard::class)
            ->group(function () {
                Route::get("/dashboard", "dashboard")->name("dashboard");
            });

        Route::controller(AdminUser::class)
            ->prefix("/user")
            ->name("user.")
            ->group(function () {
                Route::get("/", "index")->name("index");
                Route::get("/create", "create")->name("create");
                Route::get("/edit/{user}", "edit")->name("edit");

                Route::post("/store", "store")->name("store");
                Route::post("/update/{user}", "update")->name("update");
                Route::post("/delete/{user}", "delete")->name("delete");
            });

        Route::controller(AdminBerita::class)
            ->prefix("/berita")
            ->name("berita.")
            ->group(function () {
                Route::get("/", "index")->name("index");
                Route::get("/create", "create")->name("create");
                Route::get("/edit/{berita}", "edit")->name("edit");
                Route::get("/detail/{berita}", "detail")->name("detail");

                Route::post("/store", "store")->name("store");
                Route::post("/update/{berita}", "update")->name("update");
                Route::post("/delete/{berita}", "delete")->name("delete");
            });

        Route::controller(AdminProfil::class)
            ->prefix("/profil")
            ->name("profil.")
            ->group(function () {
                Route::get("/", "index")->name("index");
                Route::post("/update/{profil}", "update")->name("update");
            });

        Route::controller(AdminBanner::class)
            ->prefix("/banner")
            ->name("banner.")
            ->group(function () {
                Route::get("/", "index")->name("index");
                Route::get("/create", "create")->name("create");
                Route::get("/edit/{banner}", "edit")->name("edit");

                Route::post("/store", "store")->name("store");
                Route::post("/update/{banner}", "update")->name("update");
                Route::post("/delete/{banner}", "delete")->name("delete");
            });

        Route::controller(AdminGaleri::class)
            ->prefix("/galeri")
            ->name("galeri.")
            ->group(function () {
                Route::get("/", "index")->name("index");
                Route::get("/create", "create")->name("create");
                Route::get("/edit/{galeri}", "edit")->name("edit");

                Route::post("/store", "store")->name("store");
                Route::post("/update/{galeri}", "update")->name("update");
                Route::post("/delete/{galeri}", "delete")->name("delete");
            });

        Route::controller(AdminPrestasi::class)
            ->prefix("/prestasi")
            ->name("prestasi.")
            ->group(function () {
                Route::get("/", "index")->name("index");
                Route::get("/create", "create")->name("create");
                Route::get("/edit/{prestasi}", "edit")->name("edit");

                Route::post("/store", "store")->name("store");
                Route::post("/update/{prestasi}", "update")->name("update");
                Route::post("/delete/{prestasi}", "delete")->name("delete");
            });

        Route::controller(AdminFasilitas::class)
            ->prefix("/fasilitas")
            ->name("fasilitas.")
            ->group(function () {
                Route::get("/", "index")->name("index");
                Route::get("/create", "create")->name("create");
                Route::get("/edit/{fasilitas}", "edit")->name("edit");

                Route::post("/store", "store")->name("store");
                Route::post("/update/{fasilitas}", "update")->name("update");
                Route::post("/delete/{fasilitas}", "delete")->name("delete");
            });

        Route::controller(AdminGuruStaff::class)
            ->prefix("/guru-staff")
            ->name("guru-staff.")
            ->group(function () {
                Route::get("/", "index")->name("index");
                Route::get("/create", "create")->name("create");
                Route::get("/edit/{guruStaff}", "edit")->name("edit");

                Route::post("/store", "store")->name("store");
                Route::post("/update/{guruStaff}", "update")->name("update");
                Route::post("/delete/{guruStaff}", "delete")->name("delete");
            });

        Route::controller(AdminPesan::class)
            ->prefix("/pesan")
            ->name("pesan.")
            ->group(function () {
                Route::get("/", "index")->name("index");
            });
    });
