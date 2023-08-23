@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.packageList.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.package-lists.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="package_name">{{ trans('cruds.packageList.fields.package_name') }}</label>
                <input class="form-control {{ $errors->has('package_name') ? 'is-invalid' : '' }}" type="text" name="package_name" id="package_name" value="{{ old('package_name', '') }}" required>
                @if($errors->has('package_name'))
                    <span class="text-danger">{{ $errors->first('package_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageList.fields.package_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.packageList.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description') }}</textarea>
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageList.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="package_price">{{ trans('cruds.packageList.fields.package_price') }}</label>
                <input class="form-control {{ $errors->has('package_price') ? 'is-invalid' : '' }}" type="number" name="package_price" id="package_price" value="{{ old('package_price', '') }}" step="0.01" required>
                @if($errors->has('package_price'))
                    <span class="text-danger">{{ $errors->first('package_price') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageList.fields.package_price_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('default_selected') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="default_selected" value="0">
                    <input class="form-check-input" type="checkbox" name="default_selected" id="default_selected" value="1" {{ old('default_selected', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="default_selected">{{ trans('cruds.packageList.fields.default_selected') }}</label>
                </div>
                @if($errors->has('default_selected'))
                    <span class="text-danger">{{ $errors->first('default_selected') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageList.fields.default_selected_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.packageList.fields.currency') }}</label>
                <select class="form-control {{ $errors->has('currency') ? 'is-invalid' : '' }}" name="currency" id="currency">
                    <option value disabled {{ old('currency', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\PackageList::CURRENCY_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('currency', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('currency'))
                    <span class="text-danger">{{ $errors->first('currency') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageList.fields.currency_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="color_code">{{ trans('cruds.packageList.fields.color_code') }}</label>
                <input class="form-control {{ $errors->has('color_code') ? 'is-invalid' : '' }}" type="text" name="color_code" id="color_code" value="{{ old('color_code', '') }}">
                @if($errors->has('color_code'))
                    <span class="text-danger">{{ $errors->first('color_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageList.fields.color_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.packageList.fields.trial_periods') }}</label>
                <select class="form-control {{ $errors->has('trial_periods') ? 'is-invalid' : '' }}" name="trial_periods" id="trial_periods" required>
                    <option value disabled {{ old('trial_periods', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\PackageList::TRIAL_PERIODS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('trial_periods', '30') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('trial_periods'))
                    <span class="text-danger">{{ $errors->first('trial_periods') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageList.fields.trial_periods_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tutorial_guide">{{ trans('cruds.packageList.fields.tutorial_guide') }}</label>
                <div class="needsclick dropzone {{ $errors->has('tutorial_guide') ? 'is-invalid' : '' }}" id="tutorial_guide-dropzone">
                </div>
                @if($errors->has('tutorial_guide'))
                    <span class="text-danger">{{ $errors->first('tutorial_guide') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.packageList.fields.tutorial_guide_helper') }}</span>
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
    var uploadedTutorialGuideMap = {}
Dropzone.options.tutorialGuideDropzone = {
    url: '{{ route('admin.package-lists.storeMedia') }}',
    maxFilesize: 5, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 5
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="tutorial_guide[]" value="' + response.name + '">')
      uploadedTutorialGuideMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedTutorialGuideMap[file.name]
      }
      $('form').find('input[name="tutorial_guide[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($packageList) && $packageList->tutorial_guide)
          var files =
            {!! json_encode($packageList->tutorial_guide) !!}
              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="tutorial_guide[]" value="' + file.file_name + '">')
            }
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