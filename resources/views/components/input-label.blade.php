@props(['value', 'isRequired'=> false])

<label {{ $attributes->merge(['class' => 'block font-bold text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
    @if ($isRequired)    
        <span class="error">*</span>
    @endif
</label>
