
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="/assets/css/templatemo-training-studio.css">
    <link rel="stylesheet" href="/assets/css/profile.css">

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
                        <li class="scroll-to-section"><a href="{{route('home')}}" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="{{url('/')}}">Plans</a></li>
                        <li class="scroll-to-section"><a href="{{url('/')}}">Classes</a></li>
                        <li class="scroll-to-section"><a href="{{url('/')}}">Schedules</a></li>
                        <li class="scroll-to-section"><a href="{{url('/')}}">Contact</a></li>
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
                                        <a href="{{ route('class') }}">Dashboard</a>
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
        <source src="/assets/images/gym-video.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="caption">
            <div class="main-button scroll-to-section">
                <a href="{{route('profile.edit')}}">Profile</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="profile-container">
        <div class="profile-header text-center">
            <h2>User Profile</h2>
            @php
            $user = auth()->user();
            @endphp
            <div class="text-center">
                <img src="{{$user->profile_picture}}" alt="Profile Image" class="profile-img mt-3">
            </div>
        </div>

        <form class="mt-4" method="post" action="{{ route('user.profile.update') }}"  enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control custom-input" name="username" id="username" placeholder="Enter username" value="{{$user->username}}">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control custom-input" id="email" placeholder="Enter email" value="{{$user->email}}">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" name="phone" class="form-control custom-input" id="phone" placeholder="Enter phone number" value="{{$user->phone}}">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control custom-input" id="password" placeholder="Enter new password">
            </div>
            <div class="form-group">
                <label for="image">Update Profile Image</label>
                <input type="file" name="profile_picture" class="form-control-file custom-input" id="image">
            </div>
            <button type="submit" class="btn btn-custom btn-block">Update Profile</button>
        </form>
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

