<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColorParrotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('color_parrots', function (Blueprint $table) {
            $table->id();
            $table->string("name")->comment("色名");
            $table->string("description")->nullable()->comment("説明");
            $table->string("color_hex")->nullable()->comment("色コード");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('color_parrots');
    }
}