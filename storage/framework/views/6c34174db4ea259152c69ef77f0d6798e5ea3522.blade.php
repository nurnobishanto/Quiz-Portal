<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['wire:loading.remove.delay','wire:target','class'])
<x-impersonate::icon :wire:loading.remove.delay="$wireLoadingRemoveDelay" :wire:target="$wireTarget" :class="$class" >

{{ $slot ?? "" }}
</x-impersonate::icon>