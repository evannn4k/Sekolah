<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->string("nama_sekolah");
            $table->text("alamat");
            $table->string("telepon");
            $table->string("email");
            $table->string("npsn");
            $table->string("akreditasi");
            $table->text("sejarah");
            $table->text("visi");
            $table->text("misi");
            $table->text("sambutan_kepsek");
            $table->string("nama_kepsek");
            $table->string("foto_kepsek");
            $table->string("judul_tentang_sekolah");
            $table->text("tentang_sekolah");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profils');
    }
};
