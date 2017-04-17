<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key')->unique();

            $table->string('title_en')->nullable();
            $table->string('slug_en')->nullable();
            $table->text('keywords_en')->nullable();

            $table->string('title_es')->nullable();
            $table->string('slug_es')->nullable();
            $table->text('keywords_es')->nullable();

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
        Schema::dropIfExists('pages');
    }
}
