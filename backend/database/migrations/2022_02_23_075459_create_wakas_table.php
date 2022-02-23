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
        Schema::create('wakas', function (Blueprint $table) {
            $table->id();
            $table->string("kami")->comment("上の句");
            $table->string("simo")->comment("下の句");
            $table->string("author")->comment("作者");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wakas');
    }
};