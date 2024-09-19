<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('bds', function (Blueprint $table) {
            $table->id();
            $table->string('title', 60);
            $table->text('content1');
            $table->float('price');
            $table->timestamps();
            $table->index('created_at');
        });
    }



    public function down()
    {
        Schema::dropIfExists('bds');
    }

};

