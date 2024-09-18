@extends('dashboard.layouts.main')

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
<a href="/dashboard/posts"> <-Back to My Post</a>

@endsection