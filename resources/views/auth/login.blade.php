@extends('layouts.main2')
@section('content')

<div class="wrapper wrapper-full-page">
<div class="full-page login-page" filter-color="black" data-image="{{ asset('theme/img/login.jpeg') }}">
<!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
<div class="content">
   <div class="container">
      <div class="row">
         <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
               {{ csrf_field() }}
               <div class="card card-login card-hidden">
                  <div class="card-header text-center" data-background-color="rose">
                     <h4 class="card-title">Login</h4>
                  </div>
                  <div class="card-content">
                     <div class="input-group">
                        <span class="input-group-addon">
                        <i class="material-icons">email</i>
                        </span>
                        <div class="form-group label-floating{{ $errors->has('email') ? ' has-error' : '' }}">
                           <label class="control-label">Email address</label>
                           <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                           @if ($errors->has('email'))
                           <span class="help-block">
                           <strong>{{ $errors->first('email') }}</strong>
                           </span>
                           @endif
                        </div>
                     </div>
                     <div class="input-group">
                        <span class="input-group-addon">
                        <i class="material-icons">lock_outline</i>
                        </span>
                        <div class="form-group label-floating{{ $errors->has('password') ? ' has-error' : '' }}">
                           <label class="control-label">Password</label>
                           <input id="password" type="password" class="form-control" name="password" required>
                           @if ($errors->has('password'))
                           <span class="help-block">
                           <strong>{{ $errors->first('password') }}</strong>
                           </span>
                           @endif
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                           <label>
                           <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">
                        Login
                        </button>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                        Forgot Your Password?
                        </a>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection

