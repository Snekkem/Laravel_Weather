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
            <form action="success-feedback" method="POST">
            {{ csrf_field() }}
                <input type="text" placeholder="Name" name="name" required><p>
                <input type="email" placeholder="E-mail" name="email" required><p>
                <textarea name="txtarr" id="txar" cols="60" rows="10" required
                    placeholder="Message" name="message"></textarea><p>
                <input type="submit" value="Send">           
            </form>
            </div>
        </div>
        @if (!empty($_POST["name"])) {
            @if (ctype_digit($_POST["name"])) {
                @error('name')
                    <span class="invalid-feedback" role="alert"><br>
                        {{ $message }}
                    </span>
                @enderror
            }
            @endif
        }
        @endif
    </div>
</div>
@endsection