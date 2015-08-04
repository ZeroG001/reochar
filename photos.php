<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <title>Events</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="includes/css/bootstrap/css/bootstrap.min.css">
    <link href="includes/pagestorm/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="includes/pagestorm/css/coin-slider.css" />
    <script type="text/javascript" src="includes/pagestorm/js/cufon-yui.js"></script>
    <script type="text/javascript" src="includes/pagestorm/js/cufon-marketingscript.js"></script>
    <script type="text/javascript" src="includes/pagestorm/js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="includes/pagestorm/js/script.js"></script>
    // <script type="text/javascript" src="includes/pagestorm/js/coin-slider.min.js"></script>

    <?php
      function getAccessToken() {
       $aCode = file_get_contents('https://graph.facebook.com/oauth/access_token?client_id=866515813415087&client_secret=5c19dd551cc00c0003fa196371dde23f&grant_type=client_credentials');
        return $aCode;
      } 

      
      $access_token = getAccessToken();
      $fields = "id,name,description,link,count" # ,source - for the actual photo source;
      $fb_page_id = "1456387134662284";

      // $json_link = "http://graph.facebook.com/v2.4/${fb_page_id}/albums?fields=${fields}&access_token=${access_token}";
      // $json = file_get_contents($json_link);
      // $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

      // $album_count = count($obj['data']);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/v2.4/${fb_page_id}/albums/?fields=${fie}&${access_token}");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $json = curl_exec($ch);
        curl_close($ch);

        $results = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);


    ?>

</head>

<body>
  <script>
    // window.fbAsyncInit = function() {
    //   FB.init({
    //     appId      : '866515813415087',
    //     xfbml      : true,
    //     version    : 'v2.4'
    //   });
    // };

    // (function(d, s, id){
    //    var js, fjs = d.getElementsByTagName(s)[0];
    //    if (d.getElementById(id)) {return;}
    //    js = d.createElement(s); js.id = id;
    //    js.src = "//connect.facebook.net/en_US/sdk.js";
    //    fjs.parentNode.insertBefore(js, fjs);
    //  }(document, 'script', 'facebook-jssdk'));


    // // Only works after `FB.init` is called
    // function myFacebookLogin() {
    //   FB.login(function(){}, {scope: 'publish_actions'});
    // }


  </script>



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

            <div class="post_content">
              
              <!-- Place Content Here -->
              <?php 
                echo $results['data']['0']['name'] . "Is the results";

              ?>
              <br />
              <br />

              <?php echo "<pre>". var_dump($results) ."</pre>"?>
              <img src="https://scontent.xx.fbcdn.net/hphotos-xtf1/v/t1.0-9/p180x540/11800293_1466974053603592_5270214876830849984_n.jpg?oh=b410a8945662e2fc95deb3aaafb7cdd5&oe=56509103" alt="didn't load">



              <!-- end place content -->


            </div>

            <div class="clr"></div>
          </div>

        </div>

        <div class="sidebar">
          <div class="gadget">
            <h2 class="star">Upcoming Events</h2>

            <!-- Load Sidebar from one spot -->
            <script type="text/javascript">
            (function(){
              $('.gadget').load("layout_sidebar_right.asp");
            })();
            </script>
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
  <script type="text/javascript">
  ( function(){ $('#footer').load("charity_site_bottom_frame.htm"); })();
  </script>
</div>
<!-- Footer End --> 

</div> <!-- Main -->
</body>
</html>
