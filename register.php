<?php include('header.php'); ?>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style_about.css">
    
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" href="css/layout/wide.css" data-name="layout">
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <meta charset=utf-8 />
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
                        <h2>Registration Page</h2>
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
                <div class="col-md-1"></div>
                <div class="col-md-8">
                    <div class="log_box">

                        <h1 class="log_hdr">Agent Registration Form </h1>
                        <div class="log_box2">
                            <h3 class="log_hdr2" >Please fill in the correct information. </h3>
                            <div class="col-md-12">
                              <form action="preview_form2.php" method="POST">
                                  
                                 <div class="con_form">

                                  <div class="col-md-12">
                                       
                                  </div>

                                  
                                    <div class="col-md-12" style="margin-left: 15px;">
                                        <div style="float: right;">
                                          <img id="img" src="#" alt="Image" />
                                          <input type='file' onchange="readURL(this);" name="image" style="width: 200px;" accept="image/jpeg, image/png"/>
                                        </div>

                                        <label style="width: 50%;"><b>FUll Name</b></label>
                                        <input style="width: 50%; height: 40px; margin-bottom: 10px; background-color: #FFF; box-shadow: 0 0 0 2px solid gray; background-image: none; border: 2px solid #ccc;" type="text" placeholder="  Enter Full Name" name="name">

                                         <label style="width: 50%;"><b>Father Name</b></label>
                                        <input style="width: 50%; height: 40px; margin-bottom: 10px; background-color: #FFF; box-shadow: 0 0 0 2px solid gray; background-image: none; border: 2px solid #ccc;" type="text" placeholder="  Enter Father Name" name="f_name" >
                                    </div>
                                 

                                  <div class="col-md-12">
                                    <div class="col-md-4" >

                                    <label style="width: 100%;"><b>Date Of Birth</b></label>
                                        <!-- <div class="form-group">
                                            <div class='input-group date' id='datetimepicker1'> -->
                                                <input type='text' name="date" class="form-control" style="width: 100%; height: 40px; margin-bottom: 10px; background-color: #FFF; box-shadow: 0 0 0 2px solid gray; background-image: none; border: 2px solid #ccc;" placeholder="yyyy/dd/mm/"  />
                                                
                                         <!--    </div>
                                        </div> -->
                                    <!-- <input style="width: 100%; height: 40px; margin-bottom: 10px; background-color: #FFF; box-shadow: 0 0 0 2px solid gray; background-image: none; border: 2px solid #ccc;" type="text" placeholder="  Enter User Name" name="uname" required> -->
                                  </div>
                                  <div class="col-md-4">
                                    <label style="width: 100%;"><b>Birth City</b></label>
                                    <input style="width: 100%; height: 40px; margin-bottom: 10px; background-color: #FFF; box-shadow: 0 0 0 2px solid gray; background-image: none; border: 2px solid #ccc;" type="text" placeholder="Enter Birth City" name="b_city" >
                                  </div>
                                  <div class="col-md-4">
                                    <label style="width: 100%;"><b>Birth Country</b></label>
                                    <input style="width: 100%; height: 40px; margin-bottom: 10px; background-color: #FFF; box-shadow: 0 0 0 2px solid gray; background-image: none; border: 2px solid #ccc;" type="text" placeholder="Enter Birth Country" name="b_country" >
                                  </div>
                                  </div>
                                  <div class="col-md-12" style="margin-left: 15px;">
                                    <label style="width: 50%;"><b>Nationality</b></label>
                                    <input style="width: 50%; height: 40px; margin-bottom: 10px; background-color: #FFF; box-shadow: 0 0 0 2px solid gray; background-image: none; border: 2px solid #ccc;" type="text" placeholder="  Enter Nationality" name="nationality" >
                                  </div>
                                  <div class="col-md-12">
                                      <div class="col-md-4">
                                    <label style="width: 100%;"><b>Division/Region</b></label>
                                    <input style="width: 100%; height: 40px; margin-bottom: 10px; background-color: #FFF; box-shadow: 0 0 0 2px solid gray; background-image: none; border: 2px solid #ccc;" type="text" placeholder="  Enter Division/Region" name="region" >
                                  </div>
                                  <div class="col-md-4">
                                    <label style="width: 100%;"><b>City/District</b></label>
                                    <input style="width: 100%; height: 40px; margin-bottom: 10px; background-color: #FFF; box-shadow: 0 0 0 2px solid gray; background-image: none; border: 2px solid #ccc;" type="text" placeholder="Enter City/District" name="city" >
                                  </div>
                                  <div class="col-md-4">
                                    <label style="width: 100%;"><b>City/District Code :</b></label>
                                    <input style="width: 100%; height: 40px; margin-bottom: 10px; background-color: #FFF; box-shadow: 0 0 0 2px solid gray; background-image: none; border: 2px solid #ccc;" type="text" placeholder="Enter City/District Code" name="city_code">
                                  </div>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="col-md-4">
                                    <label style="width: 100%;"><b>State/Province :</b></label>
                                    <input style="width: 100%; height: 40px; margin-bottom: 10px; background-color: #FFF; box-shadow: 0 0 0 2px solid gray; background-image: none; border: 2px solid #ccc;" type="text" placeholder="  Enter State/Province" name="state" >
                                  </div>
                                  <div class="col-md-4">
                                    <label style="width: 100%;"><b>State/Province Code :</b></label>
                                    <input style="width: 100%; height: 40px; margin-bottom: 10px; background-color: #FFF; box-shadow: 0 0 0 2px solid gray; background-image: none; border: 2px solid #ccc;" type="text" placeholder="Enter State/Province Code" name="state_code" >
                                  </div>
                                  <div class="col-md-4">
                                    <label style="width: 100%;"><b>Post Code :</b></label>
                                    <input style="width: 100%; height: 40px; margin-bottom: 10px; background-color: #FFF; box-shadow: 0 0 0 2px solid gray; background-image: none; border: 2px solid #ccc;" type="text" placeholder="Enter Post Code" name="p_code" >
                                  </div>
                                  </div>
                                  <div class="col-md-12" style="margin-left: 15px;">
                                    <label style="width: 50%;" style="margin-left: 15px;"><b>Mobile Number :</b></label>
                                    <input style="width: 50%; height: 40px; margin-bottom: 10px; background-color: #FFF; box-shadow: 0 0 0 2px solid gray; background-image: none; border: 2px solid #ccc;" type="text" placeholder="  Enter Mobile Number" name="mobile" >
                                  </div>
                                  <div class="col-md-12" style="margin-left: 15px;">
                                    <label style="width: 50%;" style="margin-left: 15px;"><b>Phone Number :</b></label>
                                    <input style="width: 50%; height: 40px; margin-bottom: 10px; background-color: #FFF; box-shadow: 0 0 0 2px solid gray; background-image: none; border: 2px solid #ccc;" type="text" placeholder="  Enter Phone Number" name="phone" >
                                  </div>
                                  <div class="col-md-12" style="margin-left: 15px;">
                                    <label style="width: 50%;" style="margin-left: 15px;"><b>Fax Number :</b></label>
                                    <input style="width: 50%; height: 40px; margin-bottom: 10px; background-color: #FFF; box-shadow: 0 0 0 2px solid gray; background-image: none; border: 2px solid #ccc;" type="text" placeholder="  Enter Fax Number" name="fax">
                                  </div>
                                  <div class="col-md-12" style="margin-left: 15px;">
                                    <label style="width: 50%;" style="margin-left: 15px;"><b>E-mail :</b></label>
                                    <input style="width: 50%; height: 40px; margin-bottom: 10px; background-color: #FFF; box-shadow: 0 0 0 2px solid gray; background-image: none; border: 2px solid #ccc;" type="email" placeholder="  Enter E-mail" name="email" >
                                  </div>
                                  <div class="col-md-12" style="margin-left: 15px;">
                                    <label style="width: 50%;" style="margin-left: 15px;"><b>Contract Person :</b></label>
                                    <input style="width: 50%; height: 40px; margin-bottom: 10px; background-color: #FFF; box-shadow: 0 0 0 2px solid gray; background-image: none; border: 2px solid #ccc;" type="text" placeholder="  Enter Contract Person" name="c_person" >
                                  </div>
                                  <div class="col-md-12" style="margin-left: 15px;">
                                    <label style="width: 100%;" style="margin-left: 15px;"><b>Address :</b></label>
                                    <input style="width: 100%; height: 40px; margin-bottom: 10px; background-color: #FFF; box-shadow: 0 0 0 2px solid gray; background-image: none; border: 2px solid #ccc;" type="text" placeholder="  Enter Address " name="address" >
                                  </div>

                                  <div class="col-md-12" style="margin:0px 0px 0px 15px;">
                                    <div style="float: left;">
                                      <img id="sign" src="#" alt="Signature" />
                                      <input type='file' onchange="readSign(this);" name="sign" style="width: 200px;" />
                                    </div>   
                                  </div>

                                 <div class="col-md-12" >
                                 <button style="width: 100px; float: right; border-radius: 10px; margin-right:15px;" name="submit" type="submit">Preview</button>
                                 </div><br>
                                 

                                  </div>

                                  
                             </form>
                            </div>
                        </div>
                    </div>
                    
                
                </div>
                <div class="col-md-2 d_form">
                    <h3 style="text-align: center;background-color: #8ABE42; color: #fff;">Download Form</h3>

                    <div>
                        <a class="fa fa-download" aria-hidden="true" href="images/form/agent_form.pdf" target="_blank">  Agent Form</a><br>
                        <a class="fa fa-download" aria-hidden="true" href="images/form/birth_form.pdf" target="_blank">  Information Form</a>
                       <!-- <img border="0" src="images/form/web.jpg" alt="No file avialabel" width="104" height="142"> -->
                       </a>
                    </div>
                </div>
            
            </div>
            </div>
            
        </div>
    </div>
       
</section>



<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>

<script type="text/javascript">
  
    $(function () {
                $('#datetimepicker1').datetimepicker();
            });



     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(145);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

     function readSign(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#sign')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(80);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    



    
</script>
    <!--end wrapper-->
<?php include('footer.php');?>
</html>