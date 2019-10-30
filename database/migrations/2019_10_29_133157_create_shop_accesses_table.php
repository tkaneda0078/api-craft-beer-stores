<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopAccessesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('shop_accesses', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->integer('shop_id')->nullable(false);
      $table->json('access_first')->nullable(false);
      $table->json('access_second')->nullable(false);
      $table->json('access_third')->nullable(false);
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
    Schema::dropIfExists('shop_accesses');
  }
}
