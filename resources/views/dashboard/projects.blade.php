@extends('dashboard.layouts.master')

@section('content')
<div class="block-element m-b-30">
	<div class="row center-row1">
		<div class="col-md-12 col-lg-12 col-sm-12 col-12">
			<div class="widgets-holder2">
				<button data-toggle="modal" data-target="#modal-1" class="custom-btn2"> <i class="fa fa-plus"> </i> Create Project </button>
			</div>
		</div>
	</div>
</div>


<div class="block-element">
	<div class="row">
		<!-- Project Box 1 Starts Here -->
		<div class="col-md-6 col-lg-4 col-sm-6 col-12">
			<div class="project-box">
				<div class="project-head">
					<h4 class="col-pink"> Project 1 </h4>
					<img src="{{asset('assets/images/line-1.png')}}">
				</div>
				<div class="project-table">
					<table>
						<tbody>
							<tr>
								<th> -Project name :   </th>
								<td> Leaders </td>
							</tr>
							<tr>
								<th>  -Deadline :   </th>
								<td> 5th Sept 2022 </td>
							</tr>
							<tr>
								<th> -Project Start :  </th>
								<td>  1st Jan 2022 </td>
							</tr>
							<tr>
								<th> -Objectives : </th>
								<td> build leadership skills </td>
							</tr>
							<tr>
								<th>  -Goal : </th>
								<td> Understand & Develop 5 Core leadership skills </td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="project-tags">
					<div class="tabs-handler3 task-handler1">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-1" role="tab">Task 1</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab">Task 2</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab">Task 3</a>
							</li>
						</ul>
					</div>
					<!-- Tab panes -->
					<div class="tab-content tab-content3">
						<div role="tabpanel" class="tab-pane fade" id="tab-1">
							<div class="task-table">
								<a class="close-tab"  > <i class="fa fa-times"> </i> </a>   
								<table>
									<tbody>
										<tr>
											<th> TASK NAME : </th>
											<td> leadership </td>
										</tr>
										<tr>
											<th> GROUP NAME : </th>
											<td> Finance </td>
										</tr>
										<tr>
											<th> BOOK NAME : </th>
											<td> Rich Dad Poor Dad </td>
										</tr>
										<tr>
											<th> SELECT QUIZ : </th>
											<td> Rich Dad Poor Dad (Official) </td>
										</tr>
										<tr>
											<th> TARGET QUIZ SCORE :  </th>
											<td> 60% </td>
										</tr>
										<tr>
											<th> Completion time : </th>
											<td> 12th May 2022 </td>
										</tr>
										<tr>
											<th> INCENTIVE :  </th>
											<td> 10 points </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab-2">
							<div class="task-table">
								<a class="close-tab"  > <i class="fa fa-times"> </i> </a>  
								<table>
									<tbody>
										<tr>
											<th> TASK NAME : </th>
											<td> leadership </td>
										</tr>
										<tr>
											<th> Completion time : </th>
											<td> 12th May 2022 </td>
										</tr>
										<tr>
											<th> INCENTIVE :  </th>
											<td> 10 points </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab-3">
							<div class="task-table">
								<a class="close-tab"  > <i class="fa fa-times"> </i> </a>  
								<table>
									<tbody>
										<tr>
											<th> SELECT QUIZ : </th>
											<td> Rich Dad Poor Dad (Official) </td>
										</tr>
										<tr>
											<th> TARGET QUIZ SCORE :  </th>
											<td> 60% </td>
										</tr>
										<tr>
											<th> Completion time : </th>
											<td> 12th May 2022 </td>
										</tr>
										<tr>
											<th> INCENTIVE :  </th>
											<td> 10 points </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Project Box 1 Ends Here -->
		<!--  Project Box 2 Starts Here -->
		<div class="col-md-6 col-lg-4 col-sm-6 col-12">
			<div class="project-box">
				<div class="project-head">
					<h4 class="col-pink"> Project 2 </h4>
					<img src="{{asset('assets/images/line-1.png')}}">
				</div>
				<div class="project-table">
					<table>
						<tbody>
							<tr>
								<th> -Project name :   </th>
								<td> Leaders </td>
							</tr>
							<tr>
								<th>  -Deadline :   </th>
								<td> 5th Sept 2022 </td>
							</tr>
							<tr>
								<th> -Project Start :  </th>
								<td>  1st Jan 2022 </td>
							</tr>
							<tr>
								<th> -Objectives : </th>
								<td> build leadership skills </td>
							</tr>
							<tr>
								<th>  -Goal : </th>
								<td> Understand & Develop 5 Core leadership skills </td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="project-tags">
					<div class="tabs-handler3 task-handler1">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-4" role="tab">Task 1</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-5" role="tab">Task 2</a>
							</li>
						</ul>
					</div>
					<!-- Tab panes -->
					<div class="tab-content tab-content3">
						<div role="tabpanel" class="tab-pane fade" id="tab-4">
							<div class="task-table">
								<a class="close-tab"  > <i class="fa fa-times"> </i> </a>  
								<table>
									<tbody>
										<tr>
											<th> TASK NAME : </th>
											<td> leadership </td>
										</tr>
										<tr>
											<th> Completion time : </th>
											<td> 12th May 2022 </td>
										</tr>
										<tr>
											<th> INCENTIVE :  </th>
											<td> 10 points </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab-5">
							<div class="task-table">
								<a class="close-tab"  > <i class="fa fa-times"> </i> </a>  
								<table>
									<tbody>
										<tr>
											<th> SELECT QUIZ : </th>
											<td> Rich Dad Poor Dad (Official) </td>
										</tr>
										<tr>
											<th> TARGET QUIZ SCORE :  </th>
											<td> 60% </td>
										</tr>
										<tr>
											<th> Completion time : </th>
											<td> 12th May 2022 </td>
										</tr>
										<tr>
											<th> INCENTIVE :  </th>
											<td> 10 points </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Project Box 2 Ends Here -->
		<!-- Project Box 3 Starts Here -->
		<div class="col-md-6 col-lg-4 col-sm-6 col-12">
			<div class="project-box">
				<div class="project-head">
					<h4 class="col-pink"> Project 3 </h4>
					<img src="{{asset('assets/images/line-1.png')}}">
				</div>
				<div class="project-table">
					<table>
						<tbody>
							<tr>
								<th> -Project name :   </th>
								<td> Leaders </td>
							</tr>
							<tr>
								<th>  -Deadline :   </th>
								<td> 5th Sept 2022 </td>
							</tr>
							<tr>
								<th> -Project Start :  </th>
								<td>  1st Jan 2022 </td>
							</tr>
							<tr>
								<th> -Objectives : </th>
								<td> build leadership skills </td>
							</tr>
							<tr>
								<th>  -Goal : </th>
								<td> Understand & Develop 5 Core leadership skills </td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="project-tags">
					<div class="tabs-handler3 task-handler1">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-6" role="tab">Task 1</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-7" role="tab">Task 2</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-8" role="tab">Task 3</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-9" role="tab">Task 4</a>
							</li>
						</ul>
					</div>
					<!-- Tab panes -->
					<div class="tab-content tab-content3">
						<div role="tabpanel" class="tab-pane fade" id="tab-6">
							<div class="task-table">
								<a class="close-tab"  > <i class="fa fa-times"> </i> </a>  
								<table>
									<tbody>
										<tr>
											<th> TASK NAME : </th>
											<td> leadership </td>
										</tr>
										<tr>
											<th> Completion time : </th>
											<td> 12th May 2022 </td>
										</tr>
										<tr>
											<th> INCENTIVE :  </th>
											<td> 10 points </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab-7">
							<div class="task-table">
								<a class="close-tab"  > <i class="fa fa-times"> </i> </a>  
								<table>
									<tbody>
										<tr>
											<th> SELECT QUIZ : </th>
											<td> Rich Dad Poor Dad (Official) </td>
										</tr>
										<tr>
											<th> TARGET QUIZ SCORE :  </th>
											<td> 60% </td>
										</tr>
										<tr>
											<th> Completion time : </th>
											<td> 12th May 2022 </td>
										</tr>
										<tr>
											<th> INCENTIVE :  </th>
											<td> 10 points </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab-8">
							<div class="task-table">
								<a class="close-tab"  > <i class="fa fa-times"> </i> </a>  
								<table>
									<tbody>
										<tr>
											<th> TASK NAME : </th>
											<td> leadership </td>
										</tr>
										<tr>
											<th> Completion time : </th>
											<td> 12th May 2022 </td>
										</tr>
										<tr>
											<th> INCENTIVE :  </th>
											<td> 10 points </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab-9">
							<div class="task-table">
								<a class="close-tab"  > <i class="fa fa-times"> </i> </a>  
								<table>
									<tbody>
										<tr>
											<th> SELECT QUIZ : </th>
											<td> Rich Dad Poor Dad (Official) </td>
										</tr>
										<tr>
											<th> TARGET QUIZ SCORE :  </th>
											<td> 60% </td>
										</tr>
										<tr>
											<th> Completion time : </th>
											<td> 12th May 2022 </td>
										</tr>
										<tr>
											<th> INCENTIVE :  </th>
											<td> 10 points </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Project Box 3 Ends Here -->
		<!-- Project Box 4 Starts Here -->
		<div class="col-md-6 col-lg-4 col-sm-6 col-12">
			<div class="project-box">
				<div class="project-head">
					<h4 class="col-pink"> Project 4 </h4>
					<img src="{{asset('assets/images/line-1.png')}}">
				</div>
				<div class="project-table">
					<table>
						<tbody>
							<tr>
								<th> -Project name :   </th>
								<td> Leaders </td>
							</tr>
							<tr>
								<th>  -Deadline :   </th>
								<td> 5th Sept 2022 </td>
							</tr>
							<tr>
								<th> -Project Start :  </th>
								<td>  1st Jan 2022 </td>
							</tr>
							<tr>
								<th> -Objectives : </th>
								<td> build leadership skills </td>
							</tr>
							<tr>
								<th>  -Goal : </th>
								<td> Understand & Develop 5 Core leadership skills </td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="project-tags">
					<div class="tabs-handler3 task-handler1">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-10" role="tab">Task 1</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-11" role="tab">Task 2</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-12" role="tab">Task 3</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-13" role="tab">Task 4</a>
							</li>
						</ul>
					</div>
					<!-- Tab panes -->
					<div class="tab-content tab-content3">
						<div role="tabpanel" class="tab-pane fade" id="tab-10">
							<div class="task-table">
								<a class="close-tab"  > <i class="fa fa-times"> </i> </a>  
								<table>
									<tbody>
										<tr>
											<th> TASK NAME : </th>
											<td> leadership </td>
										</tr>
										<tr>
											<th> Completion time : </th>
											<td> 12th May 2022 </td>
										</tr>
										<tr>
											<th> INCENTIVE :  </th>
											<td> 10 points </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab-11">
							<div class="task-table">
								<a class="close-tab"  > <i class="fa fa-times"> </i> </a>  
								<table>
									<tbody>
										<tr>
											<th> SELECT QUIZ : </th>
											<td> Rich Dad Poor Dad (Official) </td>
										</tr>
										<tr>
											<th> TARGET QUIZ SCORE :  </th>
											<td> 60% </td>
										</tr>
										<tr>
											<th> Completion time : </th>
											<td> 12th May 2022 </td>
										</tr>
										<tr>
											<th> INCENTIVE :  </th>
											<td> 10 points </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab-12">
							<div class="task-table">
								<a class="close-tab"  > <i class="fa fa-times"> </i> </a>  
								<table>
									<tbody>
										<tr>
											<th> TASK NAME : </th>
											<td> leadership </td>
										</tr>
										<tr>
											<th> Completion time : </th>
											<td> 12th May 2022 </td>
										</tr>
										<tr>
											<th> INCENTIVE :  </th>
											<td> 10 points </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab-13">
							<div class="task-table">
								<a class="close-tab"  > <i class="fa fa-times"> </i> </a>  
								<table>
									<tbody>
										<tr>
											<th> SELECT QUIZ : </th>
											<td> Rich Dad Poor Dad (Official) </td>
										</tr>
										<tr>
											<th> TARGET QUIZ SCORE :  </th>
											<td> 60% </td>
										</tr>
										<tr>
											<th> Completion time : </th>
											<td> 12th May 2022 </td>
										</tr>
										<tr>
											<th> INCENTIVE :  </th>
											<td> 10 points </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Project Box 4 Ends Here -->
		<!--  Project Box 5 Starts Here -->
		<div class="col-md-6 col-lg-4 col-sm-6 col-12">
			<div class="project-box">
				<div class="project-head">
					<h4 class="col-pink"> Project 5 </h4>
					<img src="{{asset('assets/images/line-1.png')}}">
				</div>
				<div class="project-table">
					<table>
						<tbody>
							<tr>
								<th> -Project name :   </th>
								<td> Leaders </td>
							</tr>
							<tr>
								<th>  -Deadline :   </th>
								<td> 5th Sept 2022 </td>
							</tr>
							<tr>
								<th> -Project Start :  </th>
								<td>  1st Jan 2022 </td>
							</tr>
							<tr>
								<th> -Objectives : </th>
								<td> build leadership skills </td>
							</tr>
							<tr>
								<th>  -Goal : </th>
								<td> Understand & Develop 5 Core leadership skills </td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="project-tags">
					<div class="tabs-handler3 task-handler1">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-14" role="tab">Task 1</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-15" role="tab">Task 2</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-16" role="tab">Task 3</a>
							</li>
						</ul>
					</div>
					<!-- Tab panes -->
					<div class="tab-content tab-content3">
						<div role="tabpanel" class="tab-pane fade" id="tab-14">
							<div class="task-table">
								<a class="close-tab"  > <i class="fa fa-times"> </i> </a>  
								<table>
									<tbody>
										<tr>
											<th> TASK NAME : </th>
											<td> leadership </td>
										</tr>
										<tr>
											<th> Completion time : </th>
											<td> 12th May 2022 </td>
										</tr>
										<tr>
											<th> INCENTIVE :  </th>
											<td> 10 points </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab-15">
							<div class="task-table">
								<a class="close-tab"  > <i class="fa fa-times"> </i> </a>  
								<table>
									<tbody>
										<tr>
											<th> SELECT QUIZ : </th>
											<td> Rich Dad Poor Dad (Official) </td>
										</tr>
										<tr>
											<th> TARGET QUIZ SCORE :  </th>
											<td> 60% </td>
										</tr>
										<tr>
											<th> Completion time : </th>
											<td> 12th May 2022 </td>
										</tr>
										<tr>
											<th> INCENTIVE :  </th>
											<td> 10 points </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab-16">
							<div class="task-table">
								<a class="close-tab"  > <i class="fa fa-times"> </i> </a>  
								<table>
									<tbody>
										<tr>
											<th> TASK NAME : </th>
											<td> leadership </td>
										</tr>
										<tr>
											<th> Completion time : </th>
											<td> 12th May 2022 </td>
										</tr>
										<tr>
											<th> INCENTIVE :  </th>
											<td> 10 points </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Project Box 5 Ends Here -->
		<!-- Project Box 6 Starts Here -->
		<div class="col-md-6 col-lg-4 col-sm-6 col-12">
			<div class="project-box">
				<div class="project-head">
					<h4 class="col-pink"> Project 6 </h4>
					<img src="{{asset('assets/images/line-1.png')}}">
				</div>
				<div class="project-table">
					<table>
						<tbody>
							<tr>
								<th> -Project name :   </th>
								<td> Leaders </td>
							</tr>
							<tr>
								<th>  -Deadline :   </th>
								<td> 5th Sept 2022 </td>
							</tr>
							<tr>
								<th> -Project Start :  </th>
								<td>  1st Jan 2022 </td>
							</tr>
							<tr>
								<th> -Objectives : </th>
								<td> build leadership skills </td>
							</tr>
							<tr>
								<th>  -Goal : </th>
								<td> Understand & Develop 5 Core leadership skills </td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="project-tags">
					<div class="tabs-handler3 task-handler1">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-17" role="tab">Task 1</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-18" role="tab">Task 2</a>
							</li>
						</ul>
					</div>
					<!-- Tab panes -->
					<div class="tab-content tab-content3">
						<div role="tabpanel" class="tab-pane fade" id="tab-17">
							<div class="task-table">
								<a class="close-tab"  > <i class="fa fa-times"> </i> </a>  
								<table>
									<tbody>
										<tr>
											<th> TASK NAME : </th>
											<td> leadership </td>
										</tr>
										<tr>
											<th> Completion time : </th>
											<td> 12th May 2022 </td>
										</tr>
										<tr>
											<th> INCENTIVE :  </th>
											<td> 10 points </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab-18">
							<div class="task-table">
								<a class="close-tab"  > <i class="fa fa-times"> </i> </a>  
								<table>
									<tbody>
										<tr>
											<th> SELECT QUIZ : </th>
											<td> Rich Dad Poor Dad (Official) </td>
										</tr>
										<tr>
											<th> TARGET QUIZ SCORE :  </th>
											<td> 60% </td>
										</tr>
										<tr>
											<th> Completion time : </th>
											<td> 12th May 2022 </td>
										</tr>
										<tr>
											<th> INCENTIVE :  </th>
											<td> 10 points </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Project Box 6 Ends Here -->
	</div>
</div>
@endsection