<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>bloomli</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{asset('my-assets/style.css')}}">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!-- Font Family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <img class="sidebar-logo" src="{{asset('my-assets/icons/logo.png')}}"> </img>
        <ul class="list-unstyled components">
            <li class="profile-box">
                <div class="profile-box-content">
                    <div class="user-active"></div>
                    <img class="user-profile" src="{{asset('my-assets/images/sidebar-profile.png')}}" alt="missing">
                </div>
                <div class="icon-box d-flex">
                    <a href=""><img class="mail md-icons" src="{{asset('my-assets/icons/mail-box.svg')}}" alt="missing"></a>
                    <a href="">
                        <div class="notification-box">
                            <img class="bell md-icon" src="{{asset('my-assets/icons/bell.svg')}}" alt="missing">
                            <p class="notification-number">1</p>
                        </div>
                    </a>
                </div>
            </li>
            <li class="active">
                <a href=""><img class="sm-icon" src="{{asset('my-assets/icons/home.svg')}}" alt="missing"></a>
            </li>
            <li>
                <a href="#"><img class="sm-icon" src="{{asset('my-assets/icons/discover.svg')}}" alt="missing"></a>
            </li>
            <li>
                <a href="#"><img class="sm-icon" src="{{asset('my-assets/icons/book.svg')}}" alt="missing"></a>
            </li>
            <li>
                <a href="#"><img class="sm-icon" src="{{asset('my-assets/icons/quiz.svg')}}" alt="missing"></a>
            </li>
            <li>
                <a href="#">
                    <img class="sm-icon" src="{{asset('my-assets/icons/profile.svg')}}" alt="missing">
                    <p>Profile</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- Page Content  -->
    <div id="content">
        <div id="banner" class="section-space">
            <div class="shape"></div>
            <div class="banner-header d-flex">
                <img type="button" id="sidebarCollapse" class="arrow-close" src="{{asset('my-assets/images/icons8_expand_arrow.png')}}">
                <div class="action-items d-flex">
                    <button class="action-icon"  data-toggle="modal" data-target="#editProfile"> <img class="action-img" src="{{asset('my-assets/icons/edit-pen.svg')}}"
                                                      alt="missing"></button>
                    <button class="action-icon"> <img class="action-img" src="{{asset('my-assets/icons/mail-white.svg')}}"
                                                      alt="missing"></button>
                    <button class="action-icon" data-toggle="modal" data-target="#logoutModal"> <img class="action-img" src="{{asset('my-assets/icons/exit.svg')}}"
                                                      alt="missing"></button>
                </div>
            </div>
            <div class="banner-body d-flex
                  ">
                <div class="user-img-box">
                    <form>

                        <label class="action-icon upload-icon" for="file-upload"> <img class="action-img" src="{{asset('my-assets/icons/camera.svg')}}"
                                                                                       alt="missing"></label>
                        <input type="file" id="file-upload">

                        <img class="user-image" src="{{auth()->user()->profile_img}}" alt="missing">
                    </form>
                </div>
                <div class="user-info-box">
                    <h1 class="h1">{{auth()->user()->first_name}}</h1>
                    <p class="email-id">{{auth()->user()->email}}</p>
                    <h2 class="h2 designation">{{auth()->user()->position}}</h2>
                    <div class="user-action-group">
                        <button class="action-icon thumbs-up"> <img class="action-img" src="{{asset('my-assets/icons/like.svg')}}"
                                                                    alt="missing"></button>
                        <h5 class=" btn-fact">
                            <img src="{{asset('my-assets/icons/fun-fact.svg')}}" alt=""> Fun Fact
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- tabs -->
        <div id="activity" class="section-space">
            <div class="row activity-info">
                <div class="col-md-6 col-lg-4 col-xl-2">
                    <div class=" section-card">
                        <h4 class="h1">23</h4>
                        <p>Books Read</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-2">
                    <div class="section-card">
                        <h4 class="h1">12</h4>
                        <p>Books Listened</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-2 ">
                    <div class="section-card">
                        <h4 class="h1">36</h4>
                        <p>Notes Created</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-2">
                    <div class="section-card">
                        <h4 class="h1">36</h4>
                        <p>Quizzes Done</p>
                    </div>
                </div>
                <div class=" col-md-6 col-lg-4 col-xl-2">
                    <div class="section-card">
                        <h4 class="h1">82%</h4>
                        <p>Quizzes Score</p>
                    </div>
                </div>
                <div class=" col-md-6 col-lg-4 col-xl-2">
                    <div class="section-card">
                        <h4 class="h1">6</h4>
                        <p>Categories</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- category -->
        <div id="category" class="section-card section-space">
            <h3 class="h2 title">Favorite Categories</h3>
            <div class="info-box-group">
                <p class="info-box">
                    <img class="info-img" src="{{asset('my-assets/icons/career.svg')}}" alt="missing"> Career & Success
                </p>
                <p class="info-box">
                    <img class="info-img" src="{{asset('my-assets/icons/mindfulness.svg')}}" alt="missing"> Mindfulness & Happiness
                </p>
                <p class="info-box">
                    <img class="info-img" src="{{asset('my-assets/icons/relation.svg')}}" alt="missing"> Sex & Relationships
                </p>
                <p class="info-box">
                    <img class="info-img" src="{{asset('my-assets/icons/creativity.svg')}}" alt="missing"> Creativity
                </p>
                <p class="info-box">
                    <img class="info-img" src="{{asset('my-assets/icons/science.svg')}}" alt="missing"> Science
                </p>
                <p class="info-box">
                    <img class="info-img" src="{{asset('my-assets/icons/relation.svg')}}" alt="missing"> Religion & Spirituality
                </p>
            </div>
        </div>
        <!-- Notes -->
        <div id="notes" class="section-space">
            <div class="tab-group d-flex title">
                <h3 class="h2 ">My Notes </h3>
                <ul class="nav nav-pills mb-3 pill-bar" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link cocktail-box active" id="pills-creativity-tab" data-toggle="pill" href="#pills-creativity" role="tab" aria-controls="pills-creativity" aria-selected="true">
                            Creativity</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link cocktail-box " id="pills-relation-tab" data-toggle="pill" href="#pills-relation" role="tab" aria-controls="pills-relation" aria-selected="false">
                            Relationships</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link cocktail-box " id="pills-science-tab" data-toggle="pill" href="#pills-science" role="tab" aria-controls="pills-science" aria-selected="false">
                            Science</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link cocktail-box " id="pills-praenting-tab" data-toggle="pill" href="#pills-praenting" role="tab" aria-controls="pills-praenting" aria-selected="false">
                            Praenting</a>
                    </li>
                </ul>
            </div>
            <div class="section-card ">
                <div class="tab-content " id="pills-tabContent">
                    <div class="tab-pane fade  active show" id="pills-creativity" role="tabpanel" aria-labelledby="pills-creativity-tab">
                        <div class="book-info-group">
                            <div class="book-box-lg">
                                <img class="book-img" src="{{asset('my-assets/images/book.png')}}" alt="missing">
                                <div class="book-info">
                                    <h4 class="h4">Twice Shy</h4>
                                    <p>By John ven</p>
                                </div>
                                <p class="info-box">
                                    View Notes
                                </p>
                            </div>
                            <div class="book-box-lg">
                                <img class="book-img" src="{{asset('my-assets/images/book.png')}}" alt="missing">
                                <div class="book-info">
                                    <h4 class="h4">Twice Shy</h4>
                                    <p>By John ven</p>
                                </div>
                                <p class="info-box">
                                    View Notes
                                </p>
                            </div>
                            <div class="book-box-lg">
                                <img class="book-img" src="{{asset('my-assets/images/book.png')}}" alt="missing">
                                <div class="book-info">
                                    <h4 class="h4">Twice Shy</h4>
                                    <p>By John ven</p>
                                </div>
                                <p class="info-box">
                                    View Notes
                                </p>
                            </div>
                            <div class="book-box-lg">
                                <img class="book-img" src="{{asset('my-assets/images/book.png')}}" alt="missing">
                                <div class="book-info">
                                    <h4 class="h4">Twice Shy</h4>
                                    <p>By John ven</p>
                                </div>
                                <p class="info-box">
                                    View Notes
                                </p>
                            </div>
                            <div class="book-box-lg">
                                <img class="book-img" src="{{asset('my-assets/images/book.png')}}" alt="missing">
                                <div class="book-info">
                                    <h4 class="h4">Twice Shy</h4>
                                    <p>By John ven</p>
                                </div>
                                <p class="info-box">
                                    View Notes
                                </p>
                            </div>
                            <div class="book-box-lg">
                                <img class="book-img" src="{{asset('my-assets/images/book.png')}}" alt="missing">
                                <div class="book-info">
                                    <h4 class="h4">Twice Shy</h4>
                                    <p>By John ven</p>
                                </div>
                                <p class="info-box">
                                    View Notes
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-relation" role="tabpanel" aria-labelledby="pills-relation-tab">
                        relation
                    </div>
                    <div class="tab-pane fade" id="pills-science" role="tabpanel" aria-labelledby="pills-science-tab">
                        science
                    </div>
                    <div class="tab-pane fade" id="pills-praenting" role="tabpanel" aria-labelledby="pills-praenting-tab">
                        parenting
                    </div>
                </div>
                <button class="btn-more">More<img class="btn-more-arrow"src="{{asset('my-assets/images/arrow-down.png')}}" alt="missing"></button>
            </div>
        </div>
        <!-- Quizes -->
        <div id="quiz" class="section-card section-space">
            <div class="quiz-header title h2">
                My Quizzes
                <button class="btn-more">More<img class="btn-more-arrow"src="{{asset('my-assets/images/arrow-down.png')}}" alt="missing"></button>
            </div>
            <div class="quiz-info-group">
                <div class="quiz-card d-flex">
                    <img src="{{asset('my-assets/images/quiz-img.png')}}" alt="missing" class="quiz-card-img">
                    <div class="quiz-test">
                        <h5>Mind Test Quiz</h5>
                        <p>16 Questions</p>
                    </div>
                </div>
                <div class="quiz-card d-flex">
                    <img src="{{asset('my-assets/images/quiz-img.png')}}" alt="missing" class="quiz-card-img">
                    <div class="quiz-test">
                        <h5>Mind Test Quiz</h5>
                        <p>16 Questions</p>
                    </div>
                </div>
                <div class="quiz-card d-flex">
                    <img src="{{asset('my-assets/images/quiz-img.png')}}" alt="missing" class="quiz-card-img">
                    <div class="quiz-test">
                        <h5>Mind Test Quiz</h5>
                        <p>16 Questions</p>
                    </div>
                </div>
                <div class="quiz-card d-flex">
                    <img src="{{asset('my-assets/images/quiz-img.png')}}" alt="missing" class="quiz-card-img">
                    <div class="quiz-test">
                        <h5>Mind Test Quiz</h5>
                        <p>16 Questions</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- library -->
        <div id="library" class="section-card">
            <div class="library-header title h2">
                My Library
                <button class="btn-more">More<img class="btn-more-arrow"src="{{asset('my-assets/images/arrow-down.png')}}" alt="missing"></button>
            </div>
            <div class="book-info-group  row">
                <div class="col-lg-6 col-xl-3">
                    <div class="book-content">
                        <div class="book-box-lg">
                            <img class="book-img" src="{{asset('my-assets/images/book.png')}}" alt="missing">
                        </div>
                        <div class="book-info">
                            <h4 class="h4">Twice Shy</h4>
                            <p>By John ven</p>
                        </div>
                        <p class="book-detail">
                            Dolor minima modi corporis error quis facere. Dignissim nulla nemo velit Dignissim nulla
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3">
                    <div class="book-content">
                        <div class="book-box-lg">
                            <img class="book-img" src="{{asset('my-assets/images/book.png')}}" alt="missing">
                        </div>
                        <div class="book-info">
                            <h4 class="h4">Twice Shy</h4>
                            <p>By John ven</p>
                        </div>
                        <p class="book-detail">
                            Dolor minima modi corporis error quis facere. Dignissim nulla nemo velit Dignissim nulla
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3">
                    <div class="book-content">
                        <div class="book-box-lg">
                            <img class="book-img" src="{{asset('my-assets/images/book.png')}}" alt="missing">
                        </div>
                        <div class="book-info">
                            <h4 class="h4">Twice Shy</h4>
                            <p>By John ven</p>
                        </div>
                        <p class="book-detail">
                            Dolor minima modi corporis error quis facere. Dignissim nulla nemo velit Dignissim nulla
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3">
                    <div class="book-content">
                        <div class="book-box-lg">
                            <img class="book-img" src="{{asset('my-assets/images/book.png')}}" alt="missing">
                        </div>
                        <div class="book-info">
                            <h4 class="h4">Twice Shy</h4>
                            <p>By John ven</p>
                        </div>
                        <p class="book-detail">
                            Dolor minima modi corporis error quis facere. Dignissim nulla nemo velit Dignissim nulla
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer">
    <img class="footer-logo" src="{{asset('my-assets/images/footer-logo.png')}}" alt="missing">
</div>
{{--Logout modal--}}
<x-logout></x-logout>
{{--End logout modal--}}

{{--Edit profile modal--}}
<x-edit-profile></x-edit-profile>
{{--Edit profile modal--}}
<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
</body>
</html>
</html>
