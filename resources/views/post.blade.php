<x-layout>
    <x-slot name="content">
        <article>
            <h1>
                {{ $post->title }}
            </h1>
            <h2>{{ $post->excerpt }}</h2>
            <div>
                {!! $post->body !!}
            </div>
        </article>
        <a href="/">Go back</a>
    </x-slot>
</x-layout>
