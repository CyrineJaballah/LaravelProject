<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('epreuves', function (Blueprint $table) {
            $table->id('id');
            $table->date('date');
            $table->string('nom');
            $table->foreignId('matiere_id')->constrained('matiere');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('epreuves');
    }
};
