@props(['disabled' => false, 'withicon' => false])

@php
$withiconClasses = $withicon ? 'pl-11 pr-4' : 'px-4'
@endphp

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
'class' => $withiconClasses . ' py-2 border-blue-200 rounded-md focus:border-blue-200 focus:ring
focus:ring-blue-200 focus:ring-offset-2 focus:ring-offset-blue dark:border-gray-600 dark:focus:border-gray-400 dark:bg-dark-eval-1
dark:text-gray-300 dark:focus:ring-offset-dark-eval-1',
])
!!}>
