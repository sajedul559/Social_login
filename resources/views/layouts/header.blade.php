	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-right">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
                                @auth
                                <li class="current-list-item"><a href="{{route('home')}}">Home</a>
									
								</li>
								<li><a href="about.html">About</a></li>
									
								</li>									
								</li>

								<li><a href="contact.html">Contact</a></li>
                               
								<li><a href="shop.html"> {{ Auth::user()->name }} <i class="fas fa-angle-down"></i></a>
									<ul class="sub-menu">
										<li>
                                            <a href="{{route('logout')}}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">Logout</a>
                                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
										<li><a href="{{route('dashboard')}}" target="_blank">Dashboard</a></li>
										
									</ul>
								</li>
								
                                @endauth

                                @guest
                                <li class="current-list-item"><a href="#">Home</a>
									
								</li>
								<li><a href="about.html">About</a></li>
									
								</li>
									
								</li>
								<li><a href="contact.html">Contact</a></li>
									
								</li>
                                <li><a href="{{route('login')}}">Login</a></li>
                                <li><a href="{{route('register')}}">Register</a></li>
								
                                @endguest
                               
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	