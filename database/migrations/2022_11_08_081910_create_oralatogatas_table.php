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
        Schema::create('oralatogatas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('oktato_id');
            $table->foreign('oktato_id')
                ->references('id')
                ->on('oktatos')
                ->onDelete('cascade');
            $table->string('latogato');
            $table->date('idopont');
            $table->string('helyszin');
            $table->string('tantargy');
            $table->string('tema');
            $table->string('osztaly');
            $table->string('oktato_megjegyzes')->nullable();
            $table->string('osszegzes');
            $table->string('dokumentum')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oralatogatas');
    }
};
