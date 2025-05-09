<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();	
	$did=$_SESSION['id'];
if(isset($_POST['btn']))
{
$mobile=7845412860;
$msg="food added check website.";
?>
<iframe src="http://sms.creativepoint.in/api/push.json?apikey=6555c521622c1&route=transsms&sender=FSSMSS&mobileno=<?php echo $mobile;?>&text=Dear customer your msg is <?php echo $msg;?>  Sent By FSMSG FSSMSS" style="display:none" class="iframe"></iframe>
<?php
$qry=mysqli_query($conn,"insert into food values (' ','$did','$ddate','$time','$fname','$qty','$des','$loc','','')");
	if($qry)
	{
	echo "<script>alert('Food Details Added sucessfully')</script>";
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

    <!-- header part start  -->
    <header class="header  header-two  ">
        <div class="container">
            <div class="header-main">
                <div class="header-left">
                    <div class="header-left-btn">
                        <div class="icon">
                            <span>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 7C12 8.10457 11.1046 9 10 9C8.89543 9 8 8.10457 8 7C8 5.89543 8.89543 5 10 5C11.1046 5 12 5.89543 12 7Z"
                                        stroke-width="1.5" />
                                    <path
                                        d="M16 7C16 10.3137 12 15 10 15C8 15 4 10.3137 4 7C4 3.68629 6.68629 1 10 1C13.3137 1 16 3.68629 16 7Z"
                                        stroke-width="1.5" />
                                    <path
                                        d="M13.0003 13H14.1268C15.314 13 16.4397 13.5273 17.1997 14.4393L18.2667 15.7196C19.3522 17.0223 18.4259 19 16.7303 19H3.27042C1.57475 19 0.648436 17.0223 1.73398 15.7196L2.80096 14.4393C3.56093 13.5273 4.68672 13 5.87384 13H7.00034"
                                        stroke-width="1.5" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu part start -->
        <nav class="menu-bg ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="nav-main">
                            <div class="nav-main">
                                  <div class="logo">
                                    <a href="index.html" ><h3 style="color:white;font-weight:900;"> Revolutionizing food sharing for sustainable tomorrow</h3></a>
                                </div>
                                <div class="menu">
                                    <ul>
                             <div class="nav-login-btn-main" >
                                <a href="userhome.php" class="main-btn" >Home</a>
	           <a href="foodst.php" class="main-btn" >Food Status</a>
                                <a href="index.php" class="main-btn">Logout</a>		
                            </div>
                                <div class="nav-btn-main">
                                <div class="nav-btn-one">
                                    <div class="nav-search"> 
                                            <span>
                                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M19.25 10.5C19.25 15.3325 15.3325 19.25 10.5 19.25C5.66751 19.25 1.75 15.3325 1.75 10.5C1.75 5.66751 5.66751 1.75 10.5 1.75C15.3325 1.75 19.25 5.66751 19.25 10.5ZM10.5 20.75C16.1609 20.75 20.75 16.1609 20.75 10.5C20.75 4.83908 16.1609 0.25 10.5 0.25C4.83908 0.25 0.25 4.83908 0.25 10.5C0.25 16.1609 4.83908 20.75 10.5 20.75ZM19.5303 18.4697C19.2374 18.1768 18.7626 18.1768 18.4697 18.4697C18.1768 18.7626 18.1768 19.2374 18.4697 19.5303L20.4696 21.5303C20.7625 21.8232 21.2374 21.8232 21.5303 21.5303C21.8232 21.2374 21.8232 20.7625 21.5303 20.4696L19.5303 18.4697Z"
                                                        fill="#4D5461" />
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nav-login-btn-main">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- mobile navigation start -->
    <header class="mobile-header">
        <div class="container-full">
            <div class="mobile-header__container">
                <div class="p-left">
                    <div class="logo">
                        <a href="index.html">
                            <img src="./assets/images/logo/logo-header.svg" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="p-right">
                    <button id="nav-opn-btn">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!-- offcanvas -->
    <aside id="offcanvas-nav">
        <nav class="m-nav">
            <button id="nav-cls-btn"><i class="fa-solid fa-xmark"></i></button>
            <div class="logo">
                <a href="">
                    <img src="./assets/images/logo/logo-header.svg" alt="logo">
                </a>
            </div>
            <ul class="nav-links">
                <li class="dropdown"><a href="#">Home </a>
                    <ul class="d-menu">
                        <li><a href="index.html">Home-01 </a> </li>
                        <li><a href="index-2.html">Home-02</a></li>
                    </ul>
                </li>
                <li><a href="all-food.html">Menu</a></li>
                <li>
                    <a href="about.html">About Us</a>
                </li>
                <li><a href="contact.html">Contact</a></li>
                <li class="dropdown"><a href="#">Blog</a>
                    <ul class="d-menu">
                        <li><a href="blog.html">Blog </a> </li>
                        <li><a href="blog-details.html">Blog-Details</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </aside>
    <!-- header part end  -->
    <main >
        <!-- .banner-part-start -->
<section class="banner-two" style="background: url('./assets/images/banner/banner3.webp') no-repeat center center / cover !important; width: 100% !important;" >
            <div class="container" >
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-two-taitel">
                            <h1>No one has ever become poor by giving. <span>
                                    - Anne Frank
                                </span></h1>
                            <p>Food is not just nourishment for the body; it's also nourishment for the soul when shared with those in need.</p>
                        </div>
        </section>
        <!-- dashboard  start -->
<form method="post">
        <section class="dashboard" id="yourId">
            <div class="container">
                  <div class="col-lg-9">
    <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="dashboard-item-taitel">
                <h4>Add Food Details</h4>
                <p></p>
            </div>
            <div class="dashboard-edit-profile-from">
                <div class="shopping-cart-new-address-from">
                    <div class="row">
                        <!-- First row -->
                        <div class="col-md-6">
                            <div class="shopping-cart-new-address-from-item">
                                <div class="shopping-cart-new-address-from-inner">
                                    <label class="form-label">Food Name</label>
                                    <input type="text" name="fname" class="form-control" id="exampleFormControlInput8"
                                        placeholder="Food Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="shopping-cart-new-address-from-item">
                                <div class="shopping-cart-new-address-from-inner">
                                    <label class="form-label">Quantity</label>
                                    <input type="number" name="qty" class="form-control" id="exampleFormControlInput12">
                                </div>
                            </div>
                        </div>
	  <div class="col-md-6">
                            <div class="shopping-cart-new-address-from-item">
                                <div class="shopping-cart-new-address-from-inner">
                                    <label class="form-label">Date</label>
                                    <input type="date" name="ddate" class="form-control" id="exampleFormControlInput8"
                                        placeholder="Food Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="shopping-cart-new-address-from-item">
                                <div class="shopping-cart-new-address-from-inner">
                                    <label class="form-label">Time</label>		
	<select name="time" class="form-control" id="exampleFormControlInput8">
	<option value="Breakfast">Breakfast</option>
	<option value="Lunch">Lunch</option>
	<option value="Dinner">Dinner</option>
	</select>
                                </div>
                            </div>
                        </div>
                        <!-- Second row -->
                        <div class="col-md-6">
                            <div class="shopping-cart-new-address-from-item">
                                <div class="shopping-cart-new-address-from-inner">
                                    <label class="form-label">Food Description</label>
                                    <textarea class="form-control" id="exampleFormControlInput8" name="des"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="shopping-cart-new-address-from-item">
                                <div class="shopping-cart-new-address-from-inner">
                                    <label for="exampleFormControlInput1" class="form-label">Location</label>
                                    <input type="text" class="form-control" name="loc" id="exampleFormControlInput12"
                                        placeholder="Enter your location">
                                </div>
                            </div>
                        </div>
                        <!-- Third row -->
                        <div class="col-md-6">
                            <div class="shopping-cart-new-address-from-item">
                                <div class="shopping-cart-new-address-from-inner">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="shopping-cart-new-address-from-item">
                                <div class="shopping-cart-new-address-from-inner">
                                    <div class="check-btn-two">
                    <input type="submit" value="Add food" style="margin-top:20px;" class="main-btn-four" name='btn'>
                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Buttons -->
            <div class="shopping-cart-new-address-from-btn">
                <div class="check-btn">
                    <div class="form-check">
                        <label class="form-check-label" for="flexCheckDefault"></label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="flexCheckDefault1"></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  </div>
</div>
</form>					
    </main>

    <!-- footer part start  -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12" data-aos="fade-right">
                    <div class="footer-logo">
                        <div class="logo">
                            <img src="./assets/images/logo/footer-logo.svg" alt="logo">
                        </div>
                    </div>
                    <div class="footer-text">
                        <h4>At ReservQ, we invite you to embark on a journey of taste and delight.Our tables are more
                            than just places.</h4>
                    </div>
                    <div class="footer-icon">
                        <div class="icon">
                            <a href="https://www.facebook.com/" target="_blank"><i
                                    class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="https://www.instagram.com/" target="_blank"><i
                                    class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mol-md-12 ">
                    <div class="row">
                        <div class="col-lg-3 col-md-3" data-aos="fade-right" data-aos-delay="100">
                            <div class="quick-line-item">
                                <div class="quick-line-item-head">
                                    <h3>Quick Link</h3>
                                </div>
                                <div class="quick-line-menu">
                                    <ul>
                                        <li>
                                            <a href="dashboard.html">My Account</a>
                                        </li>
                                        <li>
                                            <a href="about.html">About Us</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Store Locator</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Delivery</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Pickup</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3" data-aos="fade-right" data-aos-delay="200">
                            <div class="quick-line-item">
                                <div class="quick-line-item-head">
                                    <h3>Terms & Privacy</h3>
                                </div>
                                <div class="quick-line-menu">
                                    <ul>
                                        <li>
                                            <a href="trust-safety.html">Trust & Safety</a>
                                        </li>
                                        <li>
                                            <a href="terms-service.html">Terms of Service</a>
                                        </li>
                                        <li>
                                            <a href="privacy-policy.html">Privacy Policy</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6" data-aos="fade-right" data-aos-delay="300">
                            <div class="quick-line-item">
                                <div class="quick-line-item-head">
                                    <h3>Subscribe our Newsletter</h3>
                                </div>
                                <div class="quick-line-btn">
                                    <div class="icon">
                                        <img src="./assets/images/icon/sms.png" alt="icon">
                                    </div>
                                    <input type="email" class="form-control" id="exampleFormControlInput07"
                                        placeholder="Your email">
                                    <a href="#" class="main-btn-four">Subscribe</a>
                                </div>
                                <div class="quick-line-btn-text">
                                    <h6>We accept Payment methods:</h6>
                                </div>
                                <div class="quick-line-btn-img">
                                    <a href="#">
                                        <img src="./assets/images/small/Visa.png" alt="img">
                                    </a>
                                    <a href="#">
                                        <img src="./assets/images/small/Amex.png" alt="img">
                                    </a>
                                    <a href="#">
                                        <img src="./assets/images/small/PayPal.png" alt="img">
                                    </a>
                                    <a href="#">
                                        <img src="./assets/images/small/Mastercard.png" alt="img">
                                    </a>
                                    <a href="#">
                                        <img src="./assets/images/small/GooglePay.png" alt="img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <h4>?2023 ReservQ. All rights reserved</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer part end  -->
  <script>
        window.onload = function() {
            // Replace 'yourId' with the actual ID you want to scroll to
            var element = document.getElementById('yourId');
            if (element) {
                element.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        };
    </script>
    <script src="./assets/js/jquery-3.6.3.min.js"></script>
    <script src="./assets/js/venobox.min.js"></script>
    <script src="./assets/js/aos.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script src="./assets/js//jquery.shuffle.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/custom.js"></script>
</body>
</html>