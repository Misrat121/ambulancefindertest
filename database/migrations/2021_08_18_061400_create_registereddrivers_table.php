<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistereddriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registereddrivers', function (Blueprint $table) {
            $table->id();  
            $table->string('name',100);
            $table->string('driving_license',11);
            $table->string('contact_number',11);
            $table->string('email',11);
            $table->string('address',50);
            $table->string('image')->nullable();
            $table->string('status',10)->default('active');
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
        Schema::dropIfExists('registereddrivers');
    }
}
