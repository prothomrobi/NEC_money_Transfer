<?php include('header.php'); ?>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style_about.css">
    
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" href="css/layout/wide.css" data-name="layout">
</head>
 
 <div class="navbar navbar-default navbar-static-top container full_nav" role="navigation">
        <!--  <div class="container">-->
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a>
                        <!--<ul class="dropdown-menu">
                            <li><a href="index_2.html">Home 2</a></li>
                            <li><a href="index_3.html">Home 3</a></li>
                            <li><a href="index_4.html">Home 4</a></li>
                            <li><a href="index_5.html">Home 5</a></li>
                        </ul>-->
                    </li>

                   <li><a href="#">Profile</a>
                        <ul class="dropdown-menu">
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="board_of_director.php">Board Of Director</a></li>
                            <li><a href="key_personal.php">Key Personal</a></li>
                            <li><a href="miss&vison.php">Mission & Vision </a></li>
                            <li><a href="md_message.php">MD Message </a></li>
                        </ul>
                    </li>

                    <li><a href="#">Global Partner</a>
                       <ul class="dropdown-menu">
                            <li><a href="asia.php">Asia</a></li>
                            <li><a href="africa.php">Africa</a></li>
                            <li><a href="america.php">America</a></li>
                            <li><a href="bangladesh.php">Bangladesh</a></li>
                            <li><a href="nepal.php">Nepal</a></li>
                            <li><a href="srilanka.php">Srilanka</a></li>
                            <li><a href="cis_country.php">CIS Country</a></li>
                            <li><a href="philipine.php">Philipine</a></li>
                        </ul>
                    </li>

                    <li><a href="services.php">Our Services</a>
                        
                    </li>

                    <li><a href="#">Agent Location</a>
                        <ul class="dropdown-menu">
                            <li><a href="asia.php">Asia</a></li>
                            <li><a href="africa.php">Africa</a></li>
                            <li><a href="cis_country.php">CIS Country</a></li>
                            <li><a href="europe.php">Europe</a></li>
                             <li><a href="middle_east.php">Middle East</a></li>
                            <li><a href="south_america.php">South America</a></li>
                           
                        </ul>
                    </li>
                    <li><a href="tracking.php">Tracking</a>
                        
                    </li>
                    <li><a href="#">Media Room</a>
                        <ul class="dropdown-menu">
                            <li><a href="news.php">News</a></li>
                            <li><a href="events.php">Events</a></li>
                            
                            
                                <li><a href="images.php">Images</a></li>
                                <li><a href="videos.php">Videos</a></li>
                              
                        </ul>
                    </li>
                    <li><a href="career.php">Careers</a>
                        <!--<ul class="dropdown-menu">
                            <li><a href="#">Rate Calculate</a></li>
                            <li><a href="#">Transaction Tracker </a></li>
                            <li><a href="#">Monitoring</a></li>
                            <li><a href="#">Policy & Operation </a></li>
                        </ul>-->
                    </li>

                    
                </ul>
            </div>
        </div><!--/.row -->
        <!--</div>--><!--/.container -->
   
    </div>
    
<!--End nav-->
	<!--End Header-->
	
	<!--start wrapper-->
     <section class="wrapper">
    <div style="width:100%;">
      <section style="width:100%;" class="page_head" data-href="images/page_header.jpg">
    
        <div class="container">
            <div class="row">
                
                    <div class="page_title">
                        <h2>Login Page</h2>
                        <span class="sub_heading">We are Money Trasnfer Agency Specialised </span>
                    </div>
                    <nav id="breadcrumbs">
                        <ul>
                            <li>You are here:</li>
                            <li><a href="index.php">Home</a></li>
                            <li>Login</li>
                        </ul>
                    </nav>
            </div>
        </div>
      </section>
    </div>
    <div class="container">
        <div class="row">

            <div class="row">
            <div class="col-md-12">
                <div class="col-md-2">
                    
                </div>
                <div class="col-md-8">
                    <div class="log_log_box">
                        <h1 class="log_hdr">Login Panel</h1>
                        <div class="login_box">
                            <h3 class="log_hdr2" >Login with Correct information</h3>
                            <div class="col-md-12 ">
                                <form action="/action_page.php">
                                  
                                  <div class="con_form">
                                    <label style="width: 100%;"><b>User Name</b></label>
                                    <input style="width: 100%; height: 40px; margin-bottom: 10px; background-color: #FFF; box-shadow: 0 0 0 2px solid gray; background-image: none; border: 2px solid #ccc;" type="text" placeholder="  Enter User Name" name="uname" required>

                                    <label style="width: 100%;"><b>Password</b></label>
                                    <input style="width: 100%; height: 40px; margin-bottom: 10px; background-color: #FFF; box-shadow: 0 0 0 2px solid gray; background-image: none; border: 2px solid #ccc;" type="password" placeholder="Enter Password" name="psw" required>

                                    <button type="submit" style="width: 80px; float: right; border-radius: 10px;">Login</button><br><br>
                                     <span class="psw">Forgot <a href="#">password?</a></span> 
                                    
                                </div>
                                </form>
                            </div>

                        </div>    
                     </div>
                    </div>
                    
                    
                
                </div>
                <div class="col-md-2">
                    
                </div>
            
            </div>
            </div>
            
        </div>
    </div>
          
        
        
    </section>
    <!--end wrapper-->
<?php include('footer.php');?>
</html>