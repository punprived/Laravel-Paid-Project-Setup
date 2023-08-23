@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.setting.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.settings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.id') }}
                        </th>
                        <td>
                            {{ $setting->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.user') }}
                        </th>
                        <td>
                            {{ $setting->user }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.site_logo') }}
                        </th>
                        <td>
                            @if($setting->site_logo)
                                <a href="{{ $setting->site_logo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $setting->site_logo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.display_name') }}
                        </th>
                        <td>
                            {{ $setting->display_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.mail_from_email') }}
                        </th>
                        <td>
                            {{ $setting->mail_from_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.mail_from_name') }}
                        </th>
                        <td>
                            {{ $setting->mail_from_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.facebook_url') }}
                        </th>
                        <td>
                            {{ $setting->facebook_url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.twitter_url') }}
                        </th>
                        <td>
                            {{ $setting->twitter_url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.youtube_url') }}
                        </th>
                        <td>
                            {{ $setting->youtube_url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.linkedin_url') }}
                        </th>
                        <td>
                            {{ $setting->linkedin_url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.contact_email') }}
                        </th>
                        <td>
                            {{ $setting->contact_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.contact_phone') }}
                        </th>
                        <td>
                            {{ $setting->contact_phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.contact_address') }}
                        </th>
                        <td>
                            {{ $setting->contact_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.data_retain_amount') }}
                        </th>
                        <td>
                            {{ $setting->data_retain_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.duration_of_data_retention') }}
                        </th>
                        <td>
                            {{ $setting->duration_of_data_retention }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.setting.fields.footer_text') }}
                        </th>
                        <td>
                            {{ $setting->footer_text }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.settings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection