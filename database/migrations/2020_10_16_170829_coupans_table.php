<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CoupansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->string('type')->nullable();
            $table->string('uni_id')->unique();
            $table->string('slug')->nullable();
            $table->string('title')->nullable(); 
            $table->string('code')->nullable();
            $table->integer('price')->nullable();
            $table->integer('discount')->nullable();
            $table->string('link')->nullable();
            $table->date('expiry')->nullable();
            $table->integer('rating')->default(0);
            $table->text('detail')->nullable();
            $table->string('image')->nullable();
            $table->integer('user_count')->default(0);
            $table->boolean('is_featured')->default(0);
            $table->boolean('is_exclusive')->default(1);
            $table->boolean('is_front')->default(1);
            $table->boolean('is_active')->default(1);
            $table->boolean('is_verified')->default(0);
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('coupons');
    }
}
