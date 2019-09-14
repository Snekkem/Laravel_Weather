@extends('layouts.app')
<style>
    .success-feedback {
        font-size: 24px;
        font-weight: 600;
        color:grey;
    }
</style>
@section('content')
<div class="container">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
             @endif
            <div class="success-feedback">Thank you for your feedback!
               
            </div>
        </div>
    </div>
@endsection