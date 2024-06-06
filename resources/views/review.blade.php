@extends('layouts.app')
@section('style')
@endsection
@section('content')

<div class="hero overlay inner-page bg-primary py-5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center pt-5">
        <div class="col-lg-6">
          <h1 class="heading text-white mb-3" data-aos="fade-up">
            @if(!empty($header_title))
            {{ $header_title }}
            @else
            Blogs
            @endif
          </h1>
        </div>
      </div>
    </div>
  </div>

  <div class="section search-result-wrap">
    <div class="container">
      
      <div class="row posts-entry">
        <div class="col-lg-8">

          @foreach($getRecord as $value)
          <div class="blog-entry d-flex blog-entry-search-item">
            <a href="{{ url($value->slug) }}" class="img-link me-4">
              <img src="{{ $value->getImage() }}" style="height: 233px; width: 100%;object-fit : cover;" alt="Image" class="img-fluid">
            </a>
            <div>
              <span class="date">{{ $value->created_at->format('M d, Y') }} &bullet; <a href="{{ url($value->category_slug) }}">{{ $value->category_name }}</a></span>
              <h2><a href="{{ url($value->slug) }}">{!! strip_tags(Str::substr($value->title,0,65)) !!}</a></h2>
              <p>{!! strip_tags(Str::substr($value->description,0,65)) !!}...</p>
              <p><strong>Author:</strong> {{ $value->user_name }} </p>
              <p><a href="{{ url($value->slug) }}" class="btn btn-sm btn-outline-primary">Read More</a></p>
            </div>
          </div>
          @endforeach

          <div class="row text-start pt-5 border-top">
            <div class="col-md-12">
            {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
            </div>
          </div>
        </div>

        <div class="col-lg-4 sidebar">

          <div class="sidebar-box search-form-wrap mb-4">
            <form action="{{ url('review') }}" method="get" class="sidebar-search-form">
              <input type="text" class="form-control" name="q" id="s" placeholder="Type a keyword and hit enter">
            </form>
          </div>
         
          <!-- END sidebar-box -->

          <div class="sidebar-box">
            <h3 class="heading">Categories</h3>
            <ul class="categories">
            @foreach($getCategory as $category)
              <li><a href="{{ url($category->slug) }}">{{$category->name}} <span>{{$category->totalReviews()}}</span></a></li>
            @endforeach
            </ul>
          </div>
          <!-- END sidebar-box -->

          <div class="sidebar-box">
            <h3 class="heading">Tags</h3>
            <ul class="tags">
            @foreach($getRecord as $value)
                @foreach($value->getTag as $tag)
                    <li><a href="{{ url('review?q='.$tag->name) }}">{{ $tag->name }}</a></li>
                @endforeach
            @endforeach
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>


@endsection
@section('script')
@endsection