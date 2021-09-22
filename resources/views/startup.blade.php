@extends('layouts.app')

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

    .loading-modal-div .modal-holder {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .loading-modal-div {
        background: #0000004f;
    }

    @media(max-width: 700px) {
        .main-startup-div {
            padding-bottom: 60px !important;
        }
    }

</style>
@endpush

@section('content')
<div class="d-flex justify-content-center main-startup-div" style="width: 90%;margin: auto;margin-top: 90px;">
    @include('components.profile-create')
</div>

<div class="modal loading-modal-div" id="loading-modal">
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

        const loadingModel = document.getElementById("loading-modal");

        document.getElementById("last-finish-btn").addEventListener("click", e => {
            var profileImageData = document.querySelector("input[name=image]").value;
            var country = $("select[name=country]").val();
            var city = $("input[name=city]").val();
            var hometown = $("input[name=hometown]").val();

            var workTitle = $("input[name=work_title]").val();
            var workPlace = $("input[name=work_place]").val();
            var workUrl = $("input[name=work_url]").val();


            var eduMajor = $("input[name=edu_major]").val();
            var eduSchool = $("input[name=edu_school]").val();
            var eduClass = $("input[name=edu_class]").val();

            const data = {
                "image": profileImageData
                , "country": country
                , "city": city
                , "hometown": hometown
                , "work_title": workTitle
                , "work_place": workPlace
                , "work_url": workUrl
                , "edu_major": eduMajor
                , "edu_school": eduSchool
                , "edu_class": eduClass
            , }

            console.log(data);

            loadingModel.classList.add("d-block");

            request = $.ajax({
                url: window.origin + "/api/profile"
                , type: "post"
                , data: data
                , headers: {
                    "Authorization": `Bearer ${getCookie('token')}`
                    , "Accept": "application/json"
                }
            });

            request.done(function(response, textStatus, jqXHR) {
                if (response.success) {
                    loadingModel.innerHTML = `
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Profile Updated</h5>
                                </div>
                                <div class="modal-body">
                                    Your profile is updated successfuly. Please wait until we redirect you to home page.
                                </div>
                            </div>
                        </div>
                    `;
                    document.location.href = window.origin;
                } else {
                    console.log(response);
                    loadingModel.innerHTML = `
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Profile Updation Failed</h5>
                                    <button type="button" class="close" data-dismiss="modal" data-target="loading-modal" aria-label="Close">
                                        &times;
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ${response.message}
                                </div>
                            </div>
                        </div>
                    `;
                }
            });

            request.fail(function(jqXHR, textStatus, errorThrown) {
                console.log(errorThrown);
                loadingModel.innerHTML = `
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Profile Updation Failed</h5>
                                <button type="button" class="close" data-dismiss="modal" data-target="loading-modal" aria-label="Close">
                                    &times;
                                </button>
                            </div>
                            <div class="modal-body">
                                ${errorThrown}
                            </div>
                        </div>
                    </div>
                `;
            });

        });

        $(document).click(function(e) {
            if (e.target.classList.contains("close") && e.target.dataset.dismiss == "modal") {
                document.getElementById(e.target.dataset.target).classList.remove("d-block");
                if (e.target.dataset.target == "loading-modal") {
                    document.getElementById(e.target.dataset.target).innerHTML = `
                    <div class="modal-holder">
                        <div class="lds-ring">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    `;
                }
            }
        });
    });

    

</script>
@endpush
