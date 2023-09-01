@props(['disabled' => false, 'name', 'label'])
<div class="relative">
    <input name="{{ $name }}" placeholder=" " {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
        'class' =>
            'border-1 px-2.5 pb-2.5 pt-4 border-gray-300 bg-transparent appearance-none focus:border-blue-600 focus:outline-none focus:ring-0 rounded-md shadow-sm peer',
    ]) !!} />
    <label
        class="absolute left-1 top-2 origin-[0] -translate-y-4 scale-75 transform bg-white px-2 text-sm font-medium text-gray-500 duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-100 peer-focus:px-2 peer-focus:text-gray-700"
        for="{{ $name }}">{{ $label }}</label>
</div>
