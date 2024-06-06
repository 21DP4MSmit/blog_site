@extends('layouts.app')
@section('style')
@endsection
@section('content')

<div class="container" style="padding-top: 20px;">
    <div class="row justify-content-center" style="margin-top: 20px;">
        <div class="col-md-8">
            @include('layouts.message')
            <div class="post-entry text-center">
                <h1 class="mb-4">{{ $getRecord->title }}</h1>
                <div class="post-category mb-4">
                    <a href="{{ url($getRecord->category_slug) }}"><span class="badge bg-primary">{{ $getRecord->category_name }}</span></a>
                </div>

                <div class="post-meta align-items-center text-center">
                    <figure class="author-figure mb-0 me-3 d-inline-block">
                        <!-- @if($getRecord->user) -->
                            <img src="{{ $getRecord->user->getProfile() }}" alt="Image" class="img-fluid">
                        <!-- @else
                            <img src="{{ url('assets/img/profile-img.jpg') }}" alt="Default Profile Image" class="img-fluid">
                        @endif -->
                    </figure>
                    <span class="d-inline-block mt-1">by {{ $getRecord->user_name }}</span>
                    <span>&nbsp;-&nbsp; {{ $getRecord->created_at->format('M d, Y') }}</span>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 main-content">
                @if(!empty($getRecord->getImage()))
                    <div class="mb-4 text-center">
                        <img src="{{ $getRecord->getImage() }}" alt="Image placeholder" class="img-fluid rounded w-100 mb-4" style="max-height: 574px; width: auto; height: auto; object-fit: contain;">
                    </div>
                @else
                    <div class="mb-4 text-center">
                        <img src="{{ url('assets/img/default-review-img.jpg') }}" alt="Default Image" class="img-fluid rounded w-100 mb-4" style="max-height: 574px; width: auto; height: auto; object-fit: contain;">
                    </div>
                @endif
                {!! $getRecord->description !!}
            </div>

            <div class="pt-5 text-center">
                <p>Tags:  
                    @if(!empty($getRecord->getTag->count()))
                        @foreach($getRecord->getTag as $tag)
                            <a href="{{ url('review?q='.$tag->name) }}">{{ $tag->name }}</a>
                        @endforeach
                    @endif
                </p>
            </div>

            <div class="pt-5 comment-wrap">
                <h3 class="mb-5 heading">{{ $getRecord->getComment->count() }} Comments</h3>
                <ul class="comment-list">
                    @foreach($getRecord->getComment as $comment)
                        <li class="comment">
                            <div class="vcard">
                                @if($comment->user)
                                    <img src="{{ $comment->user->getProfile() }}" alt="Image placeholder">
                                @else
                                    <img src="{{ url('assets/img/default-profile-img.jpg') }}" alt="Default Profile Image">
                                @endif
                            </div>
                            <div class="comment-body">
                                <h3>{{ $comment->user ? $comment->user->name : 'Anonymous' }}</h3>
                                <div class="meta">{{ $comment->created_at->format('M d, Y H:i') }}</div>
                                <p>{{ $comment->comment }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <!-- END comment-list -->
                @if(Auth::check())
                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5 heading">Leave a comment</h3>
                        <form action="{{ url('review-comment-submit') }}" method="post" class="p-5 bg-light">
                            @csrf
                            <input type="hidden" name="review_id" value="{{ $getRecord->id }}">
                            <div class="form-group">
                                <label for="comment">Comment</label>
                                <textarea name="comment" id="comment" cols="30" rows="10" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                @else
                    <p class="text-center">Please <a href="{{ url('login') }}">login</a> to leave a comment.</p>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
