Pastebay Where Art Thou?
########################

:date: 2012-02-08 04:00
:tags: pastebay, tpb, dns
:author: Michael Yanovich

For paste sites I use pastebay on and off with other paste sites. Recently I noticed that pastebay.com (and pastebay.net, pastebay.org) were not loading correctly. I looked a little deeper and noticed that the domain pastebay.com (the primary domain) wasn't resolving to an IP address anymore:

.. code-block:: TextLever

    $ dig pastebay.com +short
    $

Also out of curiosity I tried doing a whois on the domain, which yielded something I haven't seen before, an error message stating "Domain suspended due to Invalid/unconfirmed whois data". Full `WHOIS <http://pastebin.com/nF3LL1QN>`_.

After spending a little while searching the web I stumbled across this `post <http://activepolitic.com:82/News/2012-01-31g/Piratebays_Pastebay_has_been_censored_by_Unknown.html>`_, which mentioned the IP address of pastebay.com, which is `192.121.86.165 <http://192.121.86.165/>`_.

Pulling up the website via the IP address brings up the page with very limited functionality. It appears you can post things, however clicking on the links on the left side or any normal pastebay link that refers to a specific paste does not work when accessing the site via the IP address. However, it appears you can access the pastes if you download them in plain text:

.. code-block:: TextLever

    http://192.121.86.165/pastebay.php?dl=307287

Simply replace *307287* with the paste id you are attempting to access and it'll show up.

However, regarding the domain itself I don't know what happened. However, after spending some time searching the web I found a few relevant links about the site being down. Specifically, `kalgopia <https://webcache.googleusercontent.com/search?sclient=psy-ab&hl=en&site=&q=cache:4bcX20YDRZYJ:http://kalgopia.blogspot.com/2012/01/pastebay-is-taken-down.html+http://kalgopia.blogspot.com/2012/01/pastebay-is-taken-down.html&ct=clnk>`_ and `ctrl.net <http://www.dailychanges.com/ctrl.net/2012-01-27/>`_. The first link shows someone starts associating the down website with recent events. The link of the nameserver shows that the domain is no longer listed at the nameserver and is no longer hosted at ctrl.net.

Interestingly, if one does a *whois* on the IP address, you'll get contact information `Fredrik Neij <https://en.wikipedia.org/wiki/Fredrik_Neij>`_ who is one of the co-founders of `ThePirateBay <https://en.wikipedia.org/wiki/The_Pirate_Bay>`_. Also you'll find that the IP address seems to be coming out of Sweden as well. Both of which are expected considering the history of ThePirateBay.

The best conclusion I can come up with is either the host attempted to contact the webmaster or admin of the website and didn't get a response or someone filed a complaint with the hosting provider about the domain and the DNS entries for the domain were removed. I think if they switch to another nameserver and simply create an A record to point back to the their IP address it'll be back up. Hopefully the site will be back up soon. 

*UPDATE (2012-02-09T05:50):* Pastebay is up. It is accessible at `http://www.pastebay.org/ <http://www.pastebay.org/>`_.
