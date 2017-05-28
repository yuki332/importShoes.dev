<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ship_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('zipcode');
            $table->string('city');
            $table->string('shipping1');
            $table->string('shipping2');
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
        Schema::dropIfExists('ship_addresses');
    }
}
