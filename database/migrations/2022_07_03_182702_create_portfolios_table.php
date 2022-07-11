<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('type');
            $table->string('project_name',64);
            $table->string('description',2048);
            $table->string('site',256)->nullable();
            $table->string('date',32)->nullable();
            $table->integer('priority')->default(100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('portfolios');
    }
};
