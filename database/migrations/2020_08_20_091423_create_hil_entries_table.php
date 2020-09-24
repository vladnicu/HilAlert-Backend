<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHilEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hil_entries', function (Blueprint $table) {
            $table->id();
            
            $table->string('machinename');
            $table->string('osversion');
            $table->string('projectname');
            $table->string('selectedServers');
            $table->string('labcarType');
            $table->boolean('autorun');
            $table->timestamps();

            $table->integer('hil_id')->unsigned()->index();

            $table->foreign('hil_id')->references('id')->on('hils')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hil_entries');
    }
}
