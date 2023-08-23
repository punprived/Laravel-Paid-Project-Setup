@extends('layouts.admin')
@section('content')
@can('work_order_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.work-orders.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.workOrder.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.workOrder.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-WorkOrder">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.workOrder.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.workOrder.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.workOrder.fields.assigned_to') }}
                        </th>
                        <th>
                            {{ trans('cruds.workOrder.fields.due_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.workOrder.fields.status') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($workOrders as $key => $workOrder)
                        <tr data-entry-id="{{ $workOrder->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $workOrder->id ?? '' }}
                            </td>
                            <td>
                                {{ $workOrder->title ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\WorkOrder::ASSIGNED_TO_SELECT[$workOrder->assigned_to] ?? '' }}
                            </td>
                            <td>
                                {{ $workOrder->due_date ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\WorkOrder::STATUS_SELECT[$workOrder->status] ?? '' }}
                            </td>
                            <td>
                                @can('work_order_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.work-orders.show', $workOrder->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('work_order_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.work-orders.edit', $workOrder->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('work_order_delete')
                                    <form action="{{ route('admin.work-orders.destroy', $workOrder->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('work_order_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.work-orders.massDestroy') }}",
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
  let table = $('.datatable-WorkOrder:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection