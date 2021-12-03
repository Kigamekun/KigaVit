<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_data', function (Blueprint $table) {
           $table->bigIncrements('id');
           
            $table->unsignedBigInteger('template_id');
            $table->string('type');
            $table->text('file');

            $table->foreign('template_id')->references('id')->on('template')->onDelete('cascade');
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
        Schema::dropIfExists('js_data');
    }
}
