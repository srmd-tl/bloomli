<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Bloomli</title>
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
        @include('auth_modal')
        <!-- Modal ends here -->

        <!-- topbar start here -->
        <div class="top-bar">
          <div class="container">
            <div class="d-flex align-items-center justify-content-between">
              <div class="logo">
                <a href="#">
                  <img src="assets/images/logo.png" alt="bloomli" />
                </a>
              </div>
              <div class="navigation">
                <ul class="d-flex">
                  <li><a href="#">Explore Books</a></li>
                  <li><a href="#">Start Your Free Trial</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- topbar ends here -->
        <!-- Nextlevel knowledge start here -->
        <div class="next-level">
          <div class="container">
            <div class="row">
              <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 pe-5">
                <h2>Next-level knowledge, next-level teams.</h2>
                <p>Team members that keep learning will drive innovative moves.</p>
                <p>Make retaining knowledge fast and simple by using a One-of-a-kind microlearning app based on the latest science.</p>
                <p>Bloomli´s technology is designed to fit in pockets and positively impact entire organizations.</p>
                <a href="#" class="btn btn-quote">Get your Quote</a>
              </div>
              <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-6">
                <div class="video-cover position-relative text-end">
                  <div class="dots-cover position-relative">
                    <div class="dot-1 dots"></div>
                    <div class="dot-2 dots"></div>
                    <div class="dot-3 dots"></div>
                    <div class="dot-4 dots"></div>
                    <div class="dot-5 dots"></div>
                    <div class="dot-6 dots"></div>
                    <div class="dot-7 dots"></div>
                    <div class="dot-8 dots"></div>
                  </div>
                  <img class="img-fluid" src="assets/images/main-banner.png" alt="video banner" />
                  <div class="video-icon position-absolute">
                    <span>
                      <img src="assets/images/icons/play-btn.png" alt="play button" />
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Nextlevel knowledge ends here -->
        <!-- workplace start here -->
        <div class="workplace">
          <div class="container">
            <div class="top-heading">
              <h2>Your workplace’s favourite education partner.</h2>
              <h5>Turning work environments into thriving learning communities</h5>
            </div>
            <!-- Feature box start here -->
            <div class="feature-box">
              <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-6 col-sm-12">
                  <div class="feature-media">
                    <img class="img-fluid vert-move" src="assets/images/mobile.png" alt="features" />
                  </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="feature-list">
                    <h4>Short-term commitments, Long-term results</h4>
                    <p>The potential ROI from an insight-rich bestseller is priceless. We give you access to 1000’s of non-fiction bestseller book summaries that will elevate skills in less than 15 minutes</p>
                    <p>Supply your team with a growing library of summaries and unique content that carry valuable key ideas from leaders of industries.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Feature box ends here -->
            <!-- Feature box start here -->
            <div class="feature-box">
              <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="feature-list">
                    <h4>Scientifically-proven retention method</h4>
                    <p>Memories are tricky - it’s hard to retain the big ideas.</p>
                    <p>So we use the latest findings in retention-curve science to optimize learning. Our short quizzing methods make the flow of influential teachings second nature.</p>
                  </div>
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-6 col-sm-12">
                  <div class="feature-media text-end">
                    <img class="img-fluid" src="assets/images/graph.jpg" alt="features" />
                  </div>
                </div>
              </div>
            </div>
            <!-- Feature box ends here -->
            <!-- Feature box start here -->
            <div class="feature-box">
              <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-6 col-sm-12">
                  <div class="feature-media">
                    <img class="img-fluid" src="assets/images/habit.png" alt="features" />
                  </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="feature-list">
                    <h4>Create meaningful habits</h4>
                    <p>Learning key ideas from thought-leaders is a powerful habit that can create an innovative reality.</p>
                    <p>Supply your team with inspiration and top-level guidance that develops excellence and high-achieving behaviours.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Feature box ends here -->
            <!-- Feature box start here -->
            <div class="feature-box">
              <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="feature-list">
                    <h4>Flexible learning</h4>
                    <p>Learning will not get in the way of productivity; it will improve it.</p>
                    <p>Our quick book summaries & unique mini courses can be read or listened to wherever, whenever.</p>
                  </div>
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-6 col-sm-12">
                  <div class="feature-media text-end">
                    <img class="img-fluid" src="assets/images/flexible.png" alt="features" />
                  </div>
                </div>
              </div>
            </div>
            <!-- Feature box ends here -->
            <!-- Feature box start here -->
            <div class="feature-box">
              <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-6 col-sm-12">
                  <div class="feature-media">
                    <img class="img-fluid" src="assets/images/train.png" alt="features" />
                  </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="feature-list">
                    <h4>Train your way</h4>
                    <p>Reach your organization's goals by structuring what your team learns.</p>
                    <p>Assign books and tasks, and create quizzes for the team members.</p>
                    <p>Help them fill in their knowledge gaps and focus on what’s essential to your company..</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Feature box ends here -->
            <!-- Feature box start here -->
            <div class="feature-box">
              <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="feature-list">
                    <h4>Bloomli on multiple devices</h4>
                    <p>Access our platform on desktop, tablet and mobile - IOS & ANDROID. Read & listen to our full library wherever you are. Take and create quizzes anytime. Be notified and open your messages on the go</p>
                    <p>Bloomli gives both your organisation and members the freedom to grow.</p>
                  </div>
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-6 col-sm-12">
                  <div class="feature-media text-end">
                    <img class="img-fluid vert-move" src="assets/images/multi-devices.png" alt="features" />
                  </div>
                </div>
              </div>
            </div>
            <!-- Feature box ends here -->
            <div class="quote-get text-center">
              <a href="#" class="btn btn-quote">Get a Quote</a>
            </div>
          </div>
        </div>
        <!-- workplace ends here -->
        <!-- organization start here -->
        <div class="organization">
          <div class="container">
            <div class="top-heading-2">
              <h2>Build Your Organisation <span>´One Member at a Time´</span></h2>
              <h5>With a Revolutionary, scientifically proven, team-building App</h5>
            </div>
            <div class="organization-media text-center">
              <img class="img-fluid" src="assets/images/dashboard.png" alt="dashboard" />
              <p>Manage Multiple Team Members From One Dashboard</p>
            </div>
          </div>
        </div>
        <!-- organization ends here -->
        <!-- features start here -->
        <div class="features-cover">
          <div class="container">
            <div class="top-heading text-center">
              <h2>FEATURES</h2>
            </div>
            <div class="row">
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="features-items text-center">
                  <div class="feature-icon">
                    <img src="assets/images/icons/track.png" alt="track" />
                  </div>
                  <h3>Track important metrics:</h3>
                  <p>Ensure your team stays on track and hits their knowledge goals with access to the user analytics dashboard.</p>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="features-items text-center">
                  <div class="feature-icon">
                    <img src="assets/images/icons/optimization.png" alt="track" />
                  </div>
                  <h3>Admin Optimization Tools:</h3>
                  <p>Ensure your team stays on track and hits their knowledge goals with access to the user analytics dashboard.</p>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="features-items text-center">
                  <div class="feature-icon">
                    <img src="assets/images/icons/team.png" alt="track" />
                  </div>
                  <h3>View Your Teams messaging:</h3>
                  <p>Ensure your team stays on track and hits their knowledge goals with access to the user analytics dashboard.</p>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="features-items text-center">
                  <div class="feature-icon">
                    <img src="assets/images/icons/quiz.png" alt="track" />
                  </div>
                  <h3>Monitor Team Quiz Scores:</h3>
                  <p>Ensure your team stays on track and hits their knowledge goals with access to the user analytics dashboard.</p>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="features-items text-center">
                  <div class="feature-icon">
                    <img src="assets/images/icons/tasks.png" alt="track" />
                  </div>
                  <h3>Set Team Learning Tasks:</h3>
                  <p>Ensure your team stays on track and hits their knowledge goals with access to the user analytics dashboard.</p>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="features-items text-center">
                  <div class="feature-icon">
                    <img src="assets/images/icons/engagement.png" alt="track" />
                  </div>
                  <h3>Observe Your Teams Engagement :</h3>
                  <p>Ensure your team stays on track and hits their knowledge goals with access to the user analytics dashboard.</p>
                </div>
              </div>
              <div class="col-xxl-12 text-center">
                <div class="get-your-quote">
                    <a href="#" class="btn btn-quote">Get your Quote</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- features ends here -->
        <!-- footer start here -->
        <footer class="footer">
          <div class="container">
            <div class="top-footer d-flex align-items-center justify-content-between">
              <div class="footer-logo">
                <img src="assets/images/footer-logo.png" alt="bloomli">
              </div>
              <div class="call-now">
                <p>Call</p>
                <a href="tel:0800">800 - Bloomli</a>
              </div>
            </div>
            <div class="bottom-footer">
              <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <h5>For Bloomli</h5>
                  <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Explore Books</a></li>
                  </ul>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <h5>About</h5>
                  <ul>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                  </ul>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 offset-2 offset-sm-0">
                  <h5>Find Us</h5>
                  <div class="d-flex align-items-center justify-content-between">
                    <a href="#"><img src="assets/images/icons/google-play.png" alt="google play"></a>
                    <a href="#"><img src="assets/images/icons/app-store.png" alt="google play"></a>
                  </div>
                  <div class="d-flex align-items-center social-media">
                    <a href="#"><img src="assets/images/icons/facebook.png" alt="social media"></a>
                    <a href="#"><img src="assets/images/icons/twitter.png" alt="social media"></a>
                    <a href="#"><img src="assets/images/icons/llinkedin.png" alt="social media"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <!-- footer ends here -->






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
