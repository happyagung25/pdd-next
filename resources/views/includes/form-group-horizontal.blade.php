<div class="form-group @error($name) has-error @enderror">
    <div class="col-3 col-sm-12">
        <label class="form-label" for="inp-{{ time() }}-{{ $name }}">{{ $label }}</label>
    </div>
    <div class="col-9 col-sm-12">
        <input class="form-input" type="{{ $type }}" id="inp-{{ time() }}-{{ $name }}" wire:model="{{ $name }}" placeholder="{{ $label }}">
        @error($name) <div class="form-input-hint">{{ $message }}</div> @enderror
    </div>
</div>