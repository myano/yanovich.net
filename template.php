<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="/style.css" rel="stylesheet" type="text/css" />

        <meta name="ROBOTS" content="NOARCHIVE"/>
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
        <meta name="keywords" content=" <?php echo $meta; ?> ">
        <title> <?php echo $page_title; ?> </title>
        <!-- <script type="text/javascript">window.location="http://sopastrike.com/strike";</script> -->
    </head>

    <body>
        <?php
            if ($_SERVER['HTTPS'])
            {
                include("/ssl.php");
            }

            $base_path = "/var/www/yanovich.net/public/";
        ?>

        <!-- <a id="tooCool" href="http://www.w3junkies.com/toocool/">Too Cool for Internet Explorer</a> -->
        <div id="header">
            <!--
                This contains the sweet "logo."
            -->
            <?php include($base_path . "header.php"); ?>
        </div>

        <div id="bgimg">
        <!--
            This contains the sweet background image!
            I got the background image from: https://secure.flickr.com/photos/39520300@N02/3686845268/
            The background image belongs to: coton00 from flickr.com
            The original license is: https://creativecommons.org/licenses/by/2.0/deed.en
        -->

            <div id="navigation">
                <!--
                    Navigation goes here!
                -->
                <?php
                    include($base_path . "navigation.php");
                ?>
            </div>

            <div id="content">
                <!--
                    Content goes here!
                -->
                <?php
                    echo $content;
                ?>
            </div>

        </div>

        <div id="footer">
        <!--
            This is the footer.
        -->
            <?php
                include ($base_path . "footer.php");
            ?>
        </div>
        <script type="text/javascript">
          var _paq = _paq || [];
          _paq.push(['trackPageView']);
          _paq.push(['enableLinkTracking']);
          (function() {
            var u=(("https:" == document.location.protocol) ? "https" : "http") + "://yanovich.net/pk/";
            _paq.push(['setTrackerUrl', u+'pk.php']);
            _paq.push(['setSiteId', 1]);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
            g.defer=true; g.async=true; g.src=u+'pk.js'; s.parentNode.insertBefore(g,s);
          })();

        </script>
    </body>
</html>
