@extends('user.master')

@section('title', 'LMS - Course-Detail')

@section('main')

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" 
style="background-image: url({{ asset('images/bg_1.jpg') }})">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-7">
          <h2 class="mb-0">{{ $courseData['title'] }}</h2>
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
    <span class="current">{{ $courseData['title'] }}</span>
  </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <p>
                    <img src="{{ asset('uploads/'. $courseData['avatar']) }}" alt="Image" class="img-fluid">
                </p>
            </div>
            <div class="col-lg-8 ml-auto mb-5 align-self-center">
                <h2 class="section-title-underline mb-5">
                    <span>Course Details</span>
                </h2>
                
                <p><strong class="text-black d-block" id="success">Instructor:</strong> 
                  {{ $courseData['instructor'] }}
                </p>
                <p>
                  <strong class="text-black d-block">Duration:</strong> 
                  {{ calculateDuration($courseData['date_start'], $courseData['date_end']) }}
                </p>
                <p>
                  <strong class="text-black d-block">Date:</strong> 
                  {{ formatDate($courseData['date_start'], 'Y M d') }} &mdash; {{ formatDate($courseData['date_end'], 'Y M d') }}
                </p>
                <p class="mb-5">
                  <strong class="text-black d-block">Hours:</strong> 
                  {{ formatDate($courseData['hour_start'], 'H:i') }} &mdash; {{ formatDate($courseData['hour_end'], 'H:i') }}
                </p>
                <p>
                  {!! $courseData['description'] !!}
                </p>

                {{-- <ul class="ul-check primary list-unstyled mb-5">
                    <li>Lorem ipsum dolor sit amet consectetur</li>
                    <li>consectetur adipisicing  </li>
                    <li>Sit dolor repellat esse</li>
                    <li>Necessitatibus</li>
                    <li>Sed necessitatibus itaque </li>
                </ul> --}}

                <p>
                    {{-- Conditionally show Enroll or Edit button --}}
                    <!-- If user is not logged in -->
                    @if (!Auth::guard('user')->check())  
                        <a href="{{ route('login') }}" class="btn btn-primary rounded-0 btn-lg px-5">Enroll</a>

                    @elseif ($courseData['isEnrolled'])

                        @if ($courseData['enrollmentStatus'] == 0)
                            <span class="btn btn-secondary rounded-1 btn-lg px-5">Pending approval</span> 
                            <!-- Show "Pending approval" -->

                        @elseif ($courseData['enrollmentStatus'] == 1)
                            <!-- No button, enrollment status accepted. -->
                        @endif
                        
                    @elseif ($courseData['isInstructor'] && Auth::guard('user')->user()->hasRole('Instructor'))
                    <a href="{{ url('/admin/courses/' . $courseData['id'] . '/edit') }}" class="btn btn-primary rounded-0 btn-lg px-5">Edit</a>
                    
                    @elseif (!$courseData['isEnrolled'])
                        <button id="enrollBtn" class="btn btn-primary rounded-0 btn-lg px-5">Enroll</button>
                    @endif
                </p>

                <form id="enrollForm" action="{{ route('enroll.submit') }}" method="POST" style="display: none;">
                  @csrf
                  <input type="hidden" name="course_id" value="{{ $courseData['id'] }}">
                  <button type="submit" id="submitEnroll" class="d-none"></button>
                </form>

                @if (session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif

            </div>
    
            @if ($courseData['isEnrolled'] && $courseData['enrollmentStatus'] == 1 || $courseData['isInstructor'] && Auth::guard('user')->user()->hasRole('Instructor'))
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
          @endif
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
  document.getElementById('enrollBtn').addEventListener('click', function() {
      document.getElementById('submitEnroll').click(); // Trigger the hidden form submit
  });
</script>
@endpush