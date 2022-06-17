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



      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#congratulations">
  Congratulations!
</button>

<!-- Modal -->
<div class="modal fade" id="congratulations" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="congratulations_modal">
           <h1>Congratulations!</h1>
           <div class="user_img">
               <img class="stars" src="images/stars.png" alt="">
               <img class="profile_img" src="images/men.png" alt="">
               <img class="profiledesign" src="images/profiledesign.png" alt="">
           </div>
           <div class="user_detail">
              <div class="user_name">
                 <h3>John Ven</h3>
              </div>
              <div class="user_result">
                 <h4>Quiz Completed</h4>
                 <h5>LOVE AT FIRST</h5>
                 <h6>Your score <span>45/60</span></h6>
              </div>
              <div class="result_btn">
                 <button class="result_submit"><img src="images/done.png" alt=""> Done</button>
                 <button class="result_submit"><img src="images/share.png" alt=""> Share</button>
              </div>
           </div>
        </div>
      </div>
      
    </div>
  </div>
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
      <script type="text/javascript">
         $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
               $('#sidebar').toggleClass('active');
            });
         });
      </script>
   </body>
</html>