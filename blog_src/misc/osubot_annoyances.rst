Little Quarks about OSUBot's IRC Logs
#####################################

:date: 2011-08-20 08:00
:tags: OSU, irc
:author: Michael Yanovich

Here is a list of reasons for and against relying on OSUBot for logging of the OSU Open Source Club's IRC channel.

**Cons**

* OSUBot does not handle unicode.

  **For example:**
    * *(04:59): (jenni): U+221E INFINITY ()*, link_

* The raw IRC logs shows internal messages of OSUBot that should probably be in another log file.

  **For example:**
    * *[20:27] OSU_OSC_Bot joined #osc_test.*

  This is in the log file for #osu_osc. This clearly does not belong in this file.

* "*[18:23] Last message repeated 1 time(s).*" -- instead of being verbose and saying what the previous line was it'll display this instead.

* When the `CS&E <http://www.cse.ohio-state.edu/>`_ or OSU network goes down so does access to our website, which in turn means we lose access to our IRC logs as well.

* The script that updates the web page does not update as quickly as logger_osu.

* The pretty print logs do not have clickable links, nor easy references to give messages (such as in-page bookmarks).

* The generated URL for the pretty-print logs are impractical. It is using DD-MM-YYYY. YYYY-MM-DD would make more sense.


------------

**Pros**

* More than one person has remote access to the machine that is running OSUBot.

* IRC Nicks are highlighted on the web page. (Not OSUBot's job, but the PHP script that interprets the raw logs)

* The IRC logs are integrated within the club's website.

* Logger_osu's logs rely on my website staying up.

.. _link: http://opensource.osu.edu/logread/20-08-2011
