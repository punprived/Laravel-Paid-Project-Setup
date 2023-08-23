<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageItemsTable extends Migration
{
    public function up()
    {
        Schema::create('package_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_licence')->nullable();
            $table->integer('overview_module_placement')->nullable();
            $table->integer('email_account')->nullable();
            $table->integer('customer_account')->nullable();
            $table->integer('customize_store_page')->nullable();
            $table->integer('items_in_store')->nullable();
            $table->integer('items_in_customer_store')->nullable();
            $table->integer('standard_survey_per_month')->nullable();
            $table->integer('customize_survey')->nullable();
            $table->integer('quote_per_month')->nullable();
            $table->integer('customized_quote')->nullable();
            $table->integer('standared_work_order')->nullable();
            $table->integer('customized_work_order')->nullable();
            $table->integer('standard_invoice')->nullable();
            $table->integer('customized_invoice')->nullable();
            $table->integer('api_connection')->nullable();
            $table->boolean('internal_accounting_system')->default(0)->nullable();
            $table->integer('calendar_usages')->nullable();
            $table->integer('trades_mate_access')->nullable();
            $table->integer('app_user_licence')->nullable();
            $table->integer('project_join')->nullable();
            $table->integer('project_share')->nullable();
            $table->integer('customer_logins')->nullable();
            $table->boolean('map_location')->default(0)->nullable();
            $table->integer('supplier_link')->nullable();
            $table->integer('payment_api_service')->nullable();
            $table->integer('vehicles')->nullable();
            $table->integer('rams_documents_per_month')->nullable();
            $table->integer('contractor_user_accounts')->nullable();
            $table->integer('text_message_service')->nullable();
            $table->integer('phone_system_license')->nullable();
            $table->integer('internal_messaging')->nullable();
            $table->integer('live_chat')->nullable();
            $table->boolean('tenders_list')->default(0)->nullable();
            $table->boolean('internal_blacklist')->default(0)->nullable();
            $table->boolean('national_blacklist_access')->default(0)->nullable();
            $table->boolean('white_label_customer_portal_access')->default(0)->nullable();
            $table->boolean('customer_portal_orders')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
