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

        <div class="form-group" style="padding: 10px">
           <label for="title">title</label>
           <div>
            <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}">
          </div>
        </div>

      <div class="form-group" style="padding: 10px">
        <label for="title">brief</label>
        <div>
          <textarea id="brief" name="brief" class="form-control">{{ old('brief') }}</textarea>
        </div>
      </div>

      <div class="form-group" style="padding: 10px">
        <label for="title">body</label>
        <div>
          <textarea id="bodyTextArea" name="body" class="ckeditor">{!! old('body') !!}</textarea>
        </div>
      </div>
      
      <div class="form-group" style="padding: 10px">
       <button type="submit" class="btn btn-primary">Add note</button>
     </div>

   </form>

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
