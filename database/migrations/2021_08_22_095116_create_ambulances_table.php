<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbulancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambulances', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('owner_name',100);
            $table->string('contact_number',11);
            $table->string('owner_address',50);
            $table->string('image')->nullable();
            $table->string('vehicle_number',50);
            $table->string('type',50)->nullable();
            $table->string('oxygen',50)->nullable();
            $table->string('icu',50)->nullable();
            $table->integer('location_id');
            $table->string('driver_name',50);
            $table->string('driver_email');
            $table->string('driving_license',50);
            $table->string('phone_number',50);
            $table->string('nid_number',50);
            $table->string('address',50);
            $table->integer('cost')->nullable();
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
        Schema::dropIfExists('ambulances');
    }
}
