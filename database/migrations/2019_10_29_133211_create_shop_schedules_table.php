<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopSchedulesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('shop_schedules', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->integer('shop_id')->nullable(false);
      $table->time('opening_time')->comment('開店時間');
      $table->time('closing_time')->comment('閉店時間');
      $table->json('regular_holiday')->comment('定休日');
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
    Schema::dropIfExists('shop_schedules');
  }
}
