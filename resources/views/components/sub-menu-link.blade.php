@props(['active', 'icon', 'idlink'=>''])

<x-side-navigation.link href="{{ route($active) }}{{ $idlink }}" :active="request()->routeIs($active)"
    icon="{{ $icon }}" name="{{ $name }}" />