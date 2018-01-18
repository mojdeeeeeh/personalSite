@extends('layouts.main2')

@section('content')
            <!--   you can change the color of the filter page using: data-color="blue | green | orange | red | purple" -->
            <div class="content">
                <form method="#" action="#">
                    <div class="card card-profile card-hidden">
                        <div class="card-avatar">
                            <a href="#pablo">
                                <img class="avatar" src="{{ asset('img/faces/avatar.jpg') }}" alt="...">
                            </a>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">Tania Andrew</h4>
                            <div class="form-group label-floating">
                                <label class="control-label">Enter Password</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-rose btn-round">Unlock</button>
                        </div>
                    </div>
                </form>
            </div>
            @endsection
