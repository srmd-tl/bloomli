<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>learning</title>
    <!-- Poppins Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <!-- bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
</head>
<body>
<!-- Modal start here -->
<div class="modal fade" id="bloomli" aria-hidden="true" aria-labelledby="bloomliLabel" tabindex="-1">
    <div class="modal-dialog modal-custom">
        <div class="modal-content border-0">
            <div class="modal-header" style="display: none">
                <h5 class="modal-title" id="bloomliLabel">Modal 1</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body p-0">
                <!-- Bloomli start here -->
                <div class="bloomli-modal bg-primary w-100 position-relative">
                    <!-- Bloomli header start -->
                    <div class="bloomli-header">
                        <div class="close-modal position-relative">
                            <span data-bs-dismiss="modal" aria-label="Close"><img class="img-fluid" src="assets/images/icons/close.png" alt="close" /></span>
                        </div>
                        <h2>Log in or Create account</h2>
                    </div>
                    <!-- Bloomli header ends -->
                    <!-- Bloomli body start -->
                    <div class="bloomli-body">
                        <ul class="nav nav-pills mb-3" id="bloomli-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="bloomli-login-tab" data-bs-toggle="pill" data-bs-target="#bloomli-login" type="button" role="tab" aria-controls="bloomli-login" aria-selected="true">Login</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="bloomli-account-tab" data-bs-toggle="pill" data-bs-target="#bloomli-account" type="button" role="tab" aria-controls="bloomli-account" aria-selected="false">Create Account</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="bloomli-tabContent">
                            <div class="tab-pane fade show active" id="bloomli-login" role="tabpanel" aria-labelledby="bloomli-login-tab">
                                <!-- login section start  -->
                                <div class="bloomli-login-section p-77">
                                    <h3>Hey, enter your details to get sign in to your account</h3>
                                    <form action="{{route('login')}}" method="POST">
                                        @csrf
                                        <div class="form-list">
                                            <input type="text" class="form-control" name="email" placeholder="Enter Email / Phone No" />
                                        </div>
                                        <div class="form-list">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Passcode" />
                                            <span id="pass-show"><img src="assets/images/icons/passcode.png" alt="show passcode" /></span>
                                        </div>
                                        <div class="form-list"><input type="submit" class="btn btn-submit" name="submit" value="Login" /></div>
                                        <div class="form-list text-center">
                                            <p>Having trouble in <a href="/">sign in</a> ?</p>
                                            <div class="another-way d-flex align-items-center justify-content-center">
                                                <span></span>
                                                <p>Or Log in with</p>
                                                <span></span>
                                            </div>
                                            <button type="button" class="btn btn-google"><img src="assets/images/icons/google.png" alt="google" /> Google</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- login section ends  -->
                            </div>
                            <div class="tab-pane fade" id="bloomli-account" role="tabpanel" aria-labelledby="bloomli-account-tab">
                                <div class="bloomli-create-account p-77">
                                    <form action="{{ route('register') }}" method="POST">
                                        @csrf
                                        <!-- bloomli accordion start -->
                                        <div class="accordion" id="bloomli-accordion">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <div class="steps-listing">
                                                        <p>Step 1 of 4</p>
                                                        <span></span>
                                                    </div>
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#account-creation" aria-expanded="true" aria-controls="account-creation">Create Your Account <span><img src="assets/images/icons/edit.png" alt="edit"></span></button>
                                                </h2>
                                                <div id="account-creation" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#bloomli-accordion">
                                                    <div class="accordion-body">
                                                        <div class="gift-box text-center">
                                                            <h4>SIGN UP FOR YOUR FREE 7 DAY TRIAL</h4>
                                                            <p>
                                                                A Gift for you, Everyday<br />
                                                                Read, Listen & Quiz; remember big ideas. Receive a daily book, free for 24h!
                                                            </p>
                                                            <ul class="gift-listing">
                                                                <li>
                                                                    <div class="gift-icon">
                                                                        <img src="assets/images/icons/book-and-pencil.png" alt="taking notes" />
                                                                    </div>
                                                                    <span>Taking Notes</span>
                                                                </li>
                                                                <li>
                                                                    <div class="gift-icon">
                                                                        <img src="assets/images/icons/quiz.png" alt="quiz" />
                                                                    </div>
                                                                    <span>Avatar Quiz</span>
                                                                </li>
                                                                <li>
                                                                    <div class="gift-icon">
                                                                        <img src="assets/images/icons/insights.png" alt="insights" />
                                                                    </div>
                                                                    <span>Key Insights</span>
                                                                </li>
                                                                <li>
                                                                    <div class="gift-icon">
                                                                        <img src="assets/images/icons/more.png" alt="more" />
                                                                    </div>
                                                                    <span>More</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- Create Account input start -->
                                                        <div class="write-info">
                                                            <div class="form-list">
                                                                <input type="text" class="form-control" name="first_name" :value="old('first_name')" placeholder="First Name" />
                                                            </div>
                                                            <div class="form-list">
                                                                <input type="text" class="form-control" name="last_name" :value="old('last_name')" placeholder="Last Name" />
                                                            </div>
                                                            <div class="form-list">
                                                                <input type="email" class="form-control" name="email" :value="old('email')" placeholder="Email" />
                                                            </div>
                                                            <div class="form-list">
                                                                <input type="password" class="form-control" id="password" name="password"
                                                                       required autocomplete="new-password"  placeholder="Passcode" />
                                                                <span id="pass-show"><img src="assets/images/icons/passcode.png" alt="show passcode" /></span>
                                                            </div>
                                                            <div class="form-check form-list">
                                                                <input class="form-check-input" type="checkbox" valueid="terms-condition" />
                                                                <label class="form-check-label" for="terms-condition"> I agree with <strong>Terms</strong> and <strong>Privacy</strong> </label>
                                                            </div>
                                                            <div class="form-list">
                                                                <input type="submit" class="btn btn-submit" name="submit" value="Choose Your Plan" />
                                                            </div>
                                                            <div class="form-list text-center">
                                                                <p>Already have an account?<a href="/"> Login</a></p>
                                                            </div>
                                                        </div>
                                                        <!-- Create Account input ends -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <div class="steps-listing">
                                                        <p>Step 2 of 4</p>
                                                        <span></span>
                                                    </div>
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#choose-plan" aria-expanded="false" aria-controls="choose-plan">Choose Your Plan  <span><img src="assets/images/icons/edit.png" alt="edit"></span></button>
                                                </h2>
                                                <div id="choose-plan" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#bloomli-accordion">
                                                    <div class="accordion-body">
                                                        <!-- Choose plan start -->
                                                        <div class="choose-plan">
                                                            <!-- plan free start -->
                                                            <div class="plan-item">
                                                                <div class="plan-radio">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="choose-plan" />
                                                                    </div>
                                                                </div>
                                                                <h3>Free Plan</h3>
                                                                <p>Free Daily Book</p>
                                                                <div class="btn-groups">
                                                                    <button type="button" class="btn btn-plan"><span>$0</span> / Month</button>
                                                                </div>
                                                                <span>Limited usage</span>
                                                            </div>
                                                            <!-- plan free ends -->
                                                            <!-- plan free start -->
                                                            <div class="plan-item">
                                                                <div class="plan-radio">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="choose-plan" />
                                                                    </div>
                                                                </div>
                                                                <h3>Silver</h3>
                                                                <p>Create quizzes/Gamification</p>
                                                                <div class="btn-groups">
                                                                    <button type="button" class="btn btn-plan"><span>$2.99</span> / Month</button>
                                                                    <button type="button" class="btn btn-plan"><span>$2.99</span> / Month</button>
                                                                </div>
                                                                <span> <img src="assets/images/icons/check.png" alt="check" /> 7 Days free trial</span>
                                                            </div>
                                                            <!-- plan free ends -->
                                                            <!-- plan free start -->
                                                            <div class="plan-item">
                                                                <div class="plan-radio">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="choose-plan" />
                                                                    </div>
                                                                </div>
                                                                <h3>Gold</h3>
                                                                <p>Books / Audio / Quizzes / Quiz Creation</p>
                                                                <div class="btn-groups">
                                                                    <button type="button" class="btn btn-plan"><span>$4.99</span> / Month</button>
                                                                    <button type="button" class="btn btn-plan"><span>$4.99</span> / Month</button>
                                                                </div>
                                                                <span> <img src="assets/images/icons/check.png" alt="check" /> 7 Days free trial</span>
                                                            </div>
                                                            <!-- plan free ends -->
                                                            <div class="form-list"><input type="submit" class="btn btn-submit" name="submit" value="Continue" /></div>
                                                        </div>
                                                        <!-- Choose plan end -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <div class="steps-listing">
                                                        <p>Step 3 of 4</p>
                                                        <span></span>
                                                    </div>
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#payment-detail" aria-expanded="false" aria-controls="payment-detail">Add Your Payment Details  <span><img src="assets/images/icons/edit.png" alt="edit"></span></button>
                                                </h2>
                                                <div id="payment-detail" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#bloomli-accordion">
                                                    <div class="accordion-body">
                                                        <!-- payment detail start -->
                                                        <div class="payment-detail">
                                                            <div class="form-list">
                                                                <input type="text" class="form-control payment-input" name="card-number" placeholder="Card Number" />
                                                                <span><img src="assets/images/icons/card.png" alt="card number" /></span>
                                                            </div>
                                                            <div class="d-flex align-items-center justify-content-between two-column">
                                                                <div class="form-list">
                                                                    <input type="text" class="form-control" name="e-date" placeholder="Expire date" />
                                                                </div>
                                                                <div class="form-list">
                                                                    <input type="text" class="form-control" name="s-code" placeholder="Security Code" />
                                                                </div>
                                                            </div>
                                                            <div class="form-list">
                                                                <div class="caret-cover">
                                                                    <select class="form-select">
                                                                        <option selected>Country</option>
                                                                        <option value>United Kingdom</option>
                                                                        <option value>United Kingdom</option>
                                                                        <option value>United Kingdom</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-list">
                                                                <input type="text" class="form-control" name="name-of-card" placeholder="Name of Card" />
                                                            </div>
                                                            <div class="form-list">
                                                                <input type="text" class="form-control" name="billing-address" placeholder="Billing Address" />
                                                            </div>
                                                            <div class="d-flex align-items-center justify-content-between two-column">
                                                                <div class="form-list">
                                                                    <input type="text" class="form-control" name="city" placeholder="City" />
                                                                </div>
                                                                <div class="form-list">
                                                                    <input type="text" class="form-control" name="z-postal" placeholder="Zip/Postal Code" />
                                                                </div>
                                                            </div>
                                                            <div class="form-list">
                                                                <div class="caret-cover">
                                                                    <select class="form-select">
                                                                        <option selected>State/Region</option>
                                                                        <option value>United state of America</option>
                                                                        <option value>United state of America</option>
                                                                        <option value>United state of America</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-list">
                                                                <input type="submit" class="btn btn-submit" name="submit" value="Save Card and Continue" />
                                                            </div>
                                                            <div class="form-list text-center">
                                                                <div class="another-way d-flex align-items-center justify-content-center">
                                                                    <span></span>
                                                                    <p>Check out with PayPal</p>
                                                                    <span></span>
                                                                </div>
                                                                <button type="button" class="btn btn-google w-100"><img src="assets/images/icons/paypal.png" alt="paypal" /> Check out with PayPal</button>
                                                            </div>
                                                        </div>
                                                        <!-- payment detail ends-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <div class="steps-listing">
                                                        <p>Step 4 of 4</p>
                                                        <span></span>
                                                    </div>
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#payment-summary" aria-expanded="false" aria-controls="payment-summary">Payment Summary  <span><img src="assets/images/icons/edit.png" alt="edit"></span></button>
                                                </h2>
                                                <div id="payment-summary" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#bloomli-accordion">
                                                    <div class="accordion-body">
                                                        <div class="payment-summary">
                                                            <div class="d-flex align-items-center justify-content-between amount-title">
                                                                <span>Amount</span>
                                                                <a href="#">Change</a>
                                                            </div>
                                                            <div class="total-summary">
                                                                <h3>$4.99</h3>
                                                            </div>
                                                            <div class="d-flex align-items-center justify-content-between amount-title">
                                                                <span>Pay by card</span>
                                                                <a href="#">Change</a>
                                                            </div>
                                                            <div class="payment-card d-flex align-items-center">
                                                                <img src="assets/images/icons/master.png" alt="card name" />
                                                                <p>**** 1234 04/21</p>
                                                            </div>
                                                            <div class="terms">
                                                                <p>By placing this order you confirm that you have read and agree to our <a href="#">terms and conditions</a>.</p>
                                                            </div>
                                                            <div class="form-list">
                                                                <input type="submit" class="btn btn-submit" name="submit" value="Place Order" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- bloomli accordion ends -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Bloomli body ends -->
                </div>
                <!-- Bloomli ends here -->
            </div>
            <div class="modal-footer" style="display: none">
                <button class="btn btn-primary">Open second modal</button>
            </div>
        </div>
    </div>
</div>
<a class="btn bg-primary btn-modal" data-bs-toggle="modal" href="#bloomli" role="button">Please Click Here to Open the Modal</a>
<!-- Modal ends here -->

<!-- Jquery Js -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- Popper Js -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- Bootstrap Js -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- jQuery Steps Js -->
<script src="{{asset('assets/js/jquery.steps.min.js')}}"></script>
<!-- Main Js -->
<script src="{{asset('assets/js/main.js')}}'"></script>
</body>
</html>
