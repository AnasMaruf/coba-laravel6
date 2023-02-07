@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-md-8">
            <h1>{{ $post->title }}</h1>
            <a class="text-decoration-none btn btn-success mb-3" href="/dashboard/posts"><span data-feather="arrow-left"></span> Back to all posts</a>
            @if($post->image)
            <div style="max-height:350px; overflow:hidden">
                <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top img-fluid mb-3" alt="{{ $post->category->name }}">
            </div>
            @endif
            {!!$post->body!!}
        </div>
    </div>
</div>
@endsection