// Call back functions




  $(function() {
    $(".rslides").responsiveSlides({
      auto: false,             // Boolean: Animate automatically, true or false
      speed: 500,            // Integer: Speed of the transition, in milliseconds
      timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
      pager: false,           // Boolean: Show pager, true or false
      nav: true,             // Boolean: Show navigation, true or false
      random: false,          // Boolean: Randomize the order of the slides, true or false
      pause: true,           // Boolean: Pause on hover, true or false
      pauseControls: true,    // Boolean: Pause when hovering controls, true or false
      prevText: "<img src='images/circle-left.png' />",   // String: Text for the "previous" button
      nextText: "<img src='images/circle-right.png' />",  // String: Text for the "next" button
      maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
      navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
      manualControls: "",     // Selector: Declare custom pager navigation
      namespace: "rslides",   // String: Change the default namespace used
      before: function(){},   // Function: Before callback
      after: function(){}     // Function: After callback
    });

  });

// Find the class name of the item
  //Class names are numbered. Change the number based on the index number

// Append image to "a" tag
$(document).ready(function(){

  var p_index;

(function(){
  // Get the number of images
  console.log(results.data);
})();
 

// Replce each nav item number with image


  // Photo navation becomes images
  // $('.rslides_tabs li a').each(function(index){
  //          $(this).html("<img src='"+results.data[index].images[3].source+"' class='rslider-nav-images' />");
  // });

  // function moveSlideshowNav() {

  //     // Where the center should be
  //     init_pos = 270;

  //     l_pos = $('.rslides_here').position().left;

  //     $('.rslides_tabs').animate({

  //       left: init_pos - l_pos

  //     });

  // }

  // // When the next button is clicked
  // $('.rslides_nav.next').click(function(){

  //   moveSlideshowNav();

  //  });

  // // When the prev button is clicked
  // $('.rslides_nav.prev').click(function(){

  //   moveSlideshowNav();

  // });


  // When a slideshow item is clicked.
  $('.rslides_tabs li').click(function(){

    moveSlideshowNav();

  });

});
