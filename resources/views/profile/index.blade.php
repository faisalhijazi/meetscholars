@extends('layouts.app')

@section('title' , 'Monitors')

@section('content')
<section class="mentors">
  <div class="container">
    <h3>Scholarships Mentors</h3>
    <hr>
      @if (count($mentors) > 0)
        <div class="row">
          @foreach ($mentors as $mentor)
            <div class="col-md-3">
              <a href="{{ url('/user/'.$mentor->id)}}" class="user">
                <i class="fa fa-user"></i>
                <h3>{{ $mentor->name }}</h3>
                <p>{{ (isset($mentor->about->about)) ? $mentor->about->about : ''}}</p>
                <p class="rateing">
                  <span>★</span>
                  <span>★</span>
                  <span>★</span>
                  <span>★</span>
                  <span>★</span>
                </p>
              </a>
            </div>
          @endforeach
        </div>
        {{ $mentors->links() }}
      @endif
  </div>
</section>
@endsection
