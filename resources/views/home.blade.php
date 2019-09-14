@extends('layouts.app')
<style>
    .card-header {
        text-align: center;
        position: absolute;
        left:50%;
        top:25%;
        transform: translate(-50%,0);
        font-size:24px;
        font-weight:600;
    }

    table {
        text-align: center;
        border-radius: 12px;

    }

    td {
        padding: 7px;
        color:ivory;
        font-weight: 600;
        
  
        font-size: 20px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              
                <div class="card-header">Weather Today
                    <?= $tabl?>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                       
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
