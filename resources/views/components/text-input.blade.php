@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-black-900 focus:border-indigo-300 focus:ring-indigo-300 rounded-pill shadow-sm']) }}>

