@extends('layouts.main')
@section('content')


<div class="content">
<div class="container-fluid">
   <div class="row">
      <div class="col-md-offset-3 col-md-6">

         <div class="card">
            <form  action="{{ url("tags/$tag->id") }}" method="post">
               {{method_field('PATCH')}}
               {{ csrf_field() }}
               <div class="card-header card-header-icon" data-background-color="purple">
                  <i class="material-icons">loupe</i> 
               </div>
               <div class="card-content">
                  <h4 class="card-title">Edit Tag</h4>
                  <div class="form-group label-floating" >
                     <label class="control-label">value </label>
                     <input class="form-control" id="value" name="value" type="text"  required="true"  value="{{ $tag->value }}" />
                     <div class="text-center">
                        <button type="submit" class="btn btn-primary">Edit Tag</button>
                        <a href="{{ route('tags.index') }}" class="btn btn-info">back</a>
                     </div>
                  </div>
            </form>
            @if(count($errors))
            <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            @endif
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

