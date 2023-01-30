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
        Schema::create('szemponts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('szempontsor_id');
            $table->foreign('szempontsor_id')
                ->references('id')
                ->on('szempontsors')
                ->onDelete('cascade');
            $table->text('terulet');
            $table->text('szempont');
            $table->text('magyarazat');
            $table->text('kiegeszites')->nullable();
            $table->text('kapcsolodo')->nullable();
            $table->text('adatforras');
            $table->integer('ertek');
            $table->integer('sulyszorzo');
            $table->integer('sulyozott');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('szemponts');
    }
};
