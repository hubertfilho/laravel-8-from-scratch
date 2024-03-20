<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/app.css">
        <title>Blog</title>
    </head>
    <body>
        <main>
            <?php foreach ($posts as $post) : ?>
                <article>
                    <h1>
                        <a href="posts/<?= $post->slug; ?>">
                            <?= $post->title; ?>
                        </a>
                    </h1>
                    <h2><?= $post->excerpt; ?></h2>
                </article>
            <?php endforeach;  ?>
        </main>
    </body>
</html>