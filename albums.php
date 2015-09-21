<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>

    <title>Events</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="includes/css/bootstrap/css/bootstrap.min.css">
    <link href="includes/pagestorm/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="includes/pagestorm/css/coin-slider.css" />
    <link rel="stylesheet" type="text/css" href="includes/css/main.css" />
    <!--
      <script type="text/javascript" src="includes/pagestorm/js/cufon-yui.js"></script>
      <scridpt type="text/javascript" src="includes/pagestorm/js/cufon-marketingscript.js"></script>
    -->
    <script type="text/javascript" src="includes/pagestorm/js/jquery-1.4.2.min.js"></script>

    <!--
      <script type="text/javascript" src="includes/pagestorm/js/script.js"></script>
    -->

    <script type="text/javascript" src="includes/pagestorm/js/coin-slider.min.js"></script>

    <?php

      function getAccessToken() {
       $aCode = file_get_contents('https://graph.facebook.com/oauth/access_token?client_id=866515813415087&client_secret=5c19dd551cc00c0003fa196371dde23f&grant_type=client_credentials');
        return $aCode;
      } 

      
      $access_token = getAccessToken();

    ?>

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

            <div class="post_content">
              
              <!-- Place Content Here -->

              <div class="container-fluid">
                    
                    <!-- Using Javascript to load album data -->

              <!-- end place content -->
              </div>

            </div>

            <div class="clr"></div>

            <section class="wow">
              more
              <!-- When you scroll to this point, it shows the next slide -->
            </section>

          </div>

        </div>

        <div class="sidebar">
          <div class="gadget">

            <!-- Using Javascript to load this section -->
            <h2 class="star">Upcoming Events</h2>


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
      <!-- Footer inluded with javascript -->
    </div>

    <!-- Footer End --> 

  </div> <!-- Main -->

</body>
</html>

<script type="text/javascript" src="includes/pagestorm/js/cufon-yui.js"></script>
<script type="text/javascript" src="includes/pagestorm/js/cufon-marketingscript.js"></script>
<script type="text/javascript" src="includes/pagestorm/js/script.js"></script>
<script type="text/javascript" src="includes/pagestorm/js/coin-slider.min.js"></script>
<script type="text/javascript" src="includes/js/wow.min.js"> </script>
<script> 



facebook_pages = {
  "test" : "1456387134662284",
  "reochar" : "234249230011385"
}
//Facebook Page number

var page_number = facebook_pages.reochar;

// From get request
var album_number = "497119670391005"

// This comes calling oauth access token from PHP web server. 
var access_token = "<?php echo $access_token ?>"; 

var album_api_url = "https://graph.facebook.com/v2.4/"+page_number+"/albums?&fields=id,name,count,cover_photo{source}&"+access_token+"";


$('#footer').load("charity_site_bottom_frame.htm");
$('.gadget').load("layout_sidebar_right.html");

// Function fb_show_images(Load Images(url, target)
// Get Images via ajax
// then outputs in the images in the target area
// Requirements. you need an element called load-more

var photo_array = [];
var photo_index = 0;

function fb_show_images(url, target_element) {

  
  $.ajax({

    method: "GET",
    url: url,
    async: true,
    success : function(response) {

      console.log(response.data[0]);

      album_html = "";

      for (i = 0; i < response.data.length; i++) {

        console.log("adding photo item" + i);
        album_html += "<div class='album-wrapper'>";
        album_html += "<a href='photos.php?album_num=" + response.data[i].id + "'>";
        album_html += "<div class='album-text'>";
        album_html += "<h2>"+ response.data[i].name +"</h2>";
        album_html += "<h3> "+ response.data[i].count +" Photos </h3>";
        album_html += "</div>";
        album_html += " <img src='"+response.data[i].cover_photo.source+"' class='album-cover-photo responsive'/>";
        album_html += "</a>";
        album_html += "</div>";


        // At the last iteration of the loop append the items
        if(i + 1 == response.data.length ) {
          
          $(target_element).append(album_html);

        }

      }

      // }


      $('.album_photo').click(function(event) {
        event.preventDefault();
        photo_item_index = $(this).attr("data-photo-index");
        alert(photo_array[photo_item_index]);
      });



      var wow = new WOW({
        boxClass:     'wow',
        animateClass: 'animated',
        offset:       0,
        mobile:       true,
        live:         true,       
        callback:     function(box) {

                        if (response.paging.next === undefined) {
                          return false
                        } else {
                          fb_show_images(response.paging.next, target_element);
                        }
      
                      }
      }); // Wow.js end

          wow.init();

    } // Sucess reponse end
  
  }); // Ajax End

} // Function end

 

// Initialze the page loading function
fb_show_images(album_api_url, ".container-fluid");

</script>