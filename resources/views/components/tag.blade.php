@props(['tag', 'size' => 'base'])

@php
    $classes = 'bg-white/10 hover:bg-white/25 rounded-xl transition-colors duration-300';
    $style = '';

    if ($size === 'base') {
        $classes .= 'text-sm px-5 py-1';
    }
    if ($size === 'small') {
        $classes .= 'text-xs px-3 py-1';
        $style .= 'font-size: .7rem';
    }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}"
    style="{{ $style }}">{{ $tag->name }}</a>
