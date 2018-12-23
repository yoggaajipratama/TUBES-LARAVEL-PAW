@extends('layouts.app')
@section('title','Halaman Admin');
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel-body">
                        Anda adalah admin <br>
                        Nama  :  {{ Auth::user()->name }} <br>
                        Email : {{ Auth::user()->email }} <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
