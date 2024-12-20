@extends('user.master')

@section('title', 'LMS - Profile')

@section('main')

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-lg-7">
        <h2 class="mb-0">Profile</h2>
        {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p> --}}
      </div>
    </div>
  </div>
</div> 


<div class="custom-breadcrumns border-bottom">
<div class="container" id="view">
  <a href="{{ route('home') }}">Home</a>
  <span class="mx-3 icon-keyboard_arrow_right"></span>
  <span class="current">My Profile</span>
</div>
</div>

<div class="site-section">
    <div class="container">

          <div class="feature-1 border person text-center">
              <img src="{{ $profileData['avatar'] }}" alt="Image" class="img-fluid">
            <div class="feature-1-content">
              <h2>{{ $profileData['name'] }}</h2>
              <span class="position d-block">{{ $profileData['role_name'] }}</span>    
              <span class="position d-block">{{ $profileData['email'] }}</span>    
              <span class="position mb-3 d-block">
                {{ $profileData['phone_number'] ? '+'.$profileData['phone_number'] : 'No Phone Number Assigned.' }}
              </span>    
              <p id="view2">{{ $profileData['description'] }}</p>
            </div>
          </div>
      <div class="row mb-5 justify-content-center text-center">
        <div class="col-lg-4 mb-5">
          <h2 class="section-title-underline mb-5">
            <span>My Courses</span>
          </h2>
          @foreach ($myCourses as $myCourse)
            <div class="course-1-item">
              <figure class="thumnail">
                <div class="thumbnail-wrapper">
                  <a href="{{ route('course-detail', $myCourse->slug)  }}">
                    <img src="uploads/{{ $myCourse->avatar }}" alt="Image" class="img-fluid">
                  </a>
                </div>
                <div class="price">Free</div>
                <div class="category"><h3>{{ $myCourse->category->name }}</h3></div>  
              </figure>
              <div class="course-1-content pb-4">
                <h2>{{ $myCourse->title }}</h2>
                <p class="desc mb-4">
                  {!! truncateWords($myCourse->description, 13) !!}
                </p>
                <p>
                  <a href="{{ route('course-detail', $myCourse->slug) }}" class="btn btn-primary rounded-0 px-4">
                    View Detail
                  </a>
                </p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

  @endsection