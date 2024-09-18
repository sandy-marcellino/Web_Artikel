@extends('layouts/main')

@section('container')
<h1 class="mb-3 text-center"> {{ $title }} </h1>

<div class="row mb-3">
    <div class="col-md-6" >
       
    </div>
    <div class="col-md-6" >
        <form action="/blog" method="GET">
            @if(request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if(request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3" style="float:right">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button class="btn btn-danger"  type="submit" >Search</button>
            </div>
        </form>
    </div>
</div>




@if($posts->count())

<div class="card mb-3 text-center">
    @if($posts[0]->image)
    
        <div style="max-height: 650px; overflow:hidden">
            <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->nama }}" class="img-fluid">
        </div>
    
    @else
    
        <img src="https://wallpaperaccess.com/full/1940051.jpg" class="img-fluid mt-3" alt="">
    
    @endif

    <div class="card-body ">
        <h3 class="card-title"><a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none">{{ $posts[0]->title }} </a></h3>
        <h6>
            <small class="text-muted">
            By 
            <a href="/blog?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a>  
            
            {{ $posts[0]->created_at->diffForHumans() }}
            </small>
        </h6>

        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <h6 class="mb-3">Category:
            <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->nama }} </a>
        </h6>
        <a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
        
    </div>
</div>


<div class="container">
    <div class="row">
        @foreach($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->nama }}" class="img-fluid">
                
                @else
                
                    <img src="https://wallpaperaccess.com/full/1940051.jpg" class="card-img-top" alt="">
                
                @endif
                <div class="card-body">
                    <h5 class="card-title"><a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }} </a></h5>
                    <small class="text-body-secondary">
                        By 
                        <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> 
                        {{ $post->created_at->diffForHumans() }}
                        </small>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <h6 class="mb-3">Category:
                        <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->nama }} </a>
                    </h6>
                    <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>

@else
    <p class="text-center fs-4">No Post Found</p>
@endif

<div class="d-flex justify-content-end">
    {{ $posts->links() }}
</div>

@endsection
{{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro labore eius perspiciatis, ipsa dolor culpa debitis odit! Incidunt deleniti cum quod, ullam dicta libero aut officia voluptatum ipsam, saepe delectus enim, perferendis minus laborum. Quis, modi architecto nesciunt rerum voluptates animi inventore sapiente perspiciatis et, assumenda impedit.</p> <p>Earum expedita saepe quibusdam molestias similique, repellat fugiat! Et libero ad minus provident excepturi quo rerum voluptatem tempore commodi doloribus aperiam veniam itaque odio aliquam assumenda, magni voluptatum quidem, a, perferendis dolorum dolores sapiente.</p> <p>Explicabo, iusto cumque? Nisi possimus perferendis eum, temporibus ipsa atque quibusdam rerum culpa odio quo illum optio nobis veniam.</p>
Post::create([
        'title' => 'Judul Ketiga',
        'category_id' => 3,
        'slug' => 'judul-ketiga',
        'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro labore eius perspiciatis, ipsa dolor culpa debitis odit!',
        'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro labore eius perspiciatis, ipsa dolor culpa debitis odit! Incidunt deleniti cum quod, ullam dicta libero aut officia voluptatum ipsam, saepe delectus enim, perferendis minus laborum. Quis, modi architecto nesciunt rerum voluptates animi inventore sapiente perspiciatis et, assumenda impedit.</p> <p>Earum expedita saepe quibusdam molestias similique, repellat fugiat! Et libero ad minus provident excepturi quo rerum voluptatem tempore commodi doloribus aperiam veniam itaque odio aliquam assumenda, magni voluptatum quidem, a, perferendis dolorum dolores sapiente.</p> <p>Explicabo, iusto cumque? Nisi possimus perferendis eum, temporibus ipsa atque quibusdam rerum culpa odio quo illum optio nobis veniam.</p>'
    ]) --}}