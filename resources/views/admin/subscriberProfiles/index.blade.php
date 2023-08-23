@extends('layouts.admin')
@section('content')
@can('subscriber_profile_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.subscriber-profiles.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.subscriberProfile.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.subscriberProfile.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-SubscriberProfile">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.subscriberProfile.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscriberProfile.fields.package') }}
                        </th>
                        <th>
                            {{ trans('cruds.packageList.fields.package_price') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscriberProfile.fields.business_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscriberProfile.fields.business_address') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscriberProfile.fields.company_registration_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscriberProfile.fields.subdomain_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscriberProfile.fields.contact_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscriberProfile.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscriberProfile.fields.account_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscriberProfile.fields.remaining_trial_period') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subscriberProfiles as $key => $subscriberProfile)
                        <tr data-entry-id="{{ $subscriberProfile->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $subscriberProfile->id ?? '' }}
                            </td>
                            <td>
                                {{ $subscriberProfile->package->package_name ?? '' }}
                            </td>
                            <td>
                                {{ $subscriberProfile->package->package_price ?? '' }}
                            </td>
                            <td>
                                {{ $subscriberProfile->business_name ?? '' }}
                            </td>
                            <td>
                                {{ $subscriberProfile->business_address ?? '' }}
                            </td>
                            <td>
                                {{ $subscriberProfile->company_registration_number ?? '' }}
                            </td>
                            <td>
                                {{ $subscriberProfile->subdomain_name ?? '' }}
                            </td>
                            <td>
                                {{ $subscriberProfile->contact_number ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\SubscriberProfile::STATUS_SELECT[$subscriberProfile->status] ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\SubscriberProfile::ACCOUNT_TYPE_SELECT[$subscriberProfile->account_type] ?? '' }}
                            </td>
                            <td>
                                {{ $subscriberProfile->remaining_trial_period ?? '' }}
                            </td>
                            <td>
                                @can('subscriber_profile_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.subscriber-profiles.show', $subscriberProfile->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('subscriber_profile_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.subscriber-profiles.edit', $subscriberProfile->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('subscriber_profile_delete')
                                    <form action="{{ route('admin.subscriber-profiles.destroy', $subscriberProfile->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('subscriber_profile_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.subscriber-profiles.massDestroy') }}",
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
  let table = $('.datatable-SubscriberProfile:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection