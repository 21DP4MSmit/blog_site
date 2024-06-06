@extends('backend.layouts.app')

@section('style')
    <!-- Add your custom styles here -->
@endsection

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
    </div>

    <div class="filler-content">
        <p>Welcome to the dashboard! You can navigate to different sections:</p>
        <ul>
            @if(Auth::user()->is_admin == 1)
            <li><a href="{{ url('panel/user/list') }}">Users</a></li>
            @endif
            @if(Auth::user()->is_admin == 1)
            <li><a href="{{ url('panel/category/list') }}">Category</a></li>
            @endif
            <li><a href="{{ url('panel/reviews/list') }}">Blogs</a></li>
            @if(Auth::user()->is_admin == 1)
            <li><a href="{{ url('panel/page/list') }}">Page</a></li>
            @endif
            <li><a href="{{ url('panel/change-password') }}">Change Password</a></li>
        </ul>

        <p>Or go back to the main page:</p>
        <a href="{{ url('/') }}" class="btn btn-primary">Back to Main Page</a>
    </div>
@endsection

@section('script')
    <!-- Add your custom scripts here -->
@endsection
