@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TD6aP5tlfQT3E3L9P1hP9EJ3L9tXqKA5KmblbUHP/A+5CgCsKzUjZ6q6ZmLRXzj" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/sweetalert/dist/sweetalert.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Ticket register page</title>
    <link rel="stylesheet" href="/css/createReg.css">
    <!-- Include SweetAlert library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
@if(session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '{{ session("error") }}'
    });
</script>
@endif
<!-- sidebar start -->

<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar code goes here -->
            <div class="sidebarbody" id="sidebarbody">
                <nav class="navbar">
                    <div class="logo_item">
                        <i class="bx bx-menu" id="sidebarOpen"></i>
                        <img src="/images/logo.png" style="height:60px;width:60px" alt="Light Logo" id="lightLogo">
                    </div>
                    <!-- social media -->
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
                            <a class="social-icon--link social-icon" href="https://inspirantech@gmail.com" target="_blank" rel="noreferrer">
                                <img src="https://cdn.iconscout.com/icon/free/png-256/free-gmail-2981844-2476484.png?f=webp" alt="Gmail">
                            </a>
                        </div>
                    </div>

                    <!-- social media end -->
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
                                    <a href="/" class="nav_link">
                                        <span class="navlink_icon">
                                            <i class="bx bx-envelope"></i>
                                        </span>
                                        <span class="navlink">Contact</span>
                                    </a>
                                </li>
                                <!-- End -->
                                <!-- start-->
                                <li class="item">
                                    <a href="{{url('/login')}}" class="nav_link">
                                        <span class="navlink_icon">
                                            <i class="bx bx-log-in"></i>
                                        </span>
                                        <span class="navlink">Login</span>
                                    </a>
                                </li>
                                <!-- End -->
                                <!-- start-->
                                <li class="item">
                                    <a href="{{url('/reg')}}" class="nav_link active">
                                        <span class="navlink_icon">
                                            <i class="bx bx-user-plus"></i>
                                        </span>
                                        <span class="navlink">Signup</span>
                                    </a>
                                </li>
                                <!-- End -->
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
                        <div class="card text-center">
                            <div class="card-body" style="background-color: #4169E1;padding:20px;margin-right:20px">
                                <h2 class="card-title" style="color: white;">Create Your Account </h2>
                            </div>
                            <div id="login">
                                <div class="container">
                                    <div id="login-row" class="row justify-content-center align-items-center">
                                        <div id="login-column" class="col-md-6">
                                            <div id="login-box" class="col-md-12">
                                                <form id="login-form" action="{{ route('register') }}" method="post" class="reg-form">
                                                    {!! csrf_field() !!}
                                                    <h3 class="text-center text-info">SignUp</h3>
                                                    <hr>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="fname" class="text-info">First Name:</label>
                                                            <input type="text" name="fname" id="fname" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="lname" class="text-info">Last Name:</label>
                                                            <input type="text" name="lname" id="lname" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="semail" class="text-info">Email:</label>
                                                        <input type="email" name="semail" id="semail" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password" class="text-info">Password:</label>
                                                        <div class="input-group">
                                                            <input type="password" name="password" id="password" class="form-control">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i id="togglePassword" class="fa fa-eye"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password" class="text-info">Confirm Password:</label>
                                                        <div class="input-group">
                                                            <input type="password" name="cpassword" id="cpassword" class="form-control">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i id="toggleCPassword" class="fa fa-eye"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" name="btnsubmit" class="btn btn-primary btn-block">Submit</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <link rel="stylesheet" href="https://unpkg.com/sweetalert/dist/sweetalert.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
    </script>

    <link rel="stylesheet" href="https://unpkg.com/sweetalert/dist/sweetalert.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        (function() {
            document.querySelector(".reg-form").addEventListener("submit", function(event) {
                event.preventDefault();
                let fname = document.getElementById('fname').value;
                let email = document.getElementById('semail').value;
                let password = document.getElementById('password').value;
                let confirmPassword = document.getElementById('cpassword').value;
                let isValid = true;
                if (fname === "") {
                    isValid = false;
                    swal("Error", "First Name is required field", "error");
                }
                if (isValid && email === "") {
                    isValid = false;
                    swal("Error", "Email is required field", "error");
                } else if (isValid && (!email.endsWith("@gmail.com") && !email.endsWith("@yahoo.com") && !email.endsWith("@nmamit.in"))) {
                    isValid = false;
                    swal("Error", "Invalid Email", "error");
                }
                if (isValid && password === "") {
                    isValid = false;
                    swal("Error", "Password is required field", "error");
                } else if (isValid && !isPasswordValid(password)) {
                    isValid = false;
                    swal("Error", "Password should be at least 8 characters with at least one number, one capital letter, and one symbol", "error");
                }
                if (isValid && confirmPassword === "") {
                    isValid = false;
                    swal("Error", "Confirm Password is required field", "error");
                } else if (isValid && confirmPassword !== password) {
                    isValid = false;
                    swal("Error", "Password and Confirm Password do not match", "error");
                }
                if (isValid) {
                    let generatedCode;
                    let timer;

                    function generateRandomCode(length) {
                        const charset = "0123456789";
                        let code = "";
                        for (let i = 0; i < length; i++) {
                            const randomIndex = Math.floor(Math.random() * charset.length);
                            code += charset[randomIndex];
                        }
                        return code;
                    }

                    function startTimer() {
                        timer = setInterval(function() {
                            generatedCode = generateRandomCode(6);
                        }, 120000);
                    }
                    startTimer();

                    function resetTimer() {
                        clearInterval(timer);
                    }
                    generatedCode = generateRandomCode(6);
                    Swal.fire({
                        title: 'Setting up the mail...',
                        html: 'Please wait...',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });
                    Email.send({
                        Host: "smtp.elasticemail.com",
                        Username: "vandanaprabhu702@gmail.com",
                        Password: "ECE65D1578529A982F0CCF537C56FD007684",
                        To: email,
                        From: 'vandanaprabhu702@gmail.com',
                        Subject: "Verification Code",
                        Body: `<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
                    
                    <head>
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="x-apple-disable-message-reformatting">
                        <meta name="format-detection" content="telephone=no,address=no,email=no,date=no,url=no">
                
                        <meta name="color-scheme" content="light">
                        <meta name="supported-color-schemes" content="light">
                
                        
                        <!--[if !mso]><!-->
                          
                        <!--<![endif]-->
                
                        <!--[if mso]>
                          <style>
                              // TODO: fix me!
                              * {
                                  font-family: sans-serif !important;
                              }
                          </style>
                        <![endif]-->
                    
                        
                        <!-- NOTE: the title is processed in the backend during the campaign dispatch -->
                        <title></title>
                
                        <!--[if gte mso 9]>
                        <xml>
                            <o:OfficeDocumentSettings>
                                <o:AllowPNG/>
                                <o:PixelsPerInch>96</o:PixelsPerInch>
                            </o:OfficeDocumentSettings>
                        </xml>
                        <![endif]-->
                        
                    <style>
                        :root {
                            color-scheme: light;
                            supported-color-schemes: light;
                        }
                
                        html,
                        body {
                            margin: 0 auto !important;
                            padding: 0 !important;
                            height: 100% !important;
                            width: 100% !important;
                
                            overflow-wrap: break-word;
                            -ms-word-break: break-all;
                            -ms-word-break: break-word;
                            word-break: break-all;
                            word-break: break-word;
                        }
                
                
                        
                  direction: undefined;
                  center,
                  #body_table{
                    
                  }
                
                  .paragraph {
                    font-size: 14px;
                    font-family: Helvetica, sans-serif;
                    color: #000000;
                  }
                
                  ul, ol {
                    padding: 0;
                    margin-top: 0;
                    margin-bottom: 0;
                  }
                
                  li {
                    margin-bottom: 0;
                  }
                 
                  .list-block-list-outside-left li {
                    margin-left: 20px;
                  }
                
                  .list-block-list-outside-right li {
                    margin-right: 20px;
                  }
                  
                  .heading1 {
                    font-weight: 400;
                    font-size: 28px;
                    font-family: Helvetica, sans-serif;
                    color: #4A5568;
                  }
                
                  .heading2 {
                    font-weight: 400;
                    font-size: 20px;
                    font-family: Helvetica, sans-serif;
                    color: #4A5568;
                  }
                
                  .heading3 {
                    font-weight: 400;
                    font-size: 16px;
                    font-family: Helvetica, sans-serif;
                    color: #4A5568;
                  }
                  
                  a {
                    color: #cd8c30;
                    text-decoration: none;
                  }
                  
                
                
                        * {
                            -ms-text-size-adjust: 100%;
                            -webkit-text-size-adjust: 100%;
                        }
                
                        div[style*="margin: 16px 0"] {
                            margin: 0 !important;
                        }
                
                        #MessageViewBody,
                        #MessageWebViewDiv {
                            width: 100% !important;
                        }
                
                        table {
                            border-collapse: collapse;
                            border-spacing: 0;
                            mso-table-lspace: 0pt !important;
                            mso-table-rspace: 0pt !important;
                        }
                        table:not(.button-table) {
                            border-spacing: 0 !important;
                            border-collapse: collapse !important;
                            table-layout: fixed !important;
                            margin: 0 auto !important;
                        }
                
                        th {
                            font-weight: normal;
                        }
                
                        tr td p {
                            margin: 0;
                        }
                
                        img {
                            -ms-interpolation-mode: bicubic;
                        }
                
                        a[x-apple-data-detectors],
                
                        .unstyle-auto-detected-links a,
                        .aBn {
                            border-bottom: 0 !important;
                            cursor: default !important;
                            color: inherit !important;
                            text-decoration: none !important;
                            font-size: inherit !important;
                            font-family: inherit !important;
                            font-weight: inherit !important;
                            line-height: inherit !important;
                        }
                
                        .im {
                            color: inherit !important;
                        }
                
                        .a6S {
                            display: none !important;
                            opacity: 0.01 !important;
                        }
                
                        img.g-img+div {
                            display: none !important;
                        }
                
                        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
                            u~div .contentMainTable {
                                min-width: 320px !important;
                            }
                        }
                
                        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
                            u~div .contentMainTable {
                                min-width: 375px !important;
                            }
                        }
                
                        @media only screen and (min-device-width: 414px) {
                            u~div .contentMainTable {
                                min-width: 414px !important;
                            }
                        }
                    </style>
                
                    <style>
                        @media only screen and (max-device-width: 600px) {
                            .contentMainTable {
                                width: 100% !important;
                                margin: auto !important;
                            }
                            .single-column {
                                width: 100% !important;
                                margin: auto !important;
                            }
                            .multi-column {
                                width: 100% !important;
                                margin: auto !important;
                            }
                            .imageBlockWrapper {
                                width: 100% !important;
                                margin: auto !important;
                            }
                        }
                        @media only screen and (max-width: 600px) {
                            .contentMainTable {
                                width: 100% !important;
                                margin: auto !important;
                            }
                            .single-column {
                                width: 100% !important;
                                margin: auto !important;
                            }
                            .multi-column {
                                width: 100% !important;
                                margin: auto !important;
                            }
                            .imageBlockWrapper {
                                width: 100% !important;
                                margin: auto !important;
                            }
                        }
                    </style>
                    <style></style>
                    
                 <!--[if mso | IE]>
                    <style>
                        .list-block-outlook-outside-left {
                            margin-left: -18px;
                        }
                    
                        .list-block-outlook-outside-right {
                            margin-right: -18px;
                        }
                
                    </style>
                 <![endif]-->
                
                
                    </head>
                
                    <body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #efefef;">
                        <center role="article" aria-roledescription="email" lang="en" style="width: 100%; background-color: #efefef;">
                            
                                        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="600" style="margin: auto;" class="contentMainTable">
                                            <tr class="wp-block-editor-spacerblock-v1"><td style="background-color:#EFEFEF;line-height:30px;font-size:30px;width:100%;min-width:100%">&nbsp;</td></tr><tr class="wp-block-editor-paragraphblock-v1"><td valign="top" style="padding:20px 20px 20px 20px;background-color:#EFEFEF"><p class="paragraph" style="font-family:Helvetica, sans-serif;text-align:right;line-height:1.15;font-size:9px;margin:0;color:#4A5568;word-break:normal">Unable to view? Read it <a href="{view}" data-type="mergefield" data-id="df81370a-ecd3-455f-9de8-f24576e72260-yTJQHrdYhYCwuUX8e_vjD" data-filename="" class="df81370a-ecd3-455f-9de8-f24576e72260-yTJQHrdYhYCwuUX8e_vjD" data-mergefield-value="view" data-mergefield-input-value="" style="color: #cd8c30;">Online</a></p></td></tr><tr class="wp-block-editor-imageblock-v1"><td style="background-color:#EFEFEF;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px" align="center"><table align="center" width="168" class="imageBlockWrapper" style="width:168px" role="presentation"><tbody><tr><td style="padding:0"><img src="https://api.smtprelay.co/userfile/fce461b2-a74a-4a02-9c15-840c04e135f3/inspirante.jpg" width="168" height="" alt="" style="border-radius:0px;display:block;height:auto;width:100%;max-width:100%;border:0" class="g-img"></td></tr></tbody></table></td></tr><tr class="wp-block-editor-paragraphblock-v1"><td valign="top" style="padding:20px 20px 5px 20px;background-color:#FFFFFF"><p class="paragraph" style="font-family:Helvetica, sans-serif;text-align:center;direction:ltr;line-height:1.15;font-size:24px;margin:0;color:#4A5568;letter-spacing:0;word-break:normal"><a href="{url}" data-type="mergefield" data-filename="" data-id="2f9d5c85-09fe-43be-a031-e21353eff654-4_nMFVYxXK77hHT8FAPat" class="2f9d5c85-09fe-43be-a031-e21353eff654-4_nMFVYxXK77hHT8FAPat" data-mergefield-value="url" data-mergefield-input-value="" style="color: #cd8c30;">Inspirante Techonologies Pvt Ltd.</a></p></td></tr><tr class="wp-block-editor-paragraphblock-v1"><td valign="top" style="padding:20px 20px 20px 20px;background-color:#fff"><p class="paragraph" style="font-family:Helvetica, sans-serif;line-height:1.15;font-size:16px;margin:0;color:#4A5568;letter-spacing:0;word-break:normal">Dear user,<br><br>Here is the verification code. Please enter this code within 2 minutes.<br><br><b style="font-size: xx-large;">` + generatedCode + `</b><br><br>If you have any questions or require assistance, feel free to reach out to our dedicated support team at <a href="{inspirantech@gmail.com}" data-type="mergefield" data-id="3d08b48a-6a47-4681-97d2-d7a6fc793f79-IJnBS9_z5-kMvqE9QOhGX" data-filename="" data-mergefield-value="custom" data-mergefield-input-value="inspirantech@gmail.com" class="3d08b48a-6a47-4681-97d2-d7a6fc793f79-IJnBS9_z5-kMvqE9QOhGX" style="color: #cd8c30;">inspirantech@gmail.com</a>.<br><br>Thank you once again for choosing Inspirate Technologies Pvt Ltd. <br><br>We appreciate the opportunity to serve you, and we\'re confident that your experience with us will be both rewarding and enjoyable.<br><br>Best regards,<br>[Your Name]<br>[Your Title/Position]<br>Inspirate Technologies Pvt Ltd<br>[Contact Information]</p></td></tr><tr class="wp-block-editor-imageblock-v1"><td style="background-color:#fff;padding-top:0;padding-bottom:0;padding-left:0;padding-right:0" align="center"><table align="center" width="210" class="imageBlockWrapper" style="width:210px" role="presentation"><tbody></tbody></table></td></tr><tr class="wp-block-editor-headingblock-v1"><td valign="top" style="background-color:#fff;display:block;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;text-align:center"><p style="font-family:Helvetica, sans-serif;text-align:center;line-height:23.00px;font-size:20px;background-color:#fff;color:#4A5568;margin:0;word-break:normal" class="heading2">Follow us on</p></td></tr><tr class="wp-block-editor-socialiconsblock-v1" role="article" aria-roledescription="social-icons" style="display:table-row;background-color:#fff"><td style="width:100%"><table style="background-color:#fff;width:100%;padding-top:15px;padding-bottom:32px;padding-left:32px;padding-right:32px;border-collapse:separate !important" cellpadding="0" cellspacing="0" role="presentation"><tbody><tr><td align="center" valign="top"><div style="max-width:536px"><table role="presentation" style="width:100%" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td valign="top"><div style="margin-left:auto;margin-right:auto;margin-top:-3.75px;margin-bottom:-3.75px;width:100%;max-width:141px"><table role="presentation" style="padding-left:197.5" width="100%" cellpadding="0" cellspacing="0"><tbody><tr><td><table role="presentation" align="left" style="float:left" class="single-social-icon" cellpadding="0" cellspacing="0"><tbody><tr><td valign="top" style="padding-top:3.75px;padding-bottom:3.75px;padding-left:7.5px;padding-right:7.5px;border-collapse:collapse !important;border-spacing:0;font-size:0"><a class="social-icon--link" href="https://www.youtube.com/channel/UCnMdEqI6xEQXvavURAXYiFg" target="_blank" rel="noreferrer"><img src="https://template-editor-assets.s3.eu-west-3.amazonaws.com/assets/social-icons/youtube/youtube-square-solid-color.png" width="32" height="32" style="max-width:32px;display:block;border:0" alt="X (formerly Twitter)"></a></td></tr></tbody></table><table role="presentation" align="left" style="float:left" class="single-social-icon" cellpadding="0" cellspacing="0"><tbody><tr><td valign="top" style="padding-top:3.75px;padding-bottom:3.75px;padding-left:7.5px;padding-right:7.5px;border-collapse:collapse !important;border-spacing:0;font-size:0"><a class="social-icon--link" href="https://www.linkedin.com/company/inspirante-technologies-pvt-ltd/?originalSubdomain=in" target="_blank" rel="noreferrer"><img src="https://template-editor-assets.s3.eu-west-3.amazonaws.com/assets/social-icons/linkedin/linkedin-square-solid-color.png" width="32" height="32" style="max-width:32px;display:block;border:0" alt="LinkedIn"></a></td></tr></tbody></table><table role="presentation" align="left" style="float:left" class="single-social-icon" cellpadding="0" cellspacing="0"><tbody><tr><td valign="top" style="padding-top:3.75px;padding-bottom:3.75px;padding-left:7.5px;padding-right:7.5px;border-collapse:collapse !important;border-spacing:0;font-size:0"><a class="social-icon--link" href="https://inspirantech.in/" target="_blank" rel="noreferrer"><img src="https://template-editor-assets.s3.eu-west-3.amazonaws.com/assets/social-icons/website/website-square-solid-color.png" width="32" height="32" style="max-width:32px;display:block;border:0" alt="Website"></a></td></tr></tbody></table></td></tr></tbody></table></div></td></tr></tbody></table></div></td></tr></tbody></table></td></tr>
                                        </table>
                                    
                        </center>
                    </body>
                   </html>`,
                    }).then(() => {
                        Swal.fire({
                            title: 'Enter Verification Code (Check your mail for the code)',
                            input: 'text',
                            inputAttributes: {
                                autocapitalize: 'off',
                                maxlength: 6, // Maximum length of input
                                pattern: '[0-9]*', // Only allow digits
                                style: 'text-align: center; font-size: 24px;' // Style to center and increase font size
                            },
                            inputValidator: (value) => {
                                if (!value || value.length !== 6 || isNaN(value)) {
                                    return 'Please enter a valid 6-digit code';
                                }
                            },
                            confirmButtonText: 'Verify',
                            showLoaderOnConfirm: true,
                            preConfirm: (code) => {
                                if (code === generatedCode) {
                                    Swal.fire({
                                        title: "Code Verified",
                                        icon: "success",
                                        timer: 2000,
                                        showConfirmButton: false,
                                    })
                                    document.getElementById('fname').setAttribute('readonly', "");
                                    document.getElementById('lname').setAttribute('readonly', "");
                                    document.getElementById('cpassword').setAttribute('readonly', "");
                                    document.getElementById('password').setAttribute('readonly', "");
                                    document.getElementById('semail').setAttribute('readonly', "");
                                    Swal.fire({
                                        title: 'Your Email is verified.',
                                        html: 'Redirecting, Please wait...',
                                        allowOutsideClick: false,
                                        didOpen: () => {
                                            Swal.showLoading();
                                        }
                                    });
                                    this.submit();
                                } else {
                                    Swal.showValidationMessage('Invalid code');
                                }
                            },
                            allowOutsideClick: false
                        });

                    });
                }
            });

            function isPasswordValid(password) {
                if (!/^(?=.*\d)(?=.*[A-Z])(?=.*\W).{8,}$/.test(password)) {
                    swal("Error", "Password should have 8 characters with at least one number, one capital letter, and one symbol", "error");
                    return false;
                }
                return true;
            }
        })();

        (function() {
            document.getElementById('togglePassword').addEventListener('click', togglePasswordVisibility);
            document.getElementById('toggleCPassword').addEventListener('click', toggleCPasswordVisibility);

            function togglePasswordVisibility() {
                const passwordInput = document.getElementById('password');
                const passwordIcon = document.getElementById('togglePassword');
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    passwordIcon.classList.remove('fa-eye');
                    passwordIcon.classList.add('fa-eye-slash');
                } else {
                    passwordInput.type = 'password';
                    passwordIcon.classList.remove('fa-eye-slash');
                    passwordIcon.classList.add('fa-eye');
                }
            }

            function toggleCPasswordVisibility() {
                const cpasswordInput = document.getElementById('cpassword');
                const cpasswordIcon = document.getElementById('toggleCPassword');
                if (cpasswordInput.type === 'password') {
                    cpasswordInput.type = 'text';
                    cpasswordIcon.classList.remove('fa-eye');
                    cpasswordIcon.classList.add('fa-eye-slash');
                } else {
                    cpasswordInput.type = 'password';
                    cpasswordIcon.classList.remove('fa-eye-slash');
                    cpasswordIcon.classList.add('fa-eye');
                }
            }
        })();
    </script>
</body>

</html>
@endsection