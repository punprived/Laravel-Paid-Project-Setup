<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSubscriberProfilesTable extends Migration
{
    public function up()
    {
        Schema::table('subscriber_profiles', function (Blueprint $table) {
            $table->unsignedBigInteger('package_id')->nullable();
            $table->foreign('package_id', 'package_fk_8908045')->references('id')->on('package_lists');
        });
    }
}
