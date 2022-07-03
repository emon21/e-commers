@extends('frontend.main_master')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="home.html">Home</a></li>
                    <li class='active'>Reset Password</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="sign-in-page">
                <div class="row">
                    <!-- Sign-in -->
                    <div class="col-md-6 col-sm-6 sign-in">
                        <h4 class="">Reset Password</h4>
                        <p class="">Reset your password ? No Problem</p>

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group">
                                <label class="info-title" for="email">Email Address <span>*</span></label>
                                <input type="email"
                                    class="form-control unicase-form-control text-input @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ $email ?? old('email') }}" required
                                    autocomplete="email" autofocus>
                            </div>

                            <div class="form-group">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                <input type="password"
                                    class="form-control unicase-form-control text-input @error('password') is-invalid @enderror"
                                    id="password" name="password" required autocomplete="new-password">
                            </div>

                            <div class="form-group">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                <input type="password" class="form-control unicase-form-control text-input"
                                    id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Reset Password') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Sign-in -->
                </div><!-- /.row -->
            </div><!-- /.sigin-in-->

        </div><!-- /.container -->
    </div><!-- /.body-content -->
@endsection
