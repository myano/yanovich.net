Title: Starting Fresh with Pelican 3.3
Date: 2013-10-29 04:32
Category: etc
Tags: pelican
Slug: starting-fresh
Author: Michael Yanovich

My blog has been on hiatus for quite some time. It mostly started with different versions of Pelican being available and I was having trouble with my Python versions and various path issues. I'm still not sure how I managed to fix that and exactly what the issue was. I think I might have tried working on it only when I was lacking in sleep. Anyways, I finally got around to picking a theme that I actually like and I've figured out how to modify the theme to my liking.

I've settled on the 'gum' theme available from the [pelican-themes][1] repository. It is based on the [Gumby Framework][2] and is a very clean layout. I did have a few issues with it but they were easily fixed by modifying the theme. The first issue that I came crossed that I seem to find an issue in every theme made for Pelican is that the Disqus support in the theme is only done via "http" and not "https." This was a real easy change to make to the theme as seen [here][3]. My entire site is only available via "https" and anything I run on my site I want to be available only over "https" as well. I don't want my site to contain "mixed-content" unless there is absolutely no alternative. This reminds me of another reason why I procrastinated working on my blog, the last time I tinkered with this, Disqus didn't work well, if at all over "https".

Another change I made to 'gum' was to load the Google Fonts from my server instead of Google's servers. This was inititally done before I was completely settled on having a comment section on the blog. Google's Fonts are available via "https", however, I was trying to reduce the number of external severs being accessed on a page load. The code change for using the local fonts is publicly available [here][4]. This isn't too difficult of a change considering the font.css file is just the @font-face sections from the Google Font's api link that just references all the .woff files. This is an easy modification that can be done whenever you want to load Google Fonts locally from your own server than their servers.

I'm not yet sure on how frequently I'll be contributing to this blog as I often tend to build on sources and then forget about writing about a given topic or lose motivation. We'll see where this goes.


[1]: https://github.com/getpelican/pelican-themes
[2]: http://gumbyframework.com/
[3]: https://github.com/myano/pelican-themes/commit/252e7c2b400b77c0e3879ea265d577db314c4a5d#diff-5877f572e0bfe490d95a4ba5de7fdc04L38
[4]: https://github.com/myano/pelican-themes/commit/252e7c2b400b77c0e3879ea265d577db314c4a5d#diff-36a96eb3f71246b5dcab86851a900becR2
