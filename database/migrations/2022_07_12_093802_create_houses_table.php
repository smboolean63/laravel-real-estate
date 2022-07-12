<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('city', 50);
            $table->string('address', 50);
            $table->string('zip_code', 5);
            $table->string('type', 20);
            $table->text('description');
            $table->unsignedSmallInteger('square_meters');
            $table->unsignedTinyInteger('rooms');
            $table->unsignedTinyInteger('bathrooms')->default(1);
            $table->unsignedTinyInteger('floor');
            $table->decimal('price', 10, 2);
            $table->boolean('is_available')->default(true);
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
        Schema::dropIfExists('houses');
    }
}
