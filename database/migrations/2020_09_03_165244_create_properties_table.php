<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            
        });
        DB::table('properties')->insert(
            array(
                [
                    
                    'name' => 'date',
                ],
                [
                    
                    'name' => 'machinename',
                ],
                [
                    
                    'name' => 'osversion',
                ],
                [
                    
                    'name' => 'projectname',
                ],
                [
                    
                    'name' => 'selectedServers',
                ],
                [
                    
                    'name' => 'labcarType',
                ],
                [
                    
                    'name' => 'autorun',
                ],
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
