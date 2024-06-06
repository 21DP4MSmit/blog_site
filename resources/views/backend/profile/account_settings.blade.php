@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')

<section class="section">
      <div class="row">
        <div class="col-lg-12">
            @include('layouts.message')
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Account Settings</h5>

              <form class="row g-3" action ="{{ url('panel/account-settings') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Name</label>
                  <input type="text" class="form-control" value="{{ $getUser->name }}" name="name" required>
                </div>

                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Email</label>
                  <input type="text"  readonly class="form-control" value="{{ $getUser->email }}">
                </div>

                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Profile Picture</label>
                  <input type="file" class="form-control" name="profile_picture">
                  <img src="{{ $getUser->getProfile() }}" style="height: 100px;width: 100px;">
                </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Update Settings</button>
                </div>
              </form>
            </div>
          </div>
      </div>
    </section>

@endsection

@section('script')
@endsection
