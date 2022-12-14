<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSukuBungaGiroMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suku_bunga_giro_masters', function (Blueprint $table) {
            $table->id();
            $table->string('start')->nullable();
            $table->string('end')->nullable();
            $table->double('percent');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suku_bunga_giro_masters');
    }
}
