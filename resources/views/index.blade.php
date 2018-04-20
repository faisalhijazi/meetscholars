@extends('layouts.app')

@section('title', 'Home')

@section('content')
<header>
  <div class="container">
    <div class="ibox">
      <h3>MeetScholars</h3>
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
    </div>



    <div class="row">
      <div class="col-md-6">
        <h3>Featured Scholarships</h3>
        <ul class="list-group">
          <li class="list-group-item"><a href="#">This Is Scholarships post Title</a></li>
          <li class="list-group-item"><a href="#">This Is Scholarships post Title</a></li>
          <li class="list-group-item"><a href="#">This Is Scholarships post Title</a></li>
          <li class="list-group-item"><a href="#">This Is Scholarships post Title</a></li>
        </ul>
        <a href="{{ url('/scholarships')}}" class="btn btn-success">More Scholarships</a>
      </div>
      <div class="col-md-6">
        <h3>Top Mentors</h3>
        <ul class="list-group">
          @if (isset($mentors))
            @foreach ($mentors as $mentor)
              <li class="list-group-item">
                <a href="{{ url('user/'.$mentor->id)}}">{{ $mentor->name}}</a> | {{ (isset($mentor->about->about)) ? str_limit($mentor->about->about,20) : ''}}
                <span class="rateing">
                  <span>★</span>
                  <span>★</span>
                  <span>★</span>
                  <span>★</span>
                  <span>★</span>
                </span>
              </li>
            @endforeach
          @endif
        </ul>
        <a href="{{ url('/mentors')}}" class="btn btn-success">More Mentors</a>
      </div>
    </div>
  </div>
</header>
@endsection

@push('scripts')
<script type="text/javascript">

</script>
@endpush
