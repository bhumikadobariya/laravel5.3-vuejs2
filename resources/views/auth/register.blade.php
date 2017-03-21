@extends('layouts.app')

@section('content')
<div>
  <a class="hiddenanchor" id="signup"></a>
  <a class="hiddenanchor" id="signin"></a>

  <div class="login_wrapper">
    <!-- <div id="register" class="animate form registration_form"> -->
      <section class="login_content">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
          {{ csrf_field() }}
          <h1>Create Account</h1>
          <div>
            <input id="name" type="text" class="form-control" name="name" placeholder="Username" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif

          </div>

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
            <input id="password-confirm" type="password" class="form-control" placeholder="Confirmation Password" name="password_confirmation" required>

          </div>

          <div>
            <a ><button type="submit" class="btn btn-default submit"> Submit </button></a>
          </div>

          <div class="clearfix"></div>

          <div class="separator">
            <p class="change_link">Already a member ?
              <!-- <a href="#signin" class="to_register"> Log in </a> -->
              <a href="{{ url('/login') }}" class="to_register"> Log in </a>
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
    <!-- </div> -->
  </div>
</div>
@endsection

@section('script')
<script>$('body').addClass('login')</script>
@endsection
