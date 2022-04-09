@extends('layouts.home')

@section('page')
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
        <div class="container d-flex align-items-center">
            <div class="contact-info mr-auto">
                <ul>
                    <li><i class="icofont-envelope"></i><a href="mailto:contact@example.com">info@email.com</a></li>
                    <li><i class="icofont-phone"></i> 123456789</li>
                    <li><i class="icofont-clock-time icofont-flip-horizontal"></i> Sun-Thu 8am - 2pm</li>
                </ul>
            </div>
            <div class="cta">
{{--                <a href="#" class="scrollto" style="font-family:Cairo; font-weight:bold;">العربية</a>--}}
                <ul>
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <img src="assets/img/Logo/logo.png" alt="" class="img-fluid" style="width:90px; min-height:40px; position:absolute;">
        <div class="container d-flex align-items-center">

            <!--<h1 class="logo mr-auto"><a href="#header" class="scrollto">MUS</a></h1>-->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="#header" class="logo mr-auto scrollto" style="height:40px;"><!--<img src="#" alt="" class="img-fluid" style="width:90px; min-height:40px;">--></a>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="#header">{{trans('home.Home')}}</a></li>
                    <li><a href="#">{{trans('home.News')}}</a></li>
                    <li class="drop-down">
                        <a href="#">{{trans('home.College')}}</a>
                        <ul>
                            <li><a href="#">{{trans('home.Dean\'s Message')}}</a></li>
                            <li><a href="#">{{trans('home.Mission and Vision')}}</a></li>
                        </ul>
                    </li>
                    <li class="drop-down">
                        <a href="#">{{trans('home.Departments')}}</a>
                        <ul>
                            <li class="drop-down">
                                <a href="#">{{trans('home.Medical Departments')}}</a>
                                <ul>
                                    <li><a href="#">{{trans('home.medicine')}}</a></li>
                                    <li><a href="#">{{trans('home.Pharmacy')}}</a></li>
                                    <li><a href="#">{{trans('home.Medical Laboratory')}}</a></li>
                                    <li><a href="#">{{trans('home.Nursing')}}</a></li>
                                </ul>
                            </li>
                            <li class="drop-down">
                                <a href="#">{{trans('home.Computer Departments')}}</a>
                                <ul>
                                    <li><a href="#">{{trans('home.Information Technology')}}</a></li>
                                </ul>
                            </li>
                            <li class="drop-down">
                                <a href="#">{{trans('home.Administrative Departments')}}</a>
                                <ul>
                                    <li><a href="#">{{trans('home.Accounting')}}</a></li>
                                    <li><a href="#">{{trans('home.Business Administration')}}</a></li>
                                </ul>
                            </li>
                            <li class="drop-down">
                                <a href="#">{{trans('home.Others')}}</a>
                                <ul>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="drop-down">
                        <a href="#">{{trans('home.Libraries')}}</a>
                        <ul>
                            <li><a href="#">{{trans('home.College Library')}}</a></li>
                            <li><a href="#">{{trans('home.E-Library of College')}}</a></li>
                            <li><a href="#">{{trans('home.Library of Documents')}}</a></li>
                        </ul>
                    </li>
                    <li class="drop-down">
                        <a href="#">{{trans('home.Students')}}</a>
                        <ul>
                            <li><a href="#">{{trans('home.Result Service')}}</a></li>
                            <li><a href="#">{{trans('home.Students affairs')}}</a></li>
                        </ul>
                    </li>
                    <li><a href="#">{{trans('home.Conferences')}}</a></li>
                    <li><a href="#">{{trans('home.Sustainability')}}</a></li>
                </ul>
            </nav>
            <!-- .nav-menu -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center" style="background: rgba(0, 197, 143, 0.01); background: url('assets/img/College_dark.jpg') center center no-repeat; background-attachment: initial; background-size:cover">
        <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">
            <img src="#" alt="" />

            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown"><span>{{trans('home.Al-Gazira College For Medical Sciences & Technologies')}}</span></h2>
                    <p class="animate__animated animate__fadeInUp" style="font-size:25px;">{{trans('home.Lorem ipsum dolor sit amet.')}}</p>
                </div>
            </div>

            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">{{trans('home.College Departments')}}</h2>
                    <a href="#deps" class="btn-get-started animate__animated animate__fadeInUp scrollto">{{trans('home.Read More')}}</a>
                </div>
            </div>

            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">{{trans('home.Geographical Location')}}</h2>
                    <p class="animate__animated animate__fadeInUp" style="font-size:25px;">{{trans('home.Wad Medani, Sudan.')}}</p>
                    <a href="#" class="btn-get-started animate__animated animate__fadeInUp scrollto">{{trans('home.Read More')}}</a>
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Icon Boxes Section ======= -->
        <section id="icon-boxes" class="clients">
            <div class="container">

                <div class="row">
                    <br>
                    <div class="container" data-aos="zoom-in">

                        <div class="owl-carousel clients-carousel">
                            <a href="#" target="_blank"><img src="assets/img/programs/nu.png" alt="" style="width:150px"></a>
                            <a href="#" target="_blank"><img src="assets/img/programs/it.png" alt="" style="width:150px"></a>
                            <a href="#" target="_blank"><img src="assets/img/programs/md.png" alt="" style="width:150px"></a>
                            <a href="#" target="_blank"><img src="assets/img/programs/lb.png" alt="" style="width:150px"></a>
                            <a href="#" target="_blank"><img src="assets/img/programs/ph.png" alt="" style="width:150px"></a>
                            <a href="#" target="_blank"><img src="assets/img/programs/ba.png" alt="" style="width:150px"></a>
                            <a href="#" target="_blank"><img src="assets/img/programs/ac.png" alt="" style="width:150px"></a>
                        </div>
                        <br>
                        <br>
                        <div class="section-title">
                            <h2>College Programs</h2>
                        </div>
                    </div>
                    <!--
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                        <a href="#">
                            <div class="icon-box">
                                <div class="icon">
                                    <img src="assets/img/Google_map1.jpg" alt="" style="height: 90px; width: 200px;" />
                                </div>
                                <h4 class="title" style="color: #00599e; line-height:30px;">Lorem, ipsum dolor</h4>
                                <p class="description">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </a>
                    </div> -->

                </div>

            </div>
        </section>
        <!-- End Icon Boxes Section -->

        <!-- ======= Programs Section ======= -->
        <!-- <section id="deps" class="clients">

        </section> -->
        <!-- End Programs Section -->


        <!-- ======= About Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/College-sm.jpg"); ' data-aos="fade-right">
                        <a href="#" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                    </div>

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">

                        <div class="content">
                            <h3><strong>About GCMST</strong> </h3>
                        </div>

                        <div class="accordion-list">
                            <ul>
                                <li data-aos="fade-up">
                                    <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span>01</span> GCMST Vision <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                                        <p style="text-align:justify">
                                            We aspire that Al-Gazira College shall become a leader in teaching and learning on both local as well as national levels in the fields of medicine, computer and administration. The College shall excel as well in providing academic programs in accordance
                                            with international quality standards, openness to society, promoting scientific research, adopting innovative ideas that could contribute to the development of infrastructure and improvement of functional and
                                            academic performance.
                                        </p>
                                    </div>
                                </li>

                                <li data-aos="fade-up">
                                    <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>02</span> GCMST Mission <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                                        <p style="text-align:justify">
                                            GCMST Mission can be summarized as follows:<br /> • Nurturing students scientifically as well as educationally, and meanwhile encouraging them to excel;<br /> • Promoting the quality of teaching and learning
                                            so that students could acquire the knowledge and new scientific technologies that are required by labor market;<br /> • Utilizing IT and Communication technologies so as to raise the effectiveness of the university
                                            systems, including both education and administration;<br /> • Establishing an academic environment that stimulates creativity and innovation;<br /> • Improving the quality of scientific research; and
                                            <br /> • Interacting with the community institutions of all fields.
                                        </p>
                                    </div>
                                </li>

                                <li data-aos="fade-up">
                                    <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>03</span> GCMST Objectives <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                                        <p style="text-align:justify">
                                            GCMST Objectives can be summarized as follows:<br /> • Preparing and qualifying graduate students with abilities that enable them to compete with their peers in the labor market;<br /> • Based on studying the
                                            renewable need to graduates of various majors, the absorptive capacity shall be increased so as to meet the labor market and development requirements;<br /> • Attracting scientific competencies of university
                                            academics, with main focus on the retired ones;<br /> • Developing human resources through the application of promotional training programs;<br /> • Improving the educational capabilities of faculty members,
                                            especially newly appointed ones;
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= Section ======= -->
        <!-- <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">
                <div class="section-title">
                    <h2>Programs</h2>
                </div>

                <div class="owl-carousel clients-carousel">
                    <a href="#" target="_blank"><img src="assets/img/Logo/logo.png" alt="" style="width:150px"></a>
                </div>

            </div>
        </section> -->
        <!-- End Section -->

        <!-- ======= Message Section ======= -->
        <section id="why-us" class="why-us" style="background-color: #fff;">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">

                        <div class="content" style="text-align:center;">
                            <h3><strong>Mr. Hashim </strong></h3>
                            <p>
                                Dean of Al-Gazira College For Medical Sciences & Technologies
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">
                        <div style="text-align:center;"><img src="assets/img/grads2.jpg" style="border-radius:10px; max-width:100%;"></div>
                    </div>
                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">
                        <div class="accordion-list">
                            <ul>

                                <li data-aos="fade-up">
                                    <a data-toggle="collapse" class="collapse" href="#accordion-list-1">The Dean Welcome Speech<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, eveniet iusto dicta nostrum ipsa sequi esse suscipit. Nemo est praesentium mollitia, esse magnam qui dignissimos cumque sint sunt ullam dolore, placeat ipsam optio officiis rem cupiditate
                                            libero, aliquid iste numquam.
                                        </p>
                                    </div>
                                </li>

                                <div class="content">
                                    <h3><strong></strong> </h3>
                                </div>

                                <li data-aos="fade-up">
                                    <a data-toggle="collapse" href="#accordion-list-dean" class="collapsed">The Dean Message <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-dean" class="collapse show" data-parent=".accordion-list">
                                        <p style="text-align:justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque iusto dolorum culpa possimus vero doloribus, nisi magni perspiciatis aliquam ad cum. Animi provident cumque harum adipisci magnam, asperiores nobis
                                            et.
                                            <a href="#" style="margin-top:8px;">Read More</a>
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- End message Section -->

        <!-- ======= News Section ======= -->
        <section id="about" class="about" style="padding-top:30px; padding-bottom:10px;">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Latest News</h2>
                    <!--<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>-->
                </div>

                <section id="blog" class="blog" style="padding:5px 0px; margin-top:-30px;">
                    <div class="container">

                        <div class="row">
                            <span id="DataList_LastNews" style="width:100%; background-color:#fff; display:inline-block; text-align:center;"><span valign="top">
                                    <div class="col-lg-4 col-md-6 align-items-stretch" data-aos="fade-up" style="display:inline-block; direction:ltr; text-align:left; width:300px;">
                                        <article class="entry">

                                            <div class="entry-img">
                                                <img src="assets/img/n2.jpg" alt="" class="img-fluid" style="width:250%; height:250px;" />
                                            </div>

                                            <h2 class="entry-title" style="height:110px;">
                                                <a href='#'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ratione quod eum?</a>
                                            </h2>

                                            <div class="entry-meta">
                                                <ul>
                                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Mar 29, 2022</time></a></li>
                                                </ul>
                                            </div>

                                            <div class="entry-content">
                                                <div class="read-more">
                                                    <a href="#">Read More</a>
                                                </div>
                                            </div>

                                        </article><!-- End blog entry -->
                                    </div>
                            </span><span valign="top">
                                <div class="col-lg-4 col-md-6 align-items-stretch" data-aos="fade-up" style="display:inline-block; direction:ltr; text-align:left; width:300px;">
                                    <article class="entry">

                                        <div class="entry-img">
                                            <img src="assets/img/n1.jpg" alt="" class="img-fluid" style="width:250%; height:250px;" />
                                        </div>

                                        <h2 class="entry-title" style="height:110px;">
                                            <a href='#'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ratione quod eum?</a>
                                        </h2>

                                        <div class="entry-meta">
                                            <ul>
                                                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Mar 29, 2022</time></a></li>
                                            </ul>
                                        </div>

                                        <div class="entry-content">
                                            <div class="read-more">
                                                <a href="#">Read More</a>
                                            </div>
                                        </div>

                                    </article><!-- End blog entry -->
                                </div>
                            </span><span valign="top">
                      <div class="col-lg-4 col-md-6 align-items-stretch" data-aos="fade-up" style="display:inline-block; direction:ltr; text-align:left; width:300px;">
                          <article class="entry">

                              <div class="entry-img">
                                  <img src="assets/img/n3.jpg" alt="" class="img-fluid" style="width:250%; height:250px;" />
                              </div>

                              <h2 class="entry-title" style="height:110px;">
                                  <a href='#'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ratione quod eum?</a>
                              </h2>

                              <div class="entry-meta">
                                  <ul>
                                      <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Mar 29, 2022</time></a></li>
                                  </ul>
                              </div>

                              <div class="entry-content">
                                  <div class="read-more">
                                      <a href="#">Read More</a>
                                  </div>
                              </div>

                          </article><!-- End blog entry -->
                      </div>
                            </span></span>

                        </div>

                    </div>
                </section>

            </div>
        </section>
        <!-- End News Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">

                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-left">
                        <h3>Admission Guide</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde similique cupiditate ipsa ipsum ut illum in tenetur at! Aliquid quos eum voluptatem culpa, quae excepturi.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Read More</a>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Cta Section -->

        <!-- ======= Portfoio Section ======= -->
        <section id="portfolio" class="portfoio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Media Gallery</h2>
                    <!--<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>-->
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-web">Students</li>
                            <li data-filter=".filter-app">Buildings</li>
                            <!--<li data-filter=".filter-card">Activities</li>-->
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <a href="assets/img/college3.jpg" data-gall="portfolioGallery" class="venobox preview-link"><img src="assets/img/college3.jpg" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4>GCMST</h4>
                            <a href="assets/img/college3.jpg" data-gall="portfolioGallery" class="venobox preview-link"><i class="bx bx-plus"></i></a>
                            <a href="assets/img/college3.jpg" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <a href="assets/img/college1.jpg" data-gall="portfolioGallery" class="venobox preview-link"><img src="assets/img/college1.jpg" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4>GCMST</h4>
                            <a href="assets/img/college1.jpg" data-gall="portfolioGallery" class="venobox preview-link"><i class="bx bx-plus"></i></a>
                            <a href="assets/img/college1.jpg" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <a href="assets/img/college2.jpg" data-gall="portfolioGallery" class="venobox preview-link"><img src="assets/img/college2.jpg" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4>GCMST</h4>
                            <a href="assets/img/college2.jpg" data-gall="portfolioGallery" class="venobox preview-link"><i class="bx bx-plus"></i></a>
                            <a href="assets/img/college2.jpg" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Portfoio Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact" style="background-color: #eff8ff">
            <div class="container" data-aos="fade-up" style="background-color: transparent">

                <div class="section-title">
                    <h2>CONTACT US</h2>
                </div>


                <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right">

                    <div class="col-lg-3" style="background-color: transparent; padding:0px;">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Location:</h4>
                                <p>Wad Medani, Sudan.</p>
                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@Email.com </p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Call:</h4>
                                <p>123456789</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" style="background-color: transparent">

                        <img src="assets/img/Google_map2.jpg" style="width: 70%;" alt="">
                        <!-- <iframe src="#" frameborder="0" allowfullscreen style="width:100%;height:250px;"></iframe> -->

                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->


@endsection
