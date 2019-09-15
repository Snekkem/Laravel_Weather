@extends('layouts.app')
<style>
    .reviews-data {
        text-align: center;
        background: red;
        height:50px;
        width:50px;
    }
</style>
@section('content')
<div class="container">
    <div class="reviews-data">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection