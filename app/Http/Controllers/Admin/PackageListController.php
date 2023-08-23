<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyPackageListRequest;
use App\Http\Requests\StorePackageListRequest;
use App\Http\Requests\UpdatePackageListRequest;
use App\Models\PackageList;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class PackageListController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('package_list_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $packageLists = PackageList::with(['media'])->get();

        return view('admin.packageLists.index', compact('packageLists'));
    }

    public function create()
    {
        abort_if(Gate::denies('package_list_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.packageLists.create');
    }

    public function store(StorePackageListRequest $request)
    {
        $packageList = PackageList::create($request->all());

        foreach ($request->input('tutorial_guide', []) as $file) {
            $packageList->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('tutorial_guide');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $packageList->id]);
        }

        return redirect()->route('admin.package-lists.index');
    }

    public function edit(PackageList $packageList)
    {
        abort_if(Gate::denies('package_list_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.packageLists.edit', compact('packageList'));
    }

    public function update(UpdatePackageListRequest $request, PackageList $packageList)
    {
        $packageList->update($request->all());

        if (count($packageList->tutorial_guide) > 0) {
            foreach ($packageList->tutorial_guide as $media) {
                if (! in_array($media->file_name, $request->input('tutorial_guide', []))) {
                    $media->delete();
                }
            }
        }
        $media = $packageList->tutorial_guide->pluck('file_name')->toArray();
        foreach ($request->input('tutorial_guide', []) as $file) {
            if (count($media) === 0 || ! in_array($file, $media)) {
                $packageList->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('tutorial_guide');
            }
        }

        return redirect()->route('admin.package-lists.index');
    }

    public function show(PackageList $packageList)
    {
        abort_if(Gate::denies('package_list_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $packageList->load('packagePackageItems');

        return view('admin.packageLists.show', compact('packageList'));
    }

    public function destroy(PackageList $packageList)
    {
        abort_if(Gate::denies('package_list_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $packageList->delete();

        return back();
    }

    public function massDestroy(MassDestroyPackageListRequest $request)
    {
        $packageLists = PackageList::find(request('ids'));

        foreach ($packageLists as $packageList) {
            $packageList->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('package_list_create') && Gate::denies('package_list_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new PackageList();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
