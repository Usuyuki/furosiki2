<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppearancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appearances', function (Blueprint $table) {
            $table->id();
            $table->string("name")->comment("見た目名");
            $table->string("description")->nullable()->comment("説明");
            $table->string("pattern_svg_path")->comment("柄のsvgパス");
            $table->string("default_bg_color")->comment("背景色");
            $table->string("default_stroke_color")->comment("柄色");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appearances');
    }
}