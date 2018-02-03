@extends('layouts.main2')
@section('content')


<div class="wrapper wrapper-full-page">
   <div class="full-page register-page" filter-color="black" data-image="../../assets/img/register.jpeg">
      <div class="container">
         <div class="row">
            <div class="col-md-10 col-md-offset-1">
               <div class="card card-signup">
                  <h2 class="card-title text-center">Register</h2>
                  <div class="row">
                     <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                     <form class="form" method="" action="">
                        <div class="card-content">
                           <div class="input-group{{ $errors->has('name') ? ' has-error' : '' }}" >
                              <span class="input-group-addon">
                              <i class="material-icons">face</i>
                              </span>
                              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="First Name...">
                              @if ($errors->has('name'))
                              <span class="help-block">
                              <strong>{{ $errors->first('name') }}</strong>
                              </span>
                              @endif
                           </div>
                           <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              <span class="input-group-addon"> 
                              <i class="material-icons">email</i>
                              </span>
                              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email...">
                              @if ($errors->has('email'))
                              <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                              </span>
                              @endif
                           </div>
                           <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                              <span class="input-group-addon">
                              <i class="material-icons">lock_outline</i>
                              </span>
                              <input id="password" type="password" class="form-control" name="password" required placeholder="Password...">
                              @if ($errors->has('password'))
                              <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                              </span>
                              @endif
                           </div>
                           <div class="input-group">
                              <span class="input-group-addon">
                              <i class="material-icons">lock</i>
                              </span>
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Comfirm Password...">
                           </div>
                        </div>
                        <!-- If you want to add a checkbox to this form, uncomment this code -->
                  </div>
                  <div class="form-group">
                  <div class="col-md-6 col-md-offset-5">
                  <button type="submit" class="btn btn-primary">
                  Register
                  </button>
                  </div>
                  </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

