@extends('user.master')

@section('title', 'LMS - Teachers')

@section('main')
    
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-lg-7">
        <h2 class="mb-0">About Us</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
      </div>
    </div>
  </div>
</div> 


<div class="custom-breadcrumns border-bottom">
<div class="container">
  <a href="{{ route('home') }}">Home</a>
  <span class="mx-3 icon-keyboard_arrow_right"></span>
  <span class="current">About Us</span>
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
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">

          <div class="feature-1 border person text-center">
              <img src="images/person_1.jpg" alt="Image" class="img-fluid">
            <div class="feature-1-content">
              <h2>Craig Daniel</h2>
              <span class="position mb-3 d-block">Math Teacher</span>    
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
          <div class="feature-1 border person text-center">
              <img src="images/person_2.jpg" alt="Image" class="img-fluid">
            <div class="feature-1-content">
              <h2>Taylor Simpson</h2>
              <span class="position mb-3 d-block">Math Teacher</span>    
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
          <div class="feature-1 border person text-center">
              <img src="images/person_3.jpg" alt="Image" class="img-fluid">
            <div class="feature-1-content">
              <h2>Jonas Tabble</h2>
              <span class="position mb-3 d-block">Math Teacher</span>    
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">

          <div class="feature-1 border person text-center">
              <img src="images/person_4.jpg" alt="Image" class="img-fluid">
            <div class="feature-1-content">
              <h2>Craig Daniel</h2>
              <span class="position mb-3 d-block">Math Teacher</span>    
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
          <div class="feature-1 border person text-center">
              <img src="images/person_2.jpg" alt="Image" class="img-fluid">
            <div class="feature-1-content">
              <h2>Taylor Simpson</h2>
              <span class="position mb-3 d-block">Math Teacher</span>    
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
          <div class="feature-1 border person text-center">
              <img src="images/person_3.jpg" alt="Image" class="img-fluid">
            <div class="feature-1-content">
              <h2>Jonas Tabble</h2>
              <span class="position mb-3 d-block">Math Teacher</span>    
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection