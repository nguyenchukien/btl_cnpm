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
        Schema::create('thuthus', function (Blueprint $table) {
            $table->increments('id_thuthu');
            $table->string('ten_thuthu');
            $table->text('diachi');
            $table->string('sdt',12);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thuthus');
    }
};
