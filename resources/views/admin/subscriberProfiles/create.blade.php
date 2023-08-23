@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.subscriberProfile.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.subscriber-profiles.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="package_id">{{ trans('cruds.subscriberProfile.fields.package') }}</label>
                <select class="form-control select2 {{ $errors->has('package') ? 'is-invalid' : '' }}" name="package_id" id="package_id" required>
                    @foreach($packages as $id => $entry)
                        <option value="{{ $id }}" {{ old('package_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('package'))
                    <span class="text-danger">{{ $errors->first('package') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.subscriberProfile.fields.package_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="business_name">{{ trans('cruds.subscriberProfile.fields.business_name') }}</label>
                <input class="form-control {{ $errors->has('business_name') ? 'is-invalid' : '' }}" type="text" name="business_name" id="business_name" value="{{ old('business_name', '') }}" required>
                @if($errors->has('business_name'))
                    <span class="text-danger">{{ $errors->first('business_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.subscriberProfile.fields.business_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="business_address">{{ trans('cruds.subscriberProfile.fields.business_address') }}</label>
                <textarea class="form-control {{ $errors->has('business_address') ? 'is-invalid' : '' }}" name="business_address" id="business_address">{{ old('business_address') }}</textarea>
                @if($errors->has('business_address'))
                    <span class="text-danger">{{ $errors->first('business_address') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.subscriberProfile.fields.business_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_registration_number">{{ trans('cruds.subscriberProfile.fields.company_registration_number') }}</label>
                <input class="form-control {{ $errors->has('company_registration_number') ? 'is-invalid' : '' }}" type="text" name="company_registration_number" id="company_registration_number" value="{{ old('company_registration_number', '') }}">
                @if($errors->has('company_registration_number'))
                    <span class="text-danger">{{ $errors->first('company_registration_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.subscriberProfile.fields.company_registration_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="subdomain_name">{{ trans('cruds.subscriberProfile.fields.subdomain_name') }}</label>
                <input class="form-control {{ $errors->has('subdomain_name') ? 'is-invalid' : '' }}" type="text" name="subdomain_name" id="subdomain_name" value="{{ old('subdomain_name', '') }}" required>
                @if($errors->has('subdomain_name'))
                    <span class="text-danger">{{ $errors->first('subdomain_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.subscriberProfile.fields.subdomain_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="contact_number">{{ trans('cruds.subscriberProfile.fields.contact_number') }}</label>
                <input class="form-control {{ $errors->has('contact_number') ? 'is-invalid' : '' }}" type="text" name="contact_number" id="contact_number" value="{{ old('contact_number', '') }}" required>
                @if($errors->has('contact_number'))
                    <span class="text-danger">{{ $errors->first('contact_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.subscriberProfile.fields.contact_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.subscriberProfile.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\SubscriberProfile::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <span class="text-danger">{{ $errors->first('status') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.subscriberProfile.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.subscriberProfile.fields.account_type') }}</label>
                <select class="form-control {{ $errors->has('account_type') ? 'is-invalid' : '' }}" name="account_type" id="account_type" required>
                    <option value disabled {{ old('account_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\SubscriberProfile::ACCOUNT_TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('account_type', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('account_type'))
                    <span class="text-danger">{{ $errors->first('account_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.subscriberProfile.fields.account_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="remaining_trial_period">{{ trans('cruds.subscriberProfile.fields.remaining_trial_period') }}</label>
                <input class="form-control {{ $errors->has('remaining_trial_period') ? 'is-invalid' : '' }}" type="number" name="remaining_trial_period" id="remaining_trial_period" value="{{ old('remaining_trial_period', '') }}" step="1" required>
                @if($errors->has('remaining_trial_period'))
                    <span class="text-danger">{{ $errors->first('remaining_trial_period') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.subscriberProfile.fields.remaining_trial_period_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection