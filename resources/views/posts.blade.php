<x-layout>
    <x-slot name="content">
        @foreach ($posts as $post)
            <article>
                <h1>
                    <a href="/posts/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                </h1>
                <p>
                    <a href="/categories/{{ $post->category->slug }}">{{ $post->category->title }}</a>
                </p>
                <h2>{{ $post->excerpt }}</h2>
            </article>
        @endforeach
    </x-slot>
</x-layout>
