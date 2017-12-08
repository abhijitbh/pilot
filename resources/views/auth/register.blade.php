@extends('layouts.pilot.main')

@section('head')
    <!-- {!! HTML::style('/assets/css/register.css') !!}
    {!! HTML::style('/assets/css/parsley.css') !!} -->
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="log-in-title" style="font-size: 40px;">Sign Up</div>
        <div class="new-user" style="font-size: 25px;">Already have a Vitalsware Account?
            <a class="signup-link" href="/login" style="font-size: 25px;">Sign In</a>
        </div>
        <br />

        <div class="row">
            <div class="row vertical-align"> <!--
                        ^--  Additional class -->    
                <div class="col-md-6 content-center login-container" style="border-right: 1px solid grey" >
                    <div class="card card-login card-plain">
                        {!! Form::open(['url' => url('register'), 'class' => 'form-signin', 'data-parsley-validate' ] ) !!}

                        @include('includes.errors')
                        <label for="inputEmail" class="sr-only">Email address</label>
                        {!! Form::email('email', null, [
                            'class'                         => 'form-control',
                            'placeholder'                   => 'Email address',
                            'required',
                            'id'                            => 'inputEmail',
                            'data-parsley-required-message' => 'Email is required',
                            'data-parsley-trigger'          => 'change focusout',
                            'data-parsley-type'             => 'email'
                        ]) !!}
                        <br />

                        <label for="inputFirstName" class="sr-only">First name</label>
                        {!! Form::text('first_name', null, [
                            'class'                         => 'form-control',
                            'placeholder'                   => 'First name',
                            'required',
                            'id'                            => 'inputFirstName',
                            'data-parsley-required-message' => 'First Name is required',
                            'data-parsley-trigger'          => 'change focusout',
                            'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
                            'data-parsley-minlength'        => '2',
                            'data-parsley-maxlength'        => '32'
                        ]) !!}
                        <br />

                        <label for="inputLastName" class="sr-only">Last name</label>
                        {!! Form::text('last_name', null, [
                            'class'                         => 'form-control',
                            'placeholder'                   => 'Last name',
                            'required',
                            'id'                            => 'inputLastName',
                            'data-parsley-required-message' => 'Last Name is required',
                            'data-parsley-trigger'          => 'change focusout',
                            'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
                            'data-parsley-minlength'        => '2',
                            'data-parsley-maxlength'        => '32'
                        ]) !!}
                        <br />


                        <label for="inputPassword" class="sr-only">Password</label>
                        {!! Form::password('password', [
                            'class'                         => 'form-control',
                            'placeholder'                   => 'Password',
                            'required',
                            'id'                            => 'inputPassword',
                            'data-parsley-required-message' => 'Password is required',
                            'data-parsley-trigger'          => 'change focusout',
                            'data-parsley-minlength'        => '6',
                            'data-parsley-maxlength'        => '20'
                        ]) !!}
                        <br />


                        <label for="inputPasswordConfirm" class="sr-only has-warning">Confirm Password</label>
                        {!! Form::password('password_confirmation', [
                            'class'                         => 'form-control',
                            'placeholder'                   => 'Password confirmation',
                            'required',
                            'id'                            => 'inputPasswordConfirm',
                            'data-parsley-required-message' => 'Password confirmation is required',
                            'data-parsley-trigger'          => 'change focusout',
                            'data-parsley-equalto'          => '#inputPassword',
                            'data-parsley-equalto-message'  => 'Not same as Password',
                        ]) !!}
                        <br />

                        <!-- <div class="g-recaptcha" data-sitekey="{{ env('RE_CAP_SITE') }}"></div> -->

                        <button class="btn btn-primary btn-round btn-lg btn-block register-btn" type="submit">Register</button>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="col-md-6 content-center">
                    <div class="content">
                        @include('partials.socials')
                    </div>                
                </div>
            </div>
        </div>
    </div>    
</div>
@stop
@section('footer')
    <script type="text/javascript">
        window.ParsleyConfig = {
            errorsWrapper: '<div></div>',
            errorTemplate: '<span class="error-text"></span>',
            classHandler: function (el) {
                return el.$element.closest('input');
            },
            successClass: 'valid',
            errorClass: 'invalid'
        };
    </script>

    {!! HTML::script('/assets/plugins/parsley.min.js') !!}
    <script src='https://www.google.com/recaptcha/api.js'></script>
@stop