@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.packageItem.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.package-items.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.id') }}
                        </th>
                        <td>
                            {{ $packageItem->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.package') }}
                        </th>
                        <td>
                            {{ $packageItem->package->package_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.user_licence') }}
                        </th>
                        <td>
                            {{ $packageItem->user_licence }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.overview_module_placement') }}
                        </th>
                        <td>
                            {{ $packageItem->overview_module_placement }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.email_account') }}
                        </th>
                        <td>
                            {{ $packageItem->email_account }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.customer_account') }}
                        </th>
                        <td>
                            {{ $packageItem->customer_account }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.customize_store_page') }}
                        </th>
                        <td>
                            {{ $packageItem->customize_store_page }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.items_in_store') }}
                        </th>
                        <td>
                            {{ $packageItem->items_in_store }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.items_in_customer_store') }}
                        </th>
                        <td>
                            {{ $packageItem->items_in_customer_store }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.standard_survey_per_month') }}
                        </th>
                        <td>
                            {{ $packageItem->standard_survey_per_month }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.customize_survey') }}
                        </th>
                        <td>
                            {{ $packageItem->customize_survey }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.quote_per_month') }}
                        </th>
                        <td>
                            {{ $packageItem->quote_per_month }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.customized_quote') }}
                        </th>
                        <td>
                            {{ $packageItem->customized_quote }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.standared_work_order') }}
                        </th>
                        <td>
                            {{ $packageItem->standared_work_order }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.customized_work_order') }}
                        </th>
                        <td>
                            {{ $packageItem->customized_work_order }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.standard_invoice') }}
                        </th>
                        <td>
                            {{ $packageItem->standard_invoice }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.customized_invoice') }}
                        </th>
                        <td>
                            {{ $packageItem->customized_invoice }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.api_connection') }}
                        </th>
                        <td>
                            {{ $packageItem->api_connection }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.internal_accounting_system') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $packageItem->internal_accounting_system ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.calendar_usages') }}
                        </th>
                        <td>
                            {{ $packageItem->calendar_usages }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.trades_mate_access') }}
                        </th>
                        <td>
                            {{ $packageItem->trades_mate_access }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.app_user_licence') }}
                        </th>
                        <td>
                            {{ $packageItem->app_user_licence }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.project_join') }}
                        </th>
                        <td>
                            {{ $packageItem->project_join }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.project_share') }}
                        </th>
                        <td>
                            {{ $packageItem->project_share }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.customer_logins') }}
                        </th>
                        <td>
                            {{ $packageItem->customer_logins }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.map_location') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $packageItem->map_location ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.supplier_link') }}
                        </th>
                        <td>
                            {{ $packageItem->supplier_link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.payment_api_service') }}
                        </th>
                        <td>
                            {{ $packageItem->payment_api_service }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.vehicles') }}
                        </th>
                        <td>
                            {{ $packageItem->vehicles }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.rams_documents_per_month') }}
                        </th>
                        <td>
                            {{ $packageItem->rams_documents_per_month }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.contractor_user_accounts') }}
                        </th>
                        <td>
                            {{ $packageItem->contractor_user_accounts }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.text_message_service') }}
                        </th>
                        <td>
                            {{ $packageItem->text_message_service }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.phone_system_license') }}
                        </th>
                        <td>
                            {{ $packageItem->phone_system_license }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.internal_messaging') }}
                        </th>
                        <td>
                            {{ $packageItem->internal_messaging }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.live_chat') }}
                        </th>
                        <td>
                            {{ $packageItem->live_chat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.tenders_list') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $packageItem->tenders_list ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.internal_blacklist') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $packageItem->internal_blacklist ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.national_blacklist_access') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $packageItem->national_blacklist_access ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.white_label_customer_portal_access') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $packageItem->white_label_customer_portal_access ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageItem.fields.customer_portal_orders') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $packageItem->customer_portal_orders ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.package-items.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection