@extends('layouts.main')
@section('content')


<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-offset-3 col-md-6">
            <div class="card">
               <div class="card-header card-header-icon" data-background-color="purple">
                  <i class="material-icons">hdr_weak</i>
               </div>
               <div class="card-content">
                  <h4 class="card-title">Tags</h4>
               </div>
               <div class="card-content table-responsive">
                  <table class="table table-hover">
                     <thead>
                        <th class="col-md-10">value</th>
                        <th class="col-md-2"></th>
                     </thead>
                     <tbody>
                        @foreach ($tags as $tag)
                        <tr>
                           <td> {{ $tag->value }} </td>
                           <td>
                              <a href="#" class="btn btn-danger" onclick="deleteRecord({{ $tag->id }})"> Delete</a>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  {{ $tags->links() }}
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
   function deleteRecord(id){
      if(confirm('are you sure?'))
      {
         let path = "/tags/" + id;
   
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

