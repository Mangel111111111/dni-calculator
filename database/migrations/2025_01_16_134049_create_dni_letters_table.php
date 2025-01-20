<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('dni_letters', function (Blueprint $table) {
            $table->id();
            $table->integer('dniRemainder')->unique();
            $table->char('letter', 1);
            $table->timestamps();
        });        
    }

    public function down(): void
    {
        Schema::dropIfExists('dni_letters');
    }
};
