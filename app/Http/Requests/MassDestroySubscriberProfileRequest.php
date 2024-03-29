<?php

namespace App\Http\Requests;

use App\Models\SubscriberProfile;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroySubscriberProfileRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('subscriber_profile_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:subscriber_profiles,id',
        ];
    }
}
