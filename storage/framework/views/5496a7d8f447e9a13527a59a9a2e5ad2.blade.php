<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['stores'])
<x-splade-data-stores :stores="$stores" {{ $attributes }}>

{{ $slot ?? "" }}
</x-splade-data-stores>