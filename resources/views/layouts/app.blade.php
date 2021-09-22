<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FyreStream') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- CSRF Token -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('favicon/safari-pinned-tab.svg')}}" color="#5bbad5">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>

    <!-- Zuck.js stories library styles -->
    <link rel="stylesheet" href="{{asset('js/zuck/snapssenger.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/zuck/zuck.min.css')}}">

    {{-- Styles from frontend template given --}}
    <!-- styles -->
    <link rel="stylesheet" href="{{ asset('css/styles.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/raw/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/raw/main.css') }}">
    <!-- simplebar styles -->
    <link rel="stylesheet" href="{{ asset('css/vendor/simplebar.css') }}">
    <!-- tiny-slider styles -->
    <link rel="stylesheet" href="{{ asset('css/vendor/tiny-slider.css') }}">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 1.5;
            position: relative;
        }

        /* --START Request loading modal styles */
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
        /* Request loading modal styles --END */

    </style>
    @stack('styles')
</head>
<body>
    <div id="app">
        @if (session('status'))
        <div class="alert alert-success mt-2 text-center" role="alert">
            {{ session('status') }}
        </div>
        @endif
        @if (session('message'))
        <div class="alert alert-success mt-2 text-center" role="alert">
            {{ session('message') }}
        </div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger mt-2 text-center" role="alert">
            {{ session('error') }}
        </div>
        @endif

        <!-- NAVIGATION WIDGET -->
        <nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">
            <div class="leftmenu">
                <ul class="two mb-0">
                    <li>
                        <a href="http://fyrestream.com//videos" class="mySidebar-toggoler">
                            <img src="http://fyrestream.com//content/themes/default/frontend/images/videos-red.png"
                                class="hover-img">
                            <div class="tooltip">Videos</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://fyrestream.com//people" class="mySidebar-toggoler">
                            <img src="http://fyrestream.com//content/themes/default/frontend/images/sidebar/cruzinabove 3-06.png"
                                class="hover-img">
                            <div class="tooltip">People</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://fyrestream.com//market" class="mySidebar-toggoler">
                            <img src="http://fyrestream.com//content/themes/default/frontend/images/sidebar/cruzinabove 3-05.png"
                                class="hover-img">
                            <div class="tooltip">Marketplace</div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="mySidebar-toggoler">
                            <img src="http://fyrestream.com//content/themes/default/frontend/images/entertainment-red.png"
                                class="hover-img">
                            <div class="tooltip">Entertainment</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="mySidebar-toggoler">
                            <img src="http://fyrestream.com//content/themes/default/frontend/images/group_channels-red.png"
                                class="hover-img">
                            <div class="tooltip">Events</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://fyrestream.com//groups" class="mySidebar-toggoler">
                            <img src="http://fyrestream.com//content/themes/default/frontend/images/discover_members-red.png"
                                class="hover-img">
                            <div class="tooltip">Groups</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://fyrestream.com//groups" class="mySidebar-toggoler">
                            <img src="http://fyrestream.com//content/themes/default/frontend/images/sidebar/cruzinabove 3-11.png"
                                class="hover-img">
                            <div class="tooltip">Groups</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://fyrestream.com//groups" class="mySidebar-toggoler">
                            <img src="http://fyrestream.com//content/themes/default/frontend/images/sidebar/cruzinabove 3-08.png"
                                class="hover-img">
                            <div class="tooltip">Groups</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://fyrestream.com//groups" class="mySidebar-toggoler">
                            <img src="http://fyrestream.com//content/themes/default/frontend/images/sidebar/cruzinabove 3-14.png"
                                class="hover-img">
                            <div class="tooltip">Groups</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://fyrestream.com//groups" class="mySidebar-toggoler">
                            <img src="http://fyrestream.com//content/themes/default/frontend/images/sidebar/cruzinabove 3-12.png"
                                class="hover-img">
                            <div class="tooltip">Groups</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://fyrestream.com//groups" class="mySidebar-toggoler">
                            <img src="http://fyrestream.com//content/themes/default/frontend/images/sidebar/cruzinabove 3-03.png"
                                class="hover-img">
                            <div class="tooltip">Groups</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://fyrestream.com//groups" class="mySidebar-toggoler">
                            <img src="http://fyrestream.com//content/themes/default/frontend/images/Right Side Icons/Color/PNGs/Fyre diamond.png"
                                alt="">
                        </a>
                    </li>
                    <li>
                        <a href="http://fyrestream.com//groups" class="mySidebar-toggoler">
                            <img src="http://fyrestream.com//content/themes/default/frontend/images/Right Side Icons/Color/PNGs/Marketplace.png"
                                alt="">
                        </a>
                    </li>
                    <li>
                        <a href="http://fyrestream.com//groups" class="mySidebar-toggoler">
                            <img src="http://fyrestream.com//content/themes/default/frontend/images/Right Side Icons/Color/PNGs/Video.png"
                                alt="">
                        </a>
                    </li>
                    <li>
                        <a href="http://fyrestream.com//groups" class="mySidebar-toggoler">
                            <img src="http://fyrestream.com//content/themes/default/frontend/images/Right Side Icons/Color/PNGs/Dating.png"
                                alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="create-tab">
                            <i class="fa fa-plus"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /NAVIGATION WIDGET -->

        <!-- NAVIGATION WIDGET -->
        <nav id="navigation-widget" class="navigation-widget navigation-widget-desktop sidebar left hidden" data-simplebar>
            <!-- NAVIGATION WIDGET COVER -->
            <figure class="navigation-widget-cover liquid">
                <img src="{{ asset('img/profile/fs-cover.png') }}" alt="cover-01">
            </figure>
            <!-- /NAVIGATION WIDGET COVER -->

            <!-- USER SHORT DESCRIPTION -->
            <div class="user-short-description">
                <!-- USER SHORT DESCRIPTION AVATAR -->
                <a class="user-short-description-avatar user-avatar medium" href="profile-timeline.html">
                    <!-- USER AVATAR BORDER -->
                    <div class="user-avatar-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-120-132"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BORDER -->

                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-82-90" data-src="img/profile/ww.jpeg"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->

                    <!-- USER AVATAR PROGRESS -->
                    <div class="user-avatar-progress">
                        <!-- HEXAGON -->
                        <div class="hexagon-progress-100-110"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR PROGRESS -->

                    <!-- USER AVATAR PROGRESS BORDER -->
                    <div class="user-avatar-progress-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-border-100-110"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR PROGRESS BORDER -->

                    <!-- USER AVATAR BADGE -->
                    <div class="user-avatar-badge">
                        <!-- USER AVATAR BADGE BORDER -->
                        <div class="user-avatar-badge-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-32-36"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE BORDER -->

                        <!-- USER AVATAR BADGE CONTENT -->
                        <div class="user-avatar-badge-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-dark-26-28"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE CONTENT -->

                        <!-- USER AVATAR BADGE TEXT -->
                        <p class="user-avatar-badge-text">24</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                    </div>
                    <!-- /USER AVATAR BADGE -->
                </a>
                <!-- /USER SHORT DESCRIPTION AVATAR -->

                <!-- USER SHORT DESCRIPTION TITLE -->
                <p class="user-short-description-title"><a href="profile-timeline.html">Sean David</a></p>
                <!-- /USER SHORT DESCRIPTION TITLE -->

                <!-- USER SHORT DESCRIPTION TEXT -->
                <p class="user-short-description-text"><a href="#">I am a Tech Lover</a></p>
                <!-- /USER SHORT DESCRIPTION TEXT -->
            </div>
            <!-- /USER SHORT DESCRIPTION -->

            <!-- BADGE LIST -->
            <div class="badge-list small">
                <!-- BADGE ITEM -->
                <div class="badge-item">
                    <img src="{{ asset('img/badge/gold-s.png') }}" alt="badge-gold-s">
                </div>
                <!-- /BADGE ITEM -->

                <!-- BADGE ITEM -->
                <div class="badge-item">
                    <img src="{{ asset('img/badge/age-s.png') }}" alt="badge-age-s">
                </div>
                <!-- /BADGE ITEM -->

                <!-- BADGE ITEM -->
                <div class="badge-item">
                    <img src="{{ asset('img/badge/caffeinated-s.png') }}" alt="badge-caffeinated-s">
                </div>
                <!-- /BADGE ITEM -->

                <!-- BADGE ITEM -->
                <div class="badge-item">
                    <img src="{{ asset('img/badge/warrior-s.png') }}" alt="badge-warrior-s">
                </div>
                <!-- /BADGE ITEM -->

                <!-- BADGE ITEM -->
                <a class="badge-item" href="profile-badges.html">
                    <img src="{{ asset('img/badge/blank-s.png') }}" alt="badge-blank-s">
                    <!-- BADGE ITEM TEXT -->
                    <p class="badge-item-text">+9</p>
                    <!-- /BADGE ITEM TEXT -->
                </a>
                <!-- /BADGE ITEM -->
            </div>
            <!-- /BADGE LIST -->

            <!-- MENU -->
            <ul class="menu">
                <!-- MENU ITEM -->
                <li class="menu-item">
                    <!-- MENU ITEM LINK -->
                    <a class="menu-item-link" href="newsfeed.html">
                        <!-- MENU ITEM LINK ICON -->
                        <svg class="menu-item-link-icon icon-newsfeed">
                            <use xlink:href="#svg-newsfeed"></use>
                        </svg>
                        <!-- /MENU ITEM LINK ICON -->
                        Newsfeed
                    </a>
                    <!-- /MENU ITEM LINK -->
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <!-- MENU ITEM LINK -->
                    <a class="menu-item-link" href="overview.html">
                        <!-- MENU ITEM LINK ICON -->
                        <svg class="menu-item-link-icon icon-overview">
                            <use xlink:href="#svg-overview"></use>
                        </svg>
                        <!-- /MENU ITEM LINK ICON -->
                        Overview
                    </a>
                    <!-- /MENU ITEM LINK -->
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <!-- MENU ITEM LINK -->
                    <a class="menu-item-link" href="groups.html">
                        <!-- MENU ITEM LINK ICON -->
                        <svg class="menu-item-link-icon icon-group">
                            <use xlink:href="#svg-group"></use>
                        </svg>
                        <!-- /MENU ITEM LINK ICON -->
                        Groups
                    </a>
                    <!-- /MENU ITEM LINK -->
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <!-- MENU ITEM LINK -->
                    <a class="menu-item-link" href="members.html">
                        <!-- MENU ITEM LINK ICON -->
                        <svg class="menu-item-link-icon icon-members">
                            <use xlink:href="#svg-members"></use>
                        </svg>
                        <!-- /MENU ITEM LINK ICON -->
                        Members
                    </a>
                    <!-- /MENU ITEM LINK -->
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <!-- MENU ITEM LINK -->
                    <a class="menu-item-link" href="badges.html">
                        <!-- MENU ITEM LINK ICON -->
                        <svg class="menu-item-link-icon icon-badges">
                            <use xlink:href="#svg-badges"></use>
                        </svg>
                        <!-- /MENU ITEM LINK ICON -->
                        Badges
                    </a>
                    <!-- /MENU ITEM LINK -->
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <!-- MENU ITEM LINK -->
                    <a class="menu-item-link" href="quests.html">
                        <!-- MENU ITEM LINK ICON -->
                        <svg class="menu-item-link-icon icon-quests">
                            <use xlink:href="#svg-quests"></use>
                        </svg>
                        <!-- /MENU ITEM LINK ICON -->
                        Quests
                    </a>
                    <!-- /MENU ITEM LINK -->
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <!-- MENU ITEM LINK -->
                    <a class="menu-item-link" href="streams.html">
                        <!-- MENU ITEM LINK ICON -->
                        <svg class="menu-item-link-icon icon-streams">
                            <use xlink:href="#svg-streams"></use>
                        </svg>
                        <!-- /MENU ITEM LINK ICON -->
                        Streams
                    </a>
                    <!-- /MENU ITEM LINK -->
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <!-- MENU ITEM LINK -->
                    <a class="menu-item-link" href="events.html">
                        <!-- MENU ITEM LINK ICON -->
                        <svg class="menu-item-link-icon icon-events">
                            <use xlink:href="#svg-events"></use>
                        </svg>
                        <!-- /MENU ITEM LINK ICON -->
                        Events
                    </a>
                    <!-- /MENU ITEM LINK -->
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <!-- MENU ITEM LINK -->
                    <a class="menu-item-link" href="forums.html">
                        <!-- MENU ITEM LINK ICON -->
                        <svg class="menu-item-link-icon icon-forums">
                            <use xlink:href="#svg-forums"></use>
                        </svg>
                        <!-- /MENU ITEM LINK ICON -->
                        Forums
                    </a>
                    <!-- /MENU ITEM LINK -->
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <!-- MENU ITEM LINK -->
                    <a class="menu-item-link" href="marketplace.html">
                        <!-- MENU ITEM LINK ICON -->
                        <svg class="menu-item-link-icon icon-marketplace">
                            <use xlink:href="#svg-marketplace"></use>
                        </svg>
                        <!-- /MENU ITEM LINK ICON -->
                        Marketplace
                    </a>
                    <!-- /MENU ITEM LINK -->
                </li>
                <!-- /MENU ITEM -->
            </ul>
            <!-- /MENU -->
        </nav>
        <!-- /NAVIGATION WIDGET -->

        <!-- NAVIGATION WIDGET -->
        <nav id="navigation-widget-mobile" class="navigation-widget navigation-widget-mobile sidebar left hidden"
            data-simplebar>
            <!-- NAVIGATION WIDGET CLOSE BUTTON -->
            <div class="navigation-widget-close-button">
                <!-- NAVIGATION WIDGET CLOSE BUTTON ICON -->
                <svg class="navigation-widget-close-button-icon icon-back-arrow">
                    <use xlink:href="#svg-back-arrow"></use>
                </svg>
                <!-- NAVIGATION WIDGET CLOSE BUTTON ICON -->
            </div>
            <!-- /NAVIGATION WIDGET CLOSE BUTTON -->

            <!-- NAVIGATION WIDGET INFO WRAP -->
            <div class="navigation-widget-info-wrap">
                <!-- NAVIGATION WIDGET INFO -->
                <div class="navigation-widget-info">
                    <!-- USER AVATAR -->
                    <a class="user-avatar small no-outline" href="profile-timeline.html">
                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-30-32" data-src="img/profile/ww.jpeg"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->

                        <!-- USER AVATAR PROGRESS -->
                        <div class="user-avatar-progress">
                            <!-- HEXAGON -->
                            <div class="hexagon-progress-40-44"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR PROGRESS -->

                        <!-- USER AVATAR PROGRESS BORDER -->
                        <div class="user-avatar-progress-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-border-40-44"></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR PROGRESS BORDER -->

                        <!-- USER AVATAR BADGE -->
                        <div class="user-avatar-badge">
                            <!-- USER AVATAR BADGE BORDER -->
                            <div class="user-avatar-badge-border">
                                <!-- HEXAGON -->
                                <div class="hexagon-22-24"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR BADGE BORDER -->

                            <!-- USER AVATAR BADGE CONTENT -->
                            <div class="user-avatar-badge-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-dark-16-18"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR BADGE CONTENT -->

                            <!-- USER AVATAR BADGE TEXT -->
                            <p class="user-avatar-badge-text">24</p>
                            <!-- /USER AVATAR BADGE TEXT -->
                        </div>
                        <!-- /USER AVATAR BADGE -->
                    </a>
                    <!-- /USER AVATAR -->

                    <!-- NAVIGATION WIDGET INFO TITLE -->
                    <p class="navigation-widget-info-title"><a href="profile-timeline.html">Sean David</a></p>
                    <!-- /NAVIGATION WIDGET INFO TITLE -->

                    <!-- NAVIGATION WIDGET INFO TEXT -->
                    <p class="navigation-widget-info-text">Welcome Back!</p>
                    <!-- /NAVIGATION WIDGET INFO TEXT -->
                </div>
                <!-- /NAVIGATION WIDGET INFO -->

                <!-- NAVIGATION WIDGET BUTTON -->
                <p class="navigation-widget-info-button button small secondary">Logout</p>
                <!-- /NAVIGATION WIDGET BUTTON -->
            </div>
            <!-- /NAVIGATION WIDGET INFO WRAP -->

            <!-- NAVIGATION WIDGET SECTION TITLE -->
            <p class="navigation-widget-section-title">Sections</p>
            <!-- /NAVIGATION WIDGET SECTION TITLE -->

            <!-- MENU -->
            <ul class="menu">
                <!-- MENU ITEM -->
                <li class="menu-item">
                    <!-- MENU ITEM LINK -->
                    <a class="menu-item-link" href="newsfeed.html">
                        <!-- MENU ITEM LINK ICON -->
                        <svg class="menu-item-link-icon icon-newsfeed">
                            <use xlink:href="#svg-newsfeed"></use>
                        </svg>
                        <!-- /MENU ITEM LINK ICON -->
                        Newsfeed
                    </a>
                    <!-- /MENU ITEM LINK -->
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <!-- MENU ITEM LINK -->
                    <a class="menu-item-link" href="overview.html">
                        <!-- MENU ITEM LINK ICON -->
                        <svg class="menu-item-link-icon icon-overview">
                            <use xlink:href="#svg-overview"></use>
                        </svg>
                        <!-- /MENU ITEM LINK ICON -->
                        Overview
                    </a>
                    <!-- /MENU ITEM LINK -->
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <!-- MENU ITEM LINK -->
                    <a class="menu-item-link" href="groups.html">
                        <!-- MENU ITEM LINK ICON -->
                        <svg class="menu-item-link-icon icon-group">
                            <use xlink:href="#svg-group"></use>
                        </svg>
                        <!-- /MENU ITEM LINK ICON -->
                        Groups
                    </a>
                    <!-- /MENU ITEM LINK -->
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <!-- MENU ITEM LINK -->
                    <a class="menu-item-link" href="members.html">
                        <!-- MENU ITEM LINK ICON -->
                        <svg class="menu-item-link-icon icon-members">
                            <use xlink:href="#svg-members"></use>
                        </svg>
                        <!-- /MENU ITEM LINK ICON -->
                        Members
                    </a>
                    <!-- /MENU ITEM LINK -->
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <!-- MENU ITEM LINK -->
                    <a class="menu-item-link" href="badges.html">
                        <!-- MENU ITEM LINK ICON -->
                        <svg class="menu-item-link-icon icon-badges">
                            <use xlink:href="#svg-badges"></use>
                        </svg>
                        <!-- /MENU ITEM LINK ICON -->
                        Badges
                    </a>
                    <!-- /MENU ITEM LINK -->
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <!-- MENU ITEM LINK -->
                    <a class="menu-item-link" href="quests.html">
                        <!-- MENU ITEM LINK ICON -->
                        <svg class="menu-item-link-icon icon-quests">
                            <use xlink:href="#svg-quests"></use>
                        </svg>
                        <!-- /MENU ITEM LINK ICON -->
                        Quests
                    </a>
                    <!-- /MENU ITEM LINK -->
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <!-- MENU ITEM LINK -->
                    <a class="menu-item-link" href="streams.html">
                        <!-- MENU ITEM LINK ICON -->
                        <svg class="menu-item-link-icon icon-streams">
                            <use xlink:href="#svg-streams"></use>
                        </svg>
                        <!-- /MENU ITEM LINK ICON -->
                        Streams
                    </a>
                    <!-- /MENU ITEM LINK -->
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <!-- MENU ITEM LINK -->
                    <a class="menu-item-link" href="events.html">
                        <!-- MENU ITEM LINK ICON -->
                        <svg class="menu-item-link-icon icon-events">
                            <use xlink:href="#svg-events"></use>
                        </svg>
                        <!-- /MENU ITEM LINK ICON -->
                        Events
                    </a>
                    <!-- /MENU ITEM LINK -->
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <!-- MENU ITEM LINK -->
                    <a class="menu-item-link" href="forums.html">
                        <!-- MENU ITEM LINK ICON -->
                        <svg class="menu-item-link-icon icon-forums">
                            <use xlink:href="#svg-forums"></use>
                        </svg>
                        <!-- /MENU ITEM LINK ICON -->
                        Forums
                    </a>
                    <!-- /MENU ITEM LINK -->
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <!-- MENU ITEM LINK -->
                    <a class="menu-item-link" href="marketplace.html">
                        <!-- MENU ITEM LINK ICON -->
                        <svg class="menu-item-link-icon icon-marketplace">
                            <use xlink:href="#svg-marketplace"></use>
                        </svg>
                        <!-- /MENU ITEM LINK ICON -->
                        Marketplace
                    </a>
                    <!-- /MENU ITEM LINK -->
                </li>
                <!-- /MENU ITEM -->
            </ul>
            <!-- /MENU -->

            <!-- NAVIGATION WIDGET SECTION TITLE -->
            <p class="navigation-widget-section-title">My Profile</p>
            <!-- /NAVIGATION WIDGET SECTION TITLE -->

            <!-- NAVIGATION WIDGET SECTION LINK -->
            <a class="navigation-widget-section-link" href="hub-profile-info.html">Profile Info</a>
            <!-- /NAVIGATION WIDGET SECTION LINK -->

            <!-- NAVIGATION WIDGET SECTION LINK -->
            <a class="navigation-widget-section-link" href="hub-profile-social.html">Social &amp; Stream</a>
            <!-- /NAVIGATION WIDGET SECTION LINK -->

            <!-- NAVIGATION WIDGET SECTION LINK -->
            <a class="navigation-widget-section-link" href="hub-profile-notifications.html">Notifications</a>
            <!-- /NAVIGATION WIDGET SECTION LINK -->

            <!-- NAVIGATION WIDGET SECTION LINK -->
            <a class="navigation-widget-section-link" href="hub-profile-messages.html">Messages</a>
            <!-- /NAVIGATION WIDGET SECTION LINK -->

            <!-- NAVIGATION WIDGET SECTION LINK -->
            <a class="navigation-widget-section-link" href="hub-profile-requests.html">Friend Requests</a>
            <!-- /NAVIGATION WIDGET SECTION LINK -->

            <!-- NAVIGATION WIDGET SECTION TITLE -->
            <p class="navigation-widget-section-title">Account</p>
            <!-- /NAVIGATION WIDGET SECTION TITLE -->

            <!-- NAVIGATION WIDGET SECTION LINK -->
            <a class="navigation-widget-section-link" href="hub-account-info.html">Account Info</a>
            <!-- /NAVIGATION WIDGET SECTION LINK -->

            <!-- NAVIGATION WIDGET SECTION LINK -->
            <a class="navigation-widget-section-link" href="hub-account-password.html">Change Password</a>
            <!-- /NAVIGATION WIDGET SECTION LINK -->

            <!-- NAVIGATION WIDGET SECTION LINK -->
            <a class="navigation-widget-section-link" href="hub-account-settings.html">General Settings</a>
            <!-- /NAVIGATION WIDGET SECTION LINK -->

            <!-- NAVIGATION WIDGET SECTION TITLE -->
            <p class="navigation-widget-section-title">Groups</p>
            <!-- /NAVIGATION WIDGET SECTION TITLE -->

            <!-- NAVIGATION WIDGET SECTION LINK -->
            <a class="navigation-widget-section-link" href="hub-group-management.html">Manage Groups</a>
            <!-- /NAVIGATION WIDGET SECTION LINK -->

            <!-- NAVIGATION WIDGET SECTION LINK -->
            <a class="navigation-widget-section-link" href="hub-group-invitations.html">Invitations</a>
            <!-- /NAVIGATION WIDGET SECTION LINK -->

            <!-- NAVIGATION WIDGET SECTION TITLE -->
            <p class="navigation-widget-section-title">My Store</p>
            <!-- /NAVIGATION WIDGET SECTION TITLE -->

            <!-- NAVIGATION WIDGET SECTION LINK -->
            <a class="navigation-widget-section-link" href="hub-store-account.html">My Account <span
                    class="highlighted">$250,32</span></a>
            <!-- /NAVIGATION WIDGET SECTION LINK -->

            <!-- NAVIGATION WIDGET SECTION LINK -->
            <a class="navigation-widget-section-link" href="hub-store-statement.html">Sales Statement</a>
            <!-- /NAVIGATION WIDGET SECTION LINK -->

            <!-- NAVIGATION WIDGET SECTION LINK -->
            <a class="navigation-widget-section-link" href="hub-store-items.html">Manage Items</a>
            <!-- /NAVIGATION WIDGET SECTION LINK -->

            <!-- NAVIGATION WIDGET SECTION LINK -->
            <a class="navigation-widget-section-link" href="hub-store-downloads.html">Downloads</a>
            <!-- /NAVIGATION WIDGET SECTION LINK -->

            <!-- NAVIGATION WIDGET SECTION TITLE -->
            <p class="navigation-widget-section-title">Main Links</p>
            <!-- /NAVIGATION WIDGET SECTION TITLE -->

            <!-- NAVIGATION WIDGET SECTION LINK -->
            <a class="navigation-widget-section-link" href="#">Home</a>
            <!-- /NAVIGATION WIDGET SECTION LINK -->

            <!-- NAVIGATION WIDGET SECTION LINK -->
            <a class="navigation-widget-section-link" href="#">Careers</a>
            <!-- /NAVIGATION WIDGET SECTION LINK -->

            <!-- NAVIGATION WIDGET SECTION LINK -->
            <a class="navigation-widget-section-link" href="#">Faqs</a>
            <!-- /NAVIGATION WIDGET SECTION LINK -->

            <!-- NAVIGATION WIDGET SECTION LINK -->
            <a class="navigation-widget-section-link" href="#">About Us</a>
            <!-- /NAVIGATION WIDGET SECTION LINK -->

            <!-- NAVIGATION WIDGET SECTION LINK -->
            <a class="navigation-widget-section-link" href="#">Our Blog</a>
            <!-- /NAVIGATION WIDGET SECTION LINK -->

            <!-- NAVIGATION WIDGET SECTION LINK -->
            <a class="navigation-widget-section-link" href="#">Contact Us</a>
            <!-- /NAVIGATION WIDGET SECTION LINK -->

            <!-- NAVIGATION WIDGET SECTION LINK -->
            <a class="navigation-widget-section-link" href="#">Privacy Policy</a>
            <!-- /NAVIGATION WIDGET SECTION LINK -->
        </nav>
        <!-- /NAVIGATION WIDGET -->

        <!-- chatboxes -->
        <div class="row">
            <div class="chatbox chatbox22 ch0 d-none">
                <div class="chatbox__title justify-content-between ">
                    <div>

                        <h5>
                            <div class="chat-img"><img src="{{ asset('img/profile/ww.jpeg') }}" alt="profile" /></div>
                            <a href="javascript:void()">Sean David</a>
                        </h5>

                    </div>
                    <!--<button class="chatbox__title__tray">
                        <span></span>
                      </button>-->
                    <div class="d-flex justify-content-center align-items-center">
                        <span class="mr-3">
                            <i class="fa fa-video-camera text-white"></i>
                        </span>
                        <span class="mr-2">
                            <i class="fa fa-phone text-white"></i>
                        </span>
                        <span class="ct0">
                            -
                        </span>

                        <button class="chatbox__title__close ctl0">
                            <span>
                                <svg viewBox="0 0 12 12" width="12px" height="12px">
                                    <line stroke="#FFFFFF" x1="11.75" y1="0.25" x2="0.25" y2="11.75"></line>
                                    <line stroke="#FFFFFF" x1="11.75" y1="11.75" x2="0.25" y2="0.25"></line>
                                </svg>
                            </span>
                        </button>
                    </div>


                </div>
                <div class="chatbox__body">
                    <ul class="text-center">

                        <li><a href="#"> 21/03/2021</a></a></li>
                    </ul>
                    <div class="chatbox__body__message chatbox__body__message--left">

                        <div class="chatbox_timing">
                            <ul>

                                <li><a href="#"> 7:00 PM</a></a></li>
                            </ul>
                        </div>
                        <img src="{{ asset('img/profile/ww.jpeg') }}" alt="Picture">
                        <div class="clearfix"></div>
                        <div class="ul_section_full">
                            <ul class="ul_msg">
                                <!-- <li><strong>Person Name</strong></li> -->
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                            </ul>
                            <i class="fa fa-share cursor-pointer mr-2 ml-2"></i>
                            <i class="fa fa-ellipsis-h cursor-pointer"></i>
                            <div class="clearfix"></div>
                            <ul class="ul_msg2">
                                <li><a href="#"><i class="fa fa-pencil"></i> </a></li>
                                <li><a href="#"><i class="fa fa-trash chat-trash"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="chatbox__body__message chatbox__body__message--right">

                        <div class="chatbox_timing">
                            <ul>

                                <li><a href="#"> 7:00 PM</a></a></li>
                            </ul>
                        </div>

                        <img src="{{ asset('img/profile/ww.jpeg') }}" alt="Picture">
                        <div class="clearfix"></div>
                        <div class="ul_section_full">
                            <ul class="ul_msg">
                                <!-- <li><strong>Person Name</strong></li> -->
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>

                            </ul>
                            <i class="fa fa-share cursor-pointer mr-2 ml-2"></i>
                            <i class="fa fa-ellipsis-h cursor-pointer"></i>
                            <div class="clearfix"></div>
                            <ul class="ul_msg2">
                                <li><a href="#"><i class="fa fa-pencil"></i> </a></li>
                                <li><a href="#"><i class="fa fa-trash chat-trash"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="chatbox__body__message chatbox__body__message--left">

                        <div class="chatbox_timing">
                            <ul>

                                <li><a href="#"> 7:00 PM</a></a></li>
                            </ul>
                        </div>

                        <img src="{{ asset('img/profile/ww.jpeg') }}" alt="Picture">
                        <div class="clearfix"></div>
                        <div class="ul_section_full">
                            <ul class="ul_msg">
                                <!-- <li><strong>Person Name</strong></li> -->
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                            </ul>

                            <i class="fa fa-share cursor-pointer mr-2 ml-2"></i>
                            <i class="fa fa-ellipsis-h cursor-pointer"></i>
                            <div class="clearfix"></div>
                            <ul class="ul_msg2">
                                <li><a href="#"><i class="fa fa-pencil"></i> </a></li>
                                <li><a href="#"><i class="fa fa-trash chat-trash"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="chatbox__body__message chatbox__body__message--right">

                        <div class="chatbox_timing">
                            <ul>

                                <li><a href="#"> 7:00 PM</a></a></li>
                            </ul>
                        </div>

                        <img src="{{ asset('img/profile/ww.jpeg') }}" alt="Picture">
                        <div class="clearfix"></div>
                        <div class="ul_section_full">
                            <ul class="ul_msg">
                                <!-- <li><strong>Person Name</strong></li> -->
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                            </ul>

                            <i class="fa fa-share cursor-pointer mr-2 ml-2"></i>
                            <i class="fa fa-ellipsis-h cursor-pointer"></i>
                            <div class="clearfix"></div>
                            <ul class="ul_msg2">
                                <li><a href="#"><i class="fa fa-pencil"></i> </a></li>
                                <li><a href="#"><i class="fa fa-trash chat-trash"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="chatbox__body__message chatbox__body__message--left">

                        <div class="chatbox_timing">
                            <ul>

                                <li><a href="#"> 7:00 PM</a></a></li>
                            </ul>
                        </div>

                        <img src="{{ asset('img/profile/ww.jpeg') }}" alt="Picture">
                        <div class="clearfix"></div>
                        <div class="ul_section_full">
                            <ul class="ul_msg">
                                <!-- <li><strong>Person Name</strong></li> -->
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                            </ul>

                            <i class="fa fa-share cursor-pointer mr-2 ml-2"></i>
                            <i class="fa fa-ellipsis-h cursor-pointer"></i>
                            <div class="clearfix"></div>
                            <ul class="ul_msg2">
                                <li><a href="#"><i class="fa fa-pencil"></i> </a></li>
                                <li><a href="#"><i class="fa fa-trash chat-trash"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="panel-footer">
                    <div class="input-group align-items-center">
                        <div class="file-upload">
                            <label for="file-input">
                                <i class="fa fa-paperclip"></i>
                            </label>

                            <input id="file-input" accept="audio/*" type="file" />
                        </div>
                        <input id="btn-input" type="text" class="form-control input-sm chat_set_height"
                            placeholder="Type your message here..." tabindex="0" dir="ltr" spellcheck="false" autocomplete="off"
                            autocorrect="off" autocapitalize="off" contenteditable="true" />

                        <span class="input-group-btn d-flex align-items-center">
                            <!-- <button class="btn bt_bg btn-sm" id="btn-chat">
                          Send</button> -->
                            <i class="fa fa-smile-o mr-2"> </i>
                            <div class="audio-upload">
                                <label for="audio-input">
                                    <i class="fa fa-microphone"></i>
                                </label>

                                <input id="audio-input" accept="audio/*" type="file" />
                            </div>
                        </span>
                    </div>
                </div>
            </div>
            <div class="chatbox chatbox22 ch1 d-none">
                <div class="chatbox__title justify-content-between ">
                    <div>

                        <h5>
                            <div class="chat-img"><img src="{{ asset('img/profile/ww.jpeg') }}" alt="profile" /></div>
                            <a href="javascript:void()">Sean David</a>
                        </h5>

                    </div>
                    <!--<button class="chatbox__title__tray">
                      <span></span>
                    </button>-->
                    <div class="d-flex justify-content-center align-items-center">
                        <span class="mr-3">
                            <i class="fa fa-video-camera text-white"></i>
                        </span>
                        <span class="mr-2">
                            <i class="fa fa-phone text-white"></i>
                        </span>
                        <span class="ct0">
                            -
                        </span>

                        <button class="chatbox__title__close ctl1">
                            <span>
                                <svg viewBox="0 0 12 12" width="12px" height="12px">
                                    <line stroke="#FFFFFF" x1="11.75" y1="0.25" x2="0.25" y2="11.75"></line>
                                    <line stroke="#FFFFFF" x1="11.75" y1="11.75" x2="0.25" y2="0.25"></line>
                                </svg>
                            </span>
                        </button>
                    </div>


                </div>
                <div class="chatbox__body">
                    <ul class="text-center">

                        <li><a href="#"> 21/03/2021</a></a></li>
                    </ul>
                    <div class="chatbox__body__message chatbox__body__message--left">

                        <div class="chatbox_timing">
                            <ul>

                                <li><a href="#"> 7:00 PM</a></a></li>
                            </ul>
                        </div>
                        <img src="{{ asset('img/profile/ww.jpeg') }}" alt="Picture">
                        <div class="clearfix"></div>
                        <div class="ul_section_full">
                            <ul class="ul_msg">
                                <!-- <li><strong>Person Name</strong></li> -->
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                            </ul>
                            <i class="fa fa-share cursor-pointer mr-2 ml-2"></i>
                            <i class="fa fa-ellipsis-h cursor-pointer"></i>
                            <div class="clearfix"></div>
                            <ul class="ul_msg2">
                                <li><a href="#"><i class="fa fa-pencil"></i> </a></li>
                                <li><a href="#"><i class="fa fa-trash chat-trash"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="chatbox__body__message chatbox__body__message--right">

                        <div class="chatbox_timing">
                            <ul>

                                <li><a href="#"> 7:00 PM</a></a></li>
                            </ul>
                        </div>

                        <img src="{{ asset('img/profile/ww.jpeg') }}" alt="Picture">
                        <div class="clearfix"></div>
                        <div class="ul_section_full">
                            <ul class="ul_msg">
                                <!-- <li><strong>Person Name</strong></li> -->
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>

                            </ul>
                            <i class="fa fa-share cursor-pointer mr-2 ml-2"></i>
                            <i class="fa fa-ellipsis-h cursor-pointer"></i>
                            <div class="clearfix"></div>
                            <ul class="ul_msg2">
                                <li><a href="#"><i class="fa fa-pencil"></i> </a></li>
                                <li><a href="#"><i class="fa fa-trash chat-trash"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="chatbox__body__message chatbox__body__message--left">

                        <div class="chatbox_timing">
                            <ul>

                                <li><a href="#"> 7:00 PM</a></a></li>
                            </ul>
                        </div>

                        <img src="{{ asset('img/profile/ww.jpeg') }}" alt="Picture">
                        <div class="clearfix"></div>
                        <div class="ul_section_full">
                            <ul class="ul_msg">
                                <!-- <li><strong>Person Name</strong></li> -->
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                            </ul>

                            <i class="fa fa-share cursor-pointer mr-2 ml-2"></i>
                            <i class="fa fa-ellipsis-h cursor-pointer"></i>
                            <div class="clearfix"></div>
                            <ul class="ul_msg2">
                                <li><a href="#"><i class="fa fa-pencil"></i> </a></li>
                                <li><a href="#"><i class="fa fa-trash chat-trash"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="chatbox__body__message chatbox__body__message--right">

                        <div class="chatbox_timing">
                            <ul>

                                <li><a href="#"> 7:00 PM</a></a></li>
                            </ul>
                        </div>

                        <img src="{{ asset('img/profile/ww.jpeg') }}" alt="Picture">
                        <div class="clearfix"></div>
                        <div class="ul_section_full">
                            <ul class="ul_msg">
                                <!-- <li><strong>Person Name</strong></li> -->
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                            </ul>

                            <i class="fa fa-share cursor-pointer mr-2 ml-2"></i>
                            <i class="fa fa-ellipsis-h cursor-pointer"></i>
                            <div class="clearfix"></div>
                            <ul class="ul_msg2">
                                <li><a href="#"><i class="fa fa-pencil"></i> </a></li>
                                <li><a href="#"><i class="fa fa-trash chat-trash"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="chatbox__body__message chatbox__body__message--left">

                        <div class="chatbox_timing">
                            <ul>

                                <li><a href="#"> 7:00 PM</a></a></li>
                            </ul>
                        </div>

                        <img src="{{ asset('img/profile/ww.jpeg') }}" alt="Picture">
                        <div class="clearfix"></div>
                        <div class="ul_section_full">
                            <ul class="ul_msg">
                                <!-- <li><strong>Person Name</strong></li> -->
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                            </ul>

                            <i class="fa fa-share cursor-pointer mr-2 ml-2"></i>
                            <i class="fa fa-ellipsis-h cursor-pointer"></i>
                            <div class="clearfix"></div>
                            <ul class="ul_msg2">
                                <li><a href="#"><i class="fa fa-pencil"></i> </a></li>
                                <li><a href="#"><i class="fa fa-trash chat-trash"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="panel-footer">
                    <div class="input-group align-items-center">
                        <div class="file-upload">
                            <label for="file-input">
                                <i class="fa fa-paperclip"></i>
                            </label>

                            <input id="file-input" accept="audio/*" type="file" />
                        </div>
                        <input id="btn-input" type="text" class="form-control input-sm chat_set_height"
                            placeholder="Type your message here..." tabindex="0" dir="ltr" spellcheck="false" autocomplete="off"
                            autocorrect="off" autocapitalize="off" contenteditable="true" />

                        <span class="input-group-btn d-flex align-items-center">
                            <!-- <button class="btn bt_bg btn-sm" id="btn-chat">
                          Send</button> -->
                            <i class="fa fa-smile-o mr-2"> </i>
                            <div class="audio-upload">
                                <label for="audio-input">
                                    <i class="fa fa-microphone"></i>
                                </label>

                                <input id="audio-input" accept="audio/*" type="file" />
                            </div>
                        </span>
                    </div>
                </div>
            </div>

            <div class="chatbox chatbox22 ch2 d-none">
                <div class="chatbox__title justify-content-between ">
                    <div>

                        <h5>
                            <div class="chat-img"><img src="{{ asset('img/profile/ww.jpeg') }}" alt="profile" /></div>
                            <a href="javascript:void()">Sean David</a>
                        </h5>

                    </div>
                    <!--<button class="chatbox__title__tray">
                      <span></span>
                    </button>-->
                    <div class="d-flex justify-content-center align-items-center">
                        <span class="mr-3">
                            <i class="fa fa-video-camera text-white"></i>
                        </span>
                        <span class="mr-2">
                            <i class="fa fa-phone text-white"></i>
                        </span>
                        <span class="ct0">
                            -
                        </span>

                        <button class="chatbox__title__close ctl2">
                            <span>
                                <svg viewBox="0 0 12 12" width="12px" height="12px">
                                    <line stroke="#FFFFFF" x1="11.75" y1="0.25" x2="0.25" y2="11.75"></line>
                                    <line stroke="#FFFFFF" x1="11.75" y1="11.75" x2="0.25" y2="0.25"></line>
                                </svg>
                            </span>
                        </button>
                    </div>


                </div>
                <div class="chatbox__body">
                    <ul class="text-center">

                        <li><a href="#"> 21/03/2021</a></a></li>
                    </ul>
                    <div class="chatbox__body__message chatbox__body__message--left">

                        <div class="chatbox_timing">
                            <ul>

                                <li><a href="#"> 7:00 PM</a></a></li>
                            </ul>
                        </div>
                        <img src="{{ asset('img/profile/ww.jpeg') }}" alt="Picture">
                        <div class="clearfix"></div>
                        <div class="ul_section_full">
                            <ul class="ul_msg">
                                <!-- <li><strong>Person Name</strong></li> -->
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                            </ul>
                            <i class="fa fa-share cursor-pointer mr-2 ml-2"></i>
                            <i class="fa fa-ellipsis-h cursor-pointer"></i>
                            <div class="clearfix"></div>
                            <ul class="ul_msg2">
                                <li><a href="#"><i class="fa fa-pencil"></i> </a></li>
                                <li><a href="#"><i class="fa fa-trash chat-trash"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="chatbox__body__message chatbox__body__message--right">

                        <div class="chatbox_timing">
                            <ul>

                                <li><a href="#"> 7:00 PM</a></a></li>
                            </ul>
                        </div>

                        <img src="{{ asset('img/profile/ww.jpeg') }}" alt="Picture">
                        <div class="clearfix"></div>
                        <div class="ul_section_full">
                            <ul class="ul_msg">
                                <!-- <li><strong>Person Name</strong></li> -->
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>

                            </ul>
                            <i class="fa fa-share cursor-pointer mr-2 ml-2"></i>
                            <i class="fa fa-ellipsis-h cursor-pointer"></i>
                            <div class="clearfix"></div>
                            <ul class="ul_msg2">
                                <li><a href="#"><i class="fa fa-pencil"></i> </a></li>
                                <li><a href="#"><i class="fa fa-trash chat-trash"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="chatbox__body__message chatbox__body__message--left">

                        <div class="chatbox_timing">
                            <ul>

                                <li><a href="#"> 7:00 PM</a></a></li>
                            </ul>
                        </div>

                        <img src="{{ asset('img/profile/ww.jpeg') }}" alt="Picture">
                        <div class="clearfix"></div>
                        <div class="ul_section_full">
                            <ul class="ul_msg">
                                <!-- <li><strong>Person Name</strong></li> -->
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                            </ul>

                            <i class="fa fa-share cursor-pointer mr-2 ml-2"></i>
                            <i class="fa fa-ellipsis-h cursor-pointer"></i>
                            <div class="clearfix"></div>
                            <ul class="ul_msg2">
                                <li><a href="#"><i class="fa fa-pencil"></i> </a></li>
                                <li><a href="#"><i class="fa fa-trash chat-trash"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="chatbox__body__message chatbox__body__message--right">

                        <div class="chatbox_timing">
                            <ul>

                                <li><a href="#"> 7:00 PM</a></a></li>
                            </ul>
                        </div>

                        <img src="{{ asset('img/profile/ww.jpeg') }}" alt="Picture">
                        <div class="clearfix"></div>
                        <div class="ul_section_full">
                            <ul class="ul_msg">
                                <!-- <li><strong>Person Name</strong></li> -->
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                            </ul>

                            <i class="fa fa-share cursor-pointer mr-2 ml-2"></i>
                            <i class="fa fa-ellipsis-h cursor-pointer"></i>
                            <div class="clearfix"></div>
                            <ul class="ul_msg2">
                                <li><a href="#"><i class="fa fa-pencil"></i> </a></li>
                                <li><a href="#"><i class="fa fa-trash chat-trash"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="chatbox__body__message chatbox__body__message--left">

                        <div class="chatbox_timing">
                            <ul>

                                <li><a href="#"> 7:00 PM</a></a></li>
                            </ul>
                        </div>

                        <img src="{{ asset('img/profile/ww.jpeg') }}" alt="Picture">
                        <div class="clearfix"></div>
                        <div class="ul_section_full">
                            <ul class="ul_msg">
                                <!-- <li><strong>Person Name</strong></li> -->
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                            </ul>

                            <i class="fa fa-share cursor-pointer mr-2 ml-2"></i>
                            <i class="fa fa-ellipsis-h cursor-pointer"></i>
                            <div class="clearfix"></div>
                            <ul class="ul_msg2">
                                <li><a href="#"><i class="fa fa-pencil"></i> </a></li>
                                <li><a href="#"><i class="fa fa-trash chat-trash"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="panel-footer">
                    <div class="input-group align-items-center">
                        <div class="file-upload">
                            <label for="file-input">
                                <i class="fa fa-paperclip"></i>
                            </label>

                            <input id="file-input" accept="audio/*" type="file" />
                        </div>
                        <input id="btn-input" type="text" class="form-control input-sm chat_set_height"
                            placeholder="Type your message here..." tabindex="0" dir="ltr" spellcheck="false" autocomplete="off"
                            autocorrect="off" autocapitalize="off" contenteditable="true" />

                        <span class="input-group-btn d-flex align-items-center">
                            <!-- <button class="btn bt_bg btn-sm" id="btn-chat">
                          Send</button> -->
                            <i class="fa fa-smile-o mr-2"> </i>
                            <div class="audio-upload">
                                <label for="audio-input">
                                    <i class="fa fa-microphone"></i>
                                </label>

                                <input id="audio-input" accept="audio/*" type="file" />
                            </div>
                        </span>
                    </div>
                </div>
            </div>


        </div>
        <!-- chatboxes -->
        <!-- Right side bar -->
        <aside id="rightSideBar">
            <ul class="right-menu-to-hide right-bar-buttons text-center md-0">
                <li>
                    <a class=" " href="#">
                        <img src="http://fyrestream.com//content/themes/default/frontend/images/Right Side Icons/Color/PNGs/Fyre diamond.png"
                            alt="">
                    </a>
                </li>
                <li>
                    <a class=" " href="#">
                        <img src="http://fyrestream.com//content/themes/default/frontend/images/Right Side Icons/Color/PNGs/Marketplace.png"
                            alt="">
                    </a>
                </li>
                <li>
                    <a class=" " href="#">
                        <img src="http://fyrestream.com//content/themes/default/frontend/images/Right Side Icons/Color/PNGs/Video.png"
                            alt="">
                    </a>
                </li>
                <li>
                    <a class=" " href="#">
                        <img src="http://fyrestream.com//content/themes/default/frontend/images/Right Side Icons/Color/PNGs/Dating.png"
                            alt="">
                    </a>
                </li>
                <li class="icon">
                    <i class=" right-bar-add-circle">+</i>
                </li>
            </ul>

        </aside>

        <aside class="position-absolute">
            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                    <div class="simplebar-content" style="padding: 35px 28px;">
                        <!-- CHAT WIDGET SPEAKER -->
                        <div class="chat-widget-speaker left">
                            <!-- CHAT WIDGET SPEAKER AVATAR -->
                            <div class="chat-widget-speaker-avatar">
                                <!-- USER AVATAR -->
                                <div class="user-avatar tiny no-border">
                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-24-26" data-src="img/avatar/03.jpg"
                                            style="width: 24px; height: 26px; position: relative;"><canvas width="24"
                                                height="26" style="position: absolute; top: 0px; left: 0px;"></canvas><canvas
                                                width="24" height="26"
                                                style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->
                            </div>
                            <!-- /CHAT WIDGET SPEAKER AVATAR -->

                            <!-- CHAT WIDGET SPEAKER MESSAGE -->
                            <p class="chat-widget-speaker-message">Hi Marina! It's been a long time!</p>
                            <!-- /CHAT WIDGET SPEAKER MESSAGE -->

                            <!-- CHAT WIDGET SPEAKER TIMESTAMP -->
                            <p class="chat-widget-speaker-timestamp">Yesterday at 8:36PM</p>
                            <!-- /CHAT WIDGET SPEAKER TIMESTAMP -->
                        </div>
                        <!-- /CHAT WIDGET SPEAKER -->

                        <!-- CHAT WIDGET SPEAKER -->
                        <div class="chat-widget-speaker right">
                            <!-- CHAT WIDGET SPEAKER MESSAGE -->
                            <p class="chat-widget-speaker-message">Hey Nick!</p>
                            <!-- /CHAT WIDGET SPEAKER MESSAGE -->

                            <!-- CHAT WIDGET SPEAKER MESSAGE -->
                            <p class="chat-widget-speaker-message">You're right, it's been a really long time! I think the
                                last time
                                we saw was at Neko's party</p>
                            <!-- /CHAT WIDGET SPEAKER MESSAGE -->

                            <!-- CHAT WIDGET SPEAKER TIMESTAMP -->
                            <p class="chat-widget-speaker-timestamp">10:05AM</p>
                            <!-- /CHAT WIDGET SPEAKER TIMESTAMP -->
                        </div>
                        <!-- /CHAT WIDGET SPEAKER -->

                        <!-- CHAT WIDGET SPEAKER -->
                        <div class="chat-widget-speaker left">
                            <!-- CHAT WIDGET SPEAKER AVATAR -->
                            <div class="chat-widget-speaker-avatar">
                                <!-- USER AVATAR -->
                                <div class="user-avatar tiny no-border">
                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-24-26" data-src="img/avatar/03.jpg"
                                            style="width: 24px; height: 26px; position: relative;"><canvas width="24"
                                                height="26" style="position: absolute; top: 0px; left: 0px;"></canvas><canvas
                                                width="24" height="26"
                                                style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->
                                </div>
                                <!-- /USER AVATAR -->
                            </div>
                            <!-- /CHAT WIDGET SPEAKER AVATAR -->

                            <!-- CHAT WIDGET SPEAKER MESSAGE -->
                            <p class="chat-widget-speaker-message">Yeah! I remember now! The stream launch party</p>
                            <!-- /CHAT WIDGET SPEAKER MESSAGE -->

                            <!-- CHAT WIDGET SPEAKER MESSAGE -->
                            <p class="chat-widget-speaker-message">That reminds me that I wanted to ask you something</p>
                            <!-- /CHAT WIDGET SPEAKER MESSAGE -->

                            <!-- CHAT WIDGET SPEAKER MESSAGE -->
                            <p class="chat-widget-speaker-message">Can you stream the new game?</p>
                            <!-- /CHAT WIDGET SPEAKER MESSAGE -->
                        </div>
                        <!-- /CHAT WIDGET SPEAKER -->
                    </div>
                </div>
            </div>
        </aside>

        <!-- Right side bar end-->
        <aside id="chat-widget-messages" class="chat-widget closed sidebar right">
            <!-- CHAT WIDGET MESSAGES -->
            <div class="chat-widget-messages" data-simplebar>
                <!-- CHAT WIDGET MESSAGE -->
                <div class="chat-widget-message">
                    <!-- USER STATUS -->
                    <div class="user-status">
                        <!-- USER STATUS AVATAR -->
                        <div class="user-status-avatar">
                            <!-- USER AVATAR -->
                            <div class="user-avatar small no-outline online">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <img src="{{ asset('img/avatar/03.jpg') }}" alt>
                                    <!-- /HEXAGON -->
                                </div>
                            </div>
                            <!-- /USER AVATAR -->
                        </div>
                        <!-- /USER STATUS AVATAR -->

                        <!-- USER STATUS TITLE -->
                        <p class="user-status-title"><span class="bold">Nick Grissom</span></p>
                        <!-- /USER STATUS TITLE -->

                        <!-- USER STATUS TEXT -->
                        <p class="user-status-text small">Can you stream the new game?</p>
                        <!-- /USER STATUS TEXT -->

                        <!-- USER STATUS TIMESTAMP -->
                        <p class="user-status-timestamp floaty">2hrs</p>
                        <!-- /USER STATUS TIMESTAMP -->
                    </div>
                    <!-- /USER STATUS -->
                </div>
                <!-- /CHAT WIDGET MESSAGE -->

                <!-- CHAT WIDGET MESSAGE -->
                <div class="chat-widget-message">
                    <!-- USER STATUS -->
                    <div class="user-status">
                        <!-- USER STATUS AVATAR -->
                        <div class="user-status-avatar">
                            <!-- USER AVATAR -->
                            <div class="user-avatar small no-outline online">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <img src="{{ asset('img/avatar/04.jpg') }}" alt>
                                    <!-- /HEXAGON -->
                                </div>
                            </div>
                            <!-- /USER AVATAR -->
                        </div>
                        <!-- /USER STATUS AVATAR -->

                        <!-- USER STATUS TITLE -->
                        <p class="user-status-title"><span class="bold">Matt Parker</span></p>
                        <!-- /USER STATUS TITLE -->

                        <!-- USER STATUS TEXT -->
                        <p class="user-status-text small">Can you stream the new game?</p>
                        <!-- /USER STATUS TEXT -->

                        <!-- USER STATUS TIMESTAMP -->
                        <p class="user-status-timestamp floaty">2hrs</p>
                        <!-- /USER STATUS TIMESTAMP -->
                    </div>
                    <!-- /USER STATUS -->
                </div>
                <!-- /CHAT WIDGET MESSAGE -->

                <!-- CHAT WIDGET MESSAGE -->
                <div class="chat-widget-message">
                    <!-- USER STATUS -->
                    <div class="user-status">
                        <!-- USER STATUS AVATAR -->
                        <div class="user-status-avatar">
                            <!-- USER AVATAR -->
                            <div class="user-avatar small no-outline online">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <img src="{{ asset('img/avatar/05.jpg') }}" alt>
                                    <!-- /HEXAGON -->
                                </div>
                            </div>
                            <!-- /USER AVATAR -->
                        </div>
                        <!-- /USER STATUS AVATAR -->

                        <!-- USER STATUS TITLE -->
                        <p class="user-status-title"><span class="bold">Neko Bebop</span></p>
                        <!-- /USER STATUS TITLE -->

                        <!-- USER STATUS TEXT -->
                        <p class="user-status-text small">Awesome! I'll see you there!</p>
                        <!-- /USER STATUS TEXT -->

                        <!-- USER STATUS TIMESTAMP -->
                        <p class="user-status-timestamp floaty">54mins</p>
                        <!-- /USER STATUS TIMESTAMP -->
                    </div>
                    <!-- /USER STATUS -->
                </div>
                <!-- /CHAT WIDGET MESSAGE -->

                <!-- CHAT WIDGET MESSAGE -->
                <div class="chat-widget-message">
                    <!-- USER STATUS -->
                    <div class="user-status">
                        <!-- USER STATUS AVATAR -->
                        <div class="user-status-avatar">
                            <!-- USER AVATAR -->
                            <div class="user-avatar small no-outline online">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <img src="{{ asset('img/avatar/03.jpg') }}" alt>
                                    <!-- /HEXAGON -->
                                </div>
                            </div>
                            <!-- /USER AVATAR -->
                        </div>
                        <!-- /USER STATUS AVATAR -->

                        <!-- USER STATUS TITLE -->
                        <p class="user-status-title"><span class="bold">Bearded Wonder</span></p>
                        <!-- /USER STATUS TITLE -->

                        <!-- USER STATUS TEXT -->
                        <p class="user-status-text small">Great! Then we'll meet with them at...</p>
                        <!-- /USER STATUS TEXT -->

                        <!-- USER STATUS TIMESTAMP -->
                        <p class="user-status-timestamp floaty">2hrs</p>
                        <!-- /USER STATUS TIMESTAMP -->
                    </div>
                    <!-- /USER STATUS -->
                </div>
                <!-- /CHAT WIDGET MESSAGE -->

                <!-- CHAT WIDGET MESSAGE -->
                <div class="chat-widget-message">
                    <!-- USER STATUS -->
                    <div class="user-status">
                        <!-- USER STATUS AVATAR -->
                        <div class="user-status-avatar">
                            <!-- USER AVATAR -->
                            <div class="user-avatar small no-outline online">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <img src="{{ asset('img/avatar/09.jpg') }}" alt>
                                    <!-- /HEXAGON -->
                                </div>
                            </div>
                            <!-- /USER AVATAR -->
                        </div>
                        <!-- /USER STATUS AVATAR -->

                        <!-- USER STATUS TITLE -->
                        <p class="user-status-title"><span class="bold">Sandra Strange</span></p>
                        <!-- /USER STATUS TITLE -->

                        <!-- USER STATUS TEXT -->
                        <p class="user-status-text small">Can you stream the new game?</p>
                        <!-- /USER STATUS TEXT -->

                        <!-- USER STATUS TIMESTAMP -->
                        <p class="user-status-timestamp floaty">2hrs</p>
                        <!-- /USER STATUS TIMESTAMP -->
                    </div>
                    <!-- /USER STATUS -->
                </div>
                <!-- /CHAT WIDGET MESSAGE -->

                <!-- CHAT WIDGET MESSAGE -->
                <div class="chat-widget-message">
                    <!-- USER STATUS -->
                    <div class="user-status">
                        <!-- USER STATUS AVATAR -->
                        <div class="user-status-avatar">
                            <!-- USER AVATAR -->
                            <div class="user-avatar small no-outline online">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <img src="{{ asset('img/avatar/12.jpg') }}" alt>
                                    <!-- /HEXAGON -->
                                </div>
                            </div>
                            <!-- /USER AVATAR -->
                        </div>
                        <!-- /USER STATUS AVATAR -->

                        <!-- USER STATUS TITLE -->
                        <p class="user-status-title"><span class="bold">James Murdock</span></p>
                        <!-- /USER STATUS TITLE -->

                        <!-- USER STATUS TEXT -->
                        <p class="user-status-text small">Great! Then we'll meet with them at...</p>
                        <!-- /USER STATUS TEXT -->

                        <!-- USER STATUS TIMESTAMP -->
                        <p class="user-status-timestamp floaty">7hrs</p>
                        <!-- /USER STATUS TIMESTAMP -->
                    </div>
                    <!-- /USER STATUS -->
                </div>
                <!-- /CHAT WIDGET MESSAGE -->

                <!-- CHAT WIDGET MESSAGE -->
                <div class="chat-widget-message">
                    <!-- USER STATUS -->
                    <div class="user-status">
                        <!-- USER STATUS AVATAR -->
                        <div class="user-status-avatar">
                            <!-- USER AVATAR -->
                            <div class="user-avatar small no-outline online">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <img src="{{ asset('img/avatar/10.jpg') }}" alt>
                                    <!-- /HEXAGON -->
                                </div>
                            </div>
                            <!-- /USER AVATAR -->
                        </div>
                        <!-- /USER STATUS AVATAR -->

                        <!-- USER STATUS TITLE -->
                        <p class="user-status-title"><span class="bold">The Green Goo</span></p>
                        <!-- /USER STATUS TITLE -->

                        <!-- USER STATUS TEXT -->
                        <p class="user-status-text small">Can you stream the new game?</p>
                        <!-- /USER STATUS TEXT -->

                        <!-- USER STATUS TIMESTAMP -->
                        <p class="user-status-timestamp floaty">2hrs</p>
                        <!-- /USER STATUS TIMESTAMP -->
                    </div>
                    <!-- /USER STATUS -->
                </div>
                <!-- /CHAT WIDGET MESSAGE -->

                <!-- CHAT WIDGET MESSAGE -->
                <div class="chat-widget-message">
                    <!-- USER STATUS -->
                    <div class="user-status">
                        <!-- USER STATUS AVATAR -->
                        <div class="user-status-avatar">
                            <!-- USER AVATAR -->
                            <div class="user-avatar small no-outline online">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <img src="{{ asset('img/avatar/07.jpg') }}" alt>
                                    <!-- /HEXAGON -->
                                </div>
                            </div>
                            <!-- /USER AVATAR -->
                        </div>
                        <!-- /USER STATUS AVATAR -->

                        <!-- USER STATUS TITLE -->
                        <p class="user-status-title"><span class="bold">Sarah Diamond</span></p>
                        <!-- /USER STATUS TITLE -->

                        <!-- USER STATUS TEXT -->
                        <p class="user-status-text small">I'm sending you the latest news of...</p>
                        <!-- /USER STATUS TEXT -->

                        <!-- USER STATUS TIMESTAMP -->
                        <p class="user-status-timestamp floaty">16hrs</p>
                        <!-- /USER STATUS TIMESTAMP -->
                    </div>
                    <!-- /USER STATUS -->
                </div>
                <!-- /CHAT WIDGET MESSAGE -->

                <!-- CHAT WIDGET MESSAGE -->
                <div class="chat-widget-message">
                    <!-- USER STATUS -->
                    <div class="user-status">
                        <!-- USER STATUS AVATAR -->
                        <div class="user-status-avatar">
                            <!-- USER AVATAR -->
                            <div class="user-avatar small no-outline online">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <img src="{{ asset('img/avatar/03.jpg') }}" alt>
                                    <!-- /HEXAGON -->
                                </div>
                            </div>
                            <!-- /USER AVATAR -->
                        </div>
                        <!-- /USER STATUS AVATAR -->

                        <!-- USER STATUS TITLE -->
                        <p class="user-status-title"><span class="bold">Destroy Dex</span></p>
                        <!-- /USER STATUS TITLE -->

                        <!-- USER STATUS TEXT -->
                        <p class="user-status-text small">Can you stream the new game?</p>
                        <!-- /USER STATUS TEXT -->

                        <!-- USER STATUS TIMESTAMP -->
                        <p class="user-status-timestamp floaty">2hrs</p>
                        <!-- /USER STATUS TIMESTAMP -->
                    </div>
                    <!-- /USER STATUS -->
                </div>
                <!-- /CHAT WIDGET MESSAGE -->

                <!-- CHAT WIDGET MESSAGE -->
                <div class="chat-widget-message">
                    <!-- USER STATUS -->
                    <div class="user-status">
                        <!-- USER STATUS AVATAR -->
                        <div class="user-status-avatar">
                            <!-- USER AVATAR -->
                            <div class="user-avatar small no-outline online">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <img src="{{ asset('img/avatar/03.jpg') }}" alt>
                                    <!-- /HEXAGON -->
                                </div>
                            </div>
                            <!-- /USER AVATAR -->
                        </div>
                        <!-- /USER STATUS AVATAR -->

                        <!-- USER STATUS TITLE -->
                        <p class="user-status-title"><span class="bold">Damian Greyson</span></p>
                        <!-- /USER STATUS TITLE -->

                        <!-- USER STATUS TEXT -->
                        <p class="user-status-text small">Can you stream the new game?</p>
                        <!-- /USER STATUS TEXT -->

                        <!-- USER STATUS TIMESTAMP -->
                        <p class="user-status-timestamp floaty">2hrs</p>
                        <!-- /USER STATUS TIMESTAMP -->
                    </div>
                    <!-- /USER STATUS -->
                </div>
                <!-- /CHAT WIDGET MESSAGE -->

                <!-- CHAT WIDGET MESSAGE -->
                <div class="chat-widget-message">
                    <!-- USER STATUS -->
                    <div class="user-status">
                        <!-- USER STATUS AVATAR -->
                        <div class="user-status-avatar">
                            <!-- USER AVATAR -->
                            <div class="user-avatar small no-outline online">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <img src="{{ asset('img/avatar/14.jpg') }}">
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->

                                <!-- USER AVATAR PROGRESS -->
                                <div class="user-avatar-progress">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-progress-40-44"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR PROGRESS -->

                                <!-- USER AVATAR PROGRESS BORDER -->
                                <div class="user-avatar-progress-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-border-40-44"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR PROGRESS BORDER -->

                                <!-- USER AVATAR BADGE -->
                                <div class="user-avatar-badge">
                                    <!-- USER AVATAR BADGE BORDER -->
                                    <div class="user-avatar-badge-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BADGE BORDER -->

                                    <!-- USER AVATAR BADGE CONTENT -->
                                    <div class="user-avatar-badge-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-dark-16-18"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BADGE CONTENT -->

                                    <!-- USER AVATAR BADGE TEXT -->
                                    <p class="user-avatar-badge-text">3</p>
                                    <!-- /USER AVATAR BADGE TEXT -->
                                </div>
                                <!-- /USER AVATAR BADGE -->
                            </div>
                            <!-- /USER AVATAR -->
                        </div>
                        <!-- /USER STATUS AVATAR -->

                        <!-- USER STATUS TITLE -->
                        <p class="user-status-title"><span class="bold">Paul Lang</span></p>
                        <!-- /USER STATUS TITLE -->

                        <!-- USER STATUS TEXT -->
                        <p class="user-status-text small">Can you stream the new game?</p>
                        <!-- /USER STATUS TEXT -->

                        <!-- USER STATUS TIMESTAMP -->
                        <p class="user-status-timestamp floaty">2hrs</p>
                        <!-- /USER STATUS TIMESTAMP -->
                    </div>
                    <!-- /USER STATUS -->
                </div>
                <!-- /CHAT WIDGET MESSAGE -->
            </div>
            <!-- /CHAT WIDGET MESSAGES -->

            <!-- CHAT WIDGET FORM -->
            <form class="chat-widget-form">
                <!-- INTERACTIVE INPUT -->
                <div class="interactive-input small">
                    <input type="text" id="chat-widget-search" name="chat_widget_search" placeholder="Search Messages...">
                    <!-- INTERACTIVE INPUT ICON WRAP -->
                    <div class="interactive-input-icon-wrap">
                        <!-- INTERACTIVE INPUT ICON -->
                        <svg class="interactive-input-icon icon-magnifying-glass">
                            <use xlink:href="#svg-magnifying-glass"></use>
                        </svg>
                        <!-- /INTERACTIVE INPUT ICON -->
                    </div>
                    <!-- /INTERACTIVE INPUT ICON WRAP -->

                    <!-- INTERACTIVE INPUT ACTION -->
                    <div class="interactive-input-action">
                        <!-- INTERACTIVE INPUT ACTION ICON -->
                        <svg class="interactive-input-action-icon icon-cross-thin">
                            <use xlink:href="#svg-cross-thin"></use>
                        </svg>
                        <!-- /INTERACTIVE INPUT ACTION ICON -->
                    </div>
                    <!-- /INTERACTIVE INPUT ACTION -->
                </div>
                <!-- /INTERACTIVE INPUT -->
            </form>
            <!-- /CHAT WIDGET FORM -->

            <!-- CHAT WIDGET BUTTON -->
            <div class="chat-widget-button">
                <!-- CHAT WIDGET BUTTON ICON -->
                <div class="chat-widget-button-icon">
                    <!-- BURGER ICON -->
                    <div class="burger-icon">
                        <!-- BURGER ICON BAR -->
                        <div class="burger-icon-bar"></div>
                        <!-- /BURGER ICON BAR -->

                        <!-- BURGER ICON BAR -->
                        <div class="burger-icon-bar"></div>
                        <!-- /BURGER ICON BAR -->

                        <!-- BURGER ICON BAR -->
                        <div class="burger-icon-bar"></div>
                        <!-- /BURGER ICON BAR -->
                    </div>
                    <!-- /BURGER ICON -->
                </div>
                <!-- /CHAT WIDGET BUTTON ICON -->

                <!-- CHAT WIDGET BUTTON TEXT -->
                <p class="chat-widget-button-text">Messages / Chat</p>
                <!-- /CHAT WIDGET BUTTON TEXT -->
            </div>
            <!-- /CHAT WIDGET BUTTON -->
        </aside>

        <aside id="chat-widget-message" class="chat-widget chat-widget-overlay sidebar right hidden">
            <!-- CHAT WIDGET HEADER -->
            <div class="chat-widget-header">
                <!-- CHAT WIDGET CLOSE BUTTON -->
                <div class="chat-widget-close-button">
                    <!-- CHAT WIDGET CLOSE BUTTON ICON -->
                    <svg class="chat-widget-close-button-icon icon-back-arrow">
                        <use xlink:href="#svg-back-arrow"></use>
                    </svg>
                    <!-- CHAT WIDGET CLOSE BUTTON ICON -->
                </div>
                <!-- /CHAT WIDGET CLOSE BUTTON -->

                <!-- USER STATUS -->
                <div class="user-status">
                    <!-- USER STATUS AVATAR -->
                    <div class="user-status-avatar">
                        <!-- USER AVATAR -->
                        <div class="user-avatar small no-outline online">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <img src="{{ asset('img/avatar/03.jpg') }}">
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->

                            <!-- USER AVATAR PROGRESS -->
                            <div class="user-avatar-progress">
                                <!-- HEXAGON -->
                                <div class="hexagon-progress-40-44" style="width: 40px; height: 44px; position: relative;">
                                    <canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas>
                                </div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR PROGRESS -->

                            <!-- USER AVATAR PROGRESS BORDER -->
                            <div class="user-avatar-progress-border">
                                <!-- HEXAGON -->
                                <div class="hexagon-border-40-44" style="width: 40px; height: 44px; position: relative;">
                                    <canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas>
                                </div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR PROGRESS BORDER -->

                            <!-- USER AVATAR BADGE -->
                            <div class="user-avatar-badge">
                                <!-- USER AVATAR BADGE BORDER -->
                                <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24" style="width: 22px; height: 24px; position: relative;">
                                        <canvas width="22" height="24"
                                            style="position: absolute; top: 0px; left: 0px;"></canvas>
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18" style="width: 16px; height: 18px; position: relative;">
                                        <canvas width="16" height="18"
                                            style="position: absolute; top: 0px; left: 0px;"></canvas>
                                    </div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">16</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </div>
                        <!-- /USER AVATAR -->
                    </div>
                    <!-- /USER STATUS AVATAR -->

                    <!-- USER STATUS TITLE -->
                    <p class="user-status-title"><span class="bold">Nick Grissom</span></p>
                    <!-- /USER STATUS TITLE -->

                    <!-- USER STATUS TAG -->
                    <p class="user-status-tag online">Online</p>
                    <!-- /USER STATUS TAG -->
                </div>
                <!-- /USER STATUS -->
            </div>
            <!-- /CHAT WIDGET HEADER -->

            <!-- CHAT WIDGET CONVERSATION -->
            <div class="chat-widget-conversation" data-simplebar="init" style="height: 354px;">
                <div class="simplebar-wrapper" style="margin: -35px -28px;">
                    <div class="simplebar-height-auto-observer-wrapper">
                        <div class="simplebar-height-auto-observer"></div>
                    </div>
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                            <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                <div class="simplebar-content" style="padding: 35px 28px;">
                                    <!-- CHAT WIDGET SPEAKER -->
                                    <div class="chat-widget-speaker left">
                                        <!-- CHAT WIDGET SPEAKER AVATAR -->
                                        <div class="chat-widget-speaker-avatar">
                                            <!-- USER AVATAR -->
                                            <div class="user-avatar tiny no-border">
                                                <!-- USER AVATAR CONTENT -->
                                                <div class="user-avatar-content">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-image-24-26" data-src="img/avatar/03.jpg"
                                                        style="width: 24px; height: 26px; position: relative;"><canvas
                                                            width="24" height="26"
                                                            style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR CONTENT -->
                                            </div>
                                            <!-- /USER AVATAR -->
                                        </div>
                                        <!-- /CHAT WIDGET SPEAKER AVATAR -->

                                        <!-- CHAT WIDGET SPEAKER MESSAGE -->
                                        <p class="chat-widget-speaker-message">Hi Marina! It's been a long time!</p>
                                        <!-- /CHAT WIDGET SPEAKER MESSAGE -->

                                        <!-- CHAT WIDGET SPEAKER TIMESTAMP -->
                                        <p class="chat-widget-speaker-timestamp">Yesterday at 8:36PM</p>
                                        <!-- /CHAT WIDGET SPEAKER TIMESTAMP -->
                                    </div>
                                    <!-- /CHAT WIDGET SPEAKER -->

                                    <!-- CHAT WIDGET SPEAKER -->
                                    <div class="chat-widget-speaker right">
                                        <!-- CHAT WIDGET SPEAKER MESSAGE -->
                                        <p class="chat-widget-speaker-message">Hey Nick!</p>
                                        <!-- /CHAT WIDGET SPEAKER MESSAGE -->

                                        <!-- CHAT WIDGET SPEAKER MESSAGE -->
                                        <p class="chat-widget-speaker-message">You're right, it's been a really long time! I
                                            think the last
                                            time we saw was at Neko's party</p>
                                        <!-- /CHAT WIDGET SPEAKER MESSAGE -->

                                        <!-- CHAT WIDGET SPEAKER TIMESTAMP -->
                                        <p class="chat-widget-speaker-timestamp">10:05AM</p>
                                        <!-- /CHAT WIDGET SPEAKER TIMESTAMP -->
                                    </div>
                                    <!-- /CHAT WIDGET SPEAKER -->

                                    <!-- CHAT WIDGET SPEAKER -->
                                    <div class="chat-widget-speaker left">
                                        <!-- CHAT WIDGET SPEAKER AVATAR -->
                                        <div class="chat-widget-speaker-avatar">
                                            <!-- USER AVATAR -->
                                            <div class="user-avatar tiny no-border">
                                                <!-- USER AVATAR CONTENT -->
                                                <div class="user-avatar-content">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-image-24-26" data-src="img/avatar/03.jpg"
                                                        style="width: 24px; height: 26px; position: relative;"><canvas
                                                            width="24" height="26"
                                                            style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR CONTENT -->
                                            </div>
                                            <!-- /USER AVATAR -->
                                        </div>
                                        <!-- /CHAT WIDGET SPEAKER AVATAR -->

                                        <!-- CHAT WIDGET SPEAKER MESSAGE -->
                                        <p class="chat-widget-speaker-message">Yeah! I remember now! The stream launch party
                                        </p>
                                        <!-- /CHAT WIDGET SPEAKER MESSAGE -->

                                        <!-- CHAT WIDGET SPEAKER MESSAGE -->
                                        <p class="chat-widget-speaker-message">That reminds me that I wanted to ask you
                                            something</p>
                                        <!-- /CHAT WIDGET SPEAKER MESSAGE -->

                                        <!-- CHAT WIDGET SPEAKER MESSAGE -->
                                        <p class="chat-widget-speaker-message">Can you stream the new game?</p>
                                        <!-- /CHAT WIDGET SPEAKER MESSAGE -->
                                    </div>
                                    <!-- /CHAT WIDGET SPEAKER -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="simplebar-placeholder" style="width: auto; height: 542px;"></div>
                </div>
                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                    <div class="simplebar-scrollbar" style="width: 0px; transform: translate3d(0px, 0px, 0px); display: none;">
                    </div>
                </div>
                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                    <div class="simplebar-scrollbar"
                        style="height: 231px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                </div>
            </div>
            <!-- /CHAT WIDGET CONVERSATION -->

            <!-- CHAT WIDGET FORM -->
            <form class="chat-widget-form">
                <!-- INTERACTIVE INPUT -->
                <div class="interactive-input small">
                    <input type="text" id="chat-widget-message-text" name="chat_widget_message_text"
                        placeholder="Write a message...">
                    <!-- INTERACTIVE INPUT ICON WRAP -->
                    <div class="interactive-input-icon-wrap">
                        <!-- INTERACTIVE INPUT ICON -->
                        <svg class="interactive-input-icon icon-send-message">
                            <use xlink:href="#svg-send-message"></use>
                        </svg>
                        <!-- /INTERACTIVE INPUT ICON -->
                    </div>
                    <!-- /INTERACTIVE INPUT ICON WRAP -->

                    <!-- INTERACTIVE INPUT ACTION -->
                    <div class="interactive-input-action">
                        <!-- INTERACTIVE INPUT ACTION ICON -->
                        <svg class="interactive-input-action-icon icon-cross-thin">
                            <use xlink:href="#svg-cross-thin"></use>
                        </svg>
                        <!-- /INTERACTIVE INPUT ACTION ICON -->
                    </div>
                    <!-- /INTERACTIVE INPUT ACTION -->
                </div>
                <!-- /INTERACTIVE INPUT -->
            </form>
            <!-- /CHAT WIDGET FORM -->
        </aside>
        <!-- HEADER -->
        <header class="header">
            <a class="navbar-brand p-0" href="http://fyrestream.com/">
                <img src="http://fyrestream.com//content/themes/default/frontend/images/Fyre 01.svg" alt="brand-logo">
                <img src="http://fyrestream.com//content/themes/default/frontend/images/Fyre 02.svg" class="nav-logo-text"
                    alt="brand-logo">
            </a>
            <button class="navbar-toggler" id="res-btn" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- search bar -->
                <form class="form-inline  mt-2 mt-sm-0 position-relative header-top-searchbar">
                    <input id="search-input" autocomplete="off"
                        class="form-control ml-sm-2 rounded-pill shadow-none bg-white w-100" type="text" placeholder="Search"
                        aria-label="Search">
                    <button class="btn shadow-none my-2 my-sm-0 position-absolute" type="submit">
                        <i class="fa text-danger fa-search"></i>
                    </button>
                    <!-- <div id="search-results" class="dropdown-menu dropdown-widget dropdown-search js_dropdown-keepopen">
                        <div class="dropdown-widget-header">
                          <span class="title">Search Results</span>
                            <span style="float: right;    cursor: pointer;" id="closedSearchBtn">
                            <i class="fa fa-times-circle"></i>
                          </span>
                        </div>
                        <div class="dropdown-widget-body">
                          <div class="loader loader_small ptb10"></div>
                        </div>
                        <a class="dropdown-widget-footer" id="search-results-all" href="http://fyrestream.com//search/">See All Results</a>
                    </div>  -->
                </form>

                <ul class="navbar-nav flex-row justify-content-around my-3 my-lg-0 notification-icons"
                    style="margin: 0px !important; transform: translate(-30px)">
                    <li class="nav-item dropdown mr-2">
                        <a class="nav-link dropdown-toggle action-list-item header-dropdown-trigger " href="#">
                            <img class="action-list-item-icon icon-messages"
                                src="http://fyrestream.com//content/themes/default/frontend/img/all_red_flash_black-02.png">
                        </a>
                        <div class="messages dropdown-box header-dropdown"
                            style="position: absolute; z-index: 9999; top: 64px; right: 6px; opacity: 0; visibility: hidden; transform: translate(0px, -40px); transition: transform 0.4s ease-in-out 0s, opacity 0.4s ease-in-out 0s, visibility 0.4s ease-in-out 0s;">
                            <!-- DROPDOWN BOX HEADER -->
                            <div class="dropdown-box-header">
                                <!-- DROPDOWN BOX HEADER TITLE -->
                                <p class="dropdown-box-header-title">Messages</p>
                                <!-- /DROPDOWN BOX HEADER TITLE -->

                                <!-- DROPDOWN BOX HEADER ACTIONS -->
                                <div class="post-settings-wrap" style="position: relative;">
                                    <!-- POST SETTINGS -->
                                    <div class="post-settings widget-box-post-settings-dropdown-trigger active">
                                        <!-- POST SETTINGS ICON -->
                                        <svg class="post-settings-icon icon-more-dots">
                                            <use xlink:href="#svg-more-dots"></use>
                                        </svg>
                                        <!-- /POST SETTINGS ICON -->
                                    </div>
                                    <!-- /POST SETTINGS -->

                                    <!-- SIMPLE DROPDOWN -->
                                    <div class="simple-dropdown widget-box-post-settings-dropdown"
                                        style="position: absolute; z-index: 9999; top: 30px; right: 9px; opacity: 1; visibility: visible; transform: translate(0px, 0px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                        <!-- SIMPLE DROPDOWN LINK -->
                                        <p class="simple-dropdown-link d-flex flex-row">
                                            <i class="fa fa-check"></i>
                                            <span class="d-flex flex-column">
                                                <span class="d-block heading">Mark all as read </span>
                                            </span>
                                        </p>
                                        <p class="simple-dropdown-link d-flex flex-row">
                                            <i class="fa fa-cog"></i>
                                            <span class="d-flex flex-column">
                                                <span class="d-block heading">Notification Setting </span>
                                            </span>
                                        </p>
                                        <p class="simple-dropdown-link d-flex flex-row">
                                            <i class="fa fa-folder-open"></i>
                                            <span class="d-flex flex-column">
                                                <span class="d-block heading">Open Notifications </span>
                                            </span>
                                        </p>

                                    </div>
                                    <!-- /SIMPLE DROPDOWN -->
                                </div>
                                <!-- /DROPDOWN BOX HEADER ACTIONS -->
                            </div>
                            <!-- /DROPDOWN BOX HEADER -->

                            <!-- DROPDOWN BOX LIST -->
                            <div class="dropdown-box-list medium" data-simplebar="init">
                                <div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper"
                                                style="height: 100%; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 0px;">
                                                    <!-- DROPDOWN BOX LIST ITEM -->
                                                    <a class="dropdown-box-list-item" href="hub-profile-messages.html">
                                                        <!-- USER STATUS -->
                                                        <div class="user-status">
                                                            <!-- USER STATUS AVATAR -->
                                                            <div class="user-status-avatar">
                                                                <!-- USER AVATAR -->
                                                                <div class="user-avatar small no-outline">
                                                                    <!-- USER AVATAR CONTENT -->
                                                                    <div class="user-avatar-content">
                                                                        <!-- HEXAGON -->
                                                                        <img src="{{ asset('img/avatar/04.jpg') }}"
                                                                            style="width: 50px; height: 50px; position: relative;"><canvas
                                                                            width="30" height="32"
                                                                            style="position: absolute; top: 0px; left: 0px;"></canvas>
                                                                        <!-- /HEXAGON -->
                                                                    </div>
                                                                    <!-- /USER AVATAR CONTENT -->

                                                                    <!-- /USER AVATAR BADGE -->
                                                                </div>
                                                                <!-- /USER AVATAR -->
                                                            </div>
                                                            <!-- /USER STATUS AVATAR -->

                                                            <!-- USER STATUS TITLE -->
                                                            <p class="user-status-title"><span class="bold">Bearded
                                                                    Wonder</span></p>
                                                            <!-- /USER STATUS TITLE -->

                                                            <!-- USER STATUS TEXT -->
                                                            <p class="user-status-text">Great! Then will meet with them at
                                                                the party...</p>
                                                            <!-- /USER STATUS TEXT -->

                                                            <!-- USER STATUS TIMESTAMP -->
                                                            <p class="user-status-timestamp floaty">29 mins ago</p>
                                                            <!-- /USER STATUS TIMESTAMP -->
                                                        </div>
                                                        <!-- /USER STATUS -->
                                                    </a>
                                                    <!-- /DROPDOWN BOX LIST ITEM -->

                                                    <!-- DROPDOWN BOX LIST ITEM -->
                                                    <a class="dropdown-box-list-item" href="hub-profile-messages.html">
                                                        <!-- USER STATUS -->
                                                        <div class="user-status">
                                                            <!-- USER STATUS AVATAR -->
                                                            <div class="user-status-avatar">
                                                                <!-- USER AVATAR -->
                                                                <div class="user-avatar small no-outline">
                                                                    <!-- USER AVATAR CONTENT -->
                                                                    <div class="user-avatar-content">
                                                                        <!-- HEXAGON -->
                                                                        <img src="{{ asset('img/avatar/05.jpg') }}"
                                                                            style="width: 50px; height: 50px; position: relative;"><canvas
                                                                            width="30" height="32"
                                                                            style="position: absolute; top: 0px; left: 0px;"></canvas>
                                                                        <!-- /HEXAGON -->
                                                                    </div>
                                                                    <!-- /USER AVATAR CONTENT -->

                                                                    <!-- /USER AVATAR BADGE -->
                                                                </div>
                                                                <!-- /USER AVATAR -->
                                                            </div>
                                                            <!-- /USER STATUS AVATAR -->

                                                            <!-- USER STATUS TITLE -->
                                                            <p class="user-status-title"><span class="bold">Neko
                                                                    Bebop</span></p>
                                                            <!-- /USER STATUS TITLE -->

                                                            <!-- USER STATUS TEXT -->
                                                            <p class="user-status-text">Awesome! I'll see you there!</p>
                                                            <!-- /USER STATUS TEXT -->

                                                            <!-- USER STATUS TIMESTAMP -->
                                                            <p class="user-status-timestamp floaty">54 mins ago</p>
                                                            <!-- /USER STATUS TIMESTAMP -->
                                                        </div>
                                                        <!-- /USER STATUS -->
                                                    </a>
                                                    <!-- /DROPDOWN BOX LIST ITEM -->

                                                    <!-- DROPDOWN BOX LIST ITEM -->
                                                    <a class="dropdown-box-list-item" href="hub-profile-messages.html">
                                                        <!-- USER STATUS -->
                                                        <div class="user-status">
                                                            <!-- USER STATUS AVATAR -->
                                                            <div class="user-status-avatar">
                                                                <!-- USER AVATAR -->
                                                                <div class="user-avatar small no-outline">
                                                                    <!-- USER AVATAR CONTENT -->
                                                                    <div class="user-avatar-content">
                                                                        <!-- HEXAGON -->
                                                                        <img src="{{ asset('img/avatar/03.jpg') }}"
                                                                            style="width: 50px; height: 50px; position: relative;"><canvas
                                                                            width="30" height="32"
                                                                            style="position: absolute; top: 0px; left: 0px;"></canvas>
                                                                        <!-- /HEXAGON -->
                                                                    </div>
                                                                    <!-- /USER AVATAR CONTENT -->

                                                                    <!-- /USER AVATAR BADGE -->
                                                                </div>
                                                                <!-- /USER AVATAR -->
                                                            </div>
                                                            <!-- /USER STATUS AVATAR -->

                                                            <!-- USER STATUS TITLE -->
                                                            <p class="user-status-title"><span class="bold">Nick
                                                                    Grissom</span></p>
                                                            <!-- /USER STATUS TITLE -->

                                                            <!-- USER STATUS TEXT -->
                                                            <p class="user-status-text">Can you stream that new game?</p>
                                                            <!-- /USER STATUS TEXT -->

                                                            <!-- USER STATUS TIMESTAMP -->
                                                            <p class="user-status-timestamp floaty">2 hours ago</p>
                                                            <!-- /USER STATUS TIMESTAMP -->
                                                        </div>
                                                        <!-- /USER STATUS -->
                                                    </a>
                                                    <!-- /DROPDOWN BOX LIST ITEM -->

                                                    <!-- DROPDOWN BOX LIST ITEM -->
                                                    <a class="dropdown-box-list-item" href="hub-profile-messages.html">
                                                        <!-- USER STATUS -->
                                                        <div class="user-status">
                                                            <!-- USER STATUS AVATAR -->
                                                            <div class="user-status-avatar">
                                                                <!-- USER AVATAR -->
                                                                <div class="user-avatar small no-outline">
                                                                    <!-- USER AVATAR CONTENT -->
                                                                    <div class="user-avatar-content">
                                                                        <!-- HEXAGON -->
                                                                        <img src="{{ asset('img/avatar/07.jpg') }}"
                                                                            style="width: 50px; height: 50px; position: relative;"><canvas
                                                                            width="30" height="32"
                                                                            style="position: absolute; top: 0px; left: 0px;"></canvas>
                                                                        <!-- /HEXAGON -->
                                                                    </div>
                                                                    <!-- /USER AVATAR CONTENT -->

                                                                    <!-- /USER AVATAR BADGE -->
                                                                </div>
                                                                <!-- /USER AVATAR -->
                                                            </div>
                                                            <!-- /USER STATUS AVATAR -->

                                                            <!-- USER STATUS TITLE -->
                                                            <p class="user-status-title"><span class="bold">Sarah
                                                                    Diamond</span></p>
                                                            <!-- /USER STATUS TITLE -->

                                                            <!-- USER STATUS TEXT -->
                                                            <p class="user-status-text">I'm sending you the latest news of
                                                                the release...</p>
                                                            <!-- /USER STATUS TEXT -->

                                                            <!-- USER STATUS TIMESTAMP -->
                                                            <p class="user-status-timestamp floaty">16 hours ago</p>
                                                            <!-- /USER STATUS TIMESTAMP -->
                                                        </div>
                                                        <!-- /USER STATUS -->
                                                    </a>
                                                    <!-- /DROPDOWN BOX LIST ITEM -->

                                                    <!-- DROPDOWN BOX LIST ITEM -->
                                                    <a class="dropdown-box-list-item" href="hub-profile-messages.html">
                                                        <!-- USER STATUS -->
                                                        <div class="user-status">
                                                            <!-- USER STATUS AVATAR -->
                                                            <div class="user-status-avatar">
                                                                <!-- USER AVATAR -->
                                                                <div class="user-avatar small no-outline">
                                                                    <!-- USER AVATAR CONTENT -->
                                                                    <div class="user-avatar-content">
                                                                        <!-- HEXAGON -->
                                                                        <img src="{{ asset('img/avatar/12.jpg') }}"
                                                                            style="width: 50px; height: 50px; position: relative;"><canvas
                                                                            width="30" height="32"
                                                                            style="position: absolute; top: 0px; left: 0px;"></canvas>
                                                                        <!-- /HEXAGON -->
                                                                    </div>
                                                                    <!-- /USER AVATAR CONTENT -->

                                                                    <!-- /USER AVATAR BADGE -->
                                                                </div>
                                                                <!-- /USER AVATAR -->
                                                            </div>
                                                            <!-- /USER STATUS AVATAR -->

                                                            <!-- USER STATUS TITLE -->
                                                            <p class="user-status-title"><span class="bold">James
                                                                    Murdock</span></p>
                                                            <!-- /USER STATUS TITLE -->

                                                            <!-- USER STATUS TEXT -->
                                                            <p class="user-status-text">Great! Then will meet with them at
                                                                the party...</p>
                                                            <!-- /USER STATUS TEXT -->

                                                            <!-- USER STATUS TIMESTAMP -->
                                                            <p class="user-status-timestamp floaty">7 days ago</p>
                                                            <!-- /USER STATUS TIMESTAMP -->
                                                        </div>
                                                        <!-- /USER STATUS -->
                                                    </a>
                                                    <!-- /DROPDOWN BOX LIST ITEM -->

                                                    <!-- DROPDOWN BOX LIST ITEM -->
                                                    <a class="dropdown-box-list-item" href="hub-profile-messages.html">
                                                        <!-- USER STATUS -->
                                                        <div class="user-status">
                                                            <!-- USER STATUS AVATAR -->
                                                            <div class="user-status-avatar">
                                                                <!-- USER AVATAR -->
                                                                <div class="user-avatar small no-outline">
                                                                    <!-- USER AVATAR CONTENT -->
                                                                    <div class="user-avatar-content">
                                                                        <!-- HEXAGON -->
                                                                        <img src="{{ asset('img/avatar/10.jpg') }}"
                                                                            style="width: 50px; height: 50px; position: relative;"><canvas
                                                                            width="30" height="32"
                                                                            style="position: absolute; top: 0px; left: 0px;"></canvas>
                                                                        <!-- /HEXAGON -->
                                                                    </div>
                                                                    <!-- /USER AVATAR CONTENT -->

                                                                    <!-- /USER AVATAR BADGE -->
                                                                </div>
                                                                <!-- /USER AVATAR -->
                                                            </div>
                                                            <!-- /USER STATUS AVATAR -->

                                                            <!-- USER STATUS TITLE -->
                                                            <p class="user-status-title"><span class="bold">The Green
                                                                    Goo</span></p>
                                                            <!-- /USER STATUS TITLE -->

                                                            <!-- USER STATUS TEXT -->
                                                            <p class="user-status-text">Can you stream that new game?</p>
                                                            <!-- /USER STATUS TEXT -->

                                                            <!-- USER STATUS TIMESTAMP -->
                                                            <p class="user-status-timestamp floaty">10 days ago</p>
                                                            <!-- /USER STATUS TIMESTAMP -->
                                                        </div>
                                                        <!-- /USER STATUS -->
                                                    </a>
                                                    <!-- /DROPDOWN BOX LIST ITEM -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: auto; height: 504px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar"
                                        style="height: 350px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                                </div>
                            </div>
                            <!-- /DROPDOWN BOX LIST -->

                            <!-- DROPDOWN BOX BUTTON -->
                            <a class="dropdown-box-button primary" href="hub-profile-messages.html">View all Messages</a>
                            <!-- /DROPDOWN BOX BUTTON -->
                        </div>
                    </li>
                    <li class="nav-item dropdown mr-3 ml-4"> </li>
                    <li class="nav-item dropdown mx-1 headerTooltip">
                        <a class="nav-link dropdown-toggle action-list-item header-dropdown-trigger " href="#"
                            id="navbarDropdownFriendReq" role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="http://fyrestream.com//content/themes/default/frontend/img/Friends-top.png"
                                class="top-notification-pic" alt="">
                            <!-- <img src="http://fyrestream.com//content/themes/default/frontend/images/Friends-Dark.png" class="top-notification-pic-hover" alt="">  -->
                            <div class="tooltip action-list-item-icon icon-friend">Friend Requests</div>
                        </a>
                        <div class="dropdown-box header-dropdown"
                            style="position: absolute; z-index: 9999; top: 64px; right: 6px; opacity: 0; visibility: hidden; transform: translate(0px, -40px); transition: transform 0.4s ease-in-out 0s, opacity 0.4s ease-in-out 0s, visibility 0.4s ease-in-out 0s;"">
                        <!-- DROPDOWN BOX HEADER -->
                        <div class=" dropdown-box-header">
                            <!-- DROPDOWN BOX HEADER TITLE -->
                            <p class="dropdown-box-header-title">Friend Requests</p>
                            <!-- /DROPDOWN BOX HEADER TITLE -->

                            <!-- DROPDOWN BOX HEADER ACTIONS -->
                            <div class="dropdown-box-header-actions">
                                <!-- DROPDOWN BOX HEADER ACTION -->
                                <p class="dropdown-box-header-action">Find Friends</p>
                                <!-- /DROPDOWN BOX HEADER ACTION -->

                                <!-- DROPDOWN BOX HEADER ACTION -->
                                <p class="dropdown-box-header-action">Settings</p>
                                <!-- /DROPDOWN BOX HEADER ACTION -->
                            </div>
                            <!-- /DROPDOWN BOX HEADER ACTIONS -->
                        </div>
                        <!-- /DROPDOWN BOX HEADER -->

                        <!-- DROPDOWN BOX LIST -->
                        <div class="dropdown-box-list no-hover" data-simplebar="init">
                            <div class="simplebar-wrapper" style="margin: 0px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden;">
                                        @if(!empty(friendRequests()))
                                            @forelse(friendRequests() as $friendRequest)
                                            <div class="simplebar-content" style="padding: 0px;">
                                                <!-- DROPDOWN BOX LIST ITEM -->
                                                <div class="dropdown-box-list-item">
                                                    <!-- USER STATUS -->
                                                    <div class="user-status request">
                                                        <!-- USER STATUS AVATAR -->
                                                        <a class="user-status-avatar" href="profile-timeline.html">
                                                            <!-- USER AVATAR -->
                                                            <div class="user-avatar small no-outline">
                                                                <!-- USER AVATAR CONTENT -->
                                                                <div class="user-avatar-content">
                                                                    <!-- HEXAGON -->
                                                                    <img src="{{ asset($friendRequest->user->image) }}"
                                                                        style="width: 50px; height: 50px; position: relative;"><canvas
                                                                        width="30" height="32"
                                                                        style="position: absolute; top: 0px; left: 0px;"></canvas>
                                                                    <!-- /HEXAGON -->
                                                                </div>
                                                                <!-- /USER AVATAR CONTENT -->
                                                                <!-- /USER AVATAR BADGE -->
                                                            </div>
                                                            <!-- /USER AVATAR -->
                                                        </a>
                                                        <!-- /USER STATUS AVATAR -->
                                                        <!-- USER STATUS TITLE -->
                                                        <p class="user-status-title"><a class="bold"
                                                                href="profile-timeline.html">{{$friendRequest->user->name}}</a>
                                                        </p>
                                                        <!-- /USER STATUS TITLE -->
                                                        <!-- USER STATUS TEXT -->
                                                        <p class="user-status-text">0 friends in common</p>
                                                        <!-- /USER STATUS TEXT -->
                                                        <!-- ACTION REQUEST LIST -->
                                                        <div class="action-request-list">
                                                            <!-- ACTION REQUEST -->
                                                            <div class="action-request accept" onclick="acceptRequest({{$friendRequest->friend_id}})">
                                                                <!-- ACTION REQUEST ICON -->
                                                                <svg class="action-request-icon icon-add-friend">
                                                                    <use xlink:href="#svg-add-friend"></use>
                                                                </svg>
                                                                <!-- /ACTION REQUEST ICON -->
                                                            </div>
                                                            <!-- /ACTION REQUEST -->
                                                            <!-- ACTION REQUEST -->
                                                            <div class="action-request decline" onclick="removeRequest({{$friendRequest->friend_id}})">
                                                                <!-- ACTION REQUEST ICON -->
                                                                <svg class="action-request-icon icon-remove-friend" >
                                                                    <use xlink:href="#svg-remove-friend"></use>
                                                                </svg>
                                                                <!-- /ACTION REQUEST ICON -->
                                                            </div>
                                                            <!-- /ACTION REQUEST -->
                                                        </div>
                                                        <!-- ACTION REQUEST LIST -->
                                                    </div>
                                                    <!-- /USER STATUS -->
                                                </div>
                                                <!-- /DROPDOWN BOX LIST ITEM -->
                                            </div>
                                            @empty
                                            @endforelse
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: auto; height: 228px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                            </div>
                        </div>
                        <!-- /DROPDOWN BOX LIST -->

                        <!-- DROPDOWN BOX BUTTON -->
                        <a class="dropdown-box-button secondary" href="hub-profile-requests.html">View all Requests</a>
                        <!-- /DROPDOWN BOX BUTTON -->
            </div>
            </li>
            <li class="nav-item dropdown mr-3 ml-4"> </li>
            <li class="nav-item dropdown mx-1 headerTooltip">
                <a class="nav-link dropdown-toggle navbarDropdown action-list-item unread header-dropdown-trigger" href="#"
                    id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="http://fyrestream.com//content/themes/default/frontend/img/Notification-top.png"
                        class="top-notification-pic" alt="">
                    <!-- <img src="http://fyrestream.com//content/themes/default/frontend/images/Notification-Dark.png" class="top-notification-pic-hover" alt="">  -->
                    <div class="tooltip action-list-item-icon icon-notification">Notifications</div>
                </a>
                <div class="dropdown-box header-dropdown"
                    style="position: absolute; z-index: 9999; top: 64px; right: 6px; opacity: 0; visibility: hidden; transform: translate(0px, -40px); transition: transform 0.4s ease-in-out 0s, opacity 0.4s ease-in-out 0s, visibility 0.4s ease-in-out 0s;"">
                        <!-- DROPDOWN BOX HEADER -->
                        <div class=" dropdown-box-header">
                    <!-- DROPDOWN BOX HEADER TITLE -->
                    <p class="dropdown-box-header-title">Notifications</p>
                    <!-- /DROPDOWN BOX HEADER TITLE -->

                    <!-- DROPDOWN BOX HEADER ACTIONS -->
                    <div class="post-settings-wrap" style="position: relative;">
                        <!-- POST SETTINGS -->
                        <div class="post-settings widget-box-post-settings-dropdown-trigger active">
                            <!-- POST SETTINGS ICON -->
                            <svg class="post-settings-icon icon-more-dots">
                                <use xlink:href="#svg-more-dots"></use>
                            </svg>
                            <!-- /POST SETTINGS ICON -->
                        </div>
                        <!-- /POST SETTINGS -->

                        <!-- SIMPLE DROPDOWN -->
                        <div class="simple-dropdown widget-box-post-settings-dropdown"
                            style="position: absolute; z-index: 9999; top: 30px; right: 9px; opacity: 1; visibility: visible; transform: translate(0px, 0px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link d-flex flex-row">
                                <i class="fa fa-check"></i>
                                <span class="d-flex flex-column">
                                    <span class="d-block heading">Mark all as read </span>
                                </span>
                            </p>
                            <p class="simple-dropdown-link d-flex flex-row">
                                <i class="fa fa-cog"></i>
                                <span class="d-flex flex-column">
                                    <span class="d-block heading">Notification Setting </span>
                                </span>
                            </p>
                            <p class="simple-dropdown-link d-flex flex-row">
                                <i class="fa fa-folder-open"></i>
                                <span class="d-flex flex-column">
                                    <span class="d-block heading">Open Notifications </span>
                                </span>
                            </p>

                        </div>
                        <!-- /SIMPLE DROPDOWN -->
                    </div>
                    <!-- /DROPDOWN BOX HEADER ACTIONS -->
                </div>
                <!-- /DROPDOWN BOX HEADER -->

                <!-- DROPDOWN BOX LIST -->
                <div class="dropdown-box-list" data-simplebar="init">
                    <div class="simplebar-wrapper" style="margin: 0px;">
                        <div class="simplebar-height-auto-observer-wrapper">
                            <div class="simplebar-height-auto-observer"></div>
                        </div>
                        <div class="simplebar-mask">
                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                    <div class="simplebar-content" style="padding: 0px;">
                                        <!-- DROPDOWN BOX LIST ITEM -->
                                        <div class="dropdown-box-list-item unread">
                                            <!-- USER STATUS -->
                                            <div class="user-status notification">
                                                <!-- USER STATUS AVATAR -->
                                                <a class="user-status-avatar" href="profile-timeline.html">
                                                    <!-- USER AVATAR -->
                                                    <div class="user-avatar small no-outline">
                                                        <!-- USER AVATAR CONTENT -->
                                                        <div class="user-avatar-content">
                                                            <!-- HEXAGON -->
                                                            <img src="{{ asset('img/avatar/03.jpg') }}"
                                                                style="width: 50px; height: 50px; position: relative;"><canvas
                                                                width="30" height="32"
                                                                style="position: absolute; top: 0px; left: 0px;"></canvas>
                                                            <!-- /HEXAGON -->
                                                        </div>
                                                        <!-- /USER AVATAR CONTENT -->

                                                        <!-- /USER AVATAR BADGE -->
                                                    </div>
                                                    <!-- /USER AVATAR -->
                                                </a>
                                                <!-- /USER STATUS AVATAR -->

                                                <!-- USER STATUS TITLE -->
                                                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Nick
                                                        Grissom</a>
                                                    posted a comment on your <a class="highlighted"
                                                        href="profile-timeline.html">status update</a>
                                                </p>
                                                <!-- /USER STATUS TITLE -->

                                                <!-- USER STATUS TIMESTAMP -->
                                                <p class="user-status-timestamp">2 minutes ago</p>
                                                <!-- /USER STATUS TIMESTAMP -->

                                                <!-- USER STATUS ICON -->
                                                <div class="user-status-icon">

                                                </div>
                                                <!-- /USER STATUS ICON -->
                                            </div>
                                            <!-- /USER STATUS -->
                                        </div>
                                        <!-- /DROPDOWN BOX LIST ITEM -->

                                        <!-- DROPDOWN BOX LIST ITEM -->
                                        <div class="dropdown-box-list-item">
                                            <!-- USER STATUS -->
                                            <div class="user-status notification">
                                                <!-- USER STATUS AVATAR -->
                                                <a class="user-status-avatar" href="profile-timeline.html">
                                                    <!-- USER AVATAR -->
                                                    <div class="user-avatar small no-outline">
                                                        <!-- USER AVATAR CONTENT -->
                                                        <div class="user-avatar-content">
                                                            <!-- HEXAGON -->
                                                            <img src="{{ asset('img/avatar/07.jpg') }}"
                                                                style="width: 50px; height: 50px; position: relative;"><canvas
                                                                width="30" height="32"
                                                                style="position: absolute; top: 0px; left: 0px;"></canvas>
                                                            <!-- /HEXAGON -->
                                                        </div>
                                                        <!-- /USER AVATAR CONTENT -->

                                                        <!-- /USER AVATAR BADGE -->
                                                    </div>
                                                    <!-- /USER AVATAR -->
                                                </a>
                                                <!-- /USER STATUS AVATAR -->

                                                <!-- USER STATUS TITLE -->
                                                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Sarah
                                                        Diamond</a> left
                                                    a like <img class="reaction" src="img/reaction/like.png"
                                                        alt="reaction-like"> reaction on your
                                                    <a class="highlighted" href="profile-timeline.html">status update</a>
                                                </p>
                                                <!-- /USER STATUS TITLE -->

                                                <!-- USER STATUS TIMESTAMP -->
                                                <p class="user-status-timestamp">17 minutes ago</p>
                                                <!-- /USER STATUS TIMESTAMP -->

                                                <!-- USER STATUS ICON -->
                                                <div class="user-status-icon">

                                                </div>
                                                <!-- /USER STATUS ICON -->
                                            </div>
                                            <!-- /USER STATUS -->
                                        </div>
                                        <!-- /DROPDOWN BOX LIST ITEM -->

                                        <!-- DROPDOWN BOX LIST ITEM -->
                                        <div class="dropdown-box-list-item">
                                            <!-- USER STATUS -->
                                            <div class="user-status notification">
                                                <!-- USER STATUS AVATAR -->
                                                <a class="user-status-avatar" href="profile-timeline.html">
                                                    <!-- USER AVATAR -->
                                                    <div class="user-avatar small no-outline">
                                                        <!-- USER AVATAR CONTENT -->
                                                        <div class="user-avatar-content">
                                                            <!-- HEXAGON -->
                                                            <img src="{{ asset('img/avatar/02.jpg') }}"
                                                                style="width: 50px; height: 50px; position: relative;"><canvas
                                                                width="30" height="32"
                                                                style="position: absolute; top: 0px; left: 0px;"></canvas>
                                                            <!-- /HEXAGON -->
                                                        </div>
                                                        <!-- /USER AVATAR CONTENT -->

                                                        <!-- /USER AVATAR BADGE -->
                                                    </div>
                                                    <!-- /USER AVATAR -->
                                                </a>
                                                <!-- /USER STATUS AVATAR -->

                                                <!-- USER STATUS TITLE -->
                                                <p class="user-status-title"><a class="bold"
                                                        href="profile-timeline.html">Destroy Dex</a> posted
                                                    a comment on your <a class="highlighted"
                                                        href="profile-photos.html">photo</a></p>
                                                <!-- /USER STATUS TITLE -->

                                                <!-- USER STATUS TIMESTAMP -->
                                                <p class="user-status-timestamp">31 minutes ago</p>
                                                <!-- /USER STATUS TIMESTAMP -->

                                                <!-- USER STATUS ICON -->
                                                <div class="user-status-icon">

                                                </div>
                                                <!-- /USER STATUS ICON -->
                                            </div>
                                            <!-- /USER STATUS -->
                                        </div>
                                        <!-- /DROPDOWN BOX LIST ITEM -->

                                        <!-- DROPDOWN BOX LIST ITEM -->
                                        <div class="dropdown-box-list-item">
                                            <!-- USER STATUS -->
                                            <div class="user-status notification">
                                                <!-- USER STATUS AVATAR -->
                                                <a class="user-status-avatar" href="profile-timeline.html">
                                                    <!-- USER AVATAR -->
                                                    <div class="user-avatar small no-outline">
                                                        <!-- USER AVATAR CONTENT -->
                                                        <div class="user-avatar-content">
                                                            <!-- HEXAGON -->
                                                            <img src="{{ asset('img/avatar/10.jpg') }}"
                                                                style="width: 50px; height: 50px; position: relative;"><canvas
                                                                width="30" height="32"
                                                                style="position: absolute; top: 0px; left: 0px;"></canvas>
                                                            <!-- /HEXAGON -->
                                                        </div>
                                                        <!-- /USER AVATAR CONTENT -->

                                                        <!-- /USER AVATAR BADGE -->
                                                    </div>
                                                    <!-- /USER AVATAR -->
                                                </a>
                                                <!-- /USER STATUS AVATAR -->

                                                <!-- USER STATUS TITLE -->
                                                <p class="user-status-title"><a class="bold" href="profile-timeline.html">The
                                                        Green Goo</a> left
                                                    a love <img class="reaction" src="img/reaction/love.png"
                                                        alt="reaction-love"> reaction on your
                                                    <a class="highlighted" href="profile-timeline.html">status update</a>
                                                </p>
                                                <!-- /USER STATUS TITLE -->

                                                <!-- USER STATUS TIMESTAMP -->
                                                <p class="user-status-timestamp">2 hours ago</p>
                                                <!-- /USER STATUS TIMESTAMP -->

                                                <!-- USER STATUS ICON -->
                                                <div class="user-status-icon">

                                                </div>
                                                <!-- /USER STATUS ICON -->
                                            </div>
                                            <!-- /USER STATUS -->
                                        </div>
                                        <!-- /DROPDOWN BOX LIST ITEM -->

                                        <!-- DROPDOWN BOX LIST ITEM -->
                                        <div class="dropdown-box-list-item">
                                            <!-- USER STATUS -->
                                            <div class="user-status notification">
                                                <!-- USER STATUS AVATAR -->
                                                <a class="user-status-avatar" href="profile-timeline.html">
                                                    <!-- USER AVATAR -->
                                                    <div class="user-avatar small no-outline">
                                                        <!-- USER AVATAR CONTENT -->
                                                        <div class="user-avatar-content">
                                                            <!-- HEXAGON -->
                                                            <img src="{{ asset('img/avatar/05.jpg') }}"
                                                                style="width: 50px; height: 50px; position: relative;"><canvas
                                                                width="30" height="32"
                                                                style="position: absolute; top: 0px; left: 0px;"></canvas>
                                                            <!-- /HEXAGON -->
                                                        </div>
                                                        <!-- /USER AVATAR CONTENT -->

                                                        <!-- /USER AVATAR BADGE -->
                                                    </div>
                                                    <!-- /USER AVATAR -->
                                                </a>
                                                <!-- /USER STATUS AVATAR -->

                                                <!-- USER STATUS TITLE -->
                                                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Neko
                                                        Bebop</a> posted
                                                    a comment on your <a class="highlighted" href="profile-timeline.html">status
                                                        update</a></p>
                                                <!-- /USER STATUS TITLE -->

                                                <!-- USER STATUS TIMESTAMP -->
                                                <p class="user-status-timestamp">3 hours ago</p>
                                                <!-- /USER STATUS TIMESTAMP -->

                                                <!-- USER STATUS ICON -->
                                                <div class="user-status-icon">

                                                </div>
                                                <!-- /USER STATUS ICON -->
                                            </div>
                                            <!-- /USER STATUS -->
                                        </div>
                                        <!-- /DROPDOWN BOX LIST ITEM -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="simplebar-placeholder" style="width: auto; height: 481px;"></div>
                    </div>
                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                    </div>
                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                        <div class="simplebar-scrollbar"
                            style="height: 366px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                    </div>
                </div>
                <!-- /DROPDOWN BOX LIST -->

                <!-- DROPDOWN BOX BUTTON -->
                <a class="dropdown-box-button secondary" href="hub-profile-notifications.html">View all Notifications</a>
                <!-- /DROPDOWN BOX BUTTON -->
                </div>
            </li>
            <li class="nav-item dropdown mr-3 ml-4"> </li>
            <li class="nav-item dropdown js_live-messages headerTooltip">
                <a href="javascript:void(0);"
                    class="action-list-item header-dropdown-trigger nav-link message-header-icon navbarDropdown"
                    data-toggle="dropdown" id="navbarDropdownMessage" data-display="static">
                    <img src="http://fyrestream.com//content/themes/default/frontend/img/Mail_Icon_White_FS.png"
                        class="top-notification-pic" alt="">
                    <!-- <img src="http://fyrestream.com//content/themes/default/frontend/img/Mail_Icon_White_FS.png" class="top-notification-pic-hover" alt="">
                          <span class="customNotify shadow-sm counter blue shadow-sm x-hidden">
                              0
                          </span>  -->
                    <div class="tooltip action-list-item-icon icon-messages">Messages</div>
                </a>
                <div class="dropdown-box header-dropdown"
                    style="position: absolute; z-index: 9999; top: 64px; right: 6px; opacity: 0; visibility: hidden; transform: translate(0px, -40px); transition: transform 0.4s ease-in-out 0s, opacity 0.4s ease-in-out 0s, visibility 0.4s ease-in-out 0s;">
                    <!-- DROPDOWN BOX HEADER -->
                    <div class="dropdown-box-header">
                        <!-- DROPDOWN BOX HEADER TITLE -->
                        <p class="dropdown-box-header-title">Messages</p>
                        <!-- /DROPDOWN BOX HEADER TITLE -->

                        <!-- DROPDOWN BOX HEADER ACTIONS -->
                        <div class="post-settings-wrap" style="position: relative;">
                            <!-- POST SETTINGS -->
                            <div class="post-settings widget-box-post-settings-dropdown-trigger active">
                                <!-- POST SETTINGS ICON -->
                                <svg class="post-settings-icon icon-more-dots">
                                    <use xlink:href="#svg-more-dots"></use>
                                </svg>
                                <!-- /POST SETTINGS ICON -->
                            </div>
                            <!-- /POST SETTINGS -->

                            <!-- SIMPLE DROPDOWN -->
                            <div class="simple-dropdown widget-box-post-settings-dropdown"
                                style="position: absolute; z-index: 9999; top: 30px; right: 9px; opacity: 1; visibility: visible; transform: translate(0px, 0px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link d-flex flex-row">
                                    <i class="fa fa-check"></i>
                                    <span class="d-flex flex-column">
                                        <span class="d-block heading">Mark all as read </span>
                                    </span>
                                </p>
                                <p class="simple-dropdown-link d-flex flex-row">
                                    <i class="fa fa-cog"></i>
                                    <span class="d-flex flex-column">
                                        <span class="d-block heading">Notification Setting </span>
                                    </span>
                                </p>
                                <p class="simple-dropdown-link d-flex flex-row">
                                    <i class="fa fa-folder-open"></i>
                                    <span class="d-flex flex-column">
                                        <span class="d-block heading">Open Notifications </span>
                                    </span>
                                </p>

                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /DROPDOWN BOX HEADER ACTIONS -->
                    </div>
                    <!-- /DROPDOWN BOX HEADER -->

                    <!-- DROPDOWN BOX LIST -->
                    <div class="dropdown-box-list medium" data-simplebar="init">
                        <div class="simplebar-wrapper" style="margin: 0px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                        <div class="simplebar-content" style="padding: 0px;">
                                            <!-- DROPDOWN BOX LIST ITEM -->
                                            <a class="dropdown-box-list-item" href="hub-profile-messages.html">
                                                <!-- USER STATUS -->
                                                <div class="user-status">
                                                    <!-- USER STATUS AVATAR -->
                                                    <div class="user-status-avatar">
                                                        <!-- USER AVATAR -->
                                                        <div class="user-avatar small no-outline">
                                                            <!-- USER AVATAR CONTENT -->
                                                            <div class="user-avatar-content">
                                                                <!-- HEXAGON -->
                                                                <img src="{{ asset('img/avatar/04.jpg') }}"
                                                                    style="width: 50px; height: 50px; position: relative;"><canvas
                                                                    width="30" height="32"
                                                                    style="position: absolute; top: 0px; left: 0px;"></canvas>
                                                                <!-- /HEXAGON -->
                                                            </div>
                                                            <!-- /USER AVATAR CONTENT -->

                                                            <!-- /USER AVATAR BADGE -->
                                                        </div>
                                                        <!-- /USER AVATAR -->
                                                    </div>
                                                    <!-- /USER STATUS AVATAR -->

                                                    <!-- USER STATUS TITLE -->
                                                    <p class="user-status-title"><span class="bold">Bearded Wonder</span></p>
                                                    <!-- /USER STATUS TITLE -->

                                                    <!-- USER STATUS TEXT -->
                                                    <p class="user-status-text">Great! Then will meet with them at the party...
                                                    </p>
                                                    <!-- /USER STATUS TEXT -->

                                                    <!-- USER STATUS TIMESTAMP -->
                                                    <p class="user-status-timestamp floaty">29 mins ago</p>
                                                    <!-- /USER STATUS TIMESTAMP -->
                                                </div>
                                                <!-- /USER STATUS -->
                                            </a>
                                            <!-- /DROPDOWN BOX LIST ITEM -->

                                            <!-- DROPDOWN BOX LIST ITEM -->
                                            <a class="dropdown-box-list-item" href="hub-profile-messages.html">
                                                <!-- USER STATUS -->
                                                <div class="user-status">
                                                    <!-- USER STATUS AVATAR -->
                                                    <div class="user-status-avatar">
                                                        <!-- USER AVATAR -->
                                                        <div class="user-avatar small no-outline">
                                                            <!-- USER AVATAR CONTENT -->
                                                            <div class="user-avatar-content">
                                                                <!-- HEXAGON -->
                                                                <img src="{{ asset('img/avatar/05.jpg') }}"
                                                                    style="width: 50px; height: 50px; position: relative;"><canvas
                                                                    width="30" height="32"
                                                                    style="position: absolute; top: 0px; left: 0px;"></canvas>
                                                                <!-- /HEXAGON -->
                                                            </div>
                                                            <!-- /USER AVATAR CONTENT -->

                                                            <!-- /USER AVATAR BADGE -->
                                                        </div>
                                                        <!-- /USER AVATAR -->
                                                    </div>
                                                    <!-- /USER STATUS AVATAR -->

                                                    <!-- USER STATUS TITLE -->
                                                    <p class="user-status-title"><span class="bold">Neko Bebop</span></p>
                                                    <!-- /USER STATUS TITLE -->

                                                    <!-- USER STATUS TEXT -->
                                                    <p class="user-status-text">Awesome! I'll see you there!</p>
                                                    <!-- /USER STATUS TEXT -->

                                                    <!-- USER STATUS TIMESTAMP -->
                                                    <p class="user-status-timestamp floaty">54 mins ago</p>
                                                    <!-- /USER STATUS TIMESTAMP -->
                                                </div>
                                                <!-- /USER STATUS -->
                                            </a>
                                            <!-- /DROPDOWN BOX LIST ITEM -->

                                            <!-- DROPDOWN BOX LIST ITEM -->
                                            <a class="dropdown-box-list-item" href="hub-profile-messages.html">
                                                <!-- USER STATUS -->
                                                <div class="user-status">
                                                    <!-- USER STATUS AVATAR -->
                                                    <div class="user-status-avatar">
                                                        <!-- USER AVATAR -->
                                                        <div class="user-avatar small no-outline">
                                                            <!-- USER AVATAR CONTENT -->
                                                            <div class="user-avatar-content">
                                                                <!-- HEXAGON -->
                                                                <img src="{{ asset('img/avatar/03.jpg') }}"
                                                                    style="width: 50px; height: 50px; position: relative;"><canvas
                                                                    width="30" height="32"
                                                                    style="position: absolute; top: 0px; left: 0px;"></canvas>
                                                                <!-- /HEXAGON -->
                                                            </div>
                                                            <!-- /USER AVATAR CONTENT -->

                                                            <!-- /USER AVATAR BADGE -->
                                                        </div>
                                                        <!-- /USER AVATAR -->
                                                    </div>
                                                    <!-- /USER STATUS AVATAR -->

                                                    <!-- USER STATUS TITLE -->
                                                    <p class="user-status-title"><span class="bold">Nick Grissom</span></p>
                                                    <!-- /USER STATUS TITLE -->

                                                    <!-- USER STATUS TEXT -->
                                                    <p class="user-status-text">Can you stream that new game?</p>
                                                    <!-- /USER STATUS TEXT -->

                                                    <!-- USER STATUS TIMESTAMP -->
                                                    <p class="user-status-timestamp floaty">2 hours ago</p>
                                                    <!-- /USER STATUS TIMESTAMP -->
                                                </div>
                                                <!-- /USER STATUS -->
                                            </a>
                                            <!-- /DROPDOWN BOX LIST ITEM -->

                                            <!-- DROPDOWN BOX LIST ITEM -->
                                            <a class="dropdown-box-list-item" href="hub-profile-messages.html">
                                                <!-- USER STATUS -->
                                                <div class="user-status">
                                                    <!-- USER STATUS AVATAR -->
                                                    <div class="user-status-avatar">
                                                        <!-- USER AVATAR -->
                                                        <div class="user-avatar small no-outline">
                                                            <!-- USER AVATAR CONTENT -->
                                                            <div class="user-avatar-content">
                                                                <!-- HEXAGON -->
                                                                <img src="{{ asset('img/avatar/07.jpg') }}"
                                                                    style="width: 50px; height: 50px; position: relative;"><canvas
                                                                    width="30" height="32"
                                                                    style="position: absolute; top: 0px; left: 0px;"></canvas>
                                                                <!-- /HEXAGON -->
                                                            </div>
                                                            <!-- /USER AVATAR CONTENT -->

                                                            <!-- /USER AVATAR BADGE -->
                                                        </div>
                                                        <!-- /USER AVATAR -->
                                                    </div>
                                                    <!-- /USER STATUS AVATAR -->

                                                    <!-- USER STATUS TITLE -->
                                                    <p class="user-status-title"><span class="bold">Sarah Diamond</span></p>
                                                    <!-- /USER STATUS TITLE -->

                                                    <!-- USER STATUS TEXT -->
                                                    <p class="user-status-text">I'm sending you the latest news of the
                                                        release...
                                                    </p>
                                                    <!-- /USER STATUS TEXT -->

                                                    <!-- USER STATUS TIMESTAMP -->
                                                    <p class="user-status-timestamp floaty">16 hours ago</p>
                                                    <!-- /USER STATUS TIMESTAMP -->
                                                </div>
                                                <!-- /USER STATUS -->
                                            </a>
                                            <!-- /DROPDOWN BOX LIST ITEM -->

                                            <!-- DROPDOWN BOX LIST ITEM -->
                                            <a class="dropdown-box-list-item" href="hub-profile-messages.html">
                                                <!-- USER STATUS -->
                                                <div class="user-status">
                                                    <!-- USER STATUS AVATAR -->
                                                    <div class="user-status-avatar">
                                                        <!-- USER AVATAR -->
                                                        <div class="user-avatar small no-outline">
                                                            <!-- USER AVATAR CONTENT -->
                                                            <div class="user-avatar-content">
                                                                <!-- HEXAGON -->
                                                                <img src="{{ asset('img/avatar/12.jpg') }}"
                                                                    style="width: 50px; height: 50px; position: relative;"><canvas
                                                                    width="30" height="32"
                                                                    style="position: absolute; top: 0px; left: 0px;"></canvas>
                                                                <!-- /HEXAGON -->
                                                            </div>
                                                            <!-- /USER AVATAR CONTENT -->

                                                            <!-- /USER AVATAR BADGE -->
                                                        </div>
                                                        <!-- /USER AVATAR -->
                                                    </div>
                                                    <!-- /USER STATUS AVATAR -->

                                                    <!-- USER STATUS TITLE -->
                                                    <p class="user-status-title"><span class="bold">James Murdock</span></p>
                                                    <!-- /USER STATUS TITLE -->

                                                    <!-- USER STATUS TEXT -->
                                                    <p class="user-status-text">Great! Then will meet with them at the party...
                                                    </p>
                                                    <!-- /USER STATUS TEXT -->

                                                    <!-- USER STATUS TIMESTAMP -->
                                                    <p class="user-status-timestamp floaty">7 days ago</p>
                                                    <!-- /USER STATUS TIMESTAMP -->
                                                </div>
                                                <!-- /USER STATUS -->
                                            </a>
                                            <!-- /DROPDOWN BOX LIST ITEM -->

                                            <!-- DROPDOWN BOX LIST ITEM -->
                                            <a class="dropdown-box-list-item" href="hub-profile-messages.html">
                                                <!-- USER STATUS -->
                                                <div class="user-status">
                                                    <!-- USER STATUS AVATAR -->
                                                    <div class="user-status-avatar">
                                                        <!-- USER AVATAR -->
                                                        <div class="user-avatar small no-outline">
                                                            <!-- USER AVATAR CONTENT -->
                                                            <div class="user-avatar-content">
                                                                <!-- HEXAGON -->
                                                                <img src="{{ asset('img/avatar/10.jpg') }}"
                                                                    style="width: 50px; height: 50px; position: relative;"><canvas
                                                                    width="30" height="32"
                                                                    style="position: absolute; top: 0px; left: 0px;"></canvas>
                                                                <!-- /HEXAGON -->
                                                            </div>
                                                            <!-- /USER AVATAR CONTENT -->

                                                            <!-- /USER AVATAR BADGE -->
                                                        </div>
                                                        <!-- /USER AVATAR -->
                                                    </div>
                                                    <!-- /USER STATUS AVATAR -->

                                                    <!-- USER STATUS TITLE -->
                                                    <p class="user-status-title"><span class="bold">The Green Goo</span></p>
                                                    <!-- /USER STATUS TITLE -->

                                                    <!-- USER STATUS TEXT -->
                                                    <p class="user-status-text">Can you stream that new game?</p>
                                                    <!-- /USER STATUS TEXT -->

                                                    <!-- USER STATUS TIMESTAMP -->
                                                    <p class="user-status-timestamp floaty">10 days ago</p>
                                                    <!-- /USER STATUS TIMESTAMP -->
                                                </div>
                                                <!-- /USER STATUS -->
                                            </a>
                                            <!-- /DROPDOWN BOX LIST ITEM -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: auto; height: 504px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                            <div class="simplebar-scrollbar"
                                style="height: 350px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                        </div>
                    </div>
                    <!-- /DROPDOWN BOX LIST -->

                    <!-- DROPDOWN BOX BUTTON -->
                    <a class="dropdown-box-button primary" href="hub-profile-messages.html">View all Messages</a>
                    <!-- /DROPDOWN BOX BUTTON -->
                </div>
            </li>
            </ul>

            <div class="profile-nav ">
                <div class="btn-group">
                    <span id="profile-btn" type="button" style="color: black;" class=" dropdown-toggle font-weight-bolder"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{Auth::user()->name}}
                        @if(Auth::user()->image)
                        <img src="{{ asset(Auth::user()->image) }}" style="width: 40px; height: 40px;   border-radius: 50%;" alt="profile2" class="ml-2">
                        @elseif(Auth::user()->gender === "male")
                        <img src="{{asset('storage/images/static/blank_profile_male.jpg')}}" style="width: 40px; height: 40px;   border-radius: 50%;" alt="profile2" class="ml-2">
                        @elseif(Auth::user()->gender === "female")
                        <img src="{{asset('storage/images/static/blank_profile_female.jpg')}}" style="width: 40px; height: 40px;   border-radius: 50%;" alt="profile2" class="ml-2">
                        @else
                        <img src="{{asset('storage/images/static/default_profile.jpg')}}" style="width: 40px; height: 40px;   border-radius: 50%;" alt="profile2" class="ml-2">
                        @endif
                    </span>
                    <div class="d-none dropdown-menu dropdown-menu-right bg-black dropdownMenuCustom profile-dropdown ">
                        <div class="text-left pl10 ">
                            <h4>{{Auth::user()->name}}</h4>
                        </div>
                        <div class="bg-white pt10">
                            <a href="http://fyrestream.com//kinza">
                                <button class="dropdown-item" type="button">
                                    <i class="fa fa-user"></i>
                                    My Profile
                                </button>
                            </a>
                            <a href="http://fyrestream.com//settings">
                                <button class="dropdown-item" type="button">
                                    <i class="fa fa-cog"></i>
                                    Setting and Privacy
                                </button>
                            </a>
                            <a href="http://fyrestream.com//market">
                                <button class="dropdown-item" type="button">
                                    <i class="fa fa-fire"></i>
                                    Trending Streams
                                </button>
                            </a>
                            <a href="http://fyrestream.com//kinza/followers">
                                <button class="dropdown-item" type="button">
                                    <i class="fa fa-users"></i>
                                    Followers
                                </button>
                            </a>
                            <a href="http://fyrestream.com//kinza/followings">
                                <button class="dropdown-item" type="button">
                                    <i class="fa fa-user-plus"></i>
                                    Following
                                </button>
                            </a>
                            <a role="button" type="button">
                                <button class="dropdown-item" type="button" onclick="document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sliders-h"></i> Logout
                                </button>
                                <form action="/logout" method="POST" class="d-none" id="logout-form">
                                @csrf
                                </form>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </header>

        <!-- FLOATY BAR -->
        <aside class="floaty-bar">
            <!-- BAR ACTIONS -->
            <div class="bar-actions">
                <!-- PROGRESS STAT -->
                <div class="progress-stat">
                    <!-- BAR PROGRESS WRAP -->
                    <div class="bar-progress-wrap">
                        <!-- BAR PROGRESS INFO -->
                        <p class="bar-progress-info">Next: <span class="bar-progress-text"></span></p>
                        <!-- /BAR PROGRESS INFO -->
                    </div>
                    <!-- /BAR PROGRESS WRAP -->

                    <!-- PROGRESS STAT BAR -->
                    <div id="logged-user-level-cp" class="progress-stat-bar"></div>
                    <!-- /PROGRESS STAT BAR -->
                </div>
                <!-- /PROGRESS STAT -->
            </div>
            <!-- /BAR ACTIONS -->

            <!-- BAR ACTIONS -->
            <div class="bar-actions">
                <!-- ACTION LIST -->
                <div class="action-list dark">
                    <!-- ACTION LIST ITEM -->
                    <a class="action-list-item" href="marketplace-cart.html">
                        <!-- ACTION LIST ITEM ICON -->
                        <svg class="action-list-item-icon icon-shopping-bag">
                            <use xlink:href="#svg-shopping-bag"></use>
                        </svg>
                        <!-- /ACTION LIST ITEM ICON -->
                    </a>
                    <!-- /ACTION LIST ITEM -->

                    <!-- ACTION LIST ITEM -->
                    <a class="action-list-item" href="hub-profile-requests.html">
                        <!-- ACTION LIST ITEM ICON -->
                        <svg class="action-list-item-icon icon-friend">
                            <use xlink:href="#svg-friend"></use>
                        </svg>
                        <!-- /ACTION LIST ITEM ICON -->
                    </a>
                    <!-- /ACTION LIST ITEM -->

                    <!-- ACTION LIST ITEM -->
                    <a class="action-list-item" href="hub-profile-messages.html">
                        <!-- ACTION LIST ITEM ICON -->
                        <svg class="action-list-item-icon icon-messages">
                            <use xlink:href="#svg-messages"></use>
                        </svg>
                        <!-- /ACTION LIST ITEM ICON -->
                    </a>
                    <!-- /ACTION LIST ITEM -->

                    <!-- ACTION LIST ITEM -->
                    <a class="action-list-item unread" href="hub-profile-notifications.html">
                        <!-- ACTION LIST ITEM ICON -->
                        <svg class="action-list-item-icon icon-notification">
                            <use xlink:href="#svg-notification"></use>
                        </svg>
                        <!-- /ACTION LIST ITEM ICON -->
                    </a>
                    <!-- /ACTION LIST ITEM -->
                </div>
                <!-- /ACTION LIST -->

                <!-- ACTION ITEM WRAP -->
                <a class="action-item-wrap" href="hub-profile-info.html">
                    <!-- ACTION ITEM -->
                    <div class="action-item dark">
                        <!-- ACTION ITEM ICON -->
                        <svg class="action-item-icon icon-settings">
                            <use xlink:href="#svg-settings"></use>
                        </svg>
                        <!-- /ACTION ITEM ICON -->
                    </div>
                    <!-- /ACTION ITEM -->
                </a>
                <!-- /ACTION ITEM WRAP -->
            </div>
            <!-- /BAR ACTIONS -->
        </aside>
        <!-- /FLOATY BAR -->

        @yield('content')




        <!-- app -->
        <script src="{{ asset('js/utils/app.js') }}"></script>
        <!-- page loader -->
        <script src="{{ asset('js/utils/page-loader.js') }}"></script>
        <!-- simplebar -->
        <script src="{{ asset('js/vendor/simplebar.min.js') }}"></script>
        <!-- liquidify -->
        <script src="{{ asset('js/utils/liquidify.js') }}"></script>
        <!-- XM_Plugins -->
        <script src="{{ asset('js/vendor/xm_plugins.min.js') }}"></script>
        <!-- tiny-slider -->
        <script src="{{ asset('js/vendor/tiny-slider.min.js') }}"></script>
        <!-- global.hexagons -->
        <script src="{{ asset('js/global/global.hexagons.js') }}"></script>
        <!-- global.tooltips -->
        <script src="{{ asset('js/global/global.tooltips.js') }}"></script>
        <!-- global.popups -->
        <script src="{{ asset('js/global/global.popups.js') }}"></script>
        <!-- header -->
        <script src="{{ asset('js/header/header.js') }}"></script>
        <!-- sidebar -->
        <!-- <script src="{{ asset('js/sidebar/sidebar.js') }}"></script> -->
        <!-- content -->
        <script src="{{ asset('js/content/content.js') }}"></script>
        <!-- form.utils -->
        <script src="{{ asset('js/form/form.utils.js') }}"></script>
        <!-- twitter widget -->
        <script src="{{ asset('js/widget/twitter.js') }}"></script>
        <!-- SVG icons -->
        <script src="{{ asset('js/utils/svg-loader.js') }}"></script>
        <!-- bootstrap -->
        <script src="{{ asset('js/app.js') }}"></script>

        <script>
            // dropdown on  clicks
            $("#profile-btn").click(function ()
            {
                $("#profile-btn+.dropdown-menu").toggleClass("d-none");
                $("#profile-btn+.dropdown-menu").toggleClass("d-block");
            })

            $("#res-btn").click(function ()
            {
                $("#res-btn + .navbar-collapse").toggleClass("d-none");
                $("#res-btn + .navbar-collapse").toggleClass("d-flex");
            })


            function myFunction(x)
            {
                if (x.matches)
                {
                    $("#res-btn + .navbar-collapse").addClass("d-none");
                    $("#res-btn + .navbar-collapse").removeClass("d-flex");
                } else
                {
                    $("#res-btn + .navbar-collapse").removeClass("d-none");
                    $("#res-btn + .navbar-collapse").addClass("d-flex");
                }
            }

            var x = window.matchMedia("(max-width: 810px)")
            myFunction(x) // Call listener function at run time
            x.addListener(myFunction) // Attach listener function on state changes





            $(".chat-widget-message .user-status").on("click", function ()
            {
                if ($('.ch0').hasClass("d-none"))
                {
                    $('.ch0').removeClass("d-none");
                    $('.ch0').addClass("d-block");
                    widthSetter()
                } else
                {
                    if ($('.ch1').hasClass("d-none"))
                    {
                        $('.ch1').removeClass("d-none");
                        $('.ch1').addClass("d-block");
                        widthSetter()

                    } else
                    {
                        if ($('.ch2').hasClass("d-none"))
                        {
                            $('.ch2').removeClass("d-none");
                            $('.ch2').addClass("d-block");
                            widthSetter()

                        } else
                        {
                            $('.ch0').addClass("d-none");
                            $('.ch0').removeClass("d-block");
                            $('.ch0').addClass("d-block");

                        }
                    }
                }

                mq1(x);
                mq2(x2);
            })

            var $chatbox = $('.ch0')
                , $chatboxTitle = $('.ct0')
                , $chatboxTitleClose = $('.ctl0')
                , $chatboxCredentials = $('.chatbox__credentials');
            $chatboxTitle.on('click', function ()
            {
                $chatbox.toggleClass('chatbox--tray');
            });
            $chatboxTitleClose.on('click', function (e)
            {
                e.stopPropagation();
                // $chatbox.addClass('chatbox--closed');
                $chatbox.addClass('d-none');
                $chatbox.removeClass('d-block');
                widthSetter();
            });
            $chatbox.on('transitionend', function ()
            {
                if ($chatbox.hasClass('chatbox--closed')) $chatbox.remove();
            });

            var $chatbox1 = $('.ch1')
                , $chatboxTitle1 = $('.ct1')
                , $chatboxTitleClose1 = $('.ctl1')
                , $chatboxCredentials1 = $('.chatbox__credentials1');
            $chatboxTitle1.on('click', function ()
            {
                $chatbox1.toggleClass('chatbox--tray');
            });
            $chatboxTitleClose1.on('click', function (e)
            {
                e.stopPropagation();
                // $chatbox1.addClass('chatbox--closed');
                $chatbox1.addClass('d-none');
                $chatbox1.removeClass('d-block');
                widthSetter()
            });
            $chatbox1.on('transitionend', function ()
            {
                if ($chatbox1.hasClass('chatbox--closed')) $chatbox1.remove();
            });


            var $chatbox2 = $('.ch2')
                , $chatboxTitle2 = $('.ct2')
                , $chatboxTitleClose2 = $('.ctl2')
                , $chatboxCredentials2 = $('.chatbox__credentials2');
            $chatboxTitle2.on('click', function ()
            {
                $chatbox2.toggleClass('chatbox--tray');
            });
            $chatboxTitleClose2.on('click', function (e)
            {
                e.stopPropagation();
                // $chatbox2.addClass('chatbox--closed');
                $chatbox2.addClass('d-none');
                $chatbox2.removeClass('d-block');
                widthSetter()
            });
            $chatbox2.on('transitionend', function ()
            {
                if ($chatbox2.hasClass('chatbox--closed')) $chatbox1.remove();
            });


            function widthSetter()
            {
                var ch0W = $(".ch0").width() + 130;

                if ($('.ch0').hasClass("d-none"))
                {
                    ch0W = 130
                }

                $(".ch1").css("right", ch0W + "px");

                var ch1W = $(".ch1").width() + ch0W + 30;


                if ($('.ch1').hasClass("d-none"))
                {
                    ch1W = ch0W;
                }

                $(".ch2").css("right", ch1W + "px");

            }

            widthSetter();

            function mq1(x)
            {
                if (x.matches)
                { // If media query matches
                    $chatbox2.addClass('d-none');
                    $chatbox2.removeClass('d-block');
                } else
                {
                    // document.body.style.backgroundColor = "pink";
                }
            }

            var x = window.matchMedia("(max-width: 1200px)")
            mq1(x) // Call listener function at run time
            x.addListener(mq1) // Attach listener function on state changes


            function mq2(x2)
            {
                if (x2.matches)
                { // If media query matches
                    $chatbox1.addClass('d-none');
                    $chatbox1.removeClass('d-block');
                } else
                {
                    // document.body.style.backgroundColor = "pink";
                }
            }

            var x2 = window.matchMedia("(max-width: 850px)")
            mq2(x2) // Call listener function at run time
            x2.addListener(mq2) // Attach listener function on state changes

            $(".comment-text").on("click", function ()
            {
                $(this).parents(".post-options").siblings(".post-comment-list").toggleClass("d-none")
            })

        </script>
    </div>

    @stack('modals')

    <!-- START-- Request loading modal -->
    <div class="modal" id="request-loading-modal">
        <div class="modal-holder">
            <div class="lds-ring">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- Request loading modal --END -->

    <script>
        function setCookie(cname, cvalue, exdays)
        {
            var d = new Date();
            d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname)
        {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(";");
            for (var i = 0; i < ca.length; i++)
            {
                var c = ca[i];
                let posOf = c.indexOf(name, 0);
                if (posOf != -1)
                {
                    return c.substr(posOf + name.length);
                }
            }
            return null;
        }
        const requestLoadingModal = document.getElementById("request-loading-modal");
        requestLoadingModal.show = function(){
            this.classList.add("d-block");
        }
        requestLoadingModal.hide = function(){
            this.classList.remove("d-block");
        }

        function friendRequest(friend_id){
            $.ajax({
                type : "POST",
                url  : "{{route('profile.friendRequest')}}",
                data : {
                    '_token' : "{{csrf_token()}}",
                    'friend_id' : friend_id,
                },
                success : function(res){
                    if(res.success == true){
                
                        $("#button_"+friend_id).html('<button type="button" class="btn btn-sm btn-warning " data-uid="'+friend_id+'" onclick="cancelRequest('+friend_id+')"><i class="fa fa-clock mr5"></i>Requested</button>')
                    }
                },
                error   : function(res){

                }
            });
        }

        function acceptRequest(friend_id){
            $.ajax({
                type : "POST",
                url  : "{{route('acceptFriendRquest')}}",
                data : {
                    '_token'    :   "{{csrf_token()}}",
                    'friend_id' :   friend_id,
                },
                success : function(res){
                    if(res.success == true){

                    }
                },
                error : function(res){

                }
            });
        }

        function removeRequest(friend_id){
            alert(friend_id);
        }
    </script>
    @stack('scripts')
</body>

</html>
