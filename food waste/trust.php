<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['btn']))
{
$qry=mysqli_query($conn,"select * from tregister where uname='$uname' && psw='$password' ");
$num=mysqli_num_rows($qry);
if($num==1)
{
$row=mysqli_fetch_assoc($qry);
$_SESSION['tid']=$row['id'];
?>
<script>alert('welcome to Trust home page');
</script>
<?php

header("location:trusthome.php");
}
else
{
echo "<script>alert('User Name Password Wrong.....')</script>";
}
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReservQ - Restaurant Booking Html Template </title>
    <!-- fave-icon  -->
    <link rel="shortcut icon" href="./assets/images/icon/fave.png" type="image/png">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/venobox.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <!-- login  -->
    <div class="sign-up-top">
        <div class="sign-up-main-two">
            <div class="sign-up-main-two-item">
                <div class="sign-up-img">
                    <a href="index.html"> <img src="./assets/images/thumb/login.png" alt="img"></a>
                    <div class="sign-up-main-two-item-text">
                        <p>You agree to ReservQ <span>Terms of Use & Privacy Policy.</span> You don't need to consent as
                            a condition
                            of
                            food, or buying any other goods or services. Message/data rates may apply.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="sign-up-main">   <div class="logo">
                                    <a href="index.html" ><h3 style="color:white;font-weight:900;"> Revolutionizing food sharing for sustainable tomorrow</h3></a>
                                </div>
            <div class="sign-up-text">
                <h2>Volunteer Login</h2>
                <p>Welcome back! Please enter your details.</p>
            </div>
<form method="post">
            <div class="sign-up-from">
                <div class="sign-up-from-item">
                    <div class="sign-up-from-inner">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" class="form-control" name="uname" id="exampleFormControlInput"
                            placeholder="Enter Username">
                    </div>				
                    <div class="sign-up-from-inner">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleFormControlInput1" placeholder="Enter Password">
                        <div class="icon">
                            <span> 
                            </span>
                        </div>
                    </div>
                    <div class="sign-up-from-inner">
                        <div class="sign-up-from-df">
                            <div class="form-check"> 
                            </div>
                            <div class="sign-up-main-btn">
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal-4" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-six">
                                        <div class="modal-content modal-content-three ">
                                            <div class="modal-body">
                                                <div class="modal-sign-up-logo">
                                                    <img src="./assets/images/logo/logo-header.svg" alt="logo">
                                                    <button class="modal-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span>
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M16.2427 7.75786L7.75739 16.2431M16.2427 16.2431L7.75739 7.75781"
                                                                    stroke="#F01543" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="modal-sign-up-text">
                                                    <h2>Reset your password</h2>
                                                    <p>Enter the email address associated with your account and we'll
                                                        send you a link to reset your password.</p>
                                                </div>
                                                <div class="modal-sign-up-from">
                                                    <input type="email" class="form-control"
                                                        id="exampleFormControlInput2" placeholder="onamsarker@mail.com">
                                                </div>
                                                <div class="modal-sign-up-from-btn-two">
                                                    <a href="login.html">Return to login</a>
                                                </div>
                                                <div class="btn-one-modal">
                                                    <button type="button" class=" main-btn-four " data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal-5" data-bs-dismiss="modal">
                                                        Continue
                                                        <span>
                                                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_317_13742)">
                                                                    <path
                                                                        d="M1.41972 8.63898L11.0737 8.63898L7.30373 12.379C7.09177 12.5965 6.97314 12.8882 6.97314 13.192C6.97314 13.4957 7.09177 13.7875 7.30373 14.005C7.51841 14.217 7.80799 14.3359 8.10973 14.3359C8.41146 14.3359 8.70105 14.217 8.91573 14.005L14.6477 8.305C14.8528 8.0869 14.9669 7.79885 14.9669 7.49951C14.9669 7.20018 14.8528 6.91207 14.6477 6.69397L8.91573 0.993959C8.70105 0.781929 8.41146 0.663087 8.10973 0.663087C7.80799 0.663087 7.51841 0.781928 7.30373 0.993959C7.09659 1.20969 6.97748 1.49504 6.96973 1.79401C6.97267 2.09575 7.09238 2.3846 7.30373 2.59998L11.0737 6.35498L1.41972 6.35498C1.12309 6.36377 0.84155 6.48776 0.634836 6.70068C0.428121 6.91361 0.312501 7.19872 0.312501 7.49548C0.312501 7.79225 0.428121 8.07736 0.634835 8.29028C0.84155 8.50321 1.12309 8.6272 1.41972 8.63599L1.41972 8.63898Z"
                                                                        fill="white" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModal-5" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-six">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="modal-sign-up-text">
                                                    <h2>Enter verification code</h2>
                                                    <p>We have just sent a verification code to ajoy*****@mail.com</p>
                                                </div>
                                                <div class="modal-sign-up-from modal-sign-up-from-two ">
                                                    <input type="email" class="form-control"
                                                        id="exampleFormControlInput4">
                                                    <input type="email" class="form-control"
                                                        id="exampleFormControlInput5">
                                                    <input type="email" class="form-control"
                                                        id="exampleFormControlInput6">
                                                    <input type="email" class="form-control"
                                                        id="exampleFormControlInput7">
                                                </div>
                                                <div class="modal-sign-up-from-btn-two">
                                                    <a href="#">Send the code again</a>
                                                </div>
                                                <div class="btn-one-modal">
                                                    <button type="button" class=" main-btn-four " data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal-6" data-bs-dismiss="modal">
                                                        Continue
                                                        <span>
                                                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_317_13742)">
                                                                    <path
                                                                        d="M1.41972 8.63898L11.0737 8.63898L7.30373 12.379C7.09177 12.5965 6.97314 12.8882 6.97314 13.192C6.97314 13.4957 7.09177 13.7875 7.30373 14.005C7.51841 14.217 7.80799 14.3359 8.10973 14.3359C8.41146 14.3359 8.70105 14.217 8.91573 14.005L14.6477 8.305C14.8528 8.0869 14.9669 7.79885 14.9669 7.49951C14.9669 7.20018 14.8528 6.91207 14.6477 6.69397L8.91573 0.993959C8.70105 0.781929 8.41146 0.663087 8.10973 0.663087C7.80799 0.663087 7.51841 0.781928 7.30373 0.993959C7.09659 1.20969 6.97748 1.49504 6.96973 1.79401C6.97267 2.09575 7.09238 2.3846 7.30373 2.59998L11.0737 6.35498L1.41972 6.35498C1.12309 6.36377 0.84155 6.48776 0.634836 6.70068C0.428121 6.91361 0.312501 7.19872 0.312501 7.49548C0.312501 7.79225 0.428121 8.07736 0.634835 8.29028C0.84155 8.50321 1.12309 8.6272 1.41972 8.63599L1.41972 8.63898Z"
                                                                        fill="white" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModal-6" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-six">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="modal-sign-up-text">
                                                    <h2>Create new password</h2>
                                                    <p>Please enter a new password. Your new password must be different
                                                        from previous password.</p>
                                                </div>
                                                <div class="password-from-item">
                                                    <div class="password-from-inner">
                                                        <input type="password" class="form-control form-control-two"
                                                            id="exampleFormControlInput9" placeholder=" ********">
                                                        <div class="eye-icon">
                                                            <span>
                                                                <svg width="36" height="25" viewBox="0 0 36 25"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.4" d="M34.6172 5.5V18.5"
                                                                        stroke="#96A3BE" stroke-linecap="round" />
                                                                    <path
                                                                        d="M12.9316 22.1328C7.40864 22.1328 2.93164 17.6558 2.93164 12.1328C2.93164 6.60981 7.40864 2.13281 12.9316 2.13281C18.4546 2.13281 22.9316 6.60981 22.9316 12.1328C22.9316 17.6558 18.4546 22.1328 12.9316 22.1328ZM12.9316 20.1328C15.0534 20.1328 17.0882 19.29 18.5885 17.7897C20.0888 16.2894 20.9316 14.2545 20.9316 12.1328C20.9316 10.0111 20.0888 7.97625 18.5885 6.47596C17.0882 4.97567 15.0534 4.13281 12.9316 4.13281C10.8099 4.13281 8.77508 4.97567 7.27479 6.47596C5.7745 7.97625 4.93164 10.0111 4.93164 12.1328C4.93164 14.2545 5.7745 16.2894 7.27479 17.7897C8.77508 19.29 10.8099 20.1328 12.9316 20.1328ZM11.9316 12.9248C11.4052 12.6951 10.974 12.2911 10.7104 11.7808C10.4469 11.2705 10.367 10.685 10.4844 10.1228C10.6017 9.56051 10.9091 9.05583 11.3548 8.69356C11.8005 8.33129 12.3573 8.13352 12.9316 8.13352C13.506 8.13352 14.0628 8.33129 14.5085 8.69356C14.9542 9.05583 15.2616 9.56051 15.3789 10.1228C15.4963 10.685 15.4164 11.2705 15.1529 11.7808C14.8893 12.2911 14.458 12.6951 13.9316 12.9248V16.1328H11.9316V12.9248Z"
                                                                        fill="#96A3BE" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="password-from-inner">
                                                        <input type="password" class="form-control form-control-two"
                                                            id="exampleFormControlInput10" placeholder="Re- Password">
                                                        <div class="eye-icon">
                                                            <span>
                                                                <svg width="36" height="25" viewBox="0 0 36 25"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.4" d="M34.6172 5.5V18.5"
                                                                        stroke="#96A3BE" stroke-linecap="round" />
                                                                    <path
                                                                        d="M12.9316 22.1328C7.40864 22.1328 2.93164 17.6558 2.93164 12.1328C2.93164 6.60981 7.40864 2.13281 12.9316 2.13281C18.4546 2.13281 22.9316 6.60981 22.9316 12.1328C22.9316 17.6558 18.4546 22.1328 12.9316 22.1328ZM12.9316 20.1328C15.0534 20.1328 17.0882 19.29 18.5885 17.7897C20.0888 16.2894 20.9316 14.2545 20.9316 12.1328C20.9316 10.0111 20.0888 7.97625 18.5885 6.47596C17.0882 4.97567 15.0534 4.13281 12.9316 4.13281C10.8099 4.13281 8.77508 4.97567 7.27479 6.47596C5.7745 7.97625 4.93164 10.0111 4.93164 12.1328C4.93164 14.2545 5.7745 16.2894 7.27479 17.7897C8.77508 19.29 10.8099 20.1328 12.9316 20.1328ZM11.9316 12.9248C11.4052 12.6951 10.974 12.2911 10.7104 11.7808C10.4469 11.2705 10.367 10.685 10.4844 10.1228C10.6017 9.56051 10.9091 9.05583 11.3548 8.69356C11.8005 8.33129 12.3573 8.13352 12.9316 8.13352C13.506 8.13352 14.0628 8.33129 14.5085 8.69356C14.9542 9.05583 15.2616 9.56051 15.3789 10.1228C15.4963 10.685 15.4164 11.2705 15.1529 11.7808C14.8893 12.2911 14.458 12.6951 13.9316 12.9248V16.1328H11.9316V12.9248Z"
                                                                        fill="#96A3BE" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn-one-modal">
                                                    <button type="button" class=" main-btn-four " data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal-7" data-bs-dismiss="modal">
                                                        Continue
                                                        <span>
                                                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_317_13742)">
                                                                    <path
                                                                        d="M1.41972 8.63898L11.0737 8.63898L7.30373 12.379C7.09177 12.5965 6.97314 12.8882 6.97314 13.192C6.97314 13.4957 7.09177 13.7875 7.30373 14.005C7.51841 14.217 7.80799 14.3359 8.10973 14.3359C8.41146 14.3359 8.70105 14.217 8.91573 14.005L14.6477 8.305C14.8528 8.0869 14.9669 7.79885 14.9669 7.49951C14.9669 7.20018 14.8528 6.91207 14.6477 6.69397L8.91573 0.993959C8.70105 0.781929 8.41146 0.663087 8.10973 0.663087C7.80799 0.663087 7.51841 0.781928 7.30373 0.993959C7.09659 1.20969 6.97748 1.49504 6.96973 1.79401C6.97267 2.09575 7.09238 2.3846 7.30373 2.59998L11.0737 6.35498L1.41972 6.35498C1.12309 6.36377 0.84155 6.48776 0.634836 6.70068C0.428121 6.91361 0.312501 7.19872 0.312501 7.49548C0.312501 7.79225 0.428121 8.07736 0.634835 8.29028C0.84155 8.50321 1.12309 8.6272 1.41972 8.63599L1.41972 8.63898Z"
                                                                        fill="white" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModal-7" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-six">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="modal-sign-up-img  ">
                                                    <img src="./assets/images/small/modal-imf-7.png" alt="logo">
                                                </div>
                                                <div class="modal-sign-up-text sign-up-text-to  ">
                                                    <h2>Your successfully changed your password</h2>
                                                    <p>Setting up an account takes less than 1 minute.
                                                    </p>
                                                </div>
                                                <div class="btn-one-modal">
                                                    <button type="button" class=" main-btn-four "
                                                        data-bs-dismiss="modal">
                                                        Continue
                                                        <span>
                                                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_317_13742)">
                                                                    <path
                                                                        d="M1.41972 8.63898L11.0737 8.63898L7.30373 12.379C7.09177 12.5965 6.97314 12.8882 6.97314 13.192C6.97314 13.4957 7.09177 13.7875 7.30373 14.005C7.51841 14.217 7.80799 14.3359 8.10973 14.3359C8.41146 14.3359 8.70105 14.217 8.91573 14.005L14.6477 8.305C14.8528 8.0869 14.9669 7.79885 14.9669 7.49951C14.9669 7.20018 14.8528 6.91207 14.6477 6.69397L8.91573 0.993959C8.70105 0.781929 8.41146 0.663087 8.10973 0.663087C7.80799 0.663087 7.51841 0.781928 7.30373 0.993959C7.09659 1.20969 6.97748 1.49504 6.96973 1.79401C6.97267 2.09575 7.09238 2.3846 7.30373 2.59998L11.0737 6.35498L1.41972 6.35498C1.12309 6.36377 0.84155 6.48776 0.634836 6.70068C0.428121 6.91361 0.312501 7.19872 0.312501 7.49548C0.312501 7.79225 0.428121 8.07736 0.634835 8.29028C0.84155 8.50321 1.12309 8.6272 1.41972 8.63599L1.41972 8.63898Z"
                                                                        fill="white" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sign-up-btn">
                     <div class="main-btn-four">
        <input type="submit"  value="Sign In" name="btn" class="main-btn-four" style="color:#FFFFFF" >
    </div>
	 <p><a href="index.php">Back</a></p>
</form>					   
	</div>
                </div>
            </div>
        </div>
    </div>
    <!-- login  -->
    <script src="./assets/js/jquery-3.6.3.min.js"></script>
    <script src="./assets/js/venobox.min.js"></script>
    <script src="./assets/js/aos.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script src="./assets/js//jquery.shuffle.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/custom.js"></script>
</body>
</html>