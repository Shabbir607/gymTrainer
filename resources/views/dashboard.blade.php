<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/dashboard.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar fixed-top">
    <div class="left-nav">
        <button class="btn mini-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <i class="fa-solid fa-bars "></i>
        </button>
        <div class="sidebar-toggler mx-3"><i class="fa-solid fa-bars " onclick="toggleSidebar()"></i></div>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAHXPluq6GtTRPDIHRv5kJPy86uFjp5sO7hg&s" alt="" width="50px">
    </div>
    <div class="right-nav">
        <a class="" href="{{route('home')}}">Your Website</a>
        <a class="profile" href="{{route('profile.edit')}}"><img src="https://static.vecteezy.com/system/resources/previews/005/076/592/non_2x/hacker-mascot-for-sports-and-esports-logo-free-vector.jpg" class="profile-img" alt=""></a>
    </div>
</nav>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <ul class="sidebar-link-container">
        <li class="sidebar-links"><i class="fas fa-tachometer-alt icon"></i><a href="{{ route('admin.dashboard') }}"> Dashboard </a></li>
        <li class="sidebar-links"><i class="fas fa-users icon"></i><a href="{{route('admin.users')}}"> Users </a></li>
        <li class="sidebar-links"><i class="fa-solid fa-user icon"></i><a href="{{'trainer'}}"> Add  Trainer </a></li>
        <li class="sidebar-links"><i class="fas fa-sign-out-alt icon"></i> <button> Logout </button></li>
    </ul>
</div>




<div class="offcanvas offcanvas-start"  id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="sidebar-link-container">
            <li class="sidebar-links"><i class="fas fa-tachometer-alt icon"></i><a href="{{ route('admin.dashboard') }}"> Dashboard </a></li>
            <li class="sidebar-links"><i class="fas fa-users icon"></i><a href="{{route('admin.users')}}"> Users </a></li>
            <li class="sidebar-links"><i class="fa-solid fa-user icon"></i><a href="{{'trainer'}}"> Add  Trainer </a></li>
            <li class="sidebar-links"><i class="fas fa-sign-out-alt icon"></i> <button> Logout </button></li>
        </ul>
    </div>
</div>


<!-- Content Section -->
<div class="content" id="content">
    <h3 class="my-4 mx-3">Welcome to Your Website!</h3>
    <div class="cont mx-3 my-3">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="dash-widget"><!--!-->
                    <div class="dash-widgetimg"><span><i class="fas fa-money-check-alt mr-2" b-1fr6g0feah=""></i></span></div>
                    <div class="dash-widgetcontent">
                        <h5><span class="counters">Total Users</span></h5>
                        <h6>23</h6>
                    </div>
                </div>
            </div><!--!-->
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="dash-widget dash1"><!--!-->
                    <div class="dash-widgetimg"><span><i class="fas fa-money-check-alt mr-2" b-1fr6g0feah=""></i></span></div>
                    <div class="dash-widgetcontent">
                        <h5><span class="counters">Total Courses</span></h5>
                        <h6>7</h6>
                    </div>
                </div>
            </div><!--!-->
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="dash-widget dash2"><!--!-->
                    <div class="dash-widgetimg"><span><i class="fas fa-hand-holding-usd mr-2" b-1fr6g0feah=""></i></span></div>
                    <div class="dash-widgetcontent">
                        <h5><span class="counters">Level 1 Users</span></h5>
                        <h6>2</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="dash-widget"><!--!-->
                    <div class="dash-widgetimg"><span><i class="fas fa-stream"></i></span></div>
                    <div class="dash-widgetcontent">
                        <h5><span class="counters">Level 2 Users</span></h5>
                        <h6>5</h6>
                    </div>
                </div>
            </div><!--!-->
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="dash-widget dash1"><!--!-->
                    <div class="dash-widgetimg"><span><i class="fas fa-comment-dollar"></i></span></div>
                    <div class="dash-widgetcontent">
                        <h5><span class="counters">Level 3 Users</span></h5>
                        <h6>14</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<script>
    // Function to toggle the sidebar
    function toggleSidebar() {
        var sidebar = document.getElementById("sidebar");
        var content = document.getElementById("content");

        // Check if the sidebar is visible or not
        var sidebarVisible = getComputedStyle(sidebar).left === "0px";

        if (sidebarVisible) {
            // If sidebar is visible, hide it
            sidebar.style.left = "-230px";
            content.style.marginLeft = "0";
        } else {
            // If sidebar is hidden, show it
            sidebar.style.left = "0px";
            content.style.marginLeft = "230px";
        }
    }

    // Function to handle window resize
    function handleResize() {
        var width = window.innerWidth;

        if (width <= 992) {
            // If window width is less than or equal to 992px, hide the sidebar
            document.getElementById("sidebar").style.left = "-230px";
            document.getElementById("content").style.marginLeft = "0";
        } else {
            // If window width is greater than 992px, show the sidebar
            document.getElementById("sidebar").style.left = "0";
            document.getElementById("content").style.marginLeft = "230px";
        }
    }

    // Initial setup on page load
    document.addEventListener("DOMContentLoaded", function () {
        handleResize();
    });

    // Event listener for window resize
    window.addEventListener("resize", function () {
        handleResize();
    });
</script>


</body>
</html>
