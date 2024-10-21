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
        Schema::create('professor', function (Blueprint $table){
            $table->id('id_professor');
            $table->string('naran_kompletu');
            $table->string('sexo');
            $table->string('email')->nullable();
            $table->string('no_telefone')->nullable();
            $table->string('foto')->nullable();
            $table->string('hela_fatin');
          
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
