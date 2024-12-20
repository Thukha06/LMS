@extends('user.master')

@section('title', 'LMS - Teachers')

@section('main')
    
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-lg-7">
        <h2 class="mb-0">About Our Teachers</h2>
      </div>
    </div>
  </div>
</div> 


<div class="custom-breadcrumns border-bottom">
<div class="container">
  <a href="{{ route('home') }}">Home</a>
  <span class="mx-3 icon-keyboard_arrow_right"></span>
  <a href="{{ route('about') }}">About Us</a>
  <span class="mx-3 icon-keyboard_arrow_right"></span>
  <span class="current">Our Teachers</span>
</div>
</div>

<div class="site-section">
    <div class="container">
      <div class="row mb-5 justify-content-center text-center">
        <div class="col-lg-10 mb-5">
          <h2 class="section-title-underline mb-5">
            <span>Our Teachers</span>
          </h2>
          <p>Our teachers are highly qualified professionals committed to delivering quality education and fostering student success. They bring expertise, passion, and a dedication to creating engaging learning experiences tailored to meet the diverse needs of their students. Through continuous development and a focus on personalized instruction, our teachers empower students to achieve their full potential.</p>
        </div>
      </div>
      <div class="row">
        @foreach ($teachers as $teacher)
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
          <div class="feature-1 border person text-center">
              <img src="{{ $teacher->avatar }}" alt="Image" class="img-fluid">
            <div class="feature-1-content">
              <h2>{{ $teacher->name }}</h2>
              <span class="position mb-3 d-block">{{ $teacher->roles->first()?->name }}</span>    
              <p>{{ $teacher->description ?? 'User has not updated their infos yet.' }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

  @endsection