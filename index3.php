<!DOCTYPE html>
<html>
<title>The King Cater'z</title>
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="style.css" type="text/css">	
<link rel="stylesheet" type="text/css" href="style1.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/jquery-3.1.1.js"></script>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
	//slideToggle
	$(document).ready(function(){
	$("#readmore").click(function(){
		$("#para2").slideToggle("slow");
	});
	});
	//close slideToggle
	//fadeToggle
	$(document).ready(function(){
	$("#readmore1").click(function(){
		$("#ab_p2").fadeToggle("slow");
	});
	});
</script>    
</head>
<style>

</style>

<body>
<!--Backslideshow-->
<div class="container-fluid">
	<ul class="cb-slideshow">
		<li><span><img src="img/101.jpg"></span></li>
		<li><span><img src="img/1012.jpg"></span></li>
		<li><span><img src="img/a.jpg"></span></li>
		<li><span><img src="img/4th.jpg"></span></li>
		<li><span><img src="img/5th.jpg"></span></li>
		<li><span><img src="img/6th.jpg"></span></li>
	</ul>
</div>
<!--End Backslideshow-->
	<div class="container-fluid">
		<!--Topnav-->
			<div class="row">
				<div class="col-lg-12 col-md-12 "style="background-color:#CC0000;">
					<div class="topnav" id="myTopnav">
						<a class="logotop" style="font-size:41px;font-family:myfont;padding:5px; margin:0px; width:220px;">The King Cater'z</a>
						<a href="#Home" class="active">Home</a>
						<a href="#about">About Us</a>
						<a href="#gallery">Gallery</a>
						<a href="#special_menu">Menus  </a>
						<a href="#catering">Catering</a>
						<a href="#locate">Contact Us	</a>
						<a href="cart/login1.php"style="background-color:rgba(0,250,250,0.8);"	>Order Online</a>
						<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
					</div>
				</div>
			</div>	
		<!--End Topnav-->
	
		<!--Header-->
			<div id="Home">
				<div class="row">
					<div class="col-lg-12">
						<header>
							<div class="row">
								<hr style="	width:75%;margin-top:50px;margin-bottom:10px;">
									<div class="col-lg-2 col-lg-offset-1 col-md-4 col-sm-12">
										<div class="logo"><a href="#"><img src="img/man.png" height="120px" width="250px"></a></div>
									</div>
									<div class="col-lg-9 col-md-8 col-sm-12">
									<div  class="logotxt">
										<a href="#"><h1>The King Cater'z</h1><h4>BEST SOLUTION FOR YOUR SPECIAL EVENT</h4></a>
									</div>
									</div>
							</div>
						<hr style="width:75%;float:right;margin-bottom:10px;margin-top:10px;">
								</header>
					</div>
				</div>
				<!--End header-->
				<!--Home-->
				<section class="mainwlc" >
						<div class="row">
						<div class="col-lg-12"><h2 class="wlc">Welcome  To  -:The King Cater'z:-</h2>	</div>

						<div class="col-lg-5 col-lg-offset-1">
							<p  class="p1">
								We are the best catering experts & Parties planner in <span style="color:#20B2AA;">Tricity i.e. Panchkula, Chandigarh and Mohali.</span>
								A part from wedding parties, corporate parties, house warming parties, birthday parties are offered
								by us with best quality assurance. Our excellent team staff will plan your needs and requirement,
								execute in best manner that make your parties unforgettable. We assure you that we will handle 
								your function in very special way and give our best to make your event more valuable.
								</br><a id="readmore"  style="cursor:pointer;color:	#20B2AA;text-decoration:none;">Read More....</a>
							</p>
							
							<p class="p2" id="para2">
								We are the one of the top party service provider in <span style="color:#20B2AA;">Chandigarh and nearby cities,</span> offering the 
								wide array of services and arrange your parties in excellent way. We have different range of 
								package that suits requirement of event based on volume, budget and mood. 
							</p>
							
						</div>
						<div class="col-lg-5 ">
						<img style="margin-top:20px;" class="main_img" src="img/slide004.jpg" />
						</div>
					</div>
				</section>
			</div>
		<!--End Home-->
				
		<!--About us-->
			<section id="about" class="about">
				<div class="row">
					<div class="col-lg-12">
							<h2 id="about_heading">--: About Us :--</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5 col-lg-offset-1">
						<p class="ab_p1">The King Cater'z is a well known name in the catering industry since 1995 . 
						Initially run under the guidance of Raghubir Singh and Prem Sagar. These food 
						provider has hosted in some of the grandest wedding in Chandigarh,	Panchkula,
						Naya gaon and Mohali. The service is finest in the town and has already made a name for itself. Currently all the work is 
						handled by Oman who is redefining the organization in a new innovative way.
						</p>
						</div>
					<div class="col-lg-5">
					<p class="ab_p1" id="ab_p2">For those of you who are more into stall food we would like to draw you
							attention towards our stall section. The Chinese, Manchurian, the famous 
							golgappa and chat section is most checked out in our service list. So if 
							you are looking out for a catering servicer then we are there for you and 
							we will make sure everything runes for a smooth show and make you big day 
							a memorable one.
						</p>

					</div>
				</div>
			</section>
			<!--End About us-->

			
			<section id="special_menu">
			<div class="row">
					<div class="col-lg-12">
							<h2 class="spl_heading">--: Special Menus :--</h2>
					</div>
			</div>
			<div class="row" >
				<div class="col-lg-4">
					<button class="tablink" onclick="openPage('snacks', this, '#708090')" id="defaultOpen">SNACKS</button>
					<button class="tablink" onclick="openPage('sandwich', this, '#708090')">GRILLED SANDWICHES</button>
					<button class="tablink" onclick="openPage('pasta', this, '#708090')">PASTA</button>
					<button class="tablink" onclick="openPage('chaats', this, '#708090')">CHAATS</button>
					<button class="tablink" onclick="openPage('pizza', this, '#708090')">PIZZA</button>
				</div>
				<div class="col-lg-4">	
					<button class="tablink" onclick="openPage('southindian', this, '#708090')">SOUTH INDIAN</button>
					<button class="tablink" onclick="openPage('indiancusin', this, '#708090')">INDIAN CUISINE</button>
					<button class="tablink" onclick="openPage('basmati', this, '#708090')">BASMATI KHAZANA</button>
					<button class="tablink" onclick="openPage('raita', this, '#708090')">RAITA</button>
					<button class="tablink" onclick="openPage('tandoor', this, '#708090')">TANDOOR SE</button>
				</div>
				<div class="col-lg-4">	
					<button class="tablink" onclick="openPage('dessert', this, '#708090')">DESSERTS</button>
					<button class="tablink" onclick="openPage('meals', this, '#708090')">MEALS</button>
					<button class="tablink" onclick="openPage('chines', this, '#708090')">CHINESE</button>
					<button class="tablink" onclick="openPage('beverage', this, '#708090')">BEVERAGES</button>
					<button class="tablink" onclick="openPage('salad', this, '#708090')">SALAD</button> 
				</div>
			</div>	
				<div id="snacks" class="tabcontent">
					<div class="row">
						<div class="col-lg-12">
							<h2 id="menu-head" >SNACKS</h2><br>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div id="food_item" style="background:url(img/spl/cb.jpg);height:250px;background-size:cover;">
								<h4>Channa Bhatura</h4>
							</div><br><br>
							<div id="food_item" style="background:url(img/spl/paneer_methi_tikki.jpg);height:250px;background-size:cover;">
								<h4>Aloo Ki Tikki</h4>
							</div>						
						</div>
						<div class="col-lg-4">
							<div id="food_item" style="background:url(img/spl/dokla.jpg);height:250px;background-size:cover;">
								<h4>Dhokla</h4>
							</div><br><br>
							<div id="food_item" style="background:url(img/spl/Paneer-Tikka-Panini-with-Cream-of-Mushroom-Soup.jpg);height:250px;background-size:cover;">
								<h4>Paneer Tikka</h4>
							</div>
						</div>
						<div class="col-lg-4">
							<div id="food_item" style="background:url(img/spl/Aloo-Puri.jpg);height:250px;background-size:cover;">
								<h4>Bedmi Puri</h4>
							</div><br><br>
							<div id="food_item" style="background:url(img/spl/barger.jpg);height:250px;background-size:cover;">			
								<h4>Veg Burger</h4>
							</div>
						</div>
					</div>
				</div><!--tabcontent-->
						
				<div id="sandwich" class="tabcontent">
					<div class="row">
						<div class="col-lg-12">
							<h2 id="menu-head" id="GRILLED">GRILLED SANDWICHES</h2><br>
						</div>
					</div>		
							<div class="row">
								<div class="col-lg-4">
									<div id="food_item" style="background:url(img/spl/sandwich.jpg);height:250px;background-size:cover;">
										<h4>Vegetable Sandwich</h4>
									</div>
								</div>
								<div class="col-lg-4">	
									<div id="food_item" style="background:url(img/spl/Paneer-Tikka-Panini-with-Cream-of-Mushroom-Soup.jpg);height:250px;background-size:cover;">
									<h4>Paneer Tikka Sandwich</h4>
									</div>
								</div>
								<div class="col-lg-4">		
									<div id="food_item" style="background:url(img/spl/patatosanwich.jpg);height:250px;background-size:cover;">
									<h4>Masala Potato Sandwich</h4>
									</div>
								</div>	
							</div>
				</div><!--tabcontent-->

				<div id="pasta" class="tabcontent">
					<div class="row">
						<div class="col-lg-12">
						<h2 id="menu-head" >PASTA</h2><br>
						</div>
					</div>	
						<div class="row">
								<div class="col-lg-6">
									<div id="food_item" style="background:url(img/spl/recipe-Fusilli_Plate.jpg);height:250px;background-size:cover;">
									<h4>White Sauce Cream (Fusilli)</h4>
									</div>
								</div>
								<div class="col-lg-6">
									<div id="food_item" style="background:url(img/spl/red.jpg);height:250px;background-size:cover;">
									<h4>Pink Sauce (Red & White Mix)</h4>
									</div>
								</div>
						</div>
				</div><!--tabcontent-->

				<div id="chaats" class="tabcontent">
					  <div class="row">
						<div class="col-lg-12">
							<h2 id="menu-head">CHAATS</h2><br>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3">
							<div id="food_item" style="background:url(img/spl/chatblla.jpg);height:250px;background-size:cover;">
							<h4>Chaat Bhalla Papri</h4>
							</div>
						</div>	
						<div class="col-lg-3">	
							<div id="food_item" style="background:url(img/spl/golgappa.jpg);height:250px;background-size:cover;">
							<h4>Golgappa</h4>
							</div>
						</div>
						<div class="col-lg-3">		
							<div id="food_item" style="background:url(img/spl/rajkachori.jpg);height:250px;background-size:cover;">
							<h4>Raj Kachori Chaat</h4>
							</div>
						</div>	
						<div class="col-lg-3">
							<div id="food_item" style="background:url(img/spl/dahigolgapa.jpg);height:250px;background-size:cover;">
							<h4>Dahi Golgappa</h4>
							</div>
						</div>
					</div>	
				</div><!--tabcontent-->

				
				
				<div id="pizza" class="tabcontent">		
					<div class="row">
							<div class="col-lg-12">
								<h2 id="menu-head">PIZZA</h2><br>
							</div>	
						</div>
						<div class="row">
							<div class="col-lg-4">
								<div id="food_item" style="background:url(img/spl/magpiza.jpg);height:250px;background-size:cover;">
								<h4>Margherita Pizza</h4>
								</div>
							</div>
							<div class="col-lg-4" >		
								<div id="food_item" style="background:url(img/spl/Tasty.jpg);height:250px;background-size:cover;">
								<h4>Paneer Tikka Pizza</h4>
								</div>
							</div>
							<div class="col-lg-4" >			
								<div id="food_item" style="background:url(img/spl/delpizza.jpg);height:250px;background-size:cover;">
								<h4>Deluxe Paneer Pizza</h4>
								</div>
							</div>	
						</div>
				</div><!--tabcontent-->
				<div id="southindian" class="tabcontent">
						<div class="row">
							<div class="col-lg-12">
								<h2 id="menu-head">SOUTH INDIAN</h2><br>
							</div>	
						</div>	
						<div class="row">
								<div class="col-lg-6" >
									<div id="food_item" style="background:url(img/spl/Medu_Vada_Sambhar.jpg);height:250px;background-size:cover;">
									<h4>Sambar Vada</h4>
									</div>
								</div>
								<div class="col-lg-6" >		
									<div id="food_item" style="background:url(img/spl/dryvada2.jpg);height:250px;background-size:cover;">
									<h4>Dry Vada</h4>
									</div>
								</div>	
						</div>
				</div><!--tabcontent-->
				
				<div id="indiancusin" class="tabcontent">
					<div class="row">
							<div class="col-lg-12">
								<h2 id="menu-head">INDIAN CUISINE</h2><br>
							</div>	
						</div>
						<div class="row">
							<div class="col-lg-3">
									<div id="food_item" style="background:url(img/spl/sahipanir.gif);height:250px;background-size:cover;">
									<h4>Shahi Paneer</h4>
									</div>
							</div>		
							<div class="col-lg-3">		
									<div id="food_item" style="background:url(img/spl/mixveg.jpg);height:250px;background-size:cover;">
									<h4>Mix Veg</h4>
									</div>
							</div>
							<div class="col-lg-3">		
									<div id="food_item" style="background:url(img/spl/karhipaneir.jpg);height:250px;background-size:cover;">
									<h4>Karahi Paneer </h4>
									 </div>
							</div>
							<div class="col-lg-3">
									<div id="food_item" style="background:url(img/spl/yellowdal.jpg);height:250px;background-size:cover;">
									<h4>Yellow Dal </h4>
									 </div>
							</div>	
						</div>
				</div><!--tabcontent-->
				
				<div id="basmati" class="tabcontent">
					<div class="row">
							<div class="col-lg-12">
								<h2 id="menu-head">BASMATI KHAZANA</h2><br>
							</div>	
						</div>
						<div class="row">
							<div class="col-lg-4">
										<div id="food_item" style="background:url(img/spl/jeera-rice-02.jpg);height:250px;background-size:cover;">
										<h4>Jeera Rice</h4>
										</div>
						</div>
							<div class="col-lg-4">		
										<div id="food_item" style="background:url(img/spl/aloo.matar.pulao.jpg);height:250px;background-size:cover;">
										<h4>Matar Pulao </h4>
									</div>
							</div>	
							<div class="col-lg-4">
										<div id="food_item" style="background:url(img/spl/vegbiryani.jpg);height:250px;background-size:cover;">
										<h4>Veg Biryani</h4>
										</div>
							</div>	
						</div>
				</div><!--tabcontent-->
				
				<div id="raita" class="tabcontent">
					<div class="row">
							<div class="col-lg-12">
								<h2 id="menu-head">RAITA</h2><br>
							</div>	
						</div>
						<div class="row">
						<div class="col-lg-6">
							<div id="food_item" style="background:url(img/spl/Plain_Yogurt.jpg);height:250px;background-size:cover;">
							<h4>Plain Curd</h4>
							</div>
						</div>	
						<div class="col-lg-6">	
							<div id="food_item" style="background:url(img/spl/bondiraita.jpg);height:250px;background-size:cover;">
							<h4>Boondi Raita</h4>
							</div>
						</div>
						</div>
				</div><!--tabcontent-->
				
				<div id="tandoor" class="tabcontent">
					<div class="row">
						<div class="col-lg-12">
							<h2 id="menu-head">TANDOOR SE</h2><br>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div id="food_item"style="background:url(img/spl/tanduriroti.jpg);height:250px;background-size:cover;">
							<h4>Tandoori Roti</h4>
							</div>
						</div>
						<div class="col-lg-4">		
							<div id="food_item" style="background:url(img/spl/Plain-Naan-2.png);height:250px;background-size:cover;">
							<h4>Naan </h4>
							</div>
						</div>	
						<div class="col-lg-4">	
							<div id="food_item" style="background:url(img/spl/tunduriprata.png);height:250px;background-size:cover;">
							<h4>Tandoori Paratha</h4>
							</div>
						</div>	
					</div>
				</div><!--tabcontent-->
				
				<div id="dessert" class="tabcontent">
					<div class="row">
						<div class="col-lg-12">
							<h2 id="menu-head">DESSERTS</h2><br>
						</div>	
					</div>
					<div class="row">
							<div class="col-lg-3">
								<div id="food_item" style="background:url(img/spl/rabri.jfif);height:250px;background-size:cover;">
								<h4>Rabri</h4>
							</div>
							</div>		
							<div class="col-lg-3">	
								<div id="food_item" style="background:url(img/spl/gajarhlwa.jfif);height:250px;background-size:cover;">
								<h4>Gajar Halwa (Winter Special)</h4>
								</div>
							</div>
							<div class="col-lg-3">
								<div id="food_item" style="background:url(img/spl/kheer.jpg);height:250px;background-size:cover;">
								<h4>Kheer</h4>
								</div>
							</div>
							<div class="col-lg-3">	
								<div id="food_item" style="background:url(img/spl/coffie.jpg);height:250px;background-size:cover;">
								<h4>Coffee Pudding </h4>
								</div>
							</div>
					</div>
				</div><!--tabcontent-->
				
				<div id="meals" class="tabcontent">
					<div class="row">
							<div class="col-lg-12">
								<h2 id="menu-head">MEALS</h2><br>
							</div>
						</div>
						<div class="row">
								<div class="col-lg-4">
									<div id="food_item" style="background:url(img/spl/thali.jpg);height:250px;background-size:cover;">
									<h4>Special Veg Thali</h4>
								</div>
								</div>
								<div class="col-lg-4">	
									<div id="food_item" style="background:url(img/spl/dalrotii.jpg);height:250px;background-size:cover;">
									<h4>Dal Roti</h4>
									</div>
								</div>
								<div class="col-lg-4">		
									<div id="food_item" style="background:url(img/spl/rc1.jpg);height:250px;background-size:cover;">
									<h4>Rajma Chawal </h4>
									 </div>
								</div>	
						</div>
				</div><!--tabcontent-->
				
				<div id="chines" class="tabcontent">
						<div class="row">
							<div class="col-lg-12">
							<h2 id="menu-head">CHINESE</h2><br>
							</div>
						</div>	
							<div class="row">
								<div class="col-lg-3">
									<div id="food_item" style="background:url(img/spl/vegmanchrian.jpg);height:250px;background-size:cover;">
									<h4>Veg Manchurian</h4>
									</div>
								</div>	
								<div class="col-lg-3">	
									<div id="food_item" style="background:url(img/spl/musrum.jpg);height:250px;background-size:cover;">
									<h4>Mushroom Chilli</h4>
									</div>
								</div>	
								<div class="col-lg-3">	
									<div id="food_item" style="background:url(img/spl/chomin.jpg);height:250px;background-size:cover;">
									<h4>Chilli Garlic Chowmein</h4>
									</div>
								</div>
								<div class="col-lg-3">		
									<div id="food_item" style="background:url(img/spl/Hakka-Noodles.jpg);height:250px;background-size:cover;">
									<h4>Hakka Noodles</h4>
									</div>
								</div>	
						</div>
				</div><!--tabcontent-->
				
				<div id="beverage" class="tabcontent">
						<div class="row">
							<div class="col-lg-12">
								<h2 id="menu-head" >BEVERAGES</h2><br>
							</div>
						</div>
						<div class="row"id="BEVERAGES">
							<div class="col-lg-4">
									<div id="food_item"  style="background:url(img/spl/SugarTax.jpg);height:250px;background-size:cover;">
									<h4>Cold Drink</h4>
									</div>
								</div>	
								<div class="col-lg-4">		
									<div id="food_item"style="background:url(img/spl/canjuice.jpg);height:250px;background-size:cover;">
									<h4>Can Juices</h4>
									<select value="Select a varient">
									<option>Orange</option>
									<option>Mango</option>
									<option>Apple</option>
									</select>
									</div>
									</div>
								<div class="col-lg-4">		
									<div id="food_item" style="background:url(img/spl/water.jpg);height:250px;background-size:cover;">
									<h4>Mineral Water </h4>
									</div>
								</div>	
						</div>
				</div><!--tabcontent-->
				
				<div id="salad" class="tabcontent">
						<div class="row">
							<div class="col-lg-12">
								<h2 id="menu-head">Salad</h2><br>
							</div>	
						</div>
						<div class="row">
								<div class="col-lg-6">
									<div id="food_item" style="background:url(img/spl/salad.jpg);height:250px;background-size:cover;">
									<h4>Salad</h4>
									</div>
								</div>
								<div class="col-lg-6" >
									<div id="food_item" style="background:url(img/spl/salad1.jfif);height:250px;background-size:cover;">
									<h4>Special Salad</h4>
									</div>
								</div>		
							</div>
				</div><!--tabcontent-->
				
			<script>
			function openPage(pageName,elmnt,color) {
				var i, tabcontent, tablinks;
				tabcontent = document.getElementsByClassName("tabcontent");
				for (i = 0; i < tabcontent.length; i++) {
					tabcontent[i].style.display = "none";
				}
				tablinks = document.getElementsByClassName("tablink");
				for (i = 0; i < tablinks.length; i++) {
					tablinks[i].style.backgroundColor = "";
				}
				document.getElementById(pageName).style.display = "block";
				elmnt.style.backgroundColor = color;

			}
			// Get the element with id="defaultOpen" and click on it
			document.getElementById("defaultOpen").click();
			</script>
			<hr>
			</section>

		<!--Gallery-->
			<section class="gallery" id="gallery">
				
				<div class="row">
					<div class="col-lg-12 ">
						<h2 class="gall_heading">--:Our Gallery :--</h2>
					</div>
				</div>
				<div class="row">
						<div class="col-lg-5  col-lg-offset-1">					
									<a href=""><img class="image" src="img/slide/pp.jpeg" /></a>
									<a href="" ><img class="image" src="img/slide/hh.jpeg"/></a>
						</div>
						<div class="col-lg-5 ">
									<a href="" ><img class="image1" src="img/slide/ff.jpeg"/></a>
									<a href="" ><img class="image1" src="img/slide/nn.jfif" /></a>
						</div>
						
				</div>

				<div class="row">
					<div class="col-lg-5 col-lg-offset-1" >					
							<a href=""><img class="image" src="img/slide/ff.jpeg" /></a>
							<a href=""><img class="image" src="img/slide/jj.jpeg" /></a>
							<a href=""><img class="image" src="img/slide/Dhokla.jpg"/></a>
					</div>
					<div class="col-lg-5" >
							<a href="" ><img class="image1" src="img/slide/oo.jpeg" /></a>
							<a href=""><img  class="image1" src="img/slide/hh.jpeg" /></a>
							<a href="" ><img class="image1" src="img/slide/kk.jpeg" /></a>
				
					</div>

				<div class="row">
					<div class="col-lg-5 col-lg-offset-1">
						<a href="" ><img class="image" src="img/slide/sweets.jpg"/></a>
					</div>
					<div class="col-lg-5" >
						<a href="" ><img class="image1" src="img/slide/ras.jpg" /></a>
					</div>
				</div>
					<br><hr style="width:50%;margin:auto;">	
			</section><!--Gallery-->
			
			
			
			
<!--Catering-->
	<section class="fullcatering" id="catering">
			<div class="row">
				<div class="col-lg-12 ">
					<div class="catering1">
						<h2>We are experts in</br>Luxury Weddings and Corporate Catering:</h2>
					</div>
				</div>
			</div>
			<div class="row">			
				<div class="col-lg-5 col-lg-offset-1">
					<p id="p1">
					Our menu is thoughtfully </br>
					crafted with exquisite</br>
					ingredients to include a </br>
					wide variety of Indian</br>
					food offerings.
					</p>
						
				</div>
				<div class="col-lg-5">
					<img src="img/slide/dd.jpg" height="300px" width="100%" style=" float:right;margin:auto;"/>
				</div>
			</div>	
			<div class="row">
				<div class="col-lg-5 col-lg-offset-1">
					<img src="img/slide/aa.jpg" height="300px" width="100%" style="float:right;margin:auto;"/>
				</div>
				<div class="col-lg-5">
					<p id="p2">
					Office food doesn't need</br>
					to be boring.</br> 
					Our recipes will never make</br>
					you miss home food</br>
					while you are at work.
					</p>
				</div>
			</div>
			<hr style="margin:50px 110px;">
			<div class="row">
				<div class="col-lg-5 col-lg-offset-1">	
					<p id="p3">
						All our meals provide</br>
						balanced nutrition and</br>
						contain healthy levels of</br>
						protein, carbohydrates,</br>
						fats and other nutrients.
						</p>
				</div>
				<div class="col-lg-5">
					<img src="img/slide/bb.jpg" height="300px" width="100%" style="float:right;margin:auto;"/>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-5 col-lg-offset-1">
					<img src="img/slide/cc.jpg" height="300px" width="100%" style="float:right;margin:auto;"/>
				</div>
				<div class="col-lg-5">	
					<p id="p4">
						You can expect a highly</br>
						professional and</br>
						experienced staff</br>
						matching with our</br>
						brand.
					</p>
				</div>
			</div>
	`		<div class="row">
				<div class="col-lg-12">
					<div class="catering">
						<h2>WE CATER TO :- -<h2>
						<h3>Corporate Event, Luxury Weddings, Office Party, Product Launches</h3>
							<h3>House Party, Birthday Celebration, Guests at Home</h3>
							<h3>Baby Shower, Bachelors Party, Anniversary Celebrations</h3>
							<h3>House Warming, Snack Boxes, Society Event</h3>
							<h3>Puja Celebration, Family Day, Annual Day</h3>
						</div>
				</div>
			</div><br><br><hr style="width:50%;margin:auto;">
		</div>		
	</section><!--Catering-->
	<!--Locate-->
	<section class="contactUs" id="locate" style="padding-top:80px;">
			<div class="row">
				<div class="col-lg-12">
				<h2 class="locateh2">--: Contact Us :--</h2>
				</div>
			</div>
			
			
			<div class="row">
				<div class="col-lg-6 col-lg-offset-1 contact1" >
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13716.889530397511!2d76.77389278277462!3d30.74025430615058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed0afe5003d3%3A0x8f47abe9f2044934!2sSector+17%2C+Chandigarh!5e0!3m2!1sen!2sin!4v1514715603848"
					width="100%" height="410px" frameborder="0" style="border:0" allowfullscreen>
					</iframe>
				</div>
				
				<div class="col-lg-4">
	
					<form class="form1">
						<h4 class="msg">Leave the Message</h4>
						<input type="text" name="name" placeholder="Your Name"/><br>
						<input type="text" name="contact" placeholder="Phone Number"/><br>
						<input type="text" name="email" placeholder="Email"/><br>
						<textarea type="textarea" name="msg" placeholder="Message" ></textarea></br>
						<input id="cont-btn" type="submit" value="Submit" />	
												
					</form>
				</div>
		
			</div>
	</section><!--Locate-->
	
	<!--footer-->
	<footer id="footer">
			<div class="row">
					<address>
						<div class="col-lg-4"id="contact">
							<h2>Contact :-</h2>
							<h3>017274673836  ,  9918042494</h3>
							<h3>info@thekingcaterz.in</h3>
						</div>
						<div class="col-lg-4" id="location">
							<h2>Location :-</h2>
						<h3>SCO:122, Sector 17, Near Sector 22<br>
								Chandigarh</h3>
						
						</div>
						<div class="col-lg-4" id="hour">
						<h2>Hours :-</h2>
						<h3>Mon-Sun<br>
						9:00 am - 10:00 pm</h3>
						</div>
						</address>
						<br><hr style="width:50%;margin:auto;">
						
						<div class="copyright">
							<p>Copyright © 2017 The King Cater'z ICP No.1004644</p>
						</div>
			</div>
	</footer>
	<!--footer-->
<div style="position:fixed;top:0;margin-top:65px;right:0;width:50px;">
<a href="https://www.facebook.com" target="_blank" class="fa fa-facebook"></a>
<a href="https://www.twitter.com" target="_blank" class="fa fa-twitter"></a>
<a href="https://www.google.com" target="_blank" class="fa fa-google"></a>
<a href="https://www.linkedin.com" target="_blank" class="fa fa-linkedin"></a>
<a href="https://www.rss.com" target="_blank" class="fa fa-rss"></a>
</div>




</div><!--Container-fluid-->

<?php
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$contact=$_POST['contact'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];
		
		$to="thekingcaterz@gmail.com";
		$subject="Form Submission";
		$message="Name: ".$name."\n"."Contact No. : ".$contact."\n"."E-mail: ".$email."\n\n"."Message: ".$msg;
		$header="From: ".$email;
		
		if(mail($to, $subject, $message, $header)){
			echo ("<script> alert('Sent Successfully! Thank you  "." " .$name." , We will contact you shortly!')</script>");
		}
		else
		{
			echo ("<script> alert('Something went wrong!')</script>");
		}
	}
?>
	
	
</div>

</body>
</html>