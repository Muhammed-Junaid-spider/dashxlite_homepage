<div class="form-group @if(isset($class)){{$class}}@else col-md-12 @endif">
    <label>{{ $label }}</label>
    <select name="content[{{ $key }}]" class="form-control">
        @foreach($options as $optionValue => $optionLabel)
            <option value="{{ $optionValue }}" 
                {{ (isset($value) && $value == $optionValue) ? 'selected' : '' }}>
                {{ $optionLabel }}
            </option>
        @endforeach
    </select>
</div>