<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('drivers_name');
            $table->string('plate_number')->unique();
            $table->string('description');
            $table->string('partner_screen_name')->unique();
            $table->rememberToken();
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
        Schema::drop('report_infos');
    }
}