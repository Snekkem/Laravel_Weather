@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
         @endif
        <div class="header-feedback">Feedback
            <div class="input-feedback">
            <form action="{{url('/insertData')}}" method="POST">
            {{ csrf_field() }}
            <div>
                <input type="text" placeholder="Name" name="name"><br>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
            </div><br>
            <div>
                <input type="email" placeholder="E-mail" name="email" ><br>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
            </div><br>
            <div>
                <textarea id="txar" cols="60" rows="10" 
                    placeholder="Message" name="message"></textarea><br>
                        @error('message')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
            </div><br>
                <input type="submit" value="Send">           
            </form>
            </div>
        </div>
    </div>
</div>
@endsection