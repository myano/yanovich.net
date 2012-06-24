#!/usr/bin/env python
# -*- coding: utf8 -*-

import cgi
import cgitb
cgitb.enable()

import os

print 'Content-Type: text/html; charset=utf-8\r\n\r\n'
print ''
fn = os.environ.get('REQUEST_URI', '/').split('/').pop()

print """
<!DOCTYPE html>
<html>
    <head>
        <title>
            Logs
        </title>
    </head>
    <body>
        <form action="logs.cgi" method="POST">
            <input type="hidden" name="reqdate" value="%s">
            <table>
                <tr>
                    <td>
                        Are you human?:
                    </td>
                    <td>
                        <script type="text/javascript" src="https://www.google.com/recaptcha/api/challenge?k=6LfaL9MSAAAAAGHsjEXqZ-YnAjgCxorie9q4PANg"></script>
                        <noscript>
                            <iframe src="https://www.google.com/recaptcha/api/noscript?k=6LfaL9MSAAAAAGHsjEXqZ-YnAjgCxorie9q4PANg" height="300" width="500" frameborder="0"></iframe>
                            <br />
                            <textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
                            <input type="hidden" name="recaptcha_response_field" value="manual_challenge">
                        </noscript>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
""" % (fn)

