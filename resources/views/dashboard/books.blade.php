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
						<input type="text" placeholder="Search books" name="">
					</form>
				</div>
				<button data-toggle="modal" data-target="#modal-1" class="custom-btn2"> <i class="fa fa-plus"> </i> Add book </button>
			</div>
		</div>
	</div>
</div>
<div class="block-element m-b-30">
	<div class="block-element m-b-20">
		<div class="sec-head5">
			<h4> Recommended For You </h4>
		</div>
	</div>
	<div class="block-element">
		<div class="custom-slider2 arrows-2">
			<div class="books-box-wrapper">
				<div class="books-box2">
					<div class="books-box-image">
						<img src="{{asset('assets/images/book-new7.png')}}">
					</div>
					<div class="books-box-title">
						<div> Twice Shy </div>
						<div class="reviews"> 
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-off"> </i>   
							<b class="col-black"> (46) </b>   
						</div>
					</div>
					<div class="books-box-desc">
						<h6> By John Ven </h6>
						<p> Spent lounging on the beach, madly in love friend </p>
					</div>
				</div>
			</div>
			<div class="books-box-wrapper">
				<div class="books-box2">
					<div class="books-box-image">
						<img src="{{asset('assets/images/book-new8.png')}}">
					</div>
					<div class="books-box-title">
						<div> Love At First </div>
						<div class="reviews"> 
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-off"> </i>   
							<b class="col-black"> (46) </b>   
						</div>
					</div>
					<div class="books-box-desc">
						<h6> By John Ven </h6>
						<p> Spent lounging on the beach, madly in love friend </p>
					</div>
				</div>
			</div>
			<div class="books-box-wrapper">
				<div class="books-box2">
					<div class="books-box-image">
						<img src="{{asset('assets/images/book-new9.png')}}">
					</div>
					<div class="books-box-title">
						<div> The Check </div>
						<div class="reviews"> 
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-off"> </i>   
							<b class="col-black"> (46) </b>   
						</div>
					</div>
					<div class="books-box-desc">
						<h6> By John Ven </h6>
						<p> Spent lounging on the beach, madly in love friend </p>
					</div>
				</div>
			</div>
			<div class="books-box-wrapper">
				<div class="books-box2">
					<div class="books-box-image">
						<img src="{{asset('assets/images/book-new10.png')}}">
					</div>
					<div class="books-box-title">
						<div> Love At First </div>
						<div class="reviews"> 
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-off"> </i>   
							<b class="col-black"> (46) </b>   
						</div>
					</div>
					<div class="books-box-desc">
						<h6> By John Ven </h6>
						<p> Spent lounging on the beach, madly in love friend </p>
					</div>
				</div>
			</div>
			<div class="books-box-wrapper">
				<div class="books-box2">
					<div class="books-box-image">
						<img src="{{asset('assets/images/book-new11.png')}}">
					</div>
					<div class="books-box-title">
						<div> The Check </div>
						<div class="reviews"> 
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-off"> </i>   
							<b class="col-black"> (46) </b>   
						</div>
					</div>
					<div class="books-box-desc">
						<h6> By John Ven </h6>
						<p> Spent lounging on the beach, madly in love friend </p>
					</div>
				</div>
			</div>
			<div class="books-box-wrapper">
				<div class="books-box2">
					<div class="books-box-image">
						<img src="{{asset('assets/images/book-new12.png')}}">
					</div>
					<div class="books-box-title">
						<div> Twice Shy </div>
						<div class="reviews"> 
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-off"> </i>   
							<b class="col-black"> (46) </b>   
						</div>
					</div>
					<div class="books-box-desc">
						<h6> By John Ven </h6>
						<p> Spent lounging on the beach, madly in love friend </p>
					</div>
				</div>
			</div>
			<div class="books-box-wrapper">
				<div class="books-box2">
					<div class="books-box-image">
						<img src="{{asset('assets/images/book-new8.png')}}">
					</div>
					<div class="books-box-title">
						<div> Twice Shy </div>
						<div class="reviews"> 
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-off"> </i>   
							<b class="col-black"> (46) </b>   
						</div>
					</div>
					<div class="books-box-desc">
						<h6> By John Ven </h6>
						<p> Spent lounging on the beach, madly in love friend </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="block-element m-b-30">
	<div class="block-element m-b-20">
		<div class="sec-head5">
			<h4> Latest Summaries </h4>
		</div>
	</div>
	<div class="block-element">
		<div class="custom-slider2 arrows-2">
			<div class="books-box-wrapper">
				<div class="books-box2">
					<div class="books-box-image">
						<img src="{{asset('assets/images/book-new7.png')}}">
					</div>
					<div class="books-box-title">
						<div> Twice Shy </div>
						<div class="reviews"> 
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-off"> </i>   
							<b class="col-black"> (46) </b>   
						</div>
					</div>
					<div class="books-box-desc">
						<h6> By John Ven </h6>
						<p> Spent lounging on the beach, madly in love friend </p>
					</div>
				</div>
			</div>
			<div class="books-box-wrapper">
				<div class="books-box2">
					<div class="books-box-image">
						<img src="{{asset('assets/images/book-new8.png')}}">
					</div>
					<div class="books-box-title">
						<div> Love At First </div>
						<div class="reviews"> 
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-off"> </i>   
							<b class="col-black"> (46) </b>   
						</div>
					</div>
					<div class="books-box-desc">
						<h6> By John Ven </h6>
						<p> Spent lounging on the beach, madly in love friend </p>
					</div>
				</div>
			</div>
			<div class="books-box-wrapper">
				<div class="books-box2">
					<div class="books-box-image">
						<img src="{{asset('assets/images/book-new9.png')}}">
					</div>
					<div class="books-box-title">
						<div> The Check </div>
						<div class="reviews"> 
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-off"> </i>   
							<b class="col-black"> (46) </b>   
						</div>
					</div>
					<div class="books-box-desc">
						<h6> By John Ven </h6>
						<p> Spent lounging on the beach, madly in love friend </p>
					</div>
				</div>
			</div>
			<div class="books-box-wrapper">
				<div class="books-box2">
					<div class="books-box-image">
						<img src="{{asset('assets/images/book-new10.png')}}">
					</div>
					<div class="books-box-title">
						<div> Love At First </div>
						<div class="reviews"> 
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-off"> </i>   
							<b class="col-black"> (46) </b>   
						</div>
					</div>
					<div class="books-box-desc">
						<h6> By John Ven </h6>
						<p> Spent lounging on the beach, madly in love friend </p>
					</div>
				</div>
			</div>
			<div class="books-box-wrapper">
				<div class="books-box2">
					<div class="books-box-image">
						<img src="{{asset('assets/images/book-new11.png')}}">
					</div>
					<div class="books-box-title">
						<div> The Check </div>
						<div class="reviews"> 
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-off"> </i>   
							<b class="col-black"> (46) </b>   
						</div>
					</div>
					<div class="books-box-desc">
						<h6> By John Ven </h6>
						<p> Spent lounging on the beach, madly in love friend </p>
					</div>
				</div>
			</div>
			<div class="books-box-wrapper">
				<div class="books-box2">
					<div class="books-box-image">
						<img src="{{asset('assets/images/book-new12.png')}}">
					</div>
					<div class="books-box-title">
						<div> Twice Shy </div>
						<div class="reviews"> 
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-off"> </i>   
							<b class="col-black"> (46) </b>   
						</div>
					</div>
					<div class="books-box-desc">
						<h6> By John Ven </h6>
						<p> Spent lounging on the beach, madly in love friend </p>
					</div>
				</div>
			</div>
			<div class="books-box-wrapper">
				<div class="books-box2">
					<div class="books-box-image">
						<img src="{{asset('assets/images/book-new9.png')}}">
					</div>
					<div class="books-box-title">
						<div> Twice Shy </div>
						<div class="reviews"> 
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-off"> </i>   
							<b class="col-black"> (46) </b>   
						</div>
					</div>
					<div class="books-box-desc">
						<h6> By John Ven </h6>
						<p> Spent lounging on the beach, madly in love friend </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="block-element m-b-30">
	<div class="block-element m-b-20">
		<div class="sec-head5">
			<h4> Editor’s Picks </h4>
		</div>
	</div>
	<div class="block-element">
		<div class="custom-slider2 arrows-2">
			<div class="books-box-wrapper">
				<div class="books-box2">
					<div class="books-box-image">
						<img src="{{asset('assets/images/book-new7.png')}}">
					</div>
					<div class="books-box-title">
						<div> Twice Shy </div>
						<div class="reviews"> 
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-off"> </i>   
							<b class="col-black"> (46) </b>   
						</div>
					</div>
					<div class="books-box-desc">
						<h6> By John Ven </h6>
						<p> Spent lounging on the beach, madly in love friend </p>
					</div>
				</div>
			</div>
			<div class="books-box-wrapper">
				<div class="books-box2">
					<div class="books-box-image">
						<img src="{{asset('assets/images/book-new8.png')}}">
					</div>
					<div class="books-box-title">
						<div> Love At First </div>
						<div class="reviews"> 
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-off"> </i>   
							<b class="col-black"> (46) </b>   
						</div>
					</div>
					<div class="books-box-desc">
						<h6> By John Ven </h6>
						<p> Spent lounging on the beach, madly in love friend </p>
					</div>
				</div>
			</div>
			<div class="books-box-wrapper">
				<div class="books-box2">
					<div class="books-box-image">
						<img src="{{asset('assets/images/book-new9.png')}}">
					</div>
					<div class="books-box-title">
						<div> The Check </div>
						<div class="reviews"> 
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-off"> </i>   
							<b class="col-black"> (46) </b>   
						</div>
					</div>
					<div class="books-box-desc">
						<h6> By John Ven </h6>
						<p> Spent lounging on the beach, madly in love friend </p>
					</div>
				</div>
			</div>
			<div class="books-box-wrapper">
				<div class="books-box2">
					<div class="books-box-image">
						<img src="{{asset('assets/images/book-new10.png')}}">
					</div>
					<div class="books-box-title">
						<div> Love At First </div>
						<div class="reviews"> 
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-off"> </i>   
							<b class="col-black"> (46) </b>   
						</div>
					</div>
					<div class="books-box-desc">
						<h6> By John Ven </h6>
						<p> Spent lounging on the beach, madly in love friend </p>
					</div>
				</div>
			</div>
			<div class="books-box-wrapper">
				<div class="books-box2">
					<div class="books-box-image">
						<img src="{{asset('assets/images/book-new11.png')}}">
					</div>
					<div class="books-box-title">
						<div> The Check </div>
						<div class="reviews"> 
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-off"> </i>   
							<b class="col-black"> (46) </b>   
						</div>
					</div>
					<div class="books-box-desc">
						<h6> By John Ven </h6>
						<p> Spent lounging on the beach, madly in love friend </p>
					</div>
				</div>
			</div>
			<div class="books-box-wrapper">
				<div class="books-box2">
					<div class="books-box-image">
						<img src="{{asset('assets/images/book-new12.png')}}">
					</div>
					<div class="books-box-title">
						<div> Twice Shy </div>
						<div class="reviews"> 
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-off"> </i>   
							<b class="col-black"> (46) </b>   
						</div>
					</div>
					<div class="books-box-desc">
						<h6> By John Ven </h6>
						<p> Spent lounging on the beach, madly in love friend </p>
					</div>
				</div>
			</div>
			<div class="books-box-wrapper">
				<div class="books-box2">
					<div class="books-box-image">
						<img src="{{asset('assets/images/book-new8.png')}}">
					</div>
					<div class="books-box-title">
						<div> Twice Shy </div>
						<div class="reviews"> 
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-onn"> </i>   
							<i class="fa fa-star star-off"> </i>   
							<b class="col-black"> (46) </b>   
						</div>
					</div>
					<div class="books-box-desc">
						<h6> By John Ven </h6>
						<p> Spent lounging on the beach, madly in love friend </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection