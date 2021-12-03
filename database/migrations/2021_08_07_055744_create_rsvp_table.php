<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRsvpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rsvp', function (Blueprint $table) {
            $table->id();

            $table->string('type');
            $table->string('name');
            $table->integer('count');
            $table->text('message');
            $table->unsignedBigInteger('respon');
            $table->integer('attend');
            $table->date('date');
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
        Schema::dropIfExists('rsvp');
    }
}
