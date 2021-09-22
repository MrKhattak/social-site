@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{asset("js/cropper/cropper.min.css")}}">
<style>
    body {
        position: relative;
        min-height: 100vh;
    }

    .model {
        position: absolute;
        inset: 0;
        z-index: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        top: 0;
        left: 0;
        background-color: rgb(148 147 147 / 32%);
    }

    .model .model-inner {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: start;
        height: 70%;
        width: 70%;
        background-color: white;
    }

    @media(max-width: 1200px) {
        .model .model-inner {
            width: clamp(95%, 90%, 90%);
        }
    }

    .model .model-inner .image-div img {
        max-width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .model .model-inner .image-div {
        width: 100%;
        height: 80%;
    }

    .cropper-view-box,
    .cropper-face {
        border-radius: 50%;
    }

</style>
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
                    <form method="POST" action="/profile" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" value="{{Auth::user()->name}}" class="form-control @error('name') is-invalid @enderror" name="name" required>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" value="{{Auth::user()->username}}" class="form-control @error('username') is-invalid @enderror" name="username" required>

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" disabled value="{{ Auth::user()->email }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4 d-flex flex-md-column align-items-md-end">
                                <label for="image" class="col-form-label text-md-right">{{ __('Image') }} <span style="font-weight: 200;">(Optional)</span> </label>
                                <img id="result-image" src="{{Auth::user()->image ? Auth::user()->image : "/storage/images/static/default_profile.png"}}" class="ml-md-0 ml-3" width="50" alt="{{Auth::user()->name}}">
                            </div>
                            <div class="col-md-6">
                                <input id="image" type="file" accept="image/*" class="form-control @error('image') is-invalid @enderror">
                                <input type="hidden" name="image" id="server-result-image" class="d-none" hidden>
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Profile') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="model modal d-none" id="model">
    <div class="model-inner">
        <div class="image-div">
            <img src="#" alt="User choosed image" id="model-image">
        </div>
        <div class="model-btn mt-4 d-flex">
            <button id="crop-btn" class="btn btn-primary">Crop</button>
            <button id="cancel-btn" class="btn btn-primary ml-5">Cancel</button>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{asset("js/cropper/cropper.min.js")}}"></script>
<script>
    function getRoundedCanvas(sourceCanvas) {
        var canvas = document.createElement('canvas');
        var context = canvas.getContext('2d');
        var width = sourceCanvas.width;
        var height = sourceCanvas.height;
        canvas.width = width;
        canvas.height = height;
        context.imageSmoothingEnabled = true;
        context.fillStyle = "#fff"
        context.drawImage(sourceCanvas, 0, 0, width, height);
        context.globalCompositeOperation = 'destination-in';
        context.beginPath();
        context.arc(width / 2, height / 2, Math.min(width, height) / 2, 0, 2 * Math.PI, true);
        context.fill();
        var imgData = context.getImageData(0, 0, canvas.width, canvas.height);
        var data = imgData.data;
        for (var i = 0; i < data.length; i += 4) {
            if (data[i + 3] < 255) {
                data[i] = 255;
                data[i + 1] = 255;
                data[i + 2] = 255;
                data[i + 3] = 255;
            }
        }
        context.putImageData(imgData, 0, 0);
        return canvas;
    }

    const originalUserImageSrc = document.getElementById("result-image").src;

    const image = document.getElementById("image");
    var croppable = false;
    var cropper;
    image.addEventListener("change", e => {
        const [file] = image.files;
        if (file) {
            document.getElementById("model-image").src = URL.createObjectURL(file);
            document.getElementById("model").classList.remove("d-none");
            cropper = new Cropper(document.getElementById("model-image"), {
                viewMode: 1
                , dragMode: 'move'
                , aspectRatio: 1
                , ready: function() {
                    croppable = true;
                }
            });
        } else {
            document.getElementById("result-image").src = originalUserImageSrc;
            document.getElementById("server-result-image").value = null;
        }
    });

    const button = document.getElementById("crop-btn");
    var mainCanvas;
    button.onclick = function() {
        var croppedCanvas;
        var roundedCanvas;
        var roundedImage;
        if (!croppable) {
            return;
        }
        croppedCanvas = cropper.getCroppedCanvas({
            imageSmoothingEnabled: true
            , fillStyle: '#fff'
        , });
        roundedCanvas = getRoundedCanvas(croppedCanvas);
        mainCanvas = roundedCanvas;
        document.getElementById("result-image").src = roundedCanvas.toDataURL('image/jpeg', 1);
        document.getElementById("server-result-image").value = roundedCanvas.toDataURL('image/jpeg', 1);
        croppable = false;
        cropper.destroy();
        cropper = null;
        document.getElementById("model").classList.add("d-none");
    };

    document.getElementById("cancel-btn").addEventListener("click", e => {
        croppable = false;
        cropper.destroy();
        cropper = null;
        image.value = null;
        document.getElementById("result-image").src = originalUserImageSrc;
        document.getElementById("server-result-image").value = null;
        document.getElementById("model").classList.add("d-none");

    });

</script>
@endpush
