@extends('dashboard.layouts.master')

@section('content')
<div class="block-element m-b-30">
	<div class="row center-row1">
		<div class="col-md-12 col-lg-7 col-sm-12 col-12">
			<div class="sec-head5">
				<h4> Notes Detail </h4>
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
			</div>
		</div>
	</div>
</div>
<div class="block-element m-b-30">
	<div class="notes-detail-main">
		<div class="notes-detail-image">
			<img src="{{asset('assets/images/book-new10.png')}}">
		</div>
		<div class="notes-detail-title">
			<h4 class="col-black"> The Check List <span class="col-pink"> Notes  </span> </h4>
			<p class="col-black"> Book Author By John Ven </p>
			<span class="notes-tag1"> Total Notes: 12 </span>
		</div>
	</div>
</div>
<div class="block-element">
	<div class="block-element m-b-30">
		<div class="tabs-handler1">
			<ul class="nav nav-tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"> Introduction </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"> Blooms </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"> Conclusion </a>
				</li>
			</ul>
		</div>
	</div>
	<div class="block-element m-b-20">
		<div class="buttons-holder2">
			<a data-toggle="modal" data-target="#modal-1" class="custom-btn2 equal-btn1"> <i class="fa fa-plus"> </i> Add New Note  </a>
			<a href="" class="custom-btn2 equal-btn1">  Create Quiz </a>
		</div>
	</div>
	<div class="block-element">
		<div class="tabs-all-content">
			<div class="tab-content">
				<div class="tab-pane active" id="tabs-1" role="tabpanel">
					<div class="custom-block2">
						<div class="block-element m-b-20">
							<div class="notes-part">
								<div class="notes-actions2">
									<a href="" class="bg-pink action-btn1" > <i class="fa fa-pencil-alt"> </i> </a>
									<a href="" class="bg-black action-btn1"  > <i class="fa fa-times"> </i> </a>
								</div>
								<div class="notes-writings">
									<input class="col-pink notes-value1 m-b-10" type="text" value="Exciting Line" name=""> 
									<textarea class="col-grey notes-value2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.  </textarea>
								</div>
							</div>
						</div>
						<div class="block-element m-b-20">
							<div class="notes-part">
								<div class="notes-actions2">
									<a href="" class="bg-pink action-btn1" > <i class="fa fa-pencil-alt"> </i> </a>
									<a href="" class="bg-black action-btn1"  > <i class="fa fa-times"> </i> </a>
								</div>
								<div class="notes-writings">
									<input class="col-pink notes-value1 m-b-10" type="text" value="Exciting Line" name=""> 
									<textarea class="col-grey notes-value2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.  </textarea>
								</div>
							</div>
						</div>
						<div class="block-element m-b-30">
							<div class="notes-part">
								<div class="notes-actions2">
									<a href="" class="bg-pink action-btn1" > <i class="fa fa-pencil-alt"> </i> </a>
									<a href="" class="bg-black action-btn1"  > <i class="fa fa-times"> </i> </a>
								</div>
								<div class="notes-writings">
									<input class="col-pink notes-value1 m-b-10" type="text" value="Exciting Line" name=""> 
									<textarea class="col-grey notes-value2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.  </textarea>
								</div>
							</div>
						</div>
						<div class="block-element">
							<div class="buttons-holder3">
								<button class="custom-btn10 equal-btn2"> Save </button>
								<button class="custom-btn2 equal-btn2"> Cancel  </button>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="tabs-2" role="tabpanel">
					<div class="custom-block2">
						<h3> No Data At This Moment </h3>
					</div>
				</div>
				<div class="tab-pane" id="tabs-3" role="tabpanel">
					<div class="custom-block2">
						<h3> No Data At This Moment </h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection