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
      } else {
        # header("location:http://10.9.63.84/reochar/albums.php");
      }


      function getAccessToken() {
       $aCode = file_get_contents('https://graph.facebook.com/oauth/access_token?client_id=866515813415087&client_secret=5c19dd551cc00c0003fa196371dde23f&grant_type=client_credentials');
        return $aCode;
      } 
      
     # $access_token = getAccessToken();

     # $fields = "id,name,description,link,count"; # ,source - for the actual photo source;
     # $fb_page_id = "234249230011385"; # 53249966765 1456387134662284 234249230011385

      // $json_link = "http://graph.facebook.com/v2.4/${fb_page_id}/albums?fields=${fields}&access_token=${access_token}";
      // $json = file_get_contents($json_link);
      // $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

      // $album_count = count($obj['data']);

      # https://graph.facebook.com/v2.4/631299500306354/photos/?fields=id,name,images,description&access_token=866515813415087|LqFm_mD1uClKzfuNwJF2AJG8ndI
      #$api_call_photos = "https://graph.facebook.com/v2.4/".$album_number."/photos/?limit=15&fields=id,name,images,description&${access_token}";

      ?>  

      <style>

        body {
          /*overflow: hidden;*/
        }

        i {
            background-position: 50%;
            background-size: cover;
            display: block;
            width: 290px;
            margin: 0px auto;
            box-shadow: 1px 1px 5px gray;
            margin-bottom: 15px;
        }


        .image-links {
          height: 250px;
          background-position: center;
          background-size: cover;
        }


        .album_photo {

          height: 170px;
          background-size: cover;
          background-position: center; 
        }


        .vertical-center {
          display: inline-block;
          height: 100%;
          vertical-align: middle;
        }


        .image-modal {
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          position: fixed;
          width: 100%;
          height: 100%;
          background-color: rgba(0,0,0,0.7);
          overflow: scroll;
          display: none;
        }

        .image-stage {
          position: relative;
          display: block;
          background-color: white;
          width: 900px;
          max-height: 900px;
          max-width: 900px;
          margin: 0px auto;
          background-color: black;
        } 

        .image-stage img {

          position: relative;
          display: block;
          max-width: 550px;
          max-height: 550px;  
          margin: 0px auto;   
          
        }

        .modal-nav {
          display: block;
          background-color: white;
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
        <div class="mainbar photo_content">
          <div class="article">

            <h2><span>Photos</span></h2>

            <div class="clr"></div>

  




              <div class='image-container'>
                <!-- Images will be loaded here -->
              </div>


              <div class="image-modal">


                <div class="image-stage">
                  <!-- <img src="http://placehold.it/500x500" /> -->
                <div class="modal-nav">
                  <button id="modal-next"> Next </button>
                  <button id="modal-prev"> Previous </button>
                  <button id="modal-close"> Close </button>
                </div>


                  
                </div>
                
              </div>


              <div class="wow"> 
                Images will be loaded once the users scrolls here
              </div>
      


            <div class="clr"></div>
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
    <section class="wow">
                Hello this is a test
                <!-- When you scroll to this point, it shows the next slide -->
              </section>
</body>
</html>

<!-- Run once the document is ready -->
<script type="text/javascript" src="includes/pagestorm/js/cufon-yui.js"></script>
<script type="text/javascript" src="includes/pagestorm/js/cufon-marketingscript.js"></script>
<script type="text/javascript" src="includes/pagestorm/js/script.js"></script>
<script type="text/javascript" src="includes/pagestorm/js/coin-slider.min.js"></script>
<script type="text/javascript" src="includes/js/wow.min.js"> </script>
<script> 


// From get request
// 616565195113118 bike photos
// Cool photo 1470046549963009
var album_number = '616565195113118';

// This comes calling oauth access token from PHP web server. 
var access_token = "access_token=866515813415087|LqFm_mD1uClKzfuNwJF2AJG8ndI"; 

var photo_api_url = "https://graph.facebook.com/v2.4/"+album_number+"/photos/?limit=15&fields=id,name,images,description&"+access_token+"";



$('#footer').load("charity_site_bottom_frame.htm");
$('.gadget').load("layout_sidebar_right.html");

// Function fb_show_images(Load Images(url, target)
// Get Images via ajax
// then outputs in the images in the target area
// Requirements. you need an element called load-more

var fb = {
  "thumbnails" :[],
  "photos" : [],
  "photo_index" : 0,
  "active_photo" : 0,
  "p_next_url" : "",
  "p_prev_url" : "",
  "get_images" : function(url) {

    $.ajax({

      method: "GET",
      url: url,
      async: true,
      success : function(response) {

 
        for (i = 0; i < response.data.length; i++) {
          fb.thumbnails.push(response.data[i].images[4].source);
          fb.photos.push(response.data[i].images[0].source);
        }

        fb.p_next_url = response.paging.next;
        

        fb.show_images(response.data, ".image-container");


        $('.album_photo').unbind("click");

        // Open modal when item is clcked
        $('.album_photo').click( function(event) {

          selected_index = $(this).attr("data-photo-index");
          fb.open_modal(selected_index);

        });



        $(window).scroll(function() {

            if($(window).scrollTop() == $(document).height() - $(window).height()) {
              console.log("you hit rock bottom");
              $(window).unbind('scroll');
            fb.get_images(fb.p_next_url);
          }

        });


      } // Sucess response end

    }); // Ajax End

  },
  "show_images" : function(arr, target_element) {


    photo_album_html = "";

    for (i = 0; i < arr.length; i++) {

      img_url = arr[i].images[2].source;

      // response.data[i].images[2].source

      if(i % 3 == 0) {
      
        photo_album_html += "<div class='row'> \
                              <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'> \
                                <i class='album_photo' data-photo-index="+fb.photo_index+" style='background-image: url("+img_url+")'> </i> \
                              </div>";

      }

      else if(i % 3 > 0 && i % 3 < 2) {
        photo_album_html += "<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'> \
                                <i class='album_photo' data-photo-index="+fb.photo_index+" style='background-image: url("+img_url+")'> </i> \
                             </div>";
      }

      else if(i % 3 >= 2) {
        photo_album_html += "<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'> \
                                <i class='album_photo' data-photo-index="+fb.photo_index+" style='background-image: url("+img_url+")'> </i> \
                             </div> </div>";
      }

      fb.photo_index = fb.photo_index + 1;


      if(i + 1 == arr.length ) {
        
        $(target_element).append(photo_album_html);

      } // if statement 
    } //show images loop end
  },
  "open_modal" : function(photo_index) {

    fb.active_photo = parseInt(photo_index);


    $('body').css("overflow", "hidden");


    //Open the Modal
    $('.image-modal').css({
      "display": "inline"
    });

     $('.image-stage').append('<img src="'+fb.photos[photo_index]+'" />');


    // When Next is Clicked. Show the next Photo
    $('#modal-next').click(function() {

        if(fb.active_photo + 1 > fb.photos.length - 1 ) {
          return false;
        }

      $('.image-stage img').remove();
      fb.active_photo = fb.active_photo + 1;
      $('.image-stage').append('<img src="'+fb.photos[fb.active_photo]+'" />');

    });

    // When Prev is clicked, Show the pervious photo
    $('#modal-prev').click(function() {

      if(fb.active_photo - 1 < 0 ) {
        return false;
      }

      $('.image-stage img').remove();
      fb.active_photo = fb.active_photo - 1;

      $('.image-stage').append('<img src="'+fb.photos[fb.active_photo]+'" />');


      //show the new image end
    });

    // When Prev is clicked, Show the pervious photo
    $('#modal-close').click(function(){
      $('#modal-prev').unbind('click');
      $('#modal-next').unbind('click');

      $('.image-stage img').remove();
      $('.image-modal').css("display","none");
      $('body').css("overflow", "scroll");
    });

    // When the user clicks outside of the photo. The modal closes
    $('.image-modal').click(function(e) {

      if($(e.target).is(':not(.image-stage *)')) {

        $('#modal-prev').unbind('click');
        $('#modal-next').unbind('click');

        $('.image-stage img').remove();
        $('.image-modal').css("display","none");
        $('body').css("overflow", "scroll");

      }

  
    });

  }
} // fb-object end





// Problem is wow does not know what to do until the ajax call is finised. therefore its going to crash when it tries to load. 
// do a wow init when the ajx call is finished


      


 

// Initialze the page loading function
fb.get_images(photo_api_url, ".image-container");




</script>