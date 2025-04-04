<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('watches', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->integer('stock')->default(0);
            $table->string('imageOne')->nullable();
            $table->string('imageTwo')->nullable();
            $table->string('imageTree')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('watches');
    }
};
