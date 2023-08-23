<?php

namespace App\Http\Requests;

use App\Models\SubscriberProfile;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSubscriberProfileRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('subscriber_profile_edit');
    }

    public function rules()
    {
        return [
            'package_id' => [
                'required',
                'integer',
            ],
            'business_name' => [
                'string',
                'required',
            ],
            'company_registration_number' => [
                'string',
                'nullable',
            ],
            'subdomain_name' => [
                'string',
                'required',
            ],
            'contact_number' => [
                'string',
                'required',
            ],
            'account_type' => [
                'required',
            ],
            'remaining_trial_period' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
