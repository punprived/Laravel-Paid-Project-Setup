@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.setting.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.settings.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="user">{{ trans('cruds.setting.fields.user') }}</label>
                <input class="form-control {{ $errors->has('user') ? 'is-invalid' : '' }}" type="text" name="user" id="user" value="{{ old('user', '') }}">
                @if($errors->has('user'))
                    <span class="text-danger">{{ $errors->first('user') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="site_logo">{{ trans('cruds.setting.fields.site_logo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('site_logo') ? 'is-invalid' : '' }}" id="site_logo-dropzone">
                </div>
                @if($errors->has('site_logo'))
                    <span class="text-danger">{{ $errors->first('site_logo') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.site_logo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="display_name">{{ trans('cruds.setting.fields.display_name') }}</label>
                <input class="form-control {{ $errors->has('display_name') ? 'is-invalid' : '' }}" type="text" name="display_name" id="display_name" value="{{ old('display_name', '') }}">
                @if($errors->has('display_name'))
                    <span class="text-danger">{{ $errors->first('display_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.display_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="mail_from_email">{{ trans('cruds.setting.fields.mail_from_email') }}</label>
                <input class="form-control {{ $errors->has('mail_from_email') ? 'is-invalid' : '' }}" type="text" name="mail_from_email" id="mail_from_email" value="{{ old('mail_from_email', '') }}">
                @if($errors->has('mail_from_email'))
                    <span class="text-danger">{{ $errors->first('mail_from_email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.mail_from_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="mail_from_name">{{ trans('cruds.setting.fields.mail_from_name') }}</label>
                <input class="form-control {{ $errors->has('mail_from_name') ? 'is-invalid' : '' }}" type="text" name="mail_from_name" id="mail_from_name" value="{{ old('mail_from_name', '') }}">
                @if($errors->has('mail_from_name'))
                    <span class="text-danger">{{ $errors->first('mail_from_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.mail_from_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="facebook_url">{{ trans('cruds.setting.fields.facebook_url') }}</label>
                <input class="form-control {{ $errors->has('facebook_url') ? 'is-invalid' : '' }}" type="text" name="facebook_url" id="facebook_url" value="{{ old('facebook_url', '') }}">
                @if($errors->has('facebook_url'))
                    <span class="text-danger">{{ $errors->first('facebook_url') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.facebook_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="twitter_url">{{ trans('cruds.setting.fields.twitter_url') }}</label>
                <input class="form-control {{ $errors->has('twitter_url') ? 'is-invalid' : '' }}" type="text" name="twitter_url" id="twitter_url" value="{{ old('twitter_url', '') }}">
                @if($errors->has('twitter_url'))
                    <span class="text-danger">{{ $errors->first('twitter_url') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.twitter_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="youtube_url">{{ trans('cruds.setting.fields.youtube_url') }}</label>
                <input class="form-control {{ $errors->has('youtube_url') ? 'is-invalid' : '' }}" type="text" name="youtube_url" id="youtube_url" value="{{ old('youtube_url', '') }}">
                @if($errors->has('youtube_url'))
                    <span class="text-danger">{{ $errors->first('youtube_url') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.youtube_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="linkedin_url">{{ trans('cruds.setting.fields.linkedin_url') }}</label>
                <input class="form-control {{ $errors->has('linkedin_url') ? 'is-invalid' : '' }}" type="text" name="linkedin_url" id="linkedin_url" value="{{ old('linkedin_url', '') }}">
                @if($errors->has('linkedin_url'))
                    <span class="text-danger">{{ $errors->first('linkedin_url') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.linkedin_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_email">{{ trans('cruds.setting.fields.contact_email') }}</label>
                <input class="form-control {{ $errors->has('contact_email') ? 'is-invalid' : '' }}" type="text" name="contact_email" id="contact_email" value="{{ old('contact_email', '') }}">
                @if($errors->has('contact_email'))
                    <span class="text-danger">{{ $errors->first('contact_email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.contact_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_phone">{{ trans('cruds.setting.fields.contact_phone') }}</label>
                <input class="form-control {{ $errors->has('contact_phone') ? 'is-invalid' : '' }}" type="text" name="contact_phone" id="contact_phone" value="{{ old('contact_phone', '') }}">
                @if($errors->has('contact_phone'))
                    <span class="text-danger">{{ $errors->first('contact_phone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.contact_phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_address">{{ trans('cruds.setting.fields.contact_address') }}</label>
                <textarea class="form-control {{ $errors->has('contact_address') ? 'is-invalid' : '' }}" name="contact_address" id="contact_address">{{ old('contact_address') }}</textarea>
                @if($errors->has('contact_address'))
                    <span class="text-danger">{{ $errors->first('contact_address') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.contact_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="data_retain_amount">{{ trans('cruds.setting.fields.data_retain_amount') }}</label>
                <input class="form-control {{ $errors->has('data_retain_amount') ? 'is-invalid' : '' }}" type="number" name="data_retain_amount" id="data_retain_amount" value="{{ old('data_retain_amount', '0') }}" step="0.01">
                @if($errors->has('data_retain_amount'))
                    <span class="text-danger">{{ $errors->first('data_retain_amount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.data_retain_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="duration_of_data_retention">{{ trans('cruds.setting.fields.duration_of_data_retention') }}</label>
                <input class="form-control {{ $errors->has('duration_of_data_retention') ? 'is-invalid' : '' }}" type="number" name="duration_of_data_retention" id="duration_of_data_retention" value="{{ old('duration_of_data_retention', '') }}" step="1">
                @if($errors->has('duration_of_data_retention'))
                    <span class="text-danger">{{ $errors->first('duration_of_data_retention') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.duration_of_data_retention_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="footer_text">{{ trans('cruds.setting.fields.footer_text') }}</label>
                <textarea class="form-control {{ $errors->has('footer_text') ? 'is-invalid' : '' }}" name="footer_text" id="footer_text">{{ old('footer_text') }}</textarea>
                @if($errors->has('footer_text'))
                    <span class="text-danger">{{ $errors->first('footer_text') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.setting.fields.footer_text_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    Dropzone.options.siteLogoDropzone = {
    url: '{{ route('admin.settings.storeMedia') }}',
    maxFilesize: 5, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 5,
      width: 1200,
      height: 1200
    },
    success: function (file, response) {
      $('form').find('input[name="site_logo"]').remove()
      $('form').append('<input type="hidden" name="site_logo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="site_logo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($setting) && $setting->site_logo)
      var file = {!! json_encode($setting->site_logo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="site_logo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

</script>
@endsection