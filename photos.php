<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <title>Events</title>

    <link rel="stylesheet" type="text/css" href="includes/css/bootstrap/css/bootstrap.min.css">
    <link href="includes/pagestorm/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="includes/pagestorm/css/coin-slider.css" />
    <link rel="stylesheet" type="text/css" href="includes/css/main.css" />
    <link rel="stylesheet" type="text/css" href="includes/css/animate.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


    <?php

      if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['album_num'])) {
        $album_number = $_GET['album_num'];
      }


      function getAccessToken() {
       $aCode = file_get_contents('https://graph.facebook.com/oauth/access_token?client_id=866515813415087&client_secret=5c19dd551cc00c0003fa196371dde23f&grant_type=client_credentials');
        return $aCode;
      } 

      
      $access_token = getAccessToken();
      $fields = "id,name,description,link,count"; # ,source - for the actual photo source;
      $fb_page_id = "234249230011385"; # 53249966765 1456387134662284 234249230011385

      // $json_link = "http://graph.facebook.com/v2.4/${fb_page_id}/albums?fields=${fields}&access_token=${access_token}";
      // $json = file_get_contents($json_link);
      // $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

      // $album_count = count($obj['data']);

    
      $api_call_string = "https://graph.facebook.com/v2.4/".$album_number."/photos/?fields=id,name,images,description&${access_token}";
      
      ?>

      <style>
        .image-container img {
          max-width: 100%;
          height: auto;

          border: 5px solid black;
          box-sizing: border-box;

          margin-bottom: 10px;
        }
      </style>

</head>

<body>


  <div class="main">

    <!-- Header plus navigation -->
    <!-- <div class="charity-top-frame">
      <script type="text/javascript">
      (function(){ $('.charity-top-frame').load('charity_site_top_frame.htm'); })();
      </script>
    </div> -->
    <!-- Navigation End -->

    <div class="header">

      <div class="header_resize">

        <div class="searchform"></div>

        <div class="menu_nav"></div>

        <!-- Clearfix-->
        <div class="clr"></div>

        <div class="logo">
          <h1><a href="includes/pagestorm/index.html">Photos</a></h1>
        </div>



        <!-- Clearfix-->
        <div class="clr"></div>

        <div class="slider">

       <!--    <div id="coin-slider"> 

            <a href="#">
              <img src="images/group2.jpg" width="960" height="360" alt="" />
              <span><big>Goodness</big><br />
              "Goodness is the only investment that never fails." ~ Henry David Thoreau.</span>
            </a> 

            <a href="#">
              <img src="images/participants2.jpg" width="960" height="360" alt="" />
              <span><big>Kindness</big><br />
              "No act of kindness, no matter how small, is every wasted." ~ Aesop.</span>
            </a> 

            <a href="#"><img  src="images/big group.jpg"width="960" height="360" alt="" />
              <span><big>Change</big><br />
              "You must be the change you wish to see in the world." ~ Mahatma Gandhi</span>
            </a>

          </div> <!-- Coin Slider End --> -->

          <div class="clr"></div>

        </div> <!-- Slider End -->

        <!-- Clearfix-->
        <div class="clr"></div>

      </div> <!-- Header Resize end -->

    </div> <!-- Header End -->

    <div class="content">
      <div class="content_resize">
        <div class="mainbar">
          <div class="article">

            <h2><span>Photos</span></h2>

            <div class="clr"></div>

            <!-- Remove this afterwards -->
            <style>

                .post_content img {
                  margin-bottom: 5px;
                }

            </style>



            <div class='container-fluid'>

              <div class='image-container'>
                <!-- Images will be loaded here -->
              </div>

              <section class="wow slideInLeft">Next</section>

            </div>


            <div class="clr"></div>
          </div>

        </div>

        <div class="sidebar">
          <div class="gadget">
            <h2 class="star">Upcoming Events</h2>

            <!-- Load Sidebar from one spot -->
  
            <!-- Script End -->

            <h2> Photos go here </h2>


          </div>

        </div>
        <div class="clr"></div>

      </div>

    </div>

    <div class="fbg">
      <div class="fbg_resize">

        <div class="clr"></div>
      </div>
    </div>

    <div class="footer">

      <div class="footer_resize">
        <p class="lf">&copy; Copyright <a href="#">Real Estate One Charitable Foundation </a></p>
        <p class="rf">Design by Dream <a href="http://www.dreamtemplate.com/">Web Templates</a></p>
        <div style="clear:both;"></div>
      </div>
    </div>

<!-- Footer with Navigation -->
<div id="footer">

</div>


<!-- Footer End --> 



</div> <!-- Main -->
</body>
</html>

<!-- Run once the document is ready -->
<script type="text/javascript" src="includes/pagestorm/js/cufon-yui.js"></script>
<script type="text/javascript" src="includes/pagestorm/js/cufon-marketingscript.js"></script>
<script type="text/javascript" src="includes/pagestorm/js/script.js"></script>
<script type="text/javascript" src="includes/pagestorm/js/coin-slider.min.js"></script>
<script type="text/javascript" src="includes/js/wow.min.js"> </script>
<script> 


var ajax_response;

$('#footer').load("charity_site_bottom_frame.htm");
$('.gadget').load("layout_sidebar_right.html");
 var call_string = '<?php echo $api_call_string ?>';

function forEach(arr, callback) {

    for (i = 0; i < arr.length; i++) {
      callback(arr[i]);
    }

}




// Function fb_show_images(Load Images(url, target)
// Get Images via ajax
// then outputs in the images in the target area
// Requirements. you need an element called load-more

function fb_show_images(url, target_element) {

  console.log("running show images");

  $.ajax({

    method: "GET",
    url: url,
    success : function(response) {

      var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {

      if (response.paging.next) {
        fb_show_images(response.paging.next, target_element);
      }
      
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    }
  });
        wow.init();

        $('.load-more').unbind("click");
        $('.load-more').click(function(){
       
         
        });

        // Present Each Photo ontot the page
        forEach(response.data, function(picture) {
          $(target_element).append("<img src='"+picture.images[0].source+"' />");

        });
        // =====================================
    }

  });

}


var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {
      alert('you scrolled me');
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    }
  });


// Initialze the page loading function
fb_show_images(call_string, ".image-container");




</script>