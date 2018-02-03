@extends('layouts.main2')

@section('content')
    <div class="content">
        <div class="container-fluid">
            
            <div class="header text-center">
                <h3 class="title" >Posts</h3>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-content">
                            <ul class="timeline">

                               {{-- POSTS --}}
                                @foreach ($cards as $index => $card)
                                <li class="{{ $index % 2 == 0 ? "timeline-inverted" : "" }}">
                                    <div class="timeline-badge info">
                                        <i class="material-icons">card_travel</i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <span class="label label-info">{{ $card->title }}</span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>{!! $card->brief !!}</p>
                                        </div>
                                      
                                        <h6>
                                            <i class="ti-time"></i> <label >{{ $card->created_at->diffForHumans() }}  </label>
                                            <a href="/cards/{{ $card->id }}" class="pull-right"> More </a>
                                        </h6>
                                    </div>
                                </li>
                                @endforeach
                                {{-- END: POSTS --}}

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
