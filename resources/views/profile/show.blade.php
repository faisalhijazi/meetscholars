@extends('layouts.app')

@section('title',$user->name)


@section('content')
<section class="profile">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <ul class="list-group">
          <li class="list-group-item"><strong>{{ $user->name}}</strong> </li>
          <li class="list-group-item">{{ (isset($user->about->phone)) ? $user->about->phone : ''}}</li>
          <li class="list-group-item">{{ (isset($user->about->about)) ? $user->about->about : ''}}</li>
        </ul>
      </div>
      <div class="col-md-8">
        <h3>Scholarships Posts</h3>
        <hr>
        <div class="row">
          <div class="col-md-6">
            <a href="#" class="post">
              <div class="post-img">
                <img src="{{url('frontend/img/img2.jpg')}}" class="img-responsive" alt="">
              </div>
              <div class="post-content">
                <h3>This is The post Title </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>
            </a>
          </div>
          <div class="col-md-6">
            <a href="#" class="post">
              <div class="post-img">
                <img src="{{url('frontend/img/img1.jpg')}}" class="img-responsive" alt="">
              </div>
              <div class="post-content">
                <h3>This is The post Title </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>
            </a>
          </div>
          <div class="col-md-6">
            <a href="#" class="post">
              <div class="post-img">
                <img src="{{url('frontend/img/img4.jpg')}}" class="img-responsive" alt="">
              </div>
              <div class="post-content">
                <h3>This is The post Title </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>
            </a>
          </div>
          <div class="col-md-6">
            <a href="#" class="post">
              <div class="post-img">
                <img src="{{url('frontend/img/img5.jpg')}}" class="img-responsive" alt="">
              </div>
              <div class="post-content">
                <h3>This is The post Title </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>
            </a>
          </div>
        </div>


      </div>
    </div>
  </div>
</section>
@endsection
