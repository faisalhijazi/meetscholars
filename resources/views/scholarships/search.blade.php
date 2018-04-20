@extends('layouts.app')

@section('title','name')

@section('content')
<section class="section">
  <div class="container">
    <h3>The Search Results for : <span class="text-success">{{ ($search) ? $search : ''}}</span> </h3>
    <hr>
    @if (count($results) > 0)
    <div class="row">
      @foreach ($results as $result)
        <div class="col-md-3">
          <div class="user">
            <i class="fa fa-user"></i>
            <h3>{{ $result->user->name }}</h3>
            <p>{{ (isset($result->user->about->about)) ? str_limit($result->user->about->about,20) : ''}}</p>
            <p class="rateing">
              <span>★</span>
              <span>★</span>
              <span>★</span>
              <span>★</span>
              <span>★</span>
            </p>
            <a href="{{ url('book/'.$result->user->id.'/now')}}" class="btn btn-success">Book</a>
            <a href="{{ url('/user/'.$result->user->id)}}" class="btn btn-primary">Profile</a>
          </div>
        </div>
      @endforeach
    </div>
    @else
      <div class="alert alert-danger">
        <strong>There is no results</strong>
      </div>
    @endif
  </div>
</section>
@endsection
