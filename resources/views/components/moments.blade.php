@push('styles')
<link rel="stylesheet" href="{{ asset('assets/style.css') }}">
<style>
    .addMomentModal {
        cursor: pointer;
    }

    .logo {
        width: 38px;
        margin-left: 10px;
    }

    .crossICon {
        cursor: pointer;
    }

    .input-image-file {
        position: absolute;
        inset: 0;
        z-index: 2;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
    }

    .tui-image-editor-header-logo>img {
        width: 40px !important;
        height: 40px !important;
    }

    .tui-image-editor-download-btn {
        display: none !important;
    }

    .bgs {
        background-color: #fff;
        border: 1px solid #dedeea;
        color: #3e3f5e;
        width: 100%;
        height: 196px;
        margin-top: 20px;
        padding: 14px;
    }

    .bgs button.bg-btn {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-size: cover;
    }

    .textWrite .darkSection .typeImg {
        height: 650px;
    }

    .textWrite .darkSection {
        overflow-y: scroll;
    }

    .textWrite .darkSection .typeImg .colorSection .aTag {
        right: 10%;
        left: unset;
    }

    #start-text-enter::placeholder {
        color: unset;
        /* attr(data-color color, white); */
    }


    #start-text-enter:-ms-input-placeholder {
        color: unset;
        /* attr(data-color color, white); */

    }

    #start-text-enter::-ms-input-placeholder {
        color: unset;
        /* attr(data-color color, white); */

    }

    .textWrite .darkSection .typeImg .colorSection {
        right: -65%;
    }

    .slides .item img {
        width: unset;
    }

    #momments {
        padding-bottom: 5px;
    }

    #momments::-webkit-scrollbar {
        height: 4px;
    }

    #momments::-webkit-scrollbar-thumb {
        background: #38d1ca;
    }

    #momments::-webkit-scrollbar-thumb:hover {
        background: #0dcaf0;
    }

    .story-viewer .close {
        color: white !important;
    }

    .stories.snapssenger.carousel .story {
        height: 200px;
        max-height: 200px;
        min-width: 120px;
    }

    .stories.snapssenger.carousel .story>.item-link {
        height: 200px;
        max-height: 200px;
    }

</style>

@endpush
<div class="card moment" style="background:#f8f8fb; border:none;">
    <div data-btn="add-momment-btn" class="card-top d-flex align-items-center p-2">
        <h5 class="mb-0 ml-2 text-dark" data-btn="add-momment-btn" type="button" role="button">
            <a data-btn="add-momment-btn" type="button" role="button">
                <i data-btn="add-momment-btn" class="fa fa-plus-circle right-bar-add-circlr addMomentModal" style="background: none;padding: 0px;font-size: 16px;"></i>
                Moments
            </a>
        </h5>
    </div>
    <div class="container">
        <div id="momments"></div>
    </div>
</div>

@include('components.tui-image-editor')

{{-- Create new story --}}
@push('modals')
<div class="d-none" id="add-momment-modal">
    <!-- ==== SIDEBAR START ==== -->
    <div id="sideBarId" class="sideBar">
        <div class="d-flex flex-column">
            <div id="closeSidebar" onclick="closeSidebar()" class="align-self-end">
                <i class="fas fa-times h1"></i>
            </div>
            <ul class="list-unstyled">
                <li onclick="closeSidebar()" class="mt-3">
                    <div class="d-flex justify-content-around">
                        <div>
                            <svg viewBox="0 0 28 28" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 em6zcovv" height="28" width="28">
                                <path d="M17.5 23.979 21.25 23.979C21.386 23.979 21.5 23.864 21.5 23.729L21.5 13.979C21.5 13.427 21.949 12.979 22.5 12.979L24.33 12.979 14.017 4.046 3.672 12.979 5.5 12.979C6.052 12.979 6.5 13.427 6.5 13.979L6.5 23.729C6.5 23.864 6.615 23.979 6.75 23.979L10.5 23.979 10.5 17.729C10.5 17.04 11.061 16.479 11.75 16.479L16.25 16.479C16.939 16.479 17.5 17.04 17.5 17.729L17.5 23.979ZM21.25 25.479 17 25.479C16.448 25.479 16 25.031 16 24.479L16 18.327C16 18.135 15.844 17.979 15.652 17.979L12.348 17.979C12.156 17.979 12 18.135 12 18.327L12 24.479C12 25.031 11.552 25.479 11 25.479L6.75 25.479C5.784 25.479 5 24.695 5 23.729L5 14.479 3.069 14.479C2.567 14.479 2.079 14.215 1.868 13.759 1.63 13.245 1.757 12.658 2.175 12.29L13.001 2.912C13.248 2.675 13.608 2.527 13.989 2.521 14.392 2.527 14.753 2.675 15.027 2.937L25.821 12.286C25.823 12.288 25.824 12.289 25.825 12.29 26.244 12.658 26.371 13.245 26.133 13.759 25.921 14.215 25.434 14.479 24.931 14.479L23 14.479 23 23.729C23 24.695 22.217 25.479 21.25 25.479Z">
                                </path>
                            </svg>
                        </div>
                        <div class="ms-2 ms-md-3 ms-lg-5">
                            <svg viewBox="0 0 28 28" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 em6zcovv" height="28" width="28">
                                <path d="M8.75 25.25C8.336 25.25 8 24.914 8 24.5 8 24.086 8.336 23.75 8.75 23.75L19.25 23.75C19.664 23.75 20 24.086 20 24.5 20 24.914 19.664 25.25 19.25 25.25L8.75 25.25ZM17.163 12.846 12.055 15.923C11.591 16.202 11 15.869 11 15.327L11 9.172C11 8.631 11.591 8.297 12.055 8.576L17.163 11.654C17.612 11.924 17.612 12.575 17.163 12.846ZM21.75 20.25C22.992 20.25 24 19.242 24 18L24 6.5C24 5.258 22.992 4.25 21.75 4.25L6.25 4.25C5.008 4.25 4 5.258 4 6.5L4 18C4 19.242 5.008 20.25 6.25 20.25L21.75 20.25ZM21.75 21.75 6.25 21.75C4.179 21.75 2.5 20.071 2.5 18L2.5 6.5C2.5 4.429 4.179 2.75 6.25 2.75L21.75 2.75C23.821 2.75 25.5 4.429 25.5 6.5L25.5 18C25.5 20.071 23.821 21.75 21.75 21.75Z">
                                </path>
                            </svg>
                        </div>
                        <div class="ms-2 ms-md-3 ms-lg-5">
                            <svg viewBox="0 0 28 28" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 em6zcovv" height="28" width="28">
                                <path d="M25.5 14C25.5 7.649 20.351 2.5 14 2.5 7.649 2.5 2.5 7.649 2.5 14 2.5 20.351 7.649 25.5 14 25.5 20.351 25.5 25.5 20.351 25.5 14ZM27 14C27 21.18 21.18 27 14 27 6.82 27 1 21.18 1 14 1 6.82 6.82 1 14 1 21.18 1 27 6.82 27 14ZM7.479 14 7.631 14C7.933 14 8.102 14.338 7.934 14.591 7.334 15.491 6.983 16.568 6.983 17.724L6.983 18.221C6.983 18.342 6.99 18.461 7.004 18.578 7.03 18.802 6.862 19 6.637 19L6.123 19C5.228 19 4.5 18.25 4.5 17.327 4.5 15.492 5.727 14 7.479 14ZM20.521 14C22.274 14 23.5 15.492 23.5 17.327 23.5 18.25 22.772 19 21.878 19L21.364 19C21.139 19 20.97 18.802 20.997 18.578 21.01 18.461 21.017 18.342 21.017 18.221L21.017 17.724C21.017 16.568 20.667 15.491 20.067 14.591 19.899 14.338 20.067 14 20.369 14L20.521 14ZM8.25 13C7.147 13 6.25 11.991 6.25 10.75 6.25 9.384 7.035 8.5 8.25 8.5 9.465 8.5 10.25 9.384 10.25 10.75 10.25 11.991 9.353 13 8.25 13ZM19.75 13C18.647 13 17.75 11.991 17.75 10.75 17.75 9.384 18.535 8.5 19.75 8.5 20.965 8.5 21.75 9.384 21.75 10.75 21.75 11.991 20.853 13 19.75 13ZM15.172 13.5C17.558 13.5 19.5 15.395 19.5 17.724L19.5 18.221C19.5 19.202 18.683 20 17.677 20L10.323 20C9.317 20 8.5 19.202 8.5 18.221L8.5 17.724C8.5 15.395 10.441 13.5 12.828 13.5L15.172 13.5ZM16.75 9C16.75 10.655 15.517 12 14 12 12.484 12 11.25 10.655 11.25 9 11.25 7.15 12.304 6 14 6 15.697 6 16.75 7.15 16.75 9Z">
                                </path>
                            </svg>
                        </div>
                        <div class="ms-2 ms-md-3 ms-lg-5">
                            <svg viewBox="0 0 28 28" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 em6zcovv" height="28" width="28">
                                <path d="M23.5 9.5H10.25a.75.75 0 00-.75.75v7c0 .414.336.75.75.75H17v5.5H4.5v-19h19v5zm0 14h-5v-6.25a.75.75 0 00-.75-.75H11V11h12.5v12.5zm1.5.25V4.25C25 3.561 24.439 3 23.75 3H4.25C3.561 3 3 3.561 3 4.25v19.5c0 .689.561 1.25 1.25 1.25h19.5c.689 0 1.25-.561 1.25-1.25z">
                                </path>
                            </svg>
                        </div>
                    </div>

                </li>
                <li onclick="closeSidebar()" class="mt-3">
                    <div class="">
                        <div class="d-flex align-items-center justify-content-around mt-4">
                            <div class="iconBg rounded-circle">
                                <i class="fa fa-th"></i>
                            </div>
                            <div class="iconBg rounded-circle ms-3">
                                <svg viewBox="0 0 28 28" alt="" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 fzdkajry" height="20" width="20">
                                    <path d="M7.847 23.488C9.207 23.488 11.443 23.363 14.467 22.806 13.944 24.228 12.581 25.247 10.98 25.247 9.649 25.247 8.483 24.542 7.825 23.488L7.847 23.488ZM24.923 15.73C25.17 17.002 24.278 18.127 22.27 19.076 21.17 19.595 18.724 20.583 14.684 21.369 11.568 21.974 9.285 22.113 7.848 22.113 7.421 22.113 7.068 22.101 6.79 22.085 4.574 21.958 3.324 21.248 3.077 19.976 2.702 18.049 3.295 17.305 4.278 16.073L4.537 15.748C5.2 14.907 5.459 14.081 5.035 11.902 4.086 7.022 6.284 3.687 11.064 2.753 15.846 1.83 19.134 4.096 20.083 8.977 20.506 11.156 21.056 11.824 21.986 12.355L21.986 12.356 22.348 12.561C23.72 13.335 24.548 13.802 24.923 15.73Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="iconBg rounded-circle ms-3">
                                <i class="bi bi-caret-down-fill"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center placeholderImg mt-3">
                            <img src="https://thumbs.dreamstime.com/b/person-gray-photo-placeholder-man-t-shirt-white-background-147541161.jpg" alt="">
                            <h6 class="ms-2 mb-0">Petterson</h6>
                        </div>

                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- ==== SIDEBAR END ==== -->

    <!-- HEADER START -->
    <div class="headerContainer position-relative w-100 shadow-sm bg-white px-2">
        <div class="d-flex justify-content-between align-items-center h-100">
            <div class="d-flex align-items-center">
                <div class="crossICon rounded-circle" onclick="handleAddMomentCross(event);">
                    <i class="bi bi-x-lg text-white"></i>
                </div>
                <img class="logo" src="{{asset('logo.png')}}" />

            </div>

            <div id="hambergerBtn" class="d-block d-md-none">
                <i class="fas fa-bars h2 mb-0"></i>
            </div>
            <div class="d-none d-md-flex">
                <div class="d-flex align-items-center placeholderImg">
                    <img src="https://thumbs.dreamstime.com/b/person-gray-photo-placeholder-man-t-shirt-white-background-147541161.jpg" width="35px" height="auto" alt="">
                    <h6 class="ml-2 mb-0">Petterson</h6>
                </div>
                <div class="d-flex align-items-center ms-4 ml-4">
                    <div class="iconBg rounded-circle">
                        <i class="fa fa-th"></i>
                    </div>
                    <div class="iconBg rounded-circle ms-3 ml-4">
                        <svg viewBox="0 0 28 28" alt="" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 fzdkajry" height="20" width="20">
                            <path d="M7.847 23.488C9.207 23.488 11.443 23.363 14.467 22.806 13.944 24.228 12.581 25.247 10.98 25.247 9.649 25.247 8.483 24.542 7.825 23.488L7.847 23.488ZM24.923 15.73C25.17 17.002 24.278 18.127 22.27 19.076 21.17 19.595 18.724 20.583 14.684 21.369 11.568 21.974 9.285 22.113 7.848 22.113 7.421 22.113 7.068 22.101 6.79 22.085 4.574 21.958 3.324 21.248 3.077 19.976 2.702 18.049 3.295 17.305 4.278 16.073L4.537 15.748C5.2 14.907 5.459 14.081 5.035 11.902 4.086 7.022 6.284 3.687 11.064 2.753 15.846 1.83 19.134 4.096 20.083 8.977 20.506 11.156 21.056 11.824 21.986 12.355L21.986 12.356 22.348 12.561C23.72 13.335 24.548 13.802 24.923 15.73Z">
                            </path>
                        </svg>
                    </div>
                    <div class="iconBg rounded-circle ms-3 ml-4">
                        <i class="bi bi-caret-down-fill"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HEADER END -->

    <!-- BODY DESKTOP START -->
    <div class="container-fluid d-none d-md-block">
        <div class="row">
            <div class="fullHeight col-3 shadow py-2" id="sidebar-to-add" style="overflow-y: scroll;">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Your Story</h4>
                    <div class="iconBg2 rounded-circle">
                        <a class="text-decoration-none" href="marketPlace.html">
                            <i class="bi bi-gear-fill h5 text-dark"></i>
                        </a>
                    </div>
                </div>

                <a class="text-decoration-none" href="stories.html">
                    <div class="d-flex align-items-center mt-3">
                        <div class="placeholderImg2">
                            <img src="https://thumbs.dreamstime.com/b/person-gray-photo-placeholder-man-t-shirt-white-background-147541161.jpg" alt="">
                        </div>
                        <h6 class="mb-0 ml-3 text-secondary">Mr. Petterson</h6>
                    </div>
                </a>
                <hr>

            </div>
            <div class="fullHeight col-9 d-flex justify-content-center align-items-center" id="main-body-div">
                <a class="text-decoration-none" role="button" style="position: relative;">
                    <div class="creatPhoto d-flex flex-column justify-content-center align-items-center">
                        <div class="cardIconCont">
                            <i class="fa fa-photo-video"></i>
                        </div>
                        <h6 class="mt-2 text-white">Create a Photo Story</h6>
                    </div>
                    <input type="file" onchange="handleFileChange(event);" class="input-image-file">
                </a>
                <a class="text-decoration-none" role="button" onclick="handleCreateTextStory(event);">
                    <div class="createText d-flex flex-column justify-content-center align-items-center ms-4 m-4">
                        <div class="cardIconCont">
                            <i class="textIcon"></i>
                        </div>
                        <h6 class="mt-2 text-white">Create a Text Story</h6>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- BODY DESKTOP END -->

    <!-- BODY MOBILE START -->
    <div class="d-block d-md-none mb-4">
        <div class="shadow">
            <div class="d-flex justify-content-between align-items-center px-2 py-2">
                <h4 class="mb-0">Your Story</h4>
                <div class="iconBg2 rounded-circle">
                    <a class="text-decoration-none" href="marketPlace.html">
                        <i class="bi bi-gear-fill h5 text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="d-flex w-100 px-2 pb-2 overflow-scroll">
                <div class="storyCardMobile">
                    <img src="https://thumbs.dreamstime.com/b/person-gray-photo-placeholder-man-t-shirt-white-background-147541161.jpg" alt="">
                    <div>
                        <small class="py-1">
                            Mr. Petter
                        </small>
                    </div>
                </div>
                <div class="storyCardMobile">
                    <img src="https://thumbs.dreamstime.com/b/person-gray-photo-placeholder-man-t-shirt-white-background-147541161.jpg" alt="">
                    <div>
                        <small class="py-1">
                            Mr. Petter
                        </small>
                    </div>
                </div>
                <div class="storyCardMobile">
                    <img src="https://thumbs.dreamstime.com/b/person-gray-photo-placeholder-man-t-shirt-white-background-147541161.jpg" alt="">
                    <div>
                        <small class="py-1">
                            Mr. Petter
                        </small>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="mt-4 d-flex flex-column justify-content-center align-items-center">
                <a class="text-decoration-none" href="secondPage.html">
                    <div class="creatPhoto d-flex flex-column justify-content-center align-items-center">
                        <div class="cardIconCont">
                            <i class="picIcon"></i>
                        </div>
                        <h6 class="mt-2 text-white">Create a Photo Story</h6>
                    </div>
                </a>
                <a class="text-decoration-none" role="button" onclick="handleCreateTextStory(event);">
                    <div class="createText d-flex flex-column justify-content-center align-items-center mt-4">
                        <div class="cardIconCont">
                            <i class="textIcon"></i>
                        </div>
                        <h6 class="mt-2 text-white">Create a Text Story</h6>
                    </div>
                </a>
            </div>

        </div>
    </div>
    <!-- BODY MOBILE END -->
</div>
@endpush

@push('scripts')
<script src="{{asset('js/zuck/zuck.min.js')}}"></script>
<script type="text/javascript" src="https://nhn.github.io/tui.image-editor/latest/examples/js/theme/white-theme.js"></script>
<script type="text/javascript" src="https://nhn.github.io/tui.image-editor/latest/examples/js/theme/black-theme.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js" integrity="sha512-01CJ9/g7e8cUmY0DFTMcUw/ikS799FHiOA0eyHsUWfOetgbx/t6oV4otQ5zXKQyIrQGTHSmRVPIgrgLcZi/WMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="assets/script.js"></script>
<script>
    var title = "Create Stories | FyreStream";

    var sidebarAdditions = `
    <div class="d-flex flex-column align-items-center placeholderImg ms-3 ps-4 pe-2">
        <div class="bgs">
            <button class="bg-btn" data-image="${window.origin}/storage/images/backgrounds/01.jpg" style="background-image: url('${window.origin}/storage/images/backgrounds/01.jpg');"></button>
            <button class="bg-btn" data-image="${window.origin}/storage/images/backgrounds/02.jpg" style="background-image: url('${window.origin}/storage/images/backgrounds/02.jpg');"></button>
            <button class="bg-btn" data-image="${window.origin}/storage/images/backgrounds/03.jpg" style="background-image: url('${window.origin}/storage/images/backgrounds/03.jpg');"></button>
            <button class="bg-btn" data-image="${window.origin}/storage/images/backgrounds/10.jpg" style="background-image: url('${window.origin}/storage/images/backgrounds/10.jpg');"></button>
        </div>
    </div>
    <div class="shareBtn position-absolute d-flex py-3 shadow w-100 p-2">
        <button class="border-0 py-2 rounded-3 fw-bold mr-2" data-btn="discard-momment-add">Discard</button>
        <button class="ms-3 border-0 rounded-3 text-white fw-bold" id="share-the-story-btn">
            Share to story
        </button>
    </div>
    `;
    var sidebarImageEditor = `
    <div class="d-flex flex-column align-items-center placeholderImg ms-3 ps-4 pe-2">

    </div>
    <div class="shareBtn position-absolute d-flex py-3 shadow w-100 p-2">
        <button class="border-0 py-2 rounded-3 fw-bold mr-2" data-btn="discard-momment-add">Discard</button>
        <button class="ms-3 border-0 rounded-3 text-white fw-bold" id="share-the-story-image-btn">
            Share to story
        </button>
    </div>
    `;

    var previewDiv = `
    <div class="textWrite shadow p-3 rounded-3">
        <h5>Preview</h5>
        <div class="darkSection rounded-3">
            <div class="typeImg position-relative">
                <div id="to-image-div">
                    <img
                        id="preview-bg-image"
                        src="${window.origin}/storage/images/backgrounds/01.jpg"
                    />
                    <div class="typeText">
                        <textarea onfocus="colorSlotShow1()" data-color="red" id="start-text-enter" placeholder="Start typing" ></textarea>
                    </div>
                </div>

                <div id="desktopColor" class="colorSection bg-white rounded-3 p-2">
                    <div class="position-relative">
                        <select id="select-fonts" class="w-100 border rounded-3 py-2 ps-5 pe-2 fw-bold">
                            <option value="heading" class="fw-bold">Heading</option>
                            <option value="normal" class="fw-normal">Normal</option>
                            <option value="light" class="fw-light">Light</option>
                        </select>
                        <div class="aTag position-absolute">Aa</div>
                    </div>
                    <div
                        style="border: 1px solid rgb(223, 223, 223)"
                        class=" colorSlots d-flex flex-column p-2 pt-1 pb-3 mt-3 rounded-3"
                    >
                        <div class="slot1 d-flex justify-content-between mt-2">
                            <div class="colorSingle"></div>
                            <div class="colorSingle"></div>
                            <div class="colorSingle"></div>
                            <div class="colorSingle"></div>
                            <div class="colorSingle"></div>
                            <div class="colorSingle"></div>
                            <div class="colorSingle"></div>
                        </div>
                        <div class="slot2 d-flex justify-content-between mt-2">
                            <div class="colorSingle"></div>
                            <div class="colorSingle"></div>
                            <div class="colorSingle"></div>
                            <div class="colorSingle"></div>
                            <div class="colorSingle"></div>
                            <div class="colorSingle"></div>
                            <div class="colorSingle"></div>
                        </div>
                        <div class="slot3 d-flex justify-content-between mt-2">
                            <div class="colorSingle"></div>
                            <div class="colorSingle"></div>
                            <div class="colorSingle"></div>
                            <div class="colorSingle"></div>
                            <div class="colorSingle"></div>
                            <div class="colorSingle"></div>
                            <div class="colorSingle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    `;


    const originalTitle = document.head.title;
    const originalBody = document.body.cloneNode(true);

    function handleAddMomentCross(e) {
        discardCreateMommentModal();
    }

    function handleCreateTextStory(e) {
        document.getElementById("sidebar-to-add").innerHTML += sidebarAdditions;
        document.getElementById("main-body-div").innerHTML = previewDiv;
    }

    function handleCreateImageStory() {

    }

    document.addEventListener("click", e => {
        console.log(e.target.dataset);
        if (e.target.dataset.btn === "add-momment-btn") {
            document.getElementById("app").classList.add('d-none');
            document.head.title = title;
            document.getElementById("add-momment-modal").classList.remove('d-none');
        }

        if (e.target.classList.contains('colorSingle')) {
            document.getElementById("start-text-enter").style.color = getComputedStyle(e.target).backgroundColor;
        }

        if (e.target.classList.contains("bg-btn")) {
            document.getElementById("preview-bg-image").src = e.target.dataset.image;
        }
        if (e.target.getAttribute("id") === "share-the-story-btn") {
            let node = document.getElementById('to-image-div');
            requestLoadingModal.show();
            domtoimage.toPng(node)
                .then(function(dataUrl) {
                    let request = $.ajax({
                        url: window.origin + "/api/momment/save"
                        , type: "post"
                        , data: {
                            "image": dataUrl
                        }
                        , headers: {
                            "Authorization": `Bearer ${getCookie('token')}`
                            , "Accept": "application/json"
                        }
                    });
                    request.done(function(response, textStatus, jqXHR) {
                        if (response.success) {
                            requestLoadingModal.innerHTML = `
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Story created successfuly</h5>
                                        </div>
                                        <div class="modal-body">
                                            New story created succesfully
                                        </div>
                                    </div>
                                </div>
                            `;
                            let newStory = response.story;
                            if (currentUserMomments.length <= 0) {
                                stories.add(
                                    Zuck.buildTimelineItem(
                                        currentUserData["username"].toLowerCase()
                                        , window.origin + currentUserData["image"]
                                        , "Your story"
                                        , false
                                        , new Date(newStory['created_at']).getTime() / 1000
                                        , [{
                                            id: newStory["id"]
                                            , type: "photo"
                                            , length: 5
                                            , src: window.origin + newStory["value"]
                                            , preview: window.origin + newStory["value"]
                                            , link: ""
                                            , linkText: false
                                            , time: new Date(newStory['created_at']).getTime() / 1000
                                            , seen: false
                                        }]
                                    )
                                );

                                currentUserMomments.push(newStory);
                            } else {
                                stories.addItem(currentUserData["username"].toLowerCase(), {
                                    id: newStory["id"]
                                    , type: "photo"
                                    , length: 5
                                    , src: window.origin + newStory["value"]
                                    , preview: window.origin + newStory["value"]
                                    , link: ""
                                    , linkText: false
                                    , time: new Date(newStory['created_at']).getTime() / 1000
                                    , seen: false
                                });
                            }
                            setTimeout(() => {
                                requestLoadingModal.hide();
                                requestLoadingModal.innerHTML = `
                                <div class="modal-holder">
                                    <div class="lds-ring">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>`;
                                discardCreateMommentModal();

                            }, 1500)
                        } else {
                            console.log("Error", response);
                            requestLoadingModal.innerHTML = `
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Story creation failed</h5>
                                </div>
                                <div class="modal-body">
                                    ${response.message}
                                </div>
                            </div>
                        </div>
                    `;
                            setTimeout(() => {
                                requestLoadingModal.hide();
                                requestLoadingModal.innerHTML = `
                        <div class="modal-holder">
                            <div class="lds-ring">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>`;
                            }, 1000)
                        }
                    });
                    request.fail(function(jqXHR, textStatus, errorThrown) {});
                })
                .catch(function(error) {
                    requestLoadingModal.innerHTML = `
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Story creation failed</h5>
                                </div>
                                <div class="modal-body">
                                    ${response.message}
                                </div>
                            </div>
                        </div>
                    `;
                    setTimeout(() => {
                        requestLoadingModal.hide();
                        requestLoadingModal.innerHTML = `
                        <div class="modal-holder">
                            <div class="lds-ring">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>`;
                    }, 3000)
                });
        }

        if (e.target.getAttribute("id") === "share-the-story-image-btn") {
            requestLoadingModal.show();
            let request = $.ajax({
                url: window.origin + "/api/momment/save"
                , type: "post"
                , data: {
                    "image": imageEditor.toDataURL()
                }
                , headers: {
                    "Authorization": `Bearer ${getCookie('token')}`
                    , "Accept": "application/json"
                }
            });
            request.done(function(response, textStatus, jqXHR) {
                if (response.success) {
                    requestLoadingModal.innerHTML = `
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Story created successfuly</h5>
                                </div>
                                <div class="modal-body">
                                    New story created succesfully
                                </div>
                            </div>
                        </div>
                    `;

                    let newStory = response.story;
                    stories.addItem(currentUserData["username"].toLowerCase(), {
                        id: newStory["id"]
                        , type: "photo"
                        , length: 5
                        , src: window.origin + newStory["value"]
                        , preview: window.origin + newStory["value"]
                        , link: ""
                        , linkText: false
                        , time: new Date(newStory['created_at']).getTime() / 1000
                        , seen: false
                    });

                    setTimeout(() => {
                        requestLoadingModal.hide();
                        requestLoadingModal.innerHTML = `
                        <div class="modal-holder">
                            <div class="lds-ring">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>`;
                        discardCreateMommentModal();
                    }, 1500)
                } else {
                    console.log("Error", response);
                    requestLoadingModal.innerHTML = `
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Story creation failed</h5>
                                </div>
                                <div class="modal-body">
                                    ${response.message}
                                </div>
                            </div>
                        </div>
                    `;
                    setTimeout(() => {
                        requestLoadingModal.hide();
                        requestLoadingModal.innerHTML = `
                        <div class="modal-holder">
                            <div class="lds-ring">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>`;
                    }, 1000)
                }
            });
            request.fail(function(jqXHR, textStatus, errorThrown) {});
        }

        if (e.target.dataset.btn === "discard-momment-add") {
            discardCreateMommentModal();
        }
    });

    document.addEventListener("change", e => {
        if (e.target.getAttribute("id") === "select-fonts") {
            console.log(e.target.value);
            if (e.target.value === "heading") {
                e.target.style.fontWeight = "bold";
                document.getElementById("start-text-enter").style.fontSize = "2.5rem";
                document.getElementById("start-text-enter").style.fontWeight = "bold";
                document.getElementById("start-text-enter").maxLength = "120";
            } else if (e.target.value === "normal") {
                e.target.style.fontWeight = "600";
                document.getElementById("start-text-enter").style.fontSize = "2rem";
                document.getElementById("start-text-enter").style.fontWeight = "600";
                document.getElementById("start-text-enter").maxLength = "165";


            } else if (e.target.value === "light") {
                e.target.style.fontWeight = "200";
                document.getElementById("start-text-enter").style.fontSize = "1.5rem";
                document.getElementById("start-text-enter").style.fontWeight = "200";
                document.getElementById("start-text-enter").maxLength = "270";
            }
        }
    });

    document.addEventListener("input", e => {
        if (e.target.getAttribute("id") === "start-text-enter") {

        }
    });

    function discardCreateMommentModal() {
        document.getElementById("app").classList.remove('d-none');
        document.head.title = originalTitle;
        document.getElementById("add-momment-modal").classList.add('d-none');

        document.getElementById("main-body-div").innerHTML = `
        <a class="text-decoration-none" role="button" style="position: relative;">
            <div class="creatPhoto d-flex flex-column justify-content-center align-items-center">
                <div class="cardIconCont">
                    <i class="fa fa-photo-video"></i>
                </div>
                <h6 class="mt-2 text-white">Create a Photo Story</h6>
            </div>
            <input type="file" onchange="handleFileChange(event);" class="input-image-file">
        </a>
        <a class="text-decoration-none" role="button" onclick="handleCreateTextStory(event);">
            <div class="createText d-flex flex-column justify-content-center align-items-center ms-4 m-4">
                <div class="cardIconCont">
                    <i class="textIcon"></i>
                </div>
                <h6 class="mt-2 text-white">Create a Text Story</h6>
            </div>
        </a>
        `;

        document.getElementById("sidebar-to-add").innerHTML = `
        <div class="d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Your Story</h4>
            <div class="iconBg2 rounded-circle">
                <a class="text-decoration-none" href="marketPlace.html">
                    <i class="bi bi-gear-fill h5 text-dark"></i>
                </a>
            </div>
        </div>

        <a class="text-decoration-none" href="stories.html">
            <div class="d-flex align-items-center mt-3">
                <div class="placeholderImg2">
                    <img src="https://thumbs.dreamstime.com/b/person-gray-photo-placeholder-man-t-shirt-white-background-147541161.jpg" alt="">
                </div>
                <h6 class="mb-0 ml-3 text-secondary">Mr. Petterson</h6>
            </div>
        </a>
        <hr>
        `;
    }

</script>

{{-- Zuck Intializing stories--}}
<script>
    const currentUserMomments = JSON.parse(`{!!json_encode($userMomments, JSON_HEX_TAG) !!}`);
    const currentUserData = JSON.parse(`{!!json_encode(Auth::user(), JSON_HEX_TAG) !!}`);
    var zuckSystemStories = [];
    var timestamp = function() {
        var timeIndex = 0;
        var shifts = [35, 60, 60 * 3, 60 * 60 * 2, 60 * 60 * 25, 60 * 60 * 24 * 4, 60 * 60 * 24 * 10];
        var now = new Date();
        var shift = shifts[timeIndex++] || 0;
        var date = new Date(now - shift * 1000);
        return date.getTime() / 1000;
    };

    if (currentUserMomments.length > 0) {
        let zuckStoryArray = [];
        currentUserMomments.forEach(story => {
            zuckStoryArray.push(
                [story["id"], "photo", 5, window.origin + story['value'], window.origin + story['value'], false, false, new Date(story['created_at']).getTime() / 1000]
            );
        });
        zuckSystemStories.push(
            Zuck.buildTimelineItem(
                currentUserData["username"].toLowerCase()
                , window.origin + currentUserData["image"]
                , "Your story"
                , false
                , new Date(currentUserMomments[0]['created_at']).getTime() / 1000
                , zuckStoryArray
            )
        );
    }

    /* if(allDbStories.length > 0){
        allDbStories.forEach(singleDbStory => {
            let user = singleDbStory['user'];
            let stories = singleDbStory['momments'];
            let zuckStoryArray = [];
            stories.forEach(story => {
                zuckStoryArray.push(
                    [story["id"], "photo", 5, window.origin + story['value'], window.origin + story['value'], false, false, new Date(story['created_at']).getTime() / 1000]
                );
            });
            zuckSystemStories.push(
                Zuck.buildTimelineItem(
                    user["username"].toLowerCase()
                    , window.origin + user["image"]
                    , user["name"]
                    , false
                    , timestamp()
                    , zuckStoryArray
                )
            );
        });
    } */

    var currentSkin = {
        "name": "Snapssenger"
        , "params": {
            "avatars": false
            , "list": false
            , "autoFullScreen": true
            , "cubeEffect": true
            , "paginationArrows": false
        }
    };
    let stories = new Zuck("momments", {
        backNative: true
        , previousTap: true
        , skin: currentSkin['name']
        , autoFullScreen: currentSkin['params']['autoFullScreen']
        , avatars: currentSkin['params']['avatars']
        , paginationArrows: currentSkin['params']['paginationArrows']
        , list: currentSkin['params']['list']
        , cubeEffect: currentSkin['params']['cubeEffect']
        , localStorage: false
        , backButton: true
        , stories: zuckSystemStories
        , callbacks: {
            onOpen(storyId, callback) {
                callback(); // on open story viewer
            },

            onView(storyId) {
                console.log(storyId);
            },

            onEnd(storyId, callback) {
                callback(); // on end story
            },

            onClose(storyId, callback) {
                callback(); // on close story viewer
            },

            onNavigateItem(storyId, nextStoryId, callback) {
                callback(); // on navigate item of story
            },

            onDataUpdate(currentState, callback) {
                callback(); // use to update state on your reactive framework
            }
        }
    , });

    if (currentUserMomments.length <= 0) {
        const mommentsDiv = document.getElementById("momments");
        mommentsDiv.classList.add("d-flex", "flex-nowrap");
        mommentsDiv.style.overflowX = "scroll";
        for (let index = 1; index <= 3; index++) {
            mommentsDiv.innerHTML += `
                <div class="col-md-4 col-sm-6 col-6 px-1 addMomentModal" data-btn="add-momment-btn" style="min-width: 120px; max-width: 120px;">
                    <div data-btn="add-momment-btn" class="default-moment-box overflow-hidden position-relative text-center text-white" style="height: 195px">
                        <i data-btn="add-momment-btn" class="fa fa-plus right-bar-add-circlr"></i>
                    </div>
                </div>
            `;
        }
    }

</script>

@endpush
