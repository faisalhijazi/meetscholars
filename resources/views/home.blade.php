@extends('layouts.app')

@section('title' , 'Home')

@section('content')

<section class="scholar-home">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-3 col-md-6 col-md-offset-3">
        @if ($message = Session::get('success'))
          <div class="alert alert-success">
            <strong>{{ $message}}</strong>
          </div>
        @endif

        @if ($message = Session::get('error'))
          <div class="alert alert-danger">
            <strong>{{ $message}}</strong>
          </div>
        @endif
        @if (Auth::user()->role)
          @if(Auth::user()->status === 0)
            <div class="text-center">
              <h3>Plese Complate Your Profile</h3>
            </div>
            <form  action="{{ url('/about/store')}}" method="post">
              {{ csrf_field() }}
              <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" value="{{ old('phone')}}">
              </div>
              <div class="form-group">
                <label>Country</label>
                <select class="form-control" name="country">
                  <option value="">-----------</option>
                  <option value="1">United Status</option>
                  <option value="2">Palestine</option>
                  <option value="3">Egypt</option>
                  <option value="4">Suadi Arabia</option>
                  <option value="5">Afghanistan</option>
                  <option value="6">Antarctica</option>
                  <option value="7">Botswana</option>
                  <option value="8">Canada</option>
                </select>
              </div>
              <div class="form-group">
                <label>BIO</label>
                <textarea name="about" rows="3" cols="80" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" name="submit" class="btn btn-success">Save</button>
              </div>
            </form>
          @endif
        @endif
      </div>
    </div>
  </div>
</section>
@endsection
