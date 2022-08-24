<div>
    <div class="mb-3">
        <label for="{{ $id }}" class="form-label">{{ $label }}</label>
        <select class="form-control @error($name) is-invalid @enderror" id="{{ $id }}" name="{{ $name }}"
            aria-describedby="{{ $name }}Help" value="{{ $value }}">
            <option value="">{{ $placeholder }}</option>
            {{-- {{ $slot }} --}}
            @foreach ($options as $option)
                <option value="{{ $option }}"{{ $option == $value ? 'selected' : '' }}>
                    {{ $option }}
                </option>
            @endforeach
        </select>
        <div id="{{ $name }}Help" class="form-text">{{ $help }}</div>
        @error($name)
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
