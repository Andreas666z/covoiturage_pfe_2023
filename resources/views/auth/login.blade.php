@extends('passager.layout.master2')

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">

    <div class="row w-100 mx-0 auth-page">
        <div class="col-md-8 col-xl-6 mx-auto">
            <div class="card">
                <div class="row">
                    <div class="col-md-4 pe-md-0">
                        <div class="auth-side-wrapper" style="background-image: url({{ url('https://via.placeholder.com/219x452') }})">

                        </div>
                    </div>
                    <div class="col-md-8 ps-md-0">
                        <div class="auth-form-wrapper px-4 py-5">
                            <a href="#" class="noble-ui-logo d-block mb-2">Noble<span>UI</span></a>
                            <h5 class="text-muted fw-normal mb-4">Welcome back! Log in to your account.</h5>
                            <form class="forms-sample" method="post" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="email" class="form-label" >Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" >
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label" >Password</label>
                                    <input type="password" class="form-control" name="password" id="password" autocomplete="current-password" placeholder="Password">
                                </div>

                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="authCheck" name="remember">
                                    <label class="form-check-label" for="authCheck">
                                        Remember me
                                    </label>
                                </div>

                                <div>
                                    <button type="submit" class="btn btn-primary me-2 mb-2 mb-md-0">
                                        Login
                                    </button>

                                    @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                    @endif
                                </div>
                                <a href="{{ url('/register') }}" class="d-block mt-3 text-muted">Not a user? Sign up</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection