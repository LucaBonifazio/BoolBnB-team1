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
            $table->unsignedMediumInteger('square_meters');
            $table->string('picture')->default("https://www.creativefabrica.com/wp-content/uploads/2020/01/23/house-icon-Graphics-1-2.jpg");
            $table->string('uploaded_image')->nullable();
            $table->boolean('visibility')->default(false);
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
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
