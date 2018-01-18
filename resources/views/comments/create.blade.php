@extends('layouts.main2')

@section('content')
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-offset-2 col-md-8">
            <div class="card">
               <div class="card-header" data-background-color="purple">
                  <h4 class="title">{{ $card->title }}</h4>
               </div>
               <div class="card-content table-responsive">
                  {!! html_entity_decode(  $card->body ) !!}
                  <hr>
                  
                  <div class="panel-heading"></div>
                  <ul>
                           @foreach($card -> comments as $comment)
                              <li class="no-style">
                                 <h5>
                                    {{ $comment->cmName }}  
                                 </h5>
                                 
                                 <blockquote>
                                 {{ $comment->cmBody }} 
                                 </blockquote><label class="pull-right"> {{ $comment->created_at->diffForHumans() }} </label>
                                 <hr>
                              </li>
                           @endforeach
                  </ul>
               </div>
            </div>
            <div class="card">
               <div class="card-header" data-background-color="purple">
                  <h4 class="title">Comment</h4>
                  <p class="category"><i class="material-icons">speaker_notes</i></p>
               </div>
               <div class="card-content table-responsive">
                  <form action="/cards/{{ $card->id }}/comments" method="post" class="row">
                     {{ csrf_field() }}
                     <div class="form-group" style="padding: 10px">
                        <label for="title">comment</label>
                        <div>
                           <textarea id="cmBody" name="cmBody" class="form-control" value="{{ old('cmBody') }}"></textarea>
                        </div>
                     </div>
                     <div class="col-md-3 ">
                        <label for="title">Name</label>
                        <div>
                           <input type="text" id="cmName" name="cmName" class="form-control" value="{{ old('cmName') }}">
                        </div>
                     </div>
                     <div  style="padding: 10px" class="col-md-3 col-md-offset-1">
                        <label for="title">Email</label>
                        <div>
                           <input type="text" id="cmEmail" name="cmEmail" class="form-control" value="{{ old('cmEmail') }}">
                        </div>
                     </div>
                     <div style="padding: 10px" class="col-md-3 col-md-offset-1">
                        <label for="title"> &nbsp;</label>
                        <br>
                        <button type="submit" class="btn btn-primary">Add new comment</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

