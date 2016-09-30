FROM alpine:latest

RUN	\
	apk update && \
	apk upgrade && \
	apk add --update bash php5 php5-curl php5-json

WORKDIR /root/quaderno-php
ADD . .

ENTRYPOINT ["/usr/bin/php"]