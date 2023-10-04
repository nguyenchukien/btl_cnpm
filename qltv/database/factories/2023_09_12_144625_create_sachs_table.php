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
            $table->id('id_sach');
            $table->string('ten_sach',);
            $table->string('ten_tacgia');
            $table->string('the_loai');
            $table->unsignedInteger('id_thuthu');
            $table->foreign('id_thuthu')->references('id_thuthu')->on('thuthus')->onDelete('cascade');

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
