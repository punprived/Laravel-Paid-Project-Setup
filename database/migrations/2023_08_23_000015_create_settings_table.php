<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user')->nullable();
            $table->string('display_name')->nullable();
            $table->string('mail_from_email')->nullable();
            $table->string('mail_from_name')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();
            $table->longText('contact_address')->nullable();
            $table->float('data_retain_amount', 4, 2)->nullable();
            $table->integer('duration_of_data_retention')->nullable();
            $table->longText('footer_text')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
