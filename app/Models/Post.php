<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public function __construct(
        public $date,
        public $title,
        public $slug,
        public $excerpt,
        public $body
    ) {}

    public static function all()
    {
        $files = File::files(resource_path('posts/'));

        return cache()->rememberForever('posts.all', fn() => collect($files)
            ->map(fn($file) => YamlFrontMatter::parseFile($file))
            ->map(fn($document) => new Post(
                $document->date,
                $document->title,
                $document->slug,
                $document->excerpt,
                $document->body()
            ))
            ->sortByDesc('date'));
    }

    public static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug);
    }
}
