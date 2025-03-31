FROM thecodingmachine/php:8.2-v4-fpm

# Změna vlastníka (uživatel, pod kterým běží PHP)
COPY --chown=docker:docker ./ /var/www/html/

# Vytvoření cache složky s právy
RUN mkdir -p /var/www/html/var/tmp/cache \
    && chown -R docker:docker /var/www/html/var \
    && chmod -R 775 /var/www/html/var

# Git safe directory
RUN git config --global --add safe.directory /var/www/html

WORKDIR /var/www/html

#traefik symlink
#ln -s /var/www/html /srv/

CMD ["php-fpm"]

EXPOSE 9000
