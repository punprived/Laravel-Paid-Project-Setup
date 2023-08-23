<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPackageItemRequest;
use App\Http\Requests\StorePackageItemRequest;
use App\Http\Requests\UpdatePackageItemRequest;
use App\Models\PackageItem;
use App\Models\PackageList;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PackageItemController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('package_item_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $packageItems = PackageItem::with(['package'])->get();

        return view('admin.packageItems.index', compact('packageItems'));
    }

    public function create()
    {
        abort_if(Gate::denies('package_item_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $packages = PackageList::pluck('package_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.packageItems.create', compact('packages'));
    }

    public function store(StorePackageItemRequest $request)
    {
        $packageItem = PackageItem::create($request->all());

        return redirect()->route('admin.package-items.index');
    }

    public function edit(PackageItem $packageItem)
    {
        abort_if(Gate::denies('package_item_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $packages = PackageList::pluck('package_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $packageItem->load('package');

        return view('admin.packageItems.edit', compact('packageItem', 'packages'));
    }

    public function update(UpdatePackageItemRequest $request, PackageItem $packageItem)
    {
        $packageItem->update($request->all());

        return redirect()->route('admin.package-items.index');
    }

    public function show(PackageItem $packageItem)
    {
        abort_if(Gate::denies('package_item_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $packageItem->load('package');

        return view('admin.packageItems.show', compact('packageItem'));
    }

    public function destroy(PackageItem $packageItem)
    {
        abort_if(Gate::denies('package_item_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $packageItem->delete();

        return back();
    }

    public function massDestroy(MassDestroyPackageItemRequest $request)
    {
        $packageItems = PackageItem::find(request('ids'));

        foreach ($packageItems as $packageItem) {
            $packageItem->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
