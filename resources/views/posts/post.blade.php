<x-layout>
    <x-slot name="sitetitle">
        {{ $post->title }} |My blog
    </x-slot>
    <x-header/>
    <h1>{{ $post->title }}</h1>
    <p>日付: {{ $today }}</p>

    <div>{{ $post->body }}</div>
</x-layout>