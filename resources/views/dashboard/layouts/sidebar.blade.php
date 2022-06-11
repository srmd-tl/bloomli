<aside class="sidebar">
	<div class="sidebar-wrapper">
		<div class="logo">

			<h2> <img src="{{asset('assets/images/logo.png')}}"><button class="navbar-handler"> <img src="{{asset('assets/images/hamburger.png')}}"> </button>   </h2>
		</div>

		<div class="collapse-accordion navbar-custom" id="accordion2" role="tablist" aria-multiselectable="true">
			<div class="menu-wrapper menu-this">
				<div role="tab" >
					<h5 class="mb-0">
						<a class="collapsed d-block" href="{{ route('dashboard') }}">
							<img src="{{asset('assets/images/nav-icon1.png')}}">
						Overview  </a>
					</h5>
				</div>
			</div>
			<div class="menu-wrapper">
				<div role="tab" >
					<h5 class="mb-0">
						<a class="collapsed d-block" href="{{ route('tasks') }}">
							<img src="{{asset('assets/images/nav-icon2.png')}}">
						Task </a>
					</h5>
				</div>
			</div>
			<div class="menu-wrapper">
				<div role="tab" >
					<h5 class="mb-0">
						<a class="collapsed d-block" href="{{ route('projects') }}">
							<img src="{{asset('assets/images/nav-icon3.png')}}">
						Projects  </a>
					</h5>
				</div>
			</div>
			<div class="menu-wrapper">
				<div role="tab" >
					<h5 class="mb-0">
						<a class="collapsed d-block" href="{{ route('team') }}">
							<img src="{{asset('assets/images/nav-icon4.png')}}">
						Team  </a>
					</h5>
				</div>
			</div>
			<div class="menu-wrapper">
				<div role="tab" >
					<h5 class="mb-0">
						<a class="collapsed d-block" href="{{ route('books') }}">
							<img src="{{asset('assets/images/nav-icon5.png')}}">
						Books  </a>
					</h5>
				</div>
			</div>
			<div class="menu-wrapper">
				<div role="tab" >
					<h5 class="mb-0">
						<a class="collapsed d-block" href="{{ route('quiz') }}">
							<img src="{{asset('assets/images/quiz-icon.png')}}">
						Quizzes  </a>
					</h5>
				</div>
			</div>
			<div class="menu-wrapper">
				<div role="tab" >
					<h5 class="mb-0">
						<a class="collapsed d-block" href="{{ route('notes') }}">
							<img src="{{asset('assets/images/nav-icon10.png')}}">
						Notes  </a>
					</h5>
				</div>
			</div>
			<div class="menu-wrapper">
				<div role="tab" >
					<h5 class="mb-0">
						<a class="collapsed d-block" href="{{ route('library') }}">
							<img src="{{asset('assets/images/nav-icon6.png')}}">
						Library </a>
					</h5>
				</div>
			</div>
			<div class="menu-wrapper">
				<div role="tab" >
					<h5 class="mb-0">
						<a class="collapsed d-block" href="{{ route('messages') }}">
							<img src="{{asset('assets/images/nav-icon8.png')}}">
						Messages  </a>
					</h5>
				</div>
			</div>
			<div class="menu-wrapper">
				<div role="tab" >
					<h5 class="mb-0">
						<a class="collapsed d-block" href="#">
							<img src="{{asset('assets/images/nav-icon9.png')}}">
						Notification  </a>
					</h5>
				</div>
			</div>
			<div class="menu-wrapper">
				<div role="tab" >
					<h5 class="mb-0">
						<a class="collapsed d-block" href="{{ route('account_info') }}">
							<img src="{{asset('assets/images/account-icon.png')}}">
						Account Info  </a>
					</h5>
				</div>
			</div>
		</div>
	</div>
</aside>