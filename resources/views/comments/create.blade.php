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
               <div class="card-content table-responsive" style="padding-top: 3%">
                  {!! html_entity_decode(  $card->body ) !!}
                     @unless($card->tags->isEmpty())
                     <ul style="padding-top: 20px ">
                        <i class="material-icons">local_offer</i>Tag:
                        @foreach ($card->tags as $tag)
                        <li class="tag label label-info">{{ $tag->value }}</li>
                        @endforeach
                     </ul>
                     @endunless
                     <hr>
                     {{-- 
                     <div class="panel-heading"></div>
                     --}}

                     <ul>
                        @foreach($card->comments as $comment)
                        <li class="no-style">
                           <h5>
                              {{ $comment->cmName }}  
                           </h5>
                           <blockquote>
                              {{ $comment->cmBody }} 
                           </blockquote>
                           <label class="pull-right"> {{ $comment->created_at->diffForHumans() }} </label>
                           <hr>
                        </li>
                        @endforeach
                     </ul>
               </div>


               <!-- Trigger the modal with a button -->
               <div class="col-md-offset-5">
                  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">add comment
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@include('comments.createModal')

@endsection

@section('script')
  <script src="{{ asset('js/app.js') }}"></script>
  
  <script type="text/javascript">
  //    Vue.component('modal', {
  //   template: '#modal-template',
  //   props: ['show'],
  //   methods: {
  //     savePost: function () {
  //       // Some save logic goes here...
        
  //       this.$emit('close');
  //     }
  //   }
  // });

  // new Vue({
  //   el: '#app',
  //   data: {
  //     showModal: false
  //   },

  //   methods:{
  //     sendData(){
  //       alert('ok');
  //     }
  //   }
  // });
</script>
@endsection
