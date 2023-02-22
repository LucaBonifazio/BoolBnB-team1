<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{

    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('slug', 100);
            $table->unsignedTinyInteger('n_rooms');
            $table->unsignedTinyInteger('n_beds');
            $table->unsignedTinyInteger('n_bathrooms');
            $table->unsignedTinyInteger('square_meters');
            $table->string('picture', 1000)->default("https://www.creativefabrica.com/wp-content/uploads/2020/01/23/house-icon-Graphics-1-2.jpg");
            $table->string('uploaded_image', 1000)->nullable();
            $table->boolean('visibility')->default(true);
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            $table->string('state', 100);
            $table->string('city', 200);
            $table->string('address', 250);
            $table->unsignedMediumInteger('apartment_number');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('apartments');
    }
}
