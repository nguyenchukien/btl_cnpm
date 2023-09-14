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
        Schema::create('khaches', function (Blueprint $table) {
            $table->increments('id_khach');
            $table->string('ten_khach');
            $table->string('gioi_tinh',10);
            $table->string('namsinh',5);
            $table->text('diachi');
            $table->string('sdt',12);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khaches');
    }
};
