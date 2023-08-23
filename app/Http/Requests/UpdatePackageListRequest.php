<?php

namespace App\Http\Requests;

use App\Models\PackageList;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePackageListRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('package_list_edit');
    }

    public function rules()
    {
        return [
            'package_name' => [
                'string',
                'required',
            ],
            'package_price' => [
                'numeric',
                'required',
            ],
            'color_code' => [
                'string',
                'nullable',
            ],
            'trial_periods' => [
                'required',
            ],
            'tutorial_guide' => [
                'array',
            ],
        ];
    }
}
