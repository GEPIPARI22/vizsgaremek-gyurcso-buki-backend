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
        Schema::create('ertekeles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('oktato_id');
            $table->foreign('oktato_id')
                ->references('id')
                ->on('oktatos')
                ->onDelete('cascade');
            $table->unsignedBigInteger('szempontsor_id');
            $table->foreign('szempontsor_id')
                ->references('id')
                ->on('szempontsors');
            $table->date('idopont');
            $table->integer('terulet1');
            $table->integer('terulet2');
            $table->integer('terulet3');
            $table->integer('terulet4');
            $table->integer('terulet5');
            $table->integer('terulet6');
            $table->integer('terulet7');
            $table->integer('terulet8');
            $table->integer('terulet9');
            $table->integer('terulet10');
            $table->boolean('lezarva')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ertekeles');
    }
};
