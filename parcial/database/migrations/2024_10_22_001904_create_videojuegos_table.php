<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('videojuegos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->decimal('precio', 8, 2);
            $table->date('fecha_lanzamiento');
            $table->boolean('disponible');
            $table->float('rating', 2, 1);
            $table->string('genero');
            $table->string('plataformas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videojuegos');
    }
};
