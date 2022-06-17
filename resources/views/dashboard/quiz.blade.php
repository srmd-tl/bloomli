@extends('dashboard.layouts.master')

@section('content')
<div class="block-element m-b-30">
	<div class="row center-row1">
		<div class="col-md-12 col-lg-7 col-sm-12 col-12">
			<div class="sec-head4" style="margin-bottom: 0px;">
				<h4 style="margin: 14px 0px 0px 0px; font-size: 16px;color: #5a5a5a;"> Official Quiz = <img style="vertical-align: middle;display: inline-block; margin-top: -5px;width:30px"
					src="{{asset('assets/images/featured-tag.png')}}"> </h4>
				</div> 
			</div>
			<div class="col-md-12 col-lg-5 col-sm-12 col-12">
				<div class="widgets-holder2">
					<div class="search-form2">
						<form>
							<i class="fa fa-search"> </i>
							<input type="text" placeholder="Search quiz" name="">
						</form>
					</div>
					<button  data-toggle="modal" data-target="#modal-2" class="custom-btn2"> <i class="fa fa-plus"> </i> Create Quiz </button>
				</div>
			</div>
		</div>
	</div>
	<div class="block-element">
		<div class="block-element">
			<div class="row">	
				@foreach($quizzes as $quiz)
				<div class="col-md-6 col-lg-3 col-sm-6 col-12">
					<div class="books-box-wrapper quiz-box quiz-featured">
						<img class="featured-tag" src="{{asset('assets/images/featured-tag.png')}}">
						<div class="books-box2">
							<div class="books-box-image">
								<img src="{{asset('assets/images/book-new7.png')}}">
							</div>
							<div class="books-box-title">
								<div> {{$quiz->title}} </div>
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
								<h6> By {{$quiz->user->first_name ?? ""}} {{$quiz->user->last_name ?? ""}}</h6>
								<p>{{$quiz->question ?? ""}}</p>
								<a data-toggle="modal" data-target="#modal-1" class="edit-btn1"> Edit </a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- Edit Quiz Popup Starts Here -->
	<div class="modal modal-type2 fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document" style="max-width: 640px;">
			<div class="modal-content popup-wrapper">
				<div class="popup-head2 text-center">
					<h4> Twice Shy </h4>
					<button type="button" class="close close-btn1" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button> 
				</div>
				<div class="tabs-handler2">
					<div class="tabs-handler2-head">
						<h4> Create New Quiz </h4>
					</div>
					<div class="tabs-handler2-content">
						<div class="step-box active">
							<span> </span>
							<p> Add Question </p>
							<h5 class="line-1"> . </h5>
						</div>
						<div class="step-box">
							<span> </span>
							<p> Schedule Time  </p>
						</div>
					</div>
				</div>
				<div class="block-element2 m-b-30" style="padding:0px 30px">
					<div class="output-notes m-b-15">
						<div class="notes-actions2">
							<a href="" class="bg-pink action-btn1" > <i class="fa fa-pencil-alt"> </i> </a>
							<a href="" class="bg-black action-btn1"  > <i class="fa fa-times"> </i> </a>
						</div>
						<div class="notes-q">
							<h5> <b class="bg-black col-white ques-tag1"> Q:1 </b> Which ‘Saturday Night Live’ Character does john reference?  </h5>
						</div>
						<div class="notes-a">
							<p> <b class="bg-pink col-white ques-tag1"> Ans </b> Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's standard dummy </p>
						</div>
					</div>
					<div class="output-notes m-b-15">
						<div class="notes-actions2">
							<a href="" class="bg-pink action-btn1" > <i class="fa fa-pencil-alt"> </i> </a>
							<a href="" class="bg-black action-btn1"  > <i class="fa fa-times"> </i> </a>
						</div>
						<div class="notes-q">
							<h5> <b class="bg-black col-white ques-tag1"> Q:1 </b> Which ‘Saturday Night Live’ Character does john reference?  </h5>
						</div>
						<div class="notes-a">
							<p> <b class="bg-pink col-white ques-tag1"> Ans </b> Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's standard dummy </p>
						</div>
					</div>
					<div class="output-notes">
						<div class="notes-actions2">
							<a href="" class="bg-pink action-btn1" > <i class="fa fa-pencil-alt"> </i> </a>
							<a href="" class="bg-black action-btn1"  > <i class="fa fa-times"> </i> </a>
						</div>
						<div class="notes-q">
							<h5> <b class="bg-black col-white ques-tag1"> Q:1 </b> Which ‘Saturday Night Live’ Character does john reference?  </h5>
						</div>
						<div class="notes-a">
							<div class="checkbox-parent1">
								<div>
									<label> <input type="checkbox" name=""> 20 % </label>
								</div>
								<div>
									<label> <input type="checkbox" name=""> 20 % </label>
								</div>
								<div>
									<label> <input type="checkbox" name=""> 20 % </label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="block-element2">
					<div class="buttons-holder4">
						<a   class="custom-btn12 opener-3"> <i class="fa fa-plus"> </i> Add Q&A </a>  
						<a   class="custom-btn12 opener-4"> <i class="fa fa-plus"> </i> Add MCQs </a>   
					</div>
				</div>
				<!-- Q&A Content -->
				<div  class="block-element2 content-open3">
					<form>
						<div class="block-element2">
							<div class="question-form">
								<div class="form-field6">
									<textarea class="field-style6" placeholder="Write Question....."></textarea>   
								</div>
								<div class="form-field6">
									<textarea class="field-style6" placeholder="Write Answer....."></textarea>   
								</div>
								<div class="form-field6">
									<input class="field-style6" type="text" placeholder="Hint" name=""> 
									<span class="info-tag2"> Optional </span>
								</div>
							</div>
						</div>
						<div class="block-element2 m-t-20">
							<div class="buttons-holder1">
								<button class="custom-btn6"> Cancel  </button>
								<button class="custom-btn7"> Create </button>
							</div>
						</div>
					</form>
				</div>
				<!-- MCQS Content -->
				<div  class="block-element2 content-open4">
					<div class="block-element2">
						<form>
							<div class="mcqs-form">
								<div class="custom-border2">

									<div class="notes-q">
										<h5> <b class="bg-black col-white ques-tag1"> Q:1 </b> Which ‘Saturday Night Live’ Character does john reference?  </h5>
									</div>
								</div>
								<div class="custom-border2">
									<div class="checkbox-parent2">
										<label> <input type="checkbox" name=""> Johnny Depp </label>   
									</div>
								</div>
								<div class="custom-border2">
									<div class="checkbox-parent2">
										<label> <input type="checkbox" name=""> Mark </label>   
									</div>
								</div>
								<div class="block-element2">
									<button class="add-option-btn"> <i class="fa fa-plus"> </i> Add Option </button>   
								</div>
							</div>
						</form>
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
	<!-- Edit Quiz Popup Ends Here -->
	<!-- Add Quiz Popup Starts Here -->
	<div class="modal modal-type2 fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document" style="max-width: 640px;">
			<div class="modal-content popup-wrapper popup-wrapper2">
				<div class="custom-tab1">
					<form action="{{route('quiz.create')}}" method="post">
						@csrf	
						<div class="popup-head2 text-center">
							<div class="add-group-name-field">
								<input class="field-style1" type="text" placeholder="Add Your Title" 
									name="title"
					                value="{{ old('title') }}"
								>
								<span class="text-danger p-1">{{ $errors->first('title') }}</span>
							</div>
							<button type="button" class="close close-btn1" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button> 
						</div>
						<div class="tabs-handler2">
							<div class="tabs-handler2-head">
								<h4> Create New Quiz </h4>
							</div>
							<div class="tabs-handler2-content">
								<div class="step-box active">
									<span> </span>
									<p> Add Question </p>
									<h5 class="line-1"> . </h5>
								</div>
								<div class="step-box">
									<span> </span>
									<p> Schedule Time  </p>
								</div>
							</div>
						</div>
						<div class="block-element2">
							<div class="buttons-holder4">
								<a class="custom-btn12 opener-3" onclick="setQuizType('Q&A')">
									<i class="fa fa-plus"> </i> Add Q&A
								</a>  
								<a class="custom-btn12 opener-4" onclick="setQuizType('MCQs')"> 
									<i class="fa fa-plus"> </i> Add MCQs 
								</a>
								<input type="hidden" name="quiz_type" >   
							</div>
						</div>
						<!-- Q&A Content -->
						<div   class="block-element2 content-open3">
							<div class="block-element2">
								<div class="question-form">
									<div class="form-field6">
										<textarea
										name="question1"
										class="field-style6"
										placeholder="Write Question....."
										></textarea>   
									</div>
									<div class="form-field6">
										<textarea
										name="answer1"
										class="field-style6" placeholder="Write Answer....."></textarea>   
									</div>
									<div class="form-field6">
										<input class="field-style6" type="text" placeholder="Hint" name="hint"> 
										<span class="info-tag2"> Optional </span>
									</div>
								</div>
							</div>

							<div class="block-element2 m-t-20">
								<div class="buttons-holder1">
									<button type='button' class="custom-btn6" > Cancel </button>
									<button
									type='submit'
									class="custom-btn7"
									onclick="submitForm(this.form)"
									> Create </button>
								</div>
							</div>
						</div>
						<!-- MCQS Content -->
						<div  class="block-element2 content-open4">
							<div class="block-element2">
								<div class="mcqs-form">
									<div class="custom-border2">
										<div class="notes-q">
											<h5> <b class="bg-black col-white ques-tag1"> Q:1 </b>
												<textarea
												name="question2"
												class="field-style6"
												placeholder="Which ‘Saturday Night Live’ Character does john reference?"
												></textarea>
											</h5>
										</div>
									</div>

									<div class="form-field6">
										<input
										class="field-style6" type="text"
										placeholder="Mark" name="option[]"
										> 
									</div>

									<div class="block-element2">
										<button class="add-option-btn"> <i class="fa fa-plus"> </i> Add Option </button>   
									</div>
								</div>
							</div>

							<div class="block-element2 m-t-20">
								<div class="buttons-holder1">
									<button type='button' class="custom-btn6" > Cancel </button>
									<button
									type='submit'
									class="custom-btn7"
									onclick="submitForm(this.form)"
									> Create </button>
								</div>
							</div>


						</div>
						<div class="block-element2 m-t-20">
							<div class="buttons-holder1">
								<button type="button" class="custom-btn7 opener-5"> Continue </button>
							</div>
						</div>
					</form>
				</div>
				<div class="custom-tab2">
					<div class="popup-head2 text-center">
						<h4> Twice Shy </h4>
						<button type="button" class="close close-btn1" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button> 
					</div>
					<div class="tabs-handler2">
						<div class="tabs-handler2-head">
							<h4> Create New Quiz </h4>
						</div>
						<div class="tabs-handler2-content">
							<div class="step-box active">
								<span> </span>
								<p> Add Question </p>
								<h5 class="line-1"> . </h5>
							</div>
							<div class="step-box active">
								<span> </span>
								<p> Schedule Time  </p>
							</div>
						</div>
					</div>
					<div class="block-element2">
						<form>
							<div class="schedule-form">
								<div class="form-field7">
									<select class="field-style7">
										<option> Select Time Zone </option>
										<option> Select Time Zone </option>
										<option> Select Time Zone </option>
									</select>
								</div>
								<div class="block-element2">
									<div class="checkbox-parent3">
										<label> Random Time <input type="radio" name="time-selection"> </label>   
										<span class="info-tag3 col-pink"> (You will be Quizzed randomly between 7am - 8 pm) </span>
									</div>
								</div>
								<div class="block-element2">
									<div class="checkbox-parent3">
										<label> Specific Time <input type="radio" name="time-selection"> </label>   
									</div>
								</div>
								<div class="form-field7">
									<select class="field-style7">
										<option> Select Date </option>
										<option> Select Date </option>
										<option> Select Date </option>
									</select>
								</div>
								<div class="form-field8 m-b-15">
									<span class="info-tag4"> Select Time </span>
									<input id="time-field" type="time" class="field-style8" value="now" name="">  
								</div>
								<script type="text/javascript">
									$(function(){     
										var d = new Date(),        
										h = d.getHours(),
										m = d.getMinutes();
										if(h < 10) h = '0' + h; 
										if(m < 10) m = '0' + m; 
										$('#time-field').each(function(){ 
											$(this).attr({'value': h + ':' + m});
										});
									});
								</script>
								<div class="form-field7">
									<select class="field-style7">
										<option> Repeat </option>
										<option> Repeat </option>
										<option> Repeat </option>
									</select>
								</div>
								<div class="block-element2">
									<button class="custom-btn13 m-b-10"> Add To my Quiz </button>   
									<button class="custom-btn14"> Add To BOOMI Quiz </button>   
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Edit Quiz Popup Ends Here -->

	<script type="text/javascript">
		function setQuizType(type) {
			$("input[name='quiz_type']").val(type);
		}
		// function submitForm(object) {
		// 	// console.log("my => ", object)
		// 	// console.log("action => ", object.action)
		// 	// console.log("method => ", object.method)
		// 	// console.log("formdata => ", $(object).serializeArray())
		// 	// var formData = new FormData(someFormElement);
		// 	// console.log("formdata => ", new FormData(object))



		// 	var request = new XMLHttpRequest();
		// 	request.open(object.method, object.action);
		// 	request.onreadystatechange = function() {//Call a function when the state changes.
		// 	    // if(request.readyState == 4 && request.status == 200) {
		// 	    //     alert(request.responseText);
		// 	    // }
		// 	    console.log("Idhar hen hum")
		// 	}
		// 	request.send(new FormData(object));


		// 	// var http = new XMLHttpRequest();


		// 	// var params = 'orem=ipsum&name=binny';
		// 	// http.open('POST', url, true);

		// 	// //Send the proper header information along with the request
		// 	// http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

		// 	// http.onreadystatechange = function() {//Call a function when the state changes.
		// 	//     if(http.readyState == 4 && http.status == 200) {
		// 	//         alert(http.responseText);
		// 	//     }
		// 	// }
		// 	// http.send(params);

		// }
	</script>
	@endsection