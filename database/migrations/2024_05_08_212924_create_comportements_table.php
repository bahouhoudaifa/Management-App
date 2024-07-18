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
        Schema::create('comportements', function (Blueprint $table) {
            $table->increments('IdCom');
            $table->integer('IdForm');
            $table->string('Motif');
            $table->date('DateComportement');
            $table->string('TypeComportement');
            $table->integer('idStag');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comportements');
    }
};
