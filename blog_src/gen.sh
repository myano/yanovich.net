rm -rf /var/www/yanovich.net/public/blog/
mkdir /var/www/yanovich.net/public/blog/
mkdir /var/www/yanovich.net/public/blog/theme
pelican -D -s /var/www/yanovich.net/public/blog_src/pelican.conf.py /var/www/yanovich.net/public/blog_src/ -o /var/www/yanovich.net/public/blog/
