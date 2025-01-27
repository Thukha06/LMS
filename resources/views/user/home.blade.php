@extends('user.master')

@section('title', 'LMS - Home')

@section('main')
    
<div class="hero-slide owl-carousel site-blocks-cover">
    <div class="intro-section" style="background-image: url('images/course_6.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
            <h1 class="mb-5">Welcome to Our LMS</h1>
            <a href="{{ route('courses') }}#view" class="btn btn-primary px-4 rounded-1">Enroll Now</a>
          </div>
        </div>
      </div>
    </div>

    <div class="intro-section" style="background-image: url('images/course_6.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
            <h1 class="mb-5">Explore a wide range of course</h1>
            <a href="{{ route('courses') }}#view" class="btn btn-primary px-4 rounded-1">Enroll Now</a>
          </div>
        </div>
      </div>
    </div>

    <div class="intro-section" style="background-image: url('images/course_6.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
            <h1 class="mb-5">Achive your learning goals</h1>
            <a href="{{ route('courses') }}#view" class="btn btn-primary px-4 rounded-1">Enroll Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  <div></div>

  <div class="site-section">
    <div class="container">
      <div class="row mb-5 justify-content-center text-center">
        <div class="col-lg-4 mb-5">
          <h2 class="section-title-underline mb-5">
            <span>Why Academics Works</span>
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">

          <div class="feature-1 border">
            <div class="icon-wrapper bg-primary">
              <span class="flaticon-mortarboard text-white"></span>
            </div>
            <div class="feature-1-content">
              <h2>Personalize Learning</h2>
              <p>Tailor educational experiences to meet individual student needs, preferences, and goals, enabling a more engaging and effective learning journey.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <div class="feature-1 border">
            <div class="icon-wrapper bg-primary">
              <span class="flaticon-school-material text-white"></span>
            </div>
            <div class="feature-1-content">
              <h2>Trusted Courses</h2>
              <p>Offer verified and high-quality educational content, ensuring learners access reliable resources and achieve their academic and professional objectives.</p>
            </div>
          </div> 
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <div class="feature-1 border">
            <div class="icon-wrapper bg-primary">
              <span class="flaticon-library text-white"></span>
            </div>
            <div class="feature-1-content">
              <h2>Tools for Students</h2>
              <p>Provide essential resources and technologies to support learning, and organization, empowering students to succeed in their educational journey.</p>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </div>

  <!-- // 05 - Block -->
{{-- <div class="site-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-4">
          <h2 class="section-title-underline">
            <span>Testimonials</span>
          </h2>
        </div>
      </div>


      <div class="owl-slide owl-carousel">

        <div class="ftco-testimonial-1">
          <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
            <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-3">
            <div>
              <h3>Allison Holmes</h3>
              <span>Designer</span>
            </div>
          </div>
          <div>
            <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!&rdquo;</p>
          </div>
        </div>

        <div class="ftco-testimonial-1">
          <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
            <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
            <div>
              <h3>Allison Holmes</h3>
              <span>Designer</span>
            </div>
          </div>
          <div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!</p>
          </div>
        </div>

        <div class="ftco-testimonial-1">
          <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
            <img src="images/person_4.jpg" alt="Image" class="img-fluid mr-3">
            <div>
              <h3>Allison Holmes</h3>
              <span>Designer</span>
            </div>
          </div>
          <div>
            <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!&rdquo;</p>
          </div>
        </div>

        <div class="ftco-testimonial-1">
          <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
            <img src="images/person_3.jpg" alt="Image" class="img-fluid mr-3">
            <div>
              <h3>Allison Holmes</h3>
              <span>Designer</span>
            </div>
          </div>
          <div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!</p>
          </div>
        </div>

        <div class="ftco-testimonial-1">
          <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
            <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
            <div>
              <h3>Allison Holmes</h3>
              <span>Designer</span>
            </div>
          </div>
          <div>
            <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!&rdquo;</p>
          </div>
        </div>

        <div class="ftco-testimonial-1">
          <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
            <img src="images/person_4.jpg" alt="Image" class="img-fluid mr-3">
            <div>
              <h3>Allison Holmes</h3>
              <span>Designer</span>
            </div>
          </div>
          <div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!</p>
          </div>
        </div>

      </div>
      
    </div>
  </div>
  
  
  <div class="news-updates">
    <div class="container">
       
      <div class="row">
        <div class="col-lg-9">
           <div class="section-heading">
            <h2 class="text-black">News &amp; Updates</h2>
            <a href="#">Read All News</a>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="post-entry-big">
                <a href="news-single.html" class="img-link"><img src="images/blog_large_1.jpg" alt="Image" class="img-fluid"></a>
                <div class="post-content">
                  <div class="post-meta"> 
                    <a href="#">June 6, 2019</a>
                    <span class="mx-1">/</span>
                    <a href="#">Admission</a>, <a href="#">Updates</a>
                  </div>
                  <h3 class="post-heading"><a href="news-single.html">Campus Camping and Learning Session</a></h3>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="post-entry-big horizontal d-flex mb-4">
                <a href="news-single.html" class="img-link mr-4"><img src="images/blog_1.jpg" alt="Image" class="img-fluid"></a>
                <div class="post-content">
                  <div class="post-meta">
                    <a href="#">June 6, 2019</a>
                    <span class="mx-1">/</span>
                    <a href="#">Admission</a>, <a href="#">Updates</a>
                  </div>
                  <h3 class="post-heading"><a href="news-single.html">Campus Camping and Learning Session</a></h3>
                </div>
              </div>

              <div class="post-entry-big horizontal d-flex mb-4">
                <a href="news-single.html" class="img-link mr-4"><img src="images/blog_2.jpg" alt="Image" class="img-fluid"></a>
                <div class="post-content">
                  <div class="post-meta">
                    <a href="#">June 6, 2019</a>
                    <span class="mx-1">/</span>
                    <a href="#">Admission</a>, <a href="#">Updates</a>
                  </div>
                  <h3 class="post-heading"><a href="news-single.html">Campus Camping and Learning Session</a></h3>
                </div>
              </div>

              <div class="post-entry-big horizontal d-flex mb-4">
                <a href="news-single.html" class="img-link mr-4"><img src="images/blog_1.jpg" alt="Image" class="img-fluid"></a>
                <div class="post-content">
                  <div class="post-meta">
                    <a href="#">June 6, 2019</a>
                    <span class="mx-1">/</span>
                    <a href="#">Admission</a>, <a href="#">Updates</a>
                  </div>
                  <h3 class="post-heading"><a href="news-single.html">Campus Camping and Learning Session</a></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="section-heading">
            <h2 class="text-black">Campus Videos</h2>
            <a href="#">View All Videos</a>
          </div>
          <a href="https://vimeo.com/45830194" class="video-1 mb-4" data-fancybox="" data-ratio="2">
            <span class="play">
              <span class="icon-play"></span>
            </span>
            <img src="images/course_5.jpg" alt="Image" class="img-fluid">
          </a>
          <a href="https://vimeo.com/45830194" class="video-1 mb-4" data-fancybox="" data-ratio="2">
              <span class="play">
                <span class="icon-play"></span>
              </span>
              <img src="images/course_5.jpg" alt="Image" class="img-fluid">
            </a>
        </div>
      </div>
    </div>
  </div> --}}

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