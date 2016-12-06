@extends('index')
	@section('header')
	<section id="container">
		<!-- header start -->
		<header class="header black-bg">
			 <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
             <!--logo start-->
            <a href="index.html" class="logo"><b>DASHGUM FREE</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
            	<ul class="nav top-menu">
            		<li class="dropdown">
            			<a data-toggle="dropdown" class="dropdown-toggle" href="#">
            				 <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>    
            		</li>
            	</ul>
            </div> <!-- close nav notify-row -->
		</header>
	</section>
@endsection