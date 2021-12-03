<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubTemplateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_template_client', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('resource_id');
            $table->unsignedBigInteger('user_id');
            
            $table->text('section_code');

            $table->foreign('resource_id')->references('id')->on('template')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
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
        Schema::dropIfExists('sub_template_client');
    }
}
