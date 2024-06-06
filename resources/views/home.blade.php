@extends('layouts.app')
@section('style')
<style>
    .latest-posts-heading {
        font-size: 28px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }
    .post-container {
        display: flex;
        flex-wrap: wrap;
    }
    .post {
        width: calc(50% - 15px);
        margin-right: 30px;
        margin-bottom: 30px;
    }
    .post:last-child {
        margin-right: 0;
    }
</style>
@endsection
@section('content')

<h1 class="latest-posts-heading">Latest Posts</h1>
<section class="section bg-light">
    <div class="container">
        <div class="row align-items-stretch retro-layout">
            <div class="col-md-12 post-container">
                @php $postCount = 0; @endphp
                @foreach($getRecord->sortByDesc('created_at') as $value)
                    @php $postCount++; @endphp
                    @if ($postCount > 6) @break @endif
                    <div class="post">
                        <a href="{{ url($value->slug) }}" class="h-entry mb-30 v-height gradient">
                            <div class="featured-img" style="background-image: url('{{ $value->getImage() }}');"></div>
                            <div class="text">
                                <span class="date">{{ $value->created_at->format('M d, Y') }}</span>
                                <h2>{!! strip_tags(Str::substr($value->title, 0, 65)) !!}</h2>
                            </div>
                        </a>
                    </div>
                    @if ($postCount % 2 == 0 && $postCount < 6)
                        </div><div class="col-md-12 post-container">
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
@section('script')
@endsection
