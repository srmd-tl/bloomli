@extends('dashboard.layouts.master')

@section('content')
<div class="block-element m-b-30">
	<div class="row center-row1">
		<div class="col-md-12 col-lg-7 col-sm-12 col-12">
			<div class="anchors-holder2 arrows-1 custom-slider1">
				<div> <a href="" class="active"> Creativity </a> </div>
				<div> <a href=""> Relationships </a> </div>
				<div> <a href=""> Science </a> </div>
				<div> <a href=""> Parenting </a> </div>
				<div> <a href=""> Society & Culture </a> </div>
				<div> <a href=""> Relationships </a> </div>
			</div>
		</div>
		<div class="col-md-12 col-lg-5 col-sm-12 col-12">
			<div class="widgets-holder2">
				<div class="search-form2">
					<form>
						<i class="fa fa-search"> </i>
						<input type="text" placeholder="Search notes" name="">
					</form>
				</div>
				<button data-toggle="modal" data-target="#modal-1" class="custom-btn2"> <i class="fa fa-plus"> </i> Add Note </button>
			</div>
		</div>
	</div>
</div>
<div class="block-element">
	<div class="row custom-row1">
		<div class="col-md-6 col-lg-3 col-sm-6 col-12 custom-pad1">
			<div class="notes-box">
				<div class="notes-box-img">
					<img src="{{asset('assets/images/book-new7.png')}}">
				</div>
				<div class="notes-box-desc">
					<h3 class="col-black1"> Love At First  </h3>
					<p> By Johm Ven </p>
				</div>
				<div class="notes-box-actions">
					<span> Last Edit May 10 2022 </span>
					<a href="notes-detail.html" class="custom-btn3"> View </a>  
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 col-sm-6 col-12 custom-pad1">
			<div class="notes-box">
				<div class="notes-box-img">
					<img src="{{asset('assets/images/book-new8.png')}}">
				</div>
				<div class="notes-box-desc">
					<h3 class="col-black1"> The Check List  </h3>
					<p> By Johm Ven </p>
				</div>
				<div class="notes-box-actions">
					<span> Last Edit May 10 2022 </span>
					<a href="notes-detail.html" class="custom-btn3"> View </a>   
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 col-sm-6 col-12 custom-pad1">
			<div class="notes-box">
				<div class="notes-box-img">
					<img src="{{asset('assets/images/book-new9.png')}}">
				</div>
				<div class="notes-box-desc">
					<h3 class="col-black1"> Twice Shy </h3>
					<p> By Johm Ven </p>
				</div>
				<div class="notes-box-actions">
					<span> Last Edit May 10 2022 </span>
					<a href="notes-detail.html" class="custom-btn3"> View </a>   
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 col-sm-6 col-12 custom-pad1">
			<div class="notes-box">
				<div class="notes-box-img">
					<img src="{{asset('assets/images/book-new10.png')}}">
				</div>
				<div class="notes-box-desc">
					<h3 class="col-black1"> Love At First  </h3>
					<p> By Johm Ven </p>
				</div>
				<div class="notes-box-actions">
					<span> Last Edit May 10 2022 </span>
					<a href="notes-detail.html" class="custom-btn3"> View </a> 
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 col-sm-6 col-12 custom-pad1">
			<div class="notes-box">
				<div class="notes-box-img">
					<img src="{{asset('assets/images/book-new11.png')}}">
				</div>
				<div class="notes-box-desc">
					<h3 class="col-black1"> Love At First  </h3>
					<p> By Johm Ven </p>
				</div>
				<div class="notes-box-actions">
					<span> Last Edit May 10 2022 </span>
					<a href="notes-detail.html" class="custom-btn3"> View </a> 
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 col-sm-6 col-12 custom-pad1">
			<div class="notes-box">
				<div class="notes-box-img">
					<img src="{{asset('assets/images/book-new12.png')}}">
				</div>
				<div class="notes-box-desc">
					<h3 class="col-black1"> The Check List  </h3>
					<p> By Johm Ven </p>
				</div>
				<div class="notes-box-actions">
					<span> Last Edit May 10 2022 </span>
					<a href="notes-detail.html" class="custom-btn3"> View </a> 
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 col-sm-6 col-12 custom-pad1">
			<div class="notes-box">
				<div class="notes-box-img">
					<img src="{{asset('assets/images/book-new7.png')}}">
				</div>
				<div class="notes-box-desc">
					<h3 class="col-black1"> Twice Shy </h3>
					<p> By Johm Ven </p>
				</div>
				<div class="notes-box-actions">
					<span> Last Edit May 10 2022 </span>
					<a href="notes-detail.html" class="custom-btn3"> View </a> 
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 col-sm-6 col-12 custom-pad1">
			<div class="notes-box">
				<div class="notes-box-img">
					<img src="{{asset('assets/images/book-new9.png')}}">
				</div>
				<div class="notes-box-desc">
					<h3 class="col-black1"> Love At First  </h3>
					<p> By Johm Ven </p>
				</div>
				<div class="notes-box-actions">
					<span> Last Edit May 10 2022 </span>
					<a href="notes-detail.html" class="custom-btn3"> View </a> 
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 col-sm-6 col-12 custom-pad1">
			<div class="notes-box">
				<div class="notes-box-img">
					<img src="{{asset('assets/images/book-new9.png')}}">
				</div>
				<div class="notes-box-desc">
					<h3 class="col-black1"> Love At First  </h3>
					<p> By Johm Ven </p>
				</div>
				<div class="notes-box-actions">
					<span> Last Edit May 10 2022 </span>
					<a href="notes-detail.html" class="custom-btn3"> View </a> 
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 col-sm-6 col-12 custom-pad1">
			<div class="notes-box">
				<div class="notes-box-img">
					<img src="{{asset('assets/images/book-new10.png')}}">
				</div>
				<div class="notes-box-desc">
					<h3 class="col-black1"> The Check List  </h3>
					<p> By Johm Ven </p>
				</div>
				<div class="notes-box-actions">
					<span> Last Edit May 10 2022 </span>
					<a href="notes-detail.html" class="custom-btn3"> View </a> 
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 col-sm-6 col-12 custom-pad1">
			<div class="notes-box">
				<div class="notes-box-img">
					<img src="{{asset('assets/images/book-new11.png')}}">
				</div>
				<div class="notes-box-desc">
					<h3 class="col-black1"> Twice Shy </h3>
					<p> By Johm Ven </p>
				</div>
				<div class="notes-box-actions">
					<span> Last Edit May 10 2022 </span>
					<a href="notes-detail.html" class="custom-btn3"> View </a> 
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 col-sm-6 col-12 custom-pad1">
			<div class="notes-box">
				<div class="notes-box-img">
					<img src="{{asset('assets/images/book-new12.png')}}">
				</div>
				<div class="notes-box-desc">
					<h3 class="col-black1"> Love At First  </h3>
					<p> By Johm Ven </p>
				</div>
				<div class="notes-box-actions">
					<span> Last Edit May 10 2022 </span>
					<a href="notes-detail.html" class="custom-btn3"> View </a> 
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 col-sm-6 col-12 custom-pad1">
			<div class="notes-box">
				<div class="notes-box-img">
					<img src="{{asset('assets/images/book-new7.png')}}">
				</div>
				<div class="notes-box-desc">
					<h3 class="col-black1"> Love At First  </h3>
					<p> By Johm Ven </p>
				</div>
				<div class="notes-box-actions">
					<span> Last Edit May 10 2022 </span>
					<a href="notes-detail.html" class="custom-btn3"> View </a> 
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 col-sm-6 col-12 custom-pad1">
			<div class="notes-box">
				<div class="notes-box-img">
					<img src="{{asset('assets/images/book-new8.png')}}">
				</div>
				<div class="notes-box-desc">
					<h3 class="col-black1"> The Check List  </h3>
					<p> By Johm Ven </p>
				</div>
				<div class="notes-box-actions">
					<span> Last Edit May 10 2022 </span>
					<a href="notes-detail.html" class="custom-btn3"> View </a> 
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 col-sm-6 col-12 custom-pad1">
			<div class="notes-box">
				<div class="notes-box-img">
					<img src="{{asset('assets/images/book-new9.png')}}">
				</div>
				<div class="notes-box-desc">
					<h3 class="col-black1"> Twice Shy </h3>
					<p> By Johm Ven </p>
				</div>
				<div class="notes-box-actions">
					<span> Last Edit May 10 2022 </span>
					<a href="notes-detail.html" class="custom-btn3"> View </a> 
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 col-sm-6 col-12 custom-pad1">
			<div class="notes-box">
				<div class="notes-box-img">
					<img src="{{asset('assets/images/book-new10.png')}}">
				</div>
				<div class="notes-box-desc">
					<h3 class="col-black1"> Love At First  </h3>
					<p> By Johm Ven </p>
				</div>
				<div class="notes-box-actions">
					<span> Last Edit May 10 2022 </span>
					<a href="notes-detail.html" class="custom-btn3"> View </a> 
				</div>
			</div>
		</div>
	</div>
</div>
@endsection