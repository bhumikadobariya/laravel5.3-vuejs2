@extends('layouts.app')

@section('content')
<div>
  <a class="hiddenanchor" id="signup"></a>
  <a class="hiddenanchor" id="signin"></a>

  <div class="login_wrapper">
    <div class="animate form login_form">
      <section class="login_content">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
          {{ csrf_field() }}
          <h1>Login Form</h1>
          <div>
            <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

          </div>

          <div>
            <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

          </div>

          <div>
            <a ><button type="submit" class="btn btn-default submit">Login</button></a>
            <!-- <a class="btn btn-default submit" href="index.html">Log in</a> -->
            <a class="reset_pass" href="#">Lost your password?</a>
          </div>

          <div class="clearfix"></div>

          <div class="separator">
            <p class="change_link">New to site?
              <a href="{{ url('/register') }}" class="to_register"> Create Account </a>
              <!-- <a href="#signup" class="to_register"> Create Account </a> -->
            </p>

            <div class="clearfix"></div>
            <br />

            <div>
              <h1><i class="fa fa-paw"></i> {{ config('app.name', 'Laravel') }}</h1>
              <p>©2017 All Rights Reserved. Privacy and Terms</p>
            </div>
          </div>
        </form>
      </section>
    </div>


  </div>
</div>
@endsection


@section('script')
<script>$('body').addClass('login')</script>
@endsection
