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
            $table->string('ten_sach',); 
            $table->string('ten_tacgia'); 
            $table->string('the_loai'); 
            
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
