<div class="top-bar">
	<div class="row">
		<div class="col-md-9 col-lg-9 col-sm-12 col-12">
			<div class="sec-head1">
				<h3 class="col-black1"> {{ $title }} </h3>
			</div>
			<div class="form-1">
				<form>
					<i class="fa fa-search"> </i>
					<input type="text" placeholder="Search..." name="">
				</form>
			</div>
		</div>
		<div class="col-md-3 col-lg-3 col-sm-12 col-12">
			<div class="holder-1">
				<div class="dropdown notif-dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="{{asset('assets/images/bell-icon.png')}}">
						<span class="counter-1"> 1 </span>
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div>
				<div class="dropdown user-dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="{{asset('assets/images/avatar-1.png')}}">
						<span> Robert Jay  <b> Admin </b> </span>
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>