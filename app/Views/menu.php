			<ul class="metismenu" id="menu">
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-list-ul'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
					<ul>
						<li> <a href=<?= base_url('/home/dashboard')?>><i class="bx bx-right-arrow-alt"></i>dashboard</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-user-circle'></i>
						</div>
						<div class="menu-title">User</div>
					</a>
					<ul>
						<li> <a href=<?= base_url('/home/user')?>><i class="bx bx-right-arrow-alt"></i>user</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-user"></i>
						</div>
						<div class="menu-title">Pengguna</div>
					</a>
					<ul>
					<li> <a href=<?= base_url('/home/pengguna')?>><i class="bx bx-right-arrow-alt"></i>pengguna</a>
					</ul>
				</li>

				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-smile"></i>
						</div>
						<div class="menu-title">Anak</div>
					</a>
					<ul>
					<li> <a href=<?= base_url('/home/anak')?>><i class="bx bx-right-arrow-alt"></i>anak</a>
					</ul>
				</li>

				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-wallet"></i>
						</div>
						<div class="menu-title">Pembayaran</div>
					</a>
					<ul>
					<li> <a href=<?= base_url('/home/pembayaran')?>><i class="bx bx-right-arrow-alt"></i>pembayaran</a>
					</ul>
				</li>

				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-file"></i>
						</div>
						<div class="menu-title">Laporan</div>
					</a>
					<ul>
					<li> <a href=<?= base_url('/home/laporan_pembayaran')?>><i class="bx bx-right-arrow-alt"></i>laporan pembayaran</a>
					</ul>
				</li>
				
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->




		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center bg-dark shadow-none border-light-2 border-bottom">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu text-white me-3"><i class='bx bx-menu'></i>
					</div>
					<div class="top-menu-left d-none d-lg-block">
				 	 <ul class="nav">
						<!-- <li class="nav-item">
						  <a class="nav-link text-white" href="app-emailbox.html"><i class='bx bx-envelope'></i></a>
						</li>
						<li class="nav-item">
						  <a class="nav-link text-white" href="app-chat-box.html"><i class='bx bx-message'></i></a>
						</li>
						<li class="nav-item">
						  <a class="nav-link text-white" href="app-fullcalender.html"><i class='bx bx-calendar'></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="app-to-do.html"><i class='bx bx-check-square'></i></a>
						</li> -->
					</ul>
				   </div>
					<!-- <div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<form>
							  <input type="text" class="form-control search-control" autofocus placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
							   <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
						    </form>
						</div>
					</div> -->
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">
							<!-- <li class="nav-item mobile-search-icon">
								<a class="nav-link text-white" href="javascript:;">	<i class='bx bx-search'></i>
								</a>
							</li> -->
							<!-- <li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">	<i class='bx bx-category'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<div class="row row-cols-3 g-3 p-3">
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-cosmic text-white"><i class='bx bx-group'></i>
											</div>
											<div class="app-title">Teams</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-burning text-white"><i class='bx bx-atom'></i>
											</div>
											<div class="app-title">Projects</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-lush text-white"><i class='bx bx-shield'></i>
											</div>
											<div class="app-title">Tasks</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-kyoto text-dark"><i class='bx bx-notification'></i>
											</div>
											<div class="app-title">Feeds</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-blues text-dark"><i class='bx bx-file'></i>
											</div>
											<div class="app-title">Files</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-moonlit text-white"><i class='bx bx-filter-alt'></i>
											</div>
											<div class="app-title">Alerts</div>
										</div>
									</div>
								</div>
							</li> -->
							<!-- <li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">7</span>
									<i class='bx bx-bell'></i>
								</a> -->
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<!-- <p class="msg-header-title">Notifications</p>
											<p class="msg-header-clear ms-auto">Marks all as read</p> -->
										</div>
									</a>
									<div class="header-notifications-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
												ago</span></h6>
													<p class="msg-info">5 new user registered</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-danger text-danger"><i class="bx bx-cart-alt"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
												ago</span></h6>
													<p class="msg-info">You have recived new orders</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success"><i class="bx bx-file"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">24 PDF File<span class="msg-time float-end">19 min
												ago</span></h6>
													<p class="msg-info">The pdf files generated</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-warning text-warning"><i class="bx bx-send"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Time Response <span class="msg-time float-end">28 min
												ago</span></h6>
													<p class="msg-info">5.1 min avarage time response</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-info text-info"><i class="bx bx-home-circle"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Product Approved <span
												class="msg-time float-end">2 hrs ago</span></h6>
													<p class="msg-info">Your new product has approved</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-danger text-danger"><i class="bx bx-message-detail"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Comments <span class="msg-time float-end">4 hrs
												ago</span></h6>
													<p class="msg-info">New customer comments recived</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
												ago</span></h6>
													<p class="msg-info">Successfully shipped your item</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-primary text-primary"><i class='bx bx-user-pin'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
												ago</span></h6>
													<p class="msg-info">24 new authors joined last week</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-warning text-warning"><i class='bx bx-door-open'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2 weeks
												ago</span></h6>
													<p class="msg-info">45% less alerts last 4 weeks</p>
												</div>
											</div>
										</a>
									</div>
									<!-- <a href="javascript:;">
										<div class="text-center msg-footer">View All Notifications</div>
									</a> -->
								</div>
							</li>
						<!-- 	<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
									<i class='bx bx-comment'></i>
								</a> -->
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Messages</p>
											<p class="msg-header-clear ms-auto">Marks all as read</p>
										</div>
									</a>
									<div class="header-message-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
												ago</span></h6>
													<p class="msg-info">The standard chunk of lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
												sec ago</span></h6>
													<p class="msg-info">Many desktop publishing packages</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Oscar Garner <span class="msg-time float-end">8 min
												ago</span></h6>
													<p class="msg-info">Various versions have evolved over</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
												min ago</span></h6>
													<p class="msg-info">Making this the first true generator</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Amelia Doe <span class="msg-time float-end">22 min
												ago</span></h6>
													<p class="msg-info">Duis aute irure dolor in reprehenderit</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Cristina Jhons <span class="msg-time float-end">2 hrs
												ago</span></h6>
													<p class="msg-info">The passage is attributed to an unknown</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">James Caviness <span class="msg-time float-end">4 hrs
												ago</span></h6>
													<p class="msg-info">The point of using Lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs
												ago</span></h6>
													<p class="msg-info">It was popularised in the 1960s</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">David Buckley <span class="msg-time float-end">2 hrs
												ago</span></h6>
													<p class="msg-info">Various versions have evolved over</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Thomas Wheeler <span class="msg-time float-end">2 days
												ago</span></h6>
													<p class="msg-info">If you are going to use a passage</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Johnny Seitz <span class="msg-time float-end">5 days
												ago</span></h6>
													<p class="msg-info">All the Lorem Ipsum generators</p>
												</div>
											</div>
										</a>
									</div>
									<!-- <a href="javascript:;">
										<div class="text-center msg-footer">View All Messages</div>
									</a> -->
								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown border-light-2">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="https://via.placeholder.com/110x110" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
								<p class="user-name mb-0 text-white">Jes</p>
								<p class="designattion mb-0">Admin</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<!-- <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Settings</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-dollar-circle'></i><span>Earnings</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-download'></i><span>Downloads</span></a>
							</li> -->
							
							<li><a href=<?= base_url('/home/log_out')?>><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">

             <div class="">
                 <div class="row row-cols-1 row-cols-md-2 row-cols-xl-5 row-cols-xxl-5">
					 <div class="col">
						 <div class="card radius-10">
							 <div class="card-body text-center">
                                <p class="mb-1">Sessions</p>  
								<h3 class="mb-3">876</h3>
								<p class="font-13"><span class="text-success"><i class="lni lni-arrow-up"></i>2.1%</span> vs last 7 days</p>
								<div id="chart1"></div>
							 </div>
						 </div>
					 </div>
					 <div class="col">
						<div class="card radius-10">
							<div class="card-body text-center">
							   <p class="mb-1">Total Users</p>  
							   <h3 class="mb-3">4.5M</h3>
							   <p class="font-13"><span class="text-success"><i class="lni lni-arrow-up"></i> 4.2% </span> last 7 days</p>
							   <div id="chart2"></div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body text-center">
							   <p class="mb-1">Page Views</p>  
							   <h3 class="mb-3">64,835</h3>
							   <p class="font-13"><span class="text-danger"><i class="lni lni-arrow-down"></i> 3.6%</span> vs last 7 days</p>
							   <div id="chart3"></div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body text-center">
							   <p class="mb-1">Bounce Rate</p>  
							   <h3 class="mb-3">42.68%</h3>
							   <p class="font-13"><span class="text-success"><i class="lni lni-arrow-up"></i> 2.5%</span> vs last 7 days</p>
							   <div id="chart4"></div>
							</div>
						</div>
					</div>
					<div class="col col-md-12">
						<div class="card radius-10">
							<div class="card-body text-center">
							   <p class="mb-1"> Session Duration</p>  
							   <h3 class="mb-3">00:04:60</h3>
							   <p class="font-13"><span class="text-danger"><i class="lni lni-arrow-down"></i> 5.2%</span> vs last 7 days</p>
							   <div id="chart5"></div>
							</div>
						</div>
					</div>
				 </div><!--end row-->
			 </div>

			  <div class="row row-cols-1 row-cols-xl-2">
				<!-- <div class="col d-flex">
					<div class="card radius-10 w-100">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Sales Overview</h6>
								</div>
								  <div class="dropdown ms-auto">
										<button class="btn btn-white btn-sm radius-10 dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
											This Month
										</button>
										<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<li><a class="dropdown-item" href="#">This Week</a></li>
											<li><a class="dropdown-item" href="#">This Month</a></li>
											<li><a class="dropdown-item" href="#">This Year</a></li>
										</ul>
									</div>
							</div>
						  <div id="chart6"></div>
						</div>
					</div>
				</div> -->
				<!-- <div class="col d-flex">
					<div class="card radius-10 w-100">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Visitor Status</h6>
								</div>
								<div class="d-flex align-items-center ms-auto font-13 gap-2">
									<span class="border px-1 rounded cursor-pointer"><i class='bx bxs-circle text-primary me-1'></i>New Visitor</span>
									<span class="border px-1 rounded cursor-pointer"><i class='bx bxs-circle text-sky-light me-1'></i>Old Visitor</span>
								</div>
							</div>
						  <div id="chart7"></div>
						</div>
					</div>
				</div> -->
			  </div><!--end row-->

			  <!-- <div class="row">
				  <div class="col-12 col-lg-8 d-flex">
                     <div class="card radius-10 w-100">
						 <div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Geographic</h6>
								</div>
								<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
								</div>
							</div>
                            <div class="" id="geographic-map"></div>
						 </div>
					 </div>
				  </div>
				  <div class="col-12 col-lg-4 d-flex">
					<div class="card radius-10 w-100">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Impressions By Country</h6>
								</div>
								<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
								</div>
							</div>
						</div>
						<div class="dashboard-top-countries mb-3 p-3">

							<div class="row mb-4">
								<div class="col-2">
									<img src="assets/images/icons/united-states.webp" width="42" alt="">
								</div>
								<div class="col">
									<p class="mb-2">United States <strong class="float-end">445,85</strong></p>
									<div class="progress radius-10" style="height:6px;">
										<div class="progress-bar bg-gradient-blues" role="progressbar" style="width: 86%"></div>
									</div>
								</div>
							</div>
							<div class="row mb-4">
								<div class="col-2">
									<img src="/assets/images/icons/germany.webp" width="42" alt="">
								</div>
								<div class="col">
									<p class="mb-2">Germany <strong class="float-end">683,46</strong></p>
									<div class="progress radius-10" style="height:6px;">
										<div class="progress-bar bg-gradient-cosmic" role="progressbar" style="width: 66%"></div>
									</div>
								</div>
							</div>
							<div class="row mb-4">
								<div class="col-2">
									<img src="/assets/images/icons/canada.webp" width="42" alt="">
								</div>
								<div class="col">
									<p class="mb-2">Canada <strong class="float-end">982,43</strong></p>
									<div class="progress radius-10" style="height:6px;">
										<div class="progress-bar bg-gradient-burning" role="progressbar" style="width: 56%"></div>
									</div>
								</div>
							</div>
							<div class="row mb-4">
								<div class="col-2">
									<img src="/assets/images/icons/india.webp" width="42" alt="">
								</div>
								<div class="col">
									<p class="mb-2">India <strong class="float-end">852,35</strong></p>
									<div class="progress radius-10" style="height:6px;">
										<div class="progress-bar bg-gradient-lush" role="progressbar" style="width: 45%"></div>
									</div>
								</div>
							</div>
							<div class="row mb-4">
								<div class="col-2">
									<img src="/assets/images/icons/netherlands.webp" width="42" alt="">
								</div>
								<div class="col">
									<p class="mb-2">Netherlands <strong class="float-end">785,24</strong></p>
									<div class="progress radius-10" style="height:6px;">
										<div class="progress-bar bg-gradient-kyoto" role="progressbar" style="width: 38%"></div>
									</div>
								</div>
							</div>
							<div class="row mb-0">
								<div class="col-2">
									<img src="/assets/images/icons/malaysia.webp" width="42" alt="">
								</div>
								<div class="col">
									<p class="mb-2">Malaysia <strong class="float-end">387,56</strong></p>
									<div class="progress radius-10" style="height:6px;">
										<div class="progress-bar bg-gradient-moonlit" role="progressbar" style="width: 28%"></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				 </div>
			  </div> --><!--end row-->

			  <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
<!-- 				<div class="col d-flex">
				  <div class="card radius-10 p-0 w-100 bg-transparent shadow-none">
					<div class="card radius-10">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0">New Sessions</p>
									<h5 class="mb-0">54.6%</h5>
								</div>
								<div class="widgets-icons bg-light-primary text-primary ms-auto"><i class="bx bxs-cookie"></i></div>
							</div>
							<div id="chart8"></div>
						</div>
					</div>
					<div class="card radius-10">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0">Average Pages</p>
									<h5 class="mb-0">38.5%</h5>
								</div>
								<div class="widgets-icons bg-light-danger text-danger ms-auto"><i class="bx bxs-bookmark-alt-plus"></i></div>
							</div>
							<div id="chart9"></div>
						</div>
					</div>
					<div class="card radius-10 mb-0">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0">Cloud Download</p>
									<h5 class="mb-0">24.5K</h5>
								</div>
								<div class="widgets-icons bg-light-success text-success ms-auto"><i class="bx bxs-cloud-download"></i></div>
							</div>
							<div id="chart10"></div>
						</div>
					</div>
				 </div>
				</div> -->
				 <div class="col d-flex">
					<!-- <div class="card radius-10 w-100">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Goal Statistics</h6>
								</div>
								<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
								</div>
							</div>
							<div id="chart11"></div>
							 <div class="row align-items-center py-2">
								 <div class="col-auto">
                                    <p class="mb-0">Sales</p>
								 </div>
								 <div class="col-auto">
									<p class="mb-0">1580</p>
								</div>
								<div class="col-auto">
									<p class="mb-0">875</p>
								</div>
								<div class="col">
									<div class="progress radius-10 mb-0" style="height:6px;">
										<div class="progress-bar bg-primary" role="progressbar" style="width: 85%"></div>
									</div>
								</div>
							 </div><!--end row-->

							 <!-- <div class="row align-items-center py-2">
								<div class="col-auto">
								   <p class="mb-0">Users</p>
								</div>
								<div class="col-auto">
								   <p class="mb-0">1852</p>
							   </div>
							   <div class="col-auto">
								   <p class="mb-0">356</p>
							   </div>
							   <div class="col">
								   <div class="progress radius-10 mb-0" style="height:6px;">
									   <div class="progress-bar bg-danger" role="progressbar" style="width: 65%"></div>
								   </div>
							   </div>
							</div> --><!--end row-->
							
							<!-- <div class="row align-items-center py-2">
								<div class="col-auto">
								   <p class="mb-0">Visits</p>
								</div>
								<div class="col-auto">
								   <p class="mb-0">1280</p>
							   </div>
							   <div class="col-auto">
								   <p class="mb-0">867</p>
							   </div>
							   <div class="col">
								   <div class="progress radius-10 mb-0" style="height:6px;">
									   <div class="progress-bar bg-success" role="progressbar" style="width: 45%"></div>
								   </div>
							   </div>
							</div> --><!--end row-->
						</div>
					<!-- </div> -->
				  </div>
				  <div class="col col-lg-12 d-flex">
				<!-- 	<div class="card radius-10 p-0 w-100 p-3">
					 <div class="card radius-10 shadow-none bg-transparent border">
						<div class="card-body">
							<div class="d-flex align-items-center justify-content-center justify-content-lg-start">
								<div id="chart12"></div>
                                <div class="">
									<p class="mb-0 d-flex align-items-center"><i class='bx bx-male text-danger fs-4'></i><span class="mx-2">Male</span><span>65%</span></p>
									<p class="mb-0 d-flex align-items-center"><i class='bx bx-female text-primary fs-4'></i><span class="mx-2">Male</span><span>35%</span></p>
								</div>
							</div>
						</div>
					</div> -->
					<!-- <div class="card radius-10 mb-0 shadow-none bg-transparent mb-0 border">
						<div class="card-body">
							<div class="d-flex align-items-center mb-4">
								<div>
									<h6 class="mb-0">Device Type</h6>
								</div>
								<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
								</div>
							</div>
							<div class="row row-cols-3 g-3">
								<div class="col">
									<div class="d-flex gap-2">
										<h4 class="mb-1 d-flex">61 <span class="align-self-start fs-6">%</span></h4>
										<p class="mb-0 align-self-center text-success">(+8.4%)</p>
									</div>
									<p class="mb-0 d-flex align-items-center"><i class='bx bxs-circle text-info fs-6'></i><span class="mx-2">Android</span></p>
								</div>
								<div class="col">
									<div class="d-flex gap-2">
										<h4 class="mb-1 d-flex">28 <span class="align-self-start fs-6">%</span></h4>
										<p class="mb-0 align-self-center text-danger">(-1.9%)</p>
									</div>
									<p class="mb-0 d-flex align-items-center"><i class='bx bxs-circle text-success fs-6'></i><span class="mx-2">iOS</span></p>
								</div>
								<div class="col">
									<div class="d-flex gap-2">
										<h4 class="mb-1 d-flex">11 <span class="align-self-start fs-6">%</span></h4>
										<p class="mb-0 align-self-center text-success">(+6.8%)</p>
									</div>
									<p class="mb-0 d-flex align-items-center"><i class='bx bxs-circle text-warning fs-6'></i><span class="mx-2">Other</span></p>
								</div>
							</div>

							<div class="progress radius-10 mt-4" style="height: 10px">
								<div class="progress-bar bg-info" role="progressbar" style="width: 45%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							
						</div>
					</div> -->
				   <!-- </div> -->
				  <!-- </div> -->
			  <!-- </div>end row -->

			  <!-- <div class="row">
				  <div class="col-12 col-lg-6">
					  <div class="card radius-10 mb-3 mb-lg-0">
						  <div class="card-body">
							<div id="chart13"></div>
						  </div>
					  </div>
				  </div>
				  <div class="col-12 col-lg-6">
					<div class="card radius-10 mb-0">
						<div class="card-body">
							<div id="chart14"></div>
						  </div>
					</div>
				</div> -->
			  <!-- </div>end row -->
			<!-- </div> -->
		<!-- </div> -->
		<!--end page wrapper -->
		<!--start overlay-->
		<!-- <div class="search-overlay"></div> -->
		<!-- <div class="overlay toggle-icon"></div> -->
		<!--end overlay-->
		<!-- Start Back To Top Button <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a> -->
		<!--End Back To Top Button-->
		<!-- <footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer> -->
	<!-- </div> -->
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<h6 class="mb-0">Theme Styles</h6>
			<hr/>
			<div class="d-flex align-items-center justify-content-between">
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
					<label class="form-check-label" for="lightmode">Light</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
					<label class="form-check-label" for="darkmode">Dark</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
					<label class="form-check-label" for="semidark">Semi Dark</label>
				</div>
			</div>
			<hr/>
			<div class="form-check">
				<input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
				<label class="form-check-label" for="minimaltheme">Minimal Theme</label>
			</div>
			<hr/>
			<h6 class="mb-0">Header Colors</h6>
			<hr/>
			<div class="header-colors-indigators">
				<div class="row row-cols-auto g-3">
					<div class="col">
						<div class="indigator headercolor1" id="headercolor1"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor2" id="headercolor2"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor3" id="headercolor3"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor4" id="headercolor4"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor5" id="headercolor5"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor6" id="headercolor6"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor7" id="headercolor7"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor8" id="headercolor8"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	