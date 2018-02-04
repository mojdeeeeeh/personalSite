@extends('layouts.main2')

@section('content')
            <!--   you can change the color of the filter page using: data-color="blue | green | orange | red | purple" -->
            <div class="content">
                <form class="form-horizontal" method="POST" action="{{ url('lock') }}">
               {{ csrf_field() }}
                    <div class="card card-profile card-hidden">
                        <div class="card-avatar">
                            <a href="#pablo">
                                <img class="avatar" src="{{ asset('theme/img/faces/avatar.jpg') }}" alt="...">
                            </a>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title"> {{ Auth::user()->name }}</h4>
                            <div class="form-group label-floating{{ $errors->has('password') ? ' has-error' : '' }}" >
                                <label class="control-label">Enter Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required autofocus>
                                      @if ($errors->has('password'))
                                          <span class="help-block">
                                             <strong>{{ $errors->first('password') }}</strong>
                                          </span>
                                      @endif
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-rose btn-round">Unlock</button>
                        </div>
                    </div>
                </form>
            </div>
            @endsection

