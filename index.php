<?php
/**
 * Created by PhpStorm.
 * User: josealejandro
 * Date: 30/09/14
 * Time: 10:53 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Yogurt Breeze</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/nivo-slider.css" rel="stylesheet">
    <link href="css/anythingslider.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet" />
    <link href="css/style-cupcake.css" rel="stylesheet">

</head>
<body>
<!-- box9 -->

<div id="header">
    <div class="container">

        <div class="logoContainer">
            <a href="1_home.html"><img src="img/logo.gif" alt=""></a>
        </div>

        <div class="topData">
            <ul class="social">
                <li><a href="#" class="fb">Facebook</a></li>
                <li><a href="#" class="twit">Twitter</a></li>
                <li><a href="#" class="mail">E-mail</a></li>
            </ul>

            <address>
                10727 Narcoossee Rd. Ste B-4 Orlando FL 32832
            </address>

        </div>
        <div class="clearfix"></div>
    </div>
    <!-- container end -->
</div>
<!-- header end -->

<div id="menuContainer">
    <div class="container">
        <?php include 'menu.php'?>
        <div class="clearfix"></div>
    </div>
</div>

<div id="mainContent" class="sliderBack">
<div class="container">
<div class="column1 pull-left">
    <?php include 'slider1Back.php'?>

    <h2 class="hdr1">Surf into a journey of delightful flavors!</h2>
    <!--
    <h3 class="hdr2"><span class="lft"></span>Our precious cupcakes<span class="rt"></span></h3>
    -->
    <div class="slider2">

        <ul id="anythingSlider2">
            <li>
                <div class="setSlider2">
                    <div class="third">
                        <div class="mrgThird">
                            <span class="tx1">Yogu-Frap</span>

                            <p><strong>Yogurt Shakes</strong><br/> Plain yogurt, coffee & caramel.</p>
                            <span class="tx2">only 7.99 $</span>

                            <div class="shadd">
                                <a href="img/content/dish4.jpg" data-rel="lightbox"><img src="img/content/dish4.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="third">
                        <div class="mrgThird">
                            <span class="tx1">Fruity Delight</span>

                            <p><strong>Liquid Nitrogen Ice Cream</strong> Strawberries, Blackberries and Bananas</p>
                            <span class="tx2">only 5.99 $</span>

                            <div class="shadd">
                                <a href="img/content/dish17.jpg" data-rel="lightbox"><img src="img/content/dish5.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="third">
                        <div class="mrgThird">
                            <span class="tx1">Funky Monkey</span>

                            <p><strong>Yogurt Shakes</strong> Plain yogurt, Chocolate syrup, bananas and almonds.</p>
                            <span class="tx2">only 7.99 $</span>

                            <div class="shadd">
                                <a href="img/content/dish17.jpg" data-rel="lightbox"><img src="img/content/dish6.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </li>
            <li>
                <div class="setSlider2">
                    <div class="third">
                        <div class="mrgThird">
                            <span class="tx1">Classic Cheesecake</span>

                            <p><strong>Liquid Nitrogen Ice Cream</strong> Cheesecake bits, strawberries and graham crumbs.</p>
                            <span class="tx2">only 7.99 $</span>

                            <div class="shadd">
                                <a href="img/content/dish17.jpg" data-rel="lightbox"><img src="img/content/dish4.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="third">
                        <div class="mrgThird">
                            <span class="tx1">Breezy Breeze</span>

                            <p><strong>Yogurt Shakes</strong><br/> Plain yogurt, Coconut, Pineapple and Strawberries.</p>
                            <span class="tx2">only 5.99 $</span>

                            <div class="shadd">
                                <a href="img/content/dish17.jpg" data-rel="lightbox"><img src="img/content/dish5.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="third">
                        <div class="mrgThird">
                            <span class="tx1">Chocolate Monster</span>
                            <p><strong>Liquid Nitrogen Ice Cream</strong> Delicious Brownies, chocolate fudge and cookie dough.</p>
                            <span class="tx2">only 7.99 $</span>

                            <div class="shadd">
                                <a href="img/content/dish17.jpg" data-rel="lightbox"><img src="img/content/dish6.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </li>
        </ul>

        <a href="4_menucard1.html" class="link1">OPEN MENU</a>
    </div>
    <!-- slider2 -->



    <hr class="divider1">
</div>

<div class="column2 pull-right">

    <div class="box9">
        <div class="top"></div>
        <div class="mid">
        </div>
        <div class="btm"></div>
    </div>
    <!-- box9 -->

    <div class="box1">
        <div class="top"></div>
        <?php include 'weekly.php'?>
        <div class="btm"></div>
    </div>
    <!-- box1 -->

    <?php include 'lightShad.php'; ?>
    <!-- lightShad -->
</div>
<!-- column2 -->

<div class="clearfix"></div>
</div>
<!-- container -->
</div>


<?php include 'footer.php'; ?>
<!-- footer -->

<script src="js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery.nivo.slider.pack.js"></script>
<script src="js/jquery.arctext.js"></script>
<script src="js/jquery.anythingslider.min.js"></script>
<script src="js/lightbox.js"></script>
<script src="js/contact-form.js"></script>
<script type="text/javascript">

    $(document).ready(function () {

        // init curved header
        $('.curved').arctext({radius:250, rotate:true, dir:1});


        // slider1 init
        $('#slider1Nivo').nivoSlider({
            effect:'random',
            pauseTime:8000,
            captionEasing:'linear',
            slices:15, // For slice animations
            boxCols:8, // For box animations
            boxRows:4, // For box animations
            animSpeed:500, // Slide transition speed
            startSlide:0, // Set starting Slide (0 index)
            directionNav:true, // Next & Prev navigation
            controlNav:true, // 1,2,3... navigation
            controlNavThumbs:false, // Use thumbnails for Control Nav
            pauseOnHover:true, // Stop animation while hovering
            manualAdvance:false, // Force manual transitions
            prevText:'Prev', // Prev directionNav text
            nextText:'Next', // Next directionNav text
            randomStart:false, // Start on a random slide
            beforeChange:function () {
            }, // Triggers before a slide transition
            afterChange:function () {
            }, // Triggers after a slide transition
            slideshowEnd:function () {
            }, // Triggers after all slides have been shown
            lastSlide:function () {
            }, // Triggers when last slide is shown
            afterLoad:function () {
            } // Triggers when slider has loaded

        });


        // init slider2
        $('#anythingSlider2').anythingSlider({
            autoPlay:false,
            expand:true,
            pauseOnHover:true,
            hashTags:false,
            buildNavigation:false,
            buildStartStop:false,
            delay:8000
        });


        // show book a table on click
        $(".box9").hide();

        $("#bkTable").click(function () {
            $(".box9").fadeToggle();

            return false;
        })

        // slide and show iphone book a table box on click
        $(".ipad-box9").hide();

        $(".topBar .bookTable").click(function () {
            $(".ipad-box9").slideToggle();
            return false;
        })


        // show submenu on click

        $("ul.mainMenu li.subMenu ul").hide();

        $("ul.mainMenu li.subMenu > a").click(function () {
            $("ul.mainMenu li.subMenu ul").hide();
            $(this).next('ul').toggle();

            return false;
        });

        // hide submenu when click outside menu container
        $("body").click(function () {
            $("ul.mainMenu li.subMenu ul").hide();
        });

        // lightbox assign validation
        $('a[data-rel]').each(function () {
            $(this).attr('rel', $(this).data('rel'));
        });

    });



</script>


</body>
</html>