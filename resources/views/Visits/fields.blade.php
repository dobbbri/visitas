<!-- name -->
<div class="form-group label-floating {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="control-label required-field">Nome</label>
    <input type="text" name="name" value="{{ old('name', $visit->name) }}" class="form-control">
    @include('common.hasError', ['field' => 'name'])
</div>

<!-- description -->
<div class="form-group label-floating {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="control-label">Observações</label>
    <textarea name="description" rows="1" class="form-control">{{ old('description', $visit->description) }}</textarea>
    @include('common.hasError', ['field' => 'description'])
</div>

<!-- is_visited -->
<div class="form-group">
    <div class="checkbox">
        <label>
            <input name="is_visited" type="hidden" value="0">
            <input name="is_visited" type="checkbox" value="1" {{ old('is_visited', $visit->is_visited) ? 'checked' : '' }}>
            Visitado
        </label>
    </div>
</div>
