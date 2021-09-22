<?php
use App\Models\FriendRequest;
use App\Models\User;


function friendRequests(){
    $friends = FriendRequest::where('user_id', auth()->user()->id)->with('friend')->where('type',1)->get();
    return $friends;    
}

function friendSuggestion(){
    $friendSuggestions = User::where('email_verified_at', '!=', '')->where('id', '!=', auth()->user()->id)->orderBy('id','DESC')->take(12)->get(); 
    return $friendSuggestions;
}