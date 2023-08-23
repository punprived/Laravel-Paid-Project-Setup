<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackageItem extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'package_items';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'package_id',
        'user_licence',
        'overview_module_placement',
        'email_account',
        'customer_account',
        'customize_store_page',
        'items_in_store',
        'items_in_customer_store',
        'standard_survey_per_month',
        'customize_survey',
        'quote_per_month',
        'customized_quote',
        'standared_work_order',
        'customized_work_order',
        'standard_invoice',
        'customized_invoice',
        'api_connection',
        'internal_accounting_system',
        'calendar_usages',
        'trades_mate_access',
        'app_user_licence',
        'project_join',
        'project_share',
        'customer_logins',
        'map_location',
        'supplier_link',
        'payment_api_service',
        'vehicles',
        'rams_documents_per_month',
        'contractor_user_accounts',
        'text_message_service',
        'phone_system_license',
        'internal_messaging',
        'live_chat',
        'tenders_list',
        'internal_blacklist',
        'national_blacklist_access',
        'white_label_customer_portal_access',
        'customer_portal_orders',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function package()
    {
        return $this->belongsTo(PackageList::class, 'package_id');
    }
}
