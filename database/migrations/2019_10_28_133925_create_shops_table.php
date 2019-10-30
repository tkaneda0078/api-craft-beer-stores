<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('shops', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->integer('shop_access_id')->nullable(false);
      $table->integer('shop_beer_menu_id')->nullable(false);
      $table->integer('shop_food_menu_id')->nullable(false);
      $table->integer('shop_picture_id')->nullable(false);
      $table->integer('shop_schedule_id')->nullable(false);
      $table->integer('area_id')->nullable(false);
      $table->string('name', 255)->nullable(false)->comment('店舗名');
      $table->string('postcode', 10)->nullable(false)->comment('郵便番号');
      $table->string('address', 255)->nullable(false)->comment('住所');
      $table->string('tel', 16)->nullable(false)->comment('電話番号');
      $table->string('url', 2083)->nullable(false)->comment('店舗URL');
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
    Schema::dropIfExists('shops');
  }
}
