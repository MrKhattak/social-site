@extends('auth.app')

@push('styles')
<style>
    .lds-ring {
        display: inline-block;
        position: relative;
        width: 80px;
        height: 80px;
    }

    .lds-ring div {
        box-sizing: border-box;
        display: block;
        position: absolute;
        width: 64px;
        height: 64px;
        margin: 8px;
        border: 8px solid #fff;
        border-radius: 50%;
        animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
        border-color: #fff transparent transparent transparent;
    }

    .lds-ring div:nth-child(1) {
        animation-delay: -0.45s;
    }

    .lds-ring div:nth-child(2) {
        animation-delay: -0.3s;
    }

    .lds-ring div:nth-child(3) {
        animation-delay: -0.15s;
    }

    @keyframes lds-ring {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .modal-holder {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .modal {
        background: #0000004f;
    }

    a.btn.signup-or-btn {
        width: 100%;
        background: linear-gradient(45deg, #00bcd4, #e91e63);
        box-sizing: border-box;
        box-shadow: none;
        border: none;
        outline: none;
        color: white;
        padding: 10px;
    }

</style>
@endpush

@section('content')
<div class="container">
    <div class="row m-0">
        <div class="col-12 text-right">
            <a class="btn btn-white" href="/register"> CREATE AN ACCOUNT </a>
        </div>
    </div>
    <div class="row m-0">
        <div class="col-12 text-center">
            <div class="logo m-auto">
                <img src="{{asset('logo.png')}}" width="57" height="57" alt="FyreStream">
                <br />
                <img class="text-logo" src="{{asset('logo_text.png')}}" alt="fyrestream">
            </div>
        </div>
    </div>
    <div class="row m-0 login-container">
        <div class="col-md-6 signin-left-content">
            <h1>POWER</h1>
            <span>IN YOUR HANDS</span>
            <div class="bottom-line-bar"></div>
            <span>Grow, discover, and share freely.</span>
            <div class="download-links">
                <a href="#">
                    <i class="fab fa-apple"></i>
                    App Store
                </a>
                <a href="#">
                    <i class="fab fa-google-play"></i>
                    Google Play
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-container">
                <h2>SIGN IN</h2>
                <form id="login-form">
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" id="inputEmail4" placeholder="Email or Username">
                        <span class="invalid-feedback" role="alert">
                            <strong></strong>
                        </span>
                    </div>
                    <div class="form-group ">
                        <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
                        <span class="invalid-feedback" role="alert">
                            <strong></strong>
                        </span>
                    </div>
                    <div class="form-group ">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                    <h4 class="mt-2 text-center">OR</h4>
                    <div>
                        <a href="/register" class="btn signup-or-btn">Sign up</a>
                    </div>
                    <div class="form-row align-items-center">
                        <div class="form-group col-6">
                            <div class="form-check">
                                <input class="form-check-input" name="remember" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Keep me logged in
                                </label>
                            </div>
                        </div>
                        <div class="form-group  col-6 text-right">
                            <a href="{{ route('password.request') }}">Forget Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="exampleModal">
    <div class="modal-holder">
        <div class="lds-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        const loginForm = document.getElementById("login-form");
        const loadingModel = document.getElementById("exampleModal");
        var request;

        loginForm.addEventListener("submit", event => {
            if (request) {
                request.abort();
            }
            var $form = $(event.target);
            var $inputs = $form.find("input, button");
            $inputs.removeClass("is-invalid");
            var data = {
                'email': $('input[name=email]').val()
                , 'password': $('input[name=password]').val()
                , 'remember': document.querySelector('input[name=remember]').checked
            , };

            //Disabling inputs so that thay are not modifiable during request.
            $inputs.prop("disabled", true);

            loadingModel.classList.add("d-block");

            //Firing request to server
            request = $.ajax({
                url: window.origin + "/api/login"
                , type: "post"
                , data: data
            });

            request.done(function(response, textStatus, jqXHR) {
                if (response.success) {
                    loadingModel.innerHTML = `
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Login Successfull</h5>
                                </div>
                                <div class="modal-body">
                                    You are logged in. Please wait until we redirect you to home page.
                                </div>
                            </div>
                        </div>
                    `;
                    document.location.href = window.origin;
                } else {
                    $inputs.prop("disabled", false);
                    loadingModel.classList.remove("d-block");
                    let messageKeys = Object.keys(response.messages);
                    messageKeys.forEach(key => {
                        document.querySelector(`input[name=${key}]`).classList.add('is-invalid');
                        document.querySelector(`input[name=${key}].is-invalid~.invalid-feedback strong`).innerText = response.messages[key][0];
                    });
                }
            });

            request.fail(function(jqXHR, textStatus, errorThrown) {
                $inputs.prop("disabled", false);
                loadingModel.classList.remove("d-block");
            });

            event.preventDefault();
        });
    });

</script>
@endpush
