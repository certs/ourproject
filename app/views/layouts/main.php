<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <link rel="stylesheet" href="<?php echo asset('css/style-blue.css') ?>" type="text/css">
            <link rel="stylesheet" href="<?php echo asset('css/style.css') ?>" type="text/css">
                <link rel="stylesheet" href="<?php echo asset('css/nivo-slider.css') ?>" type="text/css">
                    <link rel="stylesheet" href="<?php echo asset('css/tipsy.css') ?>" type="text/css">
                        <link rel="stylesheet" href="<?php echo asset('css/ddsmoothmenu.css') ?>" type="text/css">    

                            <!-- Initialise jQuery Library -->
                            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

                            <script type="text/javascript" src="<?php echo asset('js/nivoslider/jquery.nivo.slider.js') ?>"</script>
                            <script type="text/javascript" src="<?php echo asset('js/cufon/cufon-yui.js') ?>"</script>
                            <script type="text/javascript" src="<?php echo asset('js/cufon/mgopen_modata_400-mgopen_modata_700.font.js') ?>"</script>
                            <script type="text/javascript" src="<?php echo asset('js/cufon/cufon-load.js') ?>"</script>
                            <script type="text/javascript" src="<?php echo asset('js/jquery.cookie.js') ?>"</script>
                            <!--========================= Nivo Slider ====================-->
                            <script type="text/javascript" src="<?php echo asset('js/nivoslider/jquery.nivo.slider.js') ?>"</script>
                            <script type="text/javascript">
                                $(window).load(function() {
                                    $('#slider').nivoSlider({
                                        effect: 'random', //Specify sets like: 'fold,fade,sliceDown'
                                        slices: 15,
                                        animSpeed: 600,
                                        pauseTime: 3000,
                                        directionNav: false, //Next and Prev
                                        directionNavHide: false,
                                        controlNav: true //1,2,3...
                                    });
                                });
                            </script>
                            <script type="text/javascript">
                                jQuery(function($) {
                                    var slide = false;
                                    var height = $('#footer_content').height();
                                    $('#footer_button').click(function() {
                                        var docHeight = $(document).height();
                                        var windowHeight = $(window).height();
                                        var scrollPos = docHeight - windowHeight + height;
                                        $('#footer_content').animate({height: "toggle"}, 1000);
                                        if (slide == false) {
                                            if ($.browser.opera) {
                                                $('html').animate({scrollTop: scrollPos + 'px'}, 1000);
                                            } else {
                                                $('html, body').animate({scrollTop: scrollPos + 'px'}, 1000);
                                            }
                                            slide = true;
                                        } else {
                                            slide = false;
                                        }
                                    });
                                });
                            </script>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    // find the div.fade elements and hook the hover event
                                    $('#attr a').hover(function() {
                                        // on hovering over find the element we want to fade *up*
                                        var fade = $('> .hover', this);

                                        // if the element is currently being animated (to fadeOut)...
                                        if (fade.is(':animated')) {
                                            // ...stop the current animation, and fade it to 1 from current position
                                            fade.stop().fadeTo(300, 1);
                                        } else {
                                            fade.fadeIn(300);
                                        }
                                    }, function() {
                                        var fade = $('> .hover', this);
                                        if (fade.is(':animated')) {
                                            fade.stop().fadeTo(300, 0);
                                        } else {
                                            fade.fadeOut(300);
                                        }
                                    });

                                    // get rid of the text
                                    $('#attr a > .hover').empty();
                                })
                            </script>
                            <script type="text/javascript" src="<?php echo asset('js/jquery.tipsy.js') ?>"></script>
                            <script type="text/javascript">
                                $(function() {
                                    $('#attr a').tipsy(
                                            {
                                                gravity: 's', // nw | n | ne | w | e | sw | s | se
                                                fade: true
                                            });
                                });
                            </script>
                            <script type="text/javascript" src="<?php echo asset('js/ddsmoothmenu.js') ?>"></script> 
                            <script type="text/javascript">
                                ddsmoothmenu.init({
                                    mainmenuid: "menu", //menu DIV id
                                    orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
                                    classname: 'ddsmoothmenu', //class added to menu's outer DIV
                                    //customtheme: ["#1c5a80", "#18374a"],
                                    contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
                                })
                            </script>

                            <title>Maximus | Home page</title>
                            <meta charset="UTF-8">
                                </head>
                                <body>
                                    <div id="wide" class="container">
                                        <div id="top">
                                            <div class="wrap">
                                                <a href="./index.html" class="logo" title="Maximus"></a>
                                                <div id="menu">
                                                    <ul class="ddsmoothmenu">
                                                        <li><a href="/" class="menu-item current" title="home">home</a>
                                                            <ul class="children">
                                                                <li><a href="./index.html">Home Page 1</a></li>
                                                                <li><a href="./index-2.html">Home Page 2</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="./about.html" class="menu-item" title="pages">pages</a>
                                                            <ul class="children">
                                                                <li><a href="./about.html">About</a></li>
                                                                <li><a href="./services.html">Services</a></li>
                                                                <li><a href="./sidebar_left.html">Left Sidebar</a></li>
                                                                <li><a href="./bottom_sidebar.html">Bottom Sidebar</a></li>
                                                                <li><a href="./full_width.html">Full Width</a></li>
                                                                <li><a href="./layouts.html">Layouts</a></li>
                                                                <li><a href="./error_404_page.html">Error 404</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="./blog.html" class="menu-item" title="blog">blog</a>
                                                            <ul class="children">
                                                                <li><a href="./blog.html">Blog Page</a></li>
                                                                <li><a href="./simple_page.html">Simple Page</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="./gallery.html" class="menu-item" title="gallery">gallery</a>
                                                            <ul class="children">
                                                                <li><a href="./gallery.html">Gallery</a></li>
                                                                <li><a href="./gallery-video.html">Video Gallery</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="contact" class="menu-item" title="contact">contact</a></li>
                                                    </ul>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <!-- Begin Header -->
                                        <?php if(Request::path() == "/"): ?>
                                        <div class="header">
                                            <div class="sliderwrap">
                                                <div id="slider">
                                                    <img src="<?php echo asset('images/nivoslider/slider1.jpg') ?>" width="928" height="370" alt="" title="Description for img01" />
                                                    <img src="<?php echo asset('images/nivoslider/slider2.jpg') ?>" width="928" height="370" alt="" title="Description for img02" />
                                                    <img src="<?php echo asset('images/nivoslider/slider3.jpg') ?>" width="928" height="370" alt="" title="Description for img03" />
                                                    <img src="<?php echo asset('images/nivoslider/slider4.jpg') ?>" width="928" height="370" alt="" title="Description for img04" />
                                                    <img src="<?php echo asset('images/nivoslider/slider5.jpg') ?>" width="928" height="370" alt="" title="Description for img05" />
                                                </div>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        
                                        <?php echo $content; ?>
                                        <!-- Begin Footer  -->
                                        <div class="wrap">
                                            <div id="footer_button"></div>
                                            <div class="clear"></div>
                                        </div>
                                        <div id="footer_higher">
                                            <div id="footer_content">
                                                <div class="footbox1">
                                                    <div class="title"><h3>Recent News</h3></div>
                                                    <ul>
                                                        <li><a href="#" title="Donec accumsan lorem ipsum dolor...">Donec accumsan malesuada orcidonec sitmet eros lorem ipsum dolor...</a></li>
                                                        <li><a href="#" title="Amet incon ecteetra magna donec accumsan...">Amet incon ectetuer adipiscing maurse pharetra magna donec accumsan...</a></li>
                                                        <li><a href="#" title="Malesuada orcdo nsec tetuer malesuada...">Malesuada orcdonec umet lorem ipsum dolorconsec tetuer malesuada...</a></li>
                                                    </ul>
                                                </div>
                                                <div class="footbox2">
                                                    <div class="title"><h3>Archives</h3></div>
                                                    <ul>
                                                        <li><a href="#" title="June, 2010">June, 2010</a></li>
                                                        <li><a href="#" title="May, 2010">May, 2010</a></li>
                                                        <li><a href="#" title="April, 2010">April, 2010</a></li>
                                                        <li><a href="#" title="March, 2010">March, 2010</a></li>
                                                        <li><a href="#" title="February, 2010">February, 2010</a></li>
                                                        <li><a href="#" title="January, 2010">January, 2010</a></li>
                                                    </ul>
                                                </div>

                                                <div class="footbox2">
                                                    <div class="title"><h3>Categories</h3></div>
                                                    <ul>
                                                        <li><a href="#" title="Advertising">Advertising</a></li>
                                                        <li><a href="#" title="News">News</a></li>
                                                        <li><a href="#" title="Web Design">Web Design</a></li>
                                                    </ul>
                                                </div>

                                                <div class="footbox3">
                                                    <div class="title"><h3>Email Us</h3></div>
                                                    <form action="" id="FootContact">
                                                        <p><label for="fname">Name:</label><input type="text" id="fname" /></p>
                                                        <p><label for="femail">E-mail:</label><input type="text" id="femail" /></p>
                                                        <p><textarea cols="5" rows="3"></textarea></p>
                                                        <p><input type="submit" value="Submit" title="Submit" /></p>
                                                    </form>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div id="footer_lower">
                                            <div id="footer_info">
                                                <div id="copyright">
                                                    Copyright &copy; 2010  &bull;  MixerTheme  &bull;  All rights reserved
                                                    <span class="valid">Valid xHTML | Valid CSS</span>
                                                </div>
                                                <div id="attr">
                                                    <ul>
                                                        <li><b>Stay Connected</b></li>
                                                        <li><a href="#" class="ico_rss" title="RSS Feed"><span class="hover"></span></a></li>
                                                        <li><a href="#" class="ico_delicious" title="Delicious"><span class="hover"></span></a></li>
                                                        <li><a href="#" class="ico_fliсkr" title="Flickr"><span class="hover"></span></a></li>
                                                        <li><a href="#" class="ico_twitter" title="Twitter"><span class="hover"></span></a></li>
                                                        <li><a href="#" class="ico_facebook" title="Facebook"><span class="hover"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <!-- End Footer  -->
                                </body>
                                </html>