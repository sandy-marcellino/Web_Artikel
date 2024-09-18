
@extends('layouts/main')

@section('container')
<article>
    <h1> {{ $post->title }} </h1>

    <h6>By 
        <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">
            {{ $post->author->name }}
        </a> 
        in 
        <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->nama }} 
        </a>
    </h6>
    {!! $post->body !!}

</article>
<a href="/blog"> <-Back to blog</a>
@endsection

{{-- App\Models\Post::create([
    'title' => 'Judul Ketiga',
    'slug' => 'judul-ketiga',
    'excerpt' => 'Lorem ipsum ketiga',
    'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi porro explicabo sed dolore ratione, fuga nisi odit ullam animi eius voluptatum ut, quia voluptates unde repudiandae iste quibusdam, quos quo error magnam praesentium dolorem veniam enim.</p> <p>Fugit dolorum saepe nulla, illo praesentium repellendus cum debitis doloremque dolore ratione veritatis commodi illum facere qui, veniam mollitia possimus, officiis aperiam. Quia, recusandae eius dolorem id omnis saepe officia corrupti, ducimus, neque amet dolor. Sint quasi quam saepe debitis quibusdam odio velit, beatae, repudiandae culpa doloribus expedita, fugiat explicabo iure ab?</p> <p>Qui quam earum deleniti doloribus, doloremque dicta incidunt mollitia, eius ullam similique assumenda magni facilis necessitatibus tempora placeat, eveniet ex iure eligendi blanditiis debitis? Sit nisi quo numquam perspiciatis tempore non praesentium.</p>'
]) --}}