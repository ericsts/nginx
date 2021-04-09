FROM nginx:1.15.0-alpine

RUN rm /etc/nginx/conf.d/default.conf
COPY ./nginx.conf /etc/nginx/conf.d

#COPY ./nginx-html.conf /etc/nginx/conf.d/nginx.conf
#COPY ./nginx-laravel.conf /etc/nginx/conf.d/nginx.conf
#COPY ./nginx-php.conf /etc/nginx/conf.d/nginx.conf