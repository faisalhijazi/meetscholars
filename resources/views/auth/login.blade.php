@extends('layouts.app')

@section('title' , 'Login')
@section('content')
<section class="auth">
  <div class="container">
      <div class="row">
          <div class="col-md-offset-3 col-md-6 col-md-offset-3">
              <div class="card">
                  <div class="card-header">Login</div>
                  @if (count($errors))
                    @foreach ($errors->all() as $error)
                      <div class="alert alert-danger">
                        <strong>{{ $error}}</strong>
                      </div>
                    @endforeach
                  @endif
                  <div class="card-body">
                      <form method="POST" action="{{ route('login') }}">
                          @csrf

                          <div class="form-group">
                              <label for="email">Email Address</label>
                              <input id="email" type="email" class="form-control"  name="email" value="{{ old('email') }}" required autofocus>
                          </div>

                          <div class="form-group">
                              <label for="password" >Password</label>
                              <input id="password" type="password" class="form-control" name="password" required>
                          </div>

                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                      </label>
                                  </div>
                              </div>
                          </div>

                          <div class="form-group row mb-0">
                              <div class="col-md-8 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      Login
                                  </button>

                                  <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                  </a>
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
