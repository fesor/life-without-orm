FROM php:7.3.0-alpine

ARG ROADRUNNER_VERSION
RUN wget -O /tmp/rr.tar.gz https://github.com/spiral/roadrunner/releases/download/v${ROADRUNNER_VERSION}/roadrunner-${ROADRUNNER_VERSION}-linux-amd64.tar.gz \
    && tar -xzvf /tmp/rr.tar.gz -C /tmp \
    && rm -rf /tmp/rr.tar.gz \
    && cp /tmp/roadrunner-${ROADRUNNER_VERSION}-linux-amd64/rr /usr/local/bin/rr \
    && rm -rf /tmp/roadrunner-${ROADRUNNER_VERSION}-linux-amd

WORKDIR /app

CMD ["rr", "-v", "-d", "-c", "etc/api/roadrunner.yml", "serve"]

