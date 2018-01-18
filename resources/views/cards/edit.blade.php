@extends('layouts.main')
@section('content')


<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-offset-1 col-md-10">
            <div class="card">
               <div class="card-header" data-background-color="purple">
                  <h4 class="title">Edit Post</h4>
                  <p class="category">Complete your post</p>
               </div>
               <div class="card-content">
                  <div>
                     <a href="{{ route('cards.index') }}" class="btn btn-primary">back</a>
                  </div>
                  <form method="POST" action='{{ url("cards/$card->id") }}' class="form-horizontal">
                     {{method_field('PATCH')}}
                     {{ csrf_field() }}
                     <div class="form-group" style="padding: 10px">
                        <label for="title">title</label>
                        <div>
                           <input type="text" id="title" name="title" class="form-control"  value="{{ $card->title }}">
                        </div>
                     </div>
                     <div class="form-group" style="padding: 10px">
                        <label for="title">body</label>
                        <div>
                           <textarea id="body" name="body" class="form-control">{{ $card->body }}</textarea>
                        </div>
                     </div>
                     <div class="form-group" style="padding: 10px">
                        <button type="submit" class="btn btn-primary">Edit note</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
   ClassicEditor
       .create( document.querySelector( '#body' ) )
       .catch( error => {
           console.error( error );
       } );
</script>
@endsection

