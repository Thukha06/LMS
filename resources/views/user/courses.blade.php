@extends('user.master')

@section('title', 'LMS - Courses')

@section('main')
    
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-7">
          <h2 class="mb-0">Courses</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
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

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-1-item">
                    <figure class="thumnail">
                    <a href="course-single.html"><img src="images/course_1.jpg" alt="Image" class="img-fluid"></a>
                    {{-- <div class="price">$99.00</div> --}}
                    <div class="category"><h3>Mobile Application</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                    <h2>How To Create Mobile Apps Using Ionic</h2>
                    <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                    <p><a href="{{ route('course-detail') }}" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

  @endsection