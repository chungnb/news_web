@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'h-[40px] pl-2 border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm border-[1px]']) !!}>
