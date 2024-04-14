@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-green-600 focus:border-green-600  rounded-md shadow-sm']) !!}>
