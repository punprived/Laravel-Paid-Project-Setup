@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.subscriberProfile.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.subscriber-profiles.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.subscriberProfile.fields.id') }}
                        </th>
                        <td>
                            {{ $subscriberProfile->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subscriberProfile.fields.package') }}
                        </th>
                        <td>
                            {{ $subscriberProfile->package->package_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subscriberProfile.fields.business_name') }}
                        </th>
                        <td>
                            {{ $subscriberProfile->business_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subscriberProfile.fields.business_address') }}
                        </th>
                        <td>
                            {{ $subscriberProfile->business_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subscriberProfile.fields.company_registration_number') }}
                        </th>
                        <td>
                            {{ $subscriberProfile->company_registration_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subscriberProfile.fields.subdomain_name') }}
                        </th>
                        <td>
                            {{ $subscriberProfile->subdomain_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subscriberProfile.fields.contact_number') }}
                        </th>
                        <td>
                            {{ $subscriberProfile->contact_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subscriberProfile.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\SubscriberProfile::STATUS_SELECT[$subscriberProfile->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subscriberProfile.fields.account_type') }}
                        </th>
                        <td>
                            {{ App\Models\SubscriberProfile::ACCOUNT_TYPE_SELECT[$subscriberProfile->account_type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subscriberProfile.fields.remaining_trial_period') }}
                        </th>
                        <td>
                            {{ $subscriberProfile->remaining_trial_period }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.subscriber-profiles.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection