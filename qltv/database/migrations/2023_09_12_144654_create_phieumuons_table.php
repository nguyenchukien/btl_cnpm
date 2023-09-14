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
        Schema::create('phieumuons', function (Blueprint $table) {
            $table->increments('id_phieu');
            $table->unsignedInteger('id_nhanvien');
            $table->unsignedInteger('id_khach');
            $table->unsignedInteger('id_sach');
            $table->dateTime('ngay_muon'); 
            $table->dateTime('ngay_tra'); 
            $table->foreign('id_nhanvien')->references('id_nhanvien')->on('nhanviens')->onDelete('cascade');
            $table->foreign('id_khach')->references('id_khach')->on('khaches')->onDelete('cascade');
            $table->foreign('id_sach')->references('id_sach')->on('saches')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phieumuons');
    }
};
