@aware(['iconLeft', 'iconRight', 'wireTarget'])

@props([
    'href',
    'type' => 'button',
    'buttonClasses',
    'classes' => $buttonClasses . ' w-full flex items-center justify-center px-8 py-3 border border-transparent text-lg font-medium rounded-md md:py-4 md:text-xl md:px-10 tracking-wide transition-colors',
])

<div {{ $attributes->merge(['class' => 'relative rounded-md shadow-md overflow-hidden']) }}>
    @isset($href)
        <a
            href="{{ $href }}"
            class="{{ $classes }}"
            @isset($wireTarget)
                wire:target="{{ $wireTarget }}"
                wire:loading.class="text-transparent"
            @endisset
        >
            @isset($iconLeft)<i class="{{ $iconLeft }} text-xl md:text-2xl mr-3 opacity-60"></i>@endisset
            {{ $slot }}
            @isset($iconRight)<i class="{{ $iconRight }} text-xl md:text-2xl ml-3 opacity-60"></i>@endisset
        </a>
    @else
        <button 
            type="{{ $type }}"
            class="{{ $classes }}"
            @isset($wireTarget)
                wire:target="{{ $wireTarget }}"
                wire:loading.class="text-transparent"
            @endisset
        >
            @isset($iconLeft)<i class="{{ $iconLeft }} text-xl md:text-2xl mr-3 opacity-60"></i>@endisset
            {{ $slot }}
            @isset($iconRight)<i class="{{ $iconRight }} text-xl md:text-2xl ml-3 opacity-60"></i>@endisset
        </button>
    @endisset

    @isset($wireTarget)
        <div wire:loading.flex 
            wire:target="{{ $wireTarget }}"
            class="absolute inset-0 items-center justify-center bg-white bg-opacity-80 z-10"
        >
            <div class="text-2xl text-gray-500 fa-layers fa-fw">
                <i class="fal fa-spinner-third fa-spin" data-fa-transform="rotate--45 shrink-4"></i>
                <i class="fal fa-spinner-third fa-spin"></i>
                <i class="fal fa-spinner-third fa-spin" data-fa-transform="rotate-45 grow-4"></i>
            </div>
        </div>
    @endisset
</div>