@extends('layouts/main')

@section('container')

    <h1 class="text-center mb-3">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/blog">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-danger" type="submit">Search</button>
                  </div>
            </form>
        </div>
    </div>


    @if ($posts->count())
        <div class="card">
            @if ($posts[0]->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}">
                    </div>
            @else
                    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" alt="{{ $posts[0]->category->name }}">   
            @endif
            <h5 class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h5>
            <p>
                <small>
                By. <a class="text-decoration-none" href="/blog?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/blog?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
            </p>  
            </small>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>

            <a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read more</a>
            </div>
        </div>
   

    <div class="container">
            
        <div class="row">
        @foreach ($posts->skip(1) as $post)

            <div class="col-md-4 mb-3">
                <div class="card">
                    <div style="background-color: rgba(0, 0, 0, 0.7)" class="position-absolute px-3 py-2"><a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                    @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}">   
                    @endif
                    <div class="card-body text-center">
                    <h5 class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h5>
                    <p>
                        <small>
                        By. <a class="text-decoration-none" href="/blog?author={{ $post->author->username }}">{{ $post->author->name }}</a>  {{ $post->created_at->diffForHumans() }}
                    </p>  
                    </small>
                    <p class="card-text">{{ $post->excerpt }}</p>
        
                    <a class="text-decoration-none btn btn-primary" href="/posts/{{ $post->slug }}">Read more</a>
                    </div>
                </div>
            </div>

        @endforeach
        </div>
    </div>

    @else
    <p class="text-center fs-4">No post found.</p>
    @endif

    {{ $posts->links() }}

@endsection