@extends('layouts.app')
<style>
    .reviews-data {
        margin-left: auto;
        margin-right: auto;
        background: rgba(207, 128, 195, 0.5);
        height: 100%;
        width: 50%;
    }
 
    .rev-name {
        color: navy;
        font-size: 16px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .rev-message {
        font-size: 14px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .paginate {
        display: inline;
        text-align: center;
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
            @foreach ($task as $item)
                <div class="rev-name">
                    {{$item->name}}
                </div>     
                <div class="rev-message">
                    {{$item->message}}
                </div><br>
            @endforeach
        </div>   
    </div>   
    <div class="paginate">
            {{$task->links()}}
    </div>  
</div>
@endsection