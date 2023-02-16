@extends('/layouts.checkout')
@section('content')
	<!-- HEADER -->
	<header>
		<!-- top Header -->
		<div id="top-header">
			<div class="container">
				<div class="pull-left">
					<span>Welcome to E-shop!</span>
				</div>
				<div class="pull-right">
					<ul class="header-top-links">
						<li><a href="#">Store</a></li>
						<li><a href="#">Newsletter</a></li>
						<li><a href="#">FAQ</a></li>
						<li class="dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">ENG <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="#">English (ENG)</a></li>
								<li><a href="#">Russian (Ru)</a></li>
								<li><a href="#">French (FR)</a></li>
								<li><a href="#">Spanish (Es)</a></li>
							</ul>
						</li>
						<li class="dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">USD <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="#">USD ($)</a></li>
								<li><a href="#">EUR (€)</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /top Header -->

		<!-- header -->
		<div id="header">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
						<a class="logo" href="#">
							<img src="./img/logo.png" alt="">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Search -->
					<div class="header-search">
						<form>
							<input class="input search-input" type="text" placeholder="Enter your keyword">
							<select class="input search-categories">
								<option value="0">All Categories</option>
								<option value="1">Category 01</option>
								<option value="1">Category 02</option>
							</select>
							<button class="search-btn"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- /Search -->
				</div>
				<div class="pull-right">
					<ul class="header-btns">
						<!-- Account -->
						<li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
								</div>
								<strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
							</div>
							<a href="#" class="text-uppercase">Login</a> / <a href="#" class="text-uppercase">Join</a>
							<ul class="custom-menu">
								<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
								<li><a href="#"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
								<li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
								<li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
								<li><a href="#"><i class="fa fa-unlock-alt"></i> Login</a></li>
								<li><a href="#"><i class="fa fa-user-plus"></i> Create An Account</a></li>
							</ul>
						</li>
						<!-- /Account -->

						<!-- Cart -->
						<li class="header-cart dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-shopping-cart"></i>
									<span class="qty">3</span>
								</div>
								<strong class="text-uppercase">My Cart:</strong>
								<br>
								<span>35.20$</span>
							</a>
							<div class="custom-menu">
								<div id="shopping-cart">
									<div class="shopping-cart-list">
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
									</div>
									<div class="shopping-cart-btns">
										<button class="main-btn">View Cart</button>
										<button class="primary-btn">Checkout <i class="fa fa-arrow-circle-right"></i></button>
									</div>
								</div>
							</div>
						</li>
						<!-- /Cart -->

						<!-- Mobile nav toggle-->
						<li class="nav-toggle">
							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
						</li>
						<!-- / Mobile nav toggle -->
					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">
				<!-- category nav -->
				<div class="category-nav show-on-click">
					<span class="category-header">Categories <i class="fa fa-list"></i></span>
					<ul class="category-list">
						<li class="dropdown side-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Women’s Clothing <i class="fa fa-angle-right"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
									</div>
								</div>
								<div class="row hidden-sm hidden-xs">
									<div class="col-md-12">
										<hr>
										<a class="banner banner-1" href="#">
											<img src="./img/banner05.jpg" alt="">
											<div class="banner-caption text-center">
												<h2 class="white-color">NEW COLLECTION</h2>
												<h3 class="white-color font-weak">HOT DEAL</h3>
											</div>
										</a>
									</div>
								</div>
							</div>
						</li>
						<li><a href="#">Men’s Clothing</a></li>
						<li class="dropdown side-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Phones & Accessories <i class="fa fa-angle-right"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
									</div>
									<div class="col-md-4 hidden-sm hidden-xs">
										<a class="banner banner-2" href="#">
											<img src="./img/banner04.jpg" alt="">
											<div class="banner-caption">
												<h3 class="white-color">NEW<br>COLLECTION</h3>
											</div>
										</a>
									</div>
								</div>
							</div>
						</li>
						<li><a href="#">Computer & Office</a></li>
						<li><a href="#">Consumer Electronics</a></li>
						<li class="dropdown side-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Jewelry & Watches <i class="fa fa-angle-right"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li><a href="#">Bags & Shoes</a></li>
						<li><a href="#">View All</a></li>
					</ul>
				</div>
				<!-- /category nav -->

				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						<li><a href="#">Home</a></li>
						<li><a href="#">Shop</a></li>
						<li class="dropdown mega-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Women <i class="fa fa-caret-down"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
									</div>
								</div>
								<div class="row hidden-sm hidden-xs">
									<div class="col-md-12">
										<hr>
										<a class="banner banner-1" href="#">
											<img src="./img/banner05.jpg" alt="">
											<div class="banner-caption text-center">
												<h2 class="white-color">NEW COLLECTION</h2>
												<h3 class="white-color font-weak">HOT DEAL</h3>
											</div>
										</a>
									</div>
								</div>
							</div>
						</li>
						<li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Men <i class="fa fa-caret-down"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-3">
										<div class="hidden-sm hidden-xs">
											<a class="banner banner-1" href="#">
												<img src="./img/banner06.jpg" alt="">
												<div class="banner-caption text-center">
													<h3 class="white-color text-uppercase">Women’s</h3>
												</div>
											</a>
											<hr>
										</div>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
									</div>
									<div class="col-md-3">
										<div class="hidden-sm hidden-xs">
											<a class="banner banner-1" href="#">
												<img src="./img/banner07.jpg" alt="">
												<div class="banner-caption text-center">
													<h3 class="white-color text-uppercase">Men’s</h3>
												</div>
											</a>
										</div>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
									</div>
									<div class="col-md-3">
										<div class="hidden-sm hidden-xs">
											<a class="banner banner-1" href="#">
												<img src="./img/banner08.jpg" alt="">
												<div class="banner-caption text-center">
													<h3 class="white-color text-uppercase">Accessories</h3>
												</div>
											</a>
										</div>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
									</div>
									<div class="col-md-3">
										<div class="hidden-sm hidden-xs">
											<a class="banner banner-1" href="#">
												<img src="./img/banner09.jpg" alt="">
												<div class="banner-caption text-center">
													<h3 class="white-color text-uppercase">Bags</h3>
												</div>
											</a>
										</div>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li><a href="#">Sales</a></li>
						<li class="dropdown default-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Pages <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="index.html">Home</a></li>
								<li><a href="products.html">Products</a></li>
								<li><a href="product-page.html">Product Details</a></li>
								<li><a href="checkout.html">Checkout</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- menu nav -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->

	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Checkout</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<form id="checkout-form" class="clearfix">
					<div class="col-md-6">
						<div class="billing-details">
							<p>Already a customer ? <a href="#">Login</a></p>
							<div class="section-title">
								<h3 class="title">Billing Details</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first-name" placeholder="First Name">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" placeholder="Last Name">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Address">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="City">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" placeholder="Country">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip-code" placeholder="ZIP Code">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Telephone">
							</div>
							<div class="form-group">
								<div class="input-checkbox">
									<input type="checkbox" id="register">
									<label class="font-weak" for="register">Create Account?</label>
									<div class="caption">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
											<p>
												<input class="input" type="password" name="password" placeholder="Enter Your Password">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="shiping-methods">
							<div class="section-title">
								<h4 class="title">Shiping Methods</h4>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="shipping" id="shipping-1" checked>
								<label for="shipping-1">Free Shiping -  $0.00</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										<p>
								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="shipping" id="shipping-2">
								<label for="shipping-2">Standard - $4.00</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										<p>
								</div>
							</div>
						</div>

						<div class="payments-methods">
							<div class="section-title">
								<h4 class="title">Payments Methods</h4>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-1" checked>
								<label for="payments-1">Direct Bank Transfer</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										<p>
								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-2">
								<label for="payments-2">Cheque Payment</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										<p>
								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-3">
								<label for="payments-3">Paypal System</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										<p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="order-summary clearfix">
							<div class="section-title">
								<h3 class="title">Order Review</h3>
							</div>
							<table class="shopping-cart-table table">
								<thead>
									<tr>
										<th>Product</th>
										<th></th>
										<th class="text-center">Price</th>
										<th class="text-center">Quantity</th>
										<th class="text-center">Total</th>
										<th class="text-right"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="thumb"><img src="./img/thumb-product01.jpg" alt=""></td>
										<td class="details">
											<a href="#">Product Name Goes Here</a>
											<ul>
												<li><span>Size: XL</span></li>
												<li><span>Color: Camelot</span></li>
											</ul>
										</td>
										<td class="price text-center"><strong>$32.50</strong><br><del class="font-weak"><small>$40.00</small></del></td>
										<td class="qty text-center"><input class="input" type="number" value="1"></td>
										<td class="total text-center"><strong class="primary-color">$32.50</strong></td>
										<td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-close"></i></button></td>
									</tr>
									<tr>
										<td class="thumb"><img src="./img/thumb-product01.jpg" alt=""></td>
										<td class="details">
											<a href="#">Product Name Goes Here</a>
											<ul>
												<li><span>Size: XL</span></li>
												<li><span>Color: Camelot</span></li>
											</ul>
										</td>
										<td class="price text-center"><strong>$32.50</strong></td>
										<td class="qty text-center"><input class="input" type="number" value="1"></td>
										<td class="total text-center"><strong class="primary-color">$32.50</strong></td>
										<td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-close"></i></button></td>
									</tr>
									<tr>
										<td class="thumb"><img src="./img/thumb-product01.jpg" alt=""></td>
										<td class="details">
											<a href="#">Product Name Goes Here</a>
											<ul>
												<li><span>Size: XL</span></li>
												<li><span>Color: Camelot</span></li>
											</ul>
										</td>
										<td class="price text-center"><strong>$32.50</strong></td>
										<td class="qty text-center"><input class="input" type="number" value="1"></td>
										<td class="total text-center"><strong class="primary-color">$32.50</strong></td>
										<td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-close"></i></button></td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SUBTOTAL</th>
										<th colspan="2" class="sub-total">$97.50</th>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SHIPING</th>
										<td colspan="2">Free Shipping</td>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>TOTAL</th>
										<th colspan="2" class="total">$97.50</th>
									</tr>
								</tfoot>
							</table>
							<div class="pull-right">
								<button class="primary-btn">Place Order</button>
							</div>
						</div>

					</div>
				</form>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

@endsection