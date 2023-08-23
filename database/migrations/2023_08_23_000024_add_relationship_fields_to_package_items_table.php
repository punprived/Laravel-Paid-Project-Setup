<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPackageItemsTable extends Migration
{
    public function up()
    {
        Schema::table('package_items', function (Blueprint $table) {
            $table->unsignedBigInteger('package_id')->nullable();
            $table->foreign('package_id', 'package_fk_8907164')->references('id')->on('package_lists');
        });
    }
}
