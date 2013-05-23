<?php
$page_title = "Michael Yanovich :: Contact";
$meta = "contact, yanovich";

$content = <<<EOT
You can contact me using the following methods.
<br /><br />
<span class="fontbold"><em>Email:</em></span><br />
<img src="images/mynet.jpg" /><br /><br />
<img src="images/namenum.jpg" /><br /><br />

I use PGP when e-mailing. Please try to sign and encrypt your e-mails to me with my public key, which is located <a href="http://pgp.mit.edu:11371/pks/lookup?op=get&search=0xA06940BDC20EAE1D">here</a>. All e-mails sent by me will be signed. If you receive an e-mail from me that is not signed assumed it has been tampered with and was not sent by me (ie: the origin of the e-mail has been spoofed or altered).
<br /><br />
PGP Fingerprint:
<ul>
    <li>4515 CA81 98B9 AED8 F7BB DAC7 A069 40BD C20E AE1D</li>
</ul>

<span class="fontbold"><em>Site Information:</em></span><br /><br />
My site, yanovich.net, is using an SSL certificate issued by Gandi SAS. If you connect to my site and you see any other certificate with a different fingerprint than below, the connection <span class="fontbold">has been tampered with.</span>
<br /><br />
SSL Certificate Fingerprints:
<ul>
    <li><em>SHA-256:</em> 4E 09 C9 A1 2B 6F B2 62 10 DF 61 8F 9E 05 1A 55 F3 80 64 AB B6 EC 81 CD 18 8F 5E 02 FF FC AD C2</li>
    <li><em>SHA-1: </em> 81 33 76 7C 4E 67 B6 05 6F 54 70 4D 70 FC 0E A4 78 8B 5A 8F</li>
    <li><em>MD5: </em> FD 2D D9 B0 2A 31 83 C4 33 07 91 D1 99 1C 51 84</li>
</ul>
EOT;

include("template.php");
?>
