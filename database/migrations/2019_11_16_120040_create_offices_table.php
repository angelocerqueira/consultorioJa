<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->integer('cep');
            $table->string('uf');
            $table->string('cidade');
            $table->string('endereco');
            $table->integer('number');
            $table->string('complement')->nullable();
            $table->string('structure')->nullable();
            $table->string('specialties')->nullable();
            $table->string('equipaments')->nullable();
            $table->string('file');
            $table->string('period_atend')->nullable();
            $table->string('days_atend')->nullable();
            $table->integer('value_h');
            $table->integer('value_m');
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
        Schema::dropIfExists('offices');
    }
}
