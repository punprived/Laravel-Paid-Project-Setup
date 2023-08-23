<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageListsTable extends Migration
{
    public function up()
    {
        Schema::create('package_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('package_name');
            $table->longText('description')->nullable();
            $table->float('package_price', 15, 2);
            $table->boolean('default_selected')->default(0)->nullable();
            $table->string('currency')->nullable();
            $table->string('color_code')->nullable();
            $table->string('trial_periods');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
