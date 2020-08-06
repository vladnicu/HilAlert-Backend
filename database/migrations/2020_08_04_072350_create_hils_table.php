<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hils', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->string('labcarname');
            $table->string('machinename');
            $table->string('osversion');
            $table->string('projectname');
            $table->string('selectedServers');
            $table->string('labcarType');
            $table->boolean('autorun');
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
        Schema::dropIfExists('hils');
    }
}
