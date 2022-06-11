@extends('dashboard.layouts.master')

@section('content')

<div class="block-element">
	<div class="custom-block5">

		<div class="row">

			<div class="col-md-6 col-lg-6 col-sm-12 col-12">
				<div class="avatar-upload">
					<h5 class=""> Upload Team Logo </h5>
					<div class="avatar-edit">
						<input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
						<label for="imageUpload"> <i class="fa fa-pencil-alt"> </i> </label>
					</div>
					<div class="avatar-preview">
						<div id="imagePreview" style="background-image: url();">
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-12 col-lg-12 col-sm-12 col-12 m-b-20">
				<div class="form-field9">
					<label>Organization Name</label>   
					<input type="text" placeholder="Organization Name" name="" class="field-style9">
				</div>
			</div>

			<div class="col-md-12 col-lg-12 col-sm-12 col-12 m-b-20">
				<div class="form-field9">
					<label>User Name </label>   
					<input type="text" placeholder="Brandon Timinsky" name="" class="field-style9">
				</div>
			</div>

			<div class="col-md-12 col-lg-12 col-sm-12 col-12 m-b-20">
				<div class="form-field9">
					<label> Password </label>  
					<input type="password" id="txtPassword" class="field-style9" name="txtPassword" placeholder="*******">
					<button type="button" id="btnToggle" class="toggle"><i id="eyeIcon" class="fa fa-eye"></i></button>
				</div>
			</div>

			<div class="col-md-12 col-lg-12 col-sm-12 col-12 m-b-20">
				<div class="form-field9">
					<label> Change Password </label>  
					<input type="password" id="txtPassword2" class="field-style9" name="txtPassword" placeholder="*******">
					<button type="button" id="btnToggle2" class="toggle"><i id="eyeIcon2" class="fa fa-eye"></i></button>
				</div>
			</div>


			<div class="col-md-12 col-lg-12 col-sm-12 col-12 m-b-20">
				<div class="form-field9">
					<label> SignUp Date  </label>   
					<input type="date" name="" class="field-style9">
				</div>
			</div>

			<div class="col-md-12 col-lg-12 col-sm-12 col-12 m-b-20">
				<div class="form-field9">
					<label> Renewal Date </label>   
					<input type="date"   name="" class="field-style9">
				</div>
			</div>


			<div class="col-md-12 col-lg-12 col-sm-12 col-12 m-b-20">
				<div class="form-field9">
					<label> Renewal Subscription </label>   
					<input type="text" placeholder="Renewal Subscription" name="" class="field-style9">
				</div>
			</div>



			<div class="col-md-12 col-lg-12 col-sm-12 col-12 m-b-20">
				<div class="buttons-holder5">
					<button class="custom-btn10"> Edit </button>
					<button class="custom-btn14"> Save </button>
				</div>
			</div>


		</div>
	</div>
</div>
@endsection