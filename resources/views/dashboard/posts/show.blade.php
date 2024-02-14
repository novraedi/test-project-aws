@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2>{{ $post->title }}</h2>

                <a class="mb-3" href="/dashboard/posts" class="btn btn-success">back to my post</a>
                <a class="mb-3" href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post">
                    @csrf
                    @method('delete')
                    <button onclick="return confirm('are you sure?')">Delete</button>
                </form>

                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}">   
                @endif


                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>

@endsection