@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => ' border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200  focus:ring-opacity-50  rounded-md shadow-sm dark:bg-gray-700 dark:placeholder-white dark:text-white']) !!}>
