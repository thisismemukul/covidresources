<?php 
// if (!isset($_SESSION['username'])) {
//    header('location:../signup.php');
//    die();
// }
include 'db/config.php';
// require 'includes/classes/init.php';
mysqli_select_db($con,'resources');
// $username = $_SESSION['username'];
// $productid = $_SESSION['productid'];


 ?>
<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>covid-19</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.html">home</a></li>
                                        <li><a href="join-us.php">Join-Us </a>
                                            <!-- <a href="#">Join-Us <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="course_details.html">Search Resources</a></li>
                                                <li><a href="elements.html">Contribute Resources</a></li>
                                            </ul> -->
                                        </li>
                                        <li><a href="how.html">How it works?</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <!-- <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a id="share" href="#">Share</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                                <!-- <a href="#test-form" class="login popup-with-form">
                                    <i class="flaticon-user"></i>
                                    <span>log in</span>
                                </a> -->
                                <nav class="navbar navbar-expand-lg navbar-light bg-transperent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item">
                                          <a  style="color: #ffffff;" href="https://www.linkedin.com/company/the-leap-company-in/" target="_blank" class="nav-link">
                                            <i class="fa fa-linkedin fa-lg"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a  style="color: #ffffff;" href="https://wa.me/918769506494" target="_blank" class="nav-link">
                                                <i class="fa fa-whatsapp  fa-lg"></i>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                            <a  style="color: #ffffff;" href="https://www.instagram.com/theleapcompany/" target="_blank" class="nav-link">
                                                <i class="fa fa-instagram  fa-lg"></i>
                                              </a>
                                          </li>
                                    </ul>
                                </nav>
                                <!-- <div class="live_chat_btn">
                                    <a class="boxed_btn_orange" href="#">
                                        <i class="fa fa-linkedin"></i>
                                        <span>+10 378 467 3672</span>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area ">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_info">
                            <h3>Search Resources<br>
                            Medical Supplies,<br>
                            Oxygen ,Plasma</h3>
                            <!-- <a href="search_resources.php" class="boxed_btn">Search Resources</a> -->
                            <a style="transition: 0.5s;" href="#upload" class="boxed_btn">Search Now</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="illastrator_png">
                            <img src="img/banner/search_resources.svg" alt="search resources covid-19 relief">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area_start -->
    <div id="upload" class="about_area">
        <div class="container">
        <div class="container py-5">
  <div class="row py-5">
    <div class="col-lg-12 mx-auto">
      <div class="card rounded shadow border-0">
        <div class="card-body bg-white rounded">
          <div class="table-responsive">
            <table id="example" style="width:100%" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Resources</th>
                  <th>R_name</th>
                  <!-- <th>Name of Resources</th> -->
                  <th>State</th>
                  <th>City</th>
                  <th>Time Span</th>
                  <th>Quantity</th>
                  <th colspan="2" scope="colgroup">Contact</th>
                  <!-- <th>Entry Date</th> -->
                  <!-- <th>Approved</th> -->
                </tr>
              </thead>
              <tbody>
                        <?php 
        $results = mysqli_query($con,"SELECT * FROM resources WHERE aproved ='Y' ORDER BY ID DESC") or die("failed to query database".mysqli_error());
        // $rows = mysqli_fetch_array($results);
        if($results->num_rows > 0){
            while($rows = $results->fetch_assoc()){
            // $imageURL = 'assets/jan/'.$rows["post_image
            $ID = $rows['ID'];
    ?>
                            <tr> 
                                <td><?php echo ($rows['fname']);  ?></td>
                                <td><?php echo ($rows['resources']);  ?></td>
                                <td><?php echo ($rows['r_name']);  ?></td>
                                <td><?php echo ($rows['state_name']);  ?></td>
                                <td><?php echo ($rows['city_name']);  ?></td>
                                <td><?php echo ($rows['day']);  ?></td>
                                <td><?php echo ($rows['quantity']);  ?></td>
                                <!-- <td><a style="border-radius: 8px;  padding: 0px 5px;"  href="https://wa.me/?text=Name: *Vaibhav Oxygen*%0aContact: *9871979337*%0aResource: *Oxygen*%0aState: *Delhi*%0aDescription: *Manufacturer and traders of medical oxygen*%0aLocation: *Badarpur Delhi*%0aLink: *-*%0a_This resource was shared using *CoronaResources*_" class="boxed_btn"><i class="fa fa-whatsapp"></i></a></td> -->
                                <td> <?php echo "<a style='border-radius: 8px;  padding: 0px 5px;'  class='boxed_btn' href='https://wa.me/91".$rows["phone"]."' target='_blank'><i class='fa fa-whatsapp'></i> </a>";?></td>
                                <td> <?php echo "<a style='border-radius: 8px;  padding: 0px 5px;'  class='boxed_btn' href='tel:91".$rows["phone"]."' target='_blank'><i class='fa fa-phone'></i> </a>";?></td>
                                <td> <?php echo "<a style='border-radius: 8px;  padding: 0px 5px;'  class='boxed_btn' href='https://wa.me/?text=Name:".$rows["fname"]."%0aContact: ".$rows["phone"]."%0aResource: ".$rows["resources"]."%0aResource_Name: ".$rows["r_name"]."%0aState_Name: ".$rows["state_name"]."%0aCity_Name: ".$rows["city_name"]."%0aQuantity: ".$rows["quantity"]."%0aLink:%20https://theleapcompany.in%0a_This%20resource%20was%20shared%20using%20*Covid-Resources*%0aDistributed By: %20https://theleapcompany.in' target='_blank'><i class='fa fa-share'></i> </a>";?></td>
                              
                                <!-- <td></td> -->
                            </tr>
                           
                            <?php }
                    				}else{ ?>
                        
                    			<?php } ?>

                        </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        </div>
    </div>
    <!-- about_area_end -->

    


    <!-- subscribe_newsletter_Start -->
    <div class="subscribe_newsletter">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="newsletter_text">
                        <h3>Subscribe Newsletter</h3>
                        <p>Subscribe to our newsletter to get regular updates.</p>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6">
                    <div class="newsletter_form">
                        <h4>Submit your email to subscribe</h4>
                        <form action="#" class="newsletter_form">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe_newsletter_end -->

    <!-- footer -->
    <footer class="footer footer_bg_1">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                            <p>
                                We try our best so no one ever runs out of resources.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="https://theleapcompany.in" target="_blank">
                                            <i class="fa fa-globe"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://wa.me/918769506494" target="_blank">
                                            <i class="fa fa-whatsapp"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/theleapcompany/" target="_blank">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/company/the-leap-company-in/" target="_blank">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Resources
                            </h3>
                            <ul>
                                <li><a href="search_resources.php">Search Resources</a></li>
                                <li><a href="contribute_resources.html">Contribute Resources</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Usefull Links
                            </h3>
                            <ul>
                                <li><a href="https://news.google.com/topics/CAAqBwgKMMqAmAsw9KmvAw?hl=en-IN&gl=IN&ceid=IN%3Aen">Google News </a></li>
                                <li><a href="https://www.who.int/news-room/feature-stories/detail/the-effects-of-virus-variants-on-covid-19-vaccines">WHO </a></li>
                                <li><a href="https://github.com/CSSEGISandData/COVID-19">COVID Data Repository </a></li>
                                <!-- <li><a href="#">Link 4</a></li>
                                <li><a href="#">Link 5</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Join-Us
                            </h3>
                            <ul>
                                <li><a href="join-us.php">Join Our Community </a></li>
                                <li><a id="share_footer" href="#">Share with others </a></li>
                                <li><a href="mailto:info@theleapcompany.in">Any Suggestions? </a></li>
                                <!-- <li><a href="#">Link 4</a></li>
                                <li><a href="#">Link 5</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed &amp; Organized by<a href="https://theleapcompany.in" target="_blank"> theleapcompany</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->


    <!-- cities js -->
    <script>
        var resource_arr = new Array("Oxygen", "Plasma", "Medicine", "Ambulance",);

        var s_a = new Array();
        s_a[0]="";
        s_a[1]= "NULL";
        // s_a[1]= document.getElementById('hidediv').style.display="none";
        s_a[2]="A+ | A- | B+ | B- | O+ | O- | AB+ | AB- ";
        s_a[3]="Remdesivir | Fabiflu | Tocilizumab ";
        s_a[4]="NULL";

        function print_resource(resource_id){
            // given the id of the <select> tag as function argument, it inserts <option> tags
            var option_str = document.getElementById(resource_id);
            option_str.length=0;
            option_str.options[0] = new Option('Select resource','');
            option_str.selectedIndex = 0;
            for (var i=0; i<resource_arr.length; i++) {
                option_str.options[option_str.length] = new Option(resource_arr[i],resource_arr[i]);
            }
        }

        function print_rname(r_name_id, r_name_index){
            var option_str = document.getElementById(r_name_id);
            option_str.length=0;	// Fixed by Julian Woods
            option_str.options[0] = new Option('Select description','');
            option_str.selectedIndex = 0;
            var r_name_arr = s_a[r_name_index].split("|");
            for (var i=0; i<r_name_arr.length; i++) {
                option_str.options[option_str.length] = new Option(r_name_arr[i],r_name_arr[i]);
            }
        }
    </script>
    <script language="javascript">print_resource("res");</script>
    <!-- modernizr js -->
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/shareapi.js"></script>

    <script src="js/main.js"></script>
</body>

</html>