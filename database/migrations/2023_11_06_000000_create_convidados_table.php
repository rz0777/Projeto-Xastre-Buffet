<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConvidadosTable extends Migration
{
    public function up()
    {
        Schema::create('convidados', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf');
            $table->integer('idade');
            $table->unsignedBigInteger('festa_id');
            $table->foreign('festa_id')->references('id')->on('festas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('convidados');
    }
};
