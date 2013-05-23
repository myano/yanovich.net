<?php
$page_title = "Michael Yanovich :: Perspectives Notary Server";
$meta = "notary, perspectives server, perspectives servers";

$content = <<<EOT
I run a <a href="http://perspectives-project.org/notary-servers/">Perspectives Notary Server</a>. It is free for anyone to use.
<br /><br />
<a href="http://perspectives-project.org/">What is Perspectives?</a> -- Perspectives is a browser extension that verifies if other servers on the Internet are seeing the same SSL certificate you are being presented with when visiting a site using HTTPS.
<br /><br />
Extensions available: <a href="https://addons.mozilla.org/en-US/firefox/addon/perspectives/">Perspectives (Firefox)</a> and <a href="https://chrome.google.com/webstore/detail/lnppfgdnjafeikakadfopejdpglpiahn">Perspectives (Chrome)</a>
<br /><br />
To add these to your configuration in Firefox, left click on the blue "P" and click "Preferences". Then click "Notary Servers" in the tab section, then copy and paste the lines from below into the "Additional Notary Servers" box and when done click "OK".
<br /><br />
You can use it by adding this to your configuration:
<pre>
78.46.220.130:8080
-----BEGIN PUBLIC KEY-----
MIHKMA0GCSqGSIb3DQEBAQUAA4G4ADCBtAKBrAHH17C/zqdzBW3y8Rov0UVFkme6
Idfd1O7wXckTdbd+bu7rClAFMbGijMlxYmNeavhJfyYmYct89dNlIyrnK9fa5PeL
q1g3zj5XybWi+UYrnwjcsKzCsZrWmqjx4ewICzCRypqj76k73eWwTxJ0F3ZWm/Va
VVe6slBxa/Vz6G/A5lgUUWYnktG9BnwnU1CCbQVE9vKnI/Kfv/mfBXbhkc0knRbR
JpMo07AyY2ECAwEAAQ==
-----END PUBLIC KEY-----
</pre>
<br />
Here are a few other Notary servers I have found across the Internet.
<br />
The first two listesd are run by Nicole Kohler. <a href="https://addons.mozilla.org/en-US/firefox/addon/perspectives/reviews/395307/">Source</a>
<br />
<pre>
heimdal.herokuapp.com:80
-----BEGIN PUBLIC KEY-----
MIHKMA0GCSqGSIb3DQEBAQUAA4G4ADCBtAKBrAGhzbwVcnEaT2Hb9WD9Wvh9CVYu
86w+8ZMdO4KG506K77IsERfIuh84YkE4qoDnjfR7TCQBvreVl81lIh5UE0kzO84X
673risoBebbGCNjXQNu5mWkq2Qp7SuuemeXaYFmkpc06t2n6NvNcS9JVm8KJRqBK
qlwqlFgDuDZPUcYmWoIL4sF9w/3ep9nPSIJYburTdpCaeXPGhMiMzh4E2GnJc3Y2
beezGWtciXUCAwEAAQ==
-----END PUBLIC KEY-----
</pre>
<pre>
nine-eyes.herokuapp.com:80
-----BEGIN PUBLIC KEY-----
MIHKMA0GCSqGSIb3DQEBAQUAA4G4ADCBtAKBrAEw+W1dv0a00gzVqvHa8SafHhpY
ESsCIB8kj4bb1ccXr7u6vaiBN83ssaPi1N/ZNDlyOnqZwopoZGkgzUxMUNzg9P6V
ph9l7ldMu8XGuwmFoHBgEys633EPcrJcs46lfvNz5JRrYnjh0WMkj0VXvVlYla2g
6aAA80+C7u56D2FodNxWscPNpQWUAHDJOnAWr1CI9CNU/rbl5c85KJ7cW6u+LFBm
pXk2xzJ2tq8CAwEAAQ==
-----END PUBLIC KEY-----
</pre>
This notary server is a bit interesting as it supposedly stores the entire CA chain instead of just the certificate. <a href="https://constructibleuniverse.net/">Source</a>
<pre>
notary1.constructibleuniverse.net:8080
-----BEGIN PUBLIC KEY-----
MIHKMA0GCSqGSIb3DQEBAQUAA4G4ADCBtAKBrAFzVqLz5qmyMwd4XuXGPtyDu0VO
hvfpt3fUJz/2bGWRDcWPIZw/1Gzj2VQjDSRXuAnjsnJY46s3P50HDYZ764AYvggd
vD8KjjNv5R5r6jW83bqJJPI2mRJR/Gu0iKZn7H7X8tKuL0qH5ukRAsonYj59qk2N
THZkBtiReqYoMv3+FzxJAbXM3rEp0+x2NzM9MeEA8JwYmCBqXZucDeL8N/WSvqOK
alVDUr82uj8CAwEAAQ==
-----END PUBLIC KEY-----
</pre>
<br />
Quantum Anti-Bogom Sort (QABS) <a href="http://qabs.cz/">Source</a>
<pre>
notary2.qabs.cz:8080
-----BEGIN PUBLIC KEY-----
MIHKMA0GCSqGSIb3DQEBAQUAA4G4ADCBtAKBrAGYNrXeOuExUPjrwisreOZ67ZTT
xaPVLncYrVrvE2Q3KzAqVvGlhyxZMnSLlHlHD5BJsA3bM/15ForpH/dJL+GnONZY
sQdgVdDXH30231bImuOzqBNCqMsTB4hxg9U6a1J4h7sa1eOn5Zz1EbDGuW2+jEcE
0MjqpaYEEW7FZiZOIJQRz4jX26zfGGhtd7txfkZQ26lhiibo9auCxp1tnVJmBX2S
VisNlAuuLM8CAwEAAQ==
-----END PUBLIC KEY-----
</pre>
<br />
Here are a few I found run MIT/CMU. <a href="https://www.cs.cmu.edu/~perspectives/notary_list.txt">Source</a>
<br />
<pre>
hostway.ron.lcs.mit.edu:8080
-----BEGIN PUBLIC KEY-----
MIHKMA0GCSqGSIb3DQEBAQUAA4G4ADCBtAKBrAFiENC/BwZXOfzDOed4Qbvjd/25
MixlCMlRUlfArJAvcjeBRmnY4fdQhi7/VH1qZeTQClegX1FMcuOORD29a4lks12W
iXrh1HxLKxCTkPp5ZLqP8OiNxWqHdEQyinh2ulYFXZHWMlXhlsQKV2T7VsmfS0rL
eukQAWpgGTXhACyZNpOQgjMm1vWEFaIsd2tT59Son7vxyCcaBoFCWv+zRW6kwaoK
i0KgnEHwKwcCAwEAAQ==
-----END PUBLIC KEY-----
</pre>
<pre>
mvn.ron.lcs.mit.edu:8080
-----BEGIN PUBLIC KEY-----
MIHKMA0GCSqGSIb3DQEBAQUAA4G4ADCBtAKBrAFTgU6nDuhi9TDkzypfgaW2ztQb
c9eFlVTiLfUkUCmrfn8FqNzxuYdl/Hin3/Usz443GAvOwx0pXocClZ7Xtve06w6H
xtuWMxAR0VMhywdzotTJAb/4a2btqHdrUlOZg6l7R66GbCupVWwyDQF7YBKarEGF
2v6mRM/WknwaEYVOMu7XDb6zkEf4MsxptQnY7PfNktMMcuhusYjko3IhFmlUl4lu
e+c3aFR35Y8CAwEAAQ==
-----END PUBLIC KEY-----
</pre>
<br />
I don't know much about this one, but it seems to have a good amount of history. <a href="https://georgi.softver.org.mk/blog/2011/08/perspectives-project-https-%D0%BF%D0%BE%D0%B4%D0%BE%D0%B1%D1%80%D0%B5%D0%BD%D0%BE-%D0%B8-%D0%BF%D1%80%D0%BE%D1%88%D0%B8%D1%80%D0%B5%D0%BD%D0%BE/">Source</a>
<pre>
glisha.webfactional.com/perspectivesnotary
-----BEGIN PUBLIC KEY-----
MIHKMA0GCSqGSIb3DQEBAQUAA4G4ADCBtAKBrAFFBupTSd/AtfkxMh3M53GhiAr1
C2uCJJmPQHoOzFqkYDziHCekm55uEPrKOiri3qOfHdDB7zYUAHBv7bA5ozhaA+3y
JdJ6V97u4wxuPOy+IsojK2JHAgKhvF/I5d9l6d4b3fZqzeRNhlaMI20SZlleSzVL
XKgsrK+EQUfRunS1NzlZtl657noMM/MirWkfpc3iYnqX+7bkEDO5cm8PsA27BUMS
nujfPWDgVHUCAwEAAQ==
-----END PUBLIC KEY-----
</pre>
These two haven't responded in a while.
<pre>
cmu.ron.lcs.mit.edu:8080
-----BEGIN PUBLIC KEY-----
MIHKMA0GCSqGSIb3DQEBAQUAA4G4ADCBtAKBrAGXsegzE6E/6j4vgzi3NqGSn2dz
W6gRxkuAL7PB8QmRqtG9ieSQjFB6cTYvkmp7x/LtHqlr9Fa6+/mT4Ma5oKU0RpgY
MyfYnEk0iiNWG2fj4mRpTscHfcEJfKP13OGAYP1ZuHksTXSYsaKfIwiVKMLgQ/hA
FHBSCs9X+bvVMgPOiEpxZXfaynOQ3TLGYtVywLRwW5yvlRq4E9z0rtvwR1bn1hVd
JaJ2Lw7kRVMCAwEAAQ==
-----END PUBLIC KEY-----
</pre>
<pre>
convoke.ron.lcs.mit.edu:8080
-----BEGIN PUBLIC KEY-----
MIHKMA0GCSqGSIb3DQEBAQUAA4G4ADCBtAKBrAHB9gHj3Zyx7u++wTffAsEuRJdj
CZSFocs5ZKVamm6O7ywtFCuPgxxYTr3GyrDKj2IBO05iXirOISyX0OtENvs829Xj
TbKqDgeN1ttDiJmszN939RvBdmzkmXi2zaOXPX3ral56hJOWjOs6NokeBo26ZHux
5k9g3AqFer5LNyDVgGrG5q7+INGodDSTYm2W5nvmi55U/pe7MmJCH7EEY1ObGPr1
7XqZeEbL4ikCAwEAAQ==
-----END PUBLIC KEY-----
</pre>
<br />
EOT;

include("template.php");
?>
