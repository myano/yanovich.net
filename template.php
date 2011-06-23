<!DOCTYPE html>
<html>
    <head profile="http://www.w3.org/2005/10/profile">
        <META NAME=”ROBOTS” CONTENT="NOARCHIVE" />
        <link href="style.css" rel="stylesheet" type="text/css" />

        <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
        <meta name="keywords" content=" <?php echo $meta; ?> ">
        <title> <?php echo $page_title; ?> </title>
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-21129437-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>

    <body>
        <!-- <a id="tooCool" href="http://www.w3junkies.com/toocool/">Too Cool for Internet Explorer</a> -->
        <div id="header">
            <!--
                This contains the sweet "logo."
            -->
            <?php include("header.php"); ?>
        </div>

        <div id="bgimg">
        <!--
            This contains the sweet background image!
            I got the background image from: http://www.flickr.com/photos/39520300@N02/3686845268/
            The background image belongs to: coton00 from flickr.com
            The original license is: http://creativecommons.org/licenses/by/2.0/deed.en
        -->

            <div id="navigation">
                <!--
                    Navigation goes here!
                -->
                <?php
                    include("navigation.php");
                ?>
            </div>

            <div id="content">
                <!-- 
                    Content goes here!
                -->
                <?php
                    include($content);
                ?>
            </div>

        </div> 
            
        <div id="footer">
        <!--
            This is the footer.
        -->
        <?php
            include ("footer.php");
        ?>
        </div>

    </body>
</html>
