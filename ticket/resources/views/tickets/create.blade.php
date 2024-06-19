<?php

use App\Models\User;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Client page</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="/css/land.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php

    use App\Models\Project;

    $projects = Project::all();
    $selected_project = null;
    ?>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar code goes here -->
            <div class="sidebarbody" id="sidebarbody">
                <nav class="navbar">
                    <div class="logo_item">
                        <i class="bx bx-menu" id="sidebarOpen"></i>
                        <img src="/images/logo.png" style="height:60px;width:60px" alt="Light Logo" id="lightLogo">
                    </div>
                    <div class="social-icons-container">
                        <div class="linkedin">
                            <a class="social-icon--link social-icon" href="https://www.linkedin.com/company/inspirante-technologies-pvt-ltd/?originalSubdomain=in" target="_blank" rel="noreferrer">
                                <img src="https://template-editor-assets.s3.eu-west-3.amazonaws.com/assets/social-icons/linkedin/linkedin-square-solid-color.png" alt="LinkedIn">
                            </a>
                        </div>
                        <div class="facebook">
                            <a class="social-icon--link social-icon" href="https://www.facebook.com/Inspirantechnologies" target="_blank" rel="noreferrer">
                                <img src="https://template-editor-assets.s3.eu-west-3.amazonaws.com/assets/social-icons/facebook/facebook-square-solid-color.png" alt="Facebook">
                            </a>
                        </div>
                        <div class="youtube">
                            <a class="social-icon--link social-icon" href="https://www.youtube.com/channel/UCnMdEqI6xEQXvavURAXYiFg" target="_blank" rel="noreferrer">
                                <img src="https://template-editor-assets.s3.eu-west-3.amazonaws.com/assets/social-icons/youtube/youtube-square-solid-color.png" alt="YouTube">
                            </a>
                        </div>
                        <div class="gmail">
                            <a class="social-icon--link social-icon" href="mailto:inspirantech@gmail.com?subject=Mail from Inspirante Website (Ticket Raising)" target="_blank" rel="noreferrer">
                                <img src="https://cdn.iconscout.com/icon/free/png-256/free-gmail-2981844-2476484.png?f=webp" alt="Gmail">
                            </a>
                        </div>
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
                                <br>
                                <hr>
                                <!-- start-->
                                <li class="item">
                                    <a href="{{url('/clientTickets/create')}}" class="nav_link active">
                                        <span class="navlink_icon">
                                            <i class="bx bx-plus"></i>
                                        </span>
                                        <span class="navlink">Raise Ticket</span>
                                    </a>
                                </li>
                                <!-- End -->
                                <hr>
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
            <!-- Main content -->
            <div class="main-content">
                <!-- Your content goes here -->
                <div class="content">
                    <div class="card-container">
                        <div class="card" style="padding: 30px;margin-right:20px">
                            <form action="" method="post" enctype="multipart/form-data" id="ticketForm">
                                {{ csrf_field() }}
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="form-group">
                                    <label for="summary">Summary</label>
                                    <input type="text" id="summary" name="summary" class="form-control {{ $errors->has('summary')?'is-invalid':'' }}" />
                                </div>
                                @if($errors->has('summary'))
                                <span class="help-block">
                                    <p>
                                        {{ $errors->first('summary') }}
                                    </p>
                                </span>
                                @endif
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea id="description" name="description" class="form-control {{ $errors->has('description')?'is-invalid':'' }}"></textarea>
                                    @if($errors->has('description'))
                                    <span class="help-block">
                                        <p>
                                            {{ $errors->first('description') }}
                                        </p>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="projects">projects</label>
                                    @php
                                    $selected_project = null;
                                    @endphp

                                    @foreach($projects as $project)
                                    @php
                                    $allowed_emails = json_decode($project->emailList, true);
                                    @endphp
                                    @if($allowed_emails !== null && in_array($user_email, $allowed_emails))
                                    @php
                                    $selected_project[]= $project->pname . ' - ' . $project->plink;
                                    @endphp
                                    @endif
                                    @endforeach
                                    <select class="form-control" id="project" name="project" required>
                                        @if($selected_project === null)
                                        <option value="" selected disabled>--Select--</option>
                                        <option value="" disabled>No projects found, Ticket cannot be raised.</option>
                                        @else
                                        <option value="" selected disabled>--Select--</option>
                                        @foreach($selected_project as $project)
                                        <option value="{{ $project }}">{{ $project }}</option>
                                        @endforeach
                                        @endif
                                    </select>

                                </div>
                                @include('layouts.partials._statuses')
                                <div class="form-group">
                                    <label for="issueimage">Upload Image</label>
                                    <div class="input-group">
                                        <input type="file" id="issueimage" name="issueimage" accept="image/jpeg, image/png, image/jpg, image/gif, image/svg+xml" class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}"  />
                                        <span class="input-group-text" onclick="openImagePreview()" style="cursor: pointer;">
                                            <i class="fa fa-eye"></i>
                                        </span>
                                    </div>
                                    @if($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                    @endif
                                </div>

                        </div>
                        <button class="btn btn-primary" type="button" id="previewBtn">Add</button> <!-- Change type to "button" -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- Preview Modal -->
    <div class="modal fade" id="previewModal" tabindex="-1" role="dialog" aria-labelledby="previewModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="previewModalLabel">Ticket Preview</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="previewContent">
                    <!-- Preview content will be displayed here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="confirmBtn">Confirm</button>
                    <script>
                        document.getElementById('confirmBtn').addEventListener('click', function(event) {
                            event.preventDefault();
                            var statusSelected = document.getElementById('status').value !== '';
                            var prioritySelected = document.getElementById('priority').value !== '';
                            var projectSelected = document.getElementById('project').value !== '';
                            if (statusSelected && prioritySelected && projectSelected) {
                                Swal.fire({
                                    title: 'Raising the ticket.',
                                    html: 'Redirecting, Please wait...',
                                    allowOutsideClick: false,
                                    didOpen: () => {
                                        Swal.showLoading();
                                    }
                                });
                                document.getElementById('ticketForm').submit();
                            } else {
                                Swal.fire({
                                    title: 'Warning!',
                                    text: 'Please fill all the required fields.',
                                    icon: 'warning',
                                    showCancelButton: false
                                });
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>

    <!-- javascript -->
    <script>
        // script for sidebar
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
        // end script of sidebar

        //script for preview modal
        document.getElementById('previewBtn').addEventListener('click', function() {
            var formData = new FormData(document.getElementById('ticketForm'));
            var previewContent = '<ul class="list-group">';

            formData.forEach(function(value, key) {
                // Exclude the CSRF token and issueimage
                if (key !== '_token' && key !== 'issueimage') {
                    previewContent += '<li class="list-group-item"><strong>' + key + ':</strong> ' + value + '</li>';
                }
            });

            // Check if an image is uploaded
            var imageInput = document.getElementById('issueimage');
            if (imageInput.files.length > 0) {
                var imageFile = imageInput.files[0];
                var imageURL = URL.createObjectURL(imageFile);
                previewContent += '<li class="list-group-item"><strong>Image:</strong><br><img src="' + imageURL + '" class="img-thumbnail" style="max-width: 400px;"></li>';
            }

            previewContent += '</ul>';

            document.getElementById('previewContent').innerHTML = previewContent;
            $('#previewModal').modal('show');
        });

        //image preview
        function openImagePreview() {
        var fileInput = document.getElementById('issueimage');
        if (fileInput.files.length > 0) {
            var imageUrl = URL.createObjectURL(fileInput.files[0]);
            window.open(imageUrl);
        } else {
            alert('Please select an image first.');
        }
    }

    </script>
    </form>
</body>

</html>