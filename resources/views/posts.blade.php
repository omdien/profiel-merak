@extends('layouts.main')

@section('container')
<h1 class="mb-5">Halaman Blog Post</h1>
<article class="mb-5">
    @foreach ($posts as $post)
    <h2><a href="/posts/{{ $post->id }}">
            {{ $post->title }}</a></h2>
    <p>{{ $post->excerpt }}</p>
    @endforeach
</article>
@endsection