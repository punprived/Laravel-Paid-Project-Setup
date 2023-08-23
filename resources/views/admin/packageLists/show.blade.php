@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.packageList.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.package-lists.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.packageList.fields.id') }}
                        </th>
                        <td>
                            {{ $packageList->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageList.fields.package_name') }}
                        </th>
                        <td>
                            {{ $packageList->package_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageList.fields.description') }}
                        </th>
                        <td>
                            {{ $packageList->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageList.fields.package_price') }}
                        </th>
                        <td>
                            {{ $packageList->package_price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageList.fields.default_selected') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $packageList->default_selected ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageList.fields.currency') }}
                        </th>
                        <td>
                            {{ App\Models\PackageList::CURRENCY_SELECT[$packageList->currency] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageList.fields.color_code') }}
                        </th>
                        <td>
                            {{ $packageList->color_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageList.fields.trial_periods') }}
                        </th>
                        <td>
                            {{ App\Models\PackageList::TRIAL_PERIODS_SELECT[$packageList->trial_periods] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packageList.fields.tutorial_guide') }}
                        </th>
                        <td>
                            @foreach($packageList->tutorial_guide as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.package-lists.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#package_package_items" role="tab" data-toggle="tab">
                {{ trans('cruds.packageItem.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="package_package_items">
            @includeIf('admin.packageLists.relationships.packagePackageItems', ['packageItems' => $packageList->packagePackageItems])
        </div>
    </div>
</div>

@endsection