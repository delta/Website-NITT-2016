<!DOCTYPE html>
<html lang="en" manifest="manifest.appcache"> 
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>National Institute of Tiruchirappalli</title>
    
    <!-- Styles -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,800" rel="stylesheet" type="text/css"><!-- Google web fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"><!-- font-awesome -->
    <link href="css/dropdown-menu.css" rel="stylesheet" type="text/css"><!-- dropdown-menu -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Bootstrap -->
    <link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css"><!-- Fancybox -->
    <link href="css/style.css" rel="stylesheet" type="text/css"><!-- theme styles -->
    <link rel="stylesheet" type="text/css" href="css/myStyle.css" />
    <link rel="icon" type="image/png" href="image/logo.png">
        <script src="js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript">
            $('.dep').hide();
        </script>
		<script type="text/javascript" src="js/fix_nav.js"></script>
        <script type="text/javascript" src="js/disp_freq.js"></script>

  </head>
  
  <body role="document">
    <header class="myheader" >
        <img src="image/header.png" style="position:relative;top:35px;" />
    </header>
  
    <!-- device test, don't remove. javascript needed! -->
    <span class="visible-xs"></span><span class="visible-sm"></span><span class="visible-md"></span><span class="visible-lg"></span>
    <!-- device test end -->
    
    <div id="k-head" class="container-fluid"><!-- container + head wrapper -->
    
    	<div class="row"><!-- row -->
            <nav class="k-functional-navig"><!-- functional navig -->
                <ul class="list-inline pull-right">
                    <li><a href="#">Departments</a></li>
                    <li><a href="#">Placements</a></li>
                   <li><a id="dash" href="#" title="" class="dash"><i class="fa fa-toggle-off"></i> Dashboard </a></li>
				   <script>
			       $('#dash').click(function(){$(this).find('i').toggleClass('fa-toggle-off fa-toggle-on');
				   $('.dashboard').toggle('fast');
				   });
				   </script>
                    <li><a href="#">Webmail</a></li>
                    <li><a href="#">Sitemap</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Translate</a></li>
                </ul>
            
                
                

            </nav><!-- functional navig end -->
        
        	<div class="col-lg-12">
            <div class="container-fluid text-center dashboard"  hidden >
                            <div class="col-md-1"><a href="#" style="color:black;"> View</a></div>
                            <div class="col-md-8"></div>
                            <div class="col-md-1"><a href="#" style="color:black;" > Login </a></div>
                            <div class="col-md-1"><a href="#" style="color:black;"> Register </a></div>
                            <div class="col-md-1"> <a href="#" style="color:black;"> Search</a></div>

                        </div>
                        <script type="text/javascript">
                    $('.dashboard').hide();
                    function toggleDash(){

                    
                    }
                    </script>
        		<div id="k-site-logo" class="pull-left"><!-- site logo -->
    <!--            
                    <h1 class="k-logo">
                        <a href="index.html" title="Home Page">
                            <img src="image/logo.png" style="width:130px;height:130px;visibility:hidden;">    
                        </a>
                    </h1>
        -->            
                    <a id="mobile-nav-switch" href="#drop-down-left"><span class="alter-menu-icon"><i class="fa fa-bars" style="color: #000000"></i></span></a><!-- alternative menu button -->
            
            	</div><!-- site logo end -->

            	<nav id="k-menu affix" class="k-main-navig"><!-- main navig -->
        
                    <ul id="drop-down-left" class="k-dropdown-menu">
                        <li>
                            <a href="#" title="">Homepage</a>
                        </li>
                        <li>
                            <a href="#" title=""><i class="fa fa-caret-down"></i> About</a>
							<ul class="sub-menu">
                                <li><a href="#"> Mission & Vision </a></li>
                                <li><a href="#"> Alumni </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title=""><i class="fa fa-caret-down"></i> Student Links</a>
							<ul class="sub-menu">
                                <li><a href="#">Forms & Downloads </a></li>
                                <li><a href="#">Scholarships </a></li>
                                <li><a href="#">Semester Results</a></li>
                                <li><a href="#">Time Table</a></li>
								<li><a href="#">Clubs</a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">Portals</a></li>
                                <li><a href="#">Important Contacts</a></li>
                            </ul>
                        </li>
                        <li>
                           <a href="#" title=""><i class="fa fa-caret-down"></i> Admissions</a>
						   <ul class="sub-menu">
                                <li><a href="#">B.Tech. </a></li>
                                <li><a href="#">M.Tech. </a></li>
                                <li><a href="#">Ph.D.</a></li>
                                <li><a href="#">MCA</a></li>
                            </ul>
                        </li>
                        <li>
                            <a id="d" href="#" title="" class="department"><i class="fa fa-toggle-off"></i> Department</a>
							<script>$('#d').click(function(){$(this).find('i').toggleClass('fa-toggle-off fa-toggle-on');});</script>
                            <ul class="sub-menu visible-xs">
                                <li><a href="#">Computer Science & Engineering</a></li>
                                <li><a href="#">Electrical & Electronics Engineering</a></li>
                                <li><a href="#">Electronics & Communication Engineering</a></li>
                                <li><a href="#">Instrumentation & Control Engineering</a></li>
                                <li><a href="#">Mechanical Engineering</a></li>
                                <li><a href="#">Civil Engineering</a></li>
                                <li><a href="#">Chemical Engineering</a></li>
                                <li><a href="#">Production Engineering</a></li>
                                <li><a href="#">Metalurgical & Material's Engineering</a></li>
                                <li>
                                    <a href="#">Others</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Mathematics</a></li>
                                        <li>
                                            <a href="#">Chemistry</a>
                                            
                                        </li>
                                        <li><a href="#">Physics</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title=""><i class="fa fa-caret-down"></i> Initiatives</a>
                            <ul class="sub-menu">
                                <li><a href="#">CEDI </a></li>
                                <li><a href="#">Startup Weekend</a></li>
                                <li><a href="#">Internet Of Things</a></li>
                                <li><a href="#">Innovation Center</a></li>
                                <li><a href="#">Green Campus</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title=""><i class="fa fa-caret-down"></i> Industry</a>
							<ul class="sub-menu">
                                <li><a href="#">Placements at NITT </a></li>
                                <li><a href="#">Scholarships </a></li>
                                <li><a href="#">Consultancy & Research</a></li>
                                <li><a href="#">MoU's signed</a></li>
								<li><a href="#">Tender Invitations</a></li>
                                <li><a href="#">Vendor Registrations</a></li>
                            </ul>
                        </li>
                    </ul>
        
            	</nav><!-- main navig end -->
            
            </div>
            
        </div><!-- row end -->
    <section class="visible-lg">
                <div class="container dep" style="display:none;">
                    <div class="col-md-2">
                        <a href="#">Architecture</a><br>
                        <a href="#">CECASE</a><br>
                        <a href="#">Chemical Engineering</a><br>
                        <a href="#">Chemistry</a><br>
                </div>  
                <div class="col-md-3">
                    <a href="#">Civil Engineering</a><br>
                        <a href="#">Computer Applications</a><br>
                        <a href="#">Computer Science & Engineering</a><br>
                        <a href="#">DEE</a><br>
                </div>
                <div class="col-md-4">
                    <a href="#">Electrical & Electronics Engineering</a><br>
                        <a href="#">Electronics & Communications Engineering</a><br>
                        <a href="#">Humanities</a><br>
                        <a href="#">Instrumentation & Control Engineering</a><br>
                        <a href="#">Management Studies</a><br>
                </div>
                <div class="col-md-3">
                    
                        <a href="#">Mathematics</a><br>
                        <a href="#">Mechanical Engineering</a><br>
                        <a href="#">Metalurgical & Materials Engineering</a><br>
                        <a href="#">Production Engineering</a><br>
                        <a href="#">Physics</a><br>
                        
                </div>
            </section>
    </div><!-- container + head wrapper end -->

    <div id="k-body"><!-- content wrapper -->
    
    	<div class="container"><!-- container -->
        
        	<div class="row"><!-- row -->

                <div id="k-top-search" class="col-lg-12 clearfix"><!-- top search -->
                
                    <form action="#" id="top-searchform" method="get" role="search">
                        <div class="input-group">
                            <input type="text" name="s" id="sitesearch" class="form-control" autocomplete="off" placeholder="Type in keyword(s) then hit Enter on keyboard" />
                        </div>
                    </form>
                    
                    <div id="bt-toggle-search" class="search-icon text-center"><i class="s-open fa fa-search"><a href="#">&nbsp;Search</a></i><i class="s-close fa fa-times"></i></div><!-- toggle search button -->
                
                </div><!-- top search end -->
            
            	<div class="k-breadcrumbs col-lg-12 clearfix"><!-- breadcrumbs -->
                
                	<ol class="breadcrumb">
                    	<li><a href="#">HOME</a></li>
                        
                    </ol>
                    
                </div><!-- breadcrumbs end -->
                
            </div><!-- row end -->
            
            <div class="row no-gutter fullwidth"><!-- row -->
            
                <div class="col-lg-12 clearfix"><!-- featured posts slider -->
                
                    <div id="carousel-featured" class="carousel slide" data-interval="4000" data-ride="carousel"><!-- featured posts slider wrapper; auto-slide -->
                    
                        <ol class="carousel-indicators"><!-- Indicators -->
                            <li data-target="#carousel-featured" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-featured" data-slide-to="1"></li>
                            <li data-target="#carousel-featured" data-slide-to="2"></li>
                            <li data-target="#carousel-featured" data-slide-to="3"></li>
                            <li data-target="#carousel-featured" data-slide-to="4"></li>
                        </ol><!-- Indicators end -->
                    
                        <div class="carousel-inner" ><!-- Wrapper for slides -->
                        
                            <div class="item active" >
                                <img src="image/slide-1.jpg" style="width:1900px;max-height:600px;" />                                    
                                
                                
                            </div>
                            
                            <div class="item">
                                    <img src="image/slide-2.jpg" style="width:1900px;max-height:600px;" />                                    
                                
                            </div>
                            
                            <div class="item">
                                    <img src="image/slide-3.jpg" style="width:1900px;max-height:600px;" />                                    
                                
                            </div>
                            <div class="item">
                                    <img src="image/slide-4.jpg" style="width:1900px;max-height:600px;" />                                    
                                
                            </div>
                            <div class="item">
                                    <img src="image/slide-5.jpg" style="width:1900px;max-height:600px;" />                                    
                                
                            </div>
                            
                            
                            
                        </div><!-- Wrapper for slides end -->
                    
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-featured" data-slide="prev"><i class="fa fa-chevron-left  fa-2x"></i></a>
                        <a class="right carousel-control" href="#carousel-featured" data-slide="next"><i class="fa fa-chevron-right  fa-2x"></i></a>
                        <!-- Controls end -->
                        
                    </div><!-- featured posts slider wrapper end -->
                        
                </div><!-- featured posts slider end -->
                
            </div><!-- row end -->
           
            <div class="row no-gutter lgrey-col" ><!-- row -->
                
                <div class="col-lg-4 col-md-4"><!-- upcoming events wrapper -->
                	
                    <div class="col-padded grey-col" ><!-- inner custom column -->
                    
                    	<ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_up_events"><!-- widgets list -->
                    
                                <h1 class="title-widget">Upcoming Events</h1>
                                <div class="carousel-controls">
                            <a class="prev" href="#events-carousel" data-slide="prev" onclick="disp2(0,-1);"><i class="fa fa-caret-left  fa-2x"></i></a>
                            <a class="next" href="#events-carousel" data-slide="next" onclick="disp2(0,1);"><i class="fa fa-caret-right  fa-2x"></i></a>
                            <span id="car-1" style="float:right;"></span>
                        </div><!--//carousel-controls-->
                        <div class="section-content downloads">
                            <div id="events-carousel" class="testimonial-carousel carousel slide">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <h1 class="title-median"><a href="#" title="">Workshops</a></h1>
                                        
                                        <div class="up-event-meta clearfix">
                                            <div class="up-event-date">Oct 30, 2015</div><div class="up-event-time">9:00 - 11:00</div>
                                        </div>
                                        
                                        <p>
                                        Workshop on Tools and Techniques for Information Processing Research <a href="#" class="moretag" title="read more">MORE</a> 
                                        </p>
                                    
                                        <h1 class="title-median"><a href="#" title="">Horizons</a></h1>
                                        
                                        <div class="up-event-meta clearfix">
                                            <div class="up-event-date">Nov 12, 2015</div><div class="up-event-time">8:30 - 10:30</div>
                                        </div>
                                        
                                        <p>
                                       Horizon 2015 - A National Level Student's Symposium on Innovative Catalysis... <a href="#" class="moretag" title="read more">MORE</a> 
                                        </p>  
                                         <h1 class="title-median"><a href="#" title="">International Conference on Disaster Management</a></h1>
                                        
                                        <div class="up-event-meta clearfix">
                                            <div class="up-event-date">Nov 21, 2015</div><div class="up-event-date">Nov 21, 2015</div>
                                        </div>
                                        
                                        <p>
                                       International Conference on Disaster Mitigation and Management for Sustainable Development & Risk Reduction,... <a href="#" class="moretag" title="read more">MORE</a> 
                                        </p>                           
                                    </div><!--//item-->

                                    <div class="item">
                                         <h1 class="title-median"><a href="#" title="">Workshops</a></h1>
                                        
                                        <div class="up-event-meta clearfix">
                                            <div class="up-event-date">Oct 30, 2015</div><div class="up-event-time">9:00 - 11:00</div>
                                        </div>
                                        
                                        <p>
                                        Workshop on Tools and Techniques for Information Processing Research <a href="#" class="moretag" title="read more">MORE</a> 
                                        </p>
                                    
                                        <h1 class="title-median"><a href="#" title="">Horizons</a></h1>
                                        
                                        <div class="up-event-meta clearfix">
                                            <div class="up-event-date">Nov 12, 2015</div><div class="up-event-time">8:30 - 10:30</div>
                                        </div>
                                        
                                        <p>
                                       Horizon 2015 - A National Level Student's Symposium on Innovative Catalysis... <a href="#" class="moretag" title="read more">MORE</a> 
                                        </p>  
                                         <h1 class="title-median"><a href="#" title="">International Conference on Disaster Management</a></h1>
                                        
                                        <div class="up-event-meta clearfix">
                                            <div class="up-event-date">Nov 21, 2015</div><div class="up-event-date">Nov 21, 2015</div>
                                        </div>
                                        
                                        <p>
                                       International Conference on Disaster Mitigation and Management for Sustainable Development & Risk Reduction,... <a href="#" class="moretag" title="read more">MORE</a> 
                                        </p>                           
                                        
                                    </div><!--//item-->
                                    <div class="item">
                                        <h1 class="title-median"><a href="#" title="">Workshops</a></h1>
                                        
                                        <div class="up-event-meta clearfix">
                                            <div class="up-event-date">Oct 30, 2015</div><div class="up-event-time">9:00 - 11:00</div>
                                        </div>
                                        
                                        <p>
                                        Workshop on Tools and Techniques for Information Processing Research <a href="#" class="moretag" title="read more">MORE</a> 
                                        </p>
                                    
                                        <h1 class="title-median"><a href="#" title="">Horizons</a></h1>
                                        
                                        <div class="up-event-meta clearfix">
                                            <div class="up-event-date">Nov 12, 2015</div><div class="up-event-time">8:30 - 10:30</div>
                                        </div>
                                        
                                        <p>
                                       Horizon 2015 - A National Level Student's Symposium on Innovative Catalysis... <a href="#" class="moretag" title="read more">MORE</a> 
                                        </p>  
                                         <h1 class="title-median"><a href="#" title="">International Conference on Disaster Management</a></h1>
                                        
                                        <div class="up-event-meta clearfix">
                                            <div class="up-event-date">Nov 21, 2015</div><div class="up-event-date">Nov 21, 2015</div>
                                        </div>
                                        
                                        <p>
                                       International Conference on Disaster Mitigation and Management for Sustainable Development & Risk Reduction,... <a href="#" class="moretag" title="read more">MORE</a> 
                                        </p>                                      
                                    </div><!--//item-->
                                    
                                </div><!--//carousel-inner-->
                            </div><!--//testimonials-carousel-->
                        </div><!--//section-content-->
                                <script type="text/javascript">
                                        /*
                                        
                                
                                
                                <ul class="list-unstyled">
                                
                                    <li class="up-event-wrap">
                                
                                        <h1 class="title-median"><a href="#" title="">Workshops</a></h1>
                                        
                                        <div class="up-event-meta clearfix">
                                            <div class="up-event-date">Oct 30, 2015</div><div class="up-event-time">9:00 - 11:00</div>
                                        </div>
                                        
                                        <p>
                                        Workshop on Tools and Techniques for Information Processing Research <a href="#" class="moretag" title="read more">MORE</a> 
                                        </p>
                                    
                                    </li>
                                    
                                    <li class="up-event-wrap">
                                
                                        <h1 class="title-median"><a href="#" title="">Horizons</a></h1>
                                        
                                        <div class="up-event-meta clearfix">
                                            <div class="up-event-date">Nov 12, 2015</div><div class="up-event-time">8:30 - 10:30</div>
                                        </div>
                                        
                                        <p>
                                       Horizon 2015 - A National Level Student's Symposium on Innovative Catalysis... <a href="#" class="moretag" title="read more">MORE</a> 
                                        </p>
                                    
                                    </li>
                                    
                                    <li class="up-event-wrap">
                                
                                        <h1 class="title-median"><a href="#" title="">International Conference on Disaster Management</a></h1>
                                        
                                        <div class="up-event-meta clearfix">
                                            <div class="up-event-date">Nov 21, 2015</div><div class="up-event-date">Nov 21, 2015</div>
                                        </div>
                                        
                                        <p>
                                       International Conference on Disaster Mitigation and Management for Sustainable Development & Risk Reduction,... <a href="#" class="moretag" title="read more">MORE</a> 
                                        </p>
                                    
                                    </li>
                                
                                </ul>
                                */
                                </script>
                            
                            </li><!-- widgets list end -->
                            <li>
                                <h1 class="title-median">Quicklinks</h1>
                                <div class="carousel-controls">
                            <a class="prev" href="#quicklinks-carousel" data-slide="prev" onclick="disp3(0,-1);"><i class="fa fa-caret-left fa-2x"></i></a>
                            <a class="next" href="#quicklinks-carousel" data-slide="next" onclick="disp3(0,1);"><i class="fa fa-caret-right fa-2x"></i></a>
                            <span id="car-2" style="float:right;"></span>
                        </div><!--//carousel-controls-->
                        <div class="section-content downloads">
                            <div id="quicklinks-carousel" class="testimonial-carousel carousel slide">
                                <div class="carousel-inner">
                                    <div class="item active" style="font-size:14px;">
                                        <a href="#" style="color:black;">Alumni - RECAL website</a><br>
                                        <a href="#" style="color:black;">Institute Development</a><br>
                                        <a href="#" style="color:black;">Institute Employees Directory (August 2015)</a><br>
                                        <a href="#" style="color:black;">Connect NIT</a><br>
                                        
                                    </div><!--//item-->

                                    <div class="item" style="font-size:14px;">
                                        <a href="#" style="color:black;">Alumni - RECAL website</a><br>
                                        <a href="#" style="color:black;">Institute Development</a><br>
                                        <a href="#" style="color:black;">Institute Employees Directory (August 2015)</a><br>
                                        <a href="#" style="color:black;">Connect NIT</a><br>
                                        
                                    </div><!--//item-->
                            </li>
                        
                        </ul><!-- widgets end -->
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- upcoming events wrapper end -->
        

                
                <div class="col-lg-4 col-md-4"><!-- recent news wrapper -->
                	
                    <div class="col-padded"><!-- inner custom column -->
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_recent_news"><!-- widgets list -->
								<h1 class="title-widget">College News</h1>
								<div class="carousel-controls">
									<a class="prev" href="#college-carousel" data-slide="prev"><i class="fa fa-caret-left  fa-2x"></i></a>
									<a class="next" href="#college-carousel" data-slide="next"><i class="fa fa-caret-right  fa-2x"></i></a>
								</div><!--//carousel-controls-->
								<div id="college-carousel" class="testimonial-carousel carousel slide">
								<div class="carousel-inner">
								<div class="item active">
                                
                                <ul class="list-unstyled">
                                
									<li class="recent-news-wrap">
                                
                                        <h1 class="title-median"><a href="#" title="">Special Recruitment Drive for Persons With Disabilities</a></h1>
                                        
                                        <div class="recent-news-meta">
                                            <div class="recent-news-date">Oct 31, 2015</div>
                                        </div>
                                        
                                        <div class="recent-news-content clearfix">
                                            <figure class="recent-news-thumb">
                                                <a href="#" title=""></a>
                                            </figure>
                                            <div class="recent-news-text">
                                                <p>
                                                 Amendment: upper age limit is relaxed up to 10 years for recruitment to all posts <a href="#" class="moretag" title="read more">MORE</a> 
                                                </p>
                                            </div>
                                        </div>
                                    
                                    </li>
                                    
									<li class="recent-news-wrap">
                                
                                        <h1 class="title-median"><a href="#" title="">Circulars</a></h1>
                                        
                                        <div class="recent-news-meta">
                                            <div class="recent-news-date">Oct 26, 2015</div>
                                        </div>
                                        
                                        <div class="recent-news-content clearfix">
                                            <figure class="recent-news-thumb">
                                                <a href="#" title=""></a>
                                            </figure>
                                            <div class="recent-news-text">
                                                <p>
                                                Dean Academic Circulars on Cycle Test, Semester Examination, Academic Schedule, etc.. <a href="#" class="moretag" title="read more">MORE</a> 
                                                </p>
                                            </div>
                                        </div>
                                    
                                    </li>

                                    <li class="recent-news-wrap">
                                
                                        <h1 class="title-median"><a href="#" title="">Notice</a></h1>
                                        
                                        <div class="recent-news-meta">
                                            <div class="recent-news-date">Nov 26, 2015</div>
                                        </div>
                                        
                                        <div class="recent-news-content clearfix">
                                            <figure class="recent-news-thumb">
                                                <a href="#" title=""></a>
                                            </figure>
                                            <div class="recent-news-text">
                                                <p>
                                               Semester reopens for B.Tech Students from 5th January 2017 <a href="#" class="moretag" title="read more">MORE</a> 
                                                </p>
                                            </div>
                                        </div>
                                    
                                    </li>
                                    
									<li class="recent-news-wrap">
                                
                                        <h1 class="title-median"><a href="#" title=""> Ph.D.(PT) Selection List</a></h1>
                                        
                                        <div class="recent-news-meta">
                                            <div class="recent-news-date"> Oct 23, 2015</div>
                                        </div>
                                        
                                        <div class="recent-news-content clearfix">
                                            <div class="recent-news-text">
                                                <p>
                                                Ph.D.(PT) Selection List, Ph.D.(Project Category), M.S. (PT) Selection List.<a href="#" class="moretag" title="read more">MORE</a> 
                                                </p>
                                            </div>
                                        </div>
                                    
                                    </li>
                                
                                </ul>
								</div>
								<div class="item">
                                
                                <ul class="list-unstyled">
                                
									<li class="recent-news-wrap">
                                
                                        <h1 class="title-median"><a href="#" title="">Special Recruitment Drive for Persons With Disabilities</a></h1>
                                        
                                        <div class="recent-news-meta">
                                            <div class="recent-news-date">Oct 31, 2015</div>
                                        </div>
                                        
                                        <div class="recent-news-content clearfix">
                                            <figure class="recent-news-thumb">
                                                <a href="#" title=""></a>
                                            </figure>
                                            <div class="recent-news-text">
                                                <p>
                                                 Amendment: upper age limit is relaxed up to 10 years for recruitment to all posts <a href="#" class="moretag" title="read more">MORE</a> 
                                                </p>
                                            </div>
                                        </div>
                                    
                                    </li>
                                    
									<li class="recent-news-wrap">
                                
                                        <h1 class="title-median"><a href="#" title="">Circulars</a></h1>
                                        
                                        <div class="recent-news-meta">
                                            <div class="recent-news-date">Oct 26, 2015</div>
                                        </div>
                                        
                                        <div class="recent-news-content clearfix">
                                            <figure class="recent-news-thumb">
                                                <a href="#" title=""></a>
                                            </figure>
                                            <div class="recent-news-text">
                                                <p>
                                                Dean Academic Circulars on Cycle Test, Semester Examination, Academic Schedule, etc.. <a href="#" class="moretag" title="read more">MORE</a> 
                                                </p>
                                            </div>
                                        </div>
                                    
                                    </li>

                                    <li class="recent-news-wrap">
                                
                                        <h1 class="title-median"><a href="#" title="">Notice</a></h1>
                                        
                                        <div class="recent-news-meta">
                                            <div class="recent-news-date">Nov 26, 2015</div>
                                        </div>
                                        
                                        <div class="recent-news-content clearfix">
                                            <figure class="recent-news-thumb">
                                                <a href="#" title=""></a>
                                            </figure>
                                            <div class="recent-news-text">
                                                <p>
                                               Semester reopens for B.Tech Students from 5th January 2017 <a href="#" class="moretag" title="read more">MORE</a> 
                                                </p>
                                            </div>
                                        </div>
                                    
                                    </li>
                                    
									<li class="recent-news-wrap">
                                
                                        <h1 class="title-median"><a href="#" title=""> Ph.D.(PT) Selection List</a></h1>
                                        
                                        <div class="recent-news-meta">
                                            <div class="recent-news-date"> Oct 23, 2015</div>
                                        </div>
                                        
                                        <div class="recent-news-content clearfix">
                                            <div class="recent-news-text">
                                                <p>
                                                Ph.D.(PT) Selection List, Ph.D.(Project Category), M.S. (PT) Selection List.<a href="#" class="moretag" title="read more">MORE</a> 
                                                </p>
                                            </div>
                                        </div>
                                    
                                    </li>
                                
                                </ul>
								</div>
								<div class="item">
                                
                                <ul class="list-unstyled">
                                
									<li class="recent-news-wrap">
                                
                                        <h1 class="title-median"><a href="#" title="">Special Recruitment Drive for Persons With Disabilities</a></h1>
                                        
                                        <div class="recent-news-meta">
                                            <div class="recent-news-date">Oct 31, 2015</div>
                                        </div>
                                        
                                        <div class="recent-news-content clearfix">
                                            <figure class="recent-news-thumb">
                                                <a href="#" title=""></a>
                                            </figure>
                                            <div class="recent-news-text">
                                                <p>
                                                 Amendment: upper age limit is relaxed up to 10 years for recruitment to all posts <a href="#" class="moretag" title="read more">MORE</a> 
                                                </p>
                                            </div>
                                        </div>
                                    
                                    </li>
                                    
									<li class="recent-news-wrap">
                                
                                        <h1 class="title-median"><a href="#" title="">Circulars</a></h1>
                                        
                                        <div class="recent-news-meta">
                                            <div class="recent-news-date">Oct 26, 2015</div>
                                        </div>
                                        
                                        <div class="recent-news-content clearfix">
                                            <figure class="recent-news-thumb">
                                                <a href="#" title=""></a>
                                            </figure>
                                            <div class="recent-news-text">
                                                <p>
                                                Dean Academic Circulars on Cycle Test, Semester Examination, Academic Schedule, etc.. <a href="#" class="moretag" title="read more">MORE</a> 
                                                </p>
                                            </div>
                                        </div>
                                    
                                    </li>

                                    <li class="recent-news-wrap">
                                
                                        <h1 class="title-median"><a href="#" title="">Notice</a></h1>
                                        
                                        <div class="recent-news-meta">
                                            <div class="recent-news-date">Nov 26, 2015</div>
                                        </div>
                                        
                                        <div class="recent-news-content clearfix">
                                            <figure class="recent-news-thumb">
                                                <a href="#" title=""></a>
                                            </figure>
                                            <div class="recent-news-text">
                                                <p>
                                               Semester reopens for B.Tech Students from 5th January 2017 <a href="#" class="moretag" title="read more">MORE</a> 
                                                </p>
                                            </div>
                                        </div>
                                    
                                    </li>
                                    
									<li class="recent-news-wrap">
                                
                                        <h1 class="title-median"><a href="#" title=""> Ph.D.(PT) Selection List</a></h1>
                                        
                                        <div class="recent-news-meta">
                                            <div class="recent-news-date"> Oct 23, 2015</div>
                                        </div>
                                        
                                        <div class="recent-news-content clearfix">
                                            <div class="recent-news-text">
                                                <p>
                                                Ph.D.(PT) Selection List, Ph.D.(Project Category), M.S. (PT) Selection List.<a href="#" class="moretag" title="read more">MORE</a> 
                                                </p>
                                            </div>
                                        </div>
                                    
                                    </li>
                                
                                </ul>
								</div>
								</div>
								</div>
                                
                            </li><!-- widgets list end -->
                        
                        </ul><!-- widgets end -->
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- recent news wrapper end -->
                
                <div class="col-lg-4 col-md-4"><!-- misc wrapper -->
                	
                    <div class="col-padded grey-col" ><!-- inner custom column -->
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_course_search"><!-- widget -->
                            
                            	<h1 class="title-widget">Videos</h1>
                                <img src="image/videos.png">
                                <p><a href="#" >View</a> more video's from Nit Trichy</p>
                             
                            </li><!-- widget end -->
                            
                            <li class="widget-container widget_text"><!-- widget -->
                                
                <section class="testimonial" style="min-height:420px">
                        <h1 class="title-widget">Downloads</h1>
                        <div class="carousel-controls">
                            <a class="prev" href="#testimonial-carousel" data-slide="prev" onclick="disp(0,-1);"><i class="fa fa-caret-left fa-2x "></i></a>
                            <a class="next" href="#testimonial-carousel" data-slide="next" onclick="disp(0,1);"><i class="fa fa-caret-right fa-2x "></i></a>
                            <span id="car-4" style="float:right;"></span>
                        </div><!--//carousel-controls-->
                        <div class="section-content downloads">
                            <div id="testimonial-carousel" class="testimonial-carousel carousel slide">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <blockquote class="quote">                                  

<li><a  href="#">Ph.D.(FT) Selection List </a>, <a href="#">MS (FT) Selection List</a><br><br></li>
<li><a href="#">Wanted Research Assistant in the Department of Energy and Environment, August 26, 2015</a></li><br>
<li><a href="#">Revised Institute Development Proposal (IDP) of TEQIP-II</a></li>




                                        </blockquote>                
                                        <div class="row">
     
                                        </div>                               
                                    </div><!--//item-->

                                    <div class="item">
                                        <blockquote class="quote">
                                            <li><a href="#">Scholarship Circular (new)</a></li><br>
<li><a href="#">RECAL Common Scholarship Application Form</a></li><br>
<li><a href="#">Revised Institute Development Proposal (IDP) of TEQIP-II</a></li>
<li><a href="#">First Year Orientation Programme Schedule</a></li><br>
                                        </blockquote>
                                        <div class="row">
     
                                        </div>                 
                                    </div><!--//item-->
                                    <div class="item">
                                        <blockquote class="quote">
                                            <li><a href="#">Last date for M.Tech. Admission 2015 and M.Tech Admission Cancellation at NITT</a></li><br><br>
<li><a href="#">First Year Orientation Programme Schedule</a></li><br>
<li><a href="#">Revised Institute Development Proposal (IDP) of TEQIP-II</a></li>
                                        </blockquote>
                                        <div class="row">
     
                                        </div>                 
                                    </div><!--//item-->
                                    
                                </div><!--//carousel-inner-->
                            </div><!--//testimonials-carousel-->
                        </div><!--//section-content-->
                    </section><!--//testimonials-->
                
                            
                            </li><!-- widget end -->
                            
                              
                        </ul><!-- widgets end -->
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- misc wrapper end -->
            
            </div><!-- row end -->
        
        <style type="text/css">
    .thumbnail a img:hover{
        opacity: 0.8;
    } 
</style>
<br/>

          <div title="Central Library-NIT Trichy" class="thumbnail col-xs-5 col-sm-5 col-md-2 col-md-offset-1 col-xs-offset-1 col-sm-offset-1 col-lg-offset-1" style="min-height:100px;padding-right:5px;padding-left:5px;//background:#9BBFD6">
         <a href="http://www.nitt.edu/home/students/facilitiesnservices/library">  <img src="image/slide-1.jpg" style="height:120px;width:200px"></img></a>
          <span>Central Library</span>
          </div>
          <!-- 1st -->

           <div class="thumbnail col-xs-5 col-sm-5 col-md-2" style="min-height:100px;padding-right:5px;padding-left:5px;//background:#E4B897;" >
            <a href="/hostel/"><img src="image/slide-2.jpg" style="height:120px;width:200px"></img></a>
            <span>Festember</span>
          </div>

        

<div class="thumbnail col-xs-5 col-sm-5 col-md-2 col-sm-offset-1 col-xs-offset-1 col-md-offset-0" style="min-height:100px;padding-right:5px;padding-left:5px;">
           <!-- <h3 style="text-align:center;position:relative;top:50%;transform:translateY(-50%)">3</h3>-->    
         <a href="/orion/"><img src="image/slide-3.jpg" style="height:120px;width:200px"></img></a>
         <span >Orion</span>
          </div>

           <div class="thumbnail col-xs-5 col-sm-5 col-md-2" style="/*background:#9BBFD6;*/min-height:100px;padding-right:5px;padding-left:5px" >
           <a href="/hostel/"><img src="image/slide-4.jpg" style="height:120px;width:200px"></img></a>
            <span>Hostels</span>
          </div>

<div class="thumbnail col-xs-5 col-sm-5 col-md-2 col-sm-offset-1 col-xs-offset-1 col-md-offset-0" style="min-height:100px;padding-right:5px;padding-left:5px;//background:#E4B897;">
            <a href="/helipad/"><img src="image/slide-5.jpg" style="height:120px;width:200px"></img></a>
            <span>Hockey Ground</span>
          </div>

           <div class="thumbnail col-xs-5 col-sm-5 col-md-2 col-sm-offset-0 col-xs-offset-0 col-md-offset-1 col-lg-offset-1" style="min-height:100px;padding-right:5px;padding-left:5px;" >
           <a href="/sports/"><img src="image/slide-6.jpg" style="height:120px;width:200px"></img></a>
            <span>Sports Center</span>
          </div>

        

        <div class="thumbnail col-xs-5 col-sm-5 col-md-2 col-sm-offset-1 col-xs-offset-1 col-md-offset-0" style="min-height:100px;padding-right:5px;padding-left:5px;//background:#9BBFD6">
            <a href="/hospi/"><img src="image/slide-7.JPG" style="height:120px;width:200px"></img></a>
            <span>Hospital</span>
          </div>

           <div class="thumbnail col-xs-5 col-sm-5 col-md-2" style="/*background:#E4B897;;*/min-height:100px;padding-right:5px;padding-left:5px" >
           <a href="/workshop/"><img src="image/slide-8.jpg" style="height:120px;width:200px"></img></a>
            <span>Workshops</span>
          </div>
          
    
        <div class="thumbnail col-xs-5 col-sm-5 col-md-2 col-sm-offset-1 col-xs-offset-1 col-md-offset-0" style="min-height:100px;padding-right:5px;padding-left:5px;">
           <a href="/mess/"><img src="image/slide-9.jpg" style="height:120px;width:200px"></img></a>
            <span>Messes</span>
          </div>

           <div class="thumbnail col-xs-5 col-sm-5 col-md-2" style="min-height:100px;padding-right:5px;padding-left:5px;//background:#9BBFD6" >
           <a href="/lhc/"><img src="image/slide-10.jpg" style="height:120px;width:200px"></img></a>
            <span>Lecture Hall</span>
          </div>


        

        </div><!-- container end -->
    
    </div><!-- content wrapper end -->
    
    <footer class="footer">
        <div class="footer-content">
            <div class="container-fluid">
                <div class="row duck">
                <div class="footer-col col-md-3 col-sm-4 about marginfooter">
                    <div class="footer-col-inner paddedfooter">
                        <h3>Academics</h3>
                        <ul>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Academics Programmes</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Departments</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Faculty</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Rules & Regulations</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Scholarships</a></li>
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->
               
                 <div class="footer-col col-md-3 col-sm-4 about marginfooter">
                    <div class="footer-col-inner paddedfooter">
                        <h3>Admissions</h3>
                        <ul>
                            <li><a href="#"><i class="fa fa-caret-right"></i> B.Tech/B.Arc</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> M.Tech/M.Sc</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> MCA/MBA</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> MS(research)</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Ph.D</a></li>
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->
               
                <div class="footer-col col-md-3 col-sm-4 about marginfooter">
                    <div class="footer-col-inner paddedfooter">
                        <h3>Students Life</h3>
                        <ul >
                            <li><a href="#"><i class="fa fa-caret-right"></i> Events</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Clubs & Associations</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Hostel & Messes</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Office Of Dean(students)</a></li>
                            
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->

                <div class="footer-col col-md-3 col-sm-4 about marginfooter">
                    <div class="footer-col-inner paddedfooter">
                        <h3>Other Links</h3>
                        <ul>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Tenders & Notices</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Job Opportunities</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> RTI</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Recal-Alumini</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> SiteMap</a></li>
                            
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->

    <div id="k-subfooter"><!-- subfooter -->
    
    	<div class="container"><!-- container -->
        
        	<div class="row"><!-- row -->
            
            	<div class="col-lg-12">
                
                	<p class="copy-text text-inverse">
                 <small class="copyright col-md-12 col-sm-12 col-xs-12 text-center">Copyright @ 2015 National Institute of Technology | Made with &#10084; by Delta Force</small>
                    </p>
                
                </div>
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- subfooter end -->
    

    <!-- jQuery -->

    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    
        <!-- Drop-down -->
    <script src="js/dropdown-menu.js"></script>
    
    
    <!-- Fancybox -->
	<script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script><!-- Fancybox media -->
    
    <!-- Responsive videos -->
    
    
    <!-- Audio player -->
	
    
    <!-- Pie charts -->
    <script src="js/jquery.easy-pie-chart.js"></script>
    
    <!-- Google Maps -->
    <script type="text/javascript">
        $('.dep').hide();
            $('.department').click(function(){
                $('.dep').toggle("slow");
            });
        
    </script>
    
    <!-- Theme -->
    <script src="js/theme.js"></script>
    
  </body>
</html>
