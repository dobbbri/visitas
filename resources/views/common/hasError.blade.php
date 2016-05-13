@if ($errors->has($field))
    <i class="material-icons form-control-feedback">clear</i>
    <span class="help-block">{{ $errors->first($field) }}</span>
@endif
