<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFurosikisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('furosikis', function (Blueprint $table) {
            $table->id();
            $table->string("from")->nullable()->comment("送信者名");
            $table->string("to")->nullable()->comment("受信者名");
            $table->text("sentence")->nullable()->comment("添文");
            $table->uuid("uuid")->unique()->comment("uuid");
            $table->boolean("is_tategaki")->comment("縦書きフラグ");
            $table->boolean("is_receive")->comment("受け取りフラグ");
            $table->string("data_path")->comment("データパス");
            $table->string("bg_color")->comment("背景色");
            $table->string("stroke_color")->comment("柄色");
            $table->unsignedBigInteger("appearance_id")->comment("見た目id");
            $table->timestamps();


            //他テーブルとの関連付け
            $table->foreign('appearance_id')
            ->references('id')
            ->on('appearances');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('furosikis');
    }
}