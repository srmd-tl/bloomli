<!DOCTYPE html>
 

<html>

 

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

 

<title>Laravel 7 PayPal Payment Gateway Integration Tutorial</title>

 

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />

</head>

 

<body>

<div class="container mt-5 text-center">


<form class="w3-container w3-display-middle w3-card-4 " method="POST" action="{{ route('make.payment') }}">
  {{ csrf_field() }}
  <h2 class="w3-text-blue">Payment Form</h2>
  <p>Demo PayPal form - Integrating paypal in laravel</p>
  <p>      
  <label class="w3-text-blue"><b>Enter Amount</b></label>
  <input class="w3-input w3-border" name="amount" type="text"></p>      
  <button class="w3-btn w3-blue">Pay with PayPal</button></p>
</form>


</div>

</body>

 

</html>