@extends('layouts.app')

@section('title' , 'Register')
@section('content')
<section class="auth">
  <div class="container">
      <div class="row">
          <div class="col-md-offset-3 col-md-6 col-md-offset-3">
              <div class="card">
                  <div class="card-header">Register</div>
                  @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                      <div class="alert alert-danger">
                          <strong>{{ $error }}</strong>
                      </div>
                    @endforeach
                  @endif
                  <div class="card-body">
                      <form method="POST" action="{{ route('register') }}">
                          @csrf

                          <div class="form-group">
                              <label for="name" >Full Name</label>
                              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                          </div>

                          <div class="form-group">
                              <label for="email" >Email Address</label>
                              <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                          </div>

                          <div class="form-group">
                              <label for="password">Password</label>
                              <input id="password" type="password" class="form-control" name="password" required>
                          </div>

                          <div class="form-group">
                              <label for="password-confirm">Confirm Password</label>
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                          </div>

                          <div class="form-group">
                            <label for="role">Role</label><br>
                            <input type="radio" name="role" value="0"> Student
                            <input type="radio" name="role" value="1"> Mentor
                          </div>

                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      Register
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection
