FROM nginx:1.20-alpine
LABEL maintainer="ucan-lab <yes@u-can.pro>"
SHELL ["/bin/ash", "-oeux", "pipefail", "-c"]

ENV TZ=UTC

RUN apk update
RUN apk add --no-cache --virtual g++
RUN apk del gmp-dev libstdc++ && apk add --update --no-cache --repository http://nl.alpinelinux.org/alpine/edge/main libstdc++ gmp-dev

# nginx config file
COPY ./infra/docker/nginx/default.conf /etc/nginx/templates/default.conf.template
COPY ./infra/docker/nginx/nginx.conf /etc/nginx/nginx.conf
COPY ./backend/public /work/backend/public

WORKDIR /work/backend
