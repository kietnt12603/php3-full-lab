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
        Schema::create('sv', function (Blueprint $table) {
            $table->string('masv')->primary();
            $table->string('hoten', 255)->nullable();
            $table->integer('tuoi')->nullable();
            $table->date('ngaysinh')->nullable();
            $table->string('cmnd')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sv');
    }
};
