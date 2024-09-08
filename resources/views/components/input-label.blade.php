@props(['value'])
<label {{ $attributes->merge(['class' => 'block mb-2 font-medium text-sm text-gray-900']) }}>
    {{ $value ?? $slot }}
</label>
