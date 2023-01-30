<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('iskolas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nev');
            $table->string('om_azonosito');
            $table->string('iranyitoszam');
            $table->string('varos');
            $table->string('utca');
            $table->string('telefon');
            $table->string('email');
            $table->string('logo')->nullable();
            $table->string('fenykep')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iskolas');
    }
};
