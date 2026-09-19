@php
    $tag = in_array($level, ['h1','h2','h3','h4','h5','h6']) ? $level : 'h2';

    $alignClass = match($align) {
        'center' => 'text-center',
        'right'  => 'text-right',
        default  => 'text-left',
    };

    $sizeClass = match($tag) {
        'h1' => 'text-4xl font-bold',
        'h2' => 'text-3xl font-bold',
        'h3' => 'text-2xl font-semibold',
        'h4' => 'text-xl font-semibold',
        'h5' => 'text-lg font-medium',
        'h6' => 'text-base font-medium',
    };
@endphp

<div {{ $attributes->merge(['class' => "mb-6 $alignClass"]) }}>
    <{{ $tag }} class="{{ $sizeClass }} text-gray-900">
        {{ $title }}
    </{{ $tag }}>

    @if($subtitle)
        <p class="mt-1 text-gray-500">
            {{ $subtitle }}
        </p>
    @endif

    {{ $slot ?? '' }}
</div>