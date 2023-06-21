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
                            <h5 class="text-muted fw-normal mb-4">Create a free account.</h5>
                            <form class="forms-sample" method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="mb-3">
                                    <select name="guard" id="guard" required>
                                        <option value="passager" >Passager</option>
                                        <option value="conducteur">Conducteur</option>
                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label for="first_name" :value="__('first_name')" class="form-label">First Name</label>
                                    <input type="text" class="form-control" name="first_name" :value="old('first_name')" id="exampleInputUsername1" autocomplete="first_name" placeholder="First Name">
                                </div>

                                <div class="mb-3">
                                    <label for="last_name" :value="__('last_name')" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" :value="old('last_name')" id="exampleInputUsername1" autocomplete="last_name" placeholder="Last Name">
                                </div>

                                <!-- Email Address -->
                                <div class="mb-3">
                                    <label for="email" :value="__('Email')" class="form-label">Email address</label>
                                    <input type="email" class="form-control" name="email" :value="old('email')" id="userEmail" placeholder="Email">
                                </div>

                                <!-- Password -->
                                <div class="mb-3">
                                    <label for="password" :value="__('Password')" class="form-label">Password</label>

                                    <input id="password" class="form-control" id="userPassword" type="password" name="password" autocomplete="current-password" placeholder="Password" />

                                </div>

                                <!-- Confirm Password -->
                                <div class="mb-3">
                                    <label for="password_confirmation" :value="__('Confirm Password')">Confirm Password</label>

                                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />

                                </div>


                                <div>
                                    <button type="submit" class="btn btn-primary me-2 mb-2 mb-md-0">
                                        {{ __('Register') }}
                                    </button>
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection