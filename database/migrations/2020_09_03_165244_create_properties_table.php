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
                    'id' => '1',
                ],
                [
                    
                    'name' => 'machinename',
                    'id' => '2',
                ],
                [
                    
                    'name' => 'osversion',
                    'id' => '3',
                ],
                [
                    
                    'name' => 'projectname',
                    'id' => '4',
                ],
                [
                    
                    'name' => 'selectedServers',
                    'id' => '5',
                ],
                [
                    
                    'name' => 'labcarType',
                    'id' => '6',
                ],
                [
                    
                    'name' => 'autorun',
                    'id' => '7',
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
