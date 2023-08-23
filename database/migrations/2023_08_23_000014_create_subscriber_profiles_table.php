<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriberProfilesTable extends Migration
{
    public function up()
    {
        Schema::create('subscriber_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user')->nullable();
            $table->string('business_name');
            $table->longText('business_address')->nullable();
            $table->string('company_registration_number')->nullable();
            $table->string('subdomain_name');
            $table->string('contact_number');
            $table->string('status')->nullable();
            $table->string('account_type');
            $table->integer('remaining_trial_period');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
