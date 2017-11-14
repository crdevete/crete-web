@include('layouts.page_header')

<div id="preloader">
    <div class="spinner">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
    </div>
</div>

<!-- Navigation -->

@include('layouts.navigation_bar')

<!-- Header -->
<div id="intro">
    <div class="intro-body">
        <div class="container" style="margin-top: -90px">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h1>We are <span class="brand-heading">CRETE</span></h1>
                    <p class="intro-text">A Full-Web Solutions Agency. <br> We Love What We Do!</p>
                    <a href="#about" class="btn btn-default page-scroll">Learn More</a> </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section -->
<div id="about">
    <div class="container">
        <div class="section-title text-center center">
            <h2>About us</h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-4"><img src="{{url('img/about.jpg')}}" class="img-responsive"></div>
            <div class="col-md-4">
                <div class="about-text">
                    <h4><strong> Who We Are</strong></h4>
                    <p>We are a well-organized web design &amp; development full cycle team, we constructed many websites including Stores, Blogs, Landing Pages, Portfolios, and many others.</p>
                    <p>We are available for communications via Video, Phone and chat calls even in different time zones, we value your time so rest assured our calls will be effective and straight to the point, to achieve maximum satisfaction. So we are looking forward to hear from you. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-text">
                    <h4><strong>What We Do</strong></h4>
                    <p>We are experts in web design (Photoshop, Illustrator), Front-end development (HTML5, CSS3, Bootstrap, JavaScript, JQuery, AJAX), Back-end development (PHP, Laravel, Ruby, Rails), Databases (SQLite, MySQL, PostgreSQL), as well as dealing with any free/open source frameworks and software.</p>
                    <ul>
                        <li>Web Development</li>
                        <li>Web Design</li>
                        <li>Web Optimization</li>
                        <li>Web Solutions</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Section -->
<div id="services" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2>Our Services</h2>
            <hr>
        </div>
        <div class="space"></div>
        <div class="row">
            <div class="col-md-3 col-sm-6 js-wp-1">
                <div class="service"> <i class="fa fa-desktop"></i>
                    <h3>Web Design</h3>
                    <p>Clean, Modern and Attractive web design using Adobe Photosop, Adobe Illustrator and Sketch.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 js-wp-1">
                <div class="service"> <i class="fa fa-cogs"></i>
                    <h3>Web Development</h3>
                    <p>Full Website Developement including Database Setup, Backend Functions and Frontend Design.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 js-wp-1">
                <div class="service"> <i class="fa fa-database"></i>
                    <h3>Database Design</h3>
                    <p>Producing a detailed data model of database contains all the needed logical and physical design.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 js-wp-1">
                <div class="service"><i class="fa fa-html5"></i>
                    <h3>PSD to HTML5</h3>
                    <p>Pixel Perfection transform of Psd Design into Full Responsive HTML5, Css and Javascript Web Pages.</p>
                </div>
            </div>
        </div>
        <div class="space"></div>
        <div class="row">
            <div class="col-md-3 col-sm-6 js-wp-1">
                <div class="service"><i class="fa fa-wordpress"></i>
                    <h3>WordPress</h3>
                    <p>Create Your Blog or News Website and be Live in only Few Minutes and Start blogging Now.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 js-wp-1">
                <div class="service"><i class="fa fa-shopping-cart"></i>
                    <h3>WooCommerce</h3>
                    <p>We Push Your Business up by Creating Your Online Store using WooCommerce the best online Tool For Shopping.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 js-wp-1">
                <div class="service"><i class="fa fa-rocket"></i>
                    <h3>Web Optimization</h3>
                    <p>Have Speed or Security problem With your Website?, Crete Optimization is here to solve all your problem easily.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 js-wp-1">
                <div class="service"><i class="fa fa-server"></i>
                    <h3>Host Solutions</h3>
                    <p>Need To Change or Move your website from host to another? We can do that without shutting down your website for a Second !!.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Section -->
<div id="team" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2>Meet Our team</h2>
            <hr>
            <p>Our passion is burning to take your website dream into reality; ready to be used world widely. It's our mission to develop your website from gathering your requirements, designing, coding, testing, documenting, and finally maintaining, all with high-quality, cost-effective solutions under any constraints agreed upon.</p>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 js-wp-2">
                <div class="thumbnail"> <img src="{{url('img/team/Roz.jpg')}}" alt="..." class="img-thumbnail team-img">
                    <div class="caption">
                        <h3>Mohammed Ali</h3>
                        <p>Business Manager <br> Backend &amp; Database Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 js-wp-2">
                <div class="thumbnail"> <img src="{{url('img/team/Bana.jpg')}}" alt="..." class="img-thumbnail team-img">
                    <div class="caption">
                        <h3>Ahmed El Bana</h3>
                        <p>Front End Web Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 col-sm-12 js-wp-2">
                <div class="thumbnail"> <img src="{{url('img/team/Saber.jpg')}}" alt="..." class="img-thumbnail team-img">
                    <div class="caption">
                        <h3>Mostafa Saber</h3>
                        <p>Full Stack Web Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Learning Paths Section -->
<div id="works">
    <div class="container"> <!-- Container -->
        <div class="section-title text-center center">
            <h2>Learning Paths</h2>
            <hr>
            <div class="clearfix"></div>
            <p></p>
        </div>
        <!--<div class="categories">
            <ul class="cat">
                <li>
                    <ol class="type">
                        <li><a href="#" data-filter="*" class="active">All</a></li>
                        <li><a href="#" data-filter=".lorem">Web Design</a></li>
                        <li><a href="#" data-filter=".consectetur">Web Development</a></li>
                        <li><a href="#" data-filter=".dapibus">Wordpress</a></li>
                    </ol>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>-->
        <div class="row js-wp-3 text-center">
            <div class="portfolio-items">
                <div class="dapibus">
                    <h4 id="learning_paths">We provide you a Fully guided Learning Paths to help you develop the right skills in the right order</h4>
                </div>
                <br>
                <a type="submit" class="btn btn-default" href="{{route('learningPaths')}}">Start your Journey</a>
                <br>
                <br>
                <div class="row course-facebook">
                    <small id="coursesHelp" class="form-text text-muted">Please Keep in Touch with our <a style="color: #3B5998" target="_blank" href="{{url('https://www.facebook.com/groups/1935149636805516')}}">Facebook group<i style="color: #3B5998" class="fa fa-facebook-square" aria-hidden="true"></i></a> for Online Learning </small>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Join Us Section -->
<div id="testimonials" class="text-center " >
<div class="container">
        <div class="section-title center">
            <h2>Join our team</h2>
            <hr>
        </div>
        <div class="row">
            <div class="center">
                <p id="joinUs">In order to keep in touch with us, you can fill out this form and we will contact you when recruitment occurred</p>
            </div>
            <br>
            <a type="submit" class="btn btn-default" href="{{url('/form')}}">Join Us</a>
        </div>
</div>
</div>

<!-- Contact Section -->
<div id="contact" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2>Contact us</h2>
            <hr>
            <p>We value your time so rest assured our calls will be effective and straight to the point.</p>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-4">
                <div class="contact-item"> <i class="fa fa-map-marker fa-2x"></i>
                    <p>Cairo, Egypt</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-item"> <i class="fa fa-envelope-o fa-2x"></i>
                    <p>info@crete-dev.com<br>
                        sales@crete-dev.com</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-item"> <i class="fa fa-phone fa-2x"></i>
                    <p> +2 011 550 990 37<br>
                        +2 010 964 262 67</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <h3>Leave us a message</h3>

            {!! Form::open(['method'=>'POST','action'=>'EmailController@send','id'=>'contactForm']) !!}

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" id="name" class="form-control" placeholder="Name" required="required" name="name">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" id="email" class="form-control" placeholder="Email" required="required" name="email">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                    <p class="help-block text-danger"></p>
                </div>
                <div id="success"></div>
                <button type="submit" class="btn btn-default">Send Message</button>

            {!! Form::close() !!}

            <div class="social">
                <h3>Follow us</h3>
                <ul>
                    <li><a href="https://www.facebook.com/devCRETE"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/CreteDev"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


@include('layouts.page_footer')