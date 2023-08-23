<?php

namespace App\Http\Requests;

use App\Models\Setting;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSettingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('setting_create');
    }

    public function rules()
    {
        return [
            'user' => [
                'string',
                'nullable',
            ],
            'display_name' => [
                'string',
                'nullable',
            ],
            'mail_from_email' => [
                'string',
                'nullable',
            ],
            'mail_from_name' => [
                'string',
                'nullable',
            ],
            'facebook_url' => [
                'string',
                'nullable',
            ],
            'twitter_url' => [
                'string',
                'nullable',
            ],
            'youtube_url' => [
                'string',
                'nullable',
            ],
            'linkedin_url' => [
                'string',
                'nullable',
            ],
            'contact_email' => [
                'string',
                'nullable',
            ],
            'contact_phone' => [
                'string',
                'nullable',
            ],
            'data_retain_amount' => [
                'numeric',
            ],
            'duration_of_data_retention' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
