<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id')->nullable();
            $table->text('company_name')->nullable();
            $table->text('description')->nullable();
            $table->text('features')->nullable();
            $table->text('slogan')->nullable();
            $table->text('languages')->nullable();
            $table->text('phone_number')->nullable();
            $table->text('mobile')->nullable();
            $table->text('website')->nullable();
            $table->text('image')->nullable();
            $table->text('banner')->nullable();
            $table->text('gender')->nullable();
            $table->text('saved_items')->nullable();
            $table->text('address')->nullable();
            $table->text('area_id')->nullable();
            $table->text('location_id')->nullable();

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
        Schema::dropIfExists('profiles');
    }
}
