@props(['type'])

@php
$classes = match ($type) {
    1 => 'blue',
    2 => 'green',
    3 => 'red',
};
@endphp

<div>
    <p>
        Status order:
        <span {{ $attributes->merge(['class' => $classes]) }}>{{$slot}}</span>
    </p>
</div>