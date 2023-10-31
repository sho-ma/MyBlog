<x-layout>
    <x-slot name="sitetitle">
        My blog
    </x-slot>

    <x-header/>

    <ul>
        @foreach ($posts as $post)
            <li><a href="/posts/{{ $post-> id }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>
</x-layout>