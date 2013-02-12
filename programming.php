<?php
$page_title = "Michael Yanovich :: Learning a New Language";
$meta = "programming, programming language, programming languages";

$content = <<<EOT
<b>I do not own this. I found this at the link mentioned at the bottom and I had kept a local copy for a long time. I thought the original source would still be up but now it just displays a 404 error. So here it is.</b>
<br><br>
I've working knowledge of a bunch of programming languages but job demands to learn a new language frequently in a short time. Instead of reading hundreds manual/book pages, I quickly read 10-15 pages of tutorial or primer. (As you know google is the best search engine to look for such stuff). I keep printed copy of the language syntax reference card handy. (There are many reference cards available over internet. Type in 'language to learn' + 'reference card' in google.)
<br><br>
First of all, get familiar with Compiler, compiler option, editor shortcuts or integrated development environment (IDE). Start with a simple 'Hello World' program. Compile it. Use basic functionalities of debugger like setting break points, printing variable values, moving to the next or specific position, stopping debugger etc.
<br><br>
To grasp basics of a new language quickly, here are the exercises I use. Remember some programs may not good for beginners.
<ol>
<li>Display series of numbers (1,2,3,4, 5....etc) in an infinite loop. The program should quit if someone hits a specific key (Say ESCAPE key).</li>
<br>
<li>Fibonacci series, swapping two variables, finding maximum/minimum among a list of numbers.</li>
<br>
<li>Accepting series of numbers, strings from keyboard and sorting them ascending, descending order.</li>
<br>
<li>Reynolds number is calculated using formula (D*v*rho)/mu Where D = Diameter, V= velocity, rho = density mu = viscosity Write a program that will accept all values in appropriate units (Don't worry about unit conversion) If number is < 2100, display Laminar flow, If it’s between 2100 and 4000 display 'Transient flow' and if more than '4000', display 'Turbulent Flow' (If, else, then...)
</li>
<br>
<li>Modify the above program such that it will ask for 'Do you want to calculate again (y/n),if you say 'y', it'll again ask the parameters. If 'n', it'll exit. (Do while loop) While running the program give value mu = 0. See what happens. Does it give 'DIVIDE BY ZERO' error? Does it give 'Segmentation fault..core dump?'. How to handle this situation. Is there something built in the language itself? (Exception Handling)</li>
<br>
<li>Scientific calculator supporting addition, subtraction, multiplication, division, square-root, square, cube, sin, cos, tan, Factorial, inverse, modulus</li>
<br>
<li>Printing output in different formats (say rounding up to 5 decimal places, truncating after 4 decimal places, padding zeros to the right and left, right and left justification)(Input output operations)</li>
<br>
<li>Open a text file and convert it into HTML file. (File operations/Strings)</li>
<br>
<li>Time and Date : Get system time and convert it in different formats 'DD-MON-YYYY', 'mm-dd-yyyy', 'dd/mm/yy' etc.</li>
<br>
<li>Create files with date and time stamp appended to the name</li>
<br>
<li>Input is HTML table, Remove all tags and put data in a comma/tab separated file.</li>
<br>
<li>Extract uppercase words from a file, extract unique words</li>
<br>
<li>Implement word wrapping feature (Observe how word wrap works in windows 'notepad')</li>
<br>
<li>Adding/removing items in the beginning, middle and end of the array.</li>
<br>
<li>Are these features supported by your language: Operator overloading, virtual functions, references, pointers etc.</li>
</ol>
<br>
Is there something called 'namespace / package / module' supported by your language? (Name mangling) - Read More on this.
<br><br>
Article written by <b>Prashant N Mhatre</b>.
<br><br>
Found at this link a while ago: <a href="http://forums.programming-designs.com/viewtopic.php?pid=3482">http://forums.programming-designs.com/viewtopic.php?pid=3482</a>
EOT;

include("template.php");
?>
