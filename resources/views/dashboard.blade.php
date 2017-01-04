@extends('main')

@section('content')
<div class="container">

<h1>Hey user here is your profile</h1>
	<h4>Your name : {{$user->first_name}}</h4>
	<h4>Your email : {{$user->email}}</h4>
	<h4>Your id in database : {{$user->id}}</h4>
	Your image : <br/>
	<img src="{{asset($user->getProfile->profilePic)}}" class="img-thumbnail" >


</div>
@stop