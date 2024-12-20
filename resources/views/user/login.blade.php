@extends('user.master')

@section('title', 'LMS - Login')

@section('main')
    
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
    <div class="container">
      <div class="row align-items-end justify-content-center text-center">
        <div class="col-lg-7">
          <h2 class="mb-0">Login</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        </div>
      </div>
    </div>
  </div> 


<div class="custom-breadcrumns border-bottom">
  <div class="container">
    <a href="{{ route('home') }}">Home</a>
    <span class="mx-3 icon-keyboard_arrow_right"></span>
    <span class="current">Login</span>
  </div>
</div>

<div class="site-section">
    <div class="container">

      <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="email">Email<span style="color: red"> *</span></label>
                        @error('email')
                          <span>{{ $message }}</span>
                        @enderror
                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control form-control-lg" required>
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="password">Password<span style="color: red"> *</span></label>
                        <input type="password" id="password" name="password" class="form-control form-control-lg" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-5">
                        <input type="submit" value="Log In" class="btn btn-primary btn-lg px-5">
                      </div>
                      <div class="col-7">
                      @error('password')
                        <span style="color: red">{{ $message }}</span>
                      @enderror
                      </div>
                </div>
            </div>
        </div>
      </form> 

      
    </div>
</div>

@endsection