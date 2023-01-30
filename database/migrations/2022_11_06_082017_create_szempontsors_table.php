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
        Schema::create('szempontsors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('iskola_id');
            $table->foreign('iskola_id')
                ->references('id')
                ->on('iskolas')
                ->onDelete('cascade');
            $table->string('megnevezes');
            
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
        Schema::dropIfExists('szempontsors');
    }
};
