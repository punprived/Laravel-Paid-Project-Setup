<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCrmCustomersTable extends Migration
{
    public function up()
    {
        Schema::table('crm_customers', function (Blueprint $table) {
            $table->unsignedBigInteger('status_id')->nullable();
            $table->foreign('status_id', 'status_fk_8906970')->references('id')->on('crm_statuses');
            $table->unsignedBigInteger('subscriber_id')->nullable();
            $table->foreign('subscriber_id', 'subscriber_fk_8912247')->references('id')->on('users');
        });
    }
}
