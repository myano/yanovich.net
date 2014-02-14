# -*- coding: utf-8 -*-

THEME = '/home/yano/dev/pelican-themes/gum'
AUTHOR = u'Michael Yanovich'
SITENAME = u"Yano's Blog"
SITEURL = u'https://yanovich.net'

TYPOGRIFY = True


ARTICLE_URL = '{date:%Y}/{date:%m}/{date:%d}/{slug}/'
ARTICLE_SAVE_AS = '{date:%Y}/{date:%m}/{date:%d}/{slug}/index.html'
YEAR_ARCHIVE_SAVE_AS = '{date:%Y}/index.html'
MONTH_ARCHIVE_SAVE_AS = '{date:%Y}/{date:%m}/index.html'
DAY_ARCHIVE_SAVE_AS = '{date:%Y}/{date:%m}/{date:%d}/index.html'


GITHUB_URL = u'https://github.com/myano/'
DISQUS_SITENAME = u'yanosblog'
REVERSE_CATEGORY_ORDER = True
OUTPUT_PATH = '/var/www/yanovich.net/public/blog/'
RELATIVE_URLS = True
TIMEZONE = 'UTC'

PIWIK_URL = 'yanovich.net/pk/'
PIWIK_SITE_ID = '1'


FEED_RSS = 'feeds/all.rss.xml'
CATEGORY_FEED_RSS = 'feeds/%s.rss.xml'

DEFAULT_LANG = 'en'

STATIC_PATHS = ['images',]

LINKS = [
    ('xkcd', 'https://xkcd.com'),
    ('EFF', 'https://www.eff.org/'),
]


SOCIAL = (
    ('github', 'https://github.com/myano'),
 )


DATE_FORMATS = {
    'en': '%Y-%m-%d %H:%M',
}
