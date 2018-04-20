@extends('layouts.app')

@section('title' , 'Monitors')

@section('content')
<section class="section">
  <div class="container">
    <h3>Scholarships Mentors</h3>
    <form  action="{{ url('search')}}" method="get">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Search</label>
            <input type="text" name="search" value="" class="form-control" required="required">
          </div>
        </div>
        <div class="col-md-6">
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
        </div>
      </div>
      <div class="form-group clearfix">
        <button type="submit" class="btn btn-danger pull-right">Search</button>
      </div>
    </form>
    <hr>
      @if (count($mentors) > 0)
        <div class="row">
          <div class="clearfix">
            @foreach ($mentors as $mentor)
              <div class="col-md-3">
                <div class="user">
                  <i class="fa fa-user"></i>
                  <h3>{{ $mentor->name }}</h3>
                  <p>{{ (isset($mentor->about->about)) ? str_limit($mentor->about->about,20) : ''}}</p>
                  <p class="rateing">
                    <span>★</span>
                    <span>★</span>
                    <span>★</span>
                    <span>★</span>
                    <span>★</span>
                  </p>
                  <a href="{{ url('book/'.$mentor->id.'/now')}}" class="btn btn-success">Book</a>
                  <a href="{{ url('/user/'.$mentor->id)}}" class="btn btn-primary">Profile</a>
                </div>
              </div>
            @endforeach
          </div>
        </div>
        {{ $mentors->links() }}
      @endif
  </div>
</section>
@endsection
