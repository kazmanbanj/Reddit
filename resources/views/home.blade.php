@extends('layouts.app')

@section('content')
{{-- <div class="text-center">
    <h5><span class="badge badge-secondary">Views: {{ $visitorsCount }}</span></h5>
</div>
<br> --}}
<div class="card">
    <div class="card-header">Most Popular Posts</div>

    <div class="card-body">
    @foreach ($posts as $post)
        <div class="row">
            @livewire('post-votes', ['post' => $post])
            <div class="col-11">
                <a href="{{ route('communities.posts.show', [$post->id]) }}">
                    <h3>{{ $post->title }}</h3>
                </a>
                <p>{{ $post->created_at->diffForHumans() }}</p>
                <p>{{ \Illuminate\Support\Str::words($post->post_text, 10) }}</p>
            </div>
        </div>
        <hr>
        @endforeach
    </div>
</div>
@endsection
