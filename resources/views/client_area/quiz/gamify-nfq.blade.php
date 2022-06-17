<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Quiz</title>
      <!-- Bootstrap CSS CDN -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
         integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      <!-- Our Custom CSS -->
      <link rel="stylesheet" href="style.css">
      <!-- Font Awesome JS -->
      <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
         integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
         crossorigin="anonymous"></script>
      <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
         integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
         crossorigin="anonymous"></script>
      <!-- Font Family -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
         rel="stylesheet">
   </head>
   <body>
      <div class="wrapper">
         <!-- Sidebar  -->
         <nav id="sidebar">
            <img class="sidebar-logo" src="icons/logo.png">
            <ul class="list-unstyled components">
               <li class="profile-box">
                  <div class="profile-box-content">
                     <div class="user-active"></div>
                     <img class="user-profile" src="images/sidebar-profile.png" alt="missing">
                  </div>
                  <div class="icon-box d-flex">
                     <a href=""><img class="mail md-icons" src="icons/mail-box.svg" alt="missing"></a>
                     <a href="">
                        <div class="notification-box">
                           <img class="bell md-icon" src="icons/bell.svg" alt="missing">
                           <p class="notification-number">1</p>
                        </div>
                     </a>
                  </div>
               </li>
               <li class="active">
                  <a href=""><img class="sm-icon" src="icons/home.svg" alt="missing"></a>
               </li>
               <li>
                  <a href="#"><img class="sm-icon" src="icons/discover.svg" alt="missing"></a>
               </li>
               <li>
                  <a href="#"><img class="sm-icon" src="icons/book.svg" alt="missing"></a>
               </li>
               <li>
                  <a href="#"><img class="sm-icon" src="icons/quiz.svg" alt="missing"></a>
               </li>
               <li>
                  <a href="#">
                     <img class="sm-icon" src="icons/profile.svg" alt="missing">
                     <p>Profile</p>
                  </a>
               </li>
            </ul>
         </nav>
         <!-- Page Content  -->
         <div id="content">
            <!-- banner  -->
            <div class="section-start gamify-nfq">
               <img type="button" id="sidebarCollapse" class="arrow-close" src="images/icons8_expand_arrow.png">
               <h1>GAMIFY NFQ</h1>
               <div class="book-nfq">
                  <div class="nfq-img">
                     <img src="images/book-cover.png" alt="">
                  </div>
                  <div class="book-detail">
                     <h4>Twice Shy</h4>
                     <h5>By  <span>John ven</span></h5>
                     <p>
                        Dolor minima modi corporis error quis facere. Dignissim nulla nemo velit...
                     </p>
                  </div>
               </div>
               <div class="user_profile">
                  <div class="user_profile_detail">
                     <div class="user_img">
                        <img src="images/men.png" alt="">
                     </div>
                     <h3>John Ven</h3>
                  </div>
                  <div class="men-vs-women">
                     <img src="images/vs.png" alt="">    
                  </div>
                  <div class="user_profile_detail">
                     <div class="user_img">
                        <img src="images/women.png" alt="">
                     </div>
                     <h3>Devid Kahvi</h3>
                  </div>
               </div>

               <div class="timer_section">
                  
                  <h1 class='timer' data-minutes-left=2></h1>
                  <div class="progress_time">
                     <div id="progress" >
                       <div class="progress-item"></div> 
                     </div>

                     <div class="sun">
                        <div class="dot"></div>
                     </div>
                  </div>

               </div>

               <div class="questions_section quiz_scroll">
                  <div class="questions_info">
                     <div class="user_img">
                        <img src="images/user.png" alt="">
                     </div>
                     <div class="questions_detail">
                        <div class="question-heading">
                           <span class="question-num">Q: 1</span>
                           <p>
                              Et aut animi aut magni voluptate. Voluptatem quidem eveniet aperiam consequatur laudantium optio. Voluptas nostrum enim ut omnis numquam omnis molestiae cumque est. Nisi sapiente adipisci est natus odit et ut.
                           </p>
                        </div>
                        <div class="question-progress">
                           <button class="question-btn">Answer 01 <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                           <button class="question-btn">Answer 02 <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                           <button class="question-btn active">Answer 03 <span><i class="fa fa-circle" aria-hidden="true"></i></span> <span class="result_icon"><img src="images/trophy.png" alt=""></span></button>
                           <button class="question-btn">Answer 04 <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                        </div>
                     </div>
                  </div>
                  <div class="questions_info">
                     <div class="user_img">
                        <img src="images/user.png" alt="">
                     </div>
                     <div class="questions_detail">
                        <div class="question-heading">
                           <span class="question-num">Q: 1</span>
                           <p>
                              Et aut animi aut magni voluptate. Voluptatem quidem eveniet aperiam consequatur laudantium optio. Voluptas nostrum enim ut omnis numquam omnis molestiae cumque est. Nisi sapiente adipisci est natus odit et ut.
                           </p>
                        </div>
                        <div class="question-progress">
                           <button class="question-btn">Answer 01 <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                           <button class="question-btn">Answer 02 <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                           <button class="question-btn active">Answer 03 <span><i class="fa fa-circle" aria-hidden="true"></i></span> <span class="result_icon"><img src="images/sadface.png" alt=""></span></button>
                           <button class="question-btn">Answer 04 <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                        </div>
                     </div>
                  </div>
                  <div class="questions_info">
                     <div class="user_img">
                        <img src="images/user.png" alt="">
                     </div>
                     <div class="questions_detail">
                        <div class="question-heading">
                           <span class="question-num">Q: 1</span>
                           <p>
                              Et aut animi aut magni voluptate. Voluptatem quidem eveniet aperiam consequatur laudantium optio. Voluptas nostrum enim ut omnis numquam omnis molestiae cumque est. Nisi sapiente adipisci est natus odit et ut.
                           </p>
                        </div>
                        <div class="question-progress">
                           <button class="question-btn">Answer 01 <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                           <button class="question-btn">Answer 02 <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                           <button class="question-btn active">Answer 03 <span><i class="fa fa-circle" aria-hidden="true"></i></span> <span class="result_icon"><img src="images/trophy.png" alt=""></span></button>
                           <button class="question-btn">Answer 04 <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                        </div>
                     </div>
                  </div>
                  <div class="questions_info">
                     <div class="user_img">
                        <img src="images/user.png" alt="">
                     </div>
                     <div class="questions_detail">
                        <div class="question-heading">
                           <span class="question-num">Q: 1</span>
                           <p>
                              Et aut animi aut magni voluptate. Voluptatem quidem eveniet aperiam consequatur laudantium optio. Voluptas nostrum enim ut omnis numquam omnis molestiae cumque est. Nisi sapiente adipisci est natus odit et ut.
                           </p>
                        </div>
                        <div class="question-progress">
                           <button class="question-btn">Answer 01 <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                           <button class="question-btn">Answer 02 <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                           <button class="question-btn active">Answer 03 <span><i class="fa fa-circle" aria-hidden="true"></i></span> <span class="result_icon"><img src="images/trophy.png" alt=""></span></button>
                           <button class="question-btn">Answer 04 <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                        </div>
                     </div>
                  </div>
                  <div class="questions_info">
                     <div class="user_img">
                        <img src="images/user.png" alt="">
                     </div>
                     <div class="questions_detail">
                        <div class="question-heading">
                           <span class="question-num">Q: 1</span>
                           <p>
                              Et aut animi aut magni voluptate. Voluptatem quidem eveniet aperiam consequatur laudantium optio. Voluptas nostrum enim ut omnis numquam omnis molestiae cumque est. Nisi sapiente adipisci est natus odit et ut.
                           </p>
                        </div>
                        <div class="question-progress">
                           <button class="question-btn">Answer 01 <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                           <button class="question-btn">Answer 02 <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                           <button class="question-btn active">Answer 03 <span><i class="fa fa-circle" aria-hidden="true"></i></span> <span class="result_icon"><img src="images/trophy.png" alt=""></span></button>
                           <button class="question-btn">Answer 04 <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                        </div>
                     </div>
                  </div>
                  <div class="questions_info">
                     <div class="user_img">
                        <img src="images/user.png" alt="">
                     </div>
                     <div class="questions_detail">
                        <div class="question-heading">
                           <span class="question-num">Q: 1</span>
                           <p>
                              Et aut animi aut magni voluptate. Voluptatem quidem eveniet aperiam consequatur laudantium optio. Voluptas nostrum enim ut omnis numquam omnis molestiae cumque est. Nisi sapiente adipisci est natus odit et ut.
                           </p>
                        </div>
                        <div class="question-progress">
                           <button class="question-btn">Answer 01 <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                           <button class="question-btn">Answer 02 <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                           <button class="question-btn active">Answer 03 <span><i class="fa fa-circle" aria-hidden="true"></i></span> <span class="result_icon"><img src="images/trophy.png" alt=""></span></button>
                           <button class="question-btn">Answer 04 <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="footer">
         <img class="footer-logo" src="images/footer-logo.png" alt="missing">
      </div>
      <!-- jQuery CDN - Slim version (=without AJAX) -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
         integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
         crossorigin="anonymous"></script>
      <!-- Popper.JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
         integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
         crossorigin="anonymous"></script>
      <!-- Bootstrap JS -->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
         integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
         crossorigin="anonymous"></script>

         <script src="js/jquery.js"></script>
         <script src="js/jquery.simple.timer.js"></script>
         <script src="js/dojo.js"></script>
      <script type="text/javascript">
         $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
               $('#sidebar').toggleClass('active');
            });
         });

         let items = document.querySelectorAll('.progress-item');
         const counters = Array(items.length);
         const intervals = Array(items.length);
         counters.fill(0);
         items.forEach((number,index) => {
           intervals[index] = setInterval(() => {
                   if(counters[index] == parseInt(number.dataset.num)){
                       clearInterval(intervals[index]);
                   }else{
                       counters[index] += 1;
                       number.style.background = "conic-gradient(#ff9595 calc(" + counters[index] + "%), #ff959580 0deg)";
                       
                       
                   }
           }, 1200);
          });
      </script>
   </body>
</html>