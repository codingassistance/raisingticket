@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add project</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/css/land.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-yGBqzP6HI2KZ9J4LGV+0RQYOp5O5FN6c8OqO+xgJ4eUn4ndvUQp2IaU7k5ekVZbS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TD6aP5tlfQT3E3L9P1hP9EJ3L9tXqKA5KmblbUHP/A+5CgCsKzUjZ6q6ZmLRXzj" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>

    <head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    @if ($errors->has('pname'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: `{{ $errors->first('pname') }}`
        });
    </script>
    @endif
    @if ($errors->has('emails'))
    <script>
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: `{{ $errors->first('emails') }}`
        });
    </script>
    @endif
    <style>
        .container {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            margin-top: 50px;
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            left: 0;
            background-color: var(--white-color);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 30px;
            z-index: 1000;
            box-shadow: 0 0 2px var(--grey-color-light);
        }
    </style>
    </style>

<body style="background-color: white;">
    <div class="container-fluid">
        <div class="row" style="width:100%;">
            <!-- Sidebar code goes here -->
            <div class="sidebarbody" id="sidebarbody">
                <nav class="navbar">
                    <div class="logo_item">
                        <i class="bx bx-menu" id="sidebarOpen"></i>
                        <img src="/images/logo.png" style="height:60px;width:60px" alt="Light Logo" id="lightLogo">
                    </div>
                </nav>
                <nav class="sidebar">
                    <div class="menu_content">
                        <ul class="menu_items">
                            <div class="menu_title menu_dahsboard"></div>
                            <ul class="menu_items">
                                <div class="menu_title menu_editor"></div>
                                <!-- Start -->
                                <li class="item">
                                    <a href="/" class="nav_link">
                                        <span class="navlink_icon">
                                            <i class="bx bxs-magic-wand"></i>
                                        </span>
                                        <span class="navlink">Home</span>
                                    </a>
                                </li>
                                <!-- End -->
                                <!-- start-->
                                <li class="item">
                                    <a href="{{url('/addp')}}" class="nav_link active">
                                        <span class="navlink_icon">
                                            <i class="bx bx-plus"></i>
                                        </span>
                                        <span class="navlink">Add project</span>
                                    </a>
                                </li>
                                <!-- End -->
                                <li class="item">
                                    <a href="{{url('/adminNotifications')}}" class="nav_link">
                                        <span class="navlink_icon">
                                            <i class="bx bx-bell"></i>
                                        </span>
                                        <span class="navlink">Notifications</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="{{url('/profile')}}" class="nav_link">
                                        <span class="navlink_icon">
                                            <i class="bx bx-user"></i>
                                        </span>
                                        <span class="navlink">Profile</span>
                                    </a>
                                </li>
                                <!-- Start -->
                                <li class="item">
                                    <a class="nav_link" href="{{ route('logout') }}" onclick="localStorage.clear();event.preventDefault();  document.getElementById('logout-form').submit();">
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                        </form><span class="navlink_icon">
                                            <i class="bx bx-log-out"></i>
                                        </span>
                                        <span class="navlink">Logout</span>
                                    </a>
                                </li>
                                <!-- Sidebar Open / Close -->
                                <div class="bottom_content">
                                    <div class="bottom expand_sidebar">
                                        <span> Expand</span>
                                        <i class='bx bx-log-in'></i>
                                    </div>
                                    <div class="bottom collapse_sidebar">
                                        <span> Collapse</span>
                                        <i class='bx bx-log-out'></i>
                                    </div>
                                </div>
                            </ul>
                    </div>
                </nav>
            </div>
            <div class="main-content" style="padding-left: 0;padding-top:70px;">
                <!-- Your content goes here -->
                <div class="content">
                    <!--Number of ticket Section -->
                    <div class="row" style="margin-top: 4px;margin-bottom:20px;">
                        <div class="container">
                            <div class="card-body center" style="background-color: #4169E1;padding:20px;margin:20px 50px;border-radius:8px">
                                <h2 class="card-title" style="text-align:center;color: white;">Add Your Project </h2>
                            </div>
                            <div class="col-md-6 offset-md-3">
                                <form id="addpform" method="post" action="{{ url('/projectstore') }}">
                                    {!! csrf_field() !!}
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="pname" placeholder="Project Name" required>
                                    </div><br>
                                    <div class="mb-3">
                                        <input type="url" class="form-control" name="plink" id="projectLinkInput" placeholder="Project Link" required>
                                    </div><br>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="emailInput" placeholder="Enter email ids">
                                    </div>
                                    <div id="emailList" type="email" class="mb-3"></div>
                                    <button class="btn btn-primary" id="addp" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('#emailInput').on('keydown', function(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                var email = $(this).val().trim();
                if (isEmailInList(email)) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Email already exists in the list!'
                    });
                } else if (!isValidEmail(email)) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Invalid email address!'
                    });
                } else {
                    addEmailToList(email);
                }
            }
        });

        $('#emailList').on('click', '.close', function() {
            var emailToRemove = $(this).closest('.email-item').text().trim();
            $(this).closest('.email-item').remove();
            // Remove corresponding hidden input field
            $('input[value="' + emailToRemove + '"]').remove();
        });
    });

    // Function to validate email address
    function isValidEmail(email) {
        // Regular expression to check if the email is valid
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // Function to check if email already exists in the list
    function isEmailInList(email) {
        var emails = $('#emailList .email-item').map(function() {
            return $(this).text().trim();
        }).get();
        return emails.includes(email + " ×");
    }

    // Function to add email to the list
    function addEmailToList(email) {
        $('#emailList').append('<div class="email-item mb-1">' + email + ' <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'); // Append email to the list with close button
        // Add hidden input field dynamically
        $('<input>').attr({
            type: 'hidden',
            name: 'emails[]', // Use array notation for multiple values
            value: email
        }).appendTo('form');
        $('#emailInput').val(''); // Clear input field after adding email
    }

    document.getElementById('addp').addEventListener('click', function(event) {
        event.preventDefault();
        Swal.fire({
            title: 'Adding the project.',
            html: 'Redirecting, Please wait...',
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading();
            }
        });
        document.getElementById('addpform').submit();
    });
    const sidebarbody = document.querySelector(".sidebarbody");
    const sidebar = document.querySelector(".sidebar");
    const submenuItems = document.querySelectorAll(".submenu_item");
    const sidebarOpen = document.querySelector("#sidebarOpen");
    const sidebarClose = document.querySelector(".collapse_sidebar");
    const sidebarExpand = document.querySelector(".expand_sidebar");

    function checkScreenWidth() {
        if (window.innerWidth < 768) {
            sidebar.classList.add("close");
        } else {
            sidebar.classList.remove("close");
        }
    }
    checkScreenWidth();
    window.addEventListener("resize", checkScreenWidth);
    sidebarOpen.addEventListener("click", () => {
        sidebar.classList.remove("close");
    });

    sidebarClose.addEventListener("click", () => {
        sidebar.classList.add("close", "hoverable");
    });

    sidebarExpand.addEventListener("click", () => {
        sidebar.classList.remove("close", "hoverable");
    });
    document.getElementById('lightLogo').style.display = 'inline';

    submenuItems.forEach((item, index) => {
        item.addEventListener("click", () => {
            item.classList.toggle("show_submenu");
            submenuItems.forEach((item2, index2) => {
                if (index !== index2) {
                    item2.classList.remove("show_submenu");
                }
            });
        });
    });

    if (window.innerWidth < 768) {
        sidebar.classList.add("close");
    } else {
        sidebar.classList.remove("close");
    }
</script>

</html>
@endsection