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
        Schema::create('saches', function (Blueprint $table) {
            $table->increments('id_sach');
            $table->string('ten_sach'); 
            $table->unsignedInteger('id_tacgia');
            $table->unsignedInteger('id_theloai');
            $table->foreign('id_tacgia')->references('id_tacgia')->on('tacgias')->onDelete('cascade');
            $table->foreign('id_theloai')->references('id_theloai')->on('theloais')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saches');
    }
};
