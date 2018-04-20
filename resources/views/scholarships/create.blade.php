@extends('layouts.app')

@section('title','Booking now')


@section('content')
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-3 col-md-6 col-md-offset-3">
        <h3>{{ $user->name }} | Booking Form</h3>
        <form action="#" method="post">
          {{ csrf_field() }}

          <div class="form-group">
            <label>Message</label>
            <textarea name="message" rows="2" cols="80" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label>Intersts</label>
            <textarea name="interests" rows="2" cols="80" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label>Duration (Minuts)</label>
            <input type="number" name="duration" value="{{ old('duration')}}" class="form-control">
          </div>
          <div class="form-group">
            <a href="{{ url('room/12b')}}" class="btn btn-success">Book</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
