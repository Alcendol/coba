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
        Schema::create('registers', function (Blueprint $table) {
            $table->string('NIK')->primary();
            $table->string('email')->unique();
            $table->string('name');
            $table->string('tempat-lahir');
            $table->date('tanggal-lahir');
            $table->string('jenis-kelamin');
            $table->string('status-pernikahan');
            $table->string('nomor-hp');
            $table->text('alamat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reg');
    }
};
