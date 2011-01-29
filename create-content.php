<pre>
<span style="font-size:14px;">
This file was created by Michael S. Yanovich from The Ohio State University Open
Source Club http://opensource.cse.ohio-state.edu/~yanovich/

Revision 0.7 created 2010 February 24
Last Modified: 2010 May 4

I) BASICS

        Creating a phenny module is simple and fun! This document is laid out in
        the following format; 
        I)      Basics
        II)     How To Get Started
        III)    Create A Module
        IV)     Functions in a Module
        V)      Commands, Rules, Events, and Priorities (Oh my!)
        VI)     Documenting Your Module
        VII)    Built-In Functions, Constants, and Variables
        IIX)    Add Global Variables
        IX)     Further Reading
        X)      Author's Comments

II) HOW TO GET STARTED

        Before you can get started you need to have a fork of phenny on your co_
        mptuer. You can obtain a copy of phenny at http://inamidst.com/phenny/
        You can also obtain a different fork (if you wish) from The Ohio State 
        University Open Source Club: http://opensource.cse.ohio-state.edu/git/

        Regardless of which fork you have you can create modules for either or. 
        I won't go through the instructions of installing phenny since those are
        already included in both phenny packages.

        Also I'm assuming you now the complete basics about Phenny, (ie: what 
        language she is written in; how to set her up; how to config her, etc.)

III) CREATE A MODULE

        The very first step in creating a module is to open up your text editor
        of choice and save the file in your phenny/modules folder. (Assuming you
        haven't changed the default location of where modules will be placed for
        phenny.) As far as I am aware there really isn't a convention already in
        place for how to name your files. The way I recommend doing it is to 
        summarize what the goal of the whole file will accomplish or does. Later 
        one you will see that if you have a collection of functions you might
        want to name the file for what the collection collectively does or 
        accomplishes. 

        Once you have saved your file you now have created a file that phenny
        can "reload" in a chat room with the admin commands. So for example lets
        say you have created a file hello_world.py without restarting phenny you
        can simply go into a chat room she is sitting in and run the command 
        "phenny: reload hello_world" but change "phenny" to whatever her nick is
        on the server you are running her on.

        NOTICE: When you reload a module in the chat room or via private message
        you do NOT specify the extension.

        FOLLOW ALONG: Now go create a "hello_world.py" file in your modules fol_
        der and then reload it in your chat room. If it were successful you will
        see a message along these lines:

                nick: module 'hello_world.py' from '/home/nick/phenny/modules/h
                ello_world.py' (version: 2010-02-18 02:00:00)

        Now what this all means is that it has successfully loaded the module
        from your path where phenny is located at. The version is the time and 
        date that the file was last modify. The 'nick' mentioned above is your
        irc nick that you are using to administer phenny.

        NOTE: You can use anything that is included in your current library of 
        Python that is locally installed on the computer in which you are runni_
        ng phenny. Which means you can use modules, such as MATH, PICKLE, 
        SQLITE3, etc.. if they are normally available locally in your Python 
        PATH directories.

IV) FUNCTIONS IN A MODULE

        Now if you have ever done any programming before, especially in python
        then you'll probably know what a function is, if not I would recommend
        you pick up a book about programming (or try several great e-books) to 
        learn about the wonderful world of programming.

        Now the way functions work in Python is like this:

                def function_name(myvar1, myvar2):

        "def" is how you declare that this is a function and obviously "function
        _name" is the name of the function. Please try to keep your function
        names descriptive and short so if you share your code it will be easy to
        understand by fellow programmers. 

        Also "myvar1" and "myvar2" are the incoming variables into this functio_
        n. However, for most of the functions you'll be creating with phenny it
        will look like this:

                def helloworld(phenny, input):

        Here you need to always (unless you know what you are doing) include
        "phenny" and "input." "phenny" brings into scope the variables and 
        accessor you'll need in order for phenny to do what you want her to do.
        The "input" variable is what listens and brings into scope certain vari_
        ables that are usually used to trigger the function. You'll see in the
        next section on how to 'trigger' a function. I'll also show an example
        of a working module you can use to test.

V) COMMANDS, RULES, AND PRIORITIES (OH MY!)

        Ok this is where, in my opinion, the most fun starts. Using commands you
        can get phenny to actually compute a given function and "say" things in 
        the irc chat room. I'm going to display an example of a fully working
        module and I'll break down the pieces of what each thing does so you'll
        better understand what exactly is going on.

                def helloworld(phenny, input):
                        phenny.say("Hello world!")
                helloworld.commands = ['hello']
                helloworld.priority = 'medium'

        Figure 5-1

        If you saved the above code into a hello_world.py file in your modules
        directory of phenny and then loaded as I mentioned above then why type
        .hello in the chat room she is currently sitting in your phenny bot sho_
        uld she should say "Hello world!" in the chat room.

        The first important thing (and new thing) is the phenny.say command.
        'phenny.say' will basically take any string or python variable that can
        be printed natively to stdout into the chat room. You can even have her
        say variables that of type string, int, etc.. (eg: phenny.say(mystr) )

        The key thing about this example is helloworld.commands = ['hello']
        This basically tells phenny to keep an eye out for anything that begins
        with a ".hello" regardless of what is following it. You could try typing

                .hello 125

        Figure 5-2

        and you'll still get your nice message of "Hello world!" I'll show later
        where you can actually pass those extra stuff into your functions and
        actually use them to manipulate data.

        Another key thing to note about figure 5-1 is the last line. This isn't 
        required for every function but it helps phenny keep things in order
        when a bunch of things are going on. This is really handy when she is
        being used by several different people at the same time. Basically
        inside phenny's guts she runs all commands in the following order based
        on priority. High, Medium, then low. All high commands will execute bef_
        ore all medium commands, and all medium commands will execute before all
        low commands. But this order is only done when there are commands being
        requested to be executed. Unless you build a function that is of utmost
        importance to the operation of phenny, you'll most likely want to give
        the function a medium priority. If you are doing something really obscu_
        re then you can get away with a low priority. 

        RULES
        I've saved the best for last! 

        Rules can be tricky, because they aren't as easy as "commands." Because
        they differ in the way they offer more flexibility and you can monitor
        more messages for lines in a chatroom than with commands. Let's say you
        built a function that logs the current channel you are in. But you don't
        know how to have phenny compute your function for every line in the room
        you can do this using rules. 

        A key concept to remember is that you never want to have a function have
        both a "command" and a "rule" defined because there could be an example
        where a certain phrase someone enters could trigger the function twice
        so your output or even data you may be manipulating may be done more ti_
        mes than you want it to be done.

        The most powerful way to use rules are to use them in the form of regul_
        ar expressions. Using regular expressions you actually have more power
        of what "types" of things you are looking for in each line in the room.
        For every message in a chat room on irc that is sent that line is check_
        ed against your rule. If your rule would apply to a line, then your fun_
        ction is called, but if your rule doesn't match a line in a room it sil_
        ently fails. (There is no error message displayed, your function simply
        does not execute.)

        Here is a great example of a "rule" in action.

                def interjection(phenny, input):
                        phenny.say(input.nick + '!')
                interjection.rule = r'$nickname!'
                interjection.priority = 'high'
                interjection.thread = False

        Figure 5-3

        There a few new things in this example. First off is the use of a 'rule'
        to call the function. The r' means that the string of code you enter is 
        to be interpreted as a raw string. In Python this means that the escape
        sequence are different. This makes it easier for you to enter regular 
        expressions without having to double up on some of your characters. 
        Another thing to note, the use of $nickname, is a global variable built
        inside phenny that refers to whatever nickname that you have set for
        phenny in your configuration file. Therefore the regular expression rule
        is keeping an eye out for anyone who types just 'phenny!' in the channel
        where phenny could be the nick of your clone of phenny.

        Another thing to point out is the use of interjection.thread = False.
        This is a cool feature the creator (sbp) has added into phenny.
        Out of the box, phenny is multi-threaded so technically it can use two
        cores on a dual-core machine. But the best part is, you can specifically
        tell a given function not to be "multi-threaded." There are numerous
        occasions where this may be necessary.

        The best tip I can give regarding rules is to take a look at the modules
        that come with phenny out of the box specifically the ping.py and if you
        are using the phenny_osu fork the resp.py module. 

        EVENTS
        Events are basically 'triggers' that will execute your function when the
        specified event that you listed occurs. A perfect example is to have a
        function execute every time someone joins a channel.

                def message_join(phenny, input):
                        ...
                message_join.event = 'JOIN'

        Figure 5 - 4

        You can use either JOIN, PART, NICK, and PRIVMSG. JOIN watches for join
        commands from the IRC server. PART looks for people leaving a channel
        that phenny is currently in. NICK looks for people in the room that have
        changed their nicks, and PRIVMSG is the default and it looks for any
        message sent to the channel or to phenny.

VI) DOCUMENTING YOUR MODULE

        This is probably the most important part of creating a module. This all_
        ows you to make your module easy to understand to other people and it
        also allows you to create examples for other people to see how to use
        your modules in the chat room!

        First off the first 7 lines of your document should be used to create a
        description based off of how the author started it. Here is an example
        of how to start off your brand new module!

                """
                quote.py - Phenny Quote Module
                Copyright 2010, Michael Yanovich, opensource.osu.edu/~yanovich/
                Licensed under the Eiffel Forum License 2.

                http://inamidst.com/phenny/
                """

        Figure 6-1

        Now you don't necessarily have to do everything exactly the same as I
        and sbp have done but it is highly recommend, especially if you would
        like to create your very own fork of the phenny project.

        The second line right after the three double quotes, represents the name
        of the file and a brief title of the file. Then the next line identifies
        the copyright, if you choose to have one, then your name and possibly a
        url to your site. The fourth line represents the type of license you wo_
        uld like to license your module as. Phenny, as a whole, is licensed und_
        er the Eiffel Forum License 2. After reading up on it I prefer to licen_
        se my own modules under this. You make choose any license you would like
        for the modules that you create.

        Then the final line before the last three double quotes, is a URL to the
        original creator's site. I would highly recommend keeping this there, 
        because the author (sbp) deserves as much credit as he does for creating
        phenny completely from scratch. Plus it is good to give credit in the
        open source community!

        DOCUMENTING YOUR FUNCTIONS

        This part is in my opinion very important, especially if you have sever_
        al functions in your module file. You should add a doctype to your main
        function. To do this you simply go to the line right below the declarat_
        ion of your function and using three double quotes ( """ ) type in a
        brief description of what this function does. 

        For example:

                def addpoint(phenny, input):
                        """.addpoint nick - Adds 1 point to the score system
                        for nick."""
                        ...

        Figure 6-2

        A nice but not necessary thing to include in your functions that you
        want to present to the world is the .example property. This displays
        an example you set, when someone messages phenny "help command."

        For example:

                def join(phenny, input):
                        ...
                join.example = '.join #example or .join #example key'

        Figure 6-3

        Here in Figure 6-3, when a user messages phenny, "help join" phenny will
        respond saying ".join #example or .join #example key"

        Next at the very end of your document you are going to want to add the
        following lines of code. This is a small python hack, if you will, that
        prevents some weird things from happening if you tried to run the module
        directly inside of python and not inside phenny. I won't get into the
        specifics as they can get really confusing if you don't completely unde_
        rstand Python.

                if __name__ == _main_:
                        print __doc__.strip()

        Figure 6-4

VII) BUILT-IN FUNCTIONS, CONSTANTS, AND VARIABLES

        Here is an incomplete and growing list of built-in functions that phenny
        has access to that you wouldn't normally find in other Python programs.

        This section is expected to grow with time.

        phenny.nick
                will return the string that represents the current nick of
                phenny running, according to your configuration file.

        phenny.say(myvar)
                will print the contents of the variable "myvar" to the chatroom

        phenny.write(['JOIN'], channel)
                this makes phenny say a JOIN command to the IRC server to the
                join specified channel.

        input.admin
                is a variable of the type of a list, that contains the nicks
                mentioned in the user configuration file under "admin"

        input.group()
                basically it takes everything after the command that was issued 
                for the function and throws it into this variable. However, it 
                really does a dump of the python function match.group. Type of
                variable unknown.

        input.nick
                contains the nick of the person that sent a message that trigge_
                red the function.

        input.sender
                contains a string of what the channel a message was sent from
                this includes the # at the beginning of the channel name.

        f.rule = r'(.*)'
                this rule will trigger the function 'f' every time a message is
                sent to the channel.

IIX) ADD GLOBAL VARIABLES
        If you've been wondering how to have a global variable so you don't have
        to save passwords or api keys in the modules themselves, then this 
        section is for you. The way this is accomplish is we put these 
        "sensitive" variables in the default.py file in the .phenny folder. But 
        to accecss this you need to edit the 'guts' of phenny. This is NOT 
        recommended for new users unless you really know how phenny operates or 
        you at least understand the basic idea of classes in programming. I will
        not go over classes here. 

        The first place we'll stop (assuming you've already started on your 
        module) is in the bot.py file. In this file scroll down a way until you
        see a nice list like the following:

            s = unicode.__new__(cls, text)
            s.sender = origin.sender
            s.nick = origin.nick
            s.event = event
            s.bytes = bytes
            s.match = match
            s.group = match.group
            s.groups = match.groups
            s.args = args
            s.admin = origin.nick in self.config.admins
            s.owner = origin.nick == self.config.owner
            s.logchans = self.config.logged_channels
            s.twitter_username = self.config.twitter_username
            s.twitter_password = self.config.twitter_password
            s.b = self.config.a

        Figure 8-1

        Ok what you see here may differ from what is in your bot.py file. This
        is because the above is from my fork. I personally added the last three
        to the above list for some modules I made. The way you add something to
        this list is you create a variable in your default.py, we'll call it "a"
        then you come on over to the above section in bot.py and do
        s.b = self.config.a
        Now what that line does is this it takes the variable 'a' from default.p
        y and then assigns it to s.b. Then if you want to call that variable 'a'
        from your module you'll call it by "input.b" and it'll pass it to your 
        module. I personally I haven't tested whether it's passed by reference 
        or if it's passed by value. I would be willing to bet it's passed by 
        value to prevent changes from your config.

        That's pretty much it to creating global variables accessible in any
        module. Like I said above please do NOT attempt this if you need an 
        absolutely stable version of phenny and don't know what you are doing.

IX) FURTHER READING

        If you are new to Python and have programming experience in some other
        language I would highly recommend the e-book Dive Into Python. It can be
        found for free at http://diveintopython.org/

        Regardless if you know Python or are comfortable with Python you should
        still read up on Python. I am always learning new and fantastic things
        that one can do with Python. It is truly an amazing language!

X) AUTHOR'S COMMENTS

        If you have any comments or questions, please don't hesitate to ask!

        You can also reach Sean B. Palmer via his website: http://inamidst.com/
</span>
</pre>
