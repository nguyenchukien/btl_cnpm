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
        Schema::create('bandocs', function (Blueprint $table) {
            $table->id();
            $table->string('tenban_doc');
            $table->string('gioi_tinh',10);
            $table->string('nam_sinh',5);
            $table->text('dia_chi');
            $table->string('sdt',12);
            $table->unsignedBigInteger('id_thuthu');
            $table->foreign('id_thuthu')->references('id')->on('thuthus')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bandocs');
    }
};
