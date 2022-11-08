@extends('layouts.auth')
@section('login')
    <div class="login-box">

        <!-- /.login-logo -->
        <div class="login-box-body">
            <div class="login-logo">
                <a href="{{ asset('AdminLTE-2/index.html') }}"><b>Toko</b>KU</a>
            </div>
            <p class="login-box-msg">Silahkan Registrasi kan Akun Anda</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <input id="name" name="name" class="form-control" type="name" placeholder="Name" required
                        value="{{ old('name') }}">
                </div>

                <div class="mt-4">
                    <input id="email" name="email" class="form-control" type="email" placeholder="Email" required
                        value="{{ old('email') }}">
                </div>

                <div class="mt-4">
                    <input id="password" name="password" class="form-control" type="password" placeholder="Password"
                        required value="{{ old('password') }}">
                </div>

                <div class="mt-4">
                    <input id="password_confirmation" name="password_confirmation" class="form-control" type="password"
                        placeholder="Confirm Password" required autocomplete="new-password" value="{{ old('email') }}">
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms" />

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' =>
                                            '<a target="_blank" href="' .
                                            route('terms.show') .
                                            '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                            __('Terms of Service') .
                                            '</a>',
                                        'privacy_policy' =>
                                            '<a target="_blank" href="' .
                                            route('policy.show') .
                                            '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                            __('Privacy Policy') .
                                            '</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif
                <div class="row">
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Sudah Mempunyai Akun?') }}
                        </a>
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Register') }}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
@endsection
<x-guest-layout>

</x-guest-layout>
