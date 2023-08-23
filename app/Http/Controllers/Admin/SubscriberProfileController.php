<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySubscriberProfileRequest;
use App\Http\Requests\StoreSubscriberProfileRequest;
use App\Http\Requests\UpdateSubscriberProfileRequest;
use App\Models\PackageList;
use App\Models\SubscriberProfile;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SubscriberProfileController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('subscriber_profile_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subscriberProfiles = SubscriberProfile::with(['package'])->get();

        return view('admin.subscriberProfiles.index', compact('subscriberProfiles'));
    }

    public function create()
    {
        abort_if(Gate::denies('subscriber_profile_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $packages = PackageList::pluck('package_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.subscriberProfiles.create', compact('packages'));
    }

    public function store(StoreSubscriberProfileRequest $request)
    {
        $subscriberProfile = SubscriberProfile::create($request->all());

        return redirect()->route('admin.subscriber-profiles.index');
    }

    public function edit(SubscriberProfile $subscriberProfile)
    {
        abort_if(Gate::denies('subscriber_profile_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $packages = PackageList::pluck('package_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $subscriberProfile->load('package');

        return view('admin.subscriberProfiles.edit', compact('packages', 'subscriberProfile'));
    }

    public function update(UpdateSubscriberProfileRequest $request, SubscriberProfile $subscriberProfile)
    {
        $subscriberProfile->update($request->all());

        return redirect()->route('admin.subscriber-profiles.index');
    }

    public function show(SubscriberProfile $subscriberProfile)
    {
        abort_if(Gate::denies('subscriber_profile_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subscriberProfile->load('package');

        return view('admin.subscriberProfiles.show', compact('subscriberProfile'));
    }

    public function destroy(SubscriberProfile $subscriberProfile)
    {
        abort_if(Gate::denies('subscriber_profile_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subscriberProfile->delete();

        return back();
    }

    public function massDestroy(MassDestroySubscriberProfileRequest $request)
    {
        $subscriberProfiles = SubscriberProfile::find(request('ids'));

        foreach ($subscriberProfiles as $subscriberProfile) {
            $subscriberProfile->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
