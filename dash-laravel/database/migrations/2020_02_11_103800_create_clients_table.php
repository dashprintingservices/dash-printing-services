<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_number');
            $table->string('name');
            $table->string('position');//grade
            $table->date('birthdate');
            $table->string('address');
            $table->string('contact_number');
            $table->string('location_name');//what school or company name
            $table->string('leaders_name');//principals or manager name
            $table->string('photo_name');//principals or manager name
            $table->date('created_date');//principals or manager name
            $table->integer('created_by');//principals or manager name
            
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
        Schema::dropIfExists('clients');
    }
}
