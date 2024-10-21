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
        Schema::create('estudante', function (Blueprint $table) {
            $table->id('id_estudante');
            $table->string('naran_kompletu');
            $table->string('hela_fatin');
            $table->string('no_telefone');
            $table->string('sexo');
            $table->string('data_moris');
            $table->string('foto')->nullable();          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
