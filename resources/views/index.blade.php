@extends('layout.app')
@section('content')
<section class="hero-area">


    <div class="swiper heroSwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <!-- content -->
          <div class="slider-text">
            <h1>
              KISTLER CUTTING AND
              <br />
              WELDING TECHNIQUES
            </h1>
            <p>
              Worldwide leading manufacturer of welding positioning and
              cutting machines for the welding trade, especially for the
              automation of cutting and welding processes
            </p>

            <a href="#" class="btn btn-lg">
              <span>Know More</span>
            </a>
          </div>
          <!-- content -->
          <img src="{{ asset('frontend/img/hero-1.jpg') }}" alt="slider" />
        </div>
        <div class="swiper-slide">
          <!-- content -->
          <div class="slider-text">
            <h1>
              KISTLER CUTTING AND
              <br />
              WELDING TECHNIQUES
            </h1>
            <p>
              Worldwide leading manufacturer of welding positioning and
              cutting machines for the welding trade, especially for the
              automation of cutting and welding processes
            </p>

            <a href="#" class="btn btn-lg">
              <span>Know More</span>
            </a>
          </div>
          <!-- content -->
          <img src="{{ asset('frontend/img/hero-1.jpg') }}" alt="slider" />
        </div>


      </div>

      <div class="swiper-pagination"></div>
    </div>
  </section>
  <!-- ===============
            HERO END
         =============== -->

  <!-- =====================
          ABOUT AREA START
       ===================== -->
  <section class="about-home-area">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12">
          <div class="about-company-home">
            <h2>Our Company</h2>
            <p>
              Kistler is a 100% family-run company from the heart of Upper
              Swabia in southern Germany and combines traditional values and
              German quality with modern management and a young, ambitious
              team. For more than half a century, the Kistler Group (including
              the subsidiary F. Bode & Sons, UK) has been delivering
              tailor-made solutions for customers from a wide variety of
              metalworking industries with great success.
            </p>
            <img src="{{ asset('frontend/img/our-company.jpg') }}" alt="" />
          </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-12">
          <div class="about-company-home-pic">
            <img src="{{ asset('frontend/img/about-company.jpg') }}" alt="about company" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================
          ABOUT AREA END
       ==================== -->

  <!-- =====================
          PRODUCT AREA START
       ======================= -->
  <section class="products-home-area">
    <div class="container">
      <div class="row">

        <div class="col-xl-4 col-lg-4 col-md-6">
          <div class="cutting-automation">
            <h2>Cutting Automation</h2>
            <div class="cutting-automation-box">
              <div class="swiper cuttingSwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">

                    <img src="{{ asset('frontend/img/product/cutting-automation.jpg') }}" alt="cutting automation." />
                    <h3> <a href="#"> CNC Controlled </a> </h3>
                    <h5> <a href="#"> RSM 630 </a> </h5>
                  </div>

                  <div class="swiper-slide">

                    <img src="{{ asset('frontend/img/product/cutting-automation.jpg') }}" alt="cutting automation." />
                    <h3> <a href="#"> CNC Controlled </a> </h3>
                    <h5> <a href="#"> RSM 630 </a> </h5>
                  </div>
                </div>

                <div class="swiper-pagination"></div>
              </div>

            </div>
          </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-6">
          <div class="cutting-automation">
            <h2> Welding Automation </h2>
            <div class="cutting-automation-box">
              <div class="swiper weldingSwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">

                    <img src="{{ asset('frontend/img/product/cutting-automation.jpg') }}" alt="cutting automation." />
                    <h3> <a href="#"> CNC Controlled </a> </h3>
                    <h5> <a href="#"> RSM 630 </a> </h5>
                  </div>

                  <div class="swiper-slide">

                    <img src="{{ asset('frontend/img/product/cutting-automation.jpg') }}" alt="cutting automation." />
                    <h3> <a href="#"> CNC Controlled </a> </h3>
                    <h5> <a href="#"> RSM 630 </a> </h5>
                  </div>
                </div>

                <div class="swiper-pagination"></div>
              </div>

            </div>
          </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-6">
          <div class="cutting-automation">
            <h2> BODE </h2>
            <div class="cutting-automation-box">
              <div class="swiper bodeSwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">

                    <img src="{{ asset('frontend/img/product/cutting-automation.jpg') }}" alt="cutting automation." />
                    <h3> <a href="#"> CNC Controlled </a> </h3>
                    <h5> <a href="#"> RSM 630 </a> </h5>
                  </div>

                  <div class="swiper-slide">

                    <img src="{{ asset('frontend/img/product/cutting-automation.jpg') }}" alt="cutting automation." />
                    <h3> <a href="#"> CNC Controlled </a> </h3>
                    <h5> <a href="#"> RSM 630 </a> </h5>
                  </div>
                </div>

                <div class="swiper-pagination"></div>
              </div>

            </div>
          </div>
        </div>

      </div>

      <div class="row products-home-button">
        <a href="#" class="btn btn-lg">
          <span> View All </span>
        </a>
      </div>


    </div>
  </section>
  <!-- ===================
          PRODUCT AREA END
       ==================== -->



  <!-- =========================
          CUSTOM MADE AREA START
         ========================= -->
  <section class="custom-made-home-area">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12">
          <div class="custom-made-home">
            <h2> Custom Made Solutions </h2>
            <p>
              In addition to our wide portfolio of standard machines for the automation of welding
              processes, which now consists of over 2000 different models of pipe rotators, welding
              positioners and manipulators, we develop and manufacture machines according to
              customer specific needs in order to always meet all the requirements of the industry.
            </p>

            <p> Your demands are our challenge ! </p>
            <a href="#" class="btn btn-lg">
              <span> Read More </span>
            </a>
          </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-12">
          <div class="custom-made-pic">
            <img src="{{ asset('frontend/img/product/custome-made-home.jpg') }}" alt="custome-made" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================
             CUSTOM MADE AREA  END
           ======================== -->

  <!-- ===============================
          INDUSTRIES HOME AREA START
       =============================== -->
  <section class="industries-home-area">
    <div class="container">
      <div class="row">
        <div class="col-xl-5 col-lg-5 col-md-12">
          <div class="industries-home">
            <h2> Our Industries </h2>
            <p>
              Our company has been successfully supplying companies from a
              wide variety of metalworking industries around the world for over
              half a century. Discover the individual branches of industry now
              and learn more about the different areas of application for Kistler
              machines.
            </p>

          </div>
        </div>

        <div class="col-xl-7 col-lg-7 col-md-12">
          <div class="cutting-automation-box">
            <div class="swiper industriesSwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/industries/oil-and-gas.jpg') }}" alt="oil-and-gas" />
                  <h3> <a href="#"> CNC Controlled </a> </h3>

                </div>
                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/industries/steel-fabrication.jpg') }}" alt="steel-fabrication" />
                  <h3> <a href="#"> CNC Controlled </a> </h3>
                </div>
                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/industries/wind-energy.jpg') }}" alt="wind-energy" />
                  <h3> <a href="#"> CNC Controlled </a> </h3>
                </div>

                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/industries/ship-building.jpg') }}" alt="ship-building" />
                  <h3> <a href="#"> CNC Controlled </a> </h3>
                </div>
                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/industries/oil-and-gas.jpg') }}" alt="oil-and-gas" />
                  <h3> <a href="#"> CNC Controlled </a> </h3>

                </div>
                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/industries/steel-fabrication.jpg') }}" alt="steel-fabrication" />
                  <h3> <a href="#"> CNC Controlled </a> </h3>
                </div>
                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/industries/wind-energy.jpg') }}" alt="wind-energy" />
                  <h3> <a href="#"> CNC Controlled </a> </h3>
                </div>

                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/industries/ship-building.jpg') }}" alt="ship-building" />
                  <h3> <a href="#"> CNC Controlled </a> </h3>
                </div>



              </div>

              <div class="swiper-pagination"></div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =============================
          INDUSTRIES HOME AREA  END
       ============================= -->

  <!-- ===============================
          SUCCESS STORY HOME AREA START
       =============================== -->
  <section class="success-story-area">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-12 col-md-12">
          <div class="success-home">
            <h2> Success Story </h2>
            <p>
              Your success is our success! Kistler is proud to have been selected
              as a reliable partner by numerous well-known and successful
              companies around the world in order to jointly implement their
              major projects. Immerse yourself in the world of project-based
              special machine construction.
            </p>

            <a href="#" class="btn btn-lg">
              <span> Read More </span>
            </a>

            <ul>
              <li> <img src="{{ asset('frontend/img/blogs/1.jpg') }}" alt=""></li>
              <li> <img src="{{ asset('frontend/img/blogs/2.jpg') }}" alt=""></li>
              <li> <img src="{{ asset('frontend/img/blogs/3.jpg') }}" alt=""></li>
              <li> <img src="{{ asset('frontend/img/blogs/4.jpg') }}" alt=""></li>
            </ul>

          </div>


        </div>

        <div class="col-xl-8 col-lg-12 col-md-12">
          <div class="cutting-automation-box">
            <div class="swiper successSwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/blogs/blog-1.jpg') }}" alt="Blog" />
                  <h3> <a href="#"> Lorem ipsum dolor sit amet</a> </h3>
                  <p> Lorem ipsum dolor sit amet, consectetur
                    Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. <span> <a href="#"> Read more... </span> </a></p>
                </div>
                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/blogs/blog-2.jpg') }}" alt="Blog" />
                  <h3> <a href="#"> Lorem ipsum dolor sit amet</a> </h3>
                  <p> Lorem ipsum dolor sit amet, consectetur
                    Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. <span> <a href="#"> Read more... </span> </a></p>
                </div>
                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/blogs/blog-3.jpg') }}" alt="Blog" />
                  <h3> <a href="#"> Lorem ipsum dolor sit amet</a> </h3>
                  <p> Lorem ipsum dolor sit amet, consectetur
                    Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. <span> <a href="#"> Read more... </span> </a></p>
                </div>

                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/blogs/blog-1.jpg') }}" alt="Blog" />
                  <h3> <a href="#"> Lorem ipsum dolor sit amet</a> </h3>
                  <p> Lorem ipsum dolor sit amet, consectetur
                    Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. <span> <a href="#"> Read more... </span> </a></p>
                </div>
                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/blogs/blog-2.jpg') }}" alt="Blog" />
                  <h3> <a href="#"> Lorem ipsum dolor sit amet</a> </h3>
                  <p> Lorem ipsum dolor sit amet, consectetur
                    Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. <span> <a href="#"> Read more... </span> </a></p>
                </div>
                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/blogs/blog-3.jpg') }}" alt="Blog" />
                  <h3> <a href="#"> Lorem ipsum dolor sit amet</a> </h3>
                  <p> Lorem ipsum dolor sit amet, consectetur
                    Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. <span> <a href="#"> Read more... </span> </a></p>
                </div>
              </div>

              <div class="swiper-pagination"></div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =============================
          SUCCESS STORY HOME AREA  END
       ============================= -->




  <!-- ===============================
          COUNTERS HOME AREA START
       =============================== -->
  <section class="counters-home-area">
    <div class="container">
      <div class="row">
        <div class="col-xl-5 col-lg-4 col-md-12">
          <div class="counters-home">
            <h2> Key Figures </h2>
            <p>
              Key figures from over 50 years of family tradition, hard work and dedication to our industry.
            </p>

          </div>
        </div>

        <div class="col-xl-7 col-lg-8 col-md-12">
          <div class="cutting-automation-box">
            <div class="counterbox">
              <div class="counter">
                <span class="count"> 2</span> <span> K </span>
                <h5> Projects </h5>
              </div>

              <div class="counter">
                <span class="count"> 5 </span> <span> K </span>
                <h5> Satisfied Clients </h5>
              </div>
              <div class="counter">
                <span class="count"> 150 </span> <span> + </span>
                <h5> Countries </h5>
              </div>
              <div class="counter">
                <span class="count"> 99 </span> <span> % </span>
                <h5> Export Rate </h5>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =============================
              COUNTERS HOME AREA  END
           ============================= -->



  <!-- ===============================
          NEWS HOME AREA START
       =============================== -->
  <section class="news-home-area">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-12 col-md-12">
          <div class="news-home">
            <h2> News </h2>
            <p>
              All news about the Kistler company and the world of
              mechanical engineering. You are also welcome to register
              for our company newsletter.
            </p>

            <a href="news.html" class="btn btn-lg">
              <span> Read More </span>
            </a>


          </div>


        </div>

        <div class="col-xl-8 col-lg-12 col-md-12">
          <div class="cutting-automation-box">
            <div class="swiper newsSwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/news/news-1.jpg') }}" alt="News" />
                  <h3> <a href="#"> Lorem ipsum dolor sit amet</a> </h3>
                  <p> Lorem ipsum dolor sit amet, consectetur
                    Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. <span> <a href="#"> Read more... </span> </a></p>
                </div>
                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/news/news-2.jpg') }}" alt="News" />
                  <h3> <a href="#"> Lorem ipsum dolor sit amet</a> </h3>
                  <p> Lorem ipsum dolor sit amet, consectetur
                    Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. <span> <a href="#"> Read more... </span> </a></p>
                </div>
                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/news/news-3.jpg') }}" alt="News" />
                  <h3> <a href="#"> Lorem ipsum dolor sit amet</a> </h3>
                  <p> Lorem ipsum dolor sit amet, consectetur
                    Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. <span> <a href="#"> Read more... </span> </a></p>
                </div>

                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/news/news-1.jpg') }}" alt="News" />
                  <h3> <a href="#"> Lorem ipsum dolor sit amet</a> </h3>
                  <p> Lorem ipsum dolor sit amet, consectetur
                    Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. <span> <a href="#"> Read more... </span> </a></p>
                </div>
                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/news/news-2.jpg') }}" alt="News" />
                  <h3> <a href="#"> Lorem ipsum dolor sit amet</a> </h3>
                  <p> Lorem ipsum dolor sit amet, consectetur
                    Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. <span> <a href="#"> Read more... </span> </a></p>
                </div>
                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/news/news-3.jpg') }}" alt="News" />
                  <h3> <a href="#"> Lorem ipsum dolor sit amet</a> </h3>
                  <p> Lorem ipsum dolor sit amet, consectetur
                    Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. <span> <a href="#"> Read more... </span> </a></p>
                </div>
              </div>

              <div class="swiper-pagination"></div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =============================
              NEWS HOME AREA  END
           ============================= -->





  <!-- ===============================
          EXHIBITION HOME AREA START
       =============================== -->
  <section class="exhibitions-home-area">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-12">
          <div class="exhibitions-home">
            <h2> EXHIBITIONS</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In nobis voluptate eius aspernatur
              fugiat odio eligendi omnis modi,
              voluptas quasi nihil laudantium saepe quae exercitationem veritatis assumenda non id dolor?
            </p>

          </div>
        </div>

        <div class="col-xl-8 col-lg-7 col-md-12">
          <div class="cutting-automation-box">
            <div class="swiper exhibitionsSwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/exhibition/exhibition-1.jpg') }}" alt="exhibition" />
                  <h3> <a href="#"> CNC Controlled </a> </h3>

                </div>
                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/exhibition/exhibition-2.jpg') }}" alt="exhibition" />
                  <h3> <a href="#"> CNC Controlled </a> </h3>
                </div>
                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/exhibition/exhibition-3.jpg') }}" alt="exhibition" />
                  <h3> <a href="#"> CNC Controlled </a> </h3>
                </div>

                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/exhibition/exhibition-1.jpg') }}" alt="exhibition" />
                  <h3> <a href="#"> CNC Controlled </a> </h3>
                </div>
                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/exhibition/exhibition-2.jpg') }}" alt="exhibition" />
                  <h3> <a href="#"> CNC Controlled </a> </h3>

                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('frontend/img/exhibition/exhibition-3.jpg') }}" alt="exhibition" />
                  <h3> <a href="#"> CNC Controlled </a> </h3>
                </div>
                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/exhibition/exhibition-1.jpg') }}" alt="exhibition" />
                  <h3> <a href="#"> CNC Controlled </a> </h3>
                </div>

                <div class="swiper-slide">

                  <img src="{{ asset('frontend/img/exhibition/exhibition-2.jpg') }}" alt="exhibition" />
                  <h3> <a href="#"> CNC Controlled </a> </h3>
                </div>



              </div>

              <div class="swiper-pagination"></div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =============================
              EXHIBITION HOME AREA  END
           ============================= -->

  <!-- =============================
           BLOGS HOME AREA  START
       ============================= -->
  <section class="blogs-home-area">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="blogs-home-head">
            <h2> Blogs </h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
              esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
              veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
              pariatur.
            </p>

            <a href="blogs.html" class="btn btn-lg">
              <span> Read More </span>
            </a>

          </div>
        </div>


      </div>
    </div>
  </section>

  <!-- =============================
           BLOGS HOME AREA  END
       ============================= -->




  <!-- ==================================
           SOCIAL MEDIA HOME AREA START
       ================================== -->
  <section class="social-media-home-area">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-12">
          <div class="social-media-home">
            <h2> Social media feeds </h2>
            <p>
              Let's get social. Stay up to date and follow us on the various
              social media. We are happy to hear from you
            </p>

            <h5> Follow Us </h5>
            <ul>
              <li> <a href="https://www.facebook.com/kistlergmbh" target="_blank"> <i class="fab fa-facebook"></i> </a>
              </li>
              <li> <a href="#"> <i class="fab fa-instagram"></i></a> </li>
              <li> <a href="#"><i class="fab fa-twitter"></i> </a> </li>
              <li> <a href="https://www.youtube.com/channel/UCEjQM7LDqsARPt1CdUTDifg" target="_blank"> <i
                    class="fab fa-youtube"></i></a> </li>
            </ul>

          </div>
        </div>

        <div class="col-xl-8 col-lg-7 col-md-12">
          <div class="cutting-automation-box">


            <div class="col">
              <div class="swiper-container">
                <div class="swiper-wrapper">

                  <!-- image box -->
                  <div class="swiper-slide">
                    <div class="imgBox">
                      <img src="{{ asset('frontend/img/social-media/social-1.jpg') }}" alt="social media">
                    </div>
                    <div class="details">

                      <div class="likes">
                        <ul>
                          <li> <a href="#"> <i class="fas fa-heart"></i> </a> </li>
                          <li> <a href="#"> 4567 </a> </li>
                          <li> <a href="#"> Likes </a> </li>
                        </ul>
                      </div>
                      <div class="social-icon">
                        <a href="#"> <i class="fab fa-instagram"></i></a>
                      </div>
                    </div>


                  </div>
                  <!-- image box -->

                  <!-- image box -->
                  <div class="swiper-slide">
                    <div class="imgBox">
                      <img src="{{ asset('frontend/img/social-media/social-2.jpg') }}" alt="social media">
                    </div>
                    <div class="details">

                      <div class="likes">
                        <ul>
                          <li> <a href="#"> <i class="fas fa-heart"></i> </a> </li>
                          <li> <a href="#"> 4567 </a> </li>
                          <li> <a href="#"> Likes </a> </li>
                        </ul>
                      </div>
                      <div class="social-icon">
                        <a href="#"> <i class="fab fa-instagram"></i></a>
                      </div>
                    </div>
                  </div>
                  <!-- image box -->

                  <!-- image box -->
                  <div class="swiper-slide">
                    <div class="imgBox">
                      <img src="{{ asset('frontend/img/social-media/social-3.jpg') }}" alt="social media">
                    </div>
                    <div class="details">

                      <div class="likes">
                        <ul>
                          <li> <a href="#"> <i class="fas fa-heart"></i> </a> </li>
                          <li> <a href="#"> 4567 </a> </li>
                          <li> <a href="#"> Likes </a> </li>
                        </ul>
                      </div>
                      <div class="social-icon">
                        <a href="#"> <i class="fab fa-instagram"></i></a>
                      </div>
                    </div>
                  </div>
                  <!-- image box -->

                  <!-- image box -->
                  <div class="swiper-slide">
                    <div class="imgBox">
                      <img src="{{ asset('frontend/img/social-media/social-1.jpg') }}" alt="social media">
                    </div>
                    <div class="details">

                      <div class="likes">
                        <ul>
                          <li> <a href="#"> <i class="fas fa-heart"></i> </a> </li>
                          <li> <a href="#"> 4567 </a> </li>
                          <li> <a href="#"> Likes </a> </li>
                        </ul>
                      </div>
                      <div class="social-icon">
                        <a href="#"> <i class="fab fa-instagram"></i></a>
                      </div>
                    </div>
                  </div>
                  <!-- image box -->

                  <!-- image box -->
                  <div class="swiper-slide">
                    <div class="imgBox">
                      <img src="{{ asset('frontend/img/social-media/social-2.jpg') }}" alt="social media">
                    </div>
                    <div class="details">

                      <div class="likes">
                        <ul>
                          <li> <a href="#"> <i class="fas fa-heart"></i> </a> </li>
                          <li> <a href="#"> 4567 </a> </li>
                          <li> <a href="#"> Likes </a> </li>
                        </ul>
                      </div>
                      <div class="social-icon">
                        <a href="#"> <i class="fab fa-instagram"></i></a>
                      </div>
                    </div>
                  </div>
                  <!-- image box -->

                  <!-- image box -->
                  <div class="swiper-slide">
                    <div class="imgBox">
                      <img src="{{ asset('frontend/img/social-media/social-3.jpg') }}" alt="social media">
                    </div>
                    <div class="details">

                      <div class="likes">
                        <ul>
                          <li> <a href="#"> <i class="fas fa-heart"></i> </a> </li>
                          <li> <a href="#"> 4567 </a> </li>
                          <li> <a href="#"> Likes </a> </li>
                        </ul>
                      </div>
                      <div class="social-icon">
                        <a href="#"> <i class="fab fa-instagram"></i></a>
                      </div>
                    </div>
                  </div>
                  <!-- image box -->
                </div>
                <!-- <div class="swiper-pagination">
                </div> -->
              </div>
            </div>







          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===============================
              SOCIAL MEDIA HOME AREA  END
           =============================== -->

  <!-- =========================================
          PERSONAL DISTRIBUTORS HOME AREA START
      ========================================== -->
  <section class="personal-distributors-area">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="personal-area">
            <div class="row">
              <div class="col-xl-5 col-lg-8 col-md-12 personal-pic">
                <img src="{{ asset('frontend/img/Felix-Kistler.jpg') }}" alt="Felix Kistler">
              </div>
              <div class="col-xl-7 col-lg-12 col-md-12 personal-details">
                <h5> Would you like to find out more about the
                  possibilities of Kistler machines in welding
                  automation?
                </h5>
                <h4> Felix Kistler </h4>
                <p> International Sales & Marketing Manager </p>

                <a href="#" class="btn btn-lg">
                  <span> Personal Advice </span>
                </a>


              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="distribute">
            <h2> DISTRIBUTORS </h2>
            <h5> We have established a worldwide distributor network to always be
              able to offer you the best possible service. </h5>

            <div class="row">
              <div class="col-xl-8 col-lg-12 col-md-12 distribute-box">
                <div class="swiper distriSwiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img src="{{ asset('frontend/img/distributors/logo-1.jpg') }}" alt="distributors" />
                    </div>
                    <div class="swiper-slide">
                      <img src="{{ asset('frontend/img/distributors/logo-2.jpg') }}" alt="distributors" />
                    </div>
                    <div class="swiper-slide">
                      <img src="{{ asset('frontend/img/distributors/logo-3.jpg') }}" alt="distributors" />
                    </div>

                    <div class="swiper-slide">
                      <img src="{{ asset('frontend/img/distributors/logo-4.jpg') }}" alt="distributors" />
                    </div>
                    <div class="swiper-slide">
                      <img src="{{ asset('frontend/img/distributors/logo-1.jpg') }}" alt="distributors" />
                    </div>
                    <div class="swiper-slide">
                      <img src="{{ asset('frontend/img/distributors/logo-2.jpg') }}" alt="distributors" />
                    </div>
                    <div class="swiper-slide">
                      <img src="{{ asset('frontend/img/distributors/logo-3.jpg') }}" alt="distributors" />
                    </div>

                    <div class="swiper-slide">
                      <img src="{{ asset('frontend/img/distributors/logo-4.jpg') }}" alt="distributors" />
                    </div>



                  </div>

                  <div class="swiper-pagination"></div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-12 more">
                <a href="#" class="btn btn-lg">
                  <span> Know more </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection  
 