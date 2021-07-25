<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTumbuhanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tumbuhan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('famili_id')->constrained('famili')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nm_tumbuhan', 100);
            $table->string('nm_ilmiah', 120);
            $table->foreignId('bagian_id')->constrained('bagian')->onUpdate('cascade')->onDelete('cascade');
            $table->string('khasiat');
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
        Schema::dropIfExists('tumbuhan');
    }
}
