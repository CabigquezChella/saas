@extends('layout.Apage')
@section('content')


<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Study</b>Buddy</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Registration Page</p>

      <form action="{{route('register-user')}}" method="post" class="user">
                        {!! csrf_field() !!}
                        @if(Session::has('success'))
                        <div class= "alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div class= "alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                       
        <div class="input-group mb-3">
          <input id="name" type="text" class="form-control" placeholder=" Enter Full name" name="name" value="{{old('name')}}">
          <div class="input-group-append">
            <div class="inpsut-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="email" type="email" class="form-control" placeholder=" Enter Email Address" name="email" value="{{old('email')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="password" type="password" class="form-control" placeholder="Password " name="password" value="{{old('password')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        
          <!-- /.col -->
          <div class="input-group mb-3">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     

      <a href="{{ url('/login')}}"  class="text-center">Already Have an Account</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
@endsection