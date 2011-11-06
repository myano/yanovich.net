<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="style.css" rel="stylesheet" type="text/css" />

        <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
        <meta name="keywords" content=" <?php echo $meta; ?> ">
        <title> <?php echo $page_title; ?> </title>
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

        <script type="text/javascript">/* This script is meant to protect against Moxie Marlinspike's infamous SSLStrip tool - http://www.thoughtcrime.org/software/sslstrip/ - or other similar man-in-the-middle scenarios. Code may be obfuscated to prevent stripping of javascript.*/
        if(_u(0)!="https")if(i(_u(1),"yanovich.net")>0)
        /*if(i(_u(1),"/user")>0)if(i(_u(1),"/admin")>0)if(i(_u(1),"/contact")>0)*/
            if(confirm("Warning: Man-in-the-middle attack detected!\nYou have established a secure connection, but you appear to be using a plaintext connection instead. This most likely means somebody is doing evil things with your internet connection.\n\nAttempting to manually re-establish a secure connection..."))document.location="https:"+_u(1);else{document.write(unescape("%3Cdiv class%3D%22error%22%20align%3D%22center%22%3EConnection%20is%20%3Cu%3Enot%3C%2Fu%3E%20secure.%3Cbr%20%2F%3EPossible%20%3Cabbr%20title%3D%22Man%2Din%2Dthe%2DMiddle%22%20style%3D%22cursor%3Ahelp%22%3EMITM%3C%2Fabbr%3E%20attack%21%3Cbr%2F%3EEvil hacker detected%21%3C%2Fdiv%3E"));var x=_g("edit-name");var y=_g("edit-pass");x.disabled=true;y.disabled=true;}function _u(i){return _l().split(':')[i];}function _d(){return document.location;}function _l(){return _d().toString();}function i(a,b){return a.indexOf(b);}function _g(i){return document.getElementById(i);}
        </script>

    </body>
</html>
