@extends('layouts.main')
@section('content')


<div class="content">
<div class="container-fluid">
   <div class="row">
      <div class="col-md-offset-3 col-md-6">
         <div class="card">
            <form  action="{{ route('tags.store') }}" method="post">
               {{ csrf_field() }}
               <div class="card-header card-header-icon" data-background-color="purple">
                  <i class="material-icons">loupe</i> 
               </div>
               <div class="card-content">
                  <h4 class="card-title">Create Tag</h4>
                  <div class="form-group label-floating" >
                     <label class="control-label">value </label>
                     <input class="form-control" id="value" name="value" type="text"  required="true" />
                     <div class="text-center">
                        <button type="submit" class="btn btn-primary">Add Tag</button>
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

