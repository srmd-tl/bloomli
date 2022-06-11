@extends('dashboard.layouts.master')

@section('content')
<div class="block-element">
	<div class="row">
		<div class="col-md-12 col-lg-5 col-sm-12 col-12">
			<div class="block-element m-b-20">
				<div class="custom-block3">
					<div class="block-element">
						<div class="sec-head4">
							<h4> Groups </h4>
							<div>
								<a data-toggle="modal" data-target="#modal-1" class="custom-btn4"> Create Group </a>
								<button id="opener-1" class="toggle-opener"> 
									<i class="fa fa-angle-right"> </i> 
								</button>
							</div>
						</div>
					</div>
					<div class="block-element">
						<div id="content-open1" class="groups-block">
							<div class="single-group-block active">
								<img src="{{asset('assets/images/group-1.png' )}}">
								<h4> Friends Reunion </h4>
								<p> Hi Guys, Wassup! </p>
								<span class="time-1"> Today, 5:25pm </span>
								<a data-toggle="modal" data-target="#modal-2" class="edit-group-btn"> EDIT </a>
							</div>
							<div class="single-group-block">
								<img src="{{asset('assets/images/group-2.png' )}}">
								<h4> Friends Forever </h4>
								<p> Good to see you. </p>
								<span class="time-1"> Today, 5:25pm </span>
								<a data-toggle="modal" data-target="#modal-2" class="edit-group-btn"> EDIT </a>
							</div>
							<div class="single-group-block">
								<img src="{{asset('assets/images/group-3.png' )}}">
								<h4> Crazy Cousins </h4>
								<p> What plans today? </p>
								<span class="time-1"> Today, 5:25pm </span>
								<a data-toggle="modal" data-target="#modal-2" class="edit-group-btn"> EDIT </a>
							</div>
							<div class="single-group-block">
								<img src="{{asset('assets/images/group-1.png' )}}">
								<h4> Friends Reunion </h4>
								<p> Hi Guys, Wassup! </p>
								<span class="time-1"> Today, 5:25pm </span>
								<a data-toggle="modal" data-target="#modal-2" class="edit-group-btn"> EDIT </a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="block-element m-b-20">
				<div class="custom-block4">
					<div class="block-element">
						<div class="sec-head4">
							<h4> Chats </h4>
							<div>
								<button id="opener-2" class="toggle-opener"> 
									<i class="fa fa-angle-right"> </i> 
								</button>
							</div>
						</div>
					</div>
					<div class="block-element">
						<div id="content-open2" class="all-current-chats">
							<div class="chat-single-group">
								<img src="{{asset('assets/images/chat-avatar1.png' )}}">
								<h4> Raghav </h4>
								<p> Dinner? </p>
								<span class="time-2"> Today, 8:56pm </span>
								<span class="doublecheck-1"> <img src="{{asset('assets/images/doublecheck.png' )}}"> </span>
							</div>
							<div class="chat-single-group">
								<img src="{{asset('assets/images/chat-avatar2.png' )}}">
								<h4> Swathi </h4>
								<p> Sure! </p>
								<span class="time-2"> Today, 2:31pm </span>
								<span class="doublecheck-1"> <img src="{{asset('assets/images/doublecheck.png' )}}"> </span>
							</div>
							<div class="chat-single-group">
								<img src="{{asset('assets/images/chat-avatar3.png' )}}">
								<h4> Kiran </h4>
								<p> HI.... </p>
								<span class="time-2"> Yesterday, 6:22pm </span>
								<span class="counter-2"> 2 </span>
							</div>
							<div class="chat-single-group">
								<img src="{{asset('assets/images/chat-avatar4.png' )}}">
								<h4> Tejeshwini C</h4>
								<p> I will call him today.</p>
								<span class="time-2"> Today, 12:22pm  </span>
								<span class="doublecheck-1"> <img src="{{asset('assets/images/doublecheck.png' )}}"> </span>
							</div>
							<div class="chat-single-group">
								<img src="{{asset('assets/images/chat-avatar5.png' )}}">
								<h4> Tejeshwini C</h4>
								<p> I will call him today.</p>
								<span class="time-2"> Today, 12:22pm </span>
								<span class="doublecheck-1"> <img src="{{asset('assets/images/doublecheck.png' )}}"> </span>
							</div>
							<div class="chat-single-group">
								<img src="{{asset('assets/images/chat-avatar1.png' )}}">
								<h4> Raghav </h4>
								<p> Dinner? </p>
								<span class="time-2"> Today, 8:56pm </span>
								<span class="doublecheck-1"> <img src="{{asset('assets/images/doublecheck.png' )}}"> </span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12 col-lg-7 col-sm-12 col-12">
			<div class="conversation-wrapper">
				<div class="conversation-head">
					<div class="conversation-profile">
						<img src="{{asset('assets/images/chat-avatar2.png' )}}">
						<h4 class="col-white"> Swathi </h4>
						<p class="col-white"> Online </p>
					</div>

				</div>
				<div id="all-messages" class="conversation-messages">
					<div class="sender-message">
						<div>
							<figure> <img src="{{asset('assets/images/chat-avatar1.png' )}}"> </figure>
							<p> Hey There ! </p>
						</div>
						<h6> Today, 2:01pm </h6>
						<div>
							<figure> <img src="{{asset('assets/images/chat-avatar1.png' )}}"> </figure>
							<p> How are you doing? </p>
						</div>
						<h6> Today, 2:01pm </h6>
					</div>
					<div class="recever-message">
						<div>
							<figure> <img src="{{asset('assets/images/chat-avatar3.png' )}}"> </figure>
							<p> Hey There ! </p>
						</div>
						<h6> Today, 2:01pm </h6>
						<div>
							<figure> <img src="{{asset('assets/images/chat-avatar3.png' )}}"> </figure>
							<p> How are you doing? </p>
						</div>
						<h6> Today, 2:01pm </h6>
					</div>
					<div class="sender-message">
						<div>
							<figure> <img src="{{asset('assets/images/chat-avatar1.png' )}}"> </figure>
							<p> Hey There ! </p>
						</div>
						<h6> Today, 2:01pm </h6>
						<div>
							<figure> <img src="{{asset('assets/images/chat-avatar1.png' )}}"> </figure>
							<p> How are you doing? </p>
						</div>
						<h6> Today, 2:01pm </h6>
					</div>
					<div class="recever-message">
						<div>
							<figure> <img src="{{asset('assets/images/chat-avatar3.png' )}}"> </figure>
							<p> Hey There ! </p>
						</div>
						<h6> Today, 2:01pm </h6>
						<div>
							<figure> <img src="{{asset('assets/images/chat-avatar3.png' )}}"> </figure>
							<p> How are you doing? </p>
						</div>
						<h6> Today, 2:01pm </h6>
					</div>
				</div>
				<div class="conversation-form">
					<form>
						<div class="convo-field1">
							<button class="convo-icon1"> <img src="{{asset('assets/images/convo-icon1.png' )}}"> </button>  
							<input type="text" placeholder="" name="">
							<button class="convo-icon1"> <img src="{{asset('assets/images/convo-icon2.png' )}}"> </button> 
							<button class="convo-icon1"> <img src="{{asset('assets/images/convo-icon3.png' )}}"> </button> 
						</div>
						<div class="convo-field2">
							<button class="convo-sound"> <i class="fa fa-microphone"> </i> </button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection