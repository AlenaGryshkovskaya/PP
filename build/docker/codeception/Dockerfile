FROM codeception/codeception:2.4.2

ENV DEBIAN_FRONTEND noninteractive

ENV YII2_SECRET=./config/secret.php
ENV YII2_SECRET_SAMPLE=./config/secret.sample.php
ENV DOCKERIZE_VERSION v0.6.1

RUN apt-get update && apt-get -y install --no-install-recommends apt-utils

# Install required system packages
RUN apt-get -y install \
        libxml2-dev wget && \
        apt-get clean && \
        rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Install php extensions
RUN docker-php-ext-install \
    soap


RUN wget https://github.com/jwilder/dockerize/releases/download/$DOCKERIZE_VERSION/dockerize-linux-amd64-$DOCKERIZE_VERSION.tar.gz \
    && tar -C /usr/local/bin -xzvf dockerize-linux-amd64-$DOCKERIZE_VERSION.tar.gz \
    && rm dockerize-linux-amd64-$DOCKERIZE_VERSION.tar.gz


COPY docker-entrypoint.sh /docker-entrypoint.sh

RUN chmod +x /docker-entrypoint.sh

CMD ["codecept"]

# , "-wait", "http://firefox:4444/wd/hub/status", "-wait", "tcp://web.test:80/"
ENTRYPOINT ["dockerize", "-wait", "tcp://db:5432", "-wait", "tcp://web.test:80/", "-wait", "tcp://web.test:80/", "-timeout", "30s", "/docker-entrypoint.sh"]

