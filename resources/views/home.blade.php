@extends('layouts.app')

@section('content')

<div class="main profile-videos">
    <div class="row">
        <div class="col-lg-2 d-lg-block d-none pl-0 pr-0">
            <!-- Acctive Events -->
            <div class="card news-card p-3">
                <div class="text-center">
                    <img style="width: min-content;position: relative; right: -10px;"
                        src="http://fyrestream.com//content/themes/default/frontend/images/four.png" alt="">
                    <img style="width: min-content; position: relative; left: -10px;"
                        src="http://fyrestream.com//content/themes/default/frontend/images/three.png" alt="">
                    <h3 style=" margin-top: 5px;margin-bottom: 10px;">
                        <b>Active Events Around You</b>
                    </h3>
                    <p>
                        Good morning, Welcome to Fyrestream.
                        This is where all the latest events, group
                        notices, and system announcements will
                        appear on your activity page.
                    </p>
                </div>
            </div>
            <!-- /Active Events -->

            <!-- Adds -->
            <div class="card news-card add-ad"> ADD </div>
            <!-- /Adds -->

            <!-- Birthdays -->
            <div class="card news-card add-moments-left">
                <div class="add-moments birthdays align-items-center" title=" Birthdays" style="cursor: pointer">
                    <div class="bday-cake-img">
                        <img src="http://fyrestream.com//content/themes/default/frontend/img/Pastel_Balloons_Fyre.png"
                            alt="">
                    </div>
                    <span>
                        <span class="moments-left-heading">
                            Birthdays
                        </span>
                    </span>
                </div>
            </div>
            <!-- /Birthdays -->

            <!-- Adds -->
            <div class="card news-card add-ad"> ADD </div>
            <!-- /Adds -->
        </div>
        <div class="col-lg-6 ">

            <!-- Write something -->
            <div class="widget-box status  p-3 mb-4">
                <div class="d-flex">
                    <a class="user-status-avatar mr-3" href="profile-timeline.html">
                        <!-- USER AVATAR -->
                        <div class="user-avatar small no-outline">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <img src="{{ asset('img/profile/ww.jpeg') }}">
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->

                            <!-- /USER AVATAR BADGE -->
                        </div>
                        <!-- /USER AVATAR -->
                    </a>
                    <input type="text" data-toggle="modal" data-target="#createPost" name="" id=""
                        placeholder="What's on your mind">
                </div>
            </div>
            <!-- / Write something -->

            <!-- text post -->
            <div class="widget-box no-padding mb-4">
                <!-- WIDGET BOX SETTINGS -->
                <div class="widget-box-settings">
                    <!-- POST SETTINGS WRAP -->
                    <div class="post-settings-wrap" style="position: relative;">
                        <!-- POST SETTINGS -->
                        <div class="post-settings widget-box-post-settings-dropdown-trigger">
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
                                <i class="fa fa-save"></i>
                                <span class="d-flex flex-column">
                                    <span class="d-block heading">Save Post </span>
                                    <span class="d-block">Add this to your saved items</span>
                                </span>
                            </p>
                            <hr>
                            <!-- /SIMPLE DROPDOWN LINK -->
                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link d-flex flex-row">
                                <i class="fa fa-bell"></i>
                                <span class="d-flex flex-column">
                                    <span class="d-block heading">Turn on Notification for this post </span>
                                </span>
                            </p>
                            <!-- /SIMPLE DROPDOWN LINK -->
                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link d-flex flex-row">
                                <i class="fa fa-code"></i>
                                <span class="d-flex flex-column">
                                    <span class="d-block heading">Embed </span>
                                </span>
                            </p>
                            <hr>
                            <!-- /SIMPLE DROPDOWN LINK -->

                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link d-flex flex-row">
                                <i class="fa fa-times"></i>
                                <span class="d-flex flex-column">
                                    <span class="d-block heading">Hide Post </span>
                                    <span class="d-block">See fewer posts like this</span>
                                </span>
                            </p>
                            <!-- /SIMPLE DROPDOWN LINK -->
                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link d-flex flex-row">
                                <i class="fa fa-clock-o"></i>
                                <span class="d-flex flex-column">
                                    <span class="d-block heading">Snooze the XYZ </span>
                                    <span class="d-block">Temporarily stop seeing post</span>
                                </span>
                            </p>
                            <!-- /SIMPLE DROPDOWN LINK -->
                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link d-flex flex-row">
                                <i class="fa fa-times-circle"></i>
                                <span class="d-flex flex-column">
                                    <span class="d-block heading">Unfollow the XYZ </span>
                                    <span class="d-block">Stop seeing post from this page</span>
                                </span>
                            </p>
                            <!-- /SIMPLE DROPDOWN LINK -->

                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link d-flex flex-row">
                                <i class="fa fa-exclamation-circle"></i>
                                <span class="d-flex flex-column">
                                    <span class="d-block heading">Find support or report post </span>
                                    <span class="d-block">I'm concerned about this post</span>
                                </span>
                            </p>
                            <!-- /SIMPLE DROPDOWN LINK -->


                        </div>
                        <!-- /SIMPLE DROPDOWN -->
                    </div>
                    <!-- /POST SETTINGS WRAP -->
                </div>
                <!-- /WIDGET BOX SETTINGS -->

                <!-- WIDGET BOX STATUS -->
                <div class="widget-box-status">
                    <!-- WIDGET BOX STATUS CONTENT -->
                    <div class="widget-box-status-content">
                        <!-- USER STATUS -->
                        <div class="user-status">
                            <!-- USER STATUS AVATAR -->
                            <a class="user-status-avatar" href="profile-timeline.html">
                                <!-- USER AVATAR -->
                                <div class="user-avatar small no-outline">
                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <img src="{{ asset('img/profile/ww.jpeg') }}">
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->

                                    <!-- /USER AVATAR BADGE -->
                                </div>
                                <!-- /USER AVATAR -->
                            </a>
                            <!-- /USER STATUS AVATAR -->

                            <!-- USER STATUS TITLE -->
                            <p class="user-status-title medium"><a class="bold" href="profile-timeline.html">Sean
                                    David</a></p>
                            <!-- /USER STATUS TITLE -->

                            <!-- USER STATUS TEXT -->
                            <p class="user-status-text small">29 minutes ago</p>
                            <!-- /USER STATUS TEXT -->
                        </div>
                        <!-- /USER STATUS -->

                        <!-- WIDGET BOX STATUS TEXT -->
                        <p class="widget-box-status-text">I have great news to share with you all! I've been officially
                            made a
                            game streaming verified partner by Streamy <a href="#">http://lyt.ly/snej25</a>. What does
                            this mean?
                            I'll be uploading new content every day, improving the quality and I'm gonna have access to
                            games a
                            month before the official release.</p>
                        <!-- /WIDGET BOX STATUS TEXT -->

                        <!-- WIDGET BOX STATUS TEXT -->
                        <p class="widget-box-status-text">This is a dream come true, thanks to all for the support!!!
                        </p>
                        <!-- /WIDGET BOX STATUS TEXT -->

                        <!-- CONTENT ACTIONS -->
                        <div class="content-actions">
                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LIST -->
                                    <div class="meta-line-list reaction-item-list">
                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item" style="position: relative;">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                src="img/reaction/like.png" alt="reaction-like">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown"
                                                style="position: absolute; z-index: 9999; bottom: 38px; left: -16px; opacity: 0; visibility: hidden; transform: translate(0px, 20px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction"
                                                        src="img/reaction/like.png" alt="reaction-like"> <span
                                                        class="bold">Like</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Neko Bebop</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Nick Grissom</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Sarah Diamond</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->

                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item" style="position: relative;">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                src="img/reaction/love.png" alt="reaction-love">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown"
                                                style="position: absolute; z-index: 9999; bottom: 38px; left: -16px; opacity: 0; visibility: hidden; transform: translate(0px, 20px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction"
                                                        src="img/reaction/love.png" alt="reaction-love"> <span
                                                        class="bold">Love</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Jett Spiegel</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->
                                    </div>
                                    <!-- /META LINE LIST -->

                                    <!-- META LINE TEXT -->
                                    <p class="meta-line-text">4</p>
                                    <!-- /META LINE TEXT -->
                                </div>
                                <!-- /META LINE -->


                            </div>
                            <!-- /CONTENT ACTION -->

                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link">0 Comments</p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TEXT -->
                                    <p class="meta-line-text">0 Shares</p>
                                    <!-- /META LINE TEXT -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->
                        </div>
                        <!-- /CONTENT ACTIONS -->
                    </div>
                    <!-- /WIDGET BOX STATUS CONTENT -->
                </div>
                <!-- /WIDGET BOX STATUS -->

                <!-- POST OPTIONS -->
                <div class="post-options">
                    <!-- POST OPTION WRAP -->
                    <div class="post-option-wrap" style="position: relative;">
                        <!-- POST OPTION -->
                        <div class="post-option reaction-options-dropdown-trigger">
                            <!-- POST OPTION ICON -->
                            <svg class="post-option-icon icon-thumbs-up">
                                <use xlink:href="#svg-thumbs-up"></use>
                            </svg>
                            <!-- /POST OPTION ICON -->

                            <!-- POST OPTION TEXT -->
                            <p class="post-option-text">Like</p>
                            <!-- /POST OPTION TEXT -->
                        </div>
                        <!-- /POST OPTION -->

                        <!-- REACTION OPTIONS -->
                        <div class="reaction-options reaction-options-dropdown"
                            style="position: absolute; z-index: 9999; bottom: 54px; left: -16px; opacity: 0; visibility: hidden; transform: translate(0px, 20px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Like" style="position: relative;">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="img/reaction/like.png" alt="reaction-like">
                                <!-- /REACTION OPTION IMAGE -->
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -24px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Like</p>
                                </div>
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Love" style="position: relative;">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="img/reaction/love.png" alt="reaction-love">
                                <!-- /REACTION OPTION IMAGE -->
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -26px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Love</p>
                                </div>
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft d-none " data-title="Dislike"
                                style="position: relative;">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="img/reaction/dislike.png"
                                    alt="reaction-dislike">
                                <!-- /REACTION OPTION IMAGE -->
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -31.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Dislike</p>
                                </div>
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Happy"
                                style="position: relative;">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="img/reaction/happy.png" alt="reaction-happy">
                                <!-- /REACTION OPTION IMAGE -->
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -30.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Happy</p>
                                </div>
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Funny"
                                style="position: relative;">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="img/reaction/funny.png" alt="reaction-funny">
                                <!-- /REACTION OPTION IMAGE -->
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -30px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Funny</p>
                                </div>
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Wow" style="position: relative;">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="img/reaction/wow.png" alt="reaction-wow">
                                <!-- /REACTION OPTION IMAGE -->
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -26px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Wow</p>
                                </div>
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Angry"
                                style="position: relative;">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="img/reaction/angry.png" alt="reaction-angry">
                                <!-- /REACTION OPTION IMAGE -->
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -29.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Angry</p>
                                </div>
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft d-none" data-title="Sad"
                                style="position: relative;">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="img/reaction/sad.png" alt="reaction-sad">
                                <!-- /REACTION OPTION IMAGE -->
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -23px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Sad</p>
                                </div>
                            </div>
                            <!-- /REACTION OPTION -->
                        </div>
                        <!-- /REACTION OPTIONS -->
                    </div>
                    <!-- /POST OPTION WRAP -->

                    <!-- POST OPTION -->
                    <div class="post-option comment-text">
                        <!-- POST OPTION ICON -->
                        <svg class="post-option-icon icon-comment">
                            <use xlink:href="#svg-comment"></use>
                        </svg>
                        <!-- /POST OPTION ICON -->

                        <!-- POST OPTION TEXT -->
                        <p class="post-option-text">Comment</p>
                        <!-- /POST OPTION TEXT -->
                    </div>
                    <!-- /POST OPTION -->

                    <!-- POST OPTION -->
                    <div class="post-option">
                        <!-- POST OPTION ICON -->
                        <svg class="post-option-icon icon-share">
                            <use xlink:href="#svg-share"></use>
                        </svg>
                        <!-- /POST OPTION ICON -->

                        <!-- POST OPTION TEXT -->
                        <p class="post-option-text">Share</p>
                        <!-- /POST OPTION TEXT -->
                    </div>
                    <!-- /POST OPTION -->
                </div>
                <!-- /POST OPTIONS -->
                <div class="post-comment-list d-none">


                    <!-- POST COMMENT FORM -->
                    <div class="post-comment-form">
                        <!-- USER AVATAR -->
                        <div class="user-avatar small no-outline">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <img src="{{ asset('img/profile/ww.jpeg') }}">
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->

                            <!-- /USER AVATAR BADGE -->
                        </div>
                        <!-- /USER AVATAR -->

                        <!-- FORM -->
                        <form class="form">
                            <!-- FORM ROW -->
                            <div class="form-row">
                                <!-- FORM ITEM -->
                                <div class="form-item">
                                    <!-- FORM INPUT -->
                                    <div class="form-input small">
                                        <input type="text" id="post-reply" name="post_reply">
                                    </div>
                                    <!-- /FORM INPUT -->
                                </div>
                                <!-- /FORM ITEM -->
                            </div>
                            <!-- /FORM ROW -->
                        </form>
                        <!-- /FORM -->
                    </div>
                    <!-- /POST COMMENT FORM -->
                </div>
            </div>

            <!-- photo post -->
            <div class="widget-box photo-post no-padding">
                <!-- WIDGET BOX SETTINGS -->
                <div class="widget-box-settings">
                    <!-- POST SETTINGS WRAP -->
                    <div class="post-settings-wrap" style="position: relative;">
                        <!-- POST SETTINGS -->
                        <div class="post-settings widget-box-post-settings-dropdown-trigger">
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
                                <i class="fa fa-save"></i>
                                <span class="d-flex flex-column">
                                    <span class="d-block heading">Save Post </span>
                                    <span class="d-block">Add this to your saved items</span>
                                </span>
                            </p>
                            <hr>
                            <!-- /SIMPLE DROPDOWN LINK -->
                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link d-flex flex-row">
                                <i class="fa fa-bell"></i>
                                <span class="d-flex flex-column">
                                    <span class="d-block heading">Turn on Notification for this post </span>
                                </span>
                            </p>
                            <!-- /SIMPLE DROPDOWN LINK -->
                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link d-flex flex-row">
                                <i class="fa fa-code"></i>
                                <span class="d-flex flex-column">
                                    <span class="d-block heading">Embed </span>
                                </span>
                            </p>
                            <hr>
                            <!-- /SIMPLE DROPDOWN LINK -->

                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link d-flex flex-row">
                                <i class="fa fa-times"></i>
                                <span class="d-flex flex-column">
                                    <span class="d-block heading">Hide Post </span>
                                    <span class="d-block">See fewer posts like this</span>
                                </span>
                            </p>
                            <!-- /SIMPLE DROPDOWN LINK -->
                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link d-flex flex-row">
                                <i class="fa fa-clock-o"></i>
                                <span class="d-flex flex-column">
                                    <span class="d-block heading">Snooze the XYZ </span>
                                    <span class="d-block">Temporarily stop seeing post</span>
                                </span>
                            </p>
                            <!-- /SIMPLE DROPDOWN LINK -->
                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link d-flex flex-row">
                                <i class="fa fa-times-circle"></i>
                                <span class="d-flex flex-column">
                                    <span class="d-block heading">Unfollow the XYZ </span>
                                    <span class="d-block">Stop seeing post from this page</span>
                                </span>
                            </p>
                            <!-- /SIMPLE DROPDOWN LINK -->

                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link d-flex flex-row">
                                <i class="fa fa-exclamation-circle"></i>
                                <span class="d-flex flex-column">
                                    <span class="d-block heading">Find support or report post </span>
                                    <span class="d-block">I'm concerned about this post</span>
                                </span>
                            </p>
                            <!-- /SIMPLE DROPDOWN LINK -->


                        </div>
                        <!-- /SIMPLE DROPDOWN -->
                    </div>
                    <!-- /POST SETTINGS WRAP -->
                </div>
                <!-- /WIDGET BOX SETTINGS -->

                <!-- WIDGET BOX STATUS -->
                <div class="widget-box-status">
                    <!-- WIDGET BOX STATUS CONTENT -->
                    <div class="widget-box-status-content">
                        <!-- USER STATUS -->
                        <div class="user-status">
                            <!-- USER STATUS AVATAR -->
                            <a class="user-status-avatar" href="profile-timeline.html">
                                <!-- USER AVATAR -->
                                <div class="user-avatar small no-outline">
                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <img src="{{ asset('img/profile/ww.jpeg') }}">
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->

                                    <!-- /USER AVATAR BADGE -->
                                </div>
                                <!-- /USER AVATAR -->
                            </a>
                            <!-- /USER STATUS AVATAR -->

                            <!-- USER STATUS TITLE -->
                            <p class="user-status-title medium"><a class="bold" href="profile-timeline.html">Sean
                                    David</a></p>
                            <!-- /USER STATUS TITLE -->

                            <!-- USER STATUS TEXT -->
                            <p class="user-status-text small">29 minutes ago</p>
                            <!-- /USER STATUS TEXT -->
                        </div>
                        <!-- /USER STATUS -->

                        <!-- WIDGET BOX STATUS TEXT -->
                        <p class="widget-box-status-text">Here's a sneak peek of the official box cover art for <a
                                href="#">Machine Wasteland II</a>! Remember that I'll be having a stream showing a
                            preview tommorrow
                            at 9PM PCT!</p>
                        <!-- /WIDGET BOX STATUS TEXT -->
                    </div>
                    <!-- /WIDGET BOX STATUS CONTENT -->

                    <!-- WIDGET BOX PICTURE -->
                    <figure class="widget-box-picture popup-picture-trigger">
                        <img src="{{ asset('img/cover/04.jpg') }}" alt="cover-04">
                    </figure>
                    <!-- /WIDGET BOX PICTURE -->

                    <!-- WIDGET BOX STATUS CONTENT -->
                    <div class="widget-box-status-content">

                        <!-- CONTENT ACTIONS -->
                        <div class="content-actions">
                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LIST -->
                                    <div class="meta-line-list reaction-item-list">
                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item" style="position: relative;">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                src="img/reaction/love.png" alt="reaction-love">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown"
                                                style="position: absolute; z-index: 9999; bottom: 38px; left: -16px; opacity: 0; visibility: hidden; transform: translate(0px, 20px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction"
                                                        src="img/reaction/love.png" alt="reaction-love"> <span
                                                        class="bold">Love</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Destroy Dex</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">The Green Goo</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Bearded Wonder</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Sandra Strange</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Matt Parker</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">James Murdock</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><span class="bold">and 14 more...</span>
                                                </p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->

                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item" style="position: relative;">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                src="img/reaction/wow.png" alt="reaction-wow">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown"
                                                style="position: absolute; z-index: 9999; bottom: 38px; left: -16px; opacity: 0; visibility: hidden; transform: translate(0px, 20px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction"
                                                        src="img/reaction/wow.png" alt="reaction-wow"> <span
                                                        class="bold">Wow</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Jett Spiegel</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->

                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item" style="position: relative;">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                src="img/reaction/like.png" alt="reaction-like">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown"
                                                style="position: absolute; z-index: 9999; bottom: 38px; left: -16px; opacity: 0; visibility: hidden; transform: translate(0px, 20px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction"
                                                        src="img/reaction/like.png" alt="reaction-like"> <span
                                                        class="bold">Like</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Neko Bebop</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Nick Grissom</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Sarah Diamond</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->
                                    </div>
                                    <!-- /META LINE LIST -->

                                    <!-- META LINE TEXT -->
                                    <p class="meta-line-text">24</p>
                                    <!-- /META LINE TEXT -->
                                </div>
                                <!-- /META LINE -->

                            </div>
                            <!-- /CONTENT ACTION -->

                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link">13 Comments</p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TEXT -->
                                    <p class="meta-line-text">0 Shares</p>
                                    <!-- /META LINE TEXT -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->
                        </div>
                        <!-- /CONTENT ACTIONS -->
                    </div>
                    <!-- /WIDGET BOX STATUS CONTENT -->
                </div>
                <!-- /WIDGET BOX STATUS -->

                <!-- POST OPTIONS -->
                <div class="post-options">
                    <!-- POST OPTION WRAP -->
                    <div class="post-option-wrap" style="position: relative;">
                        <!-- POST OPTION -->
                        <div class="post-option reaction-options-dropdown-trigger">
                            <!-- POST OPTION ICON -->
                            <svg class="post-option-icon icon-thumbs-up">
                                <use xlink:href="#svg-thumbs-up"></use>
                            </svg>
                            <!-- /POST OPTION ICON -->

                            <!-- POST OPTION TEXT -->
                            <p class="post-option-text">Like</p>
                            <!-- /POST OPTION TEXT -->
                        </div>
                        <!-- /POST OPTION -->

                        <!-- REACTION OPTIONS -->
                        <div class="reaction-options reaction-options-dropdown"
                            style="position: absolute; z-index: 9999; bottom: 54px; left: -16px; opacity: 0; visibility: hidden; transform: translate(0px, 20px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Like" style="position: relative;">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="img/reaction/like.png" alt="reaction-like">
                                <!-- /REACTION OPTION IMAGE -->
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -24px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Like</p>
                                </div>
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -24px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Like</p>
                                </div>
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Love" style="position: relative;">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="img/reaction/love.png" alt="reaction-love">
                                <!-- /REACTION OPTION IMAGE -->
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -26px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Love</p>
                                </div>
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -26px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Love</p>
                                </div>
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft d-none " data-title="Dislike"
                                style="position: relative;">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="img/reaction/dislike.png"
                                    alt="reaction-dislike">
                                <!-- /REACTION OPTION IMAGE -->
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -31.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Dislike</p>
                                </div>
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -31.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Dislike</p>
                                </div>
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Happy"
                                style="position: relative;">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="img/reaction/happy.png" alt="reaction-happy">
                                <!-- /REACTION OPTION IMAGE -->
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -30.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Happy</p>
                                </div>
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -30.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Happy</p>
                                </div>
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Funny"
                                style="position: relative;">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="img/reaction/funny.png" alt="reaction-funny">
                                <!-- /REACTION OPTION IMAGE -->
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -30px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Funny</p>
                                </div>
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -30px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Funny</p>
                                </div>
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Wow" style="position: relative;">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="img/reaction/wow.png" alt="reaction-wow">
                                <!-- /REACTION OPTION IMAGE -->
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -26px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Wow</p>
                                </div>
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -26px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Wow</p>
                                </div>
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Angry"
                                style="position: relative;">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="img/reaction/angry.png" alt="reaction-angry">
                                <!-- /REACTION OPTION IMAGE -->
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -29.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Angry</p>
                                </div>
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -29.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Angry</p>
                                </div>
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft d-none" data-title="Sad"
                                style="position: relative;">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="img/reaction/sad.png" alt="reaction-sad">
                                <!-- /REACTION OPTION IMAGE -->
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -23px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Sad</p>
                                </div>
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -23px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Sad</p>
                                </div>
                            </div>
                            <!-- /REACTION OPTION -->
                        </div>
                        <!-- /REACTION OPTIONS -->
                    </div>
                    <!-- /POST OPTION WRAP -->

                    <!-- POST OPTION -->
                    <div class="post-option comment-text">
                        <!-- POST OPTION ICON -->
                        <svg class="post-option-icon icon-comment">
                            <use xlink:href="#svg-comment"></use>
                        </svg>
                        <!-- /POST OPTION ICON -->

                        <!-- POST OPTION TEXT -->
                        <p class="post-option-text">Comment</p>
                        <!-- /POST OPTION TEXT -->
                    </div>
                    <!-- /POST OPTION -->

                    <!-- POST OPTION -->
                    <div class="post-option">
                        <!-- POST OPTION ICON -->
                        <svg class="post-option-icon icon-share">
                            <use xlink:href="#svg-share"></use>
                        </svg>
                        <!-- /POST OPTION ICON -->

                        <!-- POST OPTION TEXT -->
                        <p class="post-option-text">Share</p>
                        <!-- /POST OPTION TEXT -->
                    </div>
                    <!-- /POST OPTION -->
                </div>
                <!-- /POST OPTIONS -->

                <!-- POST COMMENT LIST -->
                <div class="post-comment-list d-none">
                    <!-- POST COMMENT -->
                    <div class="post-comment">
                        <!-- USER AVATAR -->
                        <a class="user-avatar small no-outline" href="profile-timeline.html">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <img src="{{ asset('img/avatar/05.jpg') }}">
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->

                            <!-- /USER AVATAR BADGE -->
                        </a>
                        <!-- /USER AVATAR -->

                        <!-- POST COMMENT TEXT -->
                        <p class="post-comment-text"><a class="post-comment-text-author"
                                href="profile-timeline.html">Neko
                                Bebop</a>It's always a pleasure to do this streams with you! If we have at least half
                            the fun than
                            last time it will be an incredible success!</p>
                        <!-- /POST COMMENT TEXT -->

                        <!-- CONTENT ACTIONS -->
                        <div class="content-actions">
                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LIST -->
                                    <div class="meta-line-list reaction-item-list small">
                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item" style="position: relative;">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                src="img/reaction/happy.png" alt="reaction-happy">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown"
                                                style="position: absolute; z-index: 9999; bottom: 38px; left: -16px; opacity: 0; visibility: hidden; transform: translate(0px, 20px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction"
                                                        src="img/reaction/happy.png" alt="reaction-happy"> <span
                                                        class="bold">Happy</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Marcus Jhonson</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->

                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item" style="position: relative;">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                src="img/reaction/like.png" alt="reaction-like">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown"
                                                style="position: absolute; z-index: 9999; bottom: 38px; left: -16px; opacity: 0; visibility: hidden; transform: translate(0px, 20px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction"
                                                        src="img/reaction/like.png" alt="reaction-like"> <span
                                                        class="bold">Like</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Neko Bebop</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Nick Grissom</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Sarah Diamond</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->
                                    </div>
                                    <!-- /META LINE LIST -->

                                    <!-- META LINE TEXT -->
                                    <p class="meta-line-text">4</p>
                                    <!-- /META LINE TEXT -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line" style="position: relative;">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light reaction-options-small-dropdown-trigger">Like</p>
                                    <!-- /META LINE LINK -->

                                    <!-- REACTION OPTIONS -->
                                    <div class="reaction-options small reaction-options-small-dropdown"
                                        style="position: absolute; z-index: 9999; bottom: 30px; left: -80px; opacity: 0; visibility: hidden; transform: translate(0px, 16px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Like"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/like.png"
                                                alt="reaction-like">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -24px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Like</p>
                                            </div>
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -4px; left: 50%; margin-left: 0px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Like</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Love"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/love.png"
                                                alt="reaction-love">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -26px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Love</p>
                                            </div>
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -4px; left: 50%; margin-left: 0px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Love</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft d-none " data-title="Dislike"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/dislike.png"
                                                alt="reaction-dislike">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -31.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Dislike</p>
                                            </div>
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -4px; left: 50%; margin-left: 0px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Dislike</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Happy"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/happy.png"
                                                alt="reaction-happy">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -30.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Happy</p>
                                            </div>
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -4px; left: 50%; margin-left: 0px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Happy</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Funny"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/funny.png"
                                                alt="reaction-funny">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -30px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Funny</p>
                                            </div>
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -4px; left: 50%; margin-left: 0px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Funny</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Wow"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/wow.png"
                                                alt="reaction-wow">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -26px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Wow</p>
                                            </div>
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -4px; left: 50%; margin-left: 0px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Wow</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Angry"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/angry.png"
                                                alt="reaction-angry">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -29.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Angry</p>
                                            </div>
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -4px; left: 50%; margin-left: 0px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Angry</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft d-none" data-title="Sad"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/sad.png"
                                                alt="reaction-sad">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -23px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Sad</p>
                                            </div>
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -4px; left: 50%; margin-left: 0px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Sad</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->
                                    </div>
                                    <!-- /REACTION OPTIONS -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light">Reply</p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TIMESTAMP -->
                                    <p class="meta-line-timestamp">15 minutes ago</p>
                                    <!-- /META LINE TIMESTAMP -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line settings">
                                    <!-- POST SETTINGS WRAP -->
                                    <div class="post-settings-wrap" style="position: relative;">
                                        <!-- POST SETTINGS -->
                                        <div class="post-settings post-settings-dropdown-trigger">
                                            <!-- POST SETTINGS ICON -->
                                            <svg class="post-settings-icon icon-more-dots">
                                                <use xlink:href="#svg-more-dots"></use>
                                            </svg>
                                            <!-- /POST SETTINGS ICON -->
                                        </div>
                                        <!-- /POST SETTINGS -->

                                        <!-- SIMPLE DROPDOWN -->
                                        <div class="simple-dropdown post-settings-dropdown"
                                            style="position: absolute; z-index: 9999; bottom: 30px; right: 0px; opacity: 0; visibility: hidden; transform: translate(0px, 16px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                            <!-- SIMPLE DROPDOWN LINK -->
                                            <p class="simple-dropdown-link">Report Post</p>
                                            <!-- /SIMPLE DROPDOWN LINK -->
                                        </div>
                                        <!-- /SIMPLE DROPDOWN -->
                                    </div>
                                    <!-- /POST SETTINGS WRAP -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->
                        </div>
                        <!-- /CONTENT ACTIONS -->
                    </div>
                    <!-- /POST COMMENT -->

                    <!-- POST COMMENT -->
                    <div class="post-comment unread reply-2">
                        <!-- USER AVATAR -->
                        <a class="user-avatar small no-outline" href="profile-timeline.html">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <img src="{{ asset('img/avatar/03.jpg') }}">
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->

                            <!-- /USER AVATAR BADGE -->
                        </a>
                        <!-- /USER AVATAR -->

                        <!-- POST COMMENT TEXT -->
                        <p class="post-comment-text"><a class="post-comment-text-author"
                                href="profile-timeline.html">Nick
                                Grissom</a>I wouldn't miss it for anything!! Love both streams!</p>
                        <!-- /POST COMMENT TEXT -->

                        <!-- CONTENT ACTIONS -->
                        <div class="content-actions">
                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LIST -->
                                    <div class="meta-line-list reaction-item-list small">
                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item" style="position: relative;">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                src="img/reaction/like.png" alt="reaction-like">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown"
                                                style="position: absolute; z-index: 9999; bottom: 38px; left: -16px; opacity: 0; visibility: hidden; transform: translate(0px, 20px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction"
                                                        src="img/reaction/like.png" alt="reaction-like"> <span
                                                        class="bold">Like</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Neko Bebop</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->
                                    </div>
                                    <!-- /META LINE LIST -->

                                    <!-- META LINE TEXT -->
                                    <p class="meta-line-text">1</p>
                                    <!-- /META LINE TEXT -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line" style="position: relative;">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light reaction-options-small-dropdown-trigger">Like</p>
                                    <!-- /META LINE LINK -->

                                    <!-- REACTION OPTIONS -->
                                    <div class="reaction-options small reaction-options-small-dropdown"
                                        style="position: absolute; z-index: 9999; bottom: 30px; left: -80px; opacity: 0; visibility: hidden; transform: translate(0px, 16px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Like"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/like.png"
                                                alt="reaction-like">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -24px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Like</p>
                                            </div>
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -4px; left: 50%; margin-left: 0px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Like</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Love"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/love.png"
                                                alt="reaction-love">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -26px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Love</p>
                                            </div>
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -4px; left: 50%; margin-left: 0px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Love</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft d-none " data-title="Dislike"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/dislike.png"
                                                alt="reaction-dislike">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -31.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Dislike</p>
                                            </div>
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -4px; left: 50%; margin-left: 0px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Dislike</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Happy"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/happy.png"
                                                alt="reaction-happy">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -30.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Happy</p>
                                            </div>
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -4px; left: 50%; margin-left: 0px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Happy</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Funny"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/funny.png"
                                                alt="reaction-funny">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -30px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Funny</p>
                                            </div>
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -4px; left: 50%; margin-left: 0px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Funny</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Wow"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/wow.png"
                                                alt="reaction-wow">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -26px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Wow</p>
                                            </div>
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -4px; left: 50%; margin-left: 0px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Wow</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Angry"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/angry.png"
                                                alt="reaction-angry">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -29.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Angry</p>
                                            </div>
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -4px; left: 50%; margin-left: 0px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Angry</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft d-none" data-title="Sad"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/sad.png"
                                                alt="reaction-sad">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -23px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Sad</p>
                                            </div>
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -4px; left: 50%; margin-left: 0px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Sad</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->
                                    </div>
                                    <!-- /REACTION OPTIONS -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light">Reply</p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TIMESTAMP -->
                                    <p class="meta-line-timestamp">2 minutes ago</p>
                                    <!-- /META LINE TIMESTAMP -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line settings">
                                    <!-- POST SETTINGS WRAP -->
                                    <div class="post-settings-wrap" style="position: relative;">
                                        <!-- POST SETTINGS -->
                                        <div class="post-settings post-settings-dropdown-trigger">
                                            <!-- POST SETTINGS ICON -->
                                            <svg class="post-settings-icon icon-more-dots">
                                                <use xlink:href="#svg-more-dots"></use>
                                            </svg>
                                            <!-- /POST SETTINGS ICON -->
                                        </div>
                                        <!-- /POST SETTINGS -->

                                        <!-- SIMPLE DROPDOWN -->
                                        <div class="simple-dropdown post-settings-dropdown"
                                            style="position: absolute; z-index: 9999; bottom: 30px; right: 0px; opacity: 0; visibility: hidden; transform: translate(0px, 16px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                            <!-- SIMPLE DROPDOWN LINK -->
                                            <p class="simple-dropdown-link">Report Post</p>
                                            <!-- /SIMPLE DROPDOWN LINK -->
                                        </div>
                                        <!-- /SIMPLE DROPDOWN -->
                                    </div>
                                    <!-- /POST SETTINGS WRAP -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->
                        </div>
                        <!-- /CONTENT ACTIONS -->
                    </div>
                    <!-- /POST COMMENT -->

                    <!-- POST COMMENT HEADING -->
                    <p class="post-comment-heading">Load More Comments <span class="highlighted">9+</span></p>
                    <!-- /POST COMMENT HEADING -->

                    <!-- POST COMMENT FORM -->
                    <div class="post-comment-form">
                        <!-- USER AVATAR -->
                        <div class="user-avatar small no-outline">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <img src="{{ asset('img/profile/ww.jpeg') }}">
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->

                            <!-- /USER AVATAR BADGE -->
                        </div>
                        <!-- /USER AVATAR -->

                        <!-- FORM -->
                        <form class="form">
                            <!-- FORM ROW -->
                            <div class="form-row">
                                <!-- FORM ITEM -->
                                <div class="form-item">
                                    <!-- FORM INPUT -->
                                    <div class="form-input small">
                                        <input type="text" id="post-reply" name="post_reply">
                                    </div>
                                    <!-- /FORM INPUT -->
                                </div>
                                <!-- /FORM ITEM -->
                            </div>
                            <!-- /FORM ROW -->
                        </form>
                        <!-- /FORM -->
                    </div>
                    <!-- /POST COMMENT FORM -->
                </div>
                <!-- /POST COMMENT LIST -->
            </div>

            <!-- video box -->
            <div class="widget-box video-post mt-4 no-padding">
                <!-- WIDGET BOX SETTINGS -->
                <div class="widget-box-settings">
                    <!-- POST SETTINGS WRAP -->
                    <div class="post-settings-wrap" style="position: relative;">
                        <!-- POST SETTINGS -->
                        <div class="post-settings widget-box-post-settings-dropdown-trigger">
                            <!-- POST SETTINGS ICON -->
                            <svg class="post-settings-icon icon-more-dots">
                                <use xlink:href="#svg-more-dots"></use>
                            </svg>
                            <!-- /POST SETTINGS ICON -->
                        </div>
                        <!-- /POST SETTINGS -->

                        <!-- SIMPLE DROPDOWN -->
                        <div class="simple-dropdown widget-box-post-settings-dropdown"
                            style="position: absolute; z-index: 9999; top: 30px; right: 9px; opacity: 0; visibility: hidden; transform: translate(0px, -20px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link d-flex flex-row">
                                <i class="fa fa-save"></i>
                                <span class="d-flex flex-column">
                                    <span class="d-block heading">Save Post </span>
                                    <span class="d-block">Add this to your saved items</span>
                                </span>
                            </p>
                            <hr />
                            <!-- /SIMPLE DROPDOWN LINK -->
                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link d-flex flex-row">
                                <i class="fa fa-bell"></i>
                                <span class="d-flex flex-column">
                                    <span class="d-block heading">Turn on Notification for this post </span>
                                </span>
                            </p>
                            <!-- /SIMPLE DROPDOWN LINK -->
                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link d-flex flex-row">
                                <i class="fa fa-code"></i>
                                <span class="d-flex flex-column">
                                    <span class="d-block heading">Embed </span>
                                </span>
                            </p>
                            <hr />
                            <!-- /SIMPLE DROPDOWN LINK -->

                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link d-flex flex-row">
                                <i class="fa fa-times"></i>
                                <span class="d-flex flex-column">
                                    <span class="d-block heading">Hide Post </span>
                                    <span class="d-block">See fewer posts like this</span>
                                </span>
                            </p>
                            <!-- /SIMPLE DROPDOWN LINK -->
                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link d-flex flex-row">
                                <i class="fa fa-clock-o"></i>
                                <span class="d-flex flex-column">
                                    <span class="d-block heading">Snooze the XYZ </span>
                                    <span class="d-block">Temporarily stop seeing post</span>
                                </span>
                            </p>
                            <!-- /SIMPLE DROPDOWN LINK -->
                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link d-flex flex-row">
                                <i class="fa fa-times-circle"></i>
                                <span class="d-flex flex-column">
                                    <span class="d-block heading">Unfollow the XYZ </span>
                                    <span class="d-block">Stop seeing post from this page</span>
                                </span>
                            </p>
                            <!-- /SIMPLE DROPDOWN LINK -->

                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link d-flex flex-row">
                                <i class="fa fa-exclamation-circle"></i>
                                <span class="d-flex flex-column">
                                    <span class="d-block heading">Find support or report post </span>
                                    <span class="d-block">I'm concerned about this post</span>
                                </span>
                            </p>
                            <!-- /SIMPLE DROPDOWN LINK -->


                        </div>
                        <!-- /SIMPLE DROPDOWN -->
                    </div>
                    <!-- /POST SETTINGS WRAP -->
                </div>
                <!-- /WIDGET BOX SETTINGS -->

                <!-- WIDGET BOX STATUS -->
                <div class="widget-box-status">
                    <!-- WIDGET BOX STATUS CONTENT -->
                    <div class="widget-box-status-content">
                        <!-- USER STATUS -->
                        <div class="user-status">
                            <!-- USER STATUS AVATAR -->
                            <a class="user-status-avatar" href="profile-timeline.html">
                                <!-- USER AVATAR -->
                                <div class="user-avatar small no-outline">
                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <img src="{{ asset('img/profile/ww.jpeg') }}">
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR CONTENT -->

                                    <!-- /USER AVATAR BADGE -->
                                </div>
                                <!-- /USER AVATAR -->
                            </a>
                            <!-- /USER STATUS AVATAR -->

                            <!-- USER STATUS TITLE -->
                            <p class="user-status-title medium"><a class="bold" href="profile-timeline.html">Sean
                                    David</a></p>
                            <!-- /USER STATUS TITLE -->

                            <!-- USER STATUS TEXT -->
                            <p class="user-status-text small">29 minutes ago</p>
                            <!-- /USER STATUS TEXT -->
                        </div>
                        <!-- /USER STATUS -->

                        <!-- WIDGET BOX STATUS TEXT -->
                        <p class="widget-box-status-text">Here's a sneak peek of the official box cover art for <a
                                href="#">Machine Wasteland II</a>! Remember that I'll be having a stream showing a
                            preview tommorrow
                            at 9PM PCT!</p>
                        <!-- /WIDGET BOX STATUS TEXT -->
                    </div>
                    <!-- /WIDGET BOX STATUS CONTENT -->

                    <!-- WIDGET BOX PICTURE -->
                    <video width="400" controls>
                        <source src="img/video.mp4" type="video/mp4">
                        <!-- <source src="mov_bbb.ogg" type="vi/deo/ogg"> -->
                        Your browser does not support HTML video.
                    </video>
                    <!-- /WIDGET BOX PICTURE -->

                    <!-- WIDGET BOX STATUS CONTENT -->
                    <div class="widget-box-status-content">

                        <!-- CONTENT ACTIONS -->
                        <div class="content-actions">
                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LIST -->
                                    <div class="meta-line-list reaction-item-list">
                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item" style="position: relative;">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                src="img/reaction/love.png" alt="reaction-love">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown"
                                                style="position: absolute; z-index: 9999; bottom: 38px; left: -16px; opacity: 0; visibility: hidden; transform: translate(0px, 20px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction"
                                                        src="img/reaction/love.png" alt="reaction-love"> <span
                                                        class="bold">Love</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Destroy Dex</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">The Green Goo</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Bearded Wonder</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Sandra Strange</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Matt Parker</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">James Murdock</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><span class="bold">and 14 more...</span>
                                                </p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->

                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item" style="position: relative;">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                src="img/reaction/wow.png" alt="reaction-wow">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown"
                                                style="position: absolute; z-index: 9999; bottom: 38px; left: -16px; opacity: 0; visibility: hidden; transform: translate(0px, 20px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction"
                                                        src="img/reaction/wow.png" alt="reaction-wow"> <span
                                                        class="bold">Wow</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Jett Spiegel</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->

                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item" style="position: relative;">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                src="img/reaction/like.png" alt="reaction-like">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown"
                                                style="position: absolute; z-index: 9999; bottom: 38px; left: -16px; opacity: 0; visibility: hidden; transform: translate(0px, 20px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction"
                                                        src="img/reaction/like.png" alt="reaction-like"> <span
                                                        class="bold">Like</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Neko Bebop</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Nick Grissom</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Sarah Diamond</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->
                                    </div>
                                    <!-- /META LINE LIST -->

                                    <!-- META LINE TEXT -->
                                    <p class="meta-line-text">24</p>
                                    <!-- /META LINE TEXT -->
                                </div>
                                <!-- /META LINE -->

                            </div>
                            <!-- /CONTENT ACTION -->

                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link">13 Comments</p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TEXT -->
                                    <p class="meta-line-text">0 Shares</p>
                                    <!-- /META LINE TEXT -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->
                        </div>
                        <!-- /CONTENT ACTIONS -->
                    </div>
                    <!-- /WIDGET BOX STATUS CONTENT -->
                </div>
                <!-- /WIDGET BOX STATUS -->

                <!-- POST OPTIONS -->
                <div class="post-options">
                    <!-- POST OPTION WRAP -->
                    <div class="post-option-wrap" style="position: relative;">
                        <!-- POST OPTION -->
                        <div class="post-option reaction-options-dropdown-trigger">
                            <!-- POST OPTION ICON -->
                            <svg class="post-option-icon icon-thumbs-up">
                                <use xlink:href="#svg-thumbs-up"></use>
                            </svg>
                            <!-- /POST OPTION ICON -->

                            <!-- POST OPTION TEXT -->
                            <p class="post-option-text">Like</p>
                            <!-- /POST OPTION TEXT -->
                        </div>
                        <!-- /POST OPTION -->

                        <!-- REACTION OPTIONS -->
                        <div class="reaction-options reaction-options-dropdown"
                            style="position: absolute; z-index: 9999; bottom: 54px; left: -16px; opacity: 0; visibility: hidden; transform: translate(0px, 20px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Like" style="position: relative;">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="img/reaction/like.png" alt="reaction-like">
                                <!-- /REACTION OPTION IMAGE -->
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -24px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Like</p>
                                </div>
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Love" style="position: relative;">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="img/reaction/love.png" alt="reaction-love">
                                <!-- /REACTION OPTION IMAGE -->
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -26px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Love</p>
                                </div>
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft d-none " data-title="Dislike"
                                style="position: relative;">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="img/reaction/dislike.png"
                                    alt="reaction-dislike">
                                <!-- /REACTION OPTION IMAGE -->
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -31.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Dislike</p>
                                </div>
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Happy"
                                style="position: relative;">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="img/reaction/happy.png" alt="reaction-happy">
                                <!-- /REACTION OPTION IMAGE -->
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -30.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Happy</p>
                                </div>
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Funny"
                                style="position: relative;">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="img/reaction/funny.png" alt="reaction-funny">
                                <!-- /REACTION OPTION IMAGE -->
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -30px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Funny</p>
                                </div>
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Wow" style="position: relative;">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="img/reaction/wow.png" alt="reaction-wow">
                                <!-- /REACTION OPTION IMAGE -->
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -26px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Wow</p>
                                </div>
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft" data-title="Angry"
                                style="position: relative;">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="img/reaction/angry.png" alt="reaction-angry">
                                <!-- /REACTION OPTION IMAGE -->
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -29.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Angry</p>
                                </div>
                            </div>
                            <!-- /REACTION OPTION -->

                            <!-- REACTION OPTION -->
                            <div class="reaction-option text-tooltip-tft d-none" data-title="Sad"
                                style="position: relative;">
                                <!-- REACTION OPTION IMAGE -->
                                <img class="reaction-option-image" src="img/reaction/sad.png" alt="reaction-sad">
                                <!-- /REACTION OPTION IMAGE -->
                                <div class="xm-tooltip"
                                    style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -23px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                    <p class="xm-tooltip-text">Sad</p>
                                </div>
                            </div>
                            <!-- /REACTION OPTION -->
                        </div>
                        <!-- /REACTION OPTIONS -->
                    </div>
                    <!-- /POST OPTION WRAP -->

                    <!-- POST OPTION -->
                    <div class="post-option comment-text">
                        <!-- POST OPTION ICON -->
                        <svg class="post-option-icon icon-comment">
                            <use xlink:href="#svg-comment"></use>
                        </svg>
                        <!-- /POST OPTION ICON -->

                        <!-- POST OPTION TEXT -->
                        <p class="post-option-text">Comment</p>
                        <!-- /POST OPTION TEXT -->
                    </div>
                    <!-- /POST OPTION -->

                    <!-- POST OPTION -->
                    <div class="post-option">
                        <!-- POST OPTION ICON -->
                        <svg class="post-option-icon icon-share">
                            <use xlink:href="#svg-share"></use>
                        </svg>
                        <!-- /POST OPTION ICON -->

                        <!-- POST OPTION TEXT -->
                        <p class="post-option-text">Share</p>
                        <!-- /POST OPTION TEXT -->
                    </div>
                    <!-- /POST OPTION -->
                </div>
                <!-- /POST OPTIONS -->

                <!-- POST COMMENT LIST -->
                <div class="post-comment-list d-none">
                    <!-- POST COMMENT -->
                    <div class="post-comment">
                        <!-- USER AVATAR -->
                        <a class="user-avatar small no-outline" href="profile-timeline.html">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <img src="{{ asset('img/avatar/05.jpg') }}">
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->

                            <!-- /USER AVATAR BADGE -->
                        </a>
                        <!-- /USER AVATAR -->

                        <!-- POST COMMENT TEXT -->
                        <p class="post-comment-text"><a class="post-comment-text-author"
                                href="profile-timeline.html">Neko
                                Bebop</a>It's always a pleasure to do this streams with you! If we have at least half
                            the fun than
                            last time it will be an incredible success!</p>
                        <!-- /POST COMMENT TEXT -->

                        <!-- CONTENT ACTIONS -->
                        <div class="content-actions">
                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LIST -->
                                    <div class="meta-line-list reaction-item-list small">
                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item" style="position: relative;">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                src="img/reaction/happy.png" alt="reaction-happy">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown"
                                                style="position: absolute; z-index: 9999; bottom: 38px; left: -16px; opacity: 0; visibility: hidden; transform: translate(0px, 20px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction"
                                                        src="img/reaction/happy.png" alt="reaction-happy"> <span
                                                        class="bold">Happy</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Marcus Jhonson</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->

                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item" style="position: relative;">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                src="img/reaction/like.png" alt="reaction-like">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown"
                                                style="position: absolute; z-index: 9999; bottom: 38px; left: -16px; opacity: 0; visibility: hidden; transform: translate(0px, 20px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction"
                                                        src="img/reaction/like.png" alt="reaction-like"> <span
                                                        class="bold">Like</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Neko Bebop</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Nick Grissom</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Sarah Diamond</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->
                                    </div>
                                    <!-- /META LINE LIST -->

                                    <!-- META LINE TEXT -->
                                    <p class="meta-line-text">4</p>
                                    <!-- /META LINE TEXT -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line" style="position: relative;">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light reaction-options-small-dropdown-trigger">Like</p>
                                    <!-- /META LINE LINK -->

                                    <!-- REACTION OPTIONS -->
                                    <div class="reaction-options small reaction-options-small-dropdown"
                                        style="position: absolute; z-index: 9999; bottom: 30px; left: -80px; opacity: 0; visibility: hidden; transform: translate(0px, 16px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Like"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/like.png"
                                                alt="reaction-like">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -24px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Like</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Love"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/love.png"
                                                alt="reaction-love">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -26px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Love</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft d-none " data-title="Dislike"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/dislike.png"
                                                alt="reaction-dislike">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -31.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Dislike</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Happy"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/happy.png"
                                                alt="reaction-happy">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -30.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Happy</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Funny"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/funny.png"
                                                alt="reaction-funny">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -30px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Funny</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Wow"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/wow.png"
                                                alt="reaction-wow">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -26px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Wow</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Angry"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/angry.png"
                                                alt="reaction-angry">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -29.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Angry</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft d-none" data-title="Sad"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/sad.png"
                                                alt="reaction-sad">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -23px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Sad</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->
                                    </div>
                                    <!-- /REACTION OPTIONS -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light">Reply</p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TIMESTAMP -->
                                    <p class="meta-line-timestamp">15 minutes ago</p>
                                    <!-- /META LINE TIMESTAMP -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line settings">
                                    <!-- POST SETTINGS WRAP -->
                                    <div class="post-settings-wrap" style="position: relative;">
                                        <!-- POST SETTINGS -->
                                        <div class="post-settings post-settings-dropdown-trigger">
                                            <!-- POST SETTINGS ICON -->
                                            <svg class="post-settings-icon icon-more-dots">
                                                <use xlink:href="#svg-more-dots"></use>
                                            </svg>
                                            <!-- /POST SETTINGS ICON -->
                                        </div>
                                        <!-- /POST SETTINGS -->

                                        <!-- SIMPLE DROPDOWN -->
                                        <div class="simple-dropdown post-settings-dropdown"
                                            style="position: absolute; z-index: 9999; bottom: 30px; right: 0px; opacity: 0; visibility: hidden; transform: translate(0px, 16px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                            <!-- SIMPLE DROPDOWN LINK -->
                                            <p class="simple-dropdown-link">Report Post</p>
                                            <!-- /SIMPLE DROPDOWN LINK -->
                                        </div>
                                        <!-- /SIMPLE DROPDOWN -->
                                    </div>
                                    <!-- /POST SETTINGS WRAP -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->
                        </div>
                        <!-- /CONTENT ACTIONS -->
                    </div>
                    <!-- /POST COMMENT -->

                    <!-- POST COMMENT -->
                    <div class="post-comment unread reply-2">
                        <!-- USER AVATAR -->
                        <a class="user-avatar small no-outline" href="profile-timeline.html">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <img src="{{ asset('img/avatar/03.jpg') }}">
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->

                            <!-- /USER AVATAR BADGE -->
                        </a>
                        <!-- /USER AVATAR -->

                        <!-- POST COMMENT TEXT -->
                        <p class="post-comment-text"><a class="post-comment-text-author"
                                href="profile-timeline.html">Nick
                                Grissom</a>I wouldn't miss it for anything!! Love both streams!</p>
                        <!-- /POST COMMENT TEXT -->

                        <!-- CONTENT ACTIONS -->
                        <div class="content-actions">
                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LIST -->
                                    <div class="meta-line-list reaction-item-list small">
                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item" style="position: relative;">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger"
                                                src="img/reaction/like.png" alt="reaction-like">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown"
                                                style="position: absolute; z-index: 9999; bottom: 38px; left: -16px; opacity: 0; visibility: hidden; transform: translate(0px, 20px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction"
                                                        src="img/reaction/like.png" alt="reaction-like"> <span
                                                        class="bold">Like</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Neko Bebop</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->
                                    </div>
                                    <!-- /META LINE LIST -->

                                    <!-- META LINE TEXT -->
                                    <p class="meta-line-text">1</p>
                                    <!-- /META LINE TEXT -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line" style="position: relative;">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light reaction-options-small-dropdown-trigger">Like</p>
                                    <!-- /META LINE LINK -->

                                    <!-- REACTION OPTIONS -->
                                    <div class="reaction-options small reaction-options-small-dropdown"
                                        style="position: absolute; z-index: 9999; bottom: 30px; left: -80px; opacity: 0; visibility: hidden; transform: translate(0px, 16px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Like"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/like.png"
                                                alt="reaction-like">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -24px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Like</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Love"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/love.png"
                                                alt="reaction-love">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -26px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Love</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft d-none " data-title="Dislike"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/dislike.png"
                                                alt="reaction-dislike">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -31.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Dislike</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Happy"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/happy.png"
                                                alt="reaction-happy">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -30.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Happy</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Funny"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/funny.png"
                                                alt="reaction-funny">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -30px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Funny</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Wow"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/wow.png"
                                                alt="reaction-wow">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -26px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Wow</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft" data-title="Angry"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/angry.png"
                                                alt="reaction-angry">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -29.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Angry</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->

                                        <!-- REACTION OPTION -->
                                        <div class="reaction-option text-tooltip-tft d-none" data-title="Sad"
                                            style="position: relative;">
                                            <!-- REACTION OPTION IMAGE -->
                                            <img class="reaction-option-image" src="img/reaction/sad.png"
                                                alt="reaction-sad">
                                            <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip"
                                                style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -23px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                                <p class="xm-tooltip-text">Sad</p>
                                            </div>
                                        </div>
                                        <!-- /REACTION OPTION -->
                                    </div>
                                    <!-- /REACTION OPTIONS -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light">Reply</p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TIMESTAMP -->
                                    <p class="meta-line-timestamp">2 minutes ago</p>
                                    <!-- /META LINE TIMESTAMP -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line settings">
                                    <!-- POST SETTINGS WRAP -->
                                    <div class="post-settings-wrap" style="position: relative;">
                                        <!-- POST SETTINGS -->
                                        <div class="post-settings post-settings-dropdown-trigger">
                                            <!-- POST SETTINGS ICON -->
                                            <svg class="post-settings-icon icon-more-dots">
                                                <use xlink:href="#svg-more-dots"></use>
                                            </svg>
                                            <!-- /POST SETTINGS ICON -->
                                        </div>
                                        <!-- /POST SETTINGS -->

                                        <!-- SIMPLE DROPDOWN -->
                                        <div class="simple-dropdown post-settings-dropdown"
                                            style="position: absolute; z-index: 9999; bottom: 30px; right: 0px; opacity: 0; visibility: hidden; transform: translate(0px, 16px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                            <!-- SIMPLE DROPDOWN LINK -->
                                            <p class="simple-dropdown-link">Report Post</p>
                                            <!-- /SIMPLE DROPDOWN LINK -->
                                        </div>
                                        <!-- /SIMPLE DROPDOWN -->
                                    </div>
                                    <!-- /POST SETTINGS WRAP -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->
                        </div>
                        <!-- /CONTENT ACTIONS -->
                    </div>
                    <!-- /POST COMMENT -->

                    <!-- POST COMMENT HEADING -->
                    <p class="post-comment-heading">Load More Comments <span class="highlighted">9+</span></p>
                    <!-- /POST COMMENT HEADING -->

                    <!-- POST COMMENT FORM -->
                    <div class="post-comment-form">
                        <!-- USER AVATAR -->
                        <div class="user-avatar small no-outline">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <img src="{{ asset('img/profile/ww.jpeg') }}">
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->

                            <!-- /USER AVATAR BADGE -->
                        </div>
                        <!-- /USER AVATAR -->

                        <!-- FORM -->
                        <form class="form">
                            <!-- FORM ROW -->
                            <div class="form-row">
                                <!-- FORM ITEM -->
                                <div class="form-item">
                                    <!-- FORM INPUT -->
                                    <div class="form-input small">
                                        <input type="text" id="post-reply" name="post_reply">
                                    </div>
                                    <!-- /FORM INPUT -->
                                </div>
                                <!-- /FORM ITEM -->
                            </div>
                            <!-- /FORM ROW -->
                        </form>
                        <!-- /FORM -->
                    </div>
                    <!-- /POST COMMENT FORM -->
                </div>
                <!-- /POST COMMENT LIST -->
            </div>
            <!-- /video box -->

            <!-- loader -->
            <div class="loader-bars mt-5 mb-5">
                <div class="loader-bar"></div>
                <div class="loader-bar"></div>
                <div class="loader-bar"></div>
                <div class="loader-bar"></div>
                <div class="loader-bar"></div>
                <div class="loader-bar"></div>
                <div class="loader-bar"></div>
                <div class="loader-bar"></div>
            </div>
        </div>
        <div class="col-lg-4 ">
            <!-- Moments -->
            @include('components.moments')
            <!-- /Moments -->

            <!-- Most Watched Videos -->
            <div class="card news-card mt-3 ">
                <div class="card-top d-flex align-items-center justify-content-between p-2"
                    style="background: white;margin-bottom: 10px;">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0 ml-2 text-dark">Most Watched</h5>
                    </div>
                    <div>
                        <!-- <a href="#" class="setting-icon">
                                  <i class="fa fa-cog"></i>
                              </a>  -->
                    </div>
                </div>
                <div class="most-viewed-list-scroll">
                    <div class="most-watched-post">
                        <div class="row w-100">
                            <div class="col-md-12">
                                <h6 class="p-3">
                                    Most watched videos not here!
                                </h6>
                            </div>
                            <hr style="width: 100%;left: 15px;position: relative;">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Most Watched Videos -->

            <!-- Market Classified -->
            <div class="card news-card">
                <div class="card-top d-flex align-items-center justify-content-between p-2">
                    <div class="d-flex align-items-center">
                        <!-- <i class="fa fa-search"></i>  -->
                        <h5 class="mb-0 ml-2 text-dark">Market Classifieds</h5>
                    </div>
                </div>
                <div class="container classifieds-parent">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="classifieds">
                                <a href="" class="cross">
                                    <img src="http://fyrestream.com//content/uploads/photos/2021/01/sngine_f1571491b96cb34425af4e690e8caf05.jpg"
                                        class="width-50" alt="mobsm">
                                    <div class="price-div">
                                        <p style="background: #00000036; padding: 5px;"> $25.00 </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="classifieds">
                                <a href="" class="cross">
                                    <img src="http://fyrestream.com//content/uploads/photos/2021/01/sngine_173c40cb3197d45e0b1d191dadb44b87.jpg"
                                        class="width-50" alt="mobsm">
                                    <div class="price-div">
                                        <p style="background: #00000036;padding: 5px;"> $10.00</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Market Classified -->

            <!-- Add Friend -->
            <div class="card">
                <div class="card-body with-list" style="padding-top: 0px">
                    <ul class="custom-friends" style=" overflow: hidden">
                        @if(!empty(friendSuggestion()))
                            @forelse(friendSuggestion() as $suggestion)
                                <li class="feeds-item" style="position: relative" id="friendRequestBox8">
                                    <i class="fa fa-times-circle follow-close-btn" data-uidremove="8"></i>
                                    <div class="data-container small">
                                        <a class="data-avatar" href="http://fyrestream.com//danish404">
                                            <img src="{{asset($suggestion->image)}}"
                                                alt="Mujahid Sra">
                                        </a>
                                        <div class="data-content">
                                            <div class="float-right">
                                                <button type="button" class="btn btn-sm btn-success js_friend-add" data-uid="8" onclick="friendRequest({{$suggestion->id}})">
                                                    <i class="fa fa-user-plus mr5"></i>
                                                    Add
                                                </button>
                                            </div>
                                            <div class="mt5">
                                                <span class="name js_user-popover" data-uid="8">
                                                    <a href="javascript:;">{{$suggestion->name}}</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <center>No Request found</center>
                            @endforelse
                        @endif
                        <li class="feeds-item" style="text-align: center">To search more people click here <br>
                            <a style="color: #007bff;" href="http://fyrestream.com//people">See More</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Add Friend -->

            <!-- Suggested Groups -->
            <div class="card mt-3" style="background: #f8f8fb; border: none;">
                <div class="card-header bg-transparent">
                    <h5 class="mb-0 ml-2 text-dark suggested-group-custom">Suggested Groups</h5>
                </div>
                <div class="card-body with-list">
                    <ul>
                        <li class="feeds-item">
                            <div class="data-container ">
                                <a class="data-avatar" href="http://fyrestream.com//groups/npmjs">
                                    <img src="http://fyrestream.com//content/uploads/photos/2020/11/sngine_6f522218992bc5e2fd8b6b6631bc29ab.jpg"
                                        alt="pakistan ">
                                </a>
                                <div class="data-content">
                                    <div style="    margin-left: 2em;">
                                        <span class="name">
                                            <a href="http://fyrestream.com//groups/npmjs">pakistan </a>
                                        </span>
                                        <div>1 Members</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <button style="margin-bottom: 15px;" class="see-more w-100">
                        <a href="http://fyrestream.com//groups"> See More </a>
                    </button>
                </div>
            </div>
            <!-- /Suggested Groups -->

            <!-- Suggested Events -->
            <div class="card mt-3 mb-5 suggest-events">
                <div class="card-header bg-transparent">
                    <div class="float-right">
                        <small><a href="http://fyrestream.com//events">See All</a></small>
                    </div>
                    <h5 class="mb-0 ml-2 text-dark">Suggested Events</h5>
                </div>
                <div class="card-body with-list">
                    <ul>
                        <li class="feeds-item">
                            <div class="data-container small">
                                <a class="data-avatar" href="http://fyrestream.com//events/1">
                                    <img src="http://fyrestream.com//content/themes/default/images/blank_event.jpg"
                                        alt="hhh">
                                </a>
                                <div class="data-content">
                                    <div class="float-right">
                                        <button type="button" class="btn btn-sm btn-primary js_interest-event"
                                            data-id="1">
                                            <i class="fa fa-star mr5"></i>
                                            Interested
                                        </button>
                                    </div>
                                    <div>
                                        <span class="name">
                                            <a href="http://fyrestream.com//events/1">hhh</a>
                                        </span>
                                        <div>2 Interested</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="feeds-item">
                            <div class="data-container small">
                                <a class="data-avatar" href="http://fyrestream.com//events/2">
                                    <img src="http://fyrestream.com//content/themes/default/images/blank_event.jpg"
                                        alt="abc">
                                </a>
                                <div class="data-content">
                                    <div class="float-right">
                                        <button type="button" class="btn btn-sm btn-primary js_interest-event"
                                            data-id="2">
                                            <i class="fa fa-star mr5"></i>
                                            Interested
                                        </button>
                                    </div>
                                    <div>
                                        <span class="name">
                                            <a href="http://fyrestream.com//events/2">abc</a>
                                        </span>
                                        <div>1 Interested</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Suggested Events -->
        </div>
    </div>
</div>

 <!-- POPUP VIDEO -->
 <div class="popup-video">
    <!-- POPUP CLOSE BUTTON -->
    <div class="popup-close-button popup-video-trigger">
        <!-- POPUP CLOSE BUTTON ICON -->
        <svg class="popup-close-button-icon icon-cross">
            <use xlink:href="#svg-cross"></use>
        </svg>
        <!-- /POPUP CLOSE BUTTON ICON -->
    </div>
    <!-- /POPUP CLOSE BUTTON -->

    <!-- IFRAME WRAP -->
    <div class="iframe-wrap">
        <iframe src="https://www.youtube.com/embed/6ErE27RNLDQ?start=200" allowfullscreen></iframe>
    </div>
    <!-- /IFRAME WRAP -->
</div>
<!-- /POPUP VIDEO -->

<!-- POPUP PICTURE -->
<div class="popup-picture">
    <!-- POPUP CLOSE BUTTON -->
    <div class="popup-close-button popup-picture-trigger">
        <!-- POPUP CLOSE BUTTON ICON -->
        <svg class="popup-close-button-icon icon-cross">
            <use xlink:href="#svg-cross"></use>
        </svg>
        <!-- /POPUP CLOSE BUTTON ICON -->
    </div>
    <!-- /POPUP CLOSE BUTTON -->

    <!-- WIDGET BOX -->
    <div class="widget-box no-padding">
        <!-- WIDGET BOX SCROLLABLE -->
        <div class="widget-box-scrollable" data-simplebar>
            <!-- WIDGET BOX SETTINGS -->
            <div class="widget-box-settings">
                <!-- POST SETTINGS WRAP -->
                <div class="post-settings-wrap">
                    <!-- POST SETTINGS -->
                    <div class="post-settings widget-box-post-settings-dropdown-trigger">
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
                            <i class="fa fa-save"></i>
                            <span class="d-flex flex-column">
                                <span class="d-block heading">Save Post </span>
                                <span class="d-block">Add this to your saved items</span>
                            </span>
                        </p>
                        <hr>
                        <!-- /SIMPLE DROPDOWN LINK -->
                        <!-- SIMPLE DROPDOWN LINK -->
                        <p class="simple-dropdown-link d-flex flex-row">
                            <i class="fa fa-bell"></i>
                            <span class="d-flex flex-column">
                                <span class="d-block heading">Turn on Notification for this post </span>
                            </span>
                        </p>
                        <!-- /SIMPLE DROPDOWN LINK -->
                        <!-- SIMPLE DROPDOWN LINK -->
                        <p class="simple-dropdown-link d-flex flex-row">
                            <i class="fa fa-code"></i>
                            <span class="d-flex flex-column">
                                <span class="d-block heading">Embed </span>
                            </span>
                        </p>
                        <hr>
                        <!-- /SIMPLE DROPDOWN LINK -->

                        <!-- SIMPLE DROPDOWN LINK -->
                        <p class="simple-dropdown-link d-flex flex-row">
                            <i class="fa fa-times"></i>
                            <span class="d-flex flex-column">
                                <span class="d-block heading">Hide Post </span>
                                <span class="d-block">See fewer posts like this</span>
                            </span>
                        </p>
                        <!-- /SIMPLE DROPDOWN LINK -->
                        <!-- SIMPLE DROPDOWN LINK -->
                        <p class="simple-dropdown-link d-flex flex-row">
                            <i class="fa fa-clock-o"></i>
                            <span class="d-flex flex-column">
                                <span class="d-block heading">Snooze the XYZ </span>
                                <span class="d-block">Temporarily stop seeing post</span>
                            </span>
                        </p>
                        <!-- /SIMPLE DROPDOWN LINK -->
                        <!-- SIMPLE DROPDOWN LINK -->
                        <p class="simple-dropdown-link d-flex flex-row">
                            <i class="fa fa-times-circle"></i>
                            <span class="d-flex flex-column">
                                <span class="d-block heading">Unfollow the XYZ </span>
                                <span class="d-block">Stop seeing post from this page</span>
                            </span>
                        </p>
                        <!-- /SIMPLE DROPDOWN LINK -->

                        <!-- SIMPLE DROPDOWN LINK -->
                        <p class="simple-dropdown-link d-flex flex-row">
                            <i class="fa fa-exclamation-circle"></i>
                            <span class="d-flex flex-column">
                                <span class="d-block heading">Find support or report post </span>
                                <span class="d-block">I'm concerned about this post</span>
                            </span>
                        </p>
                        <!-- /SIMPLE DROPDOWN LINK -->


                    </div>
                    <!-- /SIMPLE DROPDOWN -->
                </div>
                <!-- /POST SETTINGS WRAP -->
            </div>
            <!-- /WIDGET BOX SETTINGS -->

            <!-- WIDGET BOX STATUS -->
            <div class="widget-box-status">
                <!-- WIDGET BOX STATUS CONTENT -->
                <div class="widget-box-status-content">
                    <!-- USER STATUS -->
                    <div class="user-status">
                        <!-- USER STATUS AVATAR -->
                        <a class="user-status-avatar" href="profile-timeline.html">
                            <!-- USER AVATAR -->
                            <div class="user-avatar small no-outline">
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
                            </div>
                            <!-- /USER AVATAR -->
                        </a>
                        <!-- /USER STATUS AVATAR -->

                        <!-- USER STATUS TITLE -->
                        <p class="user-status-title medium"><a class="bold" href="profile-timeline.html">Sean David</a>
                        </p>
                        <!-- /USER STATUS TITLE -->

                        <!-- USER STATUS TEXT -->
                        <p class="user-status-text small">29 minutes ago</p>
                        <!-- /USER STATUS TEXT -->
                    </div>
                    <!-- /USER STATUS -->

                    <!-- WIDGET BOX STATUS TEXT -->
                    <p class="widget-box-status-text">Here's a sneak peek of the official box cover art for <a
                            href="#">Machine Wasteland II</a>! Remember that I'll be having a stream showing a preview
                        tommorrow
                        at 9PM PCT!</p>
                    <!-- /WIDGET BOX STATUS TEXT -->

                    <!-- CONTENT ACTIONS -->
                    <div class="content-actions">
                        <!-- CONTENT ACTION -->
                        <div class="content-action">
                            <!-- META LINE -->
                            <div class="meta-line">
                                <!-- META LINE LIST -->
                                <div class="meta-line-list reaction-item-list">
                                    <!-- REACTION ITEM -->
                                    <div class="reaction-item">
                                        <!-- REACTION IMAGE -->
                                        <img class="reaction-image reaction-item-dropdown-trigger"
                                            src="img/reaction/love.png" alt="reaction-love">
                                        <!-- /REACTION IMAGE -->

                                        <!-- SIMPLE DROPDOWN -->
                                        <div class="simple-dropdown padded reaction-item-dropdown">
                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text"><img class="reaction"
                                                    src="img/reaction/love.png" alt="reaction-love"> <span
                                                    class="bold">Love</span></p>
                                            <!-- /SIMPLE DROPDOWN TEXT -->

                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text">Destroy Dex</p>
                                            <!-- /SIMPLE DROPDOWN TEXT -->

                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text">The Green Goo</p>
                                            <!-- /SIMPLE DROPDOWN TEXT -->

                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text">Bearded Wonder</p>
                                            <!-- /SIMPLE DROPDOWN TEXT -->

                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text">Sandra Strange</p>
                                            <!-- /SIMPLE DROPDOWN TEXT -->

                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text">Matt Parker</p>
                                            <!-- /SIMPLE DROPDOWN TEXT -->

                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text">James Murdock</p>
                                            <!-- /SIMPLE DROPDOWN TEXT -->

                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text"><span class="bold">and 14 more...</span></p>
                                            <!-- /SIMPLE DROPDOWN TEXT -->
                                        </div>
                                        <!-- /SIMPLE DROPDOWN -->
                                    </div>
                                    <!-- /REACTION ITEM -->

                                    <!-- REACTION ITEM -->
                                    <div class="reaction-item">
                                        <!-- REACTION IMAGE -->
                                        <img class="reaction-image reaction-item-dropdown-trigger"
                                            src="img/reaction/wow.png" alt="reaction-wow">
                                        <!-- /REACTION IMAGE -->

                                        <!-- SIMPLE DROPDOWN -->
                                        <div class="simple-dropdown padded reaction-item-dropdown">
                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text"><img class="reaction"
                                                    src="img/reaction/wow.png" alt="reaction-wow"> <span
                                                    class="bold">Wow</span></p>
                                            <!-- /SIMPLE DROPDOWN TEXT -->

                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text">Jett Spiegel</p>
                                            <!-- /SIMPLE DROPDOWN TEXT -->
                                        </div>
                                        <!-- /SIMPLE DROPDOWN -->
                                    </div>
                                    <!-- /REACTION ITEM -->

                                    <!-- REACTION ITEM -->
                                    <div class="reaction-item">
                                        <!-- REACTION IMAGE -->
                                        <img class="reaction-image reaction-item-dropdown-trigger"
                                            src="img/reaction/like.png" alt="reaction-like">
                                        <!-- /REACTION IMAGE -->

                                        <!-- SIMPLE DROPDOWN -->
                                        <div class="simple-dropdown padded reaction-item-dropdown">
                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text"><img class="reaction"
                                                    src="img/reaction/like.png" alt="reaction-like"> <span
                                                    class="bold">Like</span></p>
                                            <!-- /SIMPLE DROPDOWN TEXT -->

                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text">Neko Bebop</p>
                                            <!-- /SIMPLE DROPDOWN TEXT -->

                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text">Nick Grissom</p>
                                            <!-- /SIMPLE DROPDOWN TEXT -->

                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text">Sarah Diamond</p>
                                            <!-- /SIMPLE DROPDOWN TEXT -->
                                        </div>
                                        <!-- /SIMPLE DROPDOWN -->
                                    </div>
                                    <!-- /REACTION ITEM -->
                                </div>
                                <!-- /META LINE LIST -->

                                <!-- META LINE TEXT -->
                                <p class="meta-line-text">24</p>
                                <!-- /META LINE TEXT -->
                            </div>
                            <!-- /META LINE -->
                        </div>
                        <!-- /CONTENT ACTION -->

                        <!-- CONTENT ACTION -->
                        <div class="content-action">
                            <!-- META LINE -->
                            <div class="meta-line">
                                <!-- META LINE LINK -->
                                <p class="meta-line-link">13 Comments</p>
                                <!-- /META LINE LINK -->
                            </div>
                            <!-- /META LINE -->

                            <!-- META LINE -->
                            <div class="meta-line">
                                <!-- META LINE TEXT -->
                                <p class="meta-line-text">0 Shares</p>
                                <!-- /META LINE TEXT -->
                            </div>
                            <!-- /META LINE -->
                        </div>
                        <!-- /CONTENT ACTION -->
                    </div>
                    <!-- /CONTENT ACTIONS -->
                </div>
                <!-- /WIDGET BOX STATUS CONTENT -->
            </div>
            <!-- /WIDGET BOX STATUS -->

            <!-- POST OPTIONS -->
            <div class="post-options">
                <!-- POST OPTION WRAP -->
                <div class="post-option-wrap">
                    <!-- POST OPTION -->
                    <div class="post-option no-text reaction-options-dropdown-trigger">
                        <!-- POST OPTION ICON -->
                        <svg class="post-option-icon icon-thumbs-up">
                            <use xlink:href="#svg-thumbs-up"></use>
                        </svg>
                        <!-- /POST OPTION ICON -->
                    </div>
                    <!-- /POST OPTION -->

                    <!-- REACTION OPTIONS -->
                    <div class="reaction-options small reaction-options-dropdown">
                        <!-- REACTION OPTION -->
                        <div class="reaction-option text-tooltip-tft" data-title="Like">
                            <!-- REACTION OPTION IMAGE -->
                            <img class="reaction-option-image" src="img/reaction/like.png" alt="reaction-like">
                            <!-- /REACTION OPTION IMAGE -->
                        </div>
                        <!-- /REACTION OPTION -->

                        <!-- REACTION OPTION -->
                        <div class="reaction-option text-tooltip-tft" data-title="Love">
                            <!-- REACTION OPTION IMAGE -->
                            <img class="reaction-option-image" src="img/reaction/love.png" alt="reaction-love">
                            <!-- /REACTION OPTION IMAGE -->
                        </div>
                        <!-- /REACTION OPTION -->

                        <!-- REACTION OPTION -->
                        <div class="reaction-option text-tooltip-tft d-none " data-title="Dislike">
                            <!-- REACTION OPTION IMAGE -->
                            <img class="reaction-option-image" src="img/reaction/dislike.png" alt="reaction-dislike">
                            <!-- /REACTION OPTION IMAGE -->
                        </div>
                        <!-- /REACTION OPTION -->

                        <!-- REACTION OPTION -->
                        <div class="reaction-option text-tooltip-tft" data-title="Happy">
                            <!-- REACTION OPTION IMAGE -->
                            <img class="reaction-option-image" src="img/reaction/happy.png" alt="reaction-happy">
                            <!-- /REACTION OPTION IMAGE -->
                        </div>
                        <!-- /REACTION OPTION -->

                        <!-- REACTION OPTION -->
                        <div class="reaction-option text-tooltip-tft" data-title="Funny">
                            <!-- REACTION OPTION IMAGE -->
                            <img class="reaction-option-image" src="img/reaction/funny.png" alt="reaction-funny">
                            <!-- /REACTION OPTION IMAGE -->
                        </div>
                        <!-- /REACTION OPTION -->

                        <!-- REACTION OPTION -->
                        <div class="reaction-option text-tooltip-tft" data-title="Wow">
                            <!-- REACTION OPTION IMAGE -->
                            <img class="reaction-option-image" src="img/reaction/wow.png" alt="reaction-wow">
                            <!-- /REACTION OPTION IMAGE -->
                        </div>
                        <!-- /REACTION OPTION -->

                        <!-- REACTION OPTION -->
                        <div class="reaction-option text-tooltip-tft" data-title="Angry">
                            <!-- REACTION OPTION IMAGE -->
                            <img class="reaction-option-image" src="img/reaction/angry.png" alt="reaction-angry">
                            <!-- /REACTION OPTION IMAGE -->
                        </div>
                        <!-- /REACTION OPTION -->

                        <!-- REACTION OPTION -->
                        <div class="reaction-option text-tooltip-tft d-none" data-title="Sad">
                            <!-- REACTION OPTION IMAGE -->
                            <img class="reaction-option-image" src="img/reaction/sad.png" alt="reaction-sad">
                            <!-- /REACTION OPTION IMAGE -->
                        </div>
                        <!-- /REACTION OPTION -->
                    </div>
                    <!-- /REACTION OPTIONS -->
                </div>
                <!-- /POST OPTION WRAP -->

                <!-- POST OPTION -->
                <div class="post-option no-text active">
                    <!-- POST OPTION ICON -->
                    <svg class="post-option-icon icon-comment">
                        <use xlink:href="#svg-comment"></use>
                    </svg>
                    <!-- /POST OPTION ICON -->
                </div>
                <!-- /POST OPTION -->

                <!-- POST OPTION -->
                <div class="post-option no-text">
                    <!-- POST OPTION ICON -->
                    <svg class="post-option-icon icon-share">
                        <use xlink:href="#svg-share"></use>
                    </svg>
                    <!-- /POST OPTION ICON -->
                </div>
                <!-- /POST OPTION -->
            </div>
            <!-- /POST OPTIONS -->

            <!-- POST COMMENT LIST -->
            <div class="post-comment-list">
                <!-- POST COMMENT -->
                <div class="post-comment">
                    <!-- USER AVATAR -->
                    <a class="user-avatar small no-outline" href="profile-timeline.html">
                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-30-32" data-src="img/avatar/05.jpg"></div>
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
                            <p class="user-avatar-badge-text">12</p>
                            <!-- /USER AVATAR BADGE TEXT -->
                        </div>
                        <!-- /USER AVATAR BADGE -->
                    </a>
                    <!-- /USER AVATAR -->

                    <!-- POST COMMENT TEXT -->
                    <p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Neko
                            Bebop</a>It's always a pleasure to do this streams with you! If we have at least half the
                        fun than
                        last time it will be an incredible success!</p>
                    <!-- /POST COMMENT TEXT -->

                    <!-- CONTENT ACTIONS -->
                    <div class="content-actions">
                        <!-- CONTENT ACTION -->
                        <div class="content-action">
                            <!-- META LINE -->
                            <div class="meta-line">
                                <!-- META LINE LIST -->
                                <div class="meta-line-list reaction-item-list small">
                                    <!-- REACTION ITEM -->
                                    <div class="reaction-item">
                                        <!-- REACTION IMAGE -->
                                        <img class="reaction-image reaction-item-dropdown-trigger"
                                            src="img/reaction/happy.png" alt="reaction-happy">
                                        <!-- /REACTION IMAGE -->

                                        <!-- SIMPLE DROPDOWN -->
                                        <div class="simple-dropdown padded reaction-item-dropdown">
                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text"><img class="reaction"
                                                    src="img/reaction/happy.png" alt="reaction-happy"> <span
                                                    class="bold">Happy</span></p>
                                            <!-- /SIMPLE DROPDOWN TEXT -->

                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text">Marcus Jhonson</p>
                                            <!-- /SIMPLE DROPDOWN TEXT -->
                                        </div>
                                        <!-- /SIMPLE DROPDOWN -->
                                    </div>
                                    <!-- /REACTION ITEM -->

                                    <!-- REACTION ITEM -->
                                    <div class="reaction-item">
                                        <!-- REACTION IMAGE -->
                                        <img class="reaction-image reaction-item-dropdown-trigger"
                                            src="img/reaction/like.png" alt="reaction-like">
                                        <!-- /REACTION IMAGE -->

                                        <!-- SIMPLE DROPDOWN -->
                                        <div class="simple-dropdown padded reaction-item-dropdown">
                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text"><img class="reaction"
                                                    src="img/reaction/like.png" alt="reaction-like"> <span
                                                    class="bold">Like</span></p>
                                            <!-- /SIMPLE DROPDOWN TEXT -->

                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text">Neko Bebop</p>
                                            <!-- /SIMPLE DROPDOWN TEXT -->

                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text">Nick Grissom</p>
                                            <!-- /SIMPLE DROPDOWN TEXT -->

                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text">Sarah Diamond</p>
                                            <!-- /SIMPLE DROPDOWN TEXT -->
                                        </div>
                                        <!-- /SIMPLE DROPDOWN -->
                                    </div>
                                    <!-- /REACTION ITEM -->
                                </div>
                                <!-- /META LINE LIST -->

                                <!-- META LINE TEXT -->
                                <p class="meta-line-text">4</p>
                                <!-- /META LINE TEXT -->
                            </div>
                            <!-- /META LINE -->

                            <!-- META LINE -->
                            <div class="meta-line">
                                <!-- META LINE LINK -->
                                <p class="meta-line-link light reaction-options-small-dropdown-trigger">Like</p>
                                <!-- /META LINE LINK -->

                                <!-- REACTION OPTIONS -->
                                <div class="reaction-options small reaction-options-small-dropdown">
                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Like">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/like.png"
                                            alt="reaction-like">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Love">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/love.png"
                                            alt="reaction-love">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft d-none " data-title="Dislike">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/dislike.png"
                                            alt="reaction-dislike">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Happy">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/happy.png"
                                            alt="reaction-happy">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Funny">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/funny.png"
                                            alt="reaction-funny">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Wow">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/wow.png"
                                            alt="reaction-wow">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Angry">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/angry.png"
                                            alt="reaction-angry">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft d-none" data-title="Sad">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/sad.png"
                                            alt="reaction-sad">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->
                                </div>
                                <!-- /REACTION OPTIONS -->
                            </div>
                            <!-- /META LINE -->

                            <!-- META LINE -->
                            <div class="meta-line">
                                <!-- META LINE LINK -->
                                <p class="meta-line-link light">Reply</p>
                                <!-- /META LINE LINK -->
                            </div>
                            <!-- /META LINE -->

                            <!-- META LINE -->
                            <div class="meta-line">
                                <!-- META LINE TIMESTAMP -->
                                <p class="meta-line-timestamp">15 min ago</p>
                                <!-- /META LINE TIMESTAMP -->
                            </div>
                            <!-- /META LINE -->

                            <!-- META LINE -->
                            <div class="meta-line settings">
                                <!-- POST SETTINGS WRAP -->
                                <div class="post-settings-wrap">
                                    <!-- POST SETTINGS -->
                                    <div class="post-settings post-settings-dropdown-trigger">
                                        <!-- POST SETTINGS ICON -->
                                        <svg class="post-settings-icon icon-more-dots">
                                            <use xlink:href="#svg-more-dots"></use>
                                        </svg>
                                        <!-- /POST SETTINGS ICON -->
                                    </div>
                                    <!-- /POST SETTINGS -->

                                    <!-- SIMPLE DROPDOWN -->
                                    <div class="simple-dropdown post-settings-dropdown">
                                        <!-- SIMPLE DROPDOWN LINK -->
                                        <p class="simple-dropdown-link">Report Post</p>
                                        <!-- /SIMPLE DROPDOWN LINK -->
                                    </div>
                                    <!-- /SIMPLE DROPDOWN -->
                                </div>
                                <!-- /POST SETTINGS WRAP -->
                            </div>
                            <!-- /META LINE -->
                        </div>
                        <!-- /CONTENT ACTION -->
                    </div>
                    <!-- /CONTENT ACTIONS -->
                </div>
                <!-- /POST COMMENT -->

                <!-- POST COMMENT -->
                <div class="post-comment unread reply-2">
                    <!-- USER AVATAR -->
                    <a class="user-avatar small no-outline" href="profile-timeline.html">
                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-30-32" data-src="img/avatar/03.jpg"></div>
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
                            <p class="user-avatar-badge-text">16</p>
                            <!-- /USER AVATAR BADGE TEXT -->
                        </div>
                        <!-- /USER AVATAR BADGE -->
                    </a>
                    <!-- /USER AVATAR -->

                    <!-- POST COMMENT TEXT -->
                    <p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Nick
                            Grissom</a>I wouldn't miss it for anything!! Love both streams!</p>
                    <!-- /POST COMMENT TEXT -->

                    <!-- CONTENT ACTIONS -->
                    <div class="content-actions">
                        <!-- CONTENT ACTION -->
                        <div class="content-action">
                            <!-- META LINE -->
                            <div class="meta-line">
                                <!-- META LINE LIST -->
                                <div class="meta-line-list reaction-item-list small">
                                    <!-- REACTION ITEM -->
                                    <div class="reaction-item">
                                        <!-- REACTION IMAGE -->
                                        <img class="reaction-image reaction-item-dropdown-trigger"
                                            src="img/reaction/like.png" alt="reaction-like">
                                        <!-- /REACTION IMAGE -->

                                        <!-- SIMPLE DROPDOWN -->
                                        <div class="simple-dropdown padded reaction-item-dropdown">
                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text"><img class="reaction"
                                                    src="img/reaction/like.png" alt="reaction-like"> <span
                                                    class="bold">Like</span></p>
                                            <!-- /SIMPLE DROPDOWN TEXT -->

                                            <!-- SIMPLE DROPDOWN TEXT -->
                                            <p class="simple-dropdown-text">Neko Bebop</p>
                                            <!-- /SIMPLE DROPDOWN TEXT -->
                                        </div>
                                        <!-- /SIMPLE DROPDOWN -->
                                    </div>
                                    <!-- /REACTION ITEM -->
                                </div>
                                <!-- /META LINE LIST -->

                                <!-- META LINE TEXT -->
                                <p class="meta-line-text">1</p>
                                <!-- /META LINE TEXT -->
                            </div>
                            <!-- /META LINE -->

                            <!-- META LINE -->
                            <div class="meta-line">
                                <!-- META LINE LINK -->
                                <p class="meta-line-link light reaction-options-small-dropdown-trigger">Like</p>
                                <!-- /META LINE LINK -->

                                <!-- REACTION OPTIONS -->
                                <div class="reaction-options small reaction-options-small-dropdown">
                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Like">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/like.png"
                                            alt="reaction-like">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Love">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/love.png"
                                            alt="reaction-love">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft d-none " data-title="Dislike">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/dislike.png"
                                            alt="reaction-dislike">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Happy">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/happy.png"
                                            alt="reaction-happy">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Funny">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/funny.png"
                                            alt="reaction-funny">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Wow">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/wow.png"
                                            alt="reaction-wow">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Angry">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/angry.png"
                                            alt="reaction-angry">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft d-none" data-title="Sad">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/sad.png"
                                            alt="reaction-sad">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->
                                </div>
                                <!-- /REACTION OPTIONS -->
                            </div>
                            <!-- /META LINE -->

                            <!-- META LINE -->
                            <div class="meta-line">
                                <!-- META LINE LINK -->
                                <p class="meta-line-link light">Reply</p>
                                <!-- /META LINE LINK -->
                            </div>
                            <!-- /META LINE -->

                            <!-- META LINE -->
                            <div class="meta-line">
                                <!-- META LINE TIMESTAMP -->
                                <p class="meta-line-timestamp">2 min ago</p>
                                <!-- /META LINE TIMESTAMP -->
                            </div>
                            <!-- /META LINE -->

                            <!-- META LINE -->
                            <div class="meta-line settings">
                                <!-- POST SETTINGS WRAP -->
                                <div class="post-settings-wrap">
                                    <!-- POST SETTINGS -->
                                    <div class="post-settings post-settings-dropdown-trigger">
                                        <!-- POST SETTINGS ICON -->
                                        <svg class="post-settings-icon icon-more-dots">
                                            <use xlink:href="#svg-more-dots"></use>
                                        </svg>
                                        <!-- /POST SETTINGS ICON -->
                                    </div>
                                    <!-- /POST SETTINGS -->

                                    <!-- SIMPLE DROPDOWN -->
                                    <div class="simple-dropdown post-settings-dropdown">
                                        <!-- SIMPLE DROPDOWN LINK -->
                                        <p class="simple-dropdown-link">Report Post</p>
                                        <!-- /SIMPLE DROPDOWN LINK -->
                                    </div>
                                    <!-- /SIMPLE DROPDOWN -->
                                </div>
                                <!-- /POST SETTINGS WRAP -->
                            </div>
                            <!-- /META LINE -->
                        </div>
                        <!-- /CONTENT ACTION -->
                    </div>
                    <!-- /CONTENT ACTIONS -->
                </div>
                <!-- /POST COMMENT -->

                <!-- POST COMMENT -->
                <div class="post-comment">
                    <!-- USER AVATAR -->
                    <a class="user-avatar small no-outline" href="profile-timeline.html">
                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-30-32" data-src="img/avatar/02.jpg"></div>
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
                            <p class="user-avatar-badge-text">19</p>
                            <!-- /USER AVATAR BADGE TEXT -->
                        </div>
                        <!-- /USER AVATAR BADGE -->
                    </a>
                    <!-- /USER AVATAR -->

                    <!-- POST COMMENT TEXT -->
                    <p class="post-comment-text"><a class="post-comment-text-author"
                            href="profile-timeline.html">Destroy
                            Dex</a>YEAHHH!! <a href="profile-timeline.html">@MarinaValentine</a> I really enjoyed your
                        last stream
                        and it also was really funny! Can't wait!</p>
                    <!-- /POST COMMENT TEXT -->

                    <!-- CONTENT ACTIONS -->
                    <div class="content-actions">
                        <!-- CONTENT ACTION -->
                        <div class="content-action">
                            <!-- META LINE -->
                            <div class="meta-line">
                                <!-- META LINE LINK -->
                                <p class="meta-line-link light reaction-options-small-dropdown-trigger">Like</p>
                                <!-- /META LINE LINK -->

                                <!-- REACTION OPTIONS -->
                                <div class="reaction-options small reaction-options-small-dropdown">
                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Like">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/like.png"
                                            alt="reaction-like">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Love">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/love.png"
                                            alt="reaction-love">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft d-none " data-title="Dislike">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/dislike.png"
                                            alt="reaction-dislike">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Happy">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/happy.png"
                                            alt="reaction-happy">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Funny">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/funny.png"
                                            alt="reaction-funny">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Wow">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/wow.png"
                                            alt="reaction-wow">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Angry">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/angry.png"
                                            alt="reaction-angry">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft d-none" data-title="Sad">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/sad.png"
                                            alt="reaction-sad">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->
                                </div>
                                <!-- /REACTION OPTIONS -->
                            </div>
                            <!-- /META LINE -->

                            <!-- META LINE -->
                            <div class="meta-line">
                                <!-- META LINE LINK -->
                                <p class="meta-line-link light">Reply</p>
                                <!-- /META LINE LINK -->
                            </div>
                            <!-- /META LINE -->

                            <!-- META LINE -->
                            <div class="meta-line">
                                <!-- META LINE TIMESTAMP -->
                                <p class="meta-line-timestamp">27 min ago</p>
                                <!-- /META LINE TIMESTAMP -->
                            </div>
                            <!-- /META LINE -->

                            <!-- META LINE -->
                            <div class="meta-line settings">
                                <!-- POST SETTINGS WRAP -->
                                <div class="post-settings-wrap">
                                    <!-- POST SETTINGS -->
                                    <div class="post-settings post-settings-dropdown-trigger">
                                        <!-- POST SETTINGS ICON -->
                                        <svg class="post-settings-icon icon-more-dots">
                                            <use xlink:href="#svg-more-dots"></use>
                                        </svg>
                                        <!-- /POST SETTINGS ICON -->
                                    </div>
                                    <!-- /POST SETTINGS -->

                                    <!-- SIMPLE DROPDOWN -->
                                    <div class="simple-dropdown post-settings-dropdown">
                                        <!-- SIMPLE DROPDOWN LINK -->
                                        <p class="simple-dropdown-link">Report Post</p>
                                        <!-- /SIMPLE DROPDOWN LINK -->
                                    </div>
                                    <!-- /SIMPLE DROPDOWN -->
                                </div>
                                <!-- /POST SETTINGS WRAP -->
                            </div>
                            <!-- /META LINE -->
                        </div>
                        <!-- /CONTENT ACTION -->
                    </div>
                    <!-- /CONTENT ACTIONS -->
                </div>
                <!-- /POST COMMENT -->

                <!-- POST COMMENT -->
                <div class="post-comment">
                    <!-- USER AVATAR -->
                    <a class="user-avatar small no-outline" href="profile-timeline.html">
                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-30-32" data-src="img/avatar/07.jpg"></div>
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
                            <p class="user-avatar-badge-text">26</p>
                            <!-- /USER AVATAR BADGE TEXT -->
                        </div>
                        <!-- /USER AVATAR BADGE -->
                    </a>
                    <!-- /USER AVATAR -->

                    <!-- POST COMMENT TEXT -->
                    <p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Sarah
                            Diamond</a>That sounds awesome Marina! And also thanks a lot for the art sneak peek! I went
                        to the
                        GameCon last week and had a great time playing the game's open demo.</p>
                    <!-- /POST COMMENT TEXT -->

                    <!-- CONTENT ACTIONS -->
                    <div class="content-actions">
                        <!-- CONTENT ACTION -->
                        <div class="content-action">
                            <!-- META LINE -->
                            <div class="meta-line">
                                <!-- META LINE LINK -->
                                <p class="meta-line-link light reaction-options-small-dropdown-trigger">Like</p>
                                <!-- /META LINE LINK -->

                                <!-- REACTION OPTIONS -->
                                <div class="reaction-options small reaction-options-small-dropdown">
                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Like">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/like.png"
                                            alt="reaction-like">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Love">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/love.png"
                                            alt="reaction-love">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft d-none " data-title="Dislike">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/dislike.png"
                                            alt="reaction-dislike">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Happy">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/happy.png"
                                            alt="reaction-happy">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Funny">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/funny.png"
                                            alt="reaction-funny">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Wow">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/wow.png"
                                            alt="reaction-wow">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Angry">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/angry.png"
                                            alt="reaction-angry">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft d-none" data-title="Sad">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/sad.png"
                                            alt="reaction-sad">
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->
                                </div>
                                <!-- /REACTION OPTIONS -->
                            </div>
                            <!-- /META LINE -->

                            <!-- META LINE -->
                            <div class="meta-line">
                                <!-- META LINE LINK -->
                                <p class="meta-line-link light">Reply</p>
                                <!-- /META LINE LINK -->
                            </div>
                            <!-- /META LINE -->

                            <!-- META LINE -->
                            <div class="meta-line">
                                <!-- META LINE TIMESTAMP -->
                                <p class="meta-line-timestamp">39 min ago</p>
                                <!-- /META LINE TIMESTAMP -->
                            </div>
                            <!-- /META LINE -->

                            <!-- META LINE -->
                            <div class="meta-line settings">
                                <!-- POST SETTINGS WRAP -->
                                <div class="post-settings-wrap">
                                    <!-- POST SETTINGS -->
                                    <div class="post-settings post-settings-dropdown-trigger">
                                        <!-- POST SETTINGS ICON -->
                                        <svg class="post-settings-icon icon-more-dots">
                                            <use xlink:href="#svg-more-dots"></use>
                                        </svg>
                                        <!-- /POST SETTINGS ICON -->
                                    </div>
                                    <!-- /POST SETTINGS -->

                                    <!-- SIMPLE DROPDOWN -->
                                    <div class="simple-dropdown post-settings-dropdown">
                                        <!-- SIMPLE DROPDOWN LINK -->
                                        <p class="simple-dropdown-link">Report Post</p>
                                        <!-- /SIMPLE DROPDOWN LINK -->
                                    </div>
                                    <!-- /SIMPLE DROPDOWN -->
                                </div>
                                <!-- /POST SETTINGS WRAP -->
                            </div>
                            <!-- /META LINE -->
                        </div>
                        <!-- /CONTENT ACTION -->
                    </div>
                    <!-- /CONTENT ACTIONS -->
                </div>
                <!-- /POST COMMENT -->

                <!-- POST COMMENT HEADING -->
                <p class="post-comment-heading">Load More Comments <span class="highlighted">9+</span></p>
                <!-- /POST COMMENT HEADING -->
            </div>
            <!-- /POST COMMENT LIST -->
        </div>
        <!-- /WIDGET BOX SCROLLABLE -->

        <!-- POST COMMENT FORM -->
        <div class="post-comment-form bordered-top">
            <!-- USER AVATAR -->
            <div class="user-avatar small no-outline">
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
            </div>
            <!-- /USER AVATAR -->

            <!-- FORM -->
            <form class="form">
                <!-- FORM ROW -->
                <div class="form-row">
                    <!-- FORM ITEM -->
                    <div class="form-item">
                        <!-- FORM INPUT -->
                        <div class="form-input small">
                            <input type="text" id="popup-post-reply" name="popup_post_reply">
                        </div>
                        <!-- /FORM INPUT -->
                    </div>
                    <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->
            </form>
            <!-- /FORM -->
        </div>
        <!-- /POST COMMENT FORM -->
    </div>
    <!-- /WIDGET BOX -->

    <!-- POPUP PICTURE IMAGE WRAP -->
    <div class="popup-picture-image-wrap">
        <!-- POPUP PICTURE IMAGE -->
        <figure class="popup-picture-image">
            <img src="{{ asset('img/cover/04.jpg') }}" alt="cover-04">
        </figure>
        <!-- /POPUP PICTURE IMAGE -->
    </div>
    <!-- /POPUP PICTURE IMAGE WRAP -->
</div>
<!-- /POPUP PICTURE -->


<!-- Modal -->
<div class="modal fade create-post" style="z-index: 10000000000;" id="createPost" tabindex="-1"
    aria-labelledby="createPostLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createPostLabel">Create Your Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="user-status">
                    <!-- USER STATUS AVATAR -->
                    <a class="user-status-avatar" href="profile-timeline.html">
                        <!-- USER AVATAR -->
                        <div class="user-avatar small no-outline">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <img src="{{ asset('img/profile/ww.jpeg') }}">
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->

                            <!-- /USER AVATAR BADGE -->
                        </div>
                        <!-- /USER AVATAR -->
                    </a>
                    <!-- /USER STATUS AVATAR -->

                    <!-- USER STATUS TITLE -->
                    <p class="user-status-title medium"><a class="bold" href="profile-timeline.html">Sean David</a></p>
                    <!-- /USER STATUS TITLE -->

                    <!-- USER STATUS TEXT -->
                    <select name="" id="">
                        <option value="Friends">Friends</option>
                    </select>
                    <!-- /USER STATUS TEXT -->
                </div>

                <textarea name="" id="" rows="3" placeholder="What's on your mind?"></textarea>


                <div class="options">
                    <div class="d-flex justify-content-end">
                        <div><i class="fa fa-smile-o" style="color: #fbc02d"></i></div>
                        <div><i class="fa fa-photo" style="color: #8bc34a"></i></div>
                        <div><i class="fa fa-video-camera" style="color: blue"></i></div>
                        <div><i class="fa fa-microphone" style="color: red"></i></div>
                        <div><i class="fa fa-map-marker" style="color: red"></i></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Post</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>

@endsection
