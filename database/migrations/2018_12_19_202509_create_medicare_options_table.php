<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicareOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_options', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable()->default('Medicare');
            $table->string('slogan')->nullable()->default('A Modern Hospital');
            $table->string('keywords')->nullable()->default('ctg hospital, best hospital, treatment, bd doctors');
            $table->text('description')->nullable();
            $table->string('logo')->nullable()->default('logo.png');
            $table->string('facebook_app_id')->nullable();
            $table->string('facebook_app_secrete')->nullable();
            $table->string('google_client_id')->nullable();
            $table->string('google_client_secret')->nullable();
            $table->text('google_analytics')->nullable();
            $table->text('facebook_sdk')->nullable();
            $table->text('general_javascripts')->nullable();
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
        Schema::dropIfExists('medicare_options');
    }
}
