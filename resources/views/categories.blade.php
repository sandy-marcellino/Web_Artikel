@extends('layouts/main')

@section('container')
    <h1 class="mb-5">Post Categories</h1>

    <div class="container">
        <div class="row">
            @foreach($categories as $category)
            <div class="col-md-4 text-center">
                <a href="/blog?category={{ $category->slug }}" class="text-decoration-none">
                    <div class="card text-bg-dark">
                        <img src="https://images.all-free-download.com/images/graphicwebp/ford_fairlane_zb_500_516881.webp" class="card-img" alt="...">
                        <div class="card-img-overlay d-flex align-items-center">
                        <h2 class="card-title text-center flex-fill" style="">{{ $category->nama }}</h2>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>


    @foreach ($categories as $category)
        <ul>
            <li>
                <h2> 
                    <a href="/blog?category={{ $category->slug }}">{{ $category->nama }} </a>
                </h2>
            </li>
        </ul>
    @endforeach    

@endsection
{{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro labore eius perspiciatis, ipsa dolor culpa debitis odit! Incidunt deleniti cum quod, ullam dicta libero aut officia voluptatum ipsam, saepe delectus enim, perferendis minus laborum. Quis, modi architecto nesciunt rerum voluptates animi inventore sapiente perspiciatis et, assumenda impedit.</p> <p>Earum expedita saepe quibusdam molestias similique, repellat fugiat! Et libero ad minus provident excepturi quo rerum voluptatem tempore commodi doloribus aperiam veniam itaque odio aliquam assumenda, magni voluptatum quidem, a, perferendis dolorum dolores sapiente.</p> <p>Explicabo, iusto cumque? Nisi possimus perferendis eum, temporibus ipsa atque quibusdam rerum culpa odio quo illum optio nobis veniam.</p>
Post::create([
        'title' => 'Judul Ketiga',
        'category_id' => 3,
        'slug' => 'judul-ketiga',
        'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro labore eius perspiciatis, ipsa dolor culpa debitis odit!',
        'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro labore eius perspiciatis, ipsa dolor culpa debitis odit! Incidunt deleniti cum quod, ullam dicta libero aut officia voluptatum ipsam, saepe delectus enim, perferendis minus laborum. Quis, modi architecto nesciunt rerum voluptates animi inventore sapiente perspiciatis et, assumenda impedit.</p> <p>Earum expedita saepe quibusdam molestias similique, repellat fugiat! Et libero ad minus provident excepturi quo rerum voluptatem tempore commodi doloribus aperiam veniam itaque odio aliquam assumenda, magni voluptatum quidem, a, perferendis dolorum dolores sapiente.</p> <p>Explicabo, iusto cumque? Nisi possimus perferendis eum, temporibus ipsa atque quibusdam rerum culpa odio quo illum optio nobis veniam.</p>'
    ]) --}}