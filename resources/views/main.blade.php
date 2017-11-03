@extends('layouts.main')

@section('title')
Main Title
@stop
@section('content')



@section('header')

      <!--Home page style-->
        <header id="home" class="home">

            <div class="container">

                <div class="row">

                    <div class="col-md-6 col-md-offset-6 col-sm-12 col-xs-12">
                        <div class="home-content sections">

                            <h1>Simple, Beautiful <span>and Amazing</span></h1>
                            <h4>i hope =)</h4>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget nunc vitae tellus luctus ullamcorper. Nam porttitor ullamcorper felis at convallis. Aenean ornare vestibulum nisi fringilla lacinia. Nullam pulvinar sollicitudin velit id laoreet. Quisque non rhoncus sem.</p> -->

                            <a target="_blank" href="#contact"><button class="btn btn-default btn-lg">Send Messages</button></a>
                            <a target="_blank" href="#download"><button class="btn btn-primary btn-lg">Add Article</button></a>

                            <div class="available">
                                <p>
                                    Available on :
                                    <a href="https://www.apple.com/"><i class="fa fa-apple"></i></a>
                                    <a href="https://www.android.com/"><i class="fa fa-android"></i></a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </header>

@stop

@section('info')

<!-- Sections -->
        <section id="features" class="sections lightbg">
            <div class="container text-center">

                <div class="heading-content">
                    <h3>Smart Portfolio</h3>
                    <h5>By me </h5>
                </div>

                <!-- Example row of columns -->
                <div class="row">

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-content">
                            <i class="fa fa-bookmark-o"></i>
                            <h5>Attractive Layout</h5>
                            <p>The possibility of using a common template will allow you to save your money.</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-content">
                            <i class="fa fa-tablet"></i>
                            <h5>Fresh Design</h5>
                            <p>Thanks to an easy design, the user will immediately be able to understand what and how to do it getting from using a maximum of amusement</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-content">
                            <i class="fa fa-comments"></i>
                            <h5>Multipurpose</h5>
                            <p>There is an opportunity to evaluate the quality of the services provided and share our impressions with us</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-content">
                            <i class="fa fa-comment-o"></i>
                            <h5>Easy to customize</h5>
                            <p>Over time, there is an opportunity to choose a theme but all the time</p>
                        </div>
                    </div>

                </div>
            </div> <!-- /container -->       
        </section>
@stop

@section('galary')

  <!-- Sections -->
        <section id="gallery" class="sections">
            <div class="container text-center">

                <div class="heading-content">
                    <h3> System gallery</h3>
                    <h5>images about system </h5>
                </div>

                <!-- Example row of columns -->
                <div class="row">



                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery">
                                <img src="https://adminvps.ru/img/wordpress.png" alt="" />
                                <h6>Wordpress</h6>

                                <div class="img-overlay"></div>

                                <div class="gallery-icon">
                                    <a class="gallery-img" href="https://adminvps.ru/img/wordpress.png ">View More</a>

                                </div>
                            </div>

                            <p>WordPress is a free and open-source content management system (CMS) based on PHP and MySQL.  </p>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery">
                                <img src="assets/images/gallery/3.png" alt="" />
                                <h6>in developing</h6>

                                <div class="img-overlay"></div>

                                <div class="gallery-icon">

                                    <a class="gallery-img" href="assets/images/gallery/3.png">View More</a>
                                </div>
                            </div>

                            <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar. </p>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery">
                                <img src="assets/images/gallery/3.png" alt="" />
                                <h6>in developing</h6>

                                <div class="img-overlay"></div>

                                <div class="gallery-icon">

                                    <a class="gallery-img" href="assets/images/gallery/3.png">View More</a>
                                </div>
                            </div>

                            <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.</p>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery">
                                <img src="assets/images/gallery/3.png" alt="" />
                                <h6>in developing</h6>

                                <div class="img-overlay"></div>

                                <div class="gallery-icon">
                                    <a class="gallery-img" href="assets/images/gallery/3.png">View More</a>
                                </div>

                            </div>

                            <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.</p>

                        </div>
                    </div>



                </div>
            </div> <!-- /container -->       
        </section>
@stop

@section('video')

            <!-- Sections -->
        <section id="video" class="video">
            <div class="overlay sections">
                <div class="container text-center">
                    <!-- Example row of columns -->
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                            <div class="video-content">

                                <a href="http://www.youtube.com/embed/ee1_2gA8UZY?autoplay=1&amp;.)wmode=opaque&amp;.)fs=1" class="youtube-media"><i class="fa fa-play"></i></a>
                                <h1>Watch the best Technology in <span>Action</span></h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget nunc vitae tellus luctus ullamcorper. Nam porttitor ullamcorper felis at convallis. Aenean ornare vestibulum nisi fringilla lacinia. Nullam pulvinar sollicitudin velit id laoreet. Quisque non rhoncus sem.</p>

                            </div>
                        </div>
                    </div>
                </div> <!-- /container -->
            </div>      
        </section>

@stop
       
@section('price')

   <!-- Sections -->
        <section id="price" class="sections">
            <div class="container text-center">

                <div class="heading-content">
                    <h3>choose your price</h3>
                    <h5>summarise what your product is all about </h5>
                </div>

                <!-- Example row of columns -->
                <div class="row">

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="price-category basic">
                            <h4>Basic Package</h4>
                            <h2>20$</h2>
                            <ul>
                                <li>Nullam suscipit vitae</li>
                                <li>Etiam faucibus</li>
                                <li>Vivamus viverra</li>

                            </ul>
                            <a href="#" class="btn-price">Purchase</a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="price-category professional">
                            <h4>Professional Package</h4>
                            <h2>25$</h2>
                            <ul>
                                <li>Nullam suscipit vitae</li>
                                <li>Etiam faucibus</li>
                                <li>Vivamus viverra</li>
                                <li>Praesent pharetra</li>
                            </ul>
                            <a href="#" class="btn-price">Purchase</a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="price-category advance">
                            <h4>Advanced Package</h4>
                            <h2>30$</h2>
                            <ul>
                                <li>Nullam suscipit vitae</li>
                                <li>Etiam faucibus</li>
                                <li>Vivamus viverra</li>

                            </ul>
                            <a href="#" class="btn-price">Purchase</a>
                        </div>
                    </div>

                </div>
            </div> <!-- /container -->       
        </section>
@stop                

@section('description')

  <!-- Sections -->
        <section id="testimonial" class="sections lightbg">
            <div class="container text-center">

                <div class="heading-content">
                    <h3>Impressions</h3>
                </div>

                <!-- Example row of columns -->
                <div class="row">

                    <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">

                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">

                                <div class="item active">

                                    <div class="col-md-4">
                                        <div class="testimonial-photo">
                                            <img src="assets/images/gallery/2.png" alt="" />
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="testimonial-content">
                                            <p> Fast system to get show and convert your json</p>
                                            <h6><strong>Kirill Elystratov <br />from myself</strong></h6>
                                        </div>
                                    </div>

                                </div>

                                <div class="item">

                                    <div class="col-md-4">
                                        <div class="testimonial-photo">
                                            <img src="assets/images/gallery/2.png" alt="" />
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="testimonial-content">
                                            <p> System with beaty and easy interface</p>
                                            <h6><strong>Kirill Elystratov <br />from myself</strong></h6>
                                        </div>
                                    </div>

                                </div>

                                <div class="item">

                                    <div class="col-md-4">
                                        <div class="testimonial-photo">
                                            <img src="assets/images/gallery/2.png" alt="" />
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="testimonial-content">
                                            <p> Have many different copabilities to give you result</p>
                                            <h6><strong>Kirill Elystratov <br />from myself</strong></h6>
                                        </div>
                                    </div>

                                </div>


                            </div>


                        </div>


                    </div>

                </div>  


            </div> <!-- /container -->       
        </section>

@stop        

@section('question')

    <!-- Sections -->
        <section id="download" class="section colorsbg download">
            <div class="container text-center">

                <!-- Example row of columns -->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="download-content">
                            <h1>Try this ?</h1>
                            {!! Form::open(['route'=>'news.post','method'=>'get']) !!}
                            <button  class="btn btn-primary">Start It Now</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div> <!-- /container -->       
        </section>

@stop

@section('map')

    <!-- Sections -->
        <section id="contact">

            <div id="map"></div>

            <div class="container text-center">

                <!-- Example row of columns -->
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-12 col-xs-12">
                        <div class="contact-form-area">
                            <form method="post" action="{{route('news.ask')}}">
                                <h3>Ask Your messages</h3>    
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Your Subject">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="7" placeholder="Message"></textarea>
                                </div>
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-primary contact-btn">SEND</button>
                            </form>
                        </div>  
                    </div>
                </div>
            </div> <!-- /container -->       
        </section>

@stop        