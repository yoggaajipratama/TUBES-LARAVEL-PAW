@extends('layouts.app')
@section('title','Lupa password');
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lupa password</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel-body">
                        <form action="{{ url('/lupa_password') }}" method="post">
                            {{ csrf_field() }}
                            
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-md btn-primary">Send Email</button>
                            </div>
                            @if(\Session::has('alert-failed'))
                                <div class="alert alert-failed">
                                    <div>{{Session::get('alert-failed')}}</div>
                                </div>
                            @endif
                            @if(\Session::has('alert-success'))
                                <div class="alert alert-success">
                                    <div>{{Session::get('alert-success')}}</div>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection