@php
    $colors = [
        'brand1' => 'text-brand1-600 focus:border-brand1-300 focus:ring-brand1-200',
        'brand2' => 'text-brand2-600 focus:border-brand2-300 focus:ring-brand2-200',
        'brand3' => 'text-brand3-600 focus:border-brand3-300 focus:ring-brand3-200',
        'event2' => 'text-event2-600 focus:border-event2-300 focus:ring-event2-200',
        'orange' => 'text-event2-600 focus:border-event2-300 focus:ring-event2-200',
        'yellow' => 'text-yellow-600 focus:border-yellow-300 focus:ring-yellow-200',
        'pink' => 'text-pink-600 focus:border-pink-300 focus:ring-pink-200',
        'indigo' => 'text-indigo-600 focus:border-indigo-300 focus:ring-indigo-200',
        'teal' => 'text-teal-600 focus:border-teal-300 focus:ring-teal-200',
        'red' => 'text-red-600 focus:border-red-300 focus:ring-red-200',
        'blue' => 'text-blue-600 focus:border-blue-300 focus:ring-blue-200',
        'gray' => 'text-gray-600 focus:border-gray-300 focus:ring-gray-200',
    ];
@endphp

<div>
    <label class="cursor-pointer flex items-center group select-none @isset($spread) justify-between @endisset">
        @isset($prefix) 
            <div>
                {{ $prefix }}
            </div>
        @endisset

        @if(isset($spread) && isset($prefix)) <div class="flex items-center"> @endif

        <input type="radio" name="{{ $name }}"
            class="{{ $size ?? 'w-10 h-10' }} cursor-pointer rounded-full border-gray-300 shadow-sm focus:ring focus:ring-offset-0 focus:ring-opacity-50 text-2xl {{ isset($color) ? $colors[$color] : $color['brand1'] }} @if($pulse ?? false) animate-pulse @endif" 
            {{ $attributes }}
        >

        @isset($suffix) 
            <div>
                {{ $suffix }}
            </div>
        @endisset

        @if(isset($spread) && isset($prefix)) </div> @endif
    </label>
</div>