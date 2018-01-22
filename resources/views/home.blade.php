

@extends('layouts.main')
@section('content')
{{-- 
<div class="container">
   <div class="row">
      <div class="col-md-8 col-md-offset-2">
         <div class="panel panel-default">
            <div class="panel-heading">Dashboard</div>
            <div class="panel-body">
               @if (session('status'))
               <div class="alert alert-success">
                  {{ session('status') }}
               </div>
               @endif
               You are logged in!
            </div>
         </div>
      </div>
   </div>
</div>
--}}
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-offset-2 col-md-8">
            <div class="card card-testimonial">
               <div class="icon">
                  <i class="material-icons">format_quote</i>
               </div>
               <div class="card-content">
                  <h5 class="card-description">
                     @if (session('status'))
                     <div class="alert alert-success">
                        {{ session('status') }}
                     </div>
                     @endif
                     You are logged in!
                  </h5>
               </div>
               <div class="footer">
                  <h4 class="card-title">{{ Auth::user()->name }}</h4>
                  <div class="card-avatar">
                     <a href="#pablo">
                     <img class="img" src="{{ asset('theme/img/faces/card-profile1-square.jpg') }}" />
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

