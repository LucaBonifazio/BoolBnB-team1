<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('user_id')->constrained();
            //$table->foreignId('sponsorship_id')->nullable()->constrained();
            $table->string('title', 100);
            $table->string('slug', 100);
            $table->unsignedTinyInteger('n_rooms');
            $table->unsignedTinyInteger('n_beds');
            $table->unsignedTinyInteger('n_bathrooms');
            $table->unsignedTinyInteger('square_metres');
            $table->string('picture', 500)->default("https://www.creativefabrica.com/wp-content/uploads/2020/01/23/house-icon-Graphics-1-2.jpg");
            $table->string('uploaded_image', 500)->nullable();
            $table->boolean('visibility')->default(true);
            $table->float('latitude', 7 ,5)->nullable();
            $table->float('longitude', 7 ,5)->nullable();
            $table->string('state', 100);
            $table->string('city', 200);
            $table->string('address', 250);
            $table->unsignedTinyInteger('apartment_number');
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
        Schema::dropIfExists('apartments');
    }
}
