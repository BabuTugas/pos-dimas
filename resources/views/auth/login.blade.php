@extends('layouts.auth')
@section('login')
    <div class="login-box">

        <!-- /.login-logo -->
        <div class="login-box-body">
            <div class="login-logo">
                <a href="{{ asset('AdminLTE-2/index.html') }}"><b>Toko</b>KU</a>
            </div>
            <p class="login-box-msg">Silahkan Login ke Akun anda</p>

            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group has-feedback @error('email') has-error
                @enderror">
                    <input type="email" name="email" class="form-control" placeholder="Email" required
                        value="{{ old('email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @error('email')
                        <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group has-feedback @error('password') has-error
                @enderror">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @error('password')
                        <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                    href="{{ route('register') }}">
                                    {{ __('Belum Punya Akun?') }}
                                </a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>



        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
@endsection
