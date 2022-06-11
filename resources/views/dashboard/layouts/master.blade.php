<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title> Bloomli Dashboard   </title>


   <!-- Animate With CSS -->
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
   <!-- Slick CSS -->
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick-theme.css') }}">
   <!-- Font Awesome KIT -->
   <link href="{{ asset('assets/fontawesome-kit-5/css/all.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/fontawesome-kit-5/css/fontawesome.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/fontawesome-kit-5/css/brands.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/fontawesome-kit-5/css/solid.css') }}" rel="stylesheet">
   <script defer src="{{ asset('assets/fontawesome-kit-5/js/all.js') }}"></script>
   <script defer src="{{ asset('assets/fontawesome-kit-5/js/brands.js') }}"></script>
   <script defer src="{{ asset('assets/fontawesome-kit-5/js/solid.js') }}"></script>
   <script defer src="{{ asset('assets/fontawesome-kit-5/js/fontawesome.js') }}"></script>
   <!-- Bootstrap Grids -->
   <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
   <!-- Custom Stylings -->
   <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
   <!-- Jquery Library -->
   <script type="text/javascript" src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>


</head>
<body>
	<section class="all-content">


		<!-- Sidebar Starts Here --> 
		@include('dashboard.layouts.sidebar')
		<!-- Sidebar Ends Here --> 
		<main class="dashboard-wrapper">
			<section class="dash-content">
				@include('dashboard.layouts.header')
				@yield('content')
			</section>
		</main>
	</section>
	<!-- Bootstrap Javascript -->
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"> </script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="{{ asset('assets/js/slick-slider.js') }}"> </script>
	<script src="{{ asset('assets/js/functions.js') }}"> </script>
	<script type="text/javascript">


		var ctx = document.getElementById("bar-chart1");
		var chart = new Chart(ctx, {
			type: "bar",
			data: {
				labels: ["Jan", "Feb", "March", "Apr", "May", "June","July","Aug","Sept","Oct","Nov","Dec"],
				datasets: [
				{
					type: "bar",
					backgroundColor: "#725CFF",
					borderColor: "#725CFF",
					borderWidth: 1,
					label: "Team",
					data: [60, 49, 72, 90, 100, 60, 45, 23, 9, 29, 45, 100]
				},
				{
					type: "bar",
					backgroundColor: "#EB5757",
					borderColor: "#EB5757",
					borderWidth: 1,
					label: "Tasks Completed",
					data: [25, 13, 30, 35, 25, 40, 45, 12, 99, 79, 20, 100],
					lineTension: 0,  
					fill: true  
				}
				]

			},
			options: {
				responsive: true,
				barRoundness: 1,
				title: {
					display: false,
					text: ""
				},
			}

		}); 

	</script>
</body>
</html>