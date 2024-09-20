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
    <link rel="stylesheet" href="/profile.css">
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
        <a class="" href="{{route('home')}}">Go To Home Page</a>
        <a class="profile" href="{{route('profile.edit')}}"><img src="https://static.vecteezy.com/system/resources/previews/005/076/592/non_2x/hacker-mascot-for-sports-and-esports-logo-free-vector.jpg" class="profile-img" alt=""></a>
    </div>
</nav>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <ul class="sidebar-link-container">
        <li class="sidebar-links"><i class="fas fa-users icon"></i><a href="{{'schedule'}}"> Class Schedule </a></li>
        <li class="sidebar-links"><i class="fa-solid fa-user icon"></i><a href="{{'class'}}"> Add Classes </a></li>
       
        <li class="sidebar-links">
            <i class="fas fa-sign-out-alt icon"></i>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</div>




<div class="offcanvas offcanvas-start"  id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="sidebar-link-container">
            <li class="sidebar-links"><i class="fas fa-users icon"></i><a href="{{ 'schedule'}}"> Class Schedule </a></li>
            <li class="sidebar-links"><i class="fa-solid fa-user icon"></i><a href="{{'class'}}"> Add Classes </a></li>
            <li class="sidebar-links">
                <i class="fas fa-sign-out-alt icon"></i>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>



<!-- Content Section -->
<div class="content" id="content">
    <div class="">
        <div class="profile-container my-4">
            <h3 class="text-center fw-bold">Add Class Schedule</h3>
            <form class="mt-4 row">
                <div class="form-group fw-bold mb-2">
                    Morning Schedule
                </div>
                <div class="form-group col-md-6">
                    <label>Start Time</label>
                    <input type="time" class="form-control custom-input mb-3" >
                </div>
                <div class="form-group col-md-6">
                    <label>End Time</label><br>
                    <input type="time" class="form-control file custom-input mb-3">
                </div>
                <div class="form-group col-md-6">
                    <label>Day</label><br>
                    <select class="form-control custom-input mb-3">
                        <option value="">Select an option</option>
                        <option value="">Monday</option>
                        <option value="">Tuesday</option>
                        <option value="">Wednesday</option>
                        <option value="">Thursday</option>
                        <option value="">Friday</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Classes</label><br>
                    <select class="form-control custom-input mb-3">
                        <option value="">Select an option</option>
                        <option value="">Cardio</option>
                        <option value="">Chest</option>
                        <option value="">Full Body</option>
                        <option value="">Leg</option>
                        <option value="">Shoulder</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Trainer Name</label><br>
                    <input type="text" class="form-control file custom-input mb-3">
                </div>

                <div class="form-group fw-bold mb-2">
                    Evening Schedule
                </div>
                <div class="form-group col-md-6">
                    <label>Start Time</label>
                    <input type="time" class="form-control custom-input mb-3" >
                </div>
                <div class="form-group col-md-6">
                    <label>End Time</label><br>
                    <input type="time" class="form-control file custom-input mb-3">
                </div>
                <div class="form-group col-md-6">
                    <label>Day</label><br>
                    <select class="form-control custom-input mb-3">
                        <option value="">Select an option</option>
                        <option value="">Monday</option>
                        <option value="">Tuesday</option>
                        <option value="">Wednesday</option>
                        <option value="">Thursday</option>
                        <option value="">Friday</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Classes</label><br>
                    <select class="form-control custom-input mb-3">
                        <option value="">Select an option</option>
                        <option value="">Cardio</option>
                        <option value="">Chest</option>
                        <option value="">Full Body</option>
                        <option value="">Leg</option>
                        <option value="">Shoulder</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Trainer Name</label><br>
                    <input type="text" class="form-control file custom-input mb-3">
                </div>
                <button type="submit" class="btn btn-custom btn-block text-white mt-3">Save</button>
            </form>
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
