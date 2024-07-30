<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Training Studio</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="/assets/css/templatemo-training-studio.css">
    <link rel="stylesheet" href="/assets/css/plans.css">

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{route('login')}}" class="logo">Training<em> Studio</em></a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#features">Plans</a></li>
                        <li class="scroll-to-section"><a href="#our-classes">Classes</a></li>
                        <li class="scroll-to-section"><a href="#schedule">Schedules</a></li>
                        <li class="scroll-to-section"><a href="#contact-us">Contact</a></li>
                        @if (auth()->check())
                           @php 
                           $role_id = auth()->user()->role_id;
                           @endphp
                            @switch($role_id)
                                @case(1)
                                    <li class="nav-profile">
                                        <a href="{{ route('profile.edit') }}" class="profile">
                                            <img src="{{ auth()->user()->profile_picture }}" alt="User Profile Picture">
                                        </a>
                                    </li>
                                    <li class="main-button">
                                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="main-button">
                                        <a href="{{ route('logout') }}" 
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                @break
                                @case(2)
                                    <li class="nav-profile">
                                        <a href="{{ route('profile.edit') }}" class="profile">
                                            <img src="{{ auth()->user()->profile_picture }}" alt="User Profile Picture">
                                        </a>
                                    </li>
                                    <li class="main-button">
                                        <a href="{{ route('logout') }}" 
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                @break
                                @case(3)
                                    <li class="nav-profile">
                                        <a href="{{ route('profile.edit') }}" class="profile">
                                            <img src="{{ auth()->user()->profile_picture }}" alt="User Profile Picture">
                                        </a>
                                    </li>
                                    <li class="main-button">
                                        <a href="{{ url('class') }}">Dashboard</a>
                                    </li>
                                    <li class="main-button">
                                        <a href="{{ route('logout') }}" 
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                @break
                            @endswitch
                        @else
                            <li class="main-button">
                                <a href="{{ route('login') }}">Log In</a>
                            </li>
                        @endif

                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner" id="top">
    <video autoplay muted loop id="bg-video">
        <source src="assets/images/gym-video.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="caption">
            <h6>work harder, get stronger</h6>
            <h2>easy with our <em>gym</em></h2>
            <div class="main-button scroll-to-section">
                <a href="#features">Become a member</a>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Features Item Start ***** -->
<section class="section" id="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Choose <em>Membership</em> Plans</h2>
                    <img src="assets/images/line-dec.png" alt="waves">
                    <p>Flexible plans to fit your fitness goals.</p>
                </div>
            </div>
            <section class="plans__container">
              <div class="plans">
                <div class="planItem__container">
                  <!--Basic plan starts -->
                  <div class="planItem planItem--basic">
            
                    <div class="planItem-card">
                      <div class="card__header">
                        <h3>Basic</h3>
                      </div>
                      <div class="card__desc">Perfect for beginners. Access to gym during off-peak hours.</div>
                    </div>
            
                    <div class="price">Rs 200<span>/ month</span></div>
            
                    <ul class="featureList">
                      <li>Access during off-peak hours</li>
                      <li>Use of all gym equipment</li>
                      <li class="disabled">Group classes</li>
                      <li class="disabled">Personal trainer</li>
                      <li class="disabled">Free merchandise</li>
                    </ul>
            
                    <button class="button paln-btn">Get Started</button>
                  </div>
                  <!--Basic plan ends -->
            
                  <!--Standard plan starts -->
                  <div class="planItem planItem--standard">
                    <div class="planItem-card">
                      <div class="card__header">
                        <h3>Standard</h3>
                        <div class="card__label label">Most Popular</div>
                      </div>
                      <div class="card__desc">Ideal for regular gym-goers. Full access to the gym and classes.</div>
                    </div>
            
                    <div class="price">Rs 600<span>/ month</span></div>
            
                    <ul class="featureList">
                      <li>Full access during all hours</li>
                      <li>Use of all gym equipment</li>
                      <li>Group classes</li>
                      <li class="disabled">Personal trainer</li>
                      <li class="disabled">Free merchandise</li>
                    </ul>
            
                    <button class="button paln-btn button--pink">Get Started</button>
                  </div>
                  <!--Standard plan ends -->
            
                  <!--Premium plan starts -->
                  <div class="planItem planItem--premium">
                    <div class="planItem-card">
                      <div class="card__header">
                        <h3>Premium</h3>
                      </div>
                      <div class="card__desc">For the fitness enthusiast. Includes personal training sessions.</div>
                    </div>
            
                    <div class="price">Rs 900<span>/ month</span></div>
            
                    <ul class="featureList">
                      <li>Full access during all hours</li>
                      <li>Use of all gym equipment</li>
                      <li>Group classes</li>
                      <li>Personal trainer</li>
                      <li>Free merchandise</li>
                    </ul>
            
                    <button class="button paln-btn  button--white">Get Started</button>
                  </div>
                  <!--Premium plan ends -->
            
                </div>
              </div>
            </section>         
        </div>
    </div>
</section>

<div id="paymentPopup" class="popup">
  <div class="popup-content">
    <span class="close">&times;</span>
    <h3>Payment Information</h3>
    <p>Pay Using Easypaisa or JazzCash! <br>
       on following nuumber:
       <em><b>0305 8899789</b></em>
    </p>
    <form id="paymentForm">

      <label>Upload Payment Screenshot:</label>
      <input type="file" name="paymentScreenshot" accept="image/*" required>

      <button type="submit" class="submit-btn">Submit</button>
    </form>
  </div>
</div>


<!-- ***** Call to Action Start ***** -->
<section class="section" id="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <h2>Don’t <em>think</em>, begin <em>today</em>!</h2>
                    <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                    <div class="main-button scroll-to-section">
                        <a href="#our-classes">Become a member</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->

<!-- ***** Our Classes Start ***** -->
<section class="section" id="our-classes">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Our <em>Classes</em></h2>
                    <img src="assets/images/line-dec.png" alt="">
                    <p>Discover a variety of classes to help you reach your fitness goals. From high-intensity workouts to relaxing yoga, we have something for everyone.</p>
                </div>
            </div>
        </div>
        <div class="row" id="tabs">
            <div class="col-lg-4">
                <ul>
                    <li><a href='#tabs-1'><img src="assets/images/tabs-first-icon.png" alt="">Cardio Blast</a></li>
                    <li><a href='#tabs-2'><img src="assets/images/tabs-first-icon.png" alt="">Strength Training</a></a></li>
                    <li><a href='#tabs-3'><img src="assets/images/tabs-first-icon.png" alt="">Yoga</a></a></li>
                    <li><a href='#tabs-4'><img src="assets/images/tabs-first-icon.png" alt="">HIIT</a></a></li>
                    <li><a href='#tabs-5'><img src="assets/images/tabs-first-icon.png" alt="">Pilates</a></a></li>
                </ul>
            </div>
            <div class="col-lg-8">
                <section class='tabs-content'>
                    <article id='tabs-1'>
                        <img src="assets/images/training-image-01.jpg" alt="First Class">
                        <h4>Cardio Blast</h4>
                        <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>
                    </article>
                    <article id='tabs-2'>
                        <img src="assets/images/training-image-02.jpg" alt="Second Training">
                        <h4>Strength Training</h4>
                        <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    </article>
                    <article id='tabs-3'>
                        <img src="assets/images/training-image-03.jpg" alt="Third Class">
                        <h4>Yoga</h4>
                        <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel, accumsan a neque.</p>
                    </article>
                    <article id='tabs-4'>
                        <img src="assets/images/training-image-04.jpg" alt="Fourth Training">
                        <h4>HIIt</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget venenatis ipsum commodo et.</p>
                    </article>
                    <article id='tabs-5'>
                        <img src="assets/images/training-image-05.jpg" alt="Fifth Training">
                        <h4>Pilates</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget venenatis ipsum commodo et.</p>
                    </article>
                </section>
            </div>
        </div>
    </div>
</section>
<!-- ***** Our Classes End ***** -->

<section class="section" id="schedule">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading dark-bg">
                    <h2>Classes <em>Schedule</em></h2>
                    <img src="assets/images/line-dec.png" alt="">
                    <p>Discover a variety of classes to help you reach your fitness goals. From high-intensity workouts to relaxing yoga, we have something for everyone.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="filters">
                    <ul class="schedule-filter">
                        <li class="active" data-tsfilter="monday">Monday</li>
                        <li data-tsfilter="tuesday">Tuesday</li>
                        <li data-tsfilter="wednesday">Wednesday</li>
                        <li data-tsfilter="thursday">Thursday</li>
                        <li data-tsfilter="friday">Friday</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-10 offset-lg-1">
                <div class="schedule-table filtering">
                    <table>
                        <tbody>
                        <tr>
                            <td class="day-time">Fitness Class</td>
                            <td class="monday ts-item show" data-tsmeta="monday">10:00AM - 11:30AM</td>
                            <td class="tuesday ts-item" data-tsmeta="tuesday">2:00PM - 3:30PM</td>
                            <td>William G. Stewart</td>
                        </tr>
                        <tr>
                            <td class="day-time">Muscle Training</td>
                            <td class="friday ts-item" data-tsmeta="friday">10:00AM - 11:30AM</td>
                            <td class="thursday friday ts-item" data-tsmeta="thursday" data-tsmeta="friday">2:00PM - 3:30PM</td>
                            <td>Paul D. Newman</td>
                        </tr>
                        <tr>
                            <td class="day-time">Body Building</td>
                            <td class="tuesday ts-item" data-tsmeta="tuesday">10:00AM - 11:30AM</td>
                            <td class="monday ts-item show" data-tsmeta="monday">2:00PM - 3:30PM</td>
                            <td>Boyd C. Harris</td>
                        </tr>
                        <tr>
                            <td class="day-time">Yoga Training Class</td>
                            <td class="wednesday ts-item" data-tsmeta="wednesday">10:00AM - 11:30AM</td>
                            <td class="friday ts-item" data-tsmeta="friday">2:00PM - 3:30PM</td>
                            <td>Hector T. Daigle</td>
                        </tr>
                        <tr>
                            <td class="day-time">Advanced Training</td>
                            <td class="thursday ts-item" data-tsmeta="thursday">10:00AM - 11:30AM</td>
                            <td class="wednesday ts-item" data-tsmeta="wednesday">2:00PM - 3:30PM</td>
                            <td>Bret D. Bowers</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***** Testimonials Starts ***** -->
<section class="section" id="trainers">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Expert <em>Trainers</em></h2>
                    <img src="assets/images/line-dec.png" alt="">
                    <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="/assets/images/first-trainer.jpg" alt="">
                    </div>
                    <div class="down-content">
                        <span>Strength Trainer</span>
                        <h4>Bret D. Bowers</h4>
                        <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="/assets/images/second-trainer.jpg" alt="">
                    </div>
                    <div class="down-content">
                        <span>Muscle Trainer</span>
                        <h4>Hector T. Daigl</h4>
                        <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="/assets/images/third-trainer.jpg" alt="">
                    </div>
                    <div class="down-content">
                        <span>Power Trainer</span>
                        <h4>Paul D. Newman</h4>
                        <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Testimonials Ends ***** -->

<!-- ***** Contact Us Area Starts ***** -->
<section class="section" id="contact-us">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div id="map">
                    <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="contact-form">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="subject" type="text" id="subject" placeholder="Subject">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Contact Us Area Ends ***** -->

<!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; 2024 Training Studio All Right Reserved. </p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="/assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="/assets/js/popper.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="/assets/js/scrollreveal.min.js"></script>
<script src="/assets/js/waypoints.min.js"></script>
<script src="/assets/js/jquery.counterup.min.js"></script>
<script src="/assets/js/imgfix.min.js"></script>
<script src="/assets/js/mixitup.js"></script>
<script src="/assets/js/accordions.js"></script>

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
<script>
var popup = document.getElementById("paymentPopup");
var buttons = document.querySelectorAll(".paln-btn ");
var span = document.getElementsByClassName("close")[0];

// When the user clicks on any "Get Started" button, open the popup
buttons.forEach(button => {
  button.onclick = function() {
    popup.style.display = "block";
  }
});

// When the user clicks on <span> (x), close the popup
span.onclick = function() {
  popup.style.display = "none";
}

// When the user clicks anywhere outside of the popup, close it
window.onclick = function(event) {
  if (event.target == popup) {
    popup.style.display = "none";
  }
}
</script>
</body>
</html>
