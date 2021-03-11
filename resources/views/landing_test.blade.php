
<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper/creative/landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2019 12:45:33 GMT -->
<head>
        <meta charset="utf-8" />
        <title>School Manager</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ asset('css/creative/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/creative/app-creative.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- NAVBAR START -->
        <nav class="navbar navbar-expand-lg py-lg-3 topnav-navbar-dark">
            <div class="container">

                <!-- logo -->
                <a href="index.html" class="navbar-brand mr-lg-5">
                    <img src="{{ asset('images/logo.png') }}" alt="" class="logo-dark" height="18" />
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <!-- menus -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown">

                    <!-- left menu -->
                    <ul class="navbar-nav mr-auto align-items-center">
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link" href="#">Courses</a>
                        </li>
                    </ul>

                    <!-- right menu -->
                    <ul class="navbar-nav ml-auto align-items-center">
                        <li class="nav-item mr-0">
                            <a href="{{ route('login') }}" class="nav-link">Log In</a>
                            {{-- <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/" target="_blank" class="nav-link d-lg-none">Purchase now</a>
                            <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/" target="_blank" class="btn btn-sm btn-light btn-rounded d-none d-lg-inline-flex">
                                <i class="mdi mdi-basket mr-2"></i> Purchase Now
                            </a> --}}
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- NAVBAR END -->

        {{-- <!-- START HERO -->
        <section class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="mt-md-4">
                            <div>
                                <span><i class="mdi mdi-emoticon-happy text-warning mdi-24px"></i></span>
                                <span class="text-white-50 ml-1">Welcome to new Our Academy</span>
                            </div>
                            <h2 class="text-white font-weight-normal mb-4 mt-3 hero-title">
                                Sunshine Academy
                            </h2>

                            <p class="mb-4 font-16 text-white-50">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci nam minus quo rem distinctio aperiam dolores ut. Ratione accusantium delectus, eius eaque sit facilis reprehenderit, quis et laboriosam modi voluptatibus?</p>

                            <a href="#" target="_blank" class="btn btn-success">Start Learning <i
                                    class="mdi mdi-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-2">
                        <div class="text-md-right mt-3 mt-md-0">
                            <img src="{{ asset('images/startup.svg') }}" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END HERO --> --}}

        <div id="carouselExampleCaption" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset('images/small/small-1.jpg') }}" alt="..." class="d-block img-fluid" style="width:100%; height:550px">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-white">View Courses</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/small/small-3.jpg') }}" alt="..." class="d-block img-fluid" style="width:100%; height:550px">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-white">Latest Courses</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/small/small-2.jpg') }}" alt="..." class="d-block img-fluid" style="width:100%; height:550px">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-white">Start Learning</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaption" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaption" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- START FEATURES 1 -->
        <section class="py-5 bg-light-lighten border-top border-bottom border-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h3 class="text-primary">Latest Courses</h3>
                            <p class="text-muted mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. quis quae, dicta fugiat impedit obcaecati!</p>
                        </div>
                    </div>
                </div>

                @if (count($courses) > 0)
                    <div class="row mt-4 mb-4">
                        <div class="col-12">
                            <div class="card-deck-wrapper">
                                <div class="card-deck">
                                    @foreach ($courses as $course)
                                        <div class="card d-block">
                                            <img class="card-img-top" style="height:220px" src="{{ asset('storage/cover-images/'.$course->cover_image) }}" alt="Cover Image">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $course->name }}</h5>
                                                <a href="" class="btn btn-primary">View Course</a>
                                                <p class="card-text">
                                                    <small class="text-muted">Last updated 3 mins ago</small>
                                                </p>
                                            </div>
                                        </div> <!-- end card-->
                                    @endforeach
                                </div> <!-- end card-deck-->
                            </div> <!-- end card-deck-wrapper-->
                        </div> <!-- end col-->
                    </div>

                    <hr>

                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <a href="" class="btn btn-outline-primary">Browse All Courses</a>
                            </div>
                        </div>
                    </div>

                    
                @else 
                    <div class="text-center">
                        <p>Courses Coming Soon</p>
                    </div>
                @endif

            </div>
        </section>
        <!-- END FEATURES 1 -->
        
        <!-- START CONTACT -->
        <section class="py-5 bg-light-lighten border-top border-bottom border-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h3>Get In <span class="text-primary">Touch</span></h3>
                            <p class="text-muted mt-2">Please fill out the following form and we will get back to you shortly. For more 
                                <br>information please contact us.</p>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center mt-3">
                    <div class="col-md-4">
                        <p class="text-muted"><span class="font-weight-bold">Customer Support:</span><br> <span class="d-block mt-1">+1 234 56 7894</span></p>
                        <p class="text-muted mt-4"><span class="font-weight-bold">Email Address:</span><br> <span class="d-block mt-1">info@gmail.com</span></p>
                        <p class="text-muted mt-4"><span class="font-weight-bold">Office Address:</span><br> <span class="d-block mt-1">4461 Cedar Street Moro, AR 72368</span></p>
                        <p class="text-muted mt-4"><span class="font-weight-bold">Office Time:</span><br> <span class="d-block mt-1">9:00AM To 6:00PM</span></p>
                    </div>

                    <div class="col-md-8">
                        <form>
                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="fullname">Your Name</label>
                                        <input class="form-control form-control-light" type="text" id="fullname" placeholder="Name...">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="emailaddress">Your Email</label>
                                        <input class="form-control form-control-light" type="email" required="" id="emailaddress" placeholder="Enter you email...">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="subject">Your Subject</label>
                                        <input class="form-control form-control-light" type="text" id="subject" placeholder="Enter subject...">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="comments">Message</label>
                                        <textarea id="comments" rows="4" class="form-control form-control-light" placeholder="Type your message here..."></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-12 text-right">
                                    <button class="btn btn-primary">Send a Message <i
                                        class="mdi mdi-telegram ml-1"></i> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CONTACT -->

        <!-- START FOOTER -->
        <footer class="bg-dark py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('images/logo.png') }}" alt="" class="logo-dark" height="18" />
                        <p class="text-white-50 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing 
                            <br>elit. Excepturi, sit illum enim accusamus hic nobis. Incidunt
                            <br>magnam atque odio ducimus provident, ipsum deserunt.</p>

                        <ul class="social-list list-inline mt-3">
                            <li class="list-inline-item text-center">
                                <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item text-center">
                                <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                            </li>
                            <li class="list-inline-item text-center">
                                <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="list-inline-item text-center">
                                <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                            </li>
                        </ul>

                    </div>

                    <div class="col-lg-2 mt-3 mt-lg-0">
                        <h5 class="text-white">Company</h5>

                        <ul class="list-unstyled pl-0 mb-0 mt-3">
                            <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">About Us</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Documentation</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Blog</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Affiliate Program</a></li>
                        </ul>

                    </div>

                    <div class="col-lg-2 mt-3 mt-lg-0">
                        <h5 class="text-white">Apps</h5>

                        <ul class="list-unstyled pl-0 mb-0 mt-3">
                            <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Ecommerce Pages</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Email</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Social Feed</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Projects</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Tasks Management</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 mt-3 mt-lg-0">
                        <h5 class="text-white">Discover</h5>

                        <ul class="list-unstyled pl-0 mb-0 mt-3">
                            <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Help Center</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Our Products</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Privacy</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-5">
                            <p class="text-white-50 mt-4 text-center mb-0">© 2021 Hyper</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER -->

        <!-- bundle -->
        <script src="{{ asset('js/creative/vendor.min.js') }}"></script>
        <script src="{{ asset('js/creative/app.min.js') }}"></script>

    </body>


<!-- Mirrored from coderthemes.com/hyper/creative/landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2019 12:45:48 GMT -->
</html>