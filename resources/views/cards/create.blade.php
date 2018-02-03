@extends('layouts.main')

@section('content')
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="card">
            <div class="card-header" data-background-color="purple">
               <h4 class="title">create post</h4>
               <p class="category">Here is a subtitle for this table</p>
           </div>
           <div class="card-content table-responsive">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <form  action="{{ route('cards.store') }}" method="post" class="row">
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('title') ? "has-error" : "" }}" style="padding: 10px">
                           <label for="title">title</label>
                           <div>
                              <input type="text" id="title" name="title" class="form-control" />
                          </div>
                      </div>

                      <div class="form-group {{ $errors->has('brief') ? "has-error" : "" }}" style="padding: 10px">
                         <label for="brief">brief</label>
                         <div>
                            <input id="brief" name="brief" class="form-control" value="{{ old('brief', '') }}" />
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('body') ? "has-error" : "" }}" style="padding: 10px">
                       <label for="bodyTextArea">body</label>
                       <div>
                          <textarea id="bodyTextArea" name="body" class="ckeditor">{!! old('body', '') !!}</textarea>
                      </div>
                  </div>

                        {{-- <div class="form-group" style="padding: 30px">
                          <select name="tags[]" title="tags" class="form-control" multiple>
                            @foreach ($tags as $tag)
                              <option value="{{ $tag->id }}"> {{ $tag->value }} </option>
                            @endforeach
                          </select>
                      </div> --}}

                      <div class="row">
                          <div class="col-md-6">
                            <legend>Tags</legend>

                            <input type="text" value="{{ old('tags', '') }}" name="tags" 
                                class="form-control tagsinput" data-role="tagsinput" data-color="rose" />
                        </div>
                    </div>

                    <div class="form-group" style="padding: 10px">
                       <button type="submit" class="btn btn-primary">Add note</button>
                   </div>
               </form>

               @if(count($errors))
               <div class="alert alert-rose alert-with-icon" data-notify="container">
                  <i class="material-icons" data-notify="icon">notifications</i>
                  <button type="button" aria-hidden="true" class="close">
                    <i class="material-icons">close</i>
                  </button>

                  <span data-notify="message">
                    <ul>
                      @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                 </span>
                </div>
                @endif
      </div>

  </div>
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
</script>
@endsection

