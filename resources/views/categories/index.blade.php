@extends('main_layouts.master')

@section('title','My blog | Home')

@section('content')

<div class="colorlib-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12 categories-col">

                @forelse($categories as $category)

                <div class="block-21 d-flex animate-box">
                    <a
                       href="{{ route('posts.show',$post->slug) }}"
                       class="blog-img">{{ $category->name }}</a>
                    <div class="text">
                        <h3 class="heading">
                            <a href="{{ route('posts.show',$post->slug) }}">{{ }}</a>
                        </h3>
                        <p>{{ $post->excerpt }}</p>
                        <div class="meta">
                            <div><a href="#"><span class="icon-calendar"></span>{{ $category->created_at->diffForHumans() }}</a></div>
                            <div><a href="#"><span class="icon-user2"></span> {{ $category->user->name }}</a></div>
                        </div>
                    </div>
                </div>
                @empty
                <p class="lead">There are no categories to show.</p>
                @endforelse


            </div>

        </div>
    </div>
</div>

@endsection