<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyWorkOrderRequest;
use App\Http\Requests\StoreWorkOrderRequest;
use App\Http\Requests\UpdateWorkOrderRequest;
use App\Models\WorkOrder;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class WorkOrderController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('work_order_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $workOrders = WorkOrder::all();

        return view('admin.workOrders.index', compact('workOrders'));
    }

    public function create()
    {
        abort_if(Gate::denies('work_order_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.workOrders.create');
    }

    public function store(StoreWorkOrderRequest $request)
    {
        $workOrder = WorkOrder::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $workOrder->id]);
        }

        return redirect()->route('admin.work-orders.index');
    }

    public function edit(WorkOrder $workOrder)
    {
        abort_if(Gate::denies('work_order_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.workOrders.edit', compact('workOrder'));
    }

    public function update(UpdateWorkOrderRequest $request, WorkOrder $workOrder)
    {
        $workOrder->update($request->all());

        return redirect()->route('admin.work-orders.index');
    }

    public function show(WorkOrder $workOrder)
    {
        abort_if(Gate::denies('work_order_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.workOrders.show', compact('workOrder'));
    }

    public function destroy(WorkOrder $workOrder)
    {
        abort_if(Gate::denies('work_order_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $workOrder->delete();

        return back();
    }

    public function massDestroy(MassDestroyWorkOrderRequest $request)
    {
        $workOrders = WorkOrder::find(request('ids'));

        foreach ($workOrders as $workOrder) {
            $workOrder->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('work_order_create') && Gate::denies('work_order_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new WorkOrder();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
