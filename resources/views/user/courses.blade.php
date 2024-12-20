@extends('user.master')

@section('title', 'LMS - Courses')

@section('main')
    
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-7">
          <h2 class="mb-0">Courses</h2>
          <p>Offering comprehensive, structured learning paths designed to meet diverse educational needs and empower students to achieve their goals.</p>
        </div>
      </div>
    </div>
  </div> 


<div class="custom-breadcrumns border-bottom">
  <div class="container">
    <a href="{{ route('home') }}">Home</a>
    <span class="mx-3 icon-keyboard_arrow_right"></span>
    <span class="current">Courses</span>
  </div>
</div>

<div class="site-section" id="view">
  <div class="container">


    <div class="row mb-5 justify-content-center text-center">
      <div class="col-lg-6 mb-1">
        <h2 class="section-title-underline mb-3">
          <span>Popular Courses</span>
        </h2>
        <p>Explore in-demand, high-quality programs designed to enhance skills and knowledge for academic and professional success.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
          <div class="owl-slide-3 owl-carousel">
            @foreach ($courses as $course)
              <div class="course-1-item">
                <figure class="thumnail">
                  <div class="thumbnail-wrapper">
                    <a href="{{ route('course-detail', $course->slug)  }}">
                      <img src="uploads/{{ $course->avatar }}" alt="Image" class="img-fluid">
                    </a>
                  </div>
                  <div class="price">Free</div>
                  <div class="category"><h3>{{ $course->category->name }}</h3></div>  
                </figure>
                <div class="course-1-content pb-4">
                  <h2>{{ $course->title }}</h2>
                  <p class="desc mb-4">
                    {!! truncateWords($course->description, 13) !!}
                  </p>
                  <p>
                    <a href="{{ route('course-detail', $course->slug) }}" class="btn btn-primary rounded-0 px-4">
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
</div>

  @endsection