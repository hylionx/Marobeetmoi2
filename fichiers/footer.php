<!-- subscribe -->
<div class="subscribe wthree-sub">
    <div class="container">
        <div class="w3lsfoter-icons social-icon">
            <a href="https://www.facebook.com/profile.php?id=100008738257306&ref=br_rs" class="social-button facebook"><i class="fa fa-facebook"></i></a>
        </div>
    </div>
</div>
<!-- //subscribe -->
<!-- copy rights start here -->
<div class="copy-w3right">
    <div class="container">
        <div class="top-nav bottom-w3lnav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">A propos de nous</a></li>
                <li><a href="location.php">Je loue</a></li>
                <li><a href="reservation.php">Réservez en ligne</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        <p>© 2017 Attire. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    </div>
</div>
<!-- //copy right end here -->
<script src="js/SmoothScroll.min.js"></script>
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();

            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"></script>
</body>
</html>