@extends('Layout.Front')

@section('content')
<!-- Start top-section Area -->
  <section class="top-section-area pb-50 pt-50">
      <div class="container">
          <div class="row justify-content-between align-items-center d-flex">
              <div class="col-lg-8 top-left">
                  <h1 class="text-uppercase text-white mb-20">Forum</h1>
                  <p class="text-white">
                      Trouvez des réponse à toutes les questions que vous vous posez sur le développement informatique ici.
                  </p>
              </div>
              <div class="col-lg-4 top-right">
                  <ul>
                      <li><a href="{{ route('accueil') }}">Accueil</a><span class="lnr lnr-arrow-right"></span></li>
                      <li>Forum</li>
                  </ul>
              </div>
          </div>
      </div>
  </section>
  <!-- End top-section Area -->
  <!-- Start information Area -->
  <section class="information-area section-gap">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 info-left">
                  <div class="active-info-carusel">
                      <div class="single-info item">
                          <img class="img-fluid" src="img/elements/ico.png" alt="">
                          <h4 class="pb-30 pt-30">
                      We Believe that Interior <br>
                      beautifies the Total Architecture
                      </h4>
                          <p>
                              inappropriate behavior is often laughed off as “boys will be
                              <br> boys,” women face higher conduct standards especially in the
                              <br> workplace. That’s why it’s crucial that, as women, our
                              <br>behavior on the job is beyond reproach.
                          </p>
                      </div>
                      <div class="single-info item">
                          <img class="img-fluid" src="img/elements/ico.png" alt="">
                          <h4 class="pb-30 pt-30">
                      We Believe that Interior <br>
                      beautifies the Total Architecture
                      </h4>
                          <p>
                              inappropriate behavior is often laughed off as “boys will be
                              <br> boys,” women face higher conduct standards especially in the
                              <br> workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.
                          </p>
                      </div>
                      <div class="single-info item">
                          <img class="img-fluid" src="img/elements/ico.png" alt="">
                          <h4 class="pb-30 pt-30">
                      We Believe that Interior <br>
                      beautifies the Total Architecture
                      </h4>
                          <p>
                              inappropriate behavior is often laughed off as “boys will be
                              <br>boys,” women face higher conduct standards especially in the
                              <br> workplace. That’s why it’s crucial that, as women, our
                              <br> behavior on the job is beyond reproach.
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 info-right justify-content-center align-items-center d-flex">
                  <div class="overlay overlay-bg"></div>
                  <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid" src="img/elements/play.png" alt=""></a>
              </div>
          </div>
      </div>
  </section>
  <!-- End information Area -->
  <!-- Start about Area -->
  <section class="about-area">
      <div class="container-fluid">
          <div class="row d-flex justify-content-end align-items-center">
              <div class="col-lg-6 col-md-12 about-left no-padding">
                  <img class="img-fluid" src="img/elements/about.jpg" alt="">
              </div>
              <div class="col-lg-6 col-md-12 about-right">
                  <h1>We Believe that <br>
              Interior beautifies the <br>
              Total Architecture</h1>
                  <p>
                      inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.
                  </p>
              </div>
          </div>
      </div>
  </section>
  <!-- End about Area -->
  <!-- Start team Area -->
  <section class="team-area section-gap" id="team">
      <div class="container">
          <div class="row d-flex justify-content-center">
              <div class="menu-content pb-70 col-lg-8">
                  <div class="title text-center">
                      <h1 class="mb-10">About Creative Agency Team</h1>
                      <p>Who are in extremely love with friendly system.</p>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center d-flex align-items-center">
              <div class="col-lg-3 col-md-6 single-team">
                  <div class="thumb">
                      <img class="img-fluid" src="img/elements/t1.jpg" alt="">
                      <div class="align-items-center justify-content-center d-flex">
                          <a href="#"><i class="fa fa-facebook"></i></a>
                          <a href="#"><i class="fa fa-twitter"></i></a>
                          <a href="#"><i class="fa fa-linkedin"></i></a>
                      </div>
                  </div>
                  <div class="meta-text mt-30 text-center">
                      <h4>Ethel Davis</h4>
                      <p>Managing Director (Sales)</p>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 single-team">
                  <div class="thumb">
                      <img class="img-fluid" src="img/elements/t2.jpg" alt="">
                      <div class="align-items-center justify-content-center d-flex">
                          <a href="#"><i class="fa fa-facebook"></i></a>
                          <a href="#"><i class="fa fa-twitter"></i></a>
                          <a href="#"><i class="fa fa-linkedin"></i></a>
                      </div>
                  </div>
                  <div class="meta-text mt-30 text-center">
                      <h4>Rodney Cooper</h4>
                      <p>Creative Art Director (Project)</p>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 single-team">
                  <div class="thumb">
                      <img class="img-fluid" src="img/elements/t3.jpg" alt="">
                      <div class="align-items-center justify-content-center d-flex">
                          <a href="#"><i class="fa fa-facebook"></i></a>
                          <a href="#"><i class="fa fa-twitter"></i></a>
                          <a href="#"><i class="fa fa-linkedin"></i></a>
                      </div>
                  </div>
                  <div class="meta-text mt-30 text-center">
                      <h4>Dora Walker</h4>
                      <p>Senior Core Developer</p>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 single-team">
                  <div class="thumb">
                      <img class="img-fluid" src="img/elements/t4.jpg" alt="">
                      <div class="align-items-center justify-content-center d-flex">
                          <a href="#"><i class="fa fa-facebook"></i></a>
                          <a href="#"><i class="fa fa-twitter"></i></a>
                          <a href="#"><i class="fa fa-linkedin"></i></a>
                      </div>
                  </div>
                  <div class="meta-text mt-30 text-center">
                      <h4>Lena Keller</h4>
                      <p>Creative Content Developer</p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- End team Area -->
  <!-- Start about-feature Area -->
  <section class="about-feature-area section-gap relative" id="about-feature">
      <div class="overlay overlay-bg"></div>
      <div class="container">
          <div class="row d-flex justify-content-center">
              <div class="menu-content pb-70 col-lg-8">
                  <div class="title text-center">
                      <h1 class="mb-10 text-white">Some Awesomeness that should share</h1>
                      <p class="text-white">Who are in extremely love with friendly system.</p>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-4 col-md-6">
                  <div class="single-about-feature">
                      <div class="title d-flex flex-row pb-20">
                          <span class="lnr lnr-user"></span>
                          <h4><a href="#">Expert Technicians</a></h4>
                      </div>
                      <p>
                          Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                      </p>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="single-about-feature">
                      <div class="title d-flex flex-row pb-20">
                          <span class="lnr lnr-license"></span>
                          <h4><a href="#">Professional Service</a></h4>
                      </div>
                      <p>
                          Point of Sale hardware, the till at a shop check out, has become very complex over the past ten years. Modern POS.
                      </p>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="single-about-feature">
                      <div class="title d-flex flex-row pb-20">
                          <span class="lnr lnr-phone"></span>
                          <h4><a href="#">Great Support</a></h4>
                      </div>
                      <p>
                          In the last five to six years the FTA satellite receiver has become an everyday household device.
                      </p>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="single-about-feature">
                      <div class="title d-flex flex-row pb-20">
                          <span class="lnr lnr-rocket"></span>
                          <h4><a href="#">Technical Skills</a></h4>
                      </div>
                      <p>
                          Over 92% of computers are infected with Adware and spyware. Such software is rarely accompanied by uninstall.
                      </p>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="single-about-feature">
                      <div class="title d-flex flex-row pb-20">
                          <span class="lnr lnr-diamond"></span>
                          <h4><a href="#">Highly Recomended</a></h4>
                      </div>
                      <p>
                          Utility and even when it is leaves broken Windows Registry keys behind it. Even if you have an anti-spyware tool.
                      </p>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="single-about-feature">
                      <div class="title d-flex flex-row pb-20">
                          <span class="lnr lnr-bubble"></span>
                          <h4><a href="#">Positive Reviews</a></h4>
                      </div>
                      <p>
                          We have tested a number of registry fix and clean utilities and present our top 3 list on our site for your convenience.
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- End about-feature Area -->
  <!-- Start testimonial Area -->
  <section class="testimonial-area section-gap">
      <div class="container">
          <div class="row d-flex justify-content-center">
              <div class="menu-content pb-70 col-lg-8">
                  <div class="title text-center">
                      <h1 class="mb-10">What Our Client’s Say</h1>
                      <p>Who are in extremely love with friendly system.</p>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="active-testimonial">
                  <div class="single-testimonial item d-flex flex-row">
                      <div class="thumb">
                          <img class="img-fluid" src="img/elements/user1.png" alt="">
                      </div>
                      <div class="desc">
                          <p>
                              Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.
                          </p>
                          <h4 mt-30>Mark Alviro Wiens</h4>
                          <p>CEO at Google</p>
                      </div>
                  </div>
                  <div class="single-testimonial item d-flex flex-row">
                      <div class="thumb">
                          <img class="img-fluid" src="img/elements/user2.png" alt="">
                      </div>
                      <div class="desc">
                          <p>
                              Hypnosis quit smoking methods maintain caused quite world over the last two decades. There is a lot of argument pertaining to
                          </p>
                          <h4 mt-30>Lina Harrington</h4>
                          <p>CEO at Facebook</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- End testimonial Area -->
@endsection
