<div class="m-3">
    @can('package_item_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.package-items.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.packageItem.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.packageItem.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-packagePackageItems">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.package') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.user_licence') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.overview_module_placement') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.email_account') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.customer_account') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.customize_store_page') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.items_in_store') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.items_in_customer_store') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.standard_survey_per_month') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.customize_survey') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.quote_per_month') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.customized_quote') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.standared_work_order') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.customized_work_order') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.standard_invoice') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.customized_invoice') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.api_connection') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.internal_accounting_system') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.calendar_usages') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.trades_mate_access') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.app_user_licence') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.project_join') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.project_share') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.customer_logins') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.map_location') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.supplier_link') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.payment_api_service') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.vehicles') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.rams_documents_per_month') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.contractor_user_accounts') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.text_message_service') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.phone_system_license') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.internal_messaging') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.live_chat') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.tenders_list') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.internal_blacklist') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.national_blacklist_access') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.white_label_customer_portal_access') }}
                            </th>
                            <th>
                                {{ trans('cruds.packageItem.fields.customer_portal_orders') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($packageItems as $key => $packageItem)
                            <tr data-entry-id="{{ $packageItem->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $packageItem->id ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->package->package_name ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->user_licence ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->overview_module_placement ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->email_account ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->customer_account ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->customize_store_page ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->items_in_store ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->items_in_customer_store ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->standard_survey_per_month ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->customize_survey ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->quote_per_month ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->customized_quote ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->standared_work_order ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->customized_work_order ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->standard_invoice ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->customized_invoice ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->api_connection ?? '' }}
                                </td>
                                <td>
                                    <span style="display:none">{{ $packageItem->internal_accounting_system ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $packageItem->internal_accounting_system ? 'checked' : '' }}>
                                </td>
                                <td>
                                    {{ $packageItem->calendar_usages ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->trades_mate_access ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->app_user_licence ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->project_join ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->project_share ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->customer_logins ?? '' }}
                                </td>
                                <td>
                                    <span style="display:none">{{ $packageItem->map_location ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $packageItem->map_location ? 'checked' : '' }}>
                                </td>
                                <td>
                                    {{ $packageItem->supplier_link ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->payment_api_service ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->vehicles ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->rams_documents_per_month ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->contractor_user_accounts ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->text_message_service ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->phone_system_license ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->internal_messaging ?? '' }}
                                </td>
                                <td>
                                    {{ $packageItem->live_chat ?? '' }}
                                </td>
                                <td>
                                    <span style="display:none">{{ $packageItem->tenders_list ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $packageItem->tenders_list ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $packageItem->internal_blacklist ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $packageItem->internal_blacklist ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $packageItem->national_blacklist_access ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $packageItem->national_blacklist_access ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $packageItem->white_label_customer_portal_access ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $packageItem->white_label_customer_portal_access ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <span style="display:none">{{ $packageItem->customer_portal_orders ?? '' }}</span>
                                    <input type="checkbox" disabled="disabled" {{ $packageItem->customer_portal_orders ? 'checked' : '' }}>
                                </td>
                                <td>
                                    @can('package_item_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.package-items.show', $packageItem->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan

                                    @can('package_item_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.package-items.edit', $packageItem->id) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan

                                    @can('package_item_delete')
                                        <form action="{{ route('admin.package-items.destroy', $packageItem->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                        </form>
                                    @endcan

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('package_item_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.package-items.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-packagePackageItems:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection