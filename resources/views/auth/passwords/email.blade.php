@extends('layouts.pilot.main')

@section('head')
    {!! HTML::style('/assets/css/reset.css') !!}
@stop

@section('content')
    
    <div class="row">
        <div class="row vertical-align"> <!--
                        ^--  Additional class -->    

        {!! Form::open(['url' => url('/password/email'), 'class' => 'form-signin' ] ) !!}

        @include('includes.status')
        <div class="log-in-title" style="font-size: 40px;">Password Reset</div>
        <label for="inputEmail" class="sr-only">Email address</label>
        {!! Form::email('email', null,
        ['class' => 'form-control', 
        'placeholder' => 'Email address', 
        'required', 
        'autofocus', 
        'id' => 'inputEmail' ]) !!}

        <br />
        <button class="btn btn-primary btn-round btn-lg btn-block register-btn" type="submit">Send me a reset link</button>
        <div class="new-user" style="font-size: 25px;">or?
                <a class="signup-link" href="/login" style="font-size: 25px;">Sign In</a>
        </div>
        </div>
        </div>


        {!! Form::close() !!}

@stop