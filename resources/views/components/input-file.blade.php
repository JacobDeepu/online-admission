@props(['name', 'label'])
<label class="@error($name) text-red-500 @else text-gray-900 @enderror mb-2 block text-sm font-medium" for="{{ $name }}">
    {{ $label }}
    @if ($attributes->has('required'))
        <span class="text-red-600">*</span>
    @endif
</label>
<input name="{{ $name }}" type="file" @error($name) {!! $attributes->merge([
    'class' => 'border-red-600 cursor-pointer rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900
focus:outline-none',
]) !!}
@else
{!! $attributes->merge([
    'class' => 'border-gray-300 cursor-pointer rounded-lg border bg-gray-50 p-2.5 text-sm text-gray-900
focus:outline-none',
]) !!}
@enderror />
@error($name)
    <p class="text-sm text-red-600">{{ $message }}</p>
@enderror
