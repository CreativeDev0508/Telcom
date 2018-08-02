<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pengajuan Justifikasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
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
                <img src="{{ asset('asset/image/logo_full.png') }}" alt="logo telkom indonesia"  class="logo-mobile" >
                <form method="POST" action="{{ route('register') }}" aria-label="Register" class="form-signup background-mobile">
                    @csrf
                    <svg class="form-icon" enable-background="new 0 0 24 24" id="Layer_1" version="1.0" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M10,9c0-1.7,1.3-3,3-3s3,1.3,3,3c0,1.7-1.3,3-3,3S10,10.7,10,9z M13,14c-4.6,0-6,3.3-6,3.3V19h12v-1.7   C19,17.3,17.6,14,13,14z"/></g><g><g><circle cx="19.5" cy="8.5" r="2.5"/></g><g><path d="M19.5,13c-1.2,0-2.1,0.3-2.8,0.8c2.3,1.1,3.2,3,3.2,3.2l0,0.1H24v-1.3C24,15.7,22.9,13,19.5,13z"/></g></g><line stroke="white" stroke-miterlimit="10" stroke-width="2" x1="5" x2="5" y1="8" y2="16"/><line stroke="white" stroke-miterlimit="10" stroke-width="2" x1="9" x2="1" y1="12" y2="12"/></svg>
                    <div class="form-group">
                        <input style="text-align: center" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email">

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert" style="color: white">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input style="text-align: center" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert" style="color: white">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input style="text-align: center" id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">      
                    </div>
                    <div class="form-group">
                        <input style="text-align: center" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Nama Lengkap">
                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert" style="color: white">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input style="text-align: center" id="nik" type="text" class="form-control{{ $errors->has('nik') ? ' is-invalid' : '' }}" name="nik" value="{{ old('nik') }}" required autofocus placeholder="NIK">
                    </div>
                    <div class="form-group">
                        <select class="custom-select" name="id_jabatan">
                            @foreach ($jabatan as $listjabatan)
                            <option value="{{$listjabatan->id_jabatan}}">{{$listjabatan->nama_jabatan}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" style="display: block; margin: 0 auto;" class="btn btn-outline-light">SIGN UP</button>
                    <div>
                        <br>
                    </div>
                    <div class="login mx-auto">
                        <p style="color: white">Sudah punya akun?</p>
                        <a class="login-a" href="{{ route('login') }}">Login</a>
                    </div>
                    {{-- <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div> --}}
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