<?php
$page_title = "Michael Yanovich :: HSMM-MESH";
$meta = "hsmm, yanovich, mesh network, amateur radio, ham";

$content = <<<EOT
If you do not know what <a href="http://hsmm-mesh.org/">HSMM-MESH</a> is you should read the "<a href="http://hsmm-mesh.org/just-starting-read-this.html">Starting to use HSMM-MESH™</a>" guide.
<br /><br />
The following is the table from the PDF on the hsmm-mesh.org website of software that the project works on. The PDF can be found <a href="http://hsmm-mesh.org/images/hsmm_docs/WRT54Shop.pdf">here</a>.
<br /><br />
<table border="5">
    <tr>
        <td><strong>Model</strong></td>
        <td><strong>Version</strong></td>
        <td><strong>Comments</strong></td>
    </tr>

    <tr>
        <td>WRT54GS</td>
        <td>1.0 - 3.0</td>
        <td>Most memory (32/8) MB</td>
    </tr>

    <tr>
        <td>WRT54GS<br />WRT54G<br />WRT54GL</td>
        <td>4.0<br />2.0 - 4.0<br />1.0 - 1.1</td>
        <td>16/4 MB</td>
    </tr>

    <tr>
        <td>WRT54G</td>
        <td>1.0</td>
        <td>16/4 MB 5V DC power (Won't tolerate over-voltage)</td>
    </tr>
</table>
<br />
Please note that higher numbered versions of each model are <strong>NOT COMPATIBLE</strong> with HSMM firmware.
EOT;

include("template.php");
?>
