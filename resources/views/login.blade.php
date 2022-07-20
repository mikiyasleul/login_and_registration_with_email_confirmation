<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link href="{{ asset('image/title-icon.png') }}" rel="icon">
    {{-- csrf token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}"> 

    {{-- links --}}
    <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-4"></div>
            <div class="col-lg-5 col-md-6 col-sm-8 login-box">
                <div class="col-lg-12 login-key">
                    <img class="image" src="{{ asset('image/title-icon.png') }}" alt="">
                </div>
                @if (request()->is('/'))
                    <div class="col-lg-12 login-title">
                        Sign-In
                    </div>
                @elseif (request()->is('register'))
                    <div class="col-lg-12 login-title">
                        Sign-Up
                    </div>
                @elseif (request()->is('forget_password'))
                    <div class="col-lg-12 login-title">
                        Reset-Password
                    </div>
                @endif
                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form>
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="text" class="form-control">
                            </div>
                            @if (request()->is('register'))
                                <div class="form-group">
                                    <label class="form-control-label">EMAIL</label>
                                    <input type="email" class="form-control">
                                </div>
                            @endif
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" class="form-control">
                            </div>
                            @if (request()->is('register'))  
                                <div class="form-group">
                                    <label class="form-control-label">CONFIRM PASSWORD</label>
                                    <input type="password" class="form-control" i>
                                </div>
                            @endif
                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                @if (request()->is('/'))
                                    <div class="col-lg-6 login-btm login-button">
                                        <button type="submit" class="btn btn-outline-primary">Login</button>
                                    </div>
                                @elseif (request()->is('register'))
                                    <div class="col-lg-6 login-btm login-button">
                                        <button type="submit" class="btn btn-outline-primary">Register</button>
                                    </div>
                                @elseif (request()->is('forget_password'))
                                    <div class="col-lg-6 login-btm login-button">
                                        <button type="submit" class="btn btn-outline-primary">Confirm</button>
                                    </div>>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
</body>
</body>
</html>