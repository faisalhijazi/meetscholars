@extends('layouts.app')

@section('title' , 'Monitors')

@section('content')
<section class="section">
  <div class="container">
    <h3>Scholarships Mentors</h3>
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
