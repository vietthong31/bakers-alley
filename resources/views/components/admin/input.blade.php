{{-- Input component --}}

@props(['type', 'name', 'id', 'label', 'value' => '', 'disable' => false, 'placeholder' => ''])

@if ($type == 'file')
    <div class="mb-3">
        <label for="file">Image</label>
        <input type="file" name={{ $name }} class="form-control" id="file" value="$value" />
        @error($name)
            {{ $message }}
        @enderror
    </div>
@else
    <div class="mb-3">

        <label for="id">{{ $label }}</label>
        <input class="form-control" name="{{ $name }}" id="{{ $id }}" type="{{ $type }}"
            value="{{ $value }}" {{ $disable ? 'disabled' : '' }}
            placeholder="{{ $placeholder }}" />
        @error($name)
            {{ $message }}
        @enderror
    </div>
@endif
