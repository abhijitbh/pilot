@extends('layouts.pilot.main')

@section('head')

    <link rel="stylesheet" href="/assets/css/signin.css">
    <link rel="stylesheet" href="/assets/css/parsley.css">

@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="log-in-title" style="font-size: 40px;">Log In</div>
            <div class="new-user" style="font-size: 25px;">New to Vitalsware?
                <a class="signup-link" href="/register" style="font-size: 25px;">Sign Up</a>
            </div>

            <div class="row">
                <div class="row vertical-align"> <!--
                            ^--  Additional class -->    
                    <div class="col-md-6 content-center login-container" style="border-right: 1px solid grey" >
                        <div class="card card-login card-plain">
                            {!! Form::open(['url' => url('login'), 'class' => 'form-signin', 'data-parsley-validate' ] ) !!}  
                                <div class="header header-primary text-center">
                                    <div class="logo-container">
                                        <img src="/assets/img/now-logo.png" alt="">
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="input-group form-group-no-border input-lg">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons users_circle-08"></i>
                                        </span>
                                        {!! Form::email('email', null, [
                                            'class'                         => 'form-control',
                                            'placeholder'                   => 'Email address',
                                            'required',
                                            'id'                            => 'inputEmail',
                                            'data-parsley-required-message' => 'Email is required',
                                            'data-parsley-trigger'          => 'change focusout',
                                            'data-parsley-type'             => 'email'
                                        ]) !!}


                                       <!--  <input type="text" class="form-control" placeholder="First Name..."> -->
                                    </div>
                                    <div class="input-group form-group-no-border input-lg">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons text_caps-small"></i>
                                        </span>
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
                                        <!-- <input type="text" placeholder="Last Name..." class="form-control" /> -->
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <fieldset class="form-group remember-me">
                                            {!! Form::checkbox('remember', 1, null, ['id' => 'remember-me']) !!}
                                            <label for="remember-me">Remember me</label>
                                        </fieldset>
                                    </div>
                                </div>

                                <button class="btn btn-primary btn-round btn-lg btn-block login-btn" type="submit">Sign in</button>
                                <p><a href="{{ url('password/reset') }}" class="forgot-pwd">Forgot password?</a></p>
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
    <br />
    <br />
    <br />
@stop

@section('footer')

 <!--   <footer class="footer">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md">
                                MIT License
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed by
                    <a href="http://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                </div>
            </div>
        </footer> -->

@stop