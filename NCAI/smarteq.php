<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>NCAI - Smart Earthquake</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- site icons -->
<?php  include("includes/stylesheets.php"); ?>
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body id="default_theme" class="it_service service_detail">
<!-- loader -->
<div class="bg_load"> <img class="loader_animation" src="images/loaders/loader_1.png" alt="#" /> </div>
<!-- end loader -->
<!-- header -->

<?php  include("includes/header.php"); ?>

<!-- end header -->
<!-- inner page banner -->
<div id="inner_banner" class="section " style="background: url('images/ncai.jpg');
  min-height: 245px;
    background-size: cover;
  background-position: center center;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Smart Earthquake</h1>
              <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Smart Earthquake</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<!-- section -->
<div class="section padding_layout_1 service_list">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-12 service_blog margin_bottom_50">
            <div class="full">
             
              <div class="service_cont">
                <h3 class="service_head">Smart Earthquake Management</h3>
                <p>The project main focus is on prediction of occurrence and frequency of earthquake and aftershocks. An intelligent system will be designed to help informing the regulatory authorities and taking necessary actions to avoid any further damage.  The seismic data for the prediction of earthquake/aftershocks will be taken from Earthquake Engineering Center (EEC), University of Engineering and Technology Peshawar Pakistan [18].</p> <p> The first step towards earthquake and aftershocks prediction will be thorough study about geodynamics of the region. Long term prediction will help in identifying regions with expected future earthquakes. The system proposed here will continuously monitor changes of known precursors for establishing local warning system. The relief and rescue services to the site of damage after the occurrence of earthquake usually takes time and instant relief cannot be provided in many cases. The AI model proposed here uses satellite image processing and remote sensing for identification of adjacent areas at high risk of earthquake and informing the relief services on time. The satellite images will reveal the extent of damage done which will help in identifying the type of relief service needed. </p>
              
              </div>
              
            </div>
          </div>
      
       
        </div>
      
        
      </div>

      <div class="col-md-6"> <div class="service_img"> <img class="img-responsive" src="images/Earthquake.png" alt="#" /> </div> </div>
     <h3 class="service_head">Advantages of Smart Earthquake Management</h3>


    </div>
     <div class="row">
               <i class="fa fa-check-circle" aria-hidden="true" style="color:#053b76;">&nbsp;</i>  Seismic monitoring plays important role in hazard assessment .
      </div>

      <div class="row">
               <i class="fa fa-check-circle" aria-hidden="true" style="color:#053b76;">&nbsp;</i>  Earthquake monitoring plays in the development of ground motion prediction models, which are a vital input into all aspects of earthquake engineering.
      </div>

       <div class="row">
               <i class="fa fa-check-circle" aria-hidden="true" style="color:#053b76;">&nbsp;</i>  Identification of locations within urban regions that are especially vulnerable to damaging earthquake ground motions.
      </div>
      <div class="row">
               <i class="fa fa-check-circle" aria-hidden="true" style="color:#053b76;">&nbsp;</i>  Consistent and reliable long-term recording and reporting to reduce uncertainties in magnitude, frequency, and location of earthquakes.
      </div>


   

      

       <div class="row">
               <i class="fa fa-check-circle" aria-hidden="true" style="color:#053b76;">&nbsp;</i> The statistical data obtained through experiments can be helpful in designing societies and buildings. 
      </div>

      <div class="row">
               <i class="fa fa-check-circle" aria-hidden="true" style="color:#053b76;">&nbsp;</i> The construction design will be in way to accommodate the largest ground motion that would be expected from the occurrence of past earthquakes. 
      </div>
      <div class="row">
                <div class="col-sm-0 "><i class="fa fa-check-circle" aria-hidden="true" style="color:#053b76;">&nbsp;</i> </div> <div class="col-md-11"> The frequency with which a given ground motion level is expected to occur at a site is calculated based on consideration of the frequency of occurrence of all of the
                possible earthquakes that could occur on all of the faults that are close enough to affect the site will be marked.</div> 
      </div>
  </div>
</div>
<!-- end section -->
<!-- section -->

<!-- end section -->
<!-- section -->

<!-- end section -->
<!-- section -->

<!-- end section -->
<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
            <div class="navbar-search">
              <form action="#" method="get" id="search-global-form" class="search-global">
                <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                <div class="search-global__note">Begin typing your search above and press return to search.</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Model search bar -->
<!-- footer -->

<?php  include("includes/footer.php");  ?>

<!-- end footer -->
<!-- js section -->

<?php  include("includes/scripts.php"); ?>

<?php  include("includes/map.php"); ?>
<!-- end google map js -->
</body>
</html>
