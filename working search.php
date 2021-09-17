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
$limit = isset($_POST["limit-records"]) ? $_POST["limit-records"] : 5000;
	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	$start = ($page - 1) * $limit;
	$result = $con->query("SELECT * FROM resources WHERE aproved ='Y' ORDER BY ID DESC LIMIT $start, $limit");
	$resources = $result->fetch_all(MYSQLI_ASSOC);

	$result1 = $con->query("SELECT count(ID) AS ID FROM resources");
	$custCount = $result1->fetch_all(MYSQLI_ASSOC);
	$total = $custCount[0]['ID'];
	$pages = ceil( $total / $limit );

	$Previous = $page - 1;
	$Next = $page + 1;

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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

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
                                        <li><a id="share" href='https://wa.me/?text=Covid Resources: "http://covidresource.ml"%0aWho We Are?: "We are a group of youngsters who want that no one loses their close ones just because of not having access to the resources which someone else is having and they cant find it. We are here to provide you with all we can. We are trying our best so that everyone gets the resources they are in need of."%0aLink:%20http://www.covidresource.ml%0a_This%20resource%20was%20shared%20using%20*Covid-Resources*%0aDistributed By: %20https://theleapcompany.in'>Share</a></li>
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
        <div class="col-lg-12 py-5">
        <div class="row mb-4">
                <div class="text-center col-md-4">
				<form method="post" action="#">
                        <select style='border-radius: 8px;  padding: 2px 7px;' class="boxed_btn" name="limit-records" ID="limit-records">
							<option disabled="disabled" selected="selected">---Limit Records---</option>
							<?php foreach([10,30,50,100,500] as $limit): ?>
								<option <?php if( isset($_POST["limit-records"]) && $_POST["limit-records"] == $limit) echo "selected" ?> value="<?= $limit; ?>"><?= $limit; ?></option>
							<?php endforeach; ?>
						</select>
					</form>
				</div>
                <div class="text-center form-group form-contact col-md-4">
                <input class="form-control" id="myInput" type="text" placeholder="Search..">
				</div>
		</div>

        <div style="height: 600px; overflow-y: auto;">
			<table ID="myTable" class="table table-striped table-bordered table-list-search">
	        	<thead>
	                <tr>
                    <th>Name</th>
                  <th>Resources
                  <!-- <select id='filterText' style='border-radius: 8px;  padding: 2px 7px; display:inline-block;' class="boxed_btn" onchange='filterText()' onchange="print_rname('resource', this.selectedIndex);" name ="resources" class="frm-field required"></select> -->
                  <select id="filterText" style='border-radius: 8px;  padding: 2px 7px; display:inline-block;' class="from-control boxed_btn" onchange="print_rname('resource', this.selectedIndex);filterText();"  name ="resources" class="frm-field required" required></select>
                  <!-- <select id='filterText' style='border-radius: 8px;  padding: 2px 7px; display:inline-block;' class="boxed_btn" onchange='filterText()'>
								<option disabled selected>Select</option>
								<option value='Oxygen'>Oxygen</option>
								<option value='Plasma'>Plasma</option>
								<option value='Medicine'>Medicine</option>
								<option value='Medical Facilities'>Medical Facilities</option>
								<option value='Food'>Food</option>
								<option value='all'>All</option>
							</select> -->
                  </th>
                  <th>R_name
                  <select  style='border-radius: 8px;  padding: 2px 7px; display:inline-block;' class="from-control boxed_btn" id ="resource" onchange='filterresource()' name ="r_name" class="frm-field required">
                  <option disabled selected>Select</option>
								<option value='Remdesivir'>Remdesivir</option>
								<option value='Fabiflu'>Fabiflu</option>
								<option value='Tocilizumab'>Tocilizumab</option>
								<option value='Cylinders'>Cylinders</option>
								<option value='Refills'>Refills</option>
								<option value='Cans'>Cans</option>
								<option value='Concetrators'>Concetrators</option>
								<option value='Hospital'>Hospital</option>
								<option value='Ambulance'>Ambulance</option>
								<option value='Bed'>Bed</option>
								<option value='A+'>A+</option>
								<option value='A-'>A-</option>
								<option value='B+'>B+</option>
								<option value='B-'>B-</option>
								<option value='O+'>O+</option>
								<option value='O-'>O-</option>
								<option value='AB+'>AB+</option>
								<option value='AB-'>AB-</option>
								<option value='all'>All</option></select>

                  <!-- <select  id='filterrname' style='border-radius: 8px;  padding: 2px 7px; display:inline-block;' class="boxed_btn" onchange='resource()' name ="r_name" class="frm-field required"></select> -->

                  <!-- <select id='filterrname' style='border-radius: 8px;  padding: 2px 7px; display:inline-block;' class="boxed_btn" onchange='filterrname()'>
								<option disabled selected>Select</option>
								<option value='Remdesivir'>Remdesivir</option>
								<option value='Fabiflu'>Fabiflu</option>
								<option value='Tocilizumab'>Tocilizumab</option>
								<option value='Cylinders'>Cylinders</option>
								<option value='Refills'>Refills</option>
								<option value='Cans'>Cans</option>
								<option value='Hospital'>Hospital</option>
								<option value='Ambulance'>Ambulance</option>
								<option value='Bed'>Bed</option>
								<option value='Tiffin box'>Tiffin box</option>
								<option value='A+'>A+</option>
								<option value='A-'>A-</option>
								<option value='B+'>B+</option>
								<option value='B-'>B-</option>
								<option value='O+'>O+</option>
								<option value='O-'>O-</option>
								<option value='AB+'>AB+</option>
								<option value='AB-'>AB-</option>
								<option value='all'>All</option>
							</select> -->
                  </th>
                  <!-- <th>Name of Resources</th> -->
                  <th>State
                  <select id='filterstate' style='border-radius: 8px;  padding: 2px 7px; display:inline-block;' class="boxed_btn" onchange='filterstate()'>
								<option disabled selected>Select</option>
								<option value="ANDHRA PRADESH">Andhra Pradesh</option>
                                <option value="ANDAMAN AND NICOBAR ISLANDS">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="ARUNACHAL PRADESH">Assam</option>
                                <option value="BIHAR">Bihar</option>
                                <option value="CHANDIGARH">Chandigarh</option>
                                <option value="CHHATTISGARH">Chhattisgarh</option>
                                <option value="DADAR AND NAGAR HAVELI">Dadar and Nagar Haveli</option>
                                <option value="DAMAN AND DIU">Daman and Diu</option>
                                <option value="DELHI">Delhi</option>
                                <option value="LAKSHADWEEP">Lakshadweep</option>
                                <option value="PUDUCHERRY">Puducherry</option>
                                <option value="GOA">Goa</option>
                                <option value="GUJARAT">Gujarat</option>
                                <option value="HARYANA">Haryana</option>
                                <option value="HIMACHAL PRADESH">Himachal Pradesh</option>
                                <option value="JAMMU AND KASHMIR">Jammu and Kashmir</option>
                                <option value="JHARKHAND">Jharkhand</option>
                                <option value="KARNATAKA">Karnataka</option>
                                <option value="KERALA">Kerala</option>
                                <option value="MADHYA PRADESH">Madhya Pradesh</option>
                                <option value="MAHARASHTRA">Maharashtra</option>
                                <option value="MANIPUR">Manipur</option>
                                <option value="MEGHALAYA">Meghalaya</option>
                                <option value="MIZORAM">Mizoram</option>
                                <option value="NAGALAND">Nagaland</option>
                                <option value="ODISHA">Odisha</option>
                                <option value="PUNJAB">Punjab</option>
                                <option value="RAJASTHAN">Rajasthan</option>
                                <option value="SIKKIM">Sikkim</option>
                                <option value="TAMIL NADU">Tamil Nadu</option>
                                <option value="TELANGANA">Telangana</option>
                                <option value="TRIPURA">Tripura</option>
                                <option value="UTTAR PRADESH">Uttar Pradesh</option>
                                <option value="UTTARAKHAND">Uttarakhand</option>
                                <option value="WEST BENGAL">West Bengal</option>
								<option value='all'>All</option>
							</select>
                  </th>
                  <th>City</th>
                  <th>Quantity</th>
                  <th colspan="2" scope="colgroup">Contact</th>
                  <!-- <th>Address</th> -->
	              	</tr>
	          	</thead>
	        	<tbody>
	        		<?php foreach($resources as $rows) :  ?>
		        		<tr class="content"> 
                                <td><?php echo ($rows['fname']);  ?></td>
                                <td><?php echo ($rows['resources']);  ?></td>
                                <td><?php echo ($rows['r_name']);  ?></td>
                                <td><?php echo ($rows['state_name']);  ?></td>
                                <td><?php echo ($rows['city_name']);  ?></td>
                                <td><?php echo ($rows['quantity']);  ?></td>
                                <!-- <td><a style="border-radius: 8px;  padding: 0px 5px;"  href="https://wa.me/?text=Name: *Vaibhav Oxygen*%0aContact: *9871979337*%0aResource: *Oxygen*%0aState: *Delhi*%0aDescription: *Manufacturer and traders of medical oxygen*%0aLocation: *Badarpur Delhi*%0aLink: *-*%0a_This resource was shared using *CoronaResources*_" class="boxed_btn"><i class="fa fa-whatsapp"></i></a></td> -->
                                <td> <?php echo "<a style='border-radius: 8px;  padding: 0px 5px;'  class='boxed_btn' href='https://wa.me/91".$rows["phone"]."' target='_blank'><i class='fa fa-whatsapp'></i> </a>";?></td>
                                <td> <?php echo "<a style='border-radius: 8px;  padding: 0px 5px;'  class='boxed_btn' href='tel:91".$rows["phone"]."' target='_blank'><i class='fa fa-phone'></i> </a>";?></td>
                                <td> <?php echo "<a style='border-radius: 8px;  padding: 0px 5px;'  class='boxed_btn' href='https://wa.me/?text=Name:".$rows["fname"]."%0aContact: ".$rows["phone"]."%0aResource: ".$rows["resources"]."%0aResource_Name: ".$rows["r_name"]."%0aState_Name: ".$rows["state_name"]."%0aCity_Name: ".$rows["city_name"]."%0aQuantity: ".$rows["quantity"]."%0aLink:%20https://theleapcompany.in%0a_This%20resource%20was%20shared%20using%20*Covid-Resources*%0aDistributed By: %20https://theleapcompany.in' target='_blank'><i class='fa fa-share'></i> </a>";?></td>
                                <!-- <td></td> -->
                            </tr>
	        		<?php endforeach; ?>
	        	</tbody>
      		</table>
              <div class="col-md-12 text-center ">
				<nav aria-label="Page navigation">
					<ul class="pagination">
				    <li style="margin: 2px;">
				      <a style='border-radius: 8px;  padding: 2px 7px;' class="boxed_btn" href="search_resources.php?page=<?= $Previous; ?>" aria-label="Previous">
				        <span aria-hIDden="true">&laquo; Previous</span>
				      </a>
				    </li>

				    <?php for($i = 1; $i<= $pages; $i++) : ?>
				    	<li style="margin: 2px;"><a style='border-radius: 8px;  padding: 2px 7px;' class="boxed_btn" href="search_resources.php?page=<?= $i; ?>"><?= $i; ?></a></li>
				    <?php endfor; ?>
                    
				    <li style="margin: 2px;">
				      <a style='border-radius: 8px;  padding: 2px 7px;' class="boxed_btn" href="search_resources.php?page=<?= $Next; ?>" aria-label="Next">
				        <span aria-hIDden="true">Next &raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
                <button style='border-radius: 8px;  padding: 2px 7px; display:inline-block;' type="button" class="boxed_btn"><a style="color: #fff;" href="#our_latest_blog">Other Important Links
</a></button>
			</div>
            

      		
		</div>
        
<div id="our_latest_blog" class="our_latest_blog">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>Other Important Links</h3>
                        <h5><strong>Hope you will find them helpful.</strong></h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_latest_blog">
                        <div class="content_blog">
                            <div class="blog_meta">
                                <h3><a href="http://helpinghandsgroup.in/covid19/"  class="popup2" target="_blank">Helpinghandsgroup covid19</a></h3>
                            </div>
                            <p class="blog_text">
                            Twitter Search for COVID.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_latest_blog">
                        <div class="content_blog">
                            <div class="blog_meta">
                                <h3><a href="https://covidfacts.in/" class="popup2" target="_blank">Covid Facts</a></h3>
                            </div>
                            <p class="blog_text">
                                Corwdsourcing of data.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_latest_blog">
                        <div class="content_blog">
                            <div class="blog_meta">
                                <h3><a href="https://t.me/resoucescovid" class="popup2"  target="_blank">Join US</a></h3>
                            </div>
                            <p class="blog_text">
                            We try our best so that no one ever runs out of resources.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_latest_blog">
                        <div class="content_blog">
                            <div class="blog_meta">
                                <h3><a href="https://news.google.com/topics/CAAqBwgKMMqAmAsw9KmvAw?hl=en-IN&gl=IN&ceid=IN%3Aen"  class="popup2" target="_blank">Google News</a></h3>
                            </div>
                            <p class="blog_text">
                                See daily updates on coronavirus (COVID-19) on Google News.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_latest_blog">
                        <div class="content_blog">
                            <div class="blog_meta">
                                <h3><a href="https://www.who.int/news-room/feature-stories/detail/the-effects-of-virus-variants-on-covid-19-vaccines" class="popup2" target="_blank">World Health Organization (WHO)</a></h3>
                            </div>
                            <p class="blog_text">
                                Firmament morning sixth subdue darkness creeping gathered divide.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_latest_blog">
                        <div class="content_blog">
                            <div class="blog_meta">
                                <h3><a href="https://github.com/CSSEGISandData/COVID-19" class="popup2"  target="_blank">COVID-19 Data Repository by the Center for Systems Science and Engineering (CSSE) at Johns Hopkins University</a></h3>
                            </div>
                            <p class="blog_text">
                                Firmament morning sixth subdue darkness creeping gathered divide.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
        </div>
    </div>

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
                                <li><a href="https://covidrelief.glideapp.io/">COVID Relief Guide</a></li>
                                <li><a href="https://covid19-twitter.in/">Twitter search COVID</a></li>
                                <li><a href="https://covidfacts.in/">COVID Facts</a></li>
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
    <script type="text/javascript">

	//initialize the 3 popup css class names - create more if needed
	var matchClass=['popup1','popup2','popup3'];
	//Set your 3 basic sizes and other options for the class names above - create more if needed
	var popup1 = 'width=400,height=300,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=20,top=20';
	var popup2 = 'width=800,height=600,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=20,top=20';
	var popup3 = 'width=1000,height=750,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=20,top=20';
	
	//When the link is clicked, this event handler function is triggered which creates the pop-up windows 
	function eventHandler() {
			var x = 0;
			var popupSpecs;
			//figure out what popup size, etc to apply to the click
			while(x < matchClass.length){
					if((" "+this.className+" ").indexOf(" "+matchClass[x]+" ") > -1){
						popupSpecs = matchClass[x];
						var popurl = this.href;
					}
			x++;
			}
		//Create a "unique" name for the window using a random number
		var popupName = Math.floor(Math.random()*10000001);
		//Opens the pop-up window according to the specified specs
		newwindow=window.open(popurl,popupName,eval(popupSpecs));
		return false;
	}

	//Attach the onclick event to all your links that have the specified CSS class names
	function attachPopup(){
		var linkElems = document.getElementsByTagName('a'),i;
		for (i in linkElems){
			var x = 0;
			while(x < matchClass.length){
				if((" "+linkElems[i].className+" ").indexOf(" "+matchClass[x]+" ") > -1){
					linkElems[i].onclick = eventHandler;
				}
			x++;
			}
		}
	}

	//Call the function when the page loads
	window.onload = function (){
	    attachPopup();
	}
</script>

    <script>
        var resource_arr = new Array("all","Oxygen", "Plasma", "Medicine", "Medical Facilities", "Food");

        var s_a = new Array();
        s_a[0]="";
        s_a[1]="Cylinders | Refills | Cans | Concetrators | A+ | A- | B+ | B- | O+ | O- | AB+ | AB- | Remdesivir | Fabiflu | Tocilizumab | Hospital | Ambulance | Bed";
        s_a[2]= "Cylinders | Refills | Cans | Concetrators | NULL";
        // s_a[1]= document.getElementById('hidediv').style.display="none";
        s_a[3]="A+ | A- | B+ | B- | O+ | O- | AB+ | AB- | NULL";
        s_a[4]="Remdesivir | Fabiflu | Tocilizumab | NULL";
        s_a[5]="Hospital | Ambulance | Bed | NULL";
        s_a[6]="NULL";
        // s_a[6]="Cylinders | Refills | Cans | Concetrators | A+ | A- | B+ | B- | O+ | O- | AB+ | AB- | Remdesivir | Fabiflu | Tocilizumab | Hospital | Ambulance | Bed | all";
        


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
    <script language="javascript">print_resource("filterText");</script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#limit-records").change(function(){
			$('form').submit();
		})
	})
</script>
<script>
    function filterstate()
	{  
		var rex = new RegExp($('#filterstate').val());
		if(rex =="/all/"){clearFilter()}else{
			$('.content').hide();
			$('.content').filter(function() {
			return rex.test($(this).text());
			}).show();
	}
	}

    function filterresource()
	{  
		var rex = new RegExp($('#resource').val());
		if(rex =="/all/"){clearFilter()}else{
			$('.content').hide();
			$('.content').filter(function() {
			return rex.test($(this).text());
			}).show();
	}
	}
function filterText()
	{  
		var rex = new RegExp($('#filterText').val());
		if(rex =="/all/"){clearFilter()}else{
			$('.content').hide();
			$('.content').filter(function() {
			return rex.test($(this).text());
			}).show();
	}
	}
	
function clearFilter()
	{
		$('.filterText').val('');
        $('.resource').val('');
        $('.filterstate').val('');
		$('.content').show();
        
window.location.reload();
	}
</script>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>



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
    <!-- 6427267118 freenom -->
    <script src="js/main.js"></script>
</body>

</html>

