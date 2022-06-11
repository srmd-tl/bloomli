@extends('dashboard.layouts.master')

@section('content')
<div class="block-element m-b-30">
	<div class="row center-row1">
		<div class="col-md-12 col-lg-12 col-sm-12 col-12">
			<div class="widgets-holder2">
				<button data-toggle="modal" data-target="#modal-1" class="custom-btn2"> <i class="fa fa-plus"> </i> Create Task </button>
			</div>
		</div>
	</div>
</div>
<div class="block-element">
	<div class="tasks-table">
		<table>
			<tbody>
				<tr>
					<td class="image-col1">
						<img src="{{ asset('assets/images/book-new10.png') }}"> 
						<b class="col-black"> Task 1 </b>
						<label class="col-black"> Book to read or listen to: <span class="col-pink"> Power Up </span> </label>
						<sub class="col-black"> A quiz to Take: </sub>
						<sub class="col-grey3"> Power Up - Official </sub>
					</td>
					<td class="status-col text-center"> <b class="col-black"> Status: </b>
						<span class="col-pink"> Active </span> 
					</td>
					<td class="progress-col">
						<h2 class="sec-1 col-black">Target Quiz Score</h2>
						<div class="progress progress-circle" data-percentage="50">
							<span class="progress-left">
								<span class="progress-bar"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar"></span>
							</span>
							<div class="progress-value">
								<div>
									50% 
								</div>
							</div>
						</div>
					</td>
					<td class="status-col text-left sec-2">
						<b class="col-black"> Completion Date: </b>
						<span class="col-grey3"> 8 June 2022  </span><br>
						<span class="col-grey3"> (7 day left)  </span>
					</td>
					<td class="status-col text-left">
						<b class="col-black"> Incentive: </b>
						<span class="col-grey3"> 10 Points </span>
					</td>
					<td class="actions-col text-left">
						<a href="" class="col-blue1 m-b-10 text-center"> <i class="fa fa-pencil-alt"> </i> </a>
						<a href="" class="col-red text-center"> <i class="fa fa-trash"> </i> </a>
					</td>
				</tr>

			</tbody>
		</table>
	</div>
</div>

<!-- Create Tasks Popup Starts Here -->
<div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document" style="max-width: 560px;">
		<div class="modal-content popup-wrapper">
			<div class="popup-head text-center no-margin no-pad">
				<button type="button" class="close close-btn1" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button> 
			</div>
			<div class="block-element2">
				<div class="block-element2 new-note-wrapper">
					<div class="book-new-name text-left">
						<h3> Book to Read or Listen </h3>
					</div>
					<div class="form-search4 m-b-15">
						<form>
							<i class="fa fa-search"> </i>   
							<input type="text" placeholder="Search For Book" name="">
						</form>
					</div>
					<div class="form-field15 m-b-15">
						<label> Target Quiz Score </label>
						<select  class="field-style15">
							<option> 10% </option>
							<option> 20% </option>
							<option> 30% </option>
							<option> 40% </option>
							<option> 50% </option>
							<option> 60% </option>
							<option> 70% </option>
							<option> 80% </option>
							<option> 90% </option>
							<option> 100% </option>
						</select>
					</div>
					<div class="form-field15 m-b-15">
						<label> Completion Date </label>
						<input class="field-style15" type="date" name="">
					</div>
					<div class="form-field15 m-b-15">
						<label> Incentive </label>
						<select  class="field-style15">
							<option> 10 Points </option>
							<option> 20 Points </option>
							<option> 30 Points </option>
							<option> 40 Points </option>
							<option> 50 Points </option>
							<option> 60 Points </option>
							<option> 70 Points </option>
							<option> 80 Points </option>
							<option> 90 Points </option>
							<option> 100 Points </option>
						</select>
					</div>
					<div class="form-field15 m-b-30">
						<label> Send This to... </label>
						<select  class="field-style15">
							<option> Entire Team </option>
							<optgroup label="Your Group">
								<option> Accounts team </option>
								<option> Sports lovers </option>
								<option> Spiritual </option>
								<option> Confidence </option>
							</optgroup>
						</select>
					</div>
				</div>
				<div class="block-element2 m-t-20">
					<div class="buttons-holder1">
						<button class="custom-btn6"> Cancel  </button>
						<button class="custom-btn7"> Create </button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Create Tasks Popup Ends Here -->
@endsection