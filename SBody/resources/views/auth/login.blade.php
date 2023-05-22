@extends('layout.Apage')
@section('content')

<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Studdy</b>Buddy</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{route('login-user')}}" method="post">
              {{-- <form class="user"> --}}
                {!! csrf_field() !!}
                @if(Session::has('success'))
                        <div class= "alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div class= "alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                <div class="input-group mb-3">
           <input type="email" class="form-control form-control-user" name="email"
                 id="email" aria-describedby="emailHelp"
                   placeholder=" Enter Email Address" value="{{old('email')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
                </div>
        
        <div class="input-group mb-3">
        <input type="password" class="form-control form-control-user" name="password"
              id="password" placeholder="Password" value="{{old('password')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
      
          <!-- /.col -->
          <div class="input-group mb-3">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>

          <a href="{{ url('/registration')}}"   class="text-center">Dont Have an Account</a>
          <!-- /.col -->
        </div>
      </form>

    
      <!-- /.social-auth-links -->

      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
@endsection