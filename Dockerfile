FROM alpine:latest

RUN	\
	apk update && \
	apk upgrade && \
	apk add --update bash php php-curl php-json

WORKDIR /root/quaderno-php
ADD . .

ENTRYPOINT ["/usr/bin/php"]