@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.packageItem.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.package-items.update", [$packageItem->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="package_id">{{ trans('cruds.packageItem.fields.package') }}</label>
                <select class="form-control select2 {{ $errors->has('package') ? 'is-invalid' : '' }}" name="package_id" id="package_id" required>
                    @foreach($packages as $id => $entry)
                        <option value="{{ $id }}" {{ (old('package_id') ? old('package_id') : $packageItem->package->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('package'))
                    <span class="text-danger">{{ $errors->first('package') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.package_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_licence">{{ trans('cruds.packageItem.fields.user_licence') }}</label>
                <input class="form-control {{ $errors->has('user_licence') ? 'is-invalid' : '' }}" type="number" name="user_licence" id="user_licence" value="{{ old('user_licence', $packageItem->user_licence) }}" step="1">
                @if($errors->has('user_licence'))
                    <span class="text-danger">{{ $errors->first('user_licence') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.user_licence_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="overview_module_placement">{{ trans('cruds.packageItem.fields.overview_module_placement') }}</label>
                <input class="form-control {{ $errors->has('overview_module_placement') ? 'is-invalid' : '' }}" type="number" name="overview_module_placement" id="overview_module_placement" value="{{ old('overview_module_placement', $packageItem->overview_module_placement) }}" step="1">
                @if($errors->has('overview_module_placement'))
                    <span class="text-danger">{{ $errors->first('overview_module_placement') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.overview_module_placement_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email_account">{{ trans('cruds.packageItem.fields.email_account') }}</label>
                <input class="form-control {{ $errors->has('email_account') ? 'is-invalid' : '' }}" type="number" name="email_account" id="email_account" value="{{ old('email_account', $packageItem->email_account) }}" step="1">
                @if($errors->has('email_account'))
                    <span class="text-danger">{{ $errors->first('email_account') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.email_account_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_account">{{ trans('cruds.packageItem.fields.customer_account') }}</label>
                <input class="form-control {{ $errors->has('customer_account') ? 'is-invalid' : '' }}" type="number" name="customer_account" id="customer_account" value="{{ old('customer_account', $packageItem->customer_account) }}" step="1">
                @if($errors->has('customer_account'))
                    <span class="text-danger">{{ $errors->first('customer_account') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.customer_account_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customize_store_page">{{ trans('cruds.packageItem.fields.customize_store_page') }}</label>
                <input class="form-control {{ $errors->has('customize_store_page') ? 'is-invalid' : '' }}" type="number" name="customize_store_page" id="customize_store_page" value="{{ old('customize_store_page', $packageItem->customize_store_page) }}" step="1">
                @if($errors->has('customize_store_page'))
                    <span class="text-danger">{{ $errors->first('customize_store_page') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.customize_store_page_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="items_in_store">{{ trans('cruds.packageItem.fields.items_in_store') }}</label>
                <input class="form-control {{ $errors->has('items_in_store') ? 'is-invalid' : '' }}" type="number" name="items_in_store" id="items_in_store" value="{{ old('items_in_store', $packageItem->items_in_store) }}" step="1">
                @if($errors->has('items_in_store'))
                    <span class="text-danger">{{ $errors->first('items_in_store') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.items_in_store_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="items_in_customer_store">{{ trans('cruds.packageItem.fields.items_in_customer_store') }}</label>
                <input class="form-control {{ $errors->has('items_in_customer_store') ? 'is-invalid' : '' }}" type="number" name="items_in_customer_store" id="items_in_customer_store" value="{{ old('items_in_customer_store', $packageItem->items_in_customer_store) }}" step="1">
                @if($errors->has('items_in_customer_store'))
                    <span class="text-danger">{{ $errors->first('items_in_customer_store') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.items_in_customer_store_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="standard_survey_per_month">{{ trans('cruds.packageItem.fields.standard_survey_per_month') }}</label>
                <input class="form-control {{ $errors->has('standard_survey_per_month') ? 'is-invalid' : '' }}" type="number" name="standard_survey_per_month" id="standard_survey_per_month" value="{{ old('standard_survey_per_month', $packageItem->standard_survey_per_month) }}" step="1">
                @if($errors->has('standard_survey_per_month'))
                    <span class="text-danger">{{ $errors->first('standard_survey_per_month') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.standard_survey_per_month_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customize_survey">{{ trans('cruds.packageItem.fields.customize_survey') }}</label>
                <input class="form-control {{ $errors->has('customize_survey') ? 'is-invalid' : '' }}" type="number" name="customize_survey" id="customize_survey" value="{{ old('customize_survey', $packageItem->customize_survey) }}" step="1">
                @if($errors->has('customize_survey'))
                    <span class="text-danger">{{ $errors->first('customize_survey') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.customize_survey_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quote_per_month">{{ trans('cruds.packageItem.fields.quote_per_month') }}</label>
                <input class="form-control {{ $errors->has('quote_per_month') ? 'is-invalid' : '' }}" type="number" name="quote_per_month" id="quote_per_month" value="{{ old('quote_per_month', $packageItem->quote_per_month) }}" step="1">
                @if($errors->has('quote_per_month'))
                    <span class="text-danger">{{ $errors->first('quote_per_month') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.quote_per_month_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customized_quote">{{ trans('cruds.packageItem.fields.customized_quote') }}</label>
                <input class="form-control {{ $errors->has('customized_quote') ? 'is-invalid' : '' }}" type="number" name="customized_quote" id="customized_quote" value="{{ old('customized_quote', $packageItem->customized_quote) }}" step="1">
                @if($errors->has('customized_quote'))
                    <span class="text-danger">{{ $errors->first('customized_quote') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.customized_quote_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="standared_work_order">{{ trans('cruds.packageItem.fields.standared_work_order') }}</label>
                <input class="form-control {{ $errors->has('standared_work_order') ? 'is-invalid' : '' }}" type="number" name="standared_work_order" id="standared_work_order" value="{{ old('standared_work_order', $packageItem->standared_work_order) }}" step="1">
                @if($errors->has('standared_work_order'))
                    <span class="text-danger">{{ $errors->first('standared_work_order') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.standared_work_order_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customized_work_order">{{ trans('cruds.packageItem.fields.customized_work_order') }}</label>
                <input class="form-control {{ $errors->has('customized_work_order') ? 'is-invalid' : '' }}" type="number" name="customized_work_order" id="customized_work_order" value="{{ old('customized_work_order', $packageItem->customized_work_order) }}" step="1">
                @if($errors->has('customized_work_order'))
                    <span class="text-danger">{{ $errors->first('customized_work_order') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.customized_work_order_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="standard_invoice">{{ trans('cruds.packageItem.fields.standard_invoice') }}</label>
                <input class="form-control {{ $errors->has('standard_invoice') ? 'is-invalid' : '' }}" type="number" name="standard_invoice" id="standard_invoice" value="{{ old('standard_invoice', $packageItem->standard_invoice) }}" step="1">
                @if($errors->has('standard_invoice'))
                    <span class="text-danger">{{ $errors->first('standard_invoice') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.standard_invoice_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customized_invoice">{{ trans('cruds.packageItem.fields.customized_invoice') }}</label>
                <input class="form-control {{ $errors->has('customized_invoice') ? 'is-invalid' : '' }}" type="number" name="customized_invoice" id="customized_invoice" value="{{ old('customized_invoice', $packageItem->customized_invoice) }}" step="1">
                @if($errors->has('customized_invoice'))
                    <span class="text-danger">{{ $errors->first('customized_invoice') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.customized_invoice_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="api_connection">{{ trans('cruds.packageItem.fields.api_connection') }}</label>
                <input class="form-control {{ $errors->has('api_connection') ? 'is-invalid' : '' }}" type="number" name="api_connection" id="api_connection" value="{{ old('api_connection', $packageItem->api_connection) }}" step="1">
                @if($errors->has('api_connection'))
                    <span class="text-danger">{{ $errors->first('api_connection') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.api_connection_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('internal_accounting_system') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="internal_accounting_system" value="0">
                    <input class="form-check-input" type="checkbox" name="internal_accounting_system" id="internal_accounting_system" value="1" {{ $packageItem->internal_accounting_system || old('internal_accounting_system', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="internal_accounting_system">{{ trans('cruds.packageItem.fields.internal_accounting_system') }}</label>
                </div>
                @if($errors->has('internal_accounting_system'))
                    <span class="text-danger">{{ $errors->first('internal_accounting_system') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.internal_accounting_system_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="calendar_usages">{{ trans('cruds.packageItem.fields.calendar_usages') }}</label>
                <input class="form-control {{ $errors->has('calendar_usages') ? 'is-invalid' : '' }}" type="number" name="calendar_usages" id="calendar_usages" value="{{ old('calendar_usages', $packageItem->calendar_usages) }}" step="1">
                @if($errors->has('calendar_usages'))
                    <span class="text-danger">{{ $errors->first('calendar_usages') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.calendar_usages_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="trades_mate_access">{{ trans('cruds.packageItem.fields.trades_mate_access') }}</label>
                <input class="form-control {{ $errors->has('trades_mate_access') ? 'is-invalid' : '' }}" type="number" name="trades_mate_access" id="trades_mate_access" value="{{ old('trades_mate_access', $packageItem->trades_mate_access) }}" step="1">
                @if($errors->has('trades_mate_access'))
                    <span class="text-danger">{{ $errors->first('trades_mate_access') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.trades_mate_access_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="app_user_licence">{{ trans('cruds.packageItem.fields.app_user_licence') }}</label>
                <input class="form-control {{ $errors->has('app_user_licence') ? 'is-invalid' : '' }}" type="number" name="app_user_licence" id="app_user_licence" value="{{ old('app_user_licence', $packageItem->app_user_licence) }}" step="1">
                @if($errors->has('app_user_licence'))
                    <span class="text-danger">{{ $errors->first('app_user_licence') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.app_user_licence_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="project_join">{{ trans('cruds.packageItem.fields.project_join') }}</label>
                <input class="form-control {{ $errors->has('project_join') ? 'is-invalid' : '' }}" type="number" name="project_join" id="project_join" value="{{ old('project_join', $packageItem->project_join) }}" step="1">
                @if($errors->has('project_join'))
                    <span class="text-danger">{{ $errors->first('project_join') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.project_join_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="project_share">{{ trans('cruds.packageItem.fields.project_share') }}</label>
                <input class="form-control {{ $errors->has('project_share') ? 'is-invalid' : '' }}" type="number" name="project_share" id="project_share" value="{{ old('project_share', $packageItem->project_share) }}" step="1">
                @if($errors->has('project_share'))
                    <span class="text-danger">{{ $errors->first('project_share') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.project_share_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_logins">{{ trans('cruds.packageItem.fields.customer_logins') }}</label>
                <input class="form-control {{ $errors->has('customer_logins') ? 'is-invalid' : '' }}" type="number" name="customer_logins" id="customer_logins" value="{{ old('customer_logins', $packageItem->customer_logins) }}" step="1">
                @if($errors->has('customer_logins'))
                    <span class="text-danger">{{ $errors->first('customer_logins') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.customer_logins_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('map_location') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="map_location" value="0">
                    <input class="form-check-input" type="checkbox" name="map_location" id="map_location" value="1" {{ $packageItem->map_location || old('map_location', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="map_location">{{ trans('cruds.packageItem.fields.map_location') }}</label>
                </div>
                @if($errors->has('map_location'))
                    <span class="text-danger">{{ $errors->first('map_location') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.map_location_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="supplier_link">{{ trans('cruds.packageItem.fields.supplier_link') }}</label>
                <input class="form-control {{ $errors->has('supplier_link') ? 'is-invalid' : '' }}" type="number" name="supplier_link" id="supplier_link" value="{{ old('supplier_link', $packageItem->supplier_link) }}" step="1">
                @if($errors->has('supplier_link'))
                    <span class="text-danger">{{ $errors->first('supplier_link') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.supplier_link_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_api_service">{{ trans('cruds.packageItem.fields.payment_api_service') }}</label>
                <input class="form-control {{ $errors->has('payment_api_service') ? 'is-invalid' : '' }}" type="number" name="payment_api_service" id="payment_api_service" value="{{ old('payment_api_service', $packageItem->payment_api_service) }}" step="1">
                @if($errors->has('payment_api_service'))
                    <span class="text-danger">{{ $errors->first('payment_api_service') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.payment_api_service_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="vehicles">{{ trans('cruds.packageItem.fields.vehicles') }}</label>
                <input class="form-control {{ $errors->has('vehicles') ? 'is-invalid' : '' }}" type="number" name="vehicles" id="vehicles" value="{{ old('vehicles', $packageItem->vehicles) }}" step="1">
                @if($errors->has('vehicles'))
                    <span class="text-danger">{{ $errors->first('vehicles') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.vehicles_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="rams_documents_per_month">{{ trans('cruds.packageItem.fields.rams_documents_per_month') }}</label>
                <input class="form-control {{ $errors->has('rams_documents_per_month') ? 'is-invalid' : '' }}" type="number" name="rams_documents_per_month" id="rams_documents_per_month" value="{{ old('rams_documents_per_month', $packageItem->rams_documents_per_month) }}" step="1">
                @if($errors->has('rams_documents_per_month'))
                    <span class="text-danger">{{ $errors->first('rams_documents_per_month') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.rams_documents_per_month_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contractor_user_accounts">{{ trans('cruds.packageItem.fields.contractor_user_accounts') }}</label>
                <input class="form-control {{ $errors->has('contractor_user_accounts') ? 'is-invalid' : '' }}" type="number" name="contractor_user_accounts" id="contractor_user_accounts" value="{{ old('contractor_user_accounts', $packageItem->contractor_user_accounts) }}" step="1">
                @if($errors->has('contractor_user_accounts'))
                    <span class="text-danger">{{ $errors->first('contractor_user_accounts') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.contractor_user_accounts_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="text_message_service">{{ trans('cruds.packageItem.fields.text_message_service') }}</label>
                <input class="form-control {{ $errors->has('text_message_service') ? 'is-invalid' : '' }}" type="number" name="text_message_service" id="text_message_service" value="{{ old('text_message_service', $packageItem->text_message_service) }}" step="1">
                @if($errors->has('text_message_service'))
                    <span class="text-danger">{{ $errors->first('text_message_service') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.text_message_service_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone_system_license">{{ trans('cruds.packageItem.fields.phone_system_license') }}</label>
                <input class="form-control {{ $errors->has('phone_system_license') ? 'is-invalid' : '' }}" type="number" name="phone_system_license" id="phone_system_license" value="{{ old('phone_system_license', $packageItem->phone_system_license) }}" step="1">
                @if($errors->has('phone_system_license'))
                    <span class="text-danger">{{ $errors->first('phone_system_license') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.phone_system_license_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="internal_messaging">{{ trans('cruds.packageItem.fields.internal_messaging') }}</label>
                <input class="form-control {{ $errors->has('internal_messaging') ? 'is-invalid' : '' }}" type="number" name="internal_messaging" id="internal_messaging" value="{{ old('internal_messaging', $packageItem->internal_messaging) }}" step="1">
                @if($errors->has('internal_messaging'))
                    <span class="text-danger">{{ $errors->first('internal_messaging') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.internal_messaging_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="live_chat">{{ trans('cruds.packageItem.fields.live_chat') }}</label>
                <input class="form-control {{ $errors->has('live_chat') ? 'is-invalid' : '' }}" type="number" name="live_chat" id="live_chat" value="{{ old('live_chat', $packageItem->live_chat) }}" step="1">
                @if($errors->has('live_chat'))
                    <span class="text-danger">{{ $errors->first('live_chat') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.live_chat_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('tenders_list') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="tenders_list" value="0">
                    <input class="form-check-input" type="checkbox" name="tenders_list" id="tenders_list" value="1" {{ $packageItem->tenders_list || old('tenders_list', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="tenders_list">{{ trans('cruds.packageItem.fields.tenders_list') }}</label>
                </div>
                @if($errors->has('tenders_list'))
                    <span class="text-danger">{{ $errors->first('tenders_list') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.tenders_list_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('internal_blacklist') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="internal_blacklist" value="0">
                    <input class="form-check-input" type="checkbox" name="internal_blacklist" id="internal_blacklist" value="1" {{ $packageItem->internal_blacklist || old('internal_blacklist', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="internal_blacklist">{{ trans('cruds.packageItem.fields.internal_blacklist') }}</label>
                </div>
                @if($errors->has('internal_blacklist'))
                    <span class="text-danger">{{ $errors->first('internal_blacklist') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.internal_blacklist_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('national_blacklist_access') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="national_blacklist_access" value="0">
                    <input class="form-check-input" type="checkbox" name="national_blacklist_access" id="national_blacklist_access" value="1" {{ $packageItem->national_blacklist_access || old('national_blacklist_access', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="national_blacklist_access">{{ trans('cruds.packageItem.fields.national_blacklist_access') }}</label>
                </div>
                @if($errors->has('national_blacklist_access'))
                    <span class="text-danger">{{ $errors->first('national_blacklist_access') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.national_blacklist_access_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('white_label_customer_portal_access') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="white_label_customer_portal_access" value="0">
                    <input class="form-check-input" type="checkbox" name="white_label_customer_portal_access" id="white_label_customer_portal_access" value="1" {{ $packageItem->white_label_customer_portal_access || old('white_label_customer_portal_access', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="white_label_customer_portal_access">{{ trans('cruds.packageItem.fields.white_label_customer_portal_access') }}</label>
                </div>
                @if($errors->has('white_label_customer_portal_access'))
                    <span class="text-danger">{{ $errors->first('white_label_customer_portal_access') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.white_label_customer_portal_access_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('customer_portal_orders') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="customer_portal_orders" value="0">
                    <input class="form-check-input" type="checkbox" name="customer_portal_orders" id="customer_portal_orders" value="1" {{ $packageItem->customer_portal_orders || old('customer_portal_orders', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="customer_portal_orders">{{ trans('cruds.packageItem.fields.customer_portal_orders') }}</label>
                </div>
                @if($errors->has('customer_portal_orders'))
                    <span class="text-danger">{{ $errors->first('customer_portal_orders') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageItem.fields.customer_portal_orders_helper') }}</span>
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