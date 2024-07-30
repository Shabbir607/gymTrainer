
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->

    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="/assets/css/templatemo-training-studio.css">
    <link rel="stylesheet" href="/assets/css/auth.css">


</head>
<body>
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
                        <li class="scroll-to-section"><a href="{{url('/')}}" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="{{url('/')}}">About</a></li>
                        <li class="scroll-to-section"><a href="{{url('/')}}">Classes</a></li>
                        <li class="scroll-to-section"><a href="{{url('/')}}">Schedules</a></li>
                        <li class="scroll-to-section"><a href="{{url('/')}}">Contact</a></li>
                        @if (auth()->check())
                            <li class="">
                                <a href="{{ route('profile.edit') }}" class="profile">
                                    <img src="{{ auth()->user()->profile_picture }}" alt="User Profile Picture">
                                </a>
                            </li>
                        @else
                            <li class="main-button">
                                <a href="{{ route('register') }}">Sign Up</a>
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
        <source src="/assets/images/gym-video.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="caption">
            <div class="main-button scroll-to-section">
                <a href="{{route('login')}}">LogIn</a>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card form-container">
                <div class="card-header text-center">
                    LogIn
                </div>
                <div class="card-body">
                    <form  method="POST" action="{{ route('user.login') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control custom-input" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control custom-input" id="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-custom btn-block">Login</button>
                        <div class="text-center mt-3">
                            <p>Already a member <a href="{{route('register')}}">Signup</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
