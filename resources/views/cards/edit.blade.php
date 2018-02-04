@extends('layouts.main')
@section('content')


<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header" data-background-color="purple">
                  <h4 class="title">Edit Post</h4>
                  <p class="category">Complete your post</p>
               </div>
               <div class="card-content">
                  <div>
                     <a href="{{ route('cards.index') }}" class="btn btn-info">back</a>
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
                         <label for="title">brief</label>
                        <div>
                           <textarea id="brief" name="brief" class="form-control">{{ $card->brief }}</textarea>
                        </div>
                     </div>
                     <div class="form-group" style="padding: 10px">
                        <label for="title">body</label>
                        <div>
                           <textarea id="bodyTextArea" name="body" class="ckeditor">{{ $card->body }}</textarea>
                        </div>
                     </div>

                     {{-- <div class="form-group" style="padding: 30px">
                          <select name="tags[]" title="tags" class="form-control" multiple>
                            @foreach ($tags as $tag)
                              <option 
                                @foreach ($card->tags as $card_tags)
                                  @if($tag->value == $card_tags->value)
                                     selected
                                  @endif
                                @endforeach
                               value="{{ $tag->id }}"> {{ $tag->value }} </option>
                            @endforeach
                          </select>
                        </div> --}}

                       <div class="row">
                          <div class="col-md-6">
                            <legend>Tags</legend>

                            <input type="text" value="{{ old('tags', $tags) }}" name="tags" 
                                class="form-control tagsinput" data-role="tagsinput" data-color="rose" />
                        </div>
                    </div>

                     <div class="form-group" style="padding: 10px">
                        <button type="submit" class="btn btn-primary">Edit note</button>
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
</div>
@endsection

@section('scripts')
<script type="text/javascript">
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
  CKEDITOR.replace( 'bodyTextArea', options );


   ClassicEditor
       .create( document.querySelector( '#body' ) )
       .catch( error => {
           console.error( error );
       } );
</script>
@endsection
