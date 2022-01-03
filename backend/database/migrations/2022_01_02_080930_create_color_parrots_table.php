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
            $table->string("bg_color")->comment("背景色");
            $table->string("stroke_color")->comment("柄色");
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
