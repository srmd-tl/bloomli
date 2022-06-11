@extends('dashboard.layouts.master')

@section('content')
<div class="block-element">
	<div class="row">
		<div class="col-md-12 col-lg-8 col-sm-12 col-12">
			<div class="block-element m-b-10">
				<div class="row custom-row1 ">
					<div class="col-md-4 col-lg-4 col-sm-6 col-12 custom-pad1">
						<div class="custom-box1">
							<img src="{{asset('assets/images/box-icon1.png')}}">
							<h4 class="col-black1"> 30.457 <span class="col-green"> 26.4% </span> </h4>
							<p class="col-grey1"> Accounts Available </p>
						</div>
					</div>
					<div class="col-md-4 col-lg-4 col-sm-6 col-12  custom-pad1">
						<div class="custom-box1">
							<img src="{{asset('assets/images/box-icon2.png')}}">
							<h4 class="col-black1"> 3.147 <span class="col-green"> 14% </span> </h4>
							<p class="col-grey1"> Occupied Accounts  </p>
						</div>
					</div>
					<div class="col-md-4 col-lg-4 col-sm-6 col-12  custom-pad1">
						<div class="custom-box1">
							<img src="{{asset('assets/images/box-icon3.png')}}">
							<h4 class="col-black1"> 77% <span class="col-green"> 12% </span> </h4>
							<p class="col-grey1"> Occupied of Accounts </p>
						</div>
					</div>
					<div class="col-md-4 col-lg-4 col-sm-6 col-12 custom-pad1">
						<div class="custom-box2">
							<img src="{{asset('assets/images/chart-icon1.png')}}">
							<h4  > 36  </h4>
							<h6 class="col-grey2"> In Progress Tasks </h6>
							<p class="col-grey2"> <i class="fa fa-chart-line col-green"> </i> <span class="col-green"> 64.07% </span> Last month </p>
						</div>
					</div>
					<div class="col-md-4 col-lg-4 col-sm-6 col-12 custom-pad1">
						<div class="custom-box2">
							<img src="{{asset('assets/images/chart-icon1.png')}}">
							<h4  > 55  </h4>
							<h6 class="col-grey2"> Pending Tasks </h6>
							<p class="col-grey2"> <i class="fa fa-chart-line col-orange"> </i> <span class="col-orange"> 64.07% </span> Last month </p>
						</div>
					</div>
					<div class="col-md-4 col-lg-4 col-sm-6 col-12 custom-pad1">
						<div class="custom-box2">
							<img src="{{asset('assets/images/chart-icon1.png')}}">
							<h4  > 55  </h4>
							<h6 class="col-grey2"> Completed Tasks </h6>
							<p class="col-grey2"> <i class="fa fa-chart-line col-red"> </i> <span class="col-red"> 64.07% </span> Last month </p>
						</div>
					</div>
				</div>
			</div>
			<div class="block-element m-b-30">
				<div class="custom-block1">
					<div class="block-element m-b-20">
						<div class="sec-head2">
							<h4> Statistic </h4>
						</div>
					</div>
					<div class="block-element">
						<div class="chart-1">
							<h4> Tasks Analysis </h4>
							<canvas id="bar-chart1" width="400" height="200"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12 col-lg-4 col-sm-12 col-12">
			<div class="block-element m-b-20">
				<div class="custom-block1">
					<div class="sec-head3">
						<h3> Task Calender </h3>
					</div>
					<div class="calendar-range">
						<div class="cf-hidden">
							<input type="text" id="start-date">
							<input type="text" id="end-date">
						</div>
						<div id="dp-island"></div>
						<div id="output"></div>
					</div>
				</div>
			</div>
			<div class="block-element m-b-20">
				<div class="custom-block1">
					<div class="sec-head3">
						<h3> Messages </h3>
					</div>
					<div class="row custom-row1">
						<div class="col-md-12 col-lg-12 col-sm-12 col-12">
							<div class="message-view">
								<img src="{{asset('assets/images/avatar-2.png')}}"> 
								<p class="col-grey1"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam architectocommodi </p>
								<h6 class="col-black1"> Harry brook </h6>
							</div>
						</div>
						<div class="col-md-12 col-lg-12 col-sm-12 col-12">
							<div class="message-view">
								<img src="{{asset('assets/images/avatar-3.png')}}"> 
								<p class="col-grey1"> Lorem ipsum dolor sit amet consectetur adipisicing elit  </p>
								<h6 class="col-black1"> Harry brook </h6>
							</div>
						</div>
						<div class="col-md-12 col-lg-12 col-sm-12 col-12">
							<div class="message-view">
								<img src="{{asset('assets/images/avatar-4.png')}}"> 
								<p class="col-grey1"> Lorem ipsum dolor sit amet consectetur adipisicing elit  </p>
								<h6 class="col-black1"> Harry brook </h6>
							</div>
						</div>
						<div class="col-md-12 col-lg-12 col-sm-12 col-12">
							<div class="message-view no-margin">
								<img src="{{asset('assets/images/avatar-5.png')}}"> 
								<p class="col-grey1"> Lorem ipsum dolor sit amet consectetur adipisicing elit  </p>
								<h6 class="col-black1"> Harry brook </h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="block-element">
				<div class="custom-block1">
					<div class="sec-head3">
						<h3> Trending Books </h3>
					</div>
					<div class="row custom-row1">
						<div class="col-md-3 col-lg-3 col-sm-3 col-3 custom-pad1">
							<div class="books-box">
								<img src="{{asset('assets/images/book-1.png')}}">
								<h5 class="col-black1"> Twice Shy </h5>
								<p class="col-grey1"> By John wen </p>
							</div>
						</div>
						<div class="col-md-3 col-lg-3 col-sm-3 col-3 custom-pad1">
							<div class="books-box">
								<img src="{{asset('assets/images/book-2.png')}}">
								<h5 class="col-black1"> Check list </h5>
								<p class="col-grey1"> By John wen </p>
							</div>
						</div>
						<div class="col-md-3 col-lg-3 col-sm-3 col-3 custom-pad1">
							<div class="books-box">
								<img src="{{asset('assets/images/book-3.png')}}">
								<h5 class="col-black1"> Twice Shy </h5>
								<p class="col-grey1"> By John wen </p>
							</div>
						</div>
						<div class="col-md-3 col-lg-3 col-sm-3 col-3 custom-pad1">
							<div class="books-box">
								<img src="{{asset('assets/images/book-1.png')}}">
								<h5 class="col-black1"> Check list </h5>
								<p class="col-grey1"> By John wen </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection