<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['btn']))
{
$qry1=mysqli_query($conn,"select * from tregister where uname='$uname'");
$count=mysqli_num_rows($qry1);
if($count>0){                                                                                           
echo "<script>alert('username already taken')</script>";
}else{
$qry=mysqli_query($conn,"insert into tregister(name,email,phone,loc,address,uname,psw) values('$name','$email','$phone','$loc','$address','$uname','$psw')");
	if($qry)
	{
	echo "<script>alert('register sucessfully')</script>";
	}	
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
	          <a href="viewv.php" class="main-btn" >View Volunteers</a>
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
		$qry=mysqli_query($conn,"select * from tregister ");
		$i=1;
		while($row=mysqli_fetch_array($qry))
		{
		$fid=$row['id'];
		?>
        <tr>
		 <td width="1%">&nbsp;</td>
		    <td><div align="center"><?php echo $row['id'];?></div></td>
		   <td><div align="center"><?php echo $row['name'];?></div></td>
			  <td><div align="center"><?php echo $row['email'];?></div></td>
			   <td><div align="center"><?php echo $row['phone'];?></div></td>
				   <td><div align="center"><?php echo $row['address'];?></div></td>
				   		 <td><div align="center"><?php echo $row['loc'];?></div></td>
						  <td><div align="center"><a href="removev.php?id=<?php echo $row['id'];?>">Remove</a></td>	 
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
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="dashboard-item-taitel">
                                            <h4>Dashboard</h4>
                                            <p>Let?s check your today</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 aos-init aos-animate" data-aos="fade-left">
                                        <div class="dashboard-address-item">
                                            <div class="shopping-cart-address-one">
                                                <div class="shopping-cart-address-one-item">
                                                    <div class="text">
                                                        <h4>Billing Address #1</h4>
                                                    </div>
                                                    <div class="delet-btn">
                                                        <a href="dashboard-address-02.html" class="delet-btn-two">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M22 12V18C22 20.2091 20.2091 22 18 22H6C3.79086 22 2 20.2091 2 18V6C2 3.79086 3.79086 2 6 2H12M15.6864 4.02275C15.6864 4.02275 15.6864 5.45305 17.1167 6.88334C18.547 8.31364 19.9773 8.31364 19.9773 8.31364M9.15467 15.9896L12.1583 15.5605C12.5916 15.4986 12.9931 15.2978 13.3025 14.9884L21.4076 6.88334C22.1975 6.09341 22.1975 4.81268 21.4076 4.02275L19.9773 2.59245C19.1873 1.80252 17.9066 1.80252 17.1167 2.59245L9.01164 10.6975C8.70217 11.0069 8.50142 11.4084 8.43952 11.8417L8.01044 14.8453C7.91508 15.5128 8.4872 16.0849 9.15467 15.9896Z"
                                                                        stroke="#000929" stroke-width="1.5"
                                                                        stroke-linecap="round"></path>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <a href="#">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5 8V18C5 20.2091 6.79086 22 9 22H15C17.2091 22 19 20.2091 19 18V8M14 11V17M10 11L10 17M16 5L14.5937 2.8906C14.2228 2.3342 13.5983 2 12.9296 2H11.0704C10.4017 2 9.7772 2.3342 9.40627 2.8906L8 5M16 5H8M16 5H21M8 5H3"
                                                                        stroke="#F01543" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <address>Full Name :<b>Jost Batler</b>
                                                    <br>Email :
                                                    <a
                                                        href="mailto:jostbatler@gmail.com"><b>jostbatler@gmail.com</b></a>
                                                    <br>Phone
                                                    <a href="tel:+17077970462"><b>+1 707 797 0462</b>
                                                    </a>
                                                    <br>Country :
                                                    <a href="#"><b>Bangladesh</b></a>
                                                    <br>State :
                                                    <a href="#"><b>Dhaka</b></a>
                                                    <br>City :
                                                    <a href="#"><b>Dhaka</b></a>
                                                    <br>Address :
                                                    <a href="#"> <b>Mirpur-11, Dhaka, Bangladesh</b></a>
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 aos-init aos-animate" data-aos="fade-left"
                                        data-aos-delay="100">
                                        <div class="dashboard-address-item">
                                            <div class="shopping-cart-address-one shopping-cart-address-two  ">

                                                <div class="shopping-cart-address-one-item">
                                                    <div class="text">
                                                        <h4>Shipping Address #2</h4>
                                                    </div>
                                                    <div class="delet-btn">
                                                        <a href="dashboard-address-02.html" class="delet-btn-two">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M22 12V18C22 20.2091 20.2091 22 18 22H6C3.79086 22 2 20.2091 2 18V6C2 3.79086 3.79086 2 6 2H12M15.6864 4.02275C15.6864 4.02275 15.6864 5.45305 17.1167 6.88334C18.547 8.31364 19.9773 8.31364 19.9773 8.31364M9.15467 15.9896L12.1583 15.5605C12.5916 15.4986 12.9931 15.2978 13.3025 14.9884L21.4076 6.88334C22.1975 6.09341 22.1975 4.81268 21.4076 4.02275L19.9773 2.59245C19.1873 1.80252 17.9066 1.80252 17.1167 2.59245L9.01164 10.6975C8.70217 11.0069 8.50142 11.4084 8.43952 11.8417L8.01044 14.8453C7.91508 15.5128 8.4872 16.0849 9.15467 15.9896Z"
                                                                        stroke="#000929" stroke-width="1.5"
                                                                        stroke-linecap="round"></path>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <a href="#">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5 8V18C5 20.2091 6.79086 22 9 22H15C17.2091 22 19 20.2091 19 18V8M14 11V17M10 11L10 17M16 5L14.5937 2.8906C14.2228 2.3342 13.5983 2 12.9296 2H11.0704C10.4017 2 9.7772 2.3342 9.40627 2.8906L8 5M16 5H8M16 5H21M8 5H3"
                                                                        stroke="#F01543" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <address>Full Name :<b>Jost Batler</b>
                                                    <br>Email :
                                                    <a
                                                        href="mailto:jostbatler@gmail.com"><b>jostbatler@gmail.com</b></a>
                                                    <br>Phone
                                                    <a href="tel:+18040005262"><b> +1 804 000 5262</b>
                                                    </a>
                                                    <br>Country :
                                                    <a href="#"><b>Bangladesh</b></a>
                                                    <br>State :
                                                    <a href="#"><b> Narayanganj</b></a>
                                                    <br>City :
                                                    <a href="#"><b> Narayanganj</b></a>
                                                    <br>Address :
                                                    <a href="#"> <b>Rupganj-1460, Narayanganj </b></a>
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="dashboard-item-taitel">
                                            <h4>Dashboard</h4>
                                            <p>Let?s check your today</p>
                                        </div>
                                        <div class="order-reorderingmain-box">
                                            <div class="order-reorderingmain-box-item">
                                                <div class="text">
                                                    <h4>Order &amp; Reordering</h4>
                                                </div>
                                                <div class="icon">
                                                    <a href="#">
                                                        Last Week
                                                        <span>
                                                            <svg width="15" height="18" viewBox="0 0 15 18" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M12.5002 3.16797H2.50016C1.57969 3.16797 0.833496 3.91416 0.833496 4.83464V14.8346C0.833496 15.7551 1.57969 16.5013 2.50016 16.5013H12.5002C13.4206 16.5013 14.1668 15.7551 14.1668 14.8346V4.83464C14.1668 3.91416 13.4206 3.16797 12.5002 3.16797Z"
                                                                    stroke="#747681" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                                <path d="M10.8335 1.5V4.83333" stroke="#747681"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M4.16699 1.5V4.83333" stroke="#747681"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M0.833496 8.16797H14.1668" stroke="#747681"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M6.66699 11.5H7.50033" stroke="#747681"
                                                                    stroke-width="2" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M7.5 11.5V14" stroke="#747681"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="order-reorderingmain-box-tabel">
                                                <table class=" table w-100 ">
                                                    <thead>
                                                        <tr>
                                                            <th>Food Name</th>
                                                            <th>Date</th>
                                                            <th>Amount</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Eggplant Baked with Cheese</td>
                                                            <td>May 01, 2023</td>
                                                            <td>$100</td>
                                                            <td>
                                                                <div class="delete-action ">
                                                                    <a href="" class="active">
                                                                        Active
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="delete-action ">
                                                                    <button class="view-btn">
                                                                        <span>
                                                                            <svg width="20" height="20"
                                                                                viewBox="0 0 20 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M17.6084 11.7904C18.5748 10.7737 18.5748 9.22894 17.6084 8.21222C15.9786 6.49741 13.1794 4.16797 9.99984 4.16797C6.82024 4.16797 4.02108 6.49741 2.39126 8.21222C1.42492 9.22894 1.42492 10.7737 2.39126 11.7904C4.02108 13.5052 6.82024 15.8346 9.99984 15.8346C13.1794 15.8346 15.9786 13.5052 17.6084 11.7904ZM9.99984 12.5013C11.3805 12.5013 12.4998 11.382 12.4998 10.0013C12.4998 8.62059 11.3805 7.5013 9.99984 7.5013C8.61913 7.5013 7.49984 8.62059 7.49984 10.0013C7.49984 11.382 8.61913 12.5013 9.99984 12.5013Z"
                                                                                    fill="white"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Baked with Cheese</td>
                                                            <td>May 01, 2023</td>
                                                            <td>$100</td>
                                                            <td>
                                                                <div class="delete-action ">
                                                                    <a href="" class="successful">
                                                                        Successful
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="delete-action ">
                                                                    <button class="view-btn">
                                                                        <span>
                                                                            <svg width="20" height="20"
                                                                                viewBox="0 0 20 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M17.6084 11.7904C18.5748 10.7737 18.5748 9.22894 17.6084 8.21222C15.9786 6.49741 13.1794 4.16797 9.99984 4.16797C6.82024 4.16797 4.02108 6.49741 2.39126 8.21222C1.42492 9.22894 1.42492 10.7737 2.39126 11.7904C4.02108 13.5052 6.82024 15.8346 9.99984 15.8346C13.1794 15.8346 15.9786 13.5052 17.6084 11.7904ZM9.99984 12.5013C11.3805 12.5013 12.4998 11.382 12.4998 10.0013C12.4998 8.62059 11.3805 7.5013 9.99984 7.5013C8.61913 7.5013 7.49984 8.62059 7.49984 10.0013C7.49984 11.382 8.61913 12.5013 9.99984 12.5013Z"
                                                                                    fill="white"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Eggplant Baked with Cheese</td>
                                                            <td>May 01, 2023</td>
                                                            <td>$200</td>
                                                            <td>
                                                                <div class="delete-action ">
                                                                    <a href="" class="successful">
                                                                        Successful
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="delete-action ">
                                                                    <button class="view-btn">
                                                                        <span>
                                                                            <svg width="20" height="20"
                                                                                viewBox="0 0 20 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M17.6084 11.7904C18.5748 10.7737 18.5748 9.22894 17.6084 8.21222C15.9786 6.49741 13.1794 4.16797 9.99984 4.16797C6.82024 4.16797 4.02108 6.49741 2.39126 8.21222C1.42492 9.22894 1.42492 10.7737 2.39126 11.7904C4.02108 13.5052 6.82024 15.8346 9.99984 15.8346C13.1794 15.8346 15.9786 13.5052 17.6084 11.7904ZM9.99984 12.5013C11.3805 12.5013 12.4998 11.382 12.4998 10.0013C12.4998 8.62059 11.3805 7.5013 9.99984 7.5013C8.61913 7.5013 7.49984 8.62059 7.49984 10.0013C7.49984 11.382 8.61913 12.5013 9.99984 12.5013Z"
                                                                                    fill="white"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Roasted Steak with Garnish</td>
                                                            <td>May 01, 2023</td>
                                                            <td>$200</td>
                                                            <td>
                                                                <div class="delete-action ">
                                                                    <a href="" class="successful">
                                                                        Successful
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="delete-action ">
                                                                    <button class="view-btn">
                                                                        <span>
                                                                            <svg width="20" height="20"
                                                                                viewBox="0 0 20 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M17.6084 11.7904C18.5748 10.7737 18.5748 9.22894 17.6084 8.21222C15.9786 6.49741 13.1794 4.16797 9.99984 4.16797C6.82024 4.16797 4.02108 6.49741 2.39126 8.21222C1.42492 9.22894 1.42492 10.7737 2.39126 11.7904C4.02108 13.5052 6.82024 15.8346 9.99984 15.8346C13.1794 15.8346 15.9786 13.5052 17.6084 11.7904ZM9.99984 12.5013C11.3805 12.5013 12.4998 11.382 12.4998 10.0013C12.4998 8.62059 11.3805 7.5013 9.99984 7.5013C8.61913 7.5013 7.49984 8.62059 7.49984 10.0013C7.49984 11.382 8.61913 12.5013 9.99984 12.5013Z"
                                                                                    fill="white"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Eggplant Baked with Cheese</td>
                                                            <td>May 01, 2023</td>
                                                            <td>$200</td>
                                                            <td>
                                                                <div class="delete-action ">
                                                                    <a href="" class="successful">
                                                                        Successful
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="delete-action ">
                                                                    <button class="view-btn">
                                                                        <span>
                                                                            <svg width="20" height="20"
                                                                                viewBox="0 0 20 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M17.6084 11.7904C18.5748 10.7737 18.5748 9.22894 17.6084 8.21222C15.9786 6.49741 13.1794 4.16797 9.99984 4.16797C6.82024 4.16797 4.02108 6.49741 2.39126 8.21222C1.42492 9.22894 1.42492 10.7737 2.39126 11.7904C4.02108 13.5052 6.82024 15.8346 9.99984 15.8346C13.1794 15.8346 15.9786 13.5052 17.6084 11.7904ZM9.99984 12.5013C11.3805 12.5013 12.4998 11.382 12.4998 10.0013C12.4998 8.62059 11.3805 7.5013 9.99984 7.5013C8.61913 7.5013 7.49984 8.62059 7.49984 10.0013C7.49984 11.382 8.61913 12.5013 9.99984 12.5013Z"
                                                                                    fill="white"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Chicken Skewers with Slices</td>
                                                            <td>May 01, 2023</td>
                                                            <td>$200</td>
                                                            <td>
                                                                <div class="delete-action ">
                                                                    <a href="" class="successful">
                                                                        Successful
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="delete-action ">
                                                                    <button class="view-btn">
                                                                        <span>
                                                                            <svg width="20" height="20"
                                                                                viewBox="0 0 20 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M17.6084 11.7904C18.5748 10.7737 18.5748 9.22894 17.6084 8.21222C15.9786 6.49741 13.1794 4.16797 9.99984 4.16797C6.82024 4.16797 4.02108 6.49741 2.39126 8.21222C1.42492 9.22894 1.42492 10.7737 2.39126 11.7904C4.02108 13.5052 6.82024 15.8346 9.99984 15.8346C13.1794 15.8346 15.9786 13.5052 17.6084 11.7904ZM9.99984 12.5013C11.3805 12.5013 12.4998 11.382 12.4998 10.0013C12.4998 8.62059 11.3805 7.5013 9.99984 7.5013C8.61913 7.5013 7.49984 8.62059 7.49984 10.0013C7.49984 11.382 8.61913 12.5013 9.99984 12.5013Z"
                                                                                    fill="white"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Chicken Skewers with Slices</td>
                                                            <td>May 01, 2023</td>
                                                            <td>$200</td>
                                                            <td>
                                                                <div class="delete-action ">
                                                                    <a href="" class="cancel">
                                                                        Cancel
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="delete-action ">
                                                                    <button class="view-btn">
                                                                        <span>
                                                                            <svg width="20" height="20"
                                                                                viewBox="0 0 20 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M17.6084 11.7904C18.5748 10.7737 18.5748 9.22894 17.6084 8.21222C15.9786 6.49741 13.1794 4.16797 9.99984 4.16797C6.82024 4.16797 4.02108 6.49741 2.39126 8.21222C1.42492 9.22894 1.42492 10.7737 2.39126 11.7904C4.02108 13.5052 6.82024 15.8346 9.99984 15.8346C13.1794 15.8346 15.9786 13.5052 17.6084 11.7904ZM9.99984 12.5013C11.3805 12.5013 12.4998 11.382 12.4998 10.0013C12.4998 8.62059 11.3805 7.5013 9.99984 7.5013C8.61913 7.5013 7.49984 8.62059 7.49984 10.0013C7.49984 11.382 8.61913 12.5013 9.99984 12.5013Z"
                                                                                    fill="white"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Chicken Skewers with Slices</td>
                                                            <td>May 01, 2023</td>
                                                            <td>$200</td>
                                                            <td>
                                                                <div class="delete-action ">
                                                                    <a href="" class="cancel">
                                                                        Cancel
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="delete-action ">
                                                                    <button class="view-btn">
                                                                        <span>
                                                                            <svg width="20" height="20"
                                                                                viewBox="0 0 20 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M17.6084 11.7904C18.5748 10.7737 18.5748 9.22894 17.6084 8.21222C15.9786 6.49741 13.1794 4.16797 9.99984 4.16797C6.82024 4.16797 4.02108 6.49741 2.39126 8.21222C1.42492 9.22894 1.42492 10.7737 2.39126 11.7904C4.02108 13.5052 6.82024 15.8346 9.99984 15.8346C13.1794 15.8346 15.9786 13.5052 17.6084 11.7904ZM9.99984 12.5013C11.3805 12.5013 12.4998 11.382 12.4998 10.0013C12.4998 8.62059 11.3805 7.5013 9.99984 7.5013C8.61913 7.5013 7.49984 8.62059 7.49984 10.0013C7.49984 11.382 8.61913 12.5013 9.99984 12.5013Z"
                                                                                    fill="white"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="row blog-mt-48px">
                                                    <div class="col-lg-7 ">
                                                        <div class="next-prev-btn">
                                                            <ul>
                                                                <li><a href="#"> <span><svg width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M10 8L6 12M6 12L10 16M6 12L18 12"
                                                                                    stroke="#F01543" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round">
                                                                                </path>
                                                                            </svg></span> </a></li>
                                                                <li><a href="#" class="active"> Next Page <span><svg
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M14 16L18 12M18 12L14 8M18 12L6 12"
                                                                                    stroke="white" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round">
                                                                                </path>
                                                                            </svg></span> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5">
                                                        <nav aria-label="...">
                                                            <ul class="pagination">
                                                                <li class="page-item"><a class="page-link"
                                                                        href="#">Page</a></li>
                                                                <li class="page-item active " aria-current="page">
                                                                    <span class="page-link">2</span>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#">of 10</a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">
                                <div class="row">
                                    <div class="dashboard-item-taitel">
                                        <h4>Dashboard</h4>
                                        <p>Let?s check your today</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 popular-item-mt-30px aos-init aos-animate"
                                        data-aos="fade-up">
                                        <div class="popular-item-box">
                                            <div class="popular-item-box-img">
                                                <img src="./assets/images/thumb/popular-3.png" alt="thumb">
                                                <div class="popular-item-box-img-overlay">
                                                    <div class="icon">
                                                        <span>
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z"
                                                                    fill="#FFB23E"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="text">
                                                        <p>4.7(2.5K)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-inner-box">
                                                <div class="popular-item-box-text">
                                                    <h3>Fish Tacos Chipotle Crema</h3>
                                                </div>
                                                <div class="popular-inner-item">
                                                    <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </g>
                                                            </svg></span>
                                                    </div>
                                                    <div class="text">
                                                        <h5>4 Paces Chicken</h5>
                                                    </div>
                                                </div>
                                                <div class="popular-inner-item">
                                                    <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </g>
                                                            </svg></span>
                                                    </div>
                                                    <div class="text">
                                                        <h5>Spicy Sauce</h5>
                                                    </div>
                                                </div>
                                                <div class="popular-inner-item-btm">
                                                    <div class="text">
                                                        <h3>$30.00</h3>
                                                    </div>
                                                    <div class="popular-inner-item-btn">
                                                        <a href="shopping-cart.html" class="main-btn-five">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                                        stroke-width="1.5"></path>
                                                                    <path
                                                                        d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                                        stroke-width="1.5"></path>
                                                                    <path d="M14 8L14 13" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                            Add to Cart
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 popular-item-mt-30px aos-init aos-animate"
                                        data-aos="fade-up">
                                        <div class="popular-item-box">
                                            <div class="popular-item-box-img">
                                                <img src="./assets/images/thumb/popular-4.png" alt="thumb">
                                                <div class="popular-item-box-img-overlay">
                                                    <div class="icon">
                                                        <span>
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z"
                                                                    fill="#FFB23E"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="text">
                                                        <p>4.7(2.5K)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-inner-box">
                                                <div class="popular-item-box-text">
                                                    <h3>BBQ Pulled Pork Sandwich</h3>
                                                </div>
                                                <div class="popular-inner-item">
                                                    <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </g>
                                                            </svg></span>
                                                    </div>
                                                    <div class="text">
                                                        <h5>4 Paces Chicken</h5>
                                                    </div>
                                                </div>
                                                <div class="popular-inner-item">
                                                    <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </g>
                                                            </svg></span>
                                                    </div>
                                                    <div class="text">
                                                        <h5>Spicy Sauce</h5>
                                                    </div>
                                                </div>
                                                <div class="popular-inner-item-btm">
                                                    <div class="text">
                                                        <h3>$30.00</h3>
                                                    </div>
                                                    <div class="popular-inner-item-btn">
                                                        <a href="shopping-cart.html" class="main-btn-five">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                                        stroke-width="1.5"></path>
                                                                    <path
                                                                        d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                                        stroke-width="1.5"></path>
                                                                    <path d="M14 8L14 13" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                            Add to Cart
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 popular-item-mt-30px aos-init aos-animate"
                                        data-aos="fade-up">
                                        <div class="popular-item-box">
                                            <div class="popular-item-box-img">
                                                <img src="./assets/images/thumb/popular-3.png" alt="thumb">
                                                <div class="popular-item-box-img-overlay">
                                                    <div class="icon">
                                                        <span>
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z"
                                                                    fill="#FFB23E"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="text">
                                                        <p>4.7(2.5K)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-inner-box">
                                                <div class="popular-item-box-text">
                                                    <h3>Fish Tacos Chipotle Crema</h3>
                                                </div>
                                                <div class="popular-inner-item">
                                                    <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </g>
                                                            </svg></span>
                                                    </div>
                                                    <div class="text">
                                                        <h5>4 Paces Chicken</h5>
                                                    </div>
                                                </div>
                                                <div class="popular-inner-item">
                                                    <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </g>
                                                            </svg></span>
                                                    </div>
                                                    <div class="text">
                                                        <h5>Spicy Sauce</h5>
                                                    </div>
                                                </div>
                                                <div class="popular-inner-item-btm">
                                                    <div class="text">
                                                        <h3>$30.00</h3>
                                                    </div>
                                                    <div class="popular-inner-item-btn">
                                                        <a href="shopping-cart.html" class="main-btn-five">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                                        stroke-width="1.5"></path>
                                                                    <path
                                                                        d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                                        stroke-width="1.5"></path>
                                                                    <path d="M14 8L14 13" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                            Add to Cart
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 popular-item-mt-30px aos-init aos-animate"
                                        data-aos="fade-up">
                                        <div class="popular-item-box">
                                            <div class="popular-item-box-img">
                                                <img src="./assets/images/thumb/popular-4.png" alt="thumb">
                                                <div class="popular-item-box-img-overlay">
                                                    <div class="icon">
                                                        <span>
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z"
                                                                    fill="#FFB23E"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="text">
                                                        <p>4.7(2.5K)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-inner-box">
                                                <div class="popular-item-box-text">
                                                    <h3>BBQ Pulled Pork Sandwich</h3>
                                                </div>
                                                <div class="popular-inner-item">
                                                    <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </g>
                                                            </svg></span>
                                                    </div>
                                                    <div class="text">
                                                        <h5>4 Paces Chicken</h5>
                                                    </div>
                                                </div>
                                                <div class="popular-inner-item">
                                                    <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </g>
                                                            </svg></span>
                                                    </div>
                                                    <div class="text">
                                                        <h5>Spicy Sauce</h5>
                                                    </div>
                                                </div>
                                                <div class="popular-inner-item-btm">
                                                    <div class="text">
                                                        <h3>$30.00</h3>
                                                    </div>
                                                    <div class="popular-inner-item-btn">
                                                        <a href="shopping-cart.html" class="main-btn-five">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                                        stroke-width="1.5"></path>
                                                                    <path
                                                                        d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                                        stroke-width="1.5"></path>
                                                                    <path d="M14 8L14 13" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                            Add to Cart
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 popular-item-mt-30px aos-init" data-aos="fade-up">
                                        <div class="popular-item-box">
                                            <div class="popular-item-box-img">
                                                <img src="./assets/images/thumb/popular-3.png" alt="thumb">
                                                <div class="popular-item-box-img-overlay">
                                                    <div class="icon">
                                                        <span>
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z"
                                                                    fill="#FFB23E"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="text">
                                                        <p>4.7(2.5K)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-inner-box">
                                                <div class="popular-item-box-text">
                                                    <h3>Fish Tacos Chipotle Crema</h3>
                                                </div>
                                                <div class="popular-inner-item">
                                                    <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </g>
                                                            </svg></span>
                                                    </div>
                                                    <div class="text">
                                                        <h5>4 Paces Chicken</h5>
                                                    </div>
                                                </div>
                                                <div class="popular-inner-item">
                                                    <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </g>
                                                            </svg></span>
                                                    </div>
                                                    <div class="text">
                                                        <h5>Spicy Sauce</h5>
                                                    </div>
                                                </div>
                                                <div class="popular-inner-item-btm">
                                                    <div class="text">
                                                        <h3>$30.00</h3>
                                                    </div>
                                                    <div class="popular-inner-item-btn">
                                                        <a href="shopping-cart.html" class="main-btn-five">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                                        stroke-width="1.5"></path>
                                                                    <path
                                                                        d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                                        stroke-width="1.5"></path>
                                                                    <path d="M14 8L14 13" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                            Add to Cart
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 popular-item-mt-30px aos-init" data-aos="fade-up">
                                        <div class="popular-item-box">
                                            <div class="popular-item-box-img">
                                                <img src="./assets/images/thumb/popular-4.png" alt="thumb">
                                                <div class="popular-item-box-img-overlay">
                                                    <div class="icon">
                                                        <span>
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z"
                                                                    fill="#FFB23E"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="text">
                                                        <p>4.7(2.5K)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-inner-box">
                                                <div class="popular-item-box-text">
                                                    <h3>BBQ Pulled Pork Sandwich</h3>
                                                </div>
                                                <div class="popular-inner-item">
                                                    <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </g>
                                                            </svg></span>
                                                    </div>
                                                    <div class="text">
                                                        <h5>4 Paces Chicken</h5>
                                                    </div>
                                                </div>
                                                <div class="popular-inner-item">
                                                    <div class="icon">
                                                        <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_304_21999)">
                                                                    <path
                                                                        d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                        stroke="#FE724C" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </g>
                                                            </svg></span>
                                                    </div>
                                                    <div class="text">
                                                        <h5>Spicy Sauce</h5>
                                                    </div>
                                                </div>
                                                <div class="popular-inner-item-btm">
                                                    <div class="text">
                                                        <h3>$30.00</h3>
                                                    </div>
                                                    <div class="popular-inner-item-btn">
                                                        <a href="shopping-cart.html" class="main-btn-five">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                                        stroke-width="1.5"></path>
                                                                    <path
                                                                        d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                                        stroke-width="1.5"></path>
                                                                    <path d="M14 8L14 13" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                            Add to Cart
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings1" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab1">
                                <div class="row">
                                    <div class="dashboard-item-taitel">
                                        <h4>Dashboard</h4>
                                        <p>Let?s check your today</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="review-list-main-box">
                                        <div class="review-list-main-box-text">
                                            <h3>Review List</h3>
                                        </div>
                                        <div class="review-list-main-box-item aos-init aos-animate" data-aos="fade-up">
                                            <div class="review-list-main-box-item-text">
                                                <h5>Eggplant Baked with Cheese</h5>
                                                <p>?There are many variations of passages of Lorem Ipsum available,to
                                                    majority have
                                                    into the find end to suffered.?</p>
                                            </div>
                                            <div class="review-list-main-box-inner">
                                                <div class="review-list-main-box-inner-item">
                                                    <div class="review-list-main-box-inner-item-img">
                                                        <img src="./assets/images/small/review.png" alt="img">
                                                    </div>
                                                    <div class="review-list-main-box-inner-item-text">
                                                        <h5>Jerome Bell</h5>
                                                        <p>Dog Trainer</p>
                                                    </div>
                                                </div>
                                                <div class="review-list-main-box-inner-item-right">
                                                    <a href="#">
                                                        <div class="icon">
                                                            <span>
                                                                <svg width="116" height="20" viewBox="0 0 116 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M10.0311 0C9.60363 0 9.17613 0.2305 8.95488 0.695408L6.50617 5.86799L1.0275 6.69623C0.0450172 6.84469 -0.348727 8.10658 0.363762 8.82933L4.32745 12.8533L3.38997 18.5377C3.22122 19.5574 4.25245 20.3348 5.12994 19.8543L10.0311 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M9.96888 0C10.3964 0 10.8239 0.2305 11.0451 0.695408L13.4938 5.86799L18.9725 6.69623C19.955 6.84469 20.3487 8.10658 19.6362 8.82933L15.6725 12.8533L16.61 18.5377C16.7788 19.5574 15.7475 20.3348 14.8701 19.8543L9.96888 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M34.0311 0C33.6036 0 33.1761 0.2305 32.9549 0.695408L30.5062 5.86799L25.0275 6.69623C24.045 6.84469 23.6513 8.10658 24.3638 8.82933L28.3275 12.8533L27.39 18.5377C27.2212 19.5574 28.2525 20.3348 29.1299 19.8543L34.0311 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M33.9689 0C34.3964 0 34.8239 0.2305 35.0451 0.695408L37.4938 5.86799L42.9725 6.69623C43.955 6.84469 44.3487 8.10658 43.6362 8.82933L39.6725 12.8533L40.61 18.5377C40.7788 19.5574 39.7475 20.3348 38.8701 19.8543L33.9689 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M58.0311 0C57.6036 0 57.1761 0.2305 56.9549 0.695408L54.5062 5.86799L49.0275 6.69623C48.045 6.84469 47.6513 8.10658 48.3638 8.82933L52.3275 12.8533L51.39 18.5377C51.2212 19.5574 52.2525 20.3348 53.1299 19.8543L58.0311 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M57.9689 0C58.3964 0 58.8239 0.2305 59.0451 0.695408L61.4938 5.86799L66.9725 6.69623C67.955 6.84469 68.3487 8.10658 67.6362 8.82933L63.6725 12.8533L64.61 18.5377C64.7788 19.5574 63.7475 20.3348 62.8701 19.8543L57.9689 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M82.0311 0C81.6036 0 81.1761 0.2305 80.9549 0.695408L78.5062 5.86799L73.0275 6.69623C72.045 6.84469 71.6513 8.10658 72.3638 8.82933L76.3275 12.8533L75.39 18.5377C75.2212 19.5574 76.2525 20.3348 77.1299 19.8543L82.0311 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M81.9689 0C82.3964 0 82.8239 0.2305 83.0451 0.695408L85.4938 5.86799L90.9725 6.69623C91.955 6.84469 92.3487 8.10658 91.6362 8.82933L87.6725 12.8533L88.61 18.5377C88.7788 19.5574 87.7475 20.3348 86.8701 19.8543L81.9689 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M106.031 0C105.604 0 105.176 0.2305 104.955 0.695408L102.506 5.86799L97.0275 6.69623C96.045 6.84469 95.6513 8.10658 96.3638 8.82933L100.327 12.8533L99.39 18.5377C99.2212 19.5574 100.252 20.3348 101.13 19.8543L106.031 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M105.969 0C106.396 0 106.824 0.2305 107.045 0.695408L109.494 5.86799L114.972 6.69623C115.955 6.84469 116.349 8.10658 115.636 8.82933L111.673 12.8533L112.61 18.5377C112.779 19.5574 111.748 20.3348 110.87 19.8543L105.969 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </a>
                                                    <div class="text">
                                                        <a href="#">2 days ago</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-list-main-box-item aos-init aos-animate" data-aos="fade-up"
                                            data-aos-delay="50">
                                            <div class="review-list-main-box-item-text">
                                                <h5>Eggplant Baked with Cheese</h5>
                                                <p>?There are many variations of passages of Lorem Ipsum available,to
                                                    majority have
                                                    into the find end to suffered.?</p>
                                            </div>
                                            <div class="review-list-main-box-inner">
                                                <div class="review-list-main-box-inner-item">
                                                    <div class="review-list-main-box-inner-item-img">
                                                        <img src="./assets/images/small/review.png" alt="img">
                                                    </div>
                                                    <div class="review-list-main-box-inner-item-text">
                                                        <h5>Jerome Bell</h5>
                                                        <p>Dog Trainer</p>
                                                    </div>
                                                </div>
                                                <div class="review-list-main-box-inner-item-right">
                                                    <a href="#">
                                                        <div class="icon">
                                                            <span>
                                                                <svg width="116" height="20" viewBox="0 0 116 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M10.0311 0C9.60363 0 9.17613 0.2305 8.95488 0.695408L6.50617 5.86799L1.0275 6.69623C0.0450172 6.84469 -0.348727 8.10658 0.363762 8.82933L4.32745 12.8533L3.38997 18.5377C3.22122 19.5574 4.25245 20.3348 5.12994 19.8543L10.0311 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M9.96888 0C10.3964 0 10.8239 0.2305 11.0451 0.695408L13.4938 5.86799L18.9725 6.69623C19.955 6.84469 20.3487 8.10658 19.6362 8.82933L15.6725 12.8533L16.61 18.5377C16.7788 19.5574 15.7475 20.3348 14.8701 19.8543L9.96888 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M34.0311 0C33.6036 0 33.1761 0.2305 32.9549 0.695408L30.5062 5.86799L25.0275 6.69623C24.045 6.84469 23.6513 8.10658 24.3638 8.82933L28.3275 12.8533L27.39 18.5377C27.2212 19.5574 28.2525 20.3348 29.1299 19.8543L34.0311 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M33.9689 0C34.3964 0 34.8239 0.2305 35.0451 0.695408L37.4938 5.86799L42.9725 6.69623C43.955 6.84469 44.3487 8.10658 43.6362 8.82933L39.6725 12.8533L40.61 18.5377C40.7788 19.5574 39.7475 20.3348 38.8701 19.8543L33.9689 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M58.0311 0C57.6036 0 57.1761 0.2305 56.9549 0.695408L54.5062 5.86799L49.0275 6.69623C48.045 6.84469 47.6513 8.10658 48.3638 8.82933L52.3275 12.8533L51.39 18.5377C51.2212 19.5574 52.2525 20.3348 53.1299 19.8543L58.0311 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M57.9689 0C58.3964 0 58.8239 0.2305 59.0451 0.695408L61.4938 5.86799L66.9725 6.69623C67.955 6.84469 68.3487 8.10658 67.6362 8.82933L63.6725 12.8533L64.61 18.5377C64.7788 19.5574 63.7475 20.3348 62.8701 19.8543L57.9689 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M82.0311 0C81.6036 0 81.1761 0.2305 80.9549 0.695408L78.5062 5.86799L73.0275 6.69623C72.045 6.84469 71.6513 8.10658 72.3638 8.82933L76.3275 12.8533L75.39 18.5377C75.2212 19.5574 76.2525 20.3348 77.1299 19.8543L82.0311 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M81.9689 0C82.3964 0 82.8239 0.2305 83.0451 0.695408L85.4938 5.86799L90.9725 6.69623C91.955 6.84469 92.3487 8.10658 91.6362 8.82933L87.6725 12.8533L88.61 18.5377C88.7788 19.5574 87.7475 20.3348 86.8701 19.8543L81.9689 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M106.031 0C105.604 0 105.176 0.2305 104.955 0.695408L102.506 5.86799L97.0275 6.69623C96.045 6.84469 95.6513 8.10658 96.3638 8.82933L100.327 12.8533L99.39 18.5377C99.2212 19.5574 100.252 20.3348 101.13 19.8543L106.031 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M105.969 0C106.396 0 106.824 0.2305 107.045 0.695408L109.494 5.86799L114.972 6.69623C115.955 6.84469 116.349 8.10658 115.636 8.82933L111.673 12.8533L112.61 18.5377C112.779 19.5574 111.748 20.3348 110.87 19.8543L105.969 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </a>
                                                    <div class="text">
                                                        <a href="#">2 days ago</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-list-main-box-item aos-init" data-aos="fade-up"
                                            data-aos-delay="100">
                                            <div class="review-list-main-box-item-text">
                                                <h5>Eggplant Baked with Cheese</h5>
                                                <p>?There are many variations of passages of Lorem Ipsum available,to
                                                    majority have
                                                    into the find end to suffered.?</p>
                                            </div>
                                            <div class="review-list-main-box-inner">
                                                <div class="review-list-main-box-inner-item">
                                                    <div class="review-list-main-box-inner-item-img">
                                                        <img src="./assets/images/small/review.png" alt="img">
                                                    </div>
                                                    <div class="review-list-main-box-inner-item-text">
                                                        <h5>Jerome Bell</h5>
                                                        <p>Dog Trainer</p>
                                                    </div>
                                                </div>
                                                <div class="review-list-main-box-inner-item-right">
                                                    <a href="#">
                                                        <div class="icon">
                                                            <span>
                                                                <svg width="116" height="20" viewBox="0 0 116 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M10.0311 0C9.60363 0 9.17613 0.2305 8.95488 0.695408L6.50617 5.86799L1.0275 6.69623C0.0450172 6.84469 -0.348727 8.10658 0.363762 8.82933L4.32745 12.8533L3.38997 18.5377C3.22122 19.5574 4.25245 20.3348 5.12994 19.8543L10.0311 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M9.96888 0C10.3964 0 10.8239 0.2305 11.0451 0.695408L13.4938 5.86799L18.9725 6.69623C19.955 6.84469 20.3487 8.10658 19.6362 8.82933L15.6725 12.8533L16.61 18.5377C16.7788 19.5574 15.7475 20.3348 14.8701 19.8543L9.96888 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M34.0311 0C33.6036 0 33.1761 0.2305 32.9549 0.695408L30.5062 5.86799L25.0275 6.69623C24.045 6.84469 23.6513 8.10658 24.3638 8.82933L28.3275 12.8533L27.39 18.5377C27.2212 19.5574 28.2525 20.3348 29.1299 19.8543L34.0311 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M33.9689 0C34.3964 0 34.8239 0.2305 35.0451 0.695408L37.4938 5.86799L42.9725 6.69623C43.955 6.84469 44.3487 8.10658 43.6362 8.82933L39.6725 12.8533L40.61 18.5377C40.7788 19.5574 39.7475 20.3348 38.8701 19.8543L33.9689 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M58.0311 0C57.6036 0 57.1761 0.2305 56.9549 0.695408L54.5062 5.86799L49.0275 6.69623C48.045 6.84469 47.6513 8.10658 48.3638 8.82933L52.3275 12.8533L51.39 18.5377C51.2212 19.5574 52.2525 20.3348 53.1299 19.8543L58.0311 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M57.9689 0C58.3964 0 58.8239 0.2305 59.0451 0.695408L61.4938 5.86799L66.9725 6.69623C67.955 6.84469 68.3487 8.10658 67.6362 8.82933L63.6725 12.8533L64.61 18.5377C64.7788 19.5574 63.7475 20.3348 62.8701 19.8543L57.9689 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M82.0311 0C81.6036 0 81.1761 0.2305 80.9549 0.695408L78.5062 5.86799L73.0275 6.69623C72.045 6.84469 71.6513 8.10658 72.3638 8.82933L76.3275 12.8533L75.39 18.5377C75.2212 19.5574 76.2525 20.3348 77.1299 19.8543L82.0311 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M81.9689 0C82.3964 0 82.8239 0.2305 83.0451 0.695408L85.4938 5.86799L90.9725 6.69623C91.955 6.84469 92.3487 8.10658 91.6362 8.82933L87.6725 12.8533L88.61 18.5377C88.7788 19.5574 87.7475 20.3348 86.8701 19.8543L81.9689 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M106.031 0C105.604 0 105.176 0.2305 104.955 0.695408L102.506 5.86799L97.0275 6.69623C96.045 6.84469 95.6513 8.10658 96.3638 8.82933L100.327 12.8533L99.39 18.5377C99.2212 19.5574 100.252 20.3348 101.13 19.8543L106.031 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                    <path
                                                                        d="M105.969 0C106.396 0 106.824 0.2305 107.045 0.695408L109.494 5.86799L114.972 6.69623C115.955 6.84469 116.349 8.10658 115.636 8.82933L111.673 12.8533L112.61 18.5377C112.779 19.5574 111.748 20.3348 110.87 19.8543L105.969 17.1742V0Z"
                                                                        fill="#FFC403"></path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </a>
                                                    <div class="text">
                                                        <a href="#">2 days ago</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-list-main-box-item-btn">
                                            <a href="#" class="main-btn-four">
                                                See all
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14 16L18 12M18 12L14 8M18 12L6 12" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings2" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab2">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="dashboard-item-taitel">
                                            <h4>Dashboard</h4>
                                            <p>Let?s check your today</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="dashboard-edit-profile-from">
                                            <div class="shopping-cart-new-address-from">
                                                <div class="shopping-cart-new-address-from-item">
                                                    <div class="shopping-cart-new-address-from-inner">
                                                        <label for="exampleFormControlInput1" class="form-label">Current
                                                            Password</label>
                                                        <input type="text" class="form-control"
                                                            id="exampleFormControlInput06"
                                                            placeholder="Type you password">
                                                    </div>
                                                </div>
                                                <div class="shopping-cart-new-address-from-item">
                                                    <div class="shopping-cart-new-address-from-inner">
                                                        <label class="form-label">New password</label>
                                                        <input type="text" class="form-control"
                                                            id="exampleFormControlInput14"
                                                            placeholder="Type you password">
                                                    </div>
                                                    <div class="shopping-cart-new-address-from-inner">
                                                        <label class="form-label">Confirm
                                                            Password</label>
                                                        <input type="text" class="form-control"
                                                            id="exampleFormControlInput08"
                                                            placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                                <div class="change-passowerd-btn  ">
                                                    <a href="#" class="main-btn-four">Save now</a>
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
        </section>
        <!-- dashboard end  -->
    </main>
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