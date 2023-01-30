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
        Schema::create('oraertekeles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('oralatogatas_id');
            $table->foreign('oralatogatas_id')
                ->references('id')
                ->on('oralatogatas')
                ->onDelete('cascade');
            $table->text('szempont');
            $table->string('ertek');
            $table->text('szoveges')->nullable();;
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oraertekeles');
    }
};
