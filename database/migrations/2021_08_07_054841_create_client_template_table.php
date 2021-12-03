<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTemplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_template', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');

            $table->unsignedBigInteger('template_id');
            $table->integer('paid')->nullable();
            $table->date('Date')->nullable();
            $table->string('music')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('client_template');
    }
}
