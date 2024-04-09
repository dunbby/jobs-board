@props([
    'type' => 'a',
    'color' => 'blue'
])

@if($type === 'a')
    <a {{ $attributes }} class="rounded-md bg-{{ $color }}-600 px-3 py-2 text-sm font-semibold text-white
       shadow-sm hover:bg-{{ $color }}-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
       focus-visible:outline-{{ $color }}-600">
        {{ $slot  }}
    </a>
@else
    <button {{ $attributes }}
            class="rounded-md bg-{{ $color }}-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-{{ $color }}-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-{{ $color }}-600">
        {{ $slot }}
    </button>
@endif


