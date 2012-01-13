#!/usr/bin/env python
# -*- coding: utf8 -*-

import cgitb
cgitb.enable()

import sys, os, re, glob, datetime

def utf8ize(s): 
    nuggets = []
    for nugget in s.split(' '): 
        try: nuggets.append(unicode(nugget, 'utf-8'))
        except: 
            try: nuggets.append(unicode(nugget, 'iso-8859-1'))
            except: nuggets.append(unicode(nugget))
    return ' '.join([n.encode('utf-8') for n in nuggets])

r_colour = re.compile(r'\x03(\d\d)(.*?)\x03')
r_colour2 = re.compile(r'\x19F(\d\d)(.*?)\x1c')

def get_colour(matchobj):
    tempstr = matchobj.group(0)
    base = '<span style="color: %s;">%s</span>'
    result = r_colour.findall(tempstr)
    result = result[0]
    if result[0] in colours:
        return base % (colours[result[0]], result[1])

def get_colour2(matchobj):
    tempstr = matchobj.group(0)
    base = '<span style="color: %s;">%s</span>'
    result = r_colour2.findall(tempstr)
    result = result[0]
    if result[0] in colours:
        return base % (colours[result[0]], result[1])

def encode(text):
    text = utf8ize(text)
    text = text.replace('&', '&amp;')
    text = text.replace('<', '&lt;')
    text = text.replace('  ', '&nbsp;&nbsp;')
    text = text.decode('utf-8')
    text = r_colour.sub(get_colour, text)
    text = r_colour2.sub(get_colour2, text)
    text = text.encode('utf-8')
    return r_uri.sub(r'<a href="\1">\1</a>', text)

r_uri = re.compile(
    r'((ftp|https?)://([^\s<>"\'\[\]),;:.&]|&(?![gl]t;)|[\[\]),;:.](?! ))+)'
)

colours = {
        '00' : 'white',
        '01' : 'black',
        '02' : 'navy',
        '03' : 'green',
        '04' : 'red',
        '05' : 'maroon',
        '06' : 'purple',
        '07' : 'olive',
        '08' : 'yellow',
        '09' : 'lime',
        '10' : 'teal',
        '11' : 'aqua',
        '12' : 'blue',
        '13' : 'fuchsia',
        '14' : 'gray',
        '15' : 'silver',
        }

def log(fn): 
    year = fn[0:4]
    month = fn[5:7]
    day = fn[8:10]

    month = {
        '01': 'January', 
        '02': 'February', 
        '03': 'March', 
        '04': 'April', 
        '05': 'May', 
        '06': 'June', 
        '07': 'July', 
        '08': 'August', 
        '09': 'September', 
        '10': 'October', 
        '11': 'November', 
        '12': 'December'
    }.get(month, '?')
    day = day.lstrip('0')

    print 'Content-Type: text/html; charset=utf-8'
    print 
    print '<!DOCTYPE html>'
    print '<title>#osu_osc %s %s %s</title>' % (day, month, year)
    print '<head>'
    print '<meta charset="utf-8">'
    print '<meta name="robots" content="noindex">'
    # print '<link rel="stylesheet" href="logs2.css">'
    print '''\
<style>
body { font: 14px/19px sans-serif; margin: 1em; max-width: 960px }
h1 { font-size: 24px }
.message .a, .action .a { color: #3636B2 }
.join .a, .join .b { color: #2A8C2A }
.quit .a, .quit .b, .part .a, .part .b { color: #64351F }
.when { color: #000; text-decoration: none }
.when:hover { text-decoration: underline }
/*
.when { padding-right: 5px }
.b a { color: #3636B2; text-decoration: none }
.b a:hover { text-decoration: underline }
*/
.b a { color: #000; text-decoration: underline }
.b a:hover { background: #ffc }
</style>
</head>
'''
    print '<body>'
    print 
    print '<h1>#osu_osc %s %s %s</h1>' % (day, month, year)

    f = open(fn + '.txt')
    for line in f: 
        line = line.rstrip('\n')
        t, content = line.split(' ', 1)
        if content.startswith('***') and ('quit' in content): 
            cls, (a, b) = 'quit', content[4:].split(' ', 1)
            # '***', content[4:]
        elif content.startswith('***') and ('part' in content): 
            cls, (a, b) = 'part', content[4:].split(' ', 1)
            # '***', content[4:]
        elif content.startswith('***') and ('join' in content): 
            cls, (a, b) = 'join', content[4:].split(' ', 1)
            # '***', content[4:]
        elif content.startswith('***'): 
            cls, a, b = 'event', '***', content[4:]
        elif content.startswith('*'): 
            cls, (a, b) = 'action', content[2:].split(' ', 1)
            a = '* ' + a
        elif content.startswith('<'): 
            cls, (a, b) = 'message', content.split(' ', 1)
        else: cls, a, b = 'unknown', '?', content

        fragid = 'T' + t.replace(':', '-')
        output = ['<span class="%s" id="%s">' % (cls, fragid)]
        stamp = '<a href="#%s" title="%s" class="when">%s</a> '
        output.append(stamp % (fragid, t, t))
        output.append('<span class="a">' + encode(a) + '</span> ')
        output.append('<span class="b">' + encode(b) + '</span>')
        output.append('</span><br>')
        print ''.join(output)
    print '</body></html>'

def formatnumber(n): 
    parts = list(str(n))
    for i in range((len(parts) - 3), 0, -3):
        parts.insert(i, ',')
    return ''.join(parts)

def homepage(): 
    print "Content-Type: text/html; charset=utf-8"
    print 
    print """\
<!DOCTYPE html>
<title>#osu_osc Logs</title>
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex">
<style>
@import "http://fonts.googleapis.com/css?family=Lato"; 
body { font: 1.5em/1.5em Lato, sans-serif; margin: 3em 5em }
a { text-decoration: none }
a:hover { text-decoration: underline }
h1 { font: 2.5em/1em Lato }
h1, p { margin: 0 0 36px 0; padding: 0 }
p.nav { font-size: 1.5em }
.contribute { font-size: 16px }
table { margin-left: 1em }
.size { text-align: right; padding-left: 1em }
</style>
<script src="/jquery.js"></script> 
<script> 
$(function () {
    var d = new Date(); 
    var year = d.getFullYear(); 
    var month = d.getMonth() + 1; 
    var day = d.getDate();
    month = month < 10 ? '0' + month : month; 
    day = day < 10 ? '0' + day : day; 
    $('a.today').attr('href', year + '-' + month + '-' + day); 
}); 
</script> 
</head>
<body>
<h1>#osu_osc Logs</h1>
 
<p class="nav"><a href="/">Home</a> &middot; 
<a href="today" class="today">Today</a>

<table>
"""
    filenames = glob.glob('*.txt')
    filenames.sort()
    filenames.reverse()
    today = datetime.date.today()
    for fn in filenames: 
        date = fn[:-4] # fn sans .txt
        txt = date + '.txt'
        sys.stdout.write('<tr><td><a href="./%s">%s</a>' % (date, date))
        if os.path.isfile(txt): 
            size = os.stat(txt).st_size
            sys.stdout.write('<td class="size">%s bytes' % formatnumber(size))
            sys.stdout.write('\n')
            # txt
        # print '</li>'
    print """</table>
      <address>
          <a href="https://opensource.osu.edu">opensource.osu.edu</a>
      </address>
      </body>
      </html>
    """

def main(): 
    fn = os.environ.get('REQUEST_URI', '/').split('/').pop()
    if not fn: homepage()
    else: log(fn)

if __name__=="__main__": 
    main()
