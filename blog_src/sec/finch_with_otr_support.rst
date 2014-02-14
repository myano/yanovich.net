Installing the OTR (Off The Record) plugin for Finch
####################################################

:date: 2012-01-27 21:00
:tags: pidgin, finch, security
:author: Michael Yanovich

I've been using Finch on a server to stay connected to chat. Until recently I haven't had a need to communicate with anyone using pidgin's infamous OTR plugin. At first I thought I could simply install 'pidgin-otr' from Debian's repositories and finch would automatically get the ability to use it. I quickly realized this was not the case. I went searching the web and found a few files and bits and pieces of instructions on how to get this installed. Here is how I got it working:

I've done this on Debian 6.0 (stable) and Ubuntu 10.04. Also **aptitude** and **apt-get** are practically the same thing on Ubuntu and Debian, use which ever one makes you more comfortable.

First I downloaded the source of the latest version of these libraries and software:

* libgpg-error 1.9  [ftp://ftp.gnupg.org/gcrypt/libgpg-error/]
* libgcrypt 1.5.0   [ftp://ftp.gnupg.org/gcrypt/libgcrypt/]
* libotr 3.2.0-2    [http://otr.cypherpunks.ca/]
* pidgin 2.10.1     [http://pidgin.im/]
* purple-otr        [https://gitorious.org/purple-otr]

Here are the versions of relevant software packages that I used.

* libgpg-error [1.9]
* libgcrypt [1.5.0]
* libotr [3.2.0-2]
* libotr-dev [3.2.0-2]
* libglib2.0-0 [2.24.2-1]
* libglib2.0-dev [2.24.2-1]
* pidgin [2.10.1]

First thing I would recommend would be to remove any installation of pidgin that you currently have:

.. code-block:: BashLexer

    $ sudo aptitude remove pidgin

Then I would recommend installing the following packages:

.. code-block:: BashLexer

    $ sudo aptitude install intltool glibc-2.11-1 glibc glibc-2 glibc-2.11-1 libglib2.0-dev libxml2-dev libidn11-dev libmeanwhile-dev gnutls-bin gnutls-dev tk tk-dev libgtk2.0-dev libgtkspell-dev git

I came up with this list after re-running the ``./configure``'s for the above packages since I compiled many of them from source.

To keep files organized I downloaded everything to ``/opt/pidgin/`` and then extracted everything there.

After installing all those packages from the repository, I then did the following:

.. code-block:: BashLexer

    $ wget ftp://ftp.gnupg.org/gcrypt/libgcrypt/libgcrypt-1.5.0.tar.gz
    $ wget ftp://ftp.gnupg.org/gcrypt/libgpg-error/libgpg-error-1.9.tar.gz
    $ wget http://sourceforge.net/projects/pidgin/files/Pidgin/2.10.1/pidgin-2.10.1.tar.bz2
    $ git clone git://gitorious.org/purple-otr/purple-otr.git
    $ wget http://developer.pidgin.im/raw-attachment/ticket/14818/0001-Add-conversation_extended-menu-support-to-finch.patch
    $ wget http://developer.pidgin.im/raw-attachment/ticket/14818/0001-Add-conversation-extended-menu-support-to-finch.patch
    $ wget http://developer.pidgin.im/raw-attachment/ticket/14820/0001-Fix-searchresults-close.patch
    $ wget http://developer.pidgin.im/raw-attachment/ticket/14821/0001-Fix-searchresults-labeled-buttons.patch
    $ wget http://developer.pidgin.im/raw-attachment/ticket/14822/0001-Fix-insertion-order-in-searchresult_new_rows.patch

Now you should have a directory that looks like this:

.. code-block:: TextLever

    $ ls -hal
    -rw-rw-r--  1 yano yano 1.7M Jan 27 18:10 libgcrypt-1.5.0.tar.gz
    -rw-rw-r--  1 yano yano 535K Jan 27 18:11 libgpg-error-1.9.tar.gz
    -rw-rw-r--  1 yano yano 9.6M Dec 10 14:51 pidgin-2.10.1.tar.bz2
    drwxr-xr-x  7 yano yano 4.0K Jan 27 20:07 purple-otr

The order you have to install these in is *libgpg-error*, *libgcrypt*, *pidgin*, and then *purple-otr*.

To install them, you'll need to individually extract and then compile them. The first two are rather easy:

.. code-block:: TextLever

    $ tar xafv libgpg-error-1.9.tar.gz && cd libgpg-error-1.9/ && ./configure && make && sudo make install
    $ tar xafv libgcrypt-1.5.0.tar.gz && cd libgcrypt-1.5.0/ && ./configure && make && sudo make install

If you are on a server and don't want all the bells and whistles of pidgin you can add some arguments to ``./configure``. Here is how I installed *pidgin*:

.. code-block:: TextLever

    $ tar xafv pidgin-2.10.1.tar.bz2; cd pidgin-2.10.1/
    $ patch -p1 < ../0001-Add-conversation_extended-menu-support-to-finch.patch
    patching file finch/gntconv.c
    patching file finch/gntconv.h
    patching file finch/libgnt/gntmenuitem.h
    patching file pidgin/gtkconv.c

    $ patch -p1 < ../0001-Add-conversation-extended-menu-support-to-finch.patch
    patching file finch/Makefile.am
    patching file finch/gntblist.c
    patching file finch/gntconv.c
    Hunk #2 succeeded at 414 with fuzz 1 (offset 10 lines).
    Hunk #3 succeeded at 678 (offset 72 lines).
    Hunk #4 FAILED at 698.
    Hunk #5 succeeded at 992 with fuzz 2 (offset 83 lines).
    Hunk #6 FAILED at 1513.
    2 out of 6 hunks FAILED -- saving rejects to file finch/gntconv.c.rej
    patching file finch/gntconv.h
    Reversed (or previously applied) patch detected!  Assume -R? [n] y
    patching file finch/gntmenuutil.c
    patching file finch/gntmenuutil.h

    $ patch -p1 < ../0001-Fix-searchresults-close.patch
    patching file finch/gntnotify.c

    $ patch -p1 < ../0001-Fix-searchresults-labeled-buttons.patch
    patching file pidgin/gtknotify.c

    $ patch -p1 < ../0001-Fix-insertion-order-in-searchresult_new_rows.patch
    patching file finch/gntnotify.c

    $ ./configure --disable-screensaver --disable-gstreamer --disable-vv --disable-avahi --disable-dbus
    $ make && sudo make install

If you get, **Warning: You have an old copy of Pidgin at /usr/local/bin/pidgin.** at the end of running the ``./configure``, simply rename the file to something else. For example, ``sudo mv /usr/local/bin/pidgin /usr/local/bin/pidgin_bak``.

One thing I did run into on the Ubuntu machine was this:

.. code-block:: TextLever

     cd . && /bin/bash /opt/pidgin/purple-otr/missing --run automake-1.11 --gnu
     Makefile.am:10: Libtool library used but `LIBTOOL' is undefined
     Makefile.am:10:   The usual way to define `LIBTOOL' is to add `AC_PROG_LIBTOOL'
     Makefile.am:10:   to `configure.ac' and run `aclocal' and `autoconf' again.
     Makefile.am:10:   If `AC_PROG_LIBTOOL' is in `configure.ac', make sure
     Makefile.am:10:   its definition is in aclocal's search path.
     make: *** [Makefile.in] Error 1

If you get that error message, run: ``aclocal`` and then ``autoconf``, then start over with ``./configure`` and proceed with ``make``, and then ``sudo make install``.

The main reason I disabled these options is because I'm running finch inside tmux on the server. Also I don't believe many of these features that I disabled would work through ssh and tmux, as I ssh into a different box and then pull up tmux to see finch.

If you really want support for these things I have disabled and you don't have the packages installed, the output of ``./configure`` will tell you what to install. Though you'll need to search your repository for your distribution specific package to install the package. I ran into a few things like not having the development libraries for perl. It seemed to work fine with the version of perl's development libraries in Debian's repository.

Continuing onward!

.. code-block:: TextLever

    $ cd purple-otr/
    $ ./configure
    $ make && sudo make install

After installing *purple-otr*, **Off The Record** will now be available as a plugin in finch.

**AFTER NOTES:**

Getting this installed was pretty easy. However, to get it workable I have been unsuccessful at. When messaging people initially finch will pop up with a window about generating a new key and lock up. It seems to only respond to *ctrl+c*. Though from few tests I have done it with it, it always locks up when messaging someone even if the key as supposedly already been generated. 
