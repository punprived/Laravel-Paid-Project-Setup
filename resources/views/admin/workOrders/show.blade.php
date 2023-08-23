@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.workOrder.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.work-orders.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.workOrder.fields.id') }}
                        </th>
                        <td>
                            {{ $workOrder->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workOrder.fields.title') }}
                        </th>
                        <td>
                            {{ $workOrder->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workOrder.fields.description') }}
                        </th>
                        <td>
                            {!! $workOrder->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workOrder.fields.assigned_to') }}
                        </th>
                        <td>
                            {{ App\Models\WorkOrder::ASSIGNED_TO_SELECT[$workOrder->assigned_to] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workOrder.fields.due_date') }}
                        </th>
                        <td>
                            {{ $workOrder->due_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workOrder.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\WorkOrder::STATUS_SELECT[$workOrder->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.work-orders.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection