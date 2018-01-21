@extends('layouts.main')
@section('content')


<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
            {{-- 
            <div class="card card-plain">
               --}}
               <div class="card-header" data-background-color="purple">
                  <h4 class="title">Posts</h4>
                  <p class="category">mmm-yyy-aaa</p>
               </div>
               <div class="card-content table-responsive">
                  <table class="table table-hover">
                     <thead>
                        <th>title</th>
                        <th>body</th>
                        <th></th>
                     </thead>
                     <tbody>
                        @foreach ($cards as $card)
                        <tr>
                           <td> <a href="/cards/{{ $card->id }}"> {{ $card->title }} </a> </td>
                           <td> {!!html_entity_decode(  $card->body )!!} </td>
                           <td>
                              <a href="#" class="btn btn-danger" onclick="deleteRecord({{ $card->id }})"> Delete</a>
                              <a href="{{ url("/cards/$card->id/edit") }}" class="btn btn-primary">Modify</a>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  {{ $cards->links() }}
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
</div>

{{-- 
@endsection
@section('scripts') --}}
<script type="text/javascript">
   function deleteRecord(id){
      if(confirm('are you sure?'))
      {
         let path = "/cards/" + id;

         axios.delete(path)
         .then(function(res){
            location.reload();
         })
         .catch(function(res){
            alert(rest.message);
         });
      }
 }
</script>

@endsection
