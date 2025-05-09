<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
       $fid=$_GET['fid'];
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
	<style>
	table,th,td{
	border:1px solid black;
	}
</style>
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
                                <a href="adminhome.php" class="main-btn" >Home</a>
	           <a href="viewr.php" class="main-btn" >View request</a>
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
        <section class="banner-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-two-taitel">
                            <h1>No one has ever become poor by giving. <span>
                                    - Anne Frank
                                </span></h1>
                            <p>Food is not just nourishment for the body; it's also nourishment for the soul when shared with those in need.</p>
                        </div>

        </section>
<main>
    </main>
<br>
<form method="post" style="text-align:center">
<input type="text" name="city" placeholder="Enter Location"><input type="submit" name="btn">
</form>

<?php if(isset($_POST['btn']))   {
?>
<br><br>
<h1>Foods Donation Available </h1>
<br><br>
<table width="98%" align="center" >
<tr>
<td colspan="12" align="center"><strong>Volunteer Details</strong></td>
  </tr>
<tr>
<td colspan="10">&nbsp;</td>
  </tr>
   <tr>
          <td width="1%">&nbsp;</td>
                                           <td width="7%"><div align="center" class="style6"><strong>Id</strong> </div></td>
		   <td width="11%"><div align="center" class="style6"><strong> Name</strong> </div></td>
		   <td width="11%"><div align="center" class="style6"><strong>Email</strong> </div></td>
		    <td width="11%"><div align="center" class="style6"><strong>phone</strong> </div></td>
	                        <td width="9%"><div align="center" class="style6"><strong>Location</strong> </div></td>
	                        <td width="10%"><div align="center" class="style6"><strong>Address</strong> </div></td>	
				
        </tr>
		<tr>
		<td colspan="12">&nbsp;</td>
		</tr>
		<?php
		$qry=mysqli_query($conn,"select * from tregister where loc='$city'");
		$i=1;
		while($row=mysqli_fetch_array($qry))
		{
		
		?>
                                                      <tr>
		                                           <td width="1%">&nbsp;</td>
		                                           <td><div align="center"><?php echo $row['id'];?></div></td>
		                                           <td><div align="center"><?php echo $row['name'];?></div></td>
			                       <td><div align="center"><?php echo $row['email'];?></div></td>
			                       <td><div align="center"><?php echo $row['phone'];?></div></td>
				    <td><div align="center"><?php echo $row['address'];?></div></td>
				    <td><div align="center"><?php echo $row['loc'];?></div></td>
				    <td><div align="center" ><a href="add1.php?vid=<?php echo $row['id'];?>&fid=<?php echo $fid; ?>" style="padding:5px 10px;background:green;border-radius:5px;color:#FFFFFF;font-weight:700;">ASSIGN WORK</a></div>
					</td>	 
                                                      </tr>	
<tr>
		  	 	<td>&nbsp;</td>
		   		<td>&nbsp;</td>
				<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
				<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			                    <td>&nbsp;</td>
			 	<td>&nbsp;</td>
		
		</tr>
        <?php
		$i++;
	}
		?>
		<tr>
		<td colspan="12" align="center">&nbsp;</td>
		</tr>
</table>
<?php } ?>
<br><br><br><br>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <h4>2023 ReservQ. All rights reserved</h4>
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