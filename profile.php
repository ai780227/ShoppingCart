<?php 
                                session_start();
                                    $con=mysqli_connect("localhost","root","","amz");
                                    $_SESSION['userid']='1000';   //predefine for test;
                                    $userid = $_SESSION['userid'];
                                    
                                    $sql = "SELECT * from users where userid='$userid'";
                                    $result = mysqli_query($con,$sql);
                                    while ($row=$result->fetch_assoc()){
                                        $username = $row['username'];
                                        $email = $row['email'];
                                        $phone =$row['mobile'];
                                        $address=$row['address'];
                                        $state = $row['state'];
                                        $city = $row['city'];
                                        $zip = $row['zip'];
                                    }
 ?>

<!DOCTYPE html>
<html>
<head>
<title>Big store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template| Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
   <script src="js/bootstrap.js"></script>
<!-- //js -->
<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
<!-- for small icons-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<style>
	
        .profile{
			font-size: 10px;
           padding: 0px 10px;
           border: 1px solid black;
           width: 82%;
            height: 100%;
           float: right;
		}
		.title{		
         padding: 22px 15px 15px 15px;
          margin-bottom: 0;
		}
        .desc{
		    clear:left;
			float:left;
			margin:10px 0px 0px 13px;
		}
		.info{
			
			float:right;
			margin:10px 10px  10px 10px;
			border: 1px solid #ddd !important;
    color: #333 !important;
		}
		.detail{
			border: 1px solid #ddd;

    margin-bottom: 15px;
   
         color:black;
		}
		.normal
		{
			
			float:right;
			margin:10px 10px  10px 10px;
			border: 1px solid #ddd !important;
    color: #333 !important;
    border-radius: 0 !important;
    background-color: transparent !important;
		}
		.change
		{
			vertical-align: baseline!important;
    	display: inline-block!important;
    	padding: 0 10px!important;
    	margin:40px 40px 20px 50px;
    	
    	top: 0!important;
		}
       .cancel{
		vertical-align: baseline!important;
    display: inline-block!important;
    width: auto!important;
    font-size: 13px!important;
    
	margin:40px 40px 20px 50px;
	float:right;
}
</style>

</head>
<body>

<header class="header">

		<div class="container">
			
				<div class="nav-top">
					<nav class="navbar navbar-default">
					
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
							<li class="active"><a href="index.html" class="hyper "><span>Home</span></a></li>	
							
							<li class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Kitchen<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
			
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Water & Beverages</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Fruits & Vegetables</a></li>
												<li><a href="#"> <i class="fa fa-angle-right" aria-hidden="true"></i>Staples</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Branded Food</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-3">
										
											<ul class="multi-column-dropdown">
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Breakfast &amp; Cereal</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Snacks</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Spices</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Biscuit &amp; Cookie</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Sweets</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-3">
										
											<ul class="multi-column-dropdown">
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Pickle & Condiment</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Instant Food</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Dry Fruit</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Tea &amp; Coffee</a></li>
										
											</ul>
										</div>
										<div class="col-sm-3 w3l">
											<a href="#"><img src="images/me.png" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							<li class="dropdown">
							
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span> Personal Care <b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Ayurvedic </a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Baby Care</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Cosmetics</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Deo & Purfumes</a></li>
										
											</ul>
											
										</div>
										<div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="#"> <i class="fa fa-angle-right" aria-hidden="true"></i>Hair Care </a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Oral Care</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Personal Hygiene</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Skin care</a></li>
										
											</ul>
											
										</div>
										<div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Fashion Accessories </a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Grooming Tools</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Shaving Need</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Sanitary Needs</a></li>
										
											</ul>
										</div>
										<div class="col-sm-3 w3l">
											<a href="#"><img src="images/me1.png" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Household<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi2">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Cleaning Accessories</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>CookWear</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Detergents</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Gardening Needs</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Kitchen & Dining</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>KitchenWear</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Pet Care</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Plastic Wear</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-3">
										
											<ul class="multi-column-dropdown">
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Pooja Needs</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Serveware</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Safety Accessories</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Festive Decoratives </a></li>
										
											</ul>
										</div>
										<div class="col-sm-3 w3l">
											<a href="#"><img src="images/me2.png" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							
							<li><a href="#" class="hyper"> <span>Codes</span></a></li>
							<li><a href="#" class="hyper"><span>Contact Us</span></a></li>
						</ul>
					</div>
					</nav>
					 <div class="cart" >
						<span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
					</div>
					<div class="clearfix"></div>
				</div>
					
		</div>		
		
</header>


	<div class="container">
		<div class="row">
			<div class="col-sm-3" >
				<ul class="nav nav-pills nav-stacked">
						<li><a href = "#profile">Profile</a></li>
						<li><a href = "#My order">My Order</a></li>
						<li><a href = "#Shopping cart">Shopping cart</a></li>	
				</ul>
					
			</div>
		    
		    <div class="col-sm-6" style="border:1 px solid black">
				<!--use icon-->
					
					<h4><i class="glyphicon glyphicon-user" style="margin-right:10px; size=20px;" ></i> Profile </h4>
				
				
					<div class="detail">
						<div class="row">
							<div class="col-sm-6">
                                <div class = "desc" ><label  for="username"  >Username:</label>
                                    <?php
                                    if ($username){
                                        echo "<p>$username</p>";
                                    }
                                    ?>
                                </div>
                                <div class= "desc" ><label for ="email"> Email</label>
                                    <?php
                                    echo "<p>$email</p>";
                                     ?>
                                </div>
                                <div class= "desc" ><label for ="phone">Phone number</label>
                                <?php
                                echo "<p>$phone</p>";
                                ?></div>
								
                                <div class= "desc" ><label  for ="address">Address:</label>
                                <?php
                                echo "<p>$address</p>";
                                ?></div>
								<div class="desc"><label  for ="state">State:</label>
                                <?php
                                echo "<p>$state</p>";
                                ?>
                                </div>
                                <div class="desc"><label  for ="city">City:</label>
                                <?php
                                echo "<p>$city</p>";
                                ?>
                                </div>
                                <div class="desc"><label  for ="zip">Zip:</label>
                                <?php
                                echo "<p>$zip</p>";
                                ?>
                                <div class ="col-sm-6">
                                    
                                <input type="button" onclick="window.location.href = 'edit_profile.html';" value="Edit"/>
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

	
		
        
	




</body>
      