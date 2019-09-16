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
        margin-left: 10px;
        font-size: 16px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .rev-message {
        margin-top: 5px;
        margin-left: 10px;
        margin-right: 20px;
        word-wrap: break-word;
        font-size: 14px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .paginate {
        text-align: center;
    }

    .reviews {
        text-align: left; 
    }

    .for-border {
        margin-right: 20px;
        margin-left: 10px;
        border-color: red; 
        border-style: outset;
        border-width: 1px;
        padding: 5px;
    }

    .header-reviews {
        text-align: center;
        font-size: 24px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight:600;
    }
</style>
@section('content')
<div class="container">
    <div class="header-reviews">Reviews
    <div class="reviews-data">
        <div class="card-body">
            <div class="reviews">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @foreach ($task as $item)
            <div class="for-border">
                <div class="rev-name">
                    {{$item->name}}
                </div>     
                <div class="rev-message">
                    {{$item->message}}
                </div>
                </div><br>
            @endforeach
            </div>
        </div>   
    </div>   
    </div>
    <div class="paginate">
            {{$task->links()}}
    </div>  
</div>
@endsection