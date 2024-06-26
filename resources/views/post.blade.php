<x-layout>
    <x-slot name="content">
        <article>
            <h1>
                {{ $post->title }}
            </h1>
            <p>
                By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
                in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->title }}</a>
            </p>
            <h2>{{ $post->excerpt }}</h2>
            <div>
                {!! $post->body !!}
            </div>
        </article>
        <a href="/">Go back</a>
    </x-slot>
</x-layout>
