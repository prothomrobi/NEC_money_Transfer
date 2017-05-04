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
                            <li><a href="cis_country.php">CIS Country</a></li>
                            <li><a href="europe.php">Europe</a></li>
                             <li><a href="middle_east.php">Middle East</a></li>
                            <li><a href="south_america.php">South America</a></li>
                           
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
                    <li class="active"><a href="tracking.php">Tracking</a>
                        
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
                        <h2>Tracking</h2>
                        <span class="sub_heading">We are Money Trasnfer Agency Specialised </span>
                    </div>
                    <nav id="breadcrumbs">
                        <ul>
                            <li>You are here:</li>
                            <li><a href="index.php">Home</a></li>
                            <li>Tracking</li>
                        </ul>
                    </nav>
                </div>
            </div>
            </section>
            </div>
          
        
        <section class="content about">
            <div class="container">
                <div class="row sub_content">
                 <div class="who">
                    <div class="col-md-12">
                     <div class="col-md-2">
                           
                     </div>
                      
                     <div class="col-md-8">
                        <h1 style="color: #8ABE42;">Track a transaction</h1>
                              
                        <p style="font-size: 15px;"><strong> Here’s the fastest way to check the status of your payment. No need to call Customer Service – our online results give you real-time, detailed progress as your payment speeds through the NEC network.</strong></p>
                         
                         <div class="track_box">
                              <h2 style="text-align: center;">Track Here </h2>
                             <div style="margin-left: 80px;"> 
                              <label style="width: 100%;font-size: 16px;"><b>Track Number ::</b></label>
                              <input style="width: 80%; height: 40px; margin-bottom: 10px; background-color: #FFF; box-shadow: 0 0 0 2px solid gray; background-image: none; border: 2px solid #ccc;" type="text" placeholder="  Enter Your Track Number" name="track" required><br><br>

                              <!-- <input class="trck_btn" type="submit" value="Track >>" > -->
                              <button  type="submit" style="width: 120px; margin-left: 400px; border-radius: 10px;">Track >></button>
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
    </section>
    <!--end wrapper-->
<?php include('footer.php');?>
</html>