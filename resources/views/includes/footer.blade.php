<footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>School Manager</h3>
            <p>
              First Eastleigh Avenue <br>
              Nairobi, NRB 00100<br>
              Kenya <br><br>
              <strong>Phone:</strong> +254 789 554 885<br>
              <strong>Email:</strong> info@school.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about-us') }}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('learn-index') }}">Courses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Faculties</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">ICT</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Business and Finance</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Engineering</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Chemistry</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Medicine</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Enter Your Email Below to subscribe to our Newsletter</p>
            <form action="#" method="">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>School Manager</span></strong>. All Rights Reserved
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer>

{{-- <footer class="bg-dark py-5">
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
</footer> --}}