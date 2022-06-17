<!DOCTYPE html>
<html>
{{--Header--}}
<x-header></x-header>
{{--End Header--}}
   <body>
      <div class="wrapper">
{{--        Sidebar--}}
          <x-sidebar></x-sidebar>
{{--          End Sidebar--}}
         <div id="content">

            <!-- banner  -->
            <div id="banner" class="section-space quiz-banner">
               <div class="banner-header d-flex">
                  <img type="button" id="sidebarCollapse" class="arrow-close" src="{{asset('my-assets/images/icons8_expand_arrow.png')}}">
                  <nav>
                     <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Submit Quiz</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Take Quiz</a>
                     </div>
                  </nav>
               </div>
               <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                     <div class="banner-body d-flex">
                        <div class="user-img-box">
                           <form>
                              <label class="action-icon upload-icon" for="file-upload"> <img class="action-img"
                                 src="icons/camera.svg" alt="missing"></label>
                              <input type="file" id="file-upload">
                              <img class="user-image" src="{{asset('my-assets/images/user-image.png')}}" alt="missing">
                           </form>
                        </div>
                        <div class="user-info-box">
                           <h1 class="h1">GAMIFY NFQ</h1>
                           <p>Change Profile for Gamify or do nothing to keep existing profile </p>
                           <div class="quiz-btn">
                              <a href="#" class="quiz_btn_design">Enter Quiz Name</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                     <div class="info-box-group">
                        <p class="info-box">
                           <img class="info-img" src="{{asset('my-assets/icons/career.svg')}}" alt="missing"> Career &amp; Success
                        </p>
                        <p class="info-box">
                           <img class="info-img" src="{{asset('my-assets/icons/mindfulness.svg')}}" alt="missing"> Mindfulness &amp; Happiness
                        </p>
                        <p class="info-box">
                           <img class="info-img" src="{{asset('my-assets/icons/relation.svg')}}" alt="missing"> Sex &amp; Relationships
                        </p>
                        <p class="info-box">
                           <img class="info-img" src="{{asset('my-assets/icons/creativity.svg')}}" alt="missing"> Creativity
                        </p>
                        <p class="info-box">
                           <img class="info-img" src="{{asset('my-assets/icons/science.svg')}}" alt="missing"> Science
                        </p>
                        <p class="info-box">
                           <img class="info-img" src="{{asset('my-assets/icons/relation.svg')}}" alt="missing"> Religion &amp; Spirituality
                        </p>
                     </div>
                  </div>
               </div>
            </div>

            <!-- quiz-book  -->
            <div class="quiz-book section-start">
               <div class="more_load">
                  <button class="btn-more">More<img class="btn-more-arrow" src="{{asset('my-assets/images/arrow-down.png')}}" alt="missing"></button>
               </div>
               <div class="book-info-group">
                  <div class="book-box-lg">
                     <img class="book-img" src="{{asset('my-assets/images/book.png')}}" alt="missing">
                     <div class="book-info">
                        <div class="book_review">
                           <h4 class="h4">Twice Shy</h4>
                           <span class="review_start">
                           <img src="{{asset('my-assets/images/star.png')}}" alt=""> 7.8
                           </span>
                        </div>
                        <div class="book-auth">
                           <img src="{{asset('my-assets/images/book.png')}}" alt="book author">
                           <p>By John ven</p>
                        </div>
                     </div>
                  </div>
                  <div class="book-box-lg">
                     <img class="book-img" src="{{asset('my-assets/images/book.png')}}" alt="missing">
                     <div class="book-info">
                        <div class="book_review">
                           <h4 class="h4">Twice Shy</h4>
                           <span class="review_start">
                           <img src="{{asset('my-assets/images/star.png')}}" alt=""> 7.8
                           </span>
                        </div>
                        <div class="book-auth">
                           <img src="{{asset('my-assets/images/book.png')}}" alt="book author">
                           <p>By John ven</p>
                        </div>
                     </div>
                  </div>
                  <div class="book-box-lg">
                     <img class="book-img" src="{{asset('my-assets/images/book.png')}}" alt="missing">
                     <div class="book-info">
                        <div class="book_review">
                           <h4 class="h4">Twice Shy</h4>
                           <span class="review_start">
                           <img src="{{asset('my-assets/images/star.png')}}" alt=""> 7.8
                           </span>
                        </div>
                        <div class="book-auth">
                           <img src="{{asset('my-assets/images/book.png')}}" alt="book author">
                           <p>By John ven</p>
                        </div>
                     </div>
                  </div>
                  <div class="book-box-lg">
                     <img class="book-img" src="{{asset('my-assets/images/book.png')}}" alt="missing">
                     <div class="book-info">
                        <div class="book_review">
                           <h4 class="h4">Twice Shy</h4>
                           <span class="review_start">
                           <img src="{{asset('my-assets/images/star.png')}}" alt=""> 7.8
                           </span>
                        </div>
                        <div class="book-auth">
                           <img src="{{asset('my-assets/images/book.png')}}" alt="book author">
                           <p>By John ven</p>
                        </div>
                     </div>
                  </div>
                  <div class="book-box-lg">
                     <img class="book-img" src="{{asset('my-assets/images/book.png')}}" alt="missing">
                     <div class="book-info">
                        <div class="book_review">
                           <h4 class="h4">Twice Shy</h4>
                           <span class="review_start">
                           <img src="{{asset('my-assets/images/star.png')}}" alt=""> 7.8
                           </span>
                        </div>
                        <div class="book-auth">
                           <img src="{{asset('my-assets/images/book.png')}}" alt="book author">
                           <p>By John ven</p>
                        </div>
                     </div>
                  </div>
                  <div class="book-box-lg">
                     <img class="book-img" src="{{asset('my-assets/images/book.png')}}" alt="missing">
                     <div class="book-info">
                        <div class="book_review">
                           <h4 class="h4">Twice Shy</h4>
                           <span class="review_start">
                           <img src="{{asset('my-assets/images/star.png')}}" alt=""> 7.8
                           </span>
                        </div>
                        <div class="book-auth">
                           <img src="{{asset('my-assets/images/book.png')}}" alt="book author">
                           <p>By John ven</p>
                        </div>
                     </div>
                  </div>
                  <div class="book-box-lg">
                     <img class="book-img" src="{{asset('my-assets/images/book.png')}}" alt="missing">
                     <div class="book-info">
                        <div class="book_review">
                           <h4 class="h4">Twice Shy</h4>
                           <span class="review_start">
                           <img src="{{asset('my-assets/images/star.png')}}" alt=""> 7.8
                           </span>
                        </div>
                        <div class="book-auth">
                           <img src="{{asset('my-assets/images/book.png')}}" alt="book author">
                           <p>By John ven</p>
                        </div>
                     </div>
                  </div>
                  <div class="book-box-lg">
                     <img class="book-img" src="{{asset('my-assets/images/book.png')}}" alt="missing">
                     <div class="book-info">
                        <div class="book_review">
                           <h4 class="h4">Twice Shy</h4>
                           <span class="review_start">
                           <img src="{{asset('my-assets/images/star.png')}}" alt=""> 7.8
                           </span>
                        </div>
                        <div class="book-auth">
                           <img src="{{asset('my-assets/images/book.png')}}" alt="book author">
                           <p>By John ven</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- quiz-question  -->
            <div class=" quiz-question section-start">
               <div class="more_load">
                  <button class="btn-more">More<img class="btn-more-arrow" src="{{asset('my-assets/images/arrow-down.png')}}" alt="missing"></button>
               </div>
               <div class="quiz_scroll">
                  <div class="quiz-question-detail">
                     <div class="question-number">
                        <p>Q: 1</p>
                     </div>
                     <div class="question-info">
                        <h4>
                           Perferendis voluptas aut praesentium aut sunt fuga. Debitis adipisci beatae beatae ut impedit. Itaque minima quo velit corporis corporis perferendis ut?
                        </h4>
                        <div class="question-progress">
                           <button class="question-btn">20% <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                           <button class="question-btn">50% <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                           <button class="question-btn active">70% <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                        </div>
                     </div>
                     <div class="question_drop">
                           <div class="btn-group dropleft">
                             <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                             </button>
                             <div class="dropdown-menu">
                               <button class="dropdown-item" type="button">Action</button>
                               <button class="dropdown-item" type="button">Another action</button>
                               <button class="dropdown-item" type="button">Something else here</button>
                             </div>
                           </div>
                        </div>
                  </div>
                  <div class="quiz-question-detail">
                     <div class="question-number">
                        <p>Q: 1</p>
                     </div>
                     <div class="question-info">
                        <h4>
                           Perferendis voluptas aut praesentium aut sunt fuga. Debitis adipisci beatae beatae ut impedit. Itaque minima quo velit corporis corporis perferendis ut?
                        </h4>
                        <div class="question-progress">
                           <button class="question-btn">20% <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                           <button class="question-btn">50% <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                           <button class="question-btn active">70% <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                        </div>
                     </div>
                     <div class="question_drop">
                           <div class="btn-group dropleft">
                             <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                             </button>
                             <div class="dropdown-menu">
                               <button class="dropdown-item" type="button">Action</button>
                               <button class="dropdown-item" type="button">Another action</button>
                               <button class="dropdown-item" type="button">Something else here</button>
                             </div>
                           </div>
                        </div>
                  </div>
                  <div class="quiz-question-detail">
                     <div class="question-number">
                        <p>Q: 1</p>
                     </div>
                     <div class="question-info">
                        <h4>
                           Perferendis voluptas aut praesentium aut sunt fuga. Debitis adipisci beatae beatae ut impedit. Itaque minima quo velit corporis corporis perferendis ut?
                        </h4>
                        <div class="question-progress">
                           <button class="question-btn">20% <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                           <button class="question-btn">50% <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                           <button class="question-btn active">70% <span><i class="fa fa-circle" aria-hidden="true"></i></span></button>
                        </div>
                     </div>
                     <div class="question_drop">
                           <div class="btn-group dropleft">
                             <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                             </button>
                             <div class="dropdown-menu">
                               <button class="dropdown-item" type="button">Action</button>
                               <button class="dropdown-item" type="button">Another action</button>
                               <button class="dropdown-item" type="button">Something else here</button>
                             </div>
                           </div>
                        </div>
                  </div>
               </div>
               <div class="question_btn">
                  <button class="btn-more color-white">Cancel</button>
                  <button class="btn-more">Add</button>
                  <button class="btn-more color-white">Submit</button>
               </div>
            </div>



         </div>
      </div>
      <div id="footer">
         <img class="footer-logo" src="{{asset('my-assets/images/footer-logo.png')}}" alt="missing">
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
