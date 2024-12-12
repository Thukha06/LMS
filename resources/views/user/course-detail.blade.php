@extends('user.master')

@section('title', 'LMS - Course-Detail')

@section('main')

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-7">
          <h2 class="mb-0">How To Create Mobile Apps Using Ionic</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        </div>
      </div>
    </div>
  </div> 


<div class="custom-breadcrumns border-bottom">
  <div class="container">
    <a href="{{ route('home') }}">Home</a>
    <span class="mx-3 icon-keyboard_arrow_right"></span>
    <a href="{{ route('courses') }}">Courses</a>
    <span class="mx-3 icon-keyboard_arrow_right"></span>
    <span class="current">Courses</span>
  </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <p>
                    <img src="images/course_5.jpg" alt="Image" class="img-fluid">
                </p>
            </div>
            <div class="col-lg-8 ml-auto align-self-center">
                <h2 class="section-title-underline mb-5">
                    <span>Course Details</span>
                </h2>
                
                <p><strong class="text-black d-block">Teacher:</strong> Craig Daniel</p>
                <p class="mb-5"><strong class="text-black d-block">Hours:</strong> 8:00 am &mdash; 9:30am</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At itaque dolore libero corrupti! Itaque, delectus?</p>
                <p>Modi sit dolor repellat esse! Sed necessitatibus itaque libero odit placeat nesciunt, voluptatum totam facere.</p>

                <ul class="ul-check primary list-unstyled mb-5">
                    <li>Lorem ipsum dolor sit amet consectetur</li>
                    <li>consectetur adipisicing  </li>
                    <li>Sit dolor repellat esse</li>
                    <li>Necessitatibus</li>
                    <li>Sed necessitatibus itaque </li>
                </ul>

                <p>
                    <a href="#" class="btn btn-primary rounded-0 btn-lg px-5">Enroll</a>
                </p>

            </div>

            <div class="col-lg-12 col-md-12 mb-12">
              <div class="course-1-item">
                  <figure class="thumnail">
                  <div class="category"><h3>Module 1</h3></div>  
                  </figure>
                  <div class="course-1-content pb-4">
                  <h2>How To Create Mobile Apps Using Ionic</h2>
                  <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                  <p><a href="{{ route('module') }}" class="btn btn-primary rounded-0 px-4">View</a></p>
                  </div>
              </div>
          </div>
        </div>
    </div>
</div>

  @endsection