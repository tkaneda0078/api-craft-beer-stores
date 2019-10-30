<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopBeerMenusTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('shop_beer_menus', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->integer('shop_id')->nullable(false);
      $table->string('name', 255)->nullable(false)->comment('ビール名');
      $table->integer('type')->nullable(false);
      $table->string('description', 2083)->nullable(false)->comment('説明');
      $table->binary('img')->nullable(false);
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
    Schema::dropIfExists('shop_beer_menus');
  }
}
