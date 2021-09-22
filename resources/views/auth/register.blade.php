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

</style>
@endpush

@section('content')
<div class="container">
    <div class="row m-0">
        <div class="col-12 text-right">
            <a class="btn btn-white" href="/login"> LOGIN </a>
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
        <div class="col-md-6 signin-left-content" style="margin: auto;">
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
                <h2>SIGN UP</h2>
                <form id="register-form">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="inputName" required placeholder="Full Name">
                        <span class="invalid-feedback" role="alert">
                            <strong></strong>
                        </span>
                    </div>
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" id="inputUsername" required placeholder="Username">
                        <span class="invalid-feedback" role="alert">
                            <strong></strong>
                        </span>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="inputEmail" required placeholder="Email">
                        <span class="invalid-feedback" role="alert">
                            <strong></strong>
                        </span>
                    </div>
                    <div class="form-group ">
                        <input type="password" name="password" class="form-control" id="inputPassword" required placeholder="Password">
                        <span class="invalid-feedback" role="alert">
                            <strong></strong>
                        </span>
                    </div>
                    <div class="form-group ">
                        <input type="password" name="password_confirmation" class="form-control" id="inputPasswordConfirm" required placeholder="Confirm Password">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-mars fa-fw"></i></span>
                        </div>
                        <select name="gender" id="gender" class="form-control" required>
                            <option value="" selected disabled>Select Your Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="custom-control custom-checkbox mt-2" style="color: white">
                        <input type="checkbox" checked class="custom-control-input" name="privacy-agree" id="privacy-agree">
                        <label class="custom-control-label" for="privacy_agree">
                            By creating your account, you agree to our <a href="http://fyrestream.com//static/terms" target="_blank">Terms</a> &amp; <a href="http://fyrestream.com//static/privacy" target="_blank">Privacy Policy</a>
                        </label>

                    </div>
                    <div class="form-group ">
                        <button type="submit" class="btn btn-primary">Sign Up</button>
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
        const registerForm = document.getElementById("register-form");
        const loadingModel = document.getElementById("exampleModal");
        var request;

        registerForm.addEventListener("submit", event => {
            if (request) {
                request.abort();
            }
            var $form = $(event.target);
            var $inputs = $form.find("input, button");
            $inputs.removeClass("is-invalid");
            var data = {
                'name': $('input[name=name]').val()
                , 'email': $('input[name=email]').val()
                , 'username': $('input[name=username]').val()
                , 'password': $('input[name=password]').val()
                , 'password_confirmation': $('input[name=password_confirmation]').val()
                , 'gender': $('select[name=gender]').val()
            , };

            if (data['password'] != data['password_confirmation']) {
                document.querySelector('input[name=password]').classList.add('is-invalid');
                document.querySelector('input[name=password].is-invalid~.invalid-feedback strong').innerText = "Confirm password does not match";

                event.preventDefault();
                return;
            }

            //Disabling inputs so that thay are not modifiable during request.
            $inputs.prop("disabled", true);

            loadingModel.classList.add("d-block");

            //Firing request to server
            request = $.ajax({
                url: window.origin + "/api/register"
                , type: "post"
                , data: data
            });

            request.done(function(response, textStatus, jqXHR) {
                if (response.success) {
                    loadingModel.innerHTML = `
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Registration Successfull</h5>
                                </div>
                                <div class="modal-body">
                                    You are registered. Please wait until we redirect you to next step.
                                </div>
                            </div>
                        </div>
                    `;
                    setCookie('token', response.token);
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
