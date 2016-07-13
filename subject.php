<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from minetheme.com/Endless1.5.1/table.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jan 2016 08:51:48 GMT -->
<head>
    <meta charset="utf-8">
    <title>Endless Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Font Awesome-->
	<link href="css/font-awesome.min.css" rel="stylesheet">

	<!-- Pace -->
	<link href="css/pace.css" rel="stylesheet">
	
	<!-- Datatable -->
	<link href="css/jquery.dataTables_themeroller.css" rel="stylesheet">
	
	<!-- Endless -->
	<link href="css/endless.min.css" rel="stylesheet">
	<link href="css/endless-skin.css" rel="stylesheet">
	
  </head>

  <body class="overflow-hidden">
	<!-- Overlay Div -->
	<div id="overlay" class="transparent"></div>

	<a href="#" id="theme-setting-icon"><i class="fa fa-cog fa-lg"></i></a>
	<div id="theme-setting">
		<div class="title">
			<strong class="no-margin">Skin Color</strong>
		</div>
		<div class="theme-box">
			<a class="theme-color" style="background:#323447" id="default"></a>
			<a class="theme-color" style="background:#efefef" id="skin-1"></a>
			<a class="theme-color" style="background:#a93922" id="skin-2"></a>
			<a class="theme-color" style="background:#3e6b96" id="skin-3"></a>
			<a class="theme-color" style="background:#635247" id="skin-4"></a>
			<a class="theme-color" style="background:#3a3a3a" id="skin-5"></a>
			<a class="theme-color" style="background:#495B6C" id="skin-6"></a>
		</div>
		<div class="title">
			<strong class="no-margin">Sidebar Menu</strong>
		</div>
		<div class="theme-box">
			<label class="label-checkbox">
				<input type="checkbox" checked id="fixedSidebar">
				<span class="custom-checkbox"></span>
				Fixed Sidebar
			</label>
		</div>
	</div><!-- /theme-setting -->
	
	<div id="wrapper" class="preload">
		<div id="top-nav" class="skin-6 fixed">
			<div class="brand">
				<span>Endless</span>
				<span class="text-toggle"> Admin</span>
			</div><!-- /brand -->
			<button type="button" class="navbar-toggle pull-left" id="sidebarToggle">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<button type="button" class="navbar-toggle pull-left hide-menu" id="menuToggle">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<ul class="nav-notification clearfix">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-envelope fa-lg"></i>
						<span class="notification-label bounceIn animation-delay4">7</span>
					</a>
					<ul class="dropdown-menu message dropdown-1">
						<li><a>You have 4 new unread messages</a></li>					  
						<li>
							<a class="clearfix" href="#">
								<img src="img/user.jpg" alt="User Avatar">
								<div class="detail">
									<strong>John Doe</strong>
									<p class="no-margin">
										Lorem ipsum dolor sit amet...
									</p>
									<small class="text-muted"><i class="fa fa-check text-success"></i> 27m ago</small>
								</div>
							</a>	
						</li>
						<li>
							<a class="clearfix" href="#">
								<img src="img/user2.jpg" alt="User Avatar">
								<div class="detail">
									<strong>Jane Doe</strong>
									<p class="no-margin">
										Lorem ipsum dolor sit amet...
									</p>
									<small class="text-muted"><i class="fa fa-check text-success"></i> 5hr ago</small>
								</div>
							</a>	
						</li>
						<li>
							<a class="clearfix" href="#">
								<img src="img/user.jpg" alt="User Avatar">
								<div class="detail">
									<strong>Bill Doe</strong>
									<p class="no-margin">
										Lorem ipsum dolor sit amet...
									</p>
									<small class="text-muted"><i class="fa fa-reply"></i> Yesterday</small>
								</div>
							</a>	
						</li>
						<li>
							<a class="clearfix" href="#">
								<img src="img/user2.jpg" alt="User Avatar">
								<div class="detail">
									<strong>Baby Doe</strong>
									<p class="no-margin">
										Lorem ipsum dolor sit amet...
									</p>
									<small class="text-muted"><i class="fa fa-reply"></i> 9 Feb 2013</small>
								</div>
							</a>	
						</li>
						<li><a href="#">View all messages</a></li>					  
					</ul>
				</li>
				<li class="dropdown hidden-xs">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-tasks fa-lg"></i>
						<span class="notification-label bounceIn animation-delay5">4</span>
					</a>
					<ul class="dropdown-menu task dropdown-2">
						<li><a href="#">You have 4 tasks to complete</a></li>					  
						<li>
							<a href="#">
								<div class="clearfix">
									<span class="pull-left">Bug Fixes</span>
									<small class="pull-right text-muted">78%</small>
								</div>
								<div class="progress">
									<div class="progress-bar" style="width:78%"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="clearfix">
									<span class="pull-left">Software Updating</span>
									<small class="pull-right text-muted">54%</small>
								</div>
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-success" style="width:54%"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="clearfix">
									<span class="pull-left">Database Migration</span>
									<small class="pull-right text-muted">23%</small>
								</div>
								<div class="progress">
									<div class="progress-bar progress-bar-warning" style="width:23%"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="clearfix">
									<span class="pull-left">Unit Testing</span>
									<small class="pull-right text-muted">92%</small>
								</div>
								<div class="progress progress-striped active">
									<div class="progress-bar progress-bar-danger " style="width:92%"></div>
								</div>
							</a>
						</li>
						<li><a href="#">View all tasks</a></li>					  
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-bell fa-lg"></i>
						<span class="notification-label bounceIn animation-delay6">5</span>
					</a>
					<ul class="dropdown-menu notification dropdown-3">
						<li><a href="#">You have 5 new notifications</a></li>					  
						<li>
							<a href="#">
								<span class="notification-icon bg-warning">
									<i class="fa fa-warning"></i>
								</span>
								<span class="m-left-xs">Server #2 not responding.</span>
								<span class="time text-muted">Just now</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="notification-icon bg-success">
									<i class="fa fa-plus"></i>
								</span>
								<span class="m-left-xs">New user registration.</span>
								<span class="time text-muted">2m ago</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="notification-icon bg-danger">
									<i class="fa fa-bolt"></i>
								</span>
								<span class="m-left-xs">Application error.</span>
								<span class="time text-muted">5m ago</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="notification-icon bg-success">
									<i class="fa fa-usd"></i>
								</span>
								<span class="m-left-xs">2 items sold.</span>
								<span class="time text-muted">1hr ago</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="notification-icon bg-success">
									<i class="fa fa-plus"></i>
								</span>
								<span class="m-left-xs">New user registration.</span>
								<span class="time text-muted">1hr ago</span>
							</a>
						</li>
						<li><a href="#">View all notifications</a></li>					  
					</ul>
				</li>
				<li class="profile dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<strong>John Doe</strong>
						<span><i class="fa fa-chevron-down"></i></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a class="clearfix" href="#">
								<img src="img/user.jpg" alt="User Avatar">
								<div class="detail">
									<strong>John Doe</strong>
									<p class="grey">John_Doe@email.com</p> 
								</div>
							</a>
						</li>
						<li><a tabindex="-1" href="profile.html" class="main-link"><i class="fa fa-edit fa-lg"></i> Edit profile</a></li>
						<li><a tabindex="-1" href="gallery.html" class="main-link"><i class="fa fa-picture-o fa-lg"></i> Photo Gallery</a></li>
						<li><a tabindex="-1" href="#" class="theme-setting"><i class="fa fa-cog fa-lg"></i> Setting</a></li>
						<li class="divider"></li>
						<li><a tabindex="-1" class="main-link logoutConfirm_open" href="#logoutConfirm"><i class="fa fa-lock fa-lg"></i> Log out</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /top-nav-->
		
		<aside class="fixed skin-6">			
			<div class="sidebar-inner scrollable-sidebar">
				<div class="size-toggle">
					<a class="btn btn-sm" id="sizeToggle">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="btn btn-sm pull-right logoutConfirm_open"  href="#logoutConfirm">
						<i class="fa fa-power-off"></i>
					</a>
				</div><!-- /size-toggle -->	
				<div class="user-block clearfix">
					<img src="img/user.jpg" alt="User Avatar">
					<div class="detail">
						<strong>John Doe</strong><span class="badge badge-danger bounceIn animation-delay4 m-left-xs">4</span>
						<ul class="list-inline">
							<li><a href="profile.html">Profile</a></li>
							<li><a href="inbox.html" class="no-margin">Inbox</a></li>
						</ul>
					</div>
				</div><!-- /user-block -->
				<div class="search-block">
					<div class="input-group">
						<input type="text" class="form-control input-sm" placeholder="search here...">
						<span class="input-group-btn">
							<button class="btn btn-default btn-sm" type="button"><i class="fa fa-search"></i></button>
						</span>
					</div><!-- /input-group -->
				</div><!-- /search-block -->
				<div class="main-menu">
					<ul>
						<li>
							<a href="index.html">
								<span class="menu-icon">
									<i class="fa fa-desktop fa-lg"></i> 
								</span>
								<span class="text">
									Dashboard
								</span>
								<span class="menu-hover"></span>
							</a>
						</li>
						<li class="openable">
							<a href="#">
								<span class="menu-icon">
									<i class="fa fa-file-text fa-lg"></i> 
								</span>
								<span class="text">
									Page
								</span>
								<span class="menu-hover"></span>
							</a>
							<ul class="submenu">
								<li><a href="login.html"><span class="submenu-label">Sign in</span></a></li>
								<li><a href="register.html"><span class="submenu-label">Sign up</span></a></li>
								<li><a href="lock_screen.html"><span class="submenu-label">Lock Screen</span></a></li>
								<li><a href="profile.html"><span class="submenu-label">Profile</span></a></li>
								<li><a href="blog.html"><span class="submenu-label">Blog</span></a></li>
								<li><a href="single_post.html"><span class="submenu-label">Single Post</span></a></li>
								<li><a href="landing.html"><span class="submenu-label">Landing</span></a></li>
								<li><a href="search_result.html"><span class="submenu-label">Search Result</span></a></li>
								<li><a href="chat.html"><span class="submenu-label">Chat Room</span></a></li>
								<li><a href="movie.html"><span class="submenu-label">Movie Gallery</span></a></li>
								<li><a href="pricing.html"><span class="submenu-label">Pricing</span></a></li>
								<li><a href="invoice.html"><span class="submenu-label">Invoice</span></a></li>
								<li><a href="faq.html"><span class="submenu-label">FAQ</span></a></li>
								<li><a href="contact.html"><span class="submenu-label">Contact</span></a></li>
								<li><a href="error404.html"><span class="submenu-label">Error404</span></a></li>
								<li><a href="error500.html"><span class="submenu-label">Error500</span></a></li>
								<li><a href="blank.html"><span class="submenu-label">Blank</span></a></li>
							</ul>
						</li>
						<li class="active openable open">
							<a href="#">
								<span class="menu-icon">
									<i class="fa fa-tag fa-lg"></i> 
								</span>
								<span class="text">
									Component
								</span>
								<span class="badge badge-success bounceIn animation-delay5">9</span>
								<span class="menu-hover"></span>
							</a>
							<ul class="submenu">
								<li><a href="ui_element.html"><span class="submenu-label">UI Features</span></a></li>
								<li><a href="button.html"><span class="submenu-label">Button & Icons</span></a></li>
								<li><a href="tab.html"><span class="submenu-label">Tab</span></a></li>
								<li><a href="nestable_list.html"><span class="submenu-label">Nestable List</span></a></li>
								<li><a href="calendar.html"><span class="submenu-label">Calendar</span></a></li>
								<li class="active"><a href="table.html"><span class="submenu-label">Table</span></a></li>
								<li><a href="widget.html"><span class="submenu-label">Widget</span></a></li>
								<li><a href="form_element.html"><span class="submenu-label">Form Element</span></a></li>
								<li><a href="form_wizard.html"><span class="submenu-label">Form Wizard</span></a></li>
							</ul>
						</li>
						<li>
							<a href="timeline.html">
								<span class="menu-icon">
									<i class="fa fa-clock-o fa-lg"></i> 
								</span>
								<span class="text">
									Timeline
								</span>
								<span class="menu-hover"></span>
							</a>
						</li>
						<li>
							<a href="gallery.html">
								<span class="menu-icon">
									<i class="fa fa-picture-o fa-lg"></i> 
								</span>
								<span class="text">
									Gallery
								</span>
								<span class="menu-hover"></span>
							</a>
						</li>
						<li>
							<a href="inbox.html">
								<span class="menu-icon">
									<i class="fa fa-envelope fa-lg"></i> 
								</span>
								<span class="text">
									Inbox
								</span>
								<span class="badge badge-danger bounceIn animation-delay6">4</span>
								<span class="menu-hover"></span>
							</a>
						</li>
						<li>
							<a href="email_selection.html">
								<span class="menu-icon">
									<i class="fa fa-tasks fa-lg"></i> 
								</span>
								<span class="text">
									Email Template
								</span>
								<small class="badge badge-warning bounceIn animation-delay7">New</small>
								<span class="menu-hover"></span>
							</a>
						</li>
						<li class="openable">
							<a href="#">
								<span class="menu-icon">
									<i class="fa fa-magic fa-lg"></i> 
								</span>
								<span class="text">
									Multi-Level menu
								</span>
								<span class="menu-hover"></span>
							</a>
							<ul class="submenu">
								<li class="openable">
									<a href="#">
										<span class="submenu-label">menu 2.1</span>
										<span class="badge badge-danger bounceIn animation-delay1 pull-right">3</span>
									</a>
									<ul class="submenu third-level">
										<li><a href="#"><span class="submenu-label">menu 3.1</span></a></li>
										<li><a href="#"><span class="submenu-label">menu 3.2</span></a></li>
										<li class="openable">
											<a href="#">
												<span class="submenu-label">menu 3.3</span>
												<span class="badge badge-danger bounceIn animation-delay1 pull-right">2</span>
											</a>
											<ul class="submenu fourth-level">
												<li><a href="#"><span class="submenu-label">menu 4.1</span></a></li>
												<li><a href="#"><span class="submenu-label">menu 4.2</span></a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="openable">
									<a href="#">
										<span class="submenu-label">menu 2.2</span>
										<span class="badge badge-success bounceIn animation-delay2 pull-right">3</span>
									</a>
									<ul class="submenu third-level">
										<li class="openable">
											<a href="#">
												<span class="submenu-label">menu 3.1</span>
												<span class="badge badge-success bounceIn animation-delay1 pull-right">2</span>
											</a>
											<ul class="submenu fourth-level">
												<li><a href="#"><span class="submenu-label">menu 4.1</span></a></li>
												<li><a href="#"><span class="submenu-label">menu 4.2</span></a></li>
											</ul>
										</li>
										<li><a href="#"><span class="submenu-label">menu 3.2</span></a></li>
										<li><a href="#"><span class="submenu-label">menu 3.3</span></a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
					
					<div class="alert alert-info">
						Welcome to Endless Admin. Do not forget to check all my pages. 
					</div>
				</div><!-- /main-menu -->
			</div><!-- /sidebar-inner scrollable-sidebar -->
		</aside>

		<div id="main-container">
			<div class="padding-md">
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								Simple Table
							</div>
							<div class="panel-body">
								Some default panel content here.
							</div>
							<table class="table table-hover table-striped">
								<thead>
									<tr>
										<th>Task</th>
										<th>Progress</th>
										<th></th>
										<th>Time</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Bug Fixes</td>
										<td>
											<div class="progress progress-striped active" style="height:8px; margin:5px 0 0 0;">
												<div class="progress-bar" style="width: 45%">
													<span class="sr-only">45% Complete</span>
												</div>
											</div>
										</td>
										<td>45%</td>
										<td><span class="badge badge-warning">2hr</span></td>
									</tr>
									<tr>
										<td>Mobile Development</td>
										<td>
											<div class="progress progress-striped active" style="height:8px; margin:5px 0 0 0;">
												<div class="progress-bar progress-bar-success" style="width: 61%">
													<span class="sr-only">61% Complete</span>
												</div>
											</div>
										</td>
										<td>61%</td>
										<td><span class="badge badge-warning">1hr</span></td>
									</tr>
									<tr>
										<td>Unit Tesing</td>
										<td>
											<div class="progress progress-striped active" style="height:8px; margin:5px 0 0 0;">
												<div class="progress-bar progress-bar-danger" style="width: 97%">
													<span class="sr-only">97% Complete</span>
												</div>
											</div>
										</td>
										<td>97%</td>
										<td><span class="badge badge-warning">5m</span></td>
									</tr>
									<tr>
										<td>New Frontend Layout</td>
										<td>
											<div class="progress progress-striped active" style="height:8px; margin:5px 0 0 0;">
												<div class="progress-bar progress-bar-warning" style="width: 18%">
													<span class="sr-only">18% Complete</span>
												</div>
											</div>
										</td>
										<td>18%</td>
										<td><span class="badge badge-warning">12hr</span></td>
									</tr>
								</tbody>
							</table>
						</div><!-- /panel -->
					</div><!-- /.col -->
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								Bordered Table
							</div>
							<div class="panel-body">
								<span>Total User</span><span class="badge m-left-xs">365</span>
								<span>Approved</span><span class="badge badge-success m-left-xs">321</span>
								<span>Pending</span><span class="badge badge-warning m-left-xs">37</span>
								<span>Banned</span><span class="badge badge-danger m-left-xs">7</span>
							</div>
							<table class="table table-bordered table-condensed table-hover table-striped">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Date</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											3242
										</td>
										<td>
											John Doe
										</td>
										<td>
											Oct 08,2013
										</td>
										<td>
											<span class="label label-warning">Pending</span>
										</td>
									</tr>
									<tr>
										<td>
											3243
										</td>
										<td>
											Jahn Doe
										</td>
										<td>
											Oct 07,2013
										</td>
										<td>
											<span class="label label-warning">Pending</span>
										</td>
									</tr>
									<tr>
										<td>
											3244
										</td>
										<td>
											Bill Doe
										</td>
										<td>
											29 Sep,2013
										</td>
										<td>
											<span class="label label-success">Approved</span>
										</td>
									</tr>
									<tr>
										<td>
											3245
										</td>
										<td>
											Kate Doe
										</td>
										<td>
											19 July,2013
										</td>
										<td>
											<span class="label label-success">Approved</span>
										</td>
									</tr>
									<tr>
										<td>
											3246
										</td>
										<td>
											Jame Doe
										</td>
										<td>
											18 July,2013
										</td>
										<td>
											<span class="label label-danger">Banned</span>
										</td>
									</tr>
								</tbody>
							</table>
						</div><!-- /panel -->
					</div><!-- /.col -->
				</div><!-- /.row -->
				<div class="panel panel-default table-responsive">
					<div class="panel-heading">
						Responsive Table
						<span class="label label-info pull-right">790 Items</span>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<select class="input-sm form-control inline" style="width:130px;"> 
									<option value="0">All</option> 
									<option value="1">Men</option> 
									<option value="2">Women</option> 
									<option value="3">Accessary</option> 
								</select>
								<a class="btn btn-default btn-sm">Apply</a>
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
					<table class="table table-striped" id="responsiveTable">
						<thead>
							<tr>
								<th>
									<label class="label-checkbox">
										<input type="checkbox" id="chk-all">
										<span class="custom-checkbox"></span>
									</label>
								</th>
								<th>Product</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Sales</th>
								<th>Date</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<label class="label-checkbox">
										<input type="checkbox" class="chk-row">
										<span class="custom-checkbox"></span>
									</label>
								</td>
								<td>Leather Bag</td>
								<td>$89</td>
								<td>30</td>
								<td>187</td>
								<td>Oct 08,2013</td>
								<td><span class="label label-success">In Stock</span></td>
							</tr>
							<tr>
								<td>
									<label class="label-checkbox">
										<input type="checkbox" class="chk-row">
										<span class="custom-checkbox"></span>
									</label>
								</td>
								<td>Brown Sunglasses <span class="label label-success m-left-xs">Best Seller</span> </td>
								<td>$120</td>
								<td>0</td>
								<td>861</td>
								<td>Oct 07,2013</td>
								<td><span class="label label-danger">Sold Out</span></td>
							</tr>
							<tr>
								<td>
									<label class="label-checkbox">
										<input type="checkbox" class="chk-row">
										<span class="custom-checkbox"></span>
									</label>
								</td>
								<td>Casual Boots</td>
								<td>$99</td>
								<td>100</td>
								<td>12</td>
								<td>Oct 06,2013</td>
								<td><span class="label label-success">In Stock</span></td>
							</tr>
							<tr>
								<td>
									<label class="label-checkbox">
										<input type="checkbox" class="chk-row">
										<span class="custom-checkbox"></span>
									</label>
								</td>
								<td>Lambskin Sport Coat</td>
								<td>$4000</td>
								<td>7</td>
								<td>41</td>
								<td>Oct 06,2013</td>
								<td><span class="label label-success">In Stock</span></td>
							</tr>
							<tr>
								<td>
									<label class="label-checkbox">
										<input type="checkbox" class="chk-row">
										<span class="custom-checkbox"></span>
									</label>
								</td>
								<td>Summer Dress</td>
								<td>$310</td>
								<td>25</td>
								<td>39</td>
								<td>Oct 05,2013</td>
								<td><span class="label label-success">In Stock</span></td>
							</tr>
						</tbody>
					</table>
					<div class="panel-footer clearfix">
						<ul class="pagination pagination-xs m-top-none pull-right">
							<li class="disabled"><a href="#">Previous</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div><!-- /panel -->
				<div class="panel panel-default table-responsive">
					<div class="panel-heading">
						Data Table
						<span class="label label-info pull-right">790 Items</span>
					</div>
					<div class="padding-md clearfix">
						<table class="table table-striped" id="dataTable">
							<thead>
								<tr>
									<th>No</th>
									<th>Product</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Sales</th>
									<th>Date</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>#1001</td>
									<td>Leather Bag</td>
									<td>$89</td>
									<td>30</td>
									<td>187</td>
									<td>Oct 08,2013</td>
									<td><span class="label label-success">In Stock</span></td>
								</tr>
								<tr>
									<td>#1002</td>
									<td>Brown Sunglasses <span class="label label-success m-left-xs">Best Seller</span> </td>
									<td>$120</td>
									<td>0</td>
									<td>861</td>
									<td>Oct 07,2013</td>
									<td><span class="label label-danger">Sold Out</span></td>
								</tr>
								<tr>
									<td>#1003</td>
									<td>Casual Boots</td>
									<td>$99</td>
									<td>100</td>
									<td>12</td>
									<td>Oct 06,2013</td>
									<td><span class="label label-success">In Stock</span></td>
								</tr>
								<tr>
									<td>#1004</td>
									<td>Lambskin Sport Coat</td>
									<td>$4000</td>
									<td>7</td>
									<td>41</td>
									<td>Oct 06,2013</td>
									<td><span class="label label-success">In Stock</span></td>
								</tr>
								<tr>
									<td>#1005</td>
									<td>Summer Dress</td>
									<td>$310</td>
									<td>25</td>
									<td>39</td>
									<td>Oct 05,2013</td>
									<td><span class="label label-success">In Stock</span></td>
								</tr>
								<tr>
									<td>#1006</td>
									<td>Duffle Coat</td>
									<td>$80</td>
									<td>0</td>
									<td>20</td>
									<td>Sep 30,2013</td>
									<td><span class="label label-danger">Sold out</span></td>
								</tr>
								<tr>
									<td>#1007</td>
									<td>Universal Camera Case</td>
									<td>$35</td>
									<td>30</td>
									<td>3</td>
									<td>Sep 29,2013</td>
									<td><span class="label label-success">In Stock</span></td>
								</tr>
								<tr>
									<td>#1008</td>
									<td>Leopard Rose Dress</td>
									<td>$1500</td>
									<td>10</td>
									<td>1</td>
									<td>Sep 27,2013</td>
									<td><span class="label label-success">In Stock</span></td>
								</tr>
								<tr>
									<td>#1009</td>
									<td>Casual stripe</td>
									<td>$50</td>
									<td>30</td>
									<td>25</td>
									<td>Sep 27,2013</td>
									<td><span class="label label-success">Sold out</span></td>
								</tr>
								<tr>
									<td>#1010</td>
									<td>Italian shirt</td>
									<td>$70</td>
									<td>40</td>
									<td>4</td>
									<td>Sep 27,2013</td>
									<td><span class="label label-info">Promotion</span></td>
								</tr>
								<tr>
									<td>#1011</td>
									<td>Iphone 5</td>
									<td>$400</td>
									<td>300</td>
									<td>152</td>
									<td>Sep 27,2013</td>
									<td><span class="label label-danger">In stock</span></td>
								</tr>
								<tr>
									<td>#1012</td>
									<td>Ipad</td>
									<td>$350</td>
									<td>46</td>
									<td>103</td>
									<td>Sep 25,2013</td>
									<td><span class="label label-success">In Stock</span></td>
								</tr>
							</tbody>
						</table>
					</div><!-- /.padding-md -->
				</div><!-- /panel -->
			</div><!-- /.padding-md -->
		</div><!-- /main-container -->
	</div><!-- /wrapper -->

	<a href="#" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>
	
	<!-- Logout confirmation -->
	<div class="custom-popup width-100" id="logoutConfirm">
		<div class="padding-md">
			<h4 class="m-top-none"> Do you want to logout?</h4>
		</div>

		<div class="text-center">
			<a class="btn btn-success m-right-sm" href="login.html">Logout</a>
			<a class="btn btn-danger logoutConfirm_close">Cancel</a>
		</div>
	</div>
	
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
	<!-- Jquery -->
	<script src="js/jquery-1.10.2.min.js"></script>
	
	<!-- Bootstrap -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
 
	<!-- Datatable -->
	<script src='js/jquery.dataTables.min.js'></script>	
	
	<!-- Modernizr -->
	<script src='js/modernizr.min.js'></script>
	
	<!-- Pace -->
	<script src='js/pace.min.js'></script>
	
	<!-- Popup Overlay -->
	<script src='js/jquery.popupoverlay.min.js'></script>
	
	<!-- Slimscroll -->
	<script src='js/jquery.slimscroll.min.js'></script>
	
	<!-- Cookie -->
	<script src='js/jquery.cookie.min.js'></script>

	<!-- Endless -->
	<script src="js/endless/endless.js"></script>
	
	<script>
		$(function	()	{
			$('#dataTable').dataTable( {
				"bJQueryUI": true,
				"sPaginationType": "full_numbers"
			});
			
			$('#chk-all').click(function()	{
				if($(this).is(':checked'))	{
					$('#responsiveTable').find('.chk-row').each(function()	{
						$(this).prop('checked', true);
						$(this).parent().parent().parent().addClass('selected');
					});
				}
				else	{
					$('#responsiveTable').find('.chk-row').each(function()	{
						$(this).prop('checked' , false);
						$(this).parent().parent().parent().removeClass('selected');
					});
				}
			});
		});
	</script>
	
  </body>
</html>
