<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pengajuan Justifikasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="icon" type="image/icon" sizes="16x16" href="{{ asset('asset/image/icon/index.ico') }}">
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('asset/css/main.css') }}" />
</head>
<body>
    <div class="container-fluid" style="position: relative;height: 100%">
        <div class="row">
            <div class="col-lg-8 mobile" style="height: 100%">
                <img src="{{ asset('asset/image/logo_full.png') }}" alt="logo telkom indonesia"  class="logo" >
            </div>
            <div class="col-lg-4 col-md-12 background-mobile" style="height: 100%;">
                    <img src="{{ asset('asset/image/logo_full.png') }}" alt="logo telkom indonesia"  class="logo-mobile">
                <form class="form-login background-mobile" style="background-color: #d51100"action="{{ url('/login') }}" method = "post">
                    {{ csrf_field() }}
                    <br>
                    <svg class="form-icon" enable-background="new 0 0 24 24" id="Layer_1" version="1.0" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M9,9c0-1.7,1.3-3,3-3s3,1.3,3,3c0,1.7-1.3,3-3,3S9,10.7,9,9z M12,14c-4.6,0-6,3.3-6,3.3V19h12v-1.7C18,17.3,16.6,14,12,14z   "/></g><g><g><circle cx="18.5" cy="8.5" r="2.5"/></g><g><path d="M18.5,13c-1.2,0-2.1,0.3-2.8,0.8c2.3,1.1,3.2,3,3.2,3.2l0,0.1H23v-1.3C23,15.7,21.9,13,18.5,13z"/></g></g><g><g><circle cx="18.5" cy="8.5" r="2.5"/></g><g><path d="M18.5,13c-1.2,0-2.1,0.3-2.8,0.8c2.3,1.1,3.2,3,3.2,3.2l0,0.1H23v-1.3C23,15.7,21.9,13,18.5,13z"/></g></g><g><g><circle cx="5.5" cy="8.5" r="2.5"/></g><g><path d="M5.5,13c1.2,0,2.1,0.3,2.8,0.8c-2.3,1.1-3.2,3-3.2,3.2l0,0.1H1v-1.3C1,15.7,2.1,13,5.5,13z"/></g></g></svg>
                    <div class="form-group">
                    
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert" style="color: white;">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    <!-- <div class="alert alert-danger invalid-feedback alert-dismissible fade show" role="alert">
                                        Email atau password salah!
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div> -->
                                @endif
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert" style="color: white;">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <button type="submit" style="display: block; margin: 0 auto;" class="btn btn-outline-light">LOGIN</button>
                    <div><br></div>
                    <div class="signup mx-auto">
                            <p style="color: white">Belum punya akun?</p>
                            <a class="login-a" href="{{ url('/register-index') }}">Sign up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- SCRIPT -->
    <script src="{{ asset('asset/js/jquery-3.3.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="{{ asset('asset/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/js/main.js') }}"></script>
</body>
</html>