<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oktatos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->string('vezeteknev');
            $table->string('keresztnev');
            $table->string('om_azonosito');
            $table->unsignedBigInteger('iskola_id');
            $table->foreign('iskola_id')
                ->references('id')
                ->on('iskolas')
                ->onDelete('cascade');
            $table->unsignedBigInteger('munkakor_id');
            $table->foreign('munkakor_id')
                ->references('id')
                ->on('munkakors');
            $table->text('vegzettsegek')->nullable();
            $table->text('tovabbkepzesek')->nullable();
            $table->string('oneletrajz')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oktatos');
    }
};
