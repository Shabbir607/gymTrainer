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
    <div class="mt-3">
        <h2 class="mb-4 fw-bold">Users Listing</h2>
        <!-- <input type="text" id="searchInput" class="form-control search-input" placeholder="Search..."> -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="tableBody">
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    @if($user->role_id == '1')
                        <td>Admin</td>

                    @elseif($user->role_id == '2')
                        <td>User</td>
                    @elseif($user->role_id == '3')
                        <td>Trainer</td>
                    @endif

                    <td class="action-icons">
                        <i class="bi bi-pencil-square" onclick="showEditModal()"></i>
                        <i class="bi bi-trash" onclick="confirmDelete()"></i>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Row</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        <div class="mb-3">
                            <label for="editName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="editName" required>
                        </div>
                        <div class="mb-3">
                            <label for="editEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="editEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="editAge" class="form-label">Age</label>
                            <input type="number" class="form-control" id="editAge" required>
                        </div>
                        <div class="mb-3">
                            <label for="editCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="editCity" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this row?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
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

    function showEditModal() {
        new bootstrap.Modal(document.getElementById('editModal')).show();
    }


    function confirmDelete() {
        new bootstrap.Modal(document.getElementById('deleteModal')).show();
    }

    document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
        currentRow.remove();
        bootstrap.Modal.getInstance(document.getElementById('deleteModal')).hide();
    });
</script>


</body>
</html>
