<?php

namespace App\Http\Requests;

use App\Models\PackageItem;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePackageItemRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('package_item_create');
    }

    public function rules()
    {
        return [
            'package_id' => [
                'required',
                'integer',
            ],
            'user_licence' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'overview_module_placement' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'email_account' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'customer_account' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'customize_store_page' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'items_in_store' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'items_in_customer_store' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'standard_survey_per_month' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'customize_survey' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'quote_per_month' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'customized_quote' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'standared_work_order' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'customized_work_order' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'standard_invoice' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'customized_invoice' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'api_connection' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'calendar_usages' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'trades_mate_access' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'app_user_licence' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'project_join' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'project_share' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'customer_logins' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'supplier_link' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'payment_api_service' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'vehicles' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'rams_documents_per_month' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'contractor_user_accounts' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'text_message_service' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'phone_system_license' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'internal_messaging' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'live_chat' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
