<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersMaps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       //
		  Schema::create('routes_map', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('map_code');	
            $table->integer('users_id')->unsigned();			
			$table->timestamp('created_at')->nullable();                      
            $table->timestamp('updated_at')->nullable();
            
			#Index
			$table->index('users_id');
			
			# Foreign key
			$table->foreign('users_id')->references('id')->on('users');
			
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_maps');
    }
}
