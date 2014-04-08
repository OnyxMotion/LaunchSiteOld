<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
<!-- <html lang="en"> -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Onyx Motion| Digital Coaching</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/onyx.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body>



  
    <!-- Full Page Image Header Area -->
    <div id="top" class="header">
      <div class="vert-text">
        <h1>Onyx Motion</h1>
        <h3>Players, meet your coach.</h3>
        <a href="#services" class="btn btn-default btn-lg">Buy Now</a>
      </div>
    </div>
    <!-- /Full Page Image Header Area -->
  
    <!-- Intro -->
    <div id="about" class="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h2 style="color:#3a4177;">Onyx is a wearable device that can help you perfect your shooting technique</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- /Intro -->
  
    <!-- Abilities -->
    <div id="services" class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h2>Onyx Abilities</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2 col-md-offset-2 text-center">
            <div class="service-item">
              <i class="service-icon fa fa-fire"></i>
              <h4>Instant</h4>
              <p>We believe feedback is most meaningful to you right after you take the shot.  So that's when we deliver it.</p>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="service-item">
              <i class="service-icon fa fa-refresh"></i>
              <h4>Specific</h4>
              <p>What exactly does "be more consistent" even mean?  We tell you when and where in the shot you're having trouble so you know how you can improve.</p>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="service-item">
              <i class="service-icon fa fa-signal"></i>
              <h4>Insights</h4>
              <p>We'll give you metrics, but we'll also convert your movement data into actionable <em>insights</em>. Look, compare, and share with friends</p>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <div class="service-item">
              <i class="service-icon fa fa-shield"></i>
              <h4>Protected</h4>
              <p>Move like you normally do. Onyx is built to be tough and light.  Doesn't hurt that it's got style too.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Services -->

    <!-- Call to Action -->

    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h3>Thanks for hitting us up.</h3>
            <h5> We're building some digital coaches.  If you want a heads up at launch, let us know.</h5>
            <!-- Begin MailChimp Signup Form -->
<!-- <link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css"> -->
<style type="text/css">
  #mc_embed_signup{background:#3a4177; clear:left; font:14px Helvetica,Arial,sans-serif; }
  /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
     We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="http://onyxmotion.us8.list-manage.com/subscribe/post?u=1f849069c3254cfa3d6ca050a&amp;id=fe937a6f51" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
  
  <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="all-star@onyxmotion.com" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_1f849069c3254cfa3d6ca050a_fe937a6f51" value=""></div>
  <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-default btn-primary"></div>
</form> <!-- end form -->
</div> <!-- end signup form -->
</div> <!-- end column -->
</div> <!-- end row --> 
</div> <!-- end container -->
</div> <!-- end call to action -->

<!--End mc_embed_signup-->
    <!-- /Call to Action -->
    
    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <ul class="list-inline">
              <li><i class="fa fa-facebook fa-3x"></i></li>
              <li><i class="fa fa-twitter fa-3x"></i></li>
            </ul>
            <hr>
            <p>&copy; Onyx Motion 2014</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- /Footer -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
    <script>
        $("#menu-close").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
    </script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
    </script>
    <script>
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
            || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
    </script>

    <script>
    $(window).resize(function(){
    var windowWidth = $(window).width();
    var imgSrc = $('#backgroundImage');
    if(windowWidth <= 800){         
        imgSrc.attr('src','basketball.jpg');
    }
    else if(windowWidth > 800){
        imgSrc.attr('src','golf.jpg');
    }
});
    </script>

  </body>

</html>