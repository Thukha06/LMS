@extends('user.master')

@section('title', 'LMS - About Us')

@section('main')
    
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-7">
          <h2 class="mb-0">About Us</h2>
        </div>
      </div>
    </div>
  </div> 


<div class="custom-breadcrumns border-bottom">
  <div class="container">
    <a href="#">Home</a>
    <span class="mx-3 icon-keyboard_arrow_right"></span>
    <span class="current">About Us</span>
  </div>
</div>

<div class="container pt-5 mb-5">
  <div class="row">
    <div class="col-lg-4">
      <h2 class="section-title-underline">
        <span>LMS History</span>
      </h2>
    </div>
    <div class="col-lg-4">
      <p>A detailed overview of the Learning Management System's progression, showcasing its origins, key advancements, and contributions to the field of education.</p>
    </div>
    <div class="col-lg-4">
      <p>It highlights significant features, milestones, and how the system has adapted to meet evolving educational needs over time.</p>
    </div>
  </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <img src="images/course_4.jpg" alt="Image" class="img-fluid"> 
            </div>
            <div class="col-lg-5 ml-auto align-self-center">
                <h2 class="section-title-underline mb-5">
                    <span>Why LMS Works</span>
                </h2>
                <p> Empowering educators and learners with a reliable, efficient, and user-friendly platform that enhances the learning experience, promotes collaboration, and drives academic success.</p>
                <p>Streamlining course management, improving engagement, and providing tools that support personalized learning outcomes for students and instructors alike.</p>
            </div>
        </div>

        <div class="row">
                <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                    <img src="images/course_5.jpg" alt="Image" class="img-fluid"> 
                </div>
                <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
                    <h2 class="section-title-underline mb-5">
                        <span>Personalized Learning</span>
                    </h2>
                    <p>Tailoring education to individual needs, enabling students to learn at their own pace and reach their full potential.</p>
                    <p>Fostering deeper engagement and better outcomes through customized learning paths.</p>
                </div>
            </div>
    </div>
</div>

<div class="section-bg style-1" style="background-image: url('images/about_1.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <h2 class="section-title-underline style-2">
          <span>About Our University</span>
        </h2>
      </div>
      <div class="col-lg-8">
        <p class="lead">We are dedicated to advancing education through innovative technology and personalized learning solutions.</p>
        <p>Our mission is to empower educators and students by providing reliable, user-friendly tools that enhance the learning experience and promote academic success. With a focus on quality and accessibility, we strive to create a supportive environment where learners can thrive and achieve their goals.</p>
        <p><a href="#">Read more</a></p>
      </div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row mb-5 justify-content-center text-center">
      <div class="col-lg-4 mb-5">
        <h2 class="section-title-underline mb-5">
          <span>Our Teachers</span>
        </h2>
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

<div class="section-bg style-1" style="background-image: url({{ asset('images/hero_1.jpg') }});">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
        <span class="icon flaticon-mortarboard"></span>
        <h3>Our Philosphy</h3>
        <p>Empowering education through innovation, accessibility, and a commitment to lifelong learning, fostering growth and success for every individual.</p>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
        <span class="icon flaticon-school-material"></span>
        <h3>Academics Principle</h3>
        <p>Upholding integrity, quality, and inclusivity, ensuring a supportive environment that encourages academic achievement and personal development.</p>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
        <span class="icon flaticon-library"></span>
        <h3>Key of Success</h3>
        <p>Cultivating a foundation of knowledge, skills, and perseverance to achieve academic and personal milestones effectively.</p>
      </div>
    </div>
  </div>
</div>

@endsection