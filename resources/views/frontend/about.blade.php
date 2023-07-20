@extends('frontend.frontend_master')



@section('content')



<div class="hero small-height jarallax" data-jarallax data-speed="0.2">
          <img class="jarallax-img" src="frontend/img/hero_home_1.jpg" alt="">
          <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
              <div class="container">
                  <small class="slide-animated one">C5 Luxury Hotel Experience</small>
                  <h1 class="slide-animated two">About Paradise</h1>
              </div>
          </div>
      </div>
      <!-- /Background Img Parallax -->

      <div class="container margin_120_95">
          <div class="row justify-content-between align-items-center">
              <div class="col-lg-5">
                  <div class="parallax_wrapper inverted">
                      <img src="frontend/img/about_1.jpg" alt="" class="img-fluid rounded-img">
                      <div data-cue="slideInUp" class="img_over"><span data-jarallax-element="-30"><img src="frontend/img/home_1.jpg" alt="" class="rounded-img"></span></div>
                  </div>
              </div>
              <div class="col-lg-5">
                  <div class="intro">
                      <div class="title">
                          <small>Paradise Hotel</small>
                          <h2>Our History</h2>
                      </div>
                      <p class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab.</p>
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                      <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo.</p>
                      <p><em>Maria...the Owner</em></p>
                  </div>
              </div>
          </div>
          <!-- /Row -->
      </div>
      <!-- /container -->

      <div class="bg_white">
          <div class="container margin_120_95">
              <div>
                  <div class="row justify-content-between">
                      <div class="col-lg-5 fixed_title">
                          <div class="title">
                              <small>Paradise Hotel</small>
                              <h2>Local Amenities</h2>
                              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                          </div>
                          <div class="list_ok">
                              <ul>
                                  <li data-cue="slideInUp" data-delay="200">
                                      <h5>Local Restaurants</h5>
                                      <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                                  </li>
                                  <li data-cue="slideInUp" data-delay="300">
                                      <h5>Nature</h5>
                                      <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
                                  </li>
                                  <li data-cue="slideInUp" data-delay="400">
                                      <h5>Art and Culture</h5>
                                      <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-lg-6 ">
                          <div data-cue="fadeIn" data-delay="500">
                              <figure><img src="frontend/img/local_amenities_1.jpg" alt="" class="img-fluid rounded-img"></figure>
                          </div>
                          <div data-cue="fadeIn" data-delay="500">
                              <figure>
                                  <img src="frontend/img/local_amenities_2.jpg" alt="" class="img-fluid rounded-img">
                              </figure>
                          </div>
                          <div data-cue="fadeIn" data-delay="500">
                              <figure>
                                  <img src="frontend/img/local_amenities_3.jpg" alt="" class="img-fluid rounded-img">
                              </figure>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- /container-->
      </div>
      <!-- /bg_white -->




@endsection