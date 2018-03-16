@extends('layouts.main')

@section('content')

 <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

    <form action='{{ url("upload") }}' method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="form-group">
     <label for="photo">File input</label>
     <input type="file" id="photo" name="photo">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


 </div>
</div>
</div>
</div>


@endsection

